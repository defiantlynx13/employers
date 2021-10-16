<?php
//create custom template page

//reset page
//$reset_title = wp_strip_all_tags( 'فراموشی رمز عبور' );
//$reset = array(
//    'post_title'    => $reset_title,
//    'post_name'     => 'se_reset',
//    'post_content'  => '[SE_reset]',
//    'post_status'   => 'publish',
//    'post_author'   => 1,
//    'post_type'     => 'page',
//);

//post_exists( $reset_title ) or wp_insert_post( $reset );

//login page
$login_title = wp_strip_all_tags( 'ورود به پنل' );
$login = array(
    'post_title'    => $login_title,
    'post_name'     => 'se_login',
    'post_content'  => '[SE_login]',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'page_template'  => 'template_login.php'
);
post_exists( $login_title ) or wp_insert_post( $login );

//supervisor managment
$supervisor_title = wp_strip_all_tags( 'مدیریت سرپرستان' );
$supervisor = array(
    'post_title'    => $supervisor_title,
    'post_name'     => 'se_supervisor-managment',
    'post_content'  => '[SE_supervisor_managment]',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'page_template'  => 'template_login.php',
);
post_exists( $supervisor_title ) or wp_insert_post( $supervisor);

//employee managment
$employee_managment_title = wp_strip_all_tags( 'کارفرمایان' );
$employee_managment = array(
    'post_title'    => $employee_managment_title,
    'post_name'     => 'se_employee-managment',
    'post_content'  => '[SE_employee_managment]',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'page_template'  => 'template_login.php',
);

post_exists( $employee_managment_title ) or wp_insert_post( $employee_managment);

//panel page
$panel_title = wp_strip_all_tags( 'داشبورد' );
$panel = array(
    'post_title'    => $panel_title,
    'post_name'     => 'se_panel',
    'post_content'  => '[SE_panel]',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'page_template'  => 'template_login.php',
);
post_exists( $panel_title ) or wp_insert_post( $panel );

//project edit page
$se_project_edit_title = wp_strip_all_tags( 'ویرایش اطلاعات پروژه' );
$se_project_edit = array(
    'post_title'    => $se_project_edit_title,
    'post_name'     => 'se_project_edit',
    'post_content'  => '[SE_project_edit]',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'page_template'  => 'template_login.php',
);
post_exists( $se_project_edit_title ) or wp_insert_post( $se_project_edit );


//project edit page
$se_project_admin_chart_title = wp_strip_all_tags( 'پیشرفت پروژه نسبت به زمان- مدیریت' );
$se_project_admin_chart = array(
    'post_title'    => $se_project_admin_chart_title,
    'post_name'     => 'se_project_admin_chart',
    'post_content'  => '[SE_project_admin_chart]',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'page_template'  => 'template_login.php',
);
post_exists( $se_project_admin_chart_title ) or wp_insert_post( $se_project_admin_chart );

//project financial bills
$se_project_financial_bills_title = wp_strip_all_tags( 'صورت حساب مالی- مدیریت' );
$se_project_financial_bills = array(
    'post_title'    => $se_project_financial_bills_title,
    'post_name'     => 'se_project_financial_bills',
    'post_content'  => '[SE_project_financial_bills]',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'page_template'  => 'template_login.php',
);
post_exists( $se_project_financial_bills_title ) or wp_insert_post( $se_project_financial_bills );


//project situation_status
$se_project_situation_status_title = wp_strip_all_tags( 'صورت وضعیت پروژه- مدیریت' );
$se_project_situation_status = array(
    'post_title'    => $se_project_situation_status_title,
    'post_name'     => 'se_project_situation_status',
    'post_content'  => '[SE_project_situation_status]',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'page_template'  => 'template_login.php',
);
post_exists( $se_project_situation_status_title ) or wp_insert_post( $se_project_situation_status );

//project situation_status
$se_project_situation_status_con_title = wp_strip_all_tags( 'صورت وضعیت پروژه(جدول)- مدیریت' );
$se_project_situation_status_con = array(
    'post_title'    => $se_project_situation_status_con_title,
    'post_name'     => 'se_project_situation_status_con',
    'post_content'  => '[SE_project_situation_status_con]',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'page_template'  => 'template_login.php',
);
post_exists( $se_project_situation_status_con_title ) or wp_insert_post( $se_project_situation_status_con );
//project daily reports
$se_project_daily_reports_title = wp_strip_all_tags( 'گزارش های روزانه- مدیریت' );
$se_project_daily_reports = array(
    'post_title'    => $se_project_daily_reports_title,
    'post_name'     => 'se_project_daily_reports ',
    'post_content'  => '[SE_project_daily_reports ]',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'page_template'  => 'template_login.php',
);
post_exists( $se_project_daily_reports_title ) or wp_insert_post( $se_project_daily_reports );

