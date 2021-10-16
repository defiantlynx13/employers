<?php
defined("ABSPATH") || exit;

add_action("wp_ajax_supervisors_data","supervisors_data_server_side_callback");
add_action("wp_ajax_supervisor_edit","supervisor_edit_server_side_callback");
add_action("wp_ajax_supervisor_add","supervisor_add_server_side_callback");



function supervisors_data_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;

    $column = array(
        'display_name',
        'display_name',
        'user_login',
        'email'
    );

    $args=array(
            'meta_query' => array(
                array(
                    'meta'     => 'user_type',
                    'value'   => 'supervisor'
                )
            )
    );

    if (isset($request["search"]["value"]) )
    {
        if ($request["search"]["value"] !=null)
        {
            $args['meta_query'][]=array(
                'meta'     => 'display_name',
                'value'   => $request["search"]["value"]
            );
        }

    }

    if(isset($request['order']))
    {
        $args['orderby']=$column[$request['order']['0']['column']];
        $args['order']=$request['order']['0']['dir'];
    }

    $supervisors = get_users($args);
    $count=1;
    foreach($supervisors as $supervisor)
    {
        $sub_array = array();
        $sub_array[] = $count;
        $temp = get_userdata($supervisor->ID);
        $sub_array[] = $temp->first_name .  " " .$temp->last_name;
        $sub_array[] = $temp->user_login ;
        $sub_array[] = "-";
        $sub_array[] = $temp->user_email ;
        $sub_array[] = ($temp->status == 'enable')?'<span class="tag tag-default tag-success">فعال</span>':'<span class="tag tag-default tag-info">غیر فعال</span>' ;
        $sub_array[] = '<button type="button" id="supervisor_edit" name="supervisor_edit" class="btn btn-sm btn-info btn-rounded  mr-1 mb-1" data-id="'.$supervisor->ID.'" data-username="'.$temp->user_login.'" data-fname="'.$temp->first_name.'" data-lname="'.$temp->last_name.'" data-email="'.$temp->user_email.'" data-status="'.$temp->status.'"><i class="icon-pencil3 fa-lg"></i></button>';

        $data[] = $sub_array;
        $count++;
    }

    $output = array(
        "draw"    => intval($_GET["draw"]),
        "recordsTotal"  =>  intval($count),
//        "recordsFiltered" => intval($count),
        "data" => $data
    );


    echo json_encode($output);

    wp_die();
}


function supervisor_edit_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;

    if (isset($request['sup_id_edit'],$request['sup_fname_edit'],$request['sup_lname_edit'],$request['sup_username_edit'],$request['sup_email_edit'],$request['sup_pass_edit'],$request['sup_status_edit']))
    {
        $sup_id_edit=intval($request['sup_id_edit']);
        $sup_fname_edit=sanitize_text_field($request['sup_fname_edit']);
        $sup_lname_edit=sanitize_text_field($request['sup_lname_edit']);
        $sup_username_edit=sanitize_text_field($request['sup_username_edit']);
        $sup_email_edit=sanitize_email($request['sup_email_edit']);
        $sup_pass_edit=sanitize_text_field($request['sup_pass_edit']);
        $sup_status_edit=sanitize_text_field($request['sup_status_edit']);
        $response=array();
        if( empty( $sup_id_edit ) || empty( $sup_fname_edit ) || empty( $sup_lname_edit ) || empty( $sup_username_edit ) || empty( $sup_email_edit ) || empty( $sup_pass_edit ) || empty( $sup_status_edit ) )
        {
            $has_error2 = true;
            $response[0]="لطفا تمام فیلد ها را وارد نمایید!";
            $response[1]="empty";
            echo json_encode($response);
            exit();
        }

        $udata=get_userdata($sup_id_edit);
        if ($sup_email_edit != $udata->user_email)
        {
            if(email_exists($sup_email_edit))
            {
                $has_error2 = true;
                $response[0]="ایمیل وارد شده قبلا در سیستم ثبت شده است!";
                $response[1]="email";
                echo json_encode($response);
                exit();
            }
        }


        if( !isset($has_error2) )
        {
            $user_edit = array(
                'ID' =>$sup_id_edit,
                'user_login' => $sup_username_edit,
                'user_email' => $sup_email_edit,
                'user_pass' => $sup_pass_edit,
                'first_name' => $sup_fname_edit,
                'last_name' => $sup_lname_edit,
            );

            $userid_edit = wp_update_user($user_edit );

            if( !is_wp_error( $userid_edit ) )
            {
                $response[0]="اطلاعات کارفرما با موفقیت ویرایش گردید!";
                $response[1]="true";
                update_user_meta($userid_edit, 'status', $sup_status_edit);
                echo json_encode($response);
                exit();
            }
        }


    }
}

function supervisor_add_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;
    if (isset($request['sup_add_fname'],$request['sup_add_lname'],$request['sup_add_user_name'],$request['sup_add_email'],$request['sup_add_pass'],$request['sup_add_status']))
    {
        $sup_add_fname=sanitize_text_field($request['sup_add_fname']);
        $sup_add_lname=sanitize_text_field($request['sup_add_lname']);
        $sup_add_user_name=sanitize_text_field($request['sup_add_user_name']);
        $sup_add_email=sanitize_email($request['sup_add_email']);
        $sup_add_pass=sanitize_text_field($request['sup_add_pass']);
        $sup_add_status=sanitize_text_field($request['sup_add_status']);

        $response=array();
        if(empty( $sup_add_fname ) || empty( $sup_add_lname ) || empty( $sup_add_user_name ) || empty( $sup_add_email ) || empty( $sup_add_pass ) || empty( $sup_add_status ) )
        {
            $has_error2 = true;
            $response[0]="لطفا تمام فیلد ها را وارد نمایید!";
            $response[1]="empty";
            echo json_encode($response);
            exit();
        }



            if(email_exists($sup_add_email))
            {
                $has_error2 = true;
                $response[0]="ایمیل وارد شده قبلا در سیستم ثبت شده است!";
                $response[1]="email";
                echo json_encode($response);
                exit();
            }

            if(username_exists($sup_add_user_name))
            {
                $has_error2 = true;
                $response[0]="نام کاربری وارد شده قبلا در سیستم ثبت شده است!";
                $response[1]="username";
                echo json_encode($response);
                exit();
            }


        if( !isset($has_error2) )
        {
            $user_add = array(
                'user_login' => $sup_add_user_name,
                'user_email' => $sup_add_email,
                'user_pass' => $sup_add_pass,
                'first_name' => $sup_add_fname,
                'last_name' => $sup_add_lname,
            );

            $userid_add = wp_insert_user($user_add );

            if( !is_wp_error( $userid_add ) )
            {
                $response[0]="اطلاعات کارفرما با موفقیت ثبت گردید!";
                $response[1]="true";
                add_user_meta($userid_add, 'status', $sup_add_status);
                add_user_meta($userid_add, 'user_type', 'supervisor');
                echo json_encode($response);
                exit();
            }
        }


    }
}