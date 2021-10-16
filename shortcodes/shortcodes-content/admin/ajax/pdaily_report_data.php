<?php
defined("ABSPATH") || exit;


///////////////////////////////////////////////////////// man power  report ///////////

add_action("wp_ajax_pdaily_report_man_power_data","pdaily_report_man_power_data_server_side_callback");
add_action("wp_ajax_pdr_mp_insert","pdr_mp_insert_server_side_callback");
add_action("wp_ajax_pdr_mp_delete","pdr_mp_delete_server_side_callback");

function pdaily_report_man_power_data_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;
    $pdr_id=$request['pdr_id'];

    $column = array(
        'personnel',
        'personnel',
        'entrance_time',
        'exit_time',
        'personnel'
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
        $sub_array[] = '<button type="button" id="se_pdr_mp_delete" name="se_pdr_mp_delete" class="btn btn-sm btn-danger btn-rounded  mr-1 mb-1" data-id="'.$result->id.'"><i class="icon-android-delete fa-lg"></i></button>';

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


function pdr_mp_insert_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;

    if (isset($request['pdr_id'],$request['pdr_mp_personnel'],$request['pdr_mp_entrance_time'],$request['pdr_mp_exit_time']))
    {
        $pdr_id=intval($request['pdr_id']);
        $pdr_mp_personnel=sanitize_text_field($request['pdr_mp_personnel']);
        $pdr_mp_entrance_time=sanitize_text_field($request['pdr_mp_entrance_time']);
        $pdr_mp_exit_time=sanitize_text_field($request['pdr_mp_exit_time']);


        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;
        $table = $wpdb->prefix .'pdaily_reports_man_power';



        if ($wpdb->insert($table,array('pdr_id' => $pdr_id,'personnel' => $pdr_mp_personnel,'entrance_time' => $pdr_mp_entrance_time,'exit_time' => $pdr_mp_exit_time))=== false)
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


function pdr_mp_delete_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;

    if (isset($request['id']))
    {
        $id=intval($request['id']);

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;
        $table = $wpdb->prefix .'pdaily_reports_man_power';

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




//////////////////////////////////////////////////////////////// materials reports //////////////////////


 add_action("wp_ajax_pdaily_report_materials_data","pdaily_report_materials_data_server_side_callback");
 add_action("wp_ajax_pdr_materials_insert","pdr_materials_insert_server_side_callback");
 add_action("wp_ajax_pdr_materials_delete","pdr_materials_delete_server_side_callback");


function pdaily_report_materials_data_server_side_callback()
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
        $sub_array[] = '<button type="button" id="se_pdr_materials_delete" name="se_pdr_materials_delete" class="btn btn-sm btn-danger btn-rounded  mr-1 mb-1" data-id="'.$result->id.'"><i class="icon-android-delete fa-lg"></i></button>';

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


function pdr_materials_insert_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;

    if (isset($request['pdr_id'],$request['pdr_materials_title'],$request['pdr_materials_carrier'],$request['pdr_materials_unit'],$request['pdr_materials_amount']))
    {
        $pdr_id=intval($request['pdr_id']);
        $pdr_materials_title=sanitize_text_field($request['pdr_materials_title']);
        $pdr_materials_carrier=sanitize_text_field($request['pdr_materials_carrier']);
        $pdr_materials_unit=sanitize_text_field($request['pdr_materials_unit']);
        $pdr_materials_amount=sanitize_text_field($request['pdr_materials_amount']);


        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;
        $table = $wpdb->prefix .'pdaily_reports_materials';



        if ($wpdb->insert($table,array('pdr_id' => $pdr_id,'title' => $pdr_materials_title,'carrier' => $pdr_materials_carrier,'unit' => $pdr_materials_unit,'amount' => $pdr_materials_amount))=== false)
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


function pdr_materials_delete_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;

    if (isset($request['id']))
    {
        $id=intval($request['id']);

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;
        $table = $wpdb->prefix .'pdaily_reports_materials';

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

//////////////////////////////////////////////////////////////// machinery reports //////////////////////


add_action("wp_ajax_pdaily_report_machinery_data","pdaily_report_machinery_data_server_side_callback");
add_action("wp_ajax_pdr_machinery_insert","pdr_machinery_insert_server_side_callback");
add_action("wp_ajax_pdr_machinery_delete","pdr_machinery_delete_server_side_callback");


function pdaily_report_machinery_data_server_side_callback()
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
        $sub_array[] = '<button type="button" id="se_pdr_machinery_delete" name="se_pdr_machinery_delete" class="btn btn-sm btn-danger btn-rounded  mr-1 mb-1" data-id="'.$result->id.'"><i class="icon-android-delete fa-lg"></i></button>';

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

function pdr_machinery_insert_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;

    if (isset($request['pdr_id'],$request['pdr_machinery_title'],$request['pdr_machinery_entrance_time'],$request['pdr_machinery_exit_time']))
    {
        $pdr_id=intval($request['pdr_id']);
        $pdr_machinery_title=sanitize_text_field($request['pdr_machinery_title']);
        $pdr_machinery_entrance_time=sanitize_text_field($request['pdr_machinery_entrance_time']);
        $pdr_machinery_exit_time=sanitize_text_field($request['pdr_machinery_exit_time']);


        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;
        $table = $wpdb->prefix .'pdaily_reports_machinery';



        if ($wpdb->insert($table,array('pdr_id' => $pdr_id,'title' => $pdr_machinery_title,'entrance_time' => $pdr_machinery_entrance_time,'exit_time' => $pdr_machinery_exit_time))=== false)
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

function pdr_machinery_delete_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;

    if (isset($request['id']))
    {
        $id=intval($request['id']);

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;
        $table = $wpdb->prefix .'pdaily_reports_machinery';

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

//////////////////////////////////////////////////////////////// payments reports //////////////////////


add_action("wp_ajax_pdaily_report_peyments_data","pdaily_report_peyments_data_server_side_callback");
add_action("wp_ajax_pdr_peyments_insert","pdr_peyments_insert_server_side_callback");
add_action("wp_ajax_pdr_peyments_delete","pdr_peyments_delete_server_side_callback");


function pdaily_report_peyments_data_server_side_callback()
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
        $sub_array[] = '<button type="button" id="se_pdr_peyments_delete" name="se_pdr_peyments_delete" class="btn btn-sm btn-danger btn-rounded  mr-1 mb-1" data-id="'.$result->id.'"><i class="icon-android-delete fa-lg"></i></button>';

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

function pdr_peyments_insert_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;

    if (isset($request['pdr_id'],$request['pdr_peyments_title'],$request['pdr_peyments_amount'],$request['pdr_peyments_bin']))
    {
        $pdr_id=intval($request['pdr_id']);
        $pdr_peyments_title=sanitize_text_field($request['pdr_peyments_title']);
        $pdr_peyments_amount=sanitize_text_field($request['pdr_peyments_amount']);
        $pdr_peyments_bin=sanitize_text_field($request['pdr_peyments_bin']);


        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;
        $table = $wpdb->prefix .'pdaily_reports_payments';

        if ($wpdb->insert($table,array('pdr_id' => $pdr_id,'title' => $pdr_peyments_title,'amount' => $pdr_peyments_amount,'bin' => $pdr_peyments_bin))=== false)
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

function pdr_peyments_delete_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;

    if (isset($request['id']))
    {
        $id=intval($request['id']);

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;
        $table = $wpdb->prefix .'pdaily_reports_payments';

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