//project daily report
$se_project_daily_report_title = wp_strip_all_tags( 'گزارش  روزانه- مدیریت' );
$se_project_daily_report = array(
    'post_title'    => $se_project_daily_report_title,
    'post_name'     => 'se_project_daily_report ',
    'post_content'  => '[SE_project_daily_report ]',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'page_template'  => 'template_login.php',
);
post_exists( $se_project_daily_report_title ) or wp_insert_post( $se_project_daily_report);


//project gallery
$se_project_gallery_title = wp_strip_all_tags( 'گالری تصاویر- مدیریت' );
$se_project_gallery = array(
    'post_title'    => $se_project_gallery_title,
    'post_name'     => 'se_project_gallery ',
    'post_content'  => '[SE_project_gallery ]',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'page_template'  => 'template_login.php',
);
post_exists( $se_project_gallery_title ) or wp_insert_post( $se_project_gallery);

//project gallery
$se_project_notification_title = wp_strip_all_tags( 'اعلان ها- مدیریت' );
$se_project_notification = array(
    'post_title'    => $se_project_notification_title,
    'post_name'     => 'se_project_notification ',
    'post_content'  => '[SE_project_notification ]',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'page_template'  => 'template_login.php',
);
post_exists( $se_project_notification_title ) or wp_insert_post( $se_project_notification);


//project gallery
$se_project_message_title = wp_strip_all_tags( 'پیام ها- مدیریت' );
$se_project_message = array(
    'post_title'    => $se_project_message_title,
    'post_name'     => 'se_project_message ',
    'post_content'  => '[SE_project_message ]',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'page_template'  => 'template_login.php',
);
post_exists( $se_project_message_title ) or wp_insert_post( $se_project_message);

//project doc
$se_project_doc_title = wp_strip_all_tags( 'مستندات- مدیریت' );
$se_project_doc = array(
    'post_title'    => $se_project_doc_title,
    'post_name'     => 'se_project_doc ',
    'post_content'  => '[SE_project_doc ]',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'page_template'  => 'template_login.php',
);
post_exists( $se_project_doc_title ) or wp_insert_post( $se_project_doc);

//admin  print
$se_admin_print_title = wp_strip_all_tags( 'پرینت- مدیریت' );
$se_admin_print = array(
    'post_title'    => $se_admin_print_title,
    'post_name'     => 'se_admin_print ',
    'post_content'  => '[SE_admin_print ]',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'page_template'  => 'template_login.php',
);
post_exists( $se_admin_print_title ) or wp_insert_post( $se_admin_print);




//admin  print
$se_supervisor_pdrs_list_title = wp_strip_all_tags( 'لیست گزارش های روزانه - سرپرست' );
$se_supervisor_pdrs_list = array(
    'post_title'    => $se_supervisor_pdrs_list_title,
    'post_name'     => 'se_supervisor_pdrs_list ',
    'post_content'  => '[SE_supervisor_pdrs_list ]',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'page_template'  => 'template_login.php',
);
post_exists( $se_supervisor_pdrs_list_title ) or wp_insert_post( $se_supervisor_pdrs_list);


$se_supervisor_pdr_list_title = wp_strip_all_tags( ' گزارش  روزانه - سرپرست' );
$se_supervisor_pdr_list = array(
    'post_title'    => $se_supervisor_pdr_list_title,
    'post_name'     => 'se_supervisor_pdr_list ',
    'post_content'  => '[SE_supervisor_pdr_list ]',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'page_template'  => 'template_login.php',
);
post_exists( $se_supervisor_pdr_list_title ) or wp_insert_post( $se_supervisor_pdr_list);



$se_employee_pdrs_list_title = wp_strip_all_tags( 'لیست گزارش های  روزانه - کارفرما' );
$se_employee_pdrs_list = array(
    'post_title'    => $se_employee_pdrs_list_title,
    'post_name'     => 'se_employee_pdrs_list ',
    'post_content'  => '[SE_employee_pdrs_list ]',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'page_template'  => 'template_login.php',
);
post_exists( $se_employee_pdrs_list_title ) or wp_insert_post( $se_employee_pdrs_list);


$se_employee_pdr_list_title = wp_strip_all_tags( ' گزارش  روزانه - کارفرما' );
$se_employee_pdr_list = array(
    'post_title'    => $se_employee_pdr_list_title,
    'post_name'     => 'se_employee_pdr_list ',
    'post_content'  => '[SE_employee_pdr_list ]',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'page_template'  => 'template_login.php',
);
post_exists( $se_employee_pdr_list_title ) or wp_insert_post( $se_employee_pdr_list);


