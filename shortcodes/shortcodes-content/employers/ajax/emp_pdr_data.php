<?php
defined("ABSPATH") || exit;


///////////////////////////////////////////////////////// man power  report ///////////

add_action("wp_ajax_emp_pdaily_report_man_power_data","emp_pdaily_report_man_power_data_server_side_callback");
function emp_pdaily_report_man_power_data_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;
    $pdr_id=$request['pdr_id'];

    $column = array(
        'personnel',
        'personnel',
        'entrance_time',
        'exit_time',
    );

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    global $wpdb;
    $table = $wpdb->prefix .'pdaily_reports_man_power';
    $query = "SELECT * FROM {$table} WHERE pdr_id={$pdr_id} ";

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
    $data = array();
    $count=1;
    foreach($results as $result)
    {
        $sub_array = array();
        $sub_array[] = $count;
        $sub_array[] = $result->personnel ;
        $sub_array[] = $result->entrance_time ;
        $sub_array[] = $result->exit_time;
        $data[] = $sub_array;
        $count++;
    }

    function get_all_data()
    {
        $pdr_id=$_GET['pdr_id'];
        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;
        $table = $wpdb->prefix .'pdaily_reports_man_power';
        $query = "SELECT * FROM {$table} WHERE pdr_id={$pdr_id} ";
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

//////////////////////////////////////////////////////////////// materials reports //////////////////////

add_action("wp_ajax_emp_pdaily_report_materials_data","emp_pdaily_report_materials_data_server_side_callback");
function emp_pdaily_report_materials_data_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;
    $pdr_id=$request['pdr_id'];

    $column = array(
        'title',
        'title',
        'carrier',
        'unit',
        'amount'
    );

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    global $wpdb;
    $table = $wpdb->prefix .'pdaily_reports_materials';
    $query = "SELECT * FROM {$table} WHERE pdr_id={$pdr_id} ";

    if(isset($request['order']))
    {
        $query .= 'ORDER BY '.$column[$request['order']['0']['column']].' '.$request['order']['0']['dir'].' ';
    }
    else
    {
        $query.=" ORDER BY  title DESC ";
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
        $sub_array[] = $result->title ;
        $sub_array[] = $result->carrier ;
        $sub_array[] = $result->unit;
        $sub_array[] = $result->amount;
        $data[] = $sub_array;
        $count++;
    }

    function get_all_data()
    {
        $pdr_id=$_GET['pdr_id'];
        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;
        $table = $wpdb->prefix .'pdaily_reports_materials';
        $query = "SELECT * FROM {$table} WHERE pdr_id={$pdr_id} ";
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

//////////////////////////////////////////////////////////////// machinery reports //////////////////////

add_action("wp_ajax_emp_pdaily_report_machinery_data","emp_pdaily_report_machinery_data_server_side_callback");
function emp_pdaily_report_machinery_data_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;
    $pdr_id=$request['pdr_id'];

    $column = array(
        'title',
        'title',
        'entrance_time',
        'exit_time'
    );

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    global $wpdb;
    $table = $wpdb->prefix .'pdaily_reports_machinery';
    $query = "SELECT * FROM {$table} WHERE pdr_id={$pdr_id} ";

    if(isset($request['order']))
    {
        $query .= 'ORDER BY '.$column[$request['order']['0']['column']].' '.$request['order']['0']['dir'].' ';
    }
    else
    {
        $query.=" ORDER BY  title DESC ";
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
        $sub_array[] = $result->title ;
        $sub_array[] = $result->entrance_time ;
        $sub_array[] = $result->exit_time;
        $data[] = $sub_array;
        $count++;
    }

    function get_all_data()
    {
        $pdr_id=$_GET['pdr_id'];
        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;
        $table = $wpdb->prefix .'pdaily_reports_machinery';
        $query = "SELECT * FROM {$table} WHERE pdr_id={$pdr_id} ";
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

//////////////////////////////////////////////////////////////// payments reports //////////////////////

add_action("wp_ajax_emp_pdaily_report_peyments_data","emp_pdaily_report_peyments_data_server_side_callback");
function emp_pdaily_report_peyments_data_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;
    $pdr_id=$request['pdr_id'];

    $column = array(
        'title',
        'title',
        'amount',
        'bin'
    );

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    global $wpdb;
    $table = $wpdb->prefix .'pdaily_reports_payments';
    $query = "SELECT * FROM {$table} WHERE pdr_id={$pdr_id} ";

    if(isset($request['order']))
    {
        $query .= 'ORDER BY '.$column[$request['order']['0']['column']].' '.$request['order']['0']['dir'].' ';
    }
    else
    {
        $query.=" ORDER BY  title DESC ";
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
        $sub_array[] = $result->title ;
        $sub_array[] = $result->amount ;
        $sub_array[] = $result->bin;

        $data[] = $sub_array;
        $count++;
    }

    function get_all_data()
    {
        $pdr_id=$_GET['pdr_id'];
        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;
        $table = $wpdb->prefix .'pdaily_reports_payments';
        $query = "SELECT * FROM {$table} WHERE pdr_id={$pdr_id} ";
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
