<?php
defined("ABSPATH") || exit;

add_shortcode('SE_project_emp_financial_bills' , 'SE_project_emp_financial_bills');


function SE_project_emp_financial_bills()
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
        require_once( plugin_dir_path(__FILE__) . 'shortcodes-content/employers/se_project_emp_financial_bills_content.php' );
    }

}

