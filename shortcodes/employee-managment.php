<?php
defined("ABSPATH") || exit;

add_shortcode('SE_employee_managment' , 'SE_employee_managment_function');

function SE_employee_managment_function()
{
    if( !is_user_logged_in() ){
        wp_redirect( home_url().'/se_login' );
        exit;
    }elseif(!current_user_can('administrator'))
    {
        wp_redirect( home_url().'/se_login' );
    }
    else
    {
        require_once( plugin_dir_path(__FILE__) . 'shortcodes-content/admin/employee-managment-content.php' );
    }

}
