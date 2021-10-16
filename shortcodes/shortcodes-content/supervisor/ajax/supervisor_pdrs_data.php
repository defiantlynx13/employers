<?php
defined("ABSPATH") || exit;

add_action("wp_ajax_supervisor_pdaily_reports_data","supervisor_pdaily_reports_data_server_side_callback");
add_action("wp_ajax_supervisor_pdr_insert","supervisor_pdr_insert_server_side_callback");
add_action("wp_ajax_supervisor_pdr_delete","supervisor_pdr_delete_server_side_callback");
add_action("wp_ajax_supervisor_pdr_update","supervisor_pdr_update_server_side_callback");


function supervisor_pdaily_reports_data_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;
    $pid=$request['p_id'];

    $column = array(
        'date',
        'min_temp',
        'max_temp',
        'status'
    );

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    global $wpdb;
    $table = $wpdb->prefix .'pdaily_reports';


    $query = "SELECT * FROM {$table} WHERE pid={$pid} ";

    if (isset($request["searchDate"]) AND $request['searchDate'] != "" )
    {
        $epoch1 = $request['searchDate'];
        $dt1 = new DateTime("@$epoch1");  // convert UNIX timestamp to PHP DateTime
        $pfb_date= $dt1->format('Y-m-d'); // output = 2017-01-01 00:00:00
        $query.="AND  date = '". $pfb_date."' ";

    }


    if(isset($request['order']))
    {
        $query .= 'ORDER BY '.$column[$request['order']['0']['column']].' '.$request['order']['0']['dir'].' ';
    }
    else
    {
        $query.=" ORDER BY  date DESC ";
    }
    $results2 = $wpdb->get_results($query);
    $number_filter_row=$wpdb -> num_rows;
    $query1 = '';

    if($request['length'] != -1)
    {
        $query1 = ' LIMIT ' . $request['start'] . ', ' . $request['length'];
    }

    $results = $wpdb->get_results($query.$query1);

    require_once( ABSPATH . 'wp-content/plugins/emp/inc/jdf.php' );

    $data = array();
    $count=1;
    foreach($results as $result)
    {
        $sub_array = array();
//        $sub_array[] = '<td class="text-xs-center" >'.$count.'</td>';
        $sub_array[] = jdate("Y/m/d", strtotime($result ->date));
        $sub_array[] =  $result->min_temp;
        $sub_array[] = $result->max_temp;

        if ($result->status == 'pending')
        {
            $sub_array[] ='<span class="tag tag-default tag-info">منتظر بررسی</span>';
        }
        elseif ($result->status == 'published')
        {
            $sub_array[] ='<span class="tag tag-default tag-success">منتشر شده</span>' ;
        }
        else
        {
            $sub_array[] ='<span class="tag tag-default">نامشخص</span>' ;
        }

        $temp=new DateTime($result -> date);
        $sub_array[] = '<button type="button" id="se_pdr_delete" name="se_pdr_delete" class="btn btn-sm btn-danger btn-rounded  mr-1 mb-1" data-id="'.$result->id.'"  ><i class="icon-android-delete fa-lg"></i>&nbsp;&nbsp;حذف</button><button type="button" id="se_pdr_complete" name="se_pdr_complete" class="btn btn-sm btn-primary btn-rounded  mr-1 mb-1" data-id="'.$result->id.'"><i class="icon-paper fa-lg"></i>تکمیل گزارش &nbsp;&nbsp;</button></button><button type="button" id="se_pdr_edit" name="se_pdr_edit" class="btn btn-sm btn-info btn-rounded  mr-1 mb-1" data-id="'.$result->id.'" data-timestamp="'.$temp->format('U').'" data-max_temp="'.$result -> max_temp.'" data-min_temp="'.$result -> min_temp.'" data-status="'.$result -> status.'" data-date="'.jdate("Y/m/d", strtotime($result ->date)).'">&nbsp;&nbsp;<i class="icon-pencil3 fa-lg"></i>ویرایش</button>';

        $data[] = $sub_array;
        $count++;
    }
    function get_all_data()
    {
        $pid=$_GET['p_id'];
        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;
        $table = $wpdb->prefix .'psituation_status';
        $query = "SELECT * FROM {$table} WHERE pid={$pid}";
        $results = $wpdb->get_results($query);
        return $wpdb -> num_rows;
    }
