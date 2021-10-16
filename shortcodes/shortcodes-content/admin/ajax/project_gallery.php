<?php
defined("ABSPATH") || exit;

add_action("wp_ajax_pgallery_upload_image","pgallery_upload_image_server_side_callback");
add_action("wp_ajax_pgallery_get_images","pgallery_get_images_server_side_callback");
add_action("wp_ajax_pgallery_delete_image","pgallery_delete_image_server_side_callback");


function pgallery_upload_image_server_side_callback()
{
    require_once( ABSPATH . 'wp-content/plugins/emp/inc/fancy_file_uploader_helper.php' );
    header("Content-Type: application/json");

    // Depending on your server, you might have to use $_POST instead of $_REQUEST.
    if (isset($_REQUEST["action"]) && $_REQUEST["action"] === "pgallery_upload_image")
    {
        $allowedexts = array(
            "jpg" => true,
            "png" => true,
        );

        $files = FancyFileUploaderHelper::NormalizeFiles("files");
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
                "error" => "پسوند تصویر مدنظر معتبر نیست..  پسوند باید '.jpg' یا '.png' باشد.",
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
                $target_file = $target_dir .basename($_FILES["files"]["name"]);
                if (!file_exists($target_dir )) {
                    wp_mkdir_p( $target_dir );
                }


                $uploadOk = 1;
                $msg="";
                // Check if image file is a actual image or fake image
                $check = getimagesize($_FILES["files"]["tmp_name"]);
                if($check !== false)
                {
                    $uploadOk = 1;
                }
                else
                {
                    $msg="فایل اپلود شده تصویر نیست!";
                    $uploadOk = 0;
                }


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
                    if (move_uploaded_file($_FILES["files"]["tmp_name"], $target_file))
                    {
                        $upload_dir_link= wp_upload_dir();
                        $target_dir_link = trailingslashit( $upload_dir_link['baseurl'].'/emp_uploads/'.$_REQUEST['p_id']);
                        $target_file_link = $target_dir_link .basename($_FILES["files"]["name"]);
                        $target_file_name = pathinfo($_FILES['files']['name'], PATHINFO_FILENAME);
                        $p_id=intval($_REQUEST['p_id']);
                        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
                        global $wpdb;
                        $table = $wpdb->prefix .'projects_gallery';



                        if ($wpdb->insert($table,array('pid' => $p_id,'link' => $target_file_link,'title' => $target_file_name))=== false)
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

function pgallery_get_images_server_side_callback(){
    header("Content-Type: application/json");
    $request= $_GET;
    $p_id=$request['p_id'];
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    global $wpdb;
    $table = $wpdb->prefix .'projects_gallery';
    $query = "SELECT * FROM {$table} WHERE pid={$p_id} ";
    $results = $wpdb->get_results($query);

    $images=array();
    foreach($results as $result)
    {
        $sub_array = array();
        $sub_array[] = $result->id;
        $sub_array[] = $result->link;
        $sub_array[] = $result->title;
        $images[] = $sub_array;
    }
    echo json_encode($images);
    wp_die();
}

function pgallery_delete_image_server_side_callback(){
    header("Content-Type: application/json");
    $request= $_GET;

    if (isset($request['id']))
    {
        $id=intval($request['id']);

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;
        $table = $wpdb->prefix .'projects_gallery';
        $query = "SELECT * FROM {$table} WHERE id={$id} ";
        $results = $wpdb->get_results($query);
        foreach($results as $result)
        {
            $upload_dir_link= wp_upload_dir();
            $target_dir_link = trailingslashit( $upload_dir_link['basedir'].'/emp_uploads/'.$result->pid);
            $filename =basename($result->link);
            unlink($target_dir_link.$filename);
        }

        if ($wpdb->delete( $table, array( 'id' => $id )) === false)
        {
            echo json_encode($wpdb->last_error);
        }
        else
        {
            echo json_encode("تصویر مدنظر شما با موفقیت حذف گردید!");
        }
        wp_die();
    }
}





