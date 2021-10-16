<?php
/*
Plugin Name:  employers
Plugin URI:   https://gooani.com
Description:  This Is A Private Plugin :: Please Dont Share It!
Version:      1.0
Author:       saeed jamali
Author URI:   https://gooani.com
License:      private
*/

if( ! defined("ABSPATH") ) exit;

session_start();

if( ! defined( "ROOT" ) ){
    define("ROOT", dirname(__FILE__) );
}



//classes require
require_once( ROOT . '/inc/main-class.php' );

//events on activate plugin
$se_main = new Employers();

//event on uninstall plugin
register_deactivation_hook( __FILE__ , 'SE_deactivate_plugin' );
function SE_deactivate_plugin(){
    wp_delete_post( get_page_by_path( 'se_login', $output = OBJECT, $post_type = 'page' )->ID , true );
    wp_delete_post( get_page_by_path( 'se_panel', $output = OBJECT, $post_type = 'page' )->ID , true );
    wp_delete_post( get_page_by_path( 'se_supervisor-managment', $output = OBJECT, $post_type = 'page' )->ID , true );
    wp_delete_post( get_page_by_path( 'se_employee-managment', $output = OBJECT, $post_type = 'page' )->ID , true );
    wp_delete_post( get_page_by_path( 'se_project_edit', $output = OBJECT, $post_type = 'page' )->ID , true );
    wp_delete_post( get_page_by_path( 'se_project_admin_chart', $output = OBJECT, $post_type = 'page' )->ID , true );
    wp_delete_post( get_page_by_path( 'se_project_financial_bills', $output = OBJECT, $post_type = 'page' )->ID , true );
    wp_delete_post( get_page_by_path( 'se_project_situation_status', $output = OBJECT, $post_type = 'page' )->ID , true );
    wp_delete_post( get_page_by_path( 'se_project_situation_status_con', $output = OBJECT, $post_type = 'page' )->ID , true );
    wp_delete_post( get_page_by_path( 'se_project_daily_reports', $output = OBJECT, $post_type = 'page' )->ID , true );
    wp_delete_post( get_page_by_path( 'se_project_daily_report', $output = OBJECT, $post_type = 'page' )->ID , true );
    wp_delete_post( get_page_by_path( 'se_project_gallery', $output = OBJECT, $post_type = 'page' )->ID , true );
    wp_delete_post( get_page_by_path( 'se_project_notification', $output = OBJECT, $post_type = 'page' )->ID , true );
    wp_delete_post( get_page_by_path( 'se_project_message', $output = OBJECT, $post_type = 'page' )->ID , true );
    wp_delete_post( get_page_by_path( 'se_project_doc', $output = OBJECT, $post_type = 'page' )->ID , true );
    wp_delete_post( get_page_by_path( 'se_admin_print', $output = OBJECT, $post_type = 'page' )->ID , true );

    wp_delete_post( get_page_by_path( 'se_supervisor_pdrs_list', $output = OBJECT, $post_type = 'page' )->ID , true );
    wp_delete_post( get_page_by_path( 'se_supervisor_pdr_list', $output = OBJECT, $post_type = 'page' )->ID , true );

    wp_delete_post( get_page_by_path( 'se_employee_pdrs_list', $output = OBJECT, $post_type = 'page' )->ID , true );
    wp_delete_post( get_page_by_path( 'se_employee_pdr_list', $output = OBJECT, $post_type = 'page' )->ID , true );
    wp_delete_post( get_page_by_path( 'se_employee_pss_list', $output = OBJECT, $post_type = 'page' )->ID , true );
    wp_delete_post( get_page_by_path( 'se_project_emp_pss_con', $output = OBJECT, $post_type = 'page' )->ID , true );
    wp_delete_post( get_page_by_path( 'se_emp_print', $output = OBJECT, $post_type = 'page' )->ID , true );
    wp_delete_post( get_page_by_path( 'se_project_emp_financial_bills', $output = OBJECT, $post_type = 'page' )->ID , true );
    wp_delete_post( get_page_by_path( 'se_project_emp_notification', $output = OBJECT, $post_type = 'page' )->ID , true );
    wp_delete_post( get_page_by_path( 'se_project_emp_message', $output = OBJECT, $post_type = 'page' )->ID , true );


}



function app_output_buffer() {
    ob_start();
} // soi_output_buffer
add_action('init', 'app_output_buffer');



//if( is_admin() ){
//
//    //add plugin menus and pages -----------------------------------------------
//    add_action('admin_menu' , 'SE_add_menu_function');
//
//    function SE_add_menu_function(){
//
//        require_once( ROOT . '/inc/se-menu-pages.php' );
//
//    }
//}

require_once(ROOT . '/shortcodes/login.php');
require_once(ROOT . '/shortcodes/panel.php');
require_once(ROOT . '/shortcodes/supervisor-managment.php');
require_once(ROOT . '/shortcodes/employee-managment.php');
require_once(ROOT . '/shortcodes/se_project_edit.php');
require_once(ROOT . '/shortcodes/se_project_admin_chart.php');
require_once(ROOT . '/shortcodes/se_project_financial_bills .php');
require_once(ROOT . '/shortcodes/se_project_situation_status.php');
require_once(ROOT . '/shortcodes/se_project_situation_status_con.php');
require_once(ROOT . '/shortcodes/se_project_daily_reports.php');
require_once(ROOT . '/shortcodes/se_project_daily_report.php');
require_once(ROOT . '/shortcodes/se_project_gallery.php');
require_once(ROOT . '/shortcodes/se_project_notification.php');
require_once(ROOT . '/shortcodes/se_project_message.php');
require_once(ROOT . '/shortcodes/se_project_doc.php');
require_once(ROOT . '/shortcodes/se_admin_print.php');



