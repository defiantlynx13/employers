<?php
defined("ABSPATH") || exit;

add_action("wp_ajax_psituation_staus_data","psituation_staus_data_server_side_callback");
add_action("wp_ajax_pss_insert","pss_insert_server_side_callback");
add_action("wp_ajax_pss_update","pss_update_server_side_callback");


function psituation_staus_data_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;
    $pid=$request['p_id'];

    $column = array(
        'num',
        'date',
        'total',
        'num'
    );

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    global $wpdb;
    $table = $wpdb->prefix .'psituation_status';
    $query = "SELECT * FROM {$table} WHERE pid={$pid} ";

     if (isset($request["search"]["value"]) )
     {
         $query.="AND  num LIKE '%".$request["search"]["value"]."%' ";

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

    foreach($results as $result)
    {
        $sub_array = array();
        $sub_array[] = 'صورت وضعیت شماره '.$result->num;
        $sub_array[] = jdate("Y/m/d", strtotime($result ->date));
        $sub_array[] = $result ->total;

        $temp=new DateTime($result -> date);
        $sub_array[] = '<button type="button" id="se_pss_complete" name="se_pss_complete" class="btn btn-sm btn-primary btn-rounded  mr-1 mb-1" data-id="'.$result->num.'">&nbsp;&nbsp;<i class="icon-paper fa-lg"></i>تکمیل صورت وضعیت</button><button type="button" id="se_pss_edit" name="se_pss_edit" class="btn btn-sm btn-info btn-rounded  mr-1 mb-1" data-id="'.$result->id.'" data-num="'.$result->num.'" data-total="'.$result->total.'" data-timestamp="'.$temp->format('U').'" data-date="'.jdate("Y/m/d", strtotime($result ->date)).'">&nbsp;&nbsp;<i class="icon-pencil3 fa-lg"></i>ویرایش</button>';

        $data[] = $sub_array;

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


function pss_insert_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;

    if (isset($request['p_id'],$request['pss_date']))
    {
        $pid=intval($request['p_id']);
        $epoch1 = $request['pss_date'];
        $dt1 = new DateTime("@$epoch1");  // convert UNIX timestamp to PHP DateTime
        $pss_date= $dt1->format('Y-m-d'); // output = 2017-01-01 00:00:00

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;
        $table = $wpdb->prefix .'psituation_status';

        $temp_query="SELECT total FROM {$table}  WHERE pid={$pid}  ORDER BY total DESC LIMIT 1";
        $total=$wpdb->get_results($temp_query);
        if (empty($total))
        {
            $total=0;
        }
        else
        {
            $total=$total[0]->total;
        }

        $temp_query2="SELECT num FROM {$table}  WHERE pid={$pid}  ORDER BY num DESC LIMIT 1";
        $num=$wpdb->get_results($temp_query2);
        if (empty($num))
        {
            $num=1;
        }
        else
        {
            $num=($num[0]->num)+1;
        }

        if ($wpdb->insert($table,array('num'=>$num,'pid' => $pid,'date' => $pss_date,'total'=>$total))=== false)
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

function pss_update_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;

    if (isset($request['p_id'],$request['pss_id_edit'],$request['pss_date_edit']))
    {
        $p_id=intval($request['p_id']);
        $pss_edit_id=intval($request['pss_id_edit']);
        $pss_edit_date=intval($request['pss_date_edit']);


        $epoch = $pss_edit_date;
        $dt = new DateTime("@$epoch");  // convert UNIX timestamp to PHP DateTime
        $date=$dt->format('Y-m-d');

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;
        $table = $wpdb->prefix .'psituation_status';


            if ($wpdb->update( $table, array( 'date' => $date),array('id' =>  $pss_edit_id)) === false)
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