$se_employee_pss_list_title = wp_strip_all_tags( ' صورت وضعیت های پروژه - کارفرما' );
$se_employee_pss_list = array(
    'post_title'    => $se_employee_pss_list_title,
    'post_name'     => 'se_employee_pss_list ',
    'post_content'  => '[SE_employee_pss_list ]',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'page_template'  => 'template_login.php',
);
post_exists( $se_employee_pss_list_title ) or wp_insert_post( $se_employee_pss_list);

$se_employee_pss_con_title = wp_strip_all_tags( ' صورت وضعیت  پروژه - کارفرما' );
$se_employee_pss_con = array(
    'post_title'    => $se_employee_pss_con_title,
    'post_name'     => 'se_project_emp_pss_con ',
    'post_content'  => '[SE_project_emp_pss_con ]',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'page_template'  => 'template_login.php',
);
post_exists( $se_employee_pss_con_title ) or wp_insert_post( $se_employee_pss_con);


//admin  print
$se_emp_print_title = wp_strip_all_tags( 'پرینت- کارفرما' );
$se_emp_print = array(
    'post_title'    => $se_emp_print_title,
    'post_name'     => 'se_emp_print ',
    'post_content'  => '[SE_emp_print ]',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'page_template'  => 'template_login.php',
);
post_exists( $se_emp_print_title ) or wp_insert_post( $se_emp_print);


//project financial bills
$se_project_emp_financial_bills_title = wp_strip_all_tags( 'صورت حساب مالی- کارفرما' );
$se_project_emp_financial_bills = array(
    'post_title'    => $se_project_emp_financial_bills_title,
    'post_name'     => 'se_project_emp_financial_bills',
    'post_content'  => '[SE_project_emp_financial_bills]',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'page_template'  => 'template_login.php',
);
post_exists( $se_project_emp_financial_bills_title ) or wp_insert_post( $se_project_emp_financial_bills );


//project gallery
$se_project_emp_notification_title = wp_strip_all_tags( 'اعلان ها- کارفرما' );
$se_project_emp_notification = array(
    'post_title'    => $se_project_emp_notification_title,
    'post_name'     => 'se_project_emp_notification ',
    'post_content'  => '[SE_project_emp_notification ]',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'page_template'  => 'template_login.php',
);
post_exists( $se_project_emp_notification_title ) or wp_insert_post( $se_project_emp_notification);


//project gallery
$se_project_emp_message_title = wp_strip_all_tags( 'پیام ها- کارفرما' );
$se_project_emp_message = array(
    'post_title'    => $se_project_emp_message_title,
    'post_name'     => 'se_project_emp_message ',
    'post_content'  => '[SE_project_emp_message ]',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'page_template'  => 'template_login.php',
);
post_exists( $se_project_emp_message_title ) or wp_insert_post( $se_project_emp_message);

//create tables
require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
global $wpdb, $charset_collate;
$table1 = $wpdb->prefix . "projects";
$query = "CREATE TABLE $table1 ( 
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `pname` varchar(255) CHARACTER SET utf8 NOT NULL,
 `expected_cost` decimal(30,0) NOT NULL,
 `cname` varchar(255) CHARACTER SET utf8 NOT NULL,
 `cprofit` decimal(11,0) NOT NULL,
 `eid` int(11) NOT NULL,
 `sid` int(11) NOT NULL,
 `date` date NOT NULL,
 `status` varchar(40) CHARACTER SET utf8 NOT NULL,
 `bio` text CHARACTER SET utf8 NOT NULL,
 PRIMARY KEY (`id`)
    ) $charset_collate;";

$table2 = $wpdb->prefix . "pfinancial_bills";
$query .= "CREATE TABLE `{$table2}` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `pid` int(11) NOT NULL,
 `pfb_title` text COLLATE utf8_unicode_ci NOT NULL,
 `pfb_date` date NOT NULL,
 `pfb_amount` decimal(10,0) NOT NULL,
 `pfb_description` text COLLATE utf8_unicode_ci NOT NULL,
 `pfb_descrption` text COLLATE utf8_unicode_ci NOT NULL,
 PRIMARY KEY (`id`)
) $charset_collate;";


$table3 = $wpdb->prefix . "pchart";
$query .= "CREATE TABLE `{$table3}` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `pid` int(11) NOT NULL,
 `pchart_name` varchar(255) CHARACTER SET utf8 NOT NULL,
 `pchart_plan_start` date NOT NULL,
 `pchart_plan_end` date NOT NULL,
 `pchart_exec_start` date NOT NULL,
 `pchart_exec_end` date NOT NULL,
 PRIMARY KEY (`id`)
) $charset_collate;";

