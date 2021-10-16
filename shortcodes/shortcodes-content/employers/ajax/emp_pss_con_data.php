<?php
defined("ABSPATH") || exit;

add_action("wp_ajax_emp_pss_con_data","emp_pss_con_data_server_side_callback");
function emp_pss_con_data_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;
    $pss_id=$request['pss_id'];
    $p_id=$request['p_id'];

    $column = array(
        'pss_id',
        'title',
        'count',
        'vol_area_weight_minor',
        'vol_area_weight_total',
        'unit',
        'unit_price',
        'r_total',
        'description'
    );

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    global $wpdb;
    $table = $wpdb->prefix .'psituation_status_con';
    $query = "SELECT * FROM {$table} WHERE pss_id<={$pss_id} AND  p_id={$p_id} ";

    if (isset($request["search"]["value"]) )
    {
        $query.="AND  title LIKE '%".$request["search"]["value"]."%' ";

    }


    if(isset($request['order']))
    {
        $query .= 'ORDER BY '.$column[$request['order']['0']['column']].' '.$request['order']['0']['dir'].' ';
    }
    else
    {
        $query.=" ORDER BY  pss_id DESC ";
    }
    $results2 = $wpdb->get_results($query);
    $number_filter_row=$wpdb -> num_rows;
    $query1 = '';

    if($request['length'] != -1)
    {
        $query1 = ' LIMIT ' . $request['start'] . ', ' . $request['length'];
    }


    $results = $wpdb->get_results($query.$query1);


    $data = array();
    $count=1;
    foreach($results as $result)
    {
        $sub_array = array();
        $sub_array[] = $count;
        $sub_array[] = $result ->title;
        $sub_array[] = $result ->count;
        $sub_array[] = $result ->vol_area_weight_minor;
        $sub_array[] = $result ->vol_area_weight_total;
        $sub_array[] = $result ->unit;
        $sub_array[] = $result ->unit_price;
        $sub_array[] = $result ->r_total;
        $sub_array[] = $result ->description;


        $data[] = $sub_array;
        $count++;

    }


    function get_all_data()
    {
        $pss_id=$_GET['pss_id'];
        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;
        $table = $wpdb->prefix .'psituation_status_con';
        $query = "SELECT * FROM {$table} WHERE pss_id={$pss_id}";
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