//    $output=array();
//    $output[0] = array(
//        "draw"    => intval($_GET["draw"]),
//        "recordsTotal"  =>  get_all_data(),
//        "recordsFiltered" => $number_filter_row,
//        "data" => $data
//    );
//    $output[1]=$query.$query1;


    $output = array(
        "draw"    => intval($_GET["draw"]),
        "recordsTotal"  =>  get_all_data(),
        "recordsFiltered" => $number_filter_row,
        "data" => $data
    );


    echo json_encode($output);

    wp_die();
}


function supervisor_pdr_insert_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;

    if (isset($request['p_id'],$request['pdr_date'],$request['pdr_min_temp'],$request['pdr_max_temp']))
    {
        $pid=intval($request['p_id']);

        $epoch1 = $request['pdr_date'];
        $dt1 = new DateTime("@$epoch1");  // convert UNIX timestamp to PHP DateTime
        $pdr_date= $dt1->format('Y-m-d'); // output = 2017-01-01 00:00:00

        $pdr_min_temp=intval($request['pdr_min_temp']);
        $pdr_max_temp=intval($request['pdr_max_temp']);
        $pdr_status='pending';


        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;
        $table = $wpdb->prefix .'pdaily_reports';



        if ($wpdb->insert($table,array('pid' => $pid,'date' => $pdr_date,'max_temp' => $pdr_max_temp,'min_temp' => $pdr_min_temp,'status' => $pdr_status))=== false)
        {
            echo json_encode($wpdb->last_error);
        }
        else
        {
            echo json_encode("اطلاعات با موفقیت ثبت گردید!");
        }
        wp_die();
    }
}


function supervisor_pdr_delete_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;

    if (isset($request['id']))
    {
        $id=intval($request['id']);

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;
        $table = $wpdb->prefix .'pdaily_reports';

        if ($wpdb->delete( $table, array( 'id' => $id )) === false)
        {
            echo json_encode($wpdb->last_error);
        }
        else
        {
            echo json_encode("ایتم مدنظر شما با موفقیت حذف گردید!");
        }
        wp_die();
    }
}



function supervisor_pdr_update_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;

    if (isset($request['p_id'],$request['pdr_id_edit'],$request['pdr_date_edit'],$request['pdr_max_temp_edit'],$request['pdr_min_temp_edit']))
    {
        $p_id=intval($request['p_id']);
        $pdr_id=intval($request['pdr_id_edit']);
        $max_temp=intval($request['pdr_max_temp_edit']);
        $min_temp=intval($request['pdr_min_temp_edit']);


        $epoch = $request['pdr_date_edit'];
        $dt = new DateTime("@$epoch");  // convert UNIX timestamp to PHP DateTime
        $date=$dt->format('Y-m-d');

        $status='pending';
        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;
        $table = $wpdb->prefix .'pdaily_reports';

        $query = "SELECT * FROM {$table} WHERE pid={$p_id} AND id={$pdr_id}";
        $results = $wpdb->get_results($query);

        if($wpdb->num_rows == 0)
        {
            echo json_encode("اطلاعات پروژه و گزارش مطابقت ندارند!");
            wp_die();
        }
        else
        {
            if ($wpdb->update( $table, array( 'date' => $date , 'max_temp' => $max_temp,'min_temp' => $min_temp , 'status' => $status),array('id' => $pdr_id)) === false)
            {
                echo json_encode($wpdb->last_error);
                wp_die();
            }
            else
            {
                echo json_encode("ایتم مدنظر شما با موفقیت ویرایش گردید!");
                wp_die();
            }
        }


    }
}