$table4 = $wpdb->prefix . "psituation_status";
$query .= "CREATE TABLE `{$table4}` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `pid` int(11) NOT NULL,
 `date` date NOT NULL,
 `total` decimal(10,0) NOT NULL,
 `num` int(11) NOT NULL,
 PRIMARY KEY (`id`)
) $charset_collate;";

$table5 = $wpdb->prefix . "pdaily_reports";
$query .= "CREATE TABLE `{$table5}` (
`id` int(11) NOT NULL AUTO_INCREMENT,
 `pid` int(11) NOT NULL,
 `date` date NOT NULL,
 `max_temp` decimal(10,0) NOT NULL,
 `min_temp` decimal(10,0) NOT NULL,
 `status` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
 `important_works` text COLLATE utf8mb4_unicode_ci NOT NULL,
 `next_day_plan` text COLLATE utf8mb4_unicode_ci NOT NULL,
 `problems` text COLLATE utf8mb4_unicode_ci NOT NULL,
 PRIMARY KEY (`id`)
) $charset_collate;";

$table6 = $wpdb->prefix . "pdaily_reports_man_power";
$query .= "CREATE TABLE `{$table6}` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `pdr_id` int(11) NOT NULL,
 `personnel` varchar(60) NOT NULL,
 `entrance_time` time NOT NULL,
 `exit_time` time NOT NULL,
 PRIMARY KEY (`id`)
) $charset_collate;";



$table7 = $wpdb->prefix . "pdaily_reports_materials";
$query .= "CREATE TABLE `{$table7}` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `pdr_id` int(11) NOT NULL,
 `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
 `carrier` text COLLATE utf8mb4_unicode_ci NOT NULL,
 `unit` text COLLATE utf8mb4_unicode_ci NOT NULL,
 `amount` text COLLATE utf8mb4_unicode_ci NOT NULL,
 PRIMARY KEY (`id`)
) $charset_collate;";

$table8 = $wpdb->prefix . "pdaily_reports_machinery";
$query .= "CREATE TABLE `{$table8}` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `pdr_id` int(11) NOT NULL,
 `title` text NOT NULL,
 `entrance_time` time NOT NULL,
 `exit_time` time NOT NULL,
 PRIMARY KEY (`id`)
) $charset_collate;";

$table9 = $wpdb->prefix . "pdaily_reports_peyments";
$query .= "CREATE TABLE `{$table9}` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `pdr_id` int(11) NOT NULL,
 `title` text NOT NULL,
 `amount` decimal(10,0) NOT NULL,
 `bin` text NOT NULL,
 PRIMARY KEY (`id`)
) $charset_collate;";

$table10 = $wpdb->prefix . "projects_gallery";
$query .= "CREATE TABLE `{$table10}` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `pid` int(11) NOT NULL,
 `link` text NOT NULL,
 `title` text NOT NULL,
 PRIMARY KEY (`id`)
) $charset_collate;";

$table11 = $wpdb->prefix . "projects_notification";
$query .= "CREATE TABLE `{$table11}` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `p_id` int(11) NOT NULL,
 `title` text NOT NULL,
 `text` text NOT NULL,
 `link` text NOT NULL,
 `date` datetime NOT NULL,
 PRIMARY KEY (`id`)
) $charset_collate;";

$table12= $wpdb->prefix . "projects_doc";
$query .= "CREATE TABLE `{$table12}` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `pid` int(11) NOT NULL,
 `link` text NOT NULL,
 `title` text NOT NULL,
 PRIMARY KEY (`id`)
) $charset_collate;";


$table13 = $wpdb->prefix . "psituation_status_con";
$query .= "CREATE TABLE `{$table13}` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `p_id` int(11) NOT NULL,
 `pss_id` int(11) NOT NULL,
 `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
 `count` int(11) NOT NULL,
 `vol_area_weight_minor` int(11) NOT NULL,
 `vol_area_weight_total` decimal(10,0) NOT NULL,
 `unit` text COLLATE utf8mb4_unicode_ci NOT NULL,
 `unit_price` int(11) NOT NULL,
 `r_total` decimal(10,0) NOT NULL,
 `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
 PRIMARY KEY (`id`)
) $charset_collate;";

$table14 = $wpdb->prefix . "projects_messages";
$query .= "CREATE TABLE `{$table14}` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `p_id` int(11) NOT NULL,
 `sender` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
 `receiver` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
 `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
 `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
 `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
 `date` datetime NOT NULL,
 `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
 PRIMARY KEY (`id`)
) $charset_collate;";




dbDelta( $query );