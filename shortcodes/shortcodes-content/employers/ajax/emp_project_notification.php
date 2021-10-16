<?php
defined("ABSPATH") || exit;

add_action("wp_ajax_project_emp_notification_data","project_emp_notification_data_server_side_callback");
add_action("wp_ajax_project_emp_notification_update_status","project_emp_notification_update_status_server_side_callback");
function project_emp_notification_data_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;
    $p_id=$request['p_id'];

    $column = array(
        'status',
        'title',
        'date',
        'link',
        'status'
    );

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    global $wpdb;
    $table = $wpdb->prefix .'projects_notification';
    $query = "SELECT * FROM {$table} WHERE p_id={$p_id} ";

    if (isset($request["search"]["value"]) )
    {
        $query.="AND  title LIKE '%".$request["search"]["value"]."%' ";

    }

    $query.=" ORDER BY  status ASC , date DESC";

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
    require_once( ABSPATH . 'wp-content/plugins/emp/inc/jdf.php' );
    foreach($results as $result) {
        $sub_array = array();
        $sub_array[] = $count;
        $sub_array[] = '<span id="se_emp_not_title" data-toggle="popover-hover"  title="'.$result->title.'" data-content="'.$result->text.'" data-id="'.$result->id.'" data-status="'.$result->status.'">'.$result->title.'</span>';
        $sub_array[] = jdate("Y/m/d H:s:i", strtotime($result ->date));
        if ($result->link != "")
        {
            $sub_array[] = '<a href="'.$result->link.'" target="_blank"><i class="icon-cloud-download3" style="color: green;font-size: 25px;"></i></a>';
        }
        else
        {
            $sub_array[] = '-';

        }
        $sub_array[] = ($result->status=='pending')?'<span class="tag tag-default tag-info">خوانده نشده</span>':'<span class="tag tag-default tag-success">خوانده شده</span>';
        $data[] = $sub_array;
        $count++;
    }

    function get_all_data()
    {
        $p_id=$_GET['p_id'];
        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;
        $table = $wpdb->prefix .'projects_notification';
        $query = "SELECT * FROM {$table} WHERE p_id={$p_id} ";
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

function project_emp_notification_update_status_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;

    if (isset($request['id']))
    {
        $not_id=intval($request['id']);

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;
        $table = $wpdb->prefix .'projects_notification';

        if ($wpdb->update( $table, array(  'status' => 'readed' ),array('id' => $not_id))===false)
        {
            echo json_encode($wpdb->last_error);
        }
        else
        {
            echo json_encode("ایتم مدنظر شما با موفقیت ویرایش گردید!");
        }
        wp_die();


    }
}


