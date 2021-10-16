<?php
defined("ABSPATH") || exit;

add_action("wp_ajax_emp_pfinancial_bills_data","emp_pfinancial_bills_data_server_side_callback");


function emp_pfinancial_bills_data_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;
    $pid=$request['p_id'];

    $column = array(
        'pfb_title',
        'pfb_title',
        'pfb_date',
        'pfb_amount',
        'pfb_title',
    );

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    global $wpdb;
    $table = $wpdb->prefix .'pfinancial_bills';
    $query = "SELECT * FROM {$table} WHERE pid={$pid} ";

    if(isset($request['order']))
    {
        $query .= 'ORDER BY '.$column[$request['order']['0']['column']].' '.$request['order']['0']['dir'].' ';
    }
    else
    {
        $query.=" ORDER BY pfb_title DESC ";
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
        $sub_array[] = $count;
        $pfb_title=$result ->pfb_title;
        if (strpos($result ->pfb_title, 'pss')!== false)
        {
            $str_arr = explode ("pss", $result ->pfb_title);
            $pfb_title='<a style="color:blue" href="'.home_url('se_project_emp_pss_con/?p_id='.$pid.'&pss_id='.$str_arr[1]).'">'.'صورت وضعیت '.$str_arr[1].'</a>';
        }
        $sub_array[] = $pfb_title;
        $sub_array[] = jdate("Y/m/d", strtotime($result ->pfb_date));
        $sub_array[] = $result ->pfb_amount;
        $sub_array[] = $result ->pfb_description;

        $data[] = $sub_array;
        $count++;
    }
    function get_all_data()
    {
        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;
        $table = $wpdb->prefix .'pfinancial_bills';
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


