<?php
defined("ABSPATH") || exit;

add_action("wp_ajax_pnn_add","pnn_add_server_side_callback");
add_action("wp_ajax_pnn_add2","pnn_add2_server_side_callback");
add_action("wp_ajax_project_notification_data","project_notification_data_server_side_callback");
add_action("wp_ajax_pnd","pnd_server_side_callback");


function pnn_add_server_side_callback()
{
    require_once( ABSPATH . 'wp-content/plugins/emp/inc/fancy_file_uploader_helper.php' );
    header("Content-Type: application/json");

    // Depending on your server, you might have to use $_POST instead of $_REQUEST.
    if (isset($_REQUEST["action"]) && $_REQUEST["action"] === "pnn_add")
    {
        $allowedexts = array(
            "jpg" => true,
            "png" => true,
            "doc" => true,
            "docx" => true
        );

        $files = FancyFileUploaderHelper::NormalizeFiles("pnn_file");
        if (!isset($files[0]))
        {
            $result = array(
                "success" => false,
                "error" => "File data was submitted but is missing.",
                "errorcode" => "bad_input")
            ;
        }
        else if (!$files[0]["success"])
        {
            $result = $files[0];
        }
        else if (!isset($allowedexts[strtolower($files[0]["ext"])]))
        {
            $result = array(
                "success" => false,
                "error" => "پسوند تصویر مدنظر معتبر نیست.. ",
                "errorcode" => "invalid_file_ext"
            );
        }
        else
        {
            // For chunked file uploads, get the current filename and starting position from the incoming headers.
            $name = FancyFileUploaderHelper::GetChunkFilename();
            if ($name !== false)
            {
                $startpos = FancyFileUploaderHelper::GetFileStartPosition();

                $result = array(
                    "success" => false,
                    "error" => ". نام فایل مدنظر معتبر نمی باشد",
                    "errorcode" => $startpos
                );
            }
            else
            {
                // [Do stuff with the file here.]
                // copy($files[0]["file"], __DIR__ . "/images/" . $id . "." . strtolower($files[0]["ext"]));
                $upload_dir= wp_upload_dir();
                $target_dir = trailingslashit( $upload_dir['basedir'].'/emp_uploads/'.$_REQUEST['p_id']);
                $target_file = $target_dir .basename($_FILES["pnn_file"]["name"]);
                if (!file_exists($target_dir )) {
                    wp_mkdir_p( $target_dir );
                }


                $uploadOk = 1;
                $msg="";
                // Check if file already exists
                if (file_exists($target_file))
                {
                    $msg= "تصویر با این نام موجود می باشد!";
                    $uploadOk = 0;
                }


                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0)
                {
                    $result = array(
                        "success" => false,
                        "error" => $msg,
                    );
                }
                else
                {
                    if (move_uploaded_file($_FILES["pnn_file"]["tmp_name"], $target_file))
                    {
                        $upload_dir_link= wp_upload_dir();
                        $target_dir_link = trailingslashit( $upload_dir_link['baseurl'].'/emp_uploads/'.$_REQUEST['p_id']);
                        $target_file_link = $target_dir_link .basename($_FILES["pnn_file"]["name"]);

                        $p_id=intval($_REQUEST['p_id']);
                        $pnn_title=sanitize_text_field($_REQUEST['pnn_title']);
                        $pnn_text=sanitize_text_field($_REQUEST['pnn_text']);
                        $pnn_date=current_time('Y-m-d H:s:i');
                        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
                        global $wpdb;
                        $table = $wpdb->prefix .'projects_notification';
                        if ($wpdb->insert($table,array('p_id' => $p_id,'title' => $pnn_title,'text' => $pnn_text,'link' => $target_file_link,'date' => $pnn_date,'status' => 'pending'))=== false)
                        {
                            $result = array(
                                "success" => false,
                                "error" => "خطای پایگاه داده",
                            );
                        }
                        else
                        {
                            $result = array(
                                "success" => true
                            );
                        }
                    }
                    else
                    {
                        $result = array(
                            "success" => false,
                            "error" => "هنگام اپلود فایل خطایی رخ داد. لطفا مجدد تلاش نمایید.",
                        );
                    }
                }

            }


        }

        echo json_encode($result);
        exit();
    }
}
function pnn_add2_server_side_callback()
{
    header("Content-Type: application/json");

    $p_id=intval($_REQUEST['p_id']);
    $pnn_title=sanitize_text_field($_REQUEST['pnn_title']);
    $pnn_text=sanitize_text_field($_REQUEST['pnn_text']);
    $pnn_date=current_time('Y-m-d H:s:i');
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    global $wpdb;
    $table = $wpdb->prefix .'projects_notification';
    if ($wpdb->insert($table,array('p_id' => $p_id,'title' => $pnn_title,'text' => $pnn_text,'link' => '','date' => $pnn_date,'status' => 'pending'))=== false)
    {
        echo json_encode("خطای پایگاه داده رخ داده است!");
        exit();
    }
    else
    {
        echo json_encode("اعلان مدنظر با موفقیت ارسال گردید!");
        exit();
    }


}

function project_notification_data_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;
    $p_id=$request['p_id'];

    $column = array(
        'title',
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
    require_once( ABSPATH . 'wp-content/plugins/emp/inc/jdf.php' );
    foreach($results as $result) {
        $sub_array = array();
        $sub_array[] = $count;
        $sub_array[] = '<span data-toggle="popover-hover"  title="'.$result->title.'" data-content="'.$result->text.'">'.$result->title.'</span>';
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

        $sub_array[] = '<button type="button" id="se_pn_delete" name="se_pn_delete" class="btn btn-sm btn-danger btn-rounded  mr-1 mb-1" data-id="'.$result->id.'"><i class="icon-android-delete fa-lg"></i></button>';

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

function pnd_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;

    if (isset($request['id'])) {
        $id = intval($request['id']);

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        global $wpdb;
        $table = $wpdb->prefix . 'projects_notification';
        $query = "SELECT * FROM {$table} WHERE id={$id} ";
        $results = $wpdb->get_results($query);
        foreach($results as $result)
        {
            $upload_dir_link= wp_upload_dir();
            $target_dir_link = trailingslashit( $upload_dir_link['basedir'].'/emp_uploads/'.$result->p_id);
            $filename =basename($result->link);
            unlink($target_dir_link.$filename);
        }

        if ($wpdb->delete($table, array('id' => $id)) === false) {
            echo json_encode($wpdb->last_error);
        }
        else
        {

            echo json_encode("ایتم مدنظر شما با موفقیت حذف گردید!");
        }
        wp_die();
    }
}

