<?php
defined("ABSPATH") || exit;

add_action("wp_ajax_pfinancial_bills_data","pfinancial_bills_data_server_side_callback");
add_action("wp_ajax_pfb_delete","pfb_delete_server_side_callback");
add_action("wp_ajax_pfb_insert","pfb_insert_server_side_callback");
add_action("wp_ajax_pfb_insert_pss","pfb_insert_pss_server_side_callback");


function pfinancial_bills_data_server_side_callback()
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
        'pfb_title'
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
            $pfb_title='<a style="color:blue" href="'.home_url('se_project_situation_status_con/?p_id='.$pid.'&pss_id='.$str_arr[1]).'">'.'صورت وضعیت '.$str_arr[1].'</a>';
        }
        $sub_array[] = $pfb_title;
        $sub_array[] = jdate("Y/m/d", strtotime($result ->pfb_date));
        $sub_array[] = $result ->pfb_amount;
        $sub_array[] = $result ->pfb_description;
        $sub_array[] = '<button type="button" id="se_pfb_delete" name="se_pfb_delete" class="btn btn-sm btn-danger btn-rounded  mr-1 mb-1" data-id="'.$result->id.'"><i class="icon-android-delete fa-lg"></i>&nbsp;&nbsp;حذف</button>';

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

function pfb_insert_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;

    if (isset($request['p_id'],$request['pfb_title'],$request['pfb_date'],$request['pfb_amount']))
    {
        $pid=intval($request['p_id']);
        $pfb_title=sanitize_text_field($request['pfb_title']);

        $epoch1 = $request['pfb_date'];
        $dt1 = new DateTime("@$epoch1");  // convert UNIX timestamp to PHP DateTime
        $pfb_date= $dt1->format('Y-m-d'); // output = 2017-01-01 00:00:00

        $pfb_amount=sanitize_text_field($request['pfb_amount']);

        $pfb_description=sanitize_textarea_field($request['pfb_description']);


        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;
        $table = $wpdb->prefix .'pfinancial_bills';


        $output=array();
        if ($wpdb->insert($table,array('pid' => $pid,'pfb_title' => $pfb_title,'pfb_date' => $pfb_date,'pfb_amount' => $pfb_amount,'pfb_description' => $pfb_description))=== false)
        {
            $output[0]=false;
            $output[1]=$wpdb->last_error;
            $output[2]=null;
            $output[3]=null;
            echo json_encode($output);
            wp_die();
        }
        else
        {
            $output[0]=true;
            $output[1]="اطلاعات با موفقیت ثبت گردید!";

            $table = $wpdb->prefix .'pfinancial_bills';
            $query = "SELECT * FROM {$table} WHERE pid={$pid} AND pfb_title LIKE 'pss%' ORDER BY pfb_title DESC ";
            $result_fb_pss=$wpdb->get_row($query);
            $fb_pss_sum=$result_fb_pss->pfb_amount;

            $query = "SELECT * FROM {$table} WHERE pid={$pid} AND pfb_title NOT LIKE 'pss%' ";
            $result_fbs=$wpdb->get_results($query);

            $temp_sum=0;
            foreach ($result_fbs as $result_fb)
            {
                $temp_sum+=$result_fb->pfb_amount;
            }
            $output[2] = $temp_sum + $fb_pss_sum;


            if ($output[2]>0)
            {
                $output[3]='<span ><b style="color: green;" id="pfb_msg"> کارفرما بستانکار است !</b></span>';
            }
            elseif ($output[2] < 0)
            {
                $output[3]='<span ><b style="color: red;" id="pfb_msg"> کارفرما بدهکار است !</b></span>';
            }
            else
            {
                $output[3]='<span ><b style="color: black;"id="pfb_msg"> کارفرما تسویه کرده است !</b></span>';
            }
            echo json_encode($output);
            wp_die();
        }

    }
}

