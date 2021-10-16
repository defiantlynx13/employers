<?php
defined("ABSPATH") || exit;

add_action("wp_ajax_supervisor_projects_data","supervisor_projects_data_server_side_callback");

function supervisor_projects_data_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;
    $sid=$request['sid'];

    $column = array(
        'status',
        'status',
        'pname',
        'expected_cost',
        'cname',
        'cprofit',
        'pname',
        'pname',
        'date',
        'status',
        'bio'
    );

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    global $wpdb;
    $table = $wpdb->prefix .'projects';
    $query = "select * from {$table} WHERE sid={$sid}  ";

     if (isset($request["search"]["value"]) )
     {
         $query.="AND  pname LIKE '%".$request["search"]["value"]."%' ";

     }


    if(isset($request['order']))
    {
        $query .= 'ORDER BY '.$column[$request['order']['0']['column']].' '.$request['order']['0']['dir'].' ';
    }
    else
    {
        $query.=" ORDER BY status DESC,date DESC  ";
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
    require_once( ABSPATH . 'wp-content/plugins/emp/inc/jdf.php' );
    $data = array();
    $count=1;
    foreach($results as $result)
    {
        $sub_array = array();
        $sub_array[] = $count;
        $sub_array[] = '<a type="button" id="se_pdrs_list" name="se_pdrs_list" class="btn btn-sm btn-primary btn-rounded  mr-1 mb-1" href="'.home_url('/se_supervisor_pdrs_list/?p_id='.$result->id).'"><i class="icon-paper fa-lg"></i></a> ';
        $sub_array[] = $result->pname;
        $sub_array[] = $result->expected_cost;
        $sub_array[] = $result->cname;
        $sub_array[] = $result->cprofit;

        $employee=get_userdata($result->eid);
        $sub_array[] = $employee->first_name .  " " .$employee->last_name;

        $sup=get_userdata($result->sid);
        $sub_array[] = $sup->first_name .  " " .$sup->last_name;

        $sub_array[] = jdate("Y/m/d", strtotime($result ->date));
        $sub_array[] = ($result->status=="enable")?'<span class="tag tag-default tag-info">درحال اجرا</span>':'<span class="tag tag-default tag-success">پایان یافته</span>';
        $sub_array[] = $result->bio;

        $data[] = $sub_array;
        $count++;
    }
    function get_all_data()
    {
        $sid=$_GET['sid'];
        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;
        $table = $wpdb->prefix .'projects';
        $query = "SELECT * FROM {$table} WHERE sid={$sid}";
        $results = $wpdb->get_results($query);
        return $wpdb -> num_rows;
    }


    $output = array(
        "draw"    => intval($_GET["draw"]),
        "draw"    => intval($_GET["draw"]),
        "recordsTotal"  =>  get_all_data(),
        "recordsFiltered" => $number_filter_row,
        "data" => $data
    );


    echo json_encode($output);

    wp_die();
}

