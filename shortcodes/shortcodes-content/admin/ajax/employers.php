<?php
defined("ABSPATH") || exit;

add_action("wp_ajax_employers_data","employers_data_server_side_callback");
add_action("wp_ajax_employee_edit","employee_edit_server_side_callback");
add_action("wp_ajax_employee_add","employee_add_server_side_callback");



function employers_data_server_side_callback()
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
                    'value'   => 'employee'
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

    $employers = get_users($args);
    $count=1;
    foreach($employers as $employer)
    {
        $sub_array = array();
        $sub_array[] = $count;
        $temp = get_userdata($employer->ID);
        $sub_array[] = $temp->first_name .  " " .$temp->last_name;
        $sub_array[] = $temp->user_login ;
        $sub_array[] = "-";
        $sub_array[] = $temp->user_email ;
        $sub_array[] = ($temp->status == 'enable')?'<span class="tag tag-default tag-success">فعال</span>':'<span class="tag tag-default tag-info">غیر فعال</span>' ;
        $sub_array[] = '<button type="button" id="employee_edit" name="employee_edit" class="btn btn-sm btn-info btn-rounded  mr-1 mb-1" data-id="'.$employer->ID.'" data-username="'.$temp->user_login.'" data-fname="'.$temp->first_name.'" data-lname="'.$temp->last_name.'" data-email="'.$temp->user_email.'" data-status="'.$temp->status.'"><i class="icon-pencil3 fa-lg"></i></button>';

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


function employee_edit_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;

    if (isset($request['emp_id_edit'],$request['emp_fname_edit'],$request['emp_lname_edit'],$request['emp_username_edit'],$request['emp_email_edit'],$request['emp_pass_edit'],$request['emp_status_edit']))
    {
        $emp_id_edit=intval($request['emp_id_edit']);
        $emp_fname_edit=sanitize_text_field($request['emp_fname_edit']);
        $emp_lname_edit=sanitize_text_field($request['emp_lname_edit']);
        $emp_username_edit=sanitize_text_field($request['emp_username_edit']);
        $emp_email_edit=sanitize_email($request['emp_email_edit']);
        $emp_pass_edit=sanitize_text_field($request['emp_pass_edit']);
        $emp_status_edit=sanitize_text_field($request['emp_status_edit']);
        $response=array();
        if( empty( $emp_id_edit ) || empty( $emp_fname_edit ) || empty( $emp_lname_edit ) || empty( $emp_username_edit ) || empty( $emp_email_edit ) || empty( $emp_pass_edit ) || empty( $emp_status_edit ) )
        {
            $has_error2 = true;
            $response[0]="لطفا تمام فیلد ها را وارد نمایید!";
            $response[1]="empty";
            echo json_encode($response);
            exit();
        }

        $udata=get_userdata($emp_id_edit);
        if ($emp_email_edit != $udata->user_email)
        {
            if(email_exists($emp_email_edit))
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
                'ID' =>$emp_id_edit,
                'user_login' => $emp_username_edit,
                'user_email' => $emp_email_edit,
                'user_pass' => $emp_pass_edit,
                'first_name' => $emp_fname_edit,
                'last_name' => $emp_lname_edit,
            );

            $userid_edit = wp_update_user($user_edit );

            if( !is_wp_error( $userid_edit ) )
            {
                $response[0]="اطلاعات کارفرما با موفقیت ویرایش گردید!";
                $response[1]="true";
                update_user_meta($userid_edit, 'status', $emp_status_edit);
                echo json_encode($response);
                exit();
            }
        }


    }
}

function employee_add_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;
    if (isset($request['emp_add_fname'],$request['emp_add_lname'],$request['emp_add_user_name'],$request['emp_add_email'],$request['emp_add_pass'],$request['emp_add_status']))
    {
        $emp_add_fname=sanitize_text_field($request['emp_add_fname']);
        $emp_add_lname=sanitize_text_field($request['emp_add_lname']);
        $emp_add_user_name=sanitize_text_field($request['emp_add_user_name']);
        $emp_add_email=sanitize_email($request['emp_add_email']);
        $emp_add_pass=sanitize_text_field($request['emp_add_pass']);
        $emp_add_status=sanitize_text_field($request['emp_add_status']);

        $response=array();
        if(empty( $emp_add_fname ) || empty( $emp_add_lname ) || empty( $emp_add_user_name ) || empty( $emp_add_email ) || empty( $emp_add_pass ) || empty( $emp_add_status ) )
        {
            $has_error2 = true;
            $response[0]="لطفا تمام فیلد ها را وارد نمایید!";
            $response[1]="empty";
            echo json_encode($response);
            exit();
        }



            if(email_exists($emp_add_email))
            {
                $has_error2 = true;
                $response[0]="ایمیل وارد شده قبلا در سیستم ثبت شده است!";
                $response[1]="email";
                echo json_encode($response);
                exit();
            }

            if(username_exists($emp_add_user_name))
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
                'user_login' => $emp_add_user_name,
                'user_email' => $emp_add_email,
                'user_pass' => $emp_add_pass,
                'first_name' => $emp_add_fname,
                'last_name' => $emp_add_lname,
            );

            $userid_add = wp_insert_user($user_add );

            if( !is_wp_error( $userid_add ) )
            {
                $response[0]="اطلاعات کارفرما با موفقیت ثبت گردید!";
                $response[1]="true";
                add_user_meta($userid_add, 'status', $emp_add_status);
                add_user_meta($userid_add, 'user_type', 'employee');
                echo json_encode($response);
                exit();
            }
        }


    }
}