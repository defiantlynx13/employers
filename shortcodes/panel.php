<?php

defined("ABSPATH") || exit;

add_shortcode('SE_panel' , 'SE_panel_function');

function SE_panel_function()
{
    if( !is_user_logged_in() ){
        wp_redirect( home_url().'/se_login' );
        exit;
    }

     $current_user=wp_get_current_user();
     $current_user_type=get_user_meta($current_user->ID,'user_type',true);
     $current_user_status=get_user_meta($current_user->ID,'status',true);
    if( user_can( $current_user->ID, 'administrator' ))
    {
        require_once( plugin_dir_path(__FILE__) . 'shortcodes-content/admin/admin-panel-content.php' );
    }
    else if ($current_user_type == 'supervisor' and $current_user_status=='enable')
    {
        require_once( plugin_dir_path(__FILE__) . 'shortcodes-content/supervisor/panel-content.php' );
    }
    else if ($current_user_type == 'employee' and $current_user_status=='enable')
    {
        require_once( plugin_dir_path(__FILE__) . 'shortcodes-content/employers/panel-content.php' );
    }
    else
    {
        wp_logout();
        wp_redirect( home_url().'/se_login' );

    }

}