function pfb_insert_pss_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;

    if (isset($request['p_id'],$request['pss_id']))
    {
        $pid=intval($request['p_id']);
        $pss_id=intval($request['pss_id']);

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;
        $table = $wpdb->prefix .'psituation_status';
        $query = "SELECT * FROM {$table} WHERE pid={$pid} AND num={$pss_id}";
        $results=$wpdb->get_results($query);

        $output=array();

        if (count($results)==0)
        {
            $output[0]=false;
            $output[1]='صورت وضعیت با شماره وارد شده ثبت نشده است!';
            $output[2]=null;
            $output[3]=null;
            echo json_encode($output);
            wp_die();
        }
        else
        {

            $pfb_title='pss'.$pss_id;

            $pfb_date='';
            if ($request['pfb_date'] != '')
            {
                $epoch1 = $request['pfb_date'];
                $dt1 = new DateTime("@$epoch1");  // convert UNIX timestamp to PHP DateTime
                $pfb_date= $dt1->format('Y-m-d'); // output = 2017-01-01 00:00:00
            }
            else
            {
                $pfb_date= $results[0]->date;
            }



            $pfb_amount=-($results[0]->total);

            $pfb_description=sanitize_textarea_field($request['pfb_description']);

            $table = $wpdb->prefix .'pfinancial_bills';


            if ($wpdb->insert($table,array('pid' => $pid,'pfb_title' => $pfb_title,'pfb_date' => $pfb_date,'pfb_amount' => $pfb_amount,'pfb_description' => $pfb_description))=== false)
            {
                $output[0]=false;
                $output[1]=$wpdb->last_error;
                $output[2]=null;
                $output[3]=null;
                echo json_encode($output);
                wp_die();
            }
            else
            {
                $output[0]=true;
                $output[1]="اطلاعات با موفقیت ثبت گردید!";

                $table = $wpdb->prefix .'pfinancial_bills';
                $query = "SELECT * FROM {$table} WHERE pid={$pid} AND pfb_title LIKE 'pss%' ORDER BY pfb_title DESC ";
                $result_fb_pss=$wpdb->get_row($query);
                $fb_pss_sum=$result_fb_pss->pfb_amount;

                $query = "SELECT * FROM {$table} WHERE pid={$pid} AND pfb_title NOT LIKE 'pss%' ";
                $result_fbs=$wpdb->get_results($query);

                $temp_sum=0;
                foreach ($result_fbs as $result_fb)
                {
                    $temp_sum+=$result_fb->pfb_amount;
                }
                $output[2] = $temp_sum + $fb_pss_sum;

                if ($output[2]>0)
                {
                    $output[3]='<span ><b style="color: green;" id="pfb_msg"> کارفرما بستانکار است !</b></span>';
                }
                elseif ( $output[2] < 0)
                {
                    $output[3]='<span ><b style="color: red;" id="pfb_msg"> کارفرما بدهکار است !</b></span>';
                }
                else
                {
                    $output[3]='<span ><b style="color: black;"id="pfb_msg"> کارفرما تسویه کرده است !</b></span>';
                }
                echo json_encode($output);
                wp_die();
            }
        }


    }
}

function pfb_delete_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;

    if (isset($request['id'],$request['pid']))
    {
        $id=intval($request['id']);
        $pid=intval($request['pid']);

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;
        $table = $wpdb->prefix .'pfinancial_bills';
        $output=array();
        if ($wpdb->delete( $table, array( 'id' => $id )) === false)
        {
            $output[0]=false;
            $output[1]=$wpdb->last_error;
            $output[2]=null;
            $output[3]=null;
            echo json_encode($output);
            wp_die();
        }
        else
        {
            $output[0]=true;
            $output[1]="ایتم مدنظر شما با موفقیت حذف گردید!";

            $table = $wpdb->prefix .'pfinancial_bills';
            $query = "SELECT * FROM {$table} WHERE pid={$pid} AND pfb_title LIKE 'pss%' ORDER BY pfb_title DESC ";
            $result_fb_pss=$wpdb->get_row($query);
            $fb_pss_sum=$result_fb_pss->pfb_amount;

            $query = "SELECT * FROM {$table} WHERE pid={$pid} AND pfb_title NOT LIKE 'pss%' ";
            $result_fbs=$wpdb->get_results($query);

            $temp_sum=0;
            foreach ($result_fbs as $result_fb)
            {
                $temp_sum+=$result_fb->pfb_amount;
            }
            $output[2] = $temp_sum + $fb_pss_sum;

            if ($output[2]>0)
            {
                $output[3]='<span ><b style="color: green;" id="pfb_msg"> کارفرما بستانکار است !</b></span>';
            }
            elseif ($output[2] < 0)
            {
                $output[3]='<span ><b style="color: red;" id="pfb_msg"> کارفرما بدهکار است !</b></span>';
            }
            else
            {
                $output[3]='<span ><b style="color: black;"id="pfb_msg"> کارفرما تسویه کرده است !</b></span>';
            }
            echo json_encode($output);
            wp_die();
        }
        wp_die();
    }
}

