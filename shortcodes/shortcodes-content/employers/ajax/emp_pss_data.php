<?php
defined("ABSPATH") || exit;

add_action("wp_ajax_emp_pss_data","emp_pss_data_server_side_callback");

function emp_pss_data_server_side_callback()
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

        $sub_array[] = '<button type="button" id="se_pss_complete" name="se_pss_complete" class="btn btn-sm btn-primary btn-rounded  mr-1 mb-1" data-id="'.$result->num.'"><i class="icon-eye6 fa-lg"></i></button>';

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
