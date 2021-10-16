<?php
defined("ABSPATH") || exit;

 add_action("wp_ajax_pchart_data","pchart_data_server_side_callback");
 add_action("wp_ajax_pchart_insert","pchart_insert_server_side_callback");
 add_action("wp_ajax_pchart_delete","pchart_delete_server_side_callback");
 add_action("wp_ajax_pchart_update_row","pchart_update_row_server_side_callback");



function pchart_data_server_side_callback()
 {
     header("Content-Type: application/json");
     $request= $_GET;
     $pid=$request['p_id'];

     require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
     global $wpdb;
     $table = $wpdb->prefix .'pchart';
     $columns=array(
         'pid',
         'pchart_name',
         'pchart_plan_start',
         'pchart_plan_end',
         'pchart_exec_start',
         'pchart_exec_end'
     );
     $query = "SELECT * FROM {$table} WHERE pid={$pid} ORDER BY  pchart_plan_start ASC ";
//     if (isset($request["search"]["value"]) and $request["search"]["value"]!="" )
//     {
//         $query.='AND  pchart_name LIKE "%'.$request["search"]["value"].'%"';
//     }

     $results = $wpdb->get_results($query);
     $number_filter_row=$wpdb -> num_rows;

     require_once( ABSPATH . 'wp-content/plugins/emp/inc/jdf.php' );

     $data = array();
     $count=1;
     foreach($results as $result)
     {
         $sub_array = array();
         $sub_array[] = '<td class="text-truncate">'.$count.'</td>';
         $sub_array[] = '<td class="text-truncate">'.$result ->pchart_name.'</td>';
         $sub_array[] = '<td class="text-truncate">'.jdate("Y/m/d", strtotime($result ->pchart_plan_start)).'</td>';
         $sub_array[] = '<td class="text-truncate">'.jdate("Y/m/d", strtotime($result ->pchart_plan_end)).'</td>';
         $sub_array[] = '<td class="text-truncate">'.jdate("Y/m/d", strtotime($result ->pchart_exec_start)).'</td>';
         $sub_array[] = '<td class="text-truncate">'.jdate("Y/m/d", strtotime($result ->pchart_exec_end)).'</td>';

         $temp1=new DateTime($result -> pchart_plan_start);
         $temp2=new DateTime($result -> pchart_plan_end);
         $temp3=new DateTime($result -> pchart_exec_start);
         $temp4=new DateTime($result -> pchart_exec_end);
         $sub_array[] = '<button type="button" id="se_pchart_name_edit" name="se_pchart_name_edit" class="btn btn-sm btn-primary btn-rounded  mr-1 mb-1" data-id="'.$result->id.'" data-title="'.$result->pchart_name.'" data-timestamp1="'.$temp1->format('U').'" data-timestamp2="'.$temp2->format('U').'" data-timestamp3="'.$temp3->format('U').'" data-timestamp4="'.$temp4->format('U').'" data-date1="'.jdate("Y/m/d", strtotime($result ->pchart_plan_start)).'"  data-date2="'.jdate("Y/m/d", strtotime($result ->pchart_plan_end)).'" data-date3="'.jdate("Y/m/d", strtotime($result ->pchart_exec_start)).'" data-date4="'.jdate("Y/m/d", strtotime($result ->pchart_exec_end)).'"><i class="icon-edit fa-lg"></i>&nbsp;&nbsp;ویرایش</button><button type="button" id="se_pchart_name_delete" name="se_pchart_name_delete" class="btn btn-sm btn-danger btn-rounded  mr-1 mb-1" data-id="'.$result->id.'"><i class="icon-android-delete fa-lg"></i>&nbsp;&nbsp;حذف</button>';
         $data[] = $sub_array;
         $count++;
     }

     function get_all_data()
     {
         require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
         global $wpdb;
         $table = $wpdb->prefix .'pchart';
         $query = "SELECT * FROM {$table} ";
         $results = $wpdb->get_results($query);
         return $wpdb -> num_rows;
     }
     $output = array(
         "draw"    => intval($_GET["draw"]),
         "recordsTotal"  =>  get_all_data(),
         "recordsFiltered" => $number_filter_row,
         "data" => $data
     );


     echo json_encode($output);

     wp_die();
 }
 function pchart_insert_server_side_callback()
 {
     header("Content-Type: application/json");
     $request= $_GET;

        if (isset($request['p_id'],$request['pchart_name'],$request['pchart_plan_start'],$request['pchart_plan_end'],$request['pchart_exec_start'],$request['pchart_exec_end']))
        {
            $pid=intval($request['p_id']);
            $pchart_name=sanitize_text_field($request['pchart_name']);

            $epoch1 = $request['pchart_plan_start'];
            $dt1 = new DateTime("@$epoch1");  // convert UNIX timestamp to PHP DateTime
            $pchart_plan_start= $dt1->format('Y-m-d'); // output = 2017-01-01 00:00:00


            $epoch2 = $request['pchart_plan_end'];
            $dt2 = new DateTime("@$epoch2");  // convert UNIX timestamp to PHP DateTime
            $pchart_plan_end= $dt2->format('Y-m-d'); // output = 2017-01-01 00:00:00


            $epoch3 = $request['pchart_exec_start'];
            $dt3 = new DateTime("@$epoch3");  // convert UNIX timestamp to PHP DateTime
            $pchart_exec_start= $dt3->format('Y-m-d'); // output = 2017-01-01 00:00:00


            $epoch4 = $request['pchart_exec_end'];
            $dt4 = new DateTime("@$epoch4");  // convert UNIX timestamp to PHP DateTime
            $pchart_exec_end= $dt4->format('Y-m-d'); // output = 2017-01-01 00:00:00



            require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
            global $wpdb;
            $table = $wpdb->prefix .'pchart';



            if ($wpdb->insert($table,array('pid' => $pid,'pchart_name' => $pchart_name,'pchart_plan_start' => $pchart_plan_start,'pchart_plan_end' => $pchart_plan_end,'pchart_exec_start' => $pchart_exec_start,'pchart_exec_end' => $pchart_exec_end))=== false)
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
function pchart_delete_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;

    if (isset($request['id']))
    {
        $id=intval($request['id']);

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;
        $table = $wpdb->prefix .'pchart';

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

function pchart_update_row_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;

    if (isset($request['p_id'],$request['pchart_edit_id'],$request['pchart_edit_title'],$request['pchart_edit_date11'],$request['pchart_edit_date21'],$request['pchart_edit_date31'],$request['pchart_edit_date41']))
    {
        $pchart_edit_id=intval($request['pchart_edit_id']);
        $pchart_edit_title=sanitize_text_field($request['pchart_edit_title']);

        $pchart_edit_date11=intval($request['pchart_edit_date11']);
        $pchart_edit_date21=intval($request['pchart_edit_date21']);
        $pchart_edit_date31=intval($request['pchart_edit_date31']);
        $pchart_edit_date41=intval($request['pchart_edit_date41']);


        $epoch1 = $pchart_edit_date11;
        $dt1 = new DateTime("@$epoch1");  // convert UNIX timestamp to PHP DateTime
        $date1=$dt1->format('Y-m-d');

        $epoch2 = $pchart_edit_date21;
        $dt2 = new DateTime("@$epoch2");  // convert UNIX timestamp to PHP DateTime
        $date2=$dt2->format('Y-m-d');

        $epoch3 = $pchart_edit_date31;
        $dt3 = new DateTime("@$epoch3");  // convert UNIX timestamp to PHP DateTime
        $date3=$dt3->format('Y-m-d');

        $epoch4 = $pchart_edit_date41;
        $dt4 = new DateTime("@$epoch4");  // convert UNIX timestamp to PHP DateTime
        $date4=$dt4->format('Y-m-d');

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;
        $table = $wpdb->prefix .'pchart';


        if ($wpdb->update( $table, array( 'pchart_name' => $pchart_edit_title,'pchart_plan_start' => $date1,'pchart_plan_end' => $date2,'pchart_exec_start' => $date3,'pchart_exec_end' => $date4),array('id' =>  $pchart_edit_id)) === false)
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