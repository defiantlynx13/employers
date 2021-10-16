<?php
defined("ABSPATH") || exit;

add_shortcode('SE_emp_print' , 'SE_emp_print_function');


function SE_emp_print_function()
{
    $current_user=wp_get_current_user();
    $current_user_type=get_user_meta($current_user->ID,'user_type',true);
    $current_user_status=get_user_meta($current_user->ID,'status',true);

    if( !is_user_logged_in() ){
        wp_redirect( home_url().'/se_login' );
        exit;
    }elseif($current_user_type!='employee' || $current_user_status =='disable')
    {
        wp_redirect( home_url().'/se_panel' );
    }
    else
    {
        require_once( plugin_dir_path(__FILE__) . 'shortcodes-content/employers/print/se_emp_print-content.php' );
    }

}