require_once(ROOT . '/shortcodes/se_project_supervisor_daily_reports.php');
require_once(ROOT . '/shortcodes/se_project_supervisor_daily_report.php');


require_once(ROOT . '/shortcodes/se_project_employee_daily_reports.php');
require_once(ROOT . '/shortcodes/se_project_employee_daily_report.php');
require_once(ROOT . '/shortcodes/se_project_employee_pss.php');
require_once(ROOT . '/shortcodes/se_project_emp_pss_con.php');
require_once(ROOT . '/shortcodes/se_emp_print.php');
require_once(ROOT . '/shortcodes/se_project_emp_financial_bills .php');
require_once(ROOT . '/shortcodes/se_project_emp_notification.php');
require_once(ROOT . '/shortcodes/se_project_emp_message.php');



//style
add_action('wp_enqueue_scripts', function(){
    if ( is_page_template( 'template_login.php' ) ){
        wp_enqueue_style('se-bootstrap' , plugins_url('assets/css/style.css' , __FILE__) , null, null);
        wp_enqueue_style('se-bootstrap' , plugins_url('assets/css/style.css' , __FILE__) , null, null);
    }
    wp_enqueue_style('se-style-plugin' , plugins_url('assets/css/style.css' , __FILE__) , null, null);
    wp_enqueue_style('se-style-plugin' , plugins_url('assets/css/style.css' , __FILE__) , null, null);
});

//hide admin bar from users
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}

//prevent users from wp-admin
add_action( 'init', 'blockusers_init' );

function blockusers_init() {
    if ( is_admin() && ! current_user_can( 'administrator' ) &&
        ! ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) {
        wp_redirect( home_url().'/se_login' );
        exit;
    }
}

//redirect when wrong pass
add_action( 'wp_login_failed', 'my_front_end_login_fail' );  // hook failed login

function my_front_end_login_fail( $username ) {
    $referrer = $_SERVER['HTTP_REFERER'];  // where did the post submission come from?
    // if there's a valid referrer, and it's not the default log-in screen
    if ( !empty($referrer) && !strstr($referrer,'wp-login') && !strstr($referrer,'wp-admin') ) {
        wp_redirect( home_url(). '/se_login/?wrong=true' );  // let's append some information (login=failed) to the URL for the theme to use
        exit;
    }
}


add_action('wp_logout','auto_redirect_after_logout');
function auto_redirect_after_logout(){
    wp_redirect( home_url(). '/se_login' );
    exit();
}


add_filter('auth_cookie_expiration', 'my_expiration_filter', 99, 3);
function my_expiration_filter($seconds, $user_id, $remember){
//if "remember me" is checked;
    if ( $remember ) {
//WP defaults to 2 weeks;
        $seconds = 2*24*60*60; //UPDATE HERE;
    } else {
//WP defaults to 48 hrs/2 days;
        $seconds = 2*24*60*60; //UPDATE HERE;
    }
//http://en.wikipedia.org/wiki/Year_2038_problem
    if ( PHP_INT_MAX - time() < $seconds ) {
//Fix to a little bit earlier!
        $seconds = PHP_INT_MAX - time() - 5;
    }
    return $seconds;
}


require_once(ROOT . '/shortcodes/shortcodes-content/admin/ajax/pchart_data.php');
require_once(ROOT . '/shortcodes/shortcodes-content/admin/ajax/pfinancial_bills_data.php');
require_once(ROOT . '/shortcodes/shortcodes-content/admin/ajax/psituation_status_data.php');
require_once(ROOT . '/shortcodes/shortcodes-content/admin/ajax/psituation_status_con_data.php');
require_once(ROOT . '/shortcodes/shortcodes-content/admin/ajax/pdaily_reports_data.php');
require_once(ROOT . '/shortcodes/shortcodes-content/admin/ajax/pdaily_report_data.php');
require_once(ROOT . '/shortcodes/shortcodes-content/admin/ajax/project_gallery.php');
require_once(ROOT . '/shortcodes/shortcodes-content/admin/ajax/project_notification.php');
require_once(ROOT . '/shortcodes/shortcodes-content/admin/ajax/project_message.php');
require_once(ROOT . '/shortcodes/shortcodes-content/admin/ajax/project_doc.php');
require_once(ROOT . '/shortcodes/shortcodes-content/admin/ajax/employers.php');
require_once(ROOT . '/shortcodes/shortcodes-content/admin/ajax/supervisors.php');




require_once(ROOT . '/shortcodes/shortcodes-content/supervisor/ajax/supervisor_projects_data.php');
require_once(ROOT . '/shortcodes/shortcodes-content/supervisor/ajax/supervisor_pdrs_data.php');
require_once(ROOT . '/shortcodes/shortcodes-content/supervisor/ajax/supervisor_pdr_data.php');


require_once(ROOT . '/shortcodes/shortcodes-content/employers/ajax/emp_pdrs_data.php');
require_once(ROOT . '/shortcodes/shortcodes-content/employers/ajax/emp_pdr_data.php');
require_once(ROOT . '/shortcodes/shortcodes-content/employers/ajax/emp_pss_data.php');
require_once(ROOT . '/shortcodes/shortcodes-content/employers/ajax/emp_pss_con_data.php');
require_once(ROOT . '/shortcodes/shortcodes-content/employers/ajax/emp_pfinancial_bills_data.php');
require_once(ROOT . '/shortcodes/shortcodes-content/employers/ajax/emp_project_notification.php');
require_once(ROOT . '/shortcodes/shortcodes-content/employers/ajax/emp_project_message.php');



