<html lang="en" data-textdirection="rtl" class="loading">

<!-- Mirrored from pixinvent.com/free-bootstrap-template/robust-lite/html/rtl/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jun 2017 06:37:27 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>وب سایت من</title>
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo plugins_url('emp/assets-profile/images/ico/apple-icon-60.png'); ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo plugins_url('emp/assets-profile/images/ico/apple-icon-76.png'); ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo plugins_url('emp/assets-profile/images/ico/apple-icon-120.png'); ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo plugins_url('emp/assets-profile/images/ico/apple-icon-152.png'); ?>">

    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/free-bootstrap-template/robust-lite/app-assets/images/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="<?php echo plugins_url('emp/assets-profile/images/ico/favicon-32.png'); ?>">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo plugins_url('emp/assets-profile/css-rtl/bootstrap.css'); ?>">
    <!-- font icons-->

    <link rel="stylesheet" type="text/css" href="<?php echo plugins_url('emp/assets-profile/fonts/icomoon.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo plugins_url('emp/assets-profile/fonts/flag-icon-css/css/flag-icon.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo plugins_url('emp/assets-profile/vendors/css/extensions/pace.css'); ?>">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo plugins_url('emp/assets-profile/css-rtl/bootstrap-extended.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo plugins_url('emp/assets-profile/css-rtl/app.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo plugins_url('emp/assets-profile/css-rtl/colors.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo plugins_url('emp/assets-profile/css-rtl/custom-rtl.css'); ?>">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->

    <link rel="stylesheet" type="text/css" href="<?php echo plugins_url('emp/assets-profile/css-rtl/core/menu/menu-types/vertical-menu.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo plugins_url('emp/assets-profile/css-rtl/core/menu/menu-types/vertical-overlay-menu.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo plugins_url('emp/assets-profile/css-rtl/pages/login-register.css'); ?>">

    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!--    <link rel="stylesheet" type="text/css" href="--><?php //echo plugins_url('emp/assets-profile/css/style-rtl.css'); ?><!--">-->
    <!-- END Custom CSS-->

    <!-- BEGIN Custom font-->
    <link rel="stylesheet" type="text/css" href="<?php echo plugins_url('emp/assets/css/login-style.css'); ?>">
    <!-- END Custom Font-->



    <link rel="stylesheet" type="text/css" href="<?php echo plugins_url('emp/assets-profile/css-rtl/mdb/mdb.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo plugins_url('emp/assets-profile/css-rtl/persian-date/persian-datepicker.min.css'); ?>">


    <style type="text/css">
         @media screen and (min-width: 640px) {
             .dataTables_wrapper .dataTables_length, .dataTables_wrapper .dataTables_filter {
                 text-align: left;
             }
         }
         .dataTables_wrapper .dataTables_length, .dataTables_wrapper .dataTables_filter {
             margin: 10px;
         }
        .custom-select{
            font-family: IRANSansWeb;
        }

        .popover{
            left: 0;
            right: auto;
            font-family: IRANSansWeb;
        }

         .popover-content {
             display: none;
         }
         .btn-floating{
             margin: 0px;
         }
        .datepicker-plot-area{
            font-family: IRANSansWeb;
        }
         .trigger {
             padding: 1px 10px;
             font-size: 12px;
             font-weight: 400;
             border-radius: 10px;
             background-color: #eee;
             color: #212121;
             display: inline-block;
             margin: 2px 5px;
         }

         .hoverable, .trigger {
             transition: box-shadow 0.55s;
             box-shadow: 0;
         }

         .hoverable:hover, .trigger:hover {
             transition: box-shadow 0.45s;
             box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
         }

    </style>

</head>
<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">
<!-- navbar-fixed-top-->

<?php require_once( plugin_dir_path(__FILE__) . 'header/header.php' ); ?>

<!-- ////////////////////////////////////////////////////////////////////////////-->


<!-- main menu-->
<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
    <!-- main menu header-->
    <div class="main-menu-header">
        <!--            <input type="text" placeholder="Search" class="menu-search form-control round"/>-->
    </div>
    <!-- / main menu header-->
    <!-- main menu content-->
    <?php require_once( plugin_dir_path(__FILE__) . 'sidebar/sidebar-menu.php' ); ?>
    <!-- /main menu content-->
    <!-- main menu footer-->
    <!-- include includes/menu-footer-->
    <!-- main menu footer-->
</div>
<!-- / main menu-->

<div class="app-content content container-fluid">
    <div class="content-wrapper">

        <div class="content-body">

            <?php

            if (isset($_POST['se_edit_project'])){
                wp_redirect(home_url().'/se_project_edit/?p_id='.$_POST['se_edit_project_id'].'&edit1=true');
                exit;
            }

            if (isset($_POST['se_project_admin_chart'])){
                wp_redirect(home_url().'/se_project_admin_chart/?p_id='.$_POST['se_edit_project_id']);
                exit;
            }
             if (isset($_POST['se_project_financial_bills'])){
                wp_redirect(home_url().'/se_project_financial_bills/?p_id='.$_POST['se_edit_project_id']);
                exit;
             }

             if (isset($_POST['se_project_situation_status'])){
                wp_redirect(home_url().'/se_project_situation_status/?p_id='.$_POST['se_edit_project_id']);
                exit;
             }

             if (isset($_POST['se_project_daily_reports'])){
                wp_redirect(home_url().'/se_project_daily_reports/?p_id='.$_POST['se_edit_project_id']);
                exit;
             }
             if (isset($_POST['se_project_gallery'])){
                wp_redirect(home_url().'/se_project_gallery/?p_id='.$_POST['se_edit_project_id']);
                exit;
             }
             if (isset($_POST['se_project_notification'])){
                wp_redirect(home_url().'/se_project_notification/?p_id='.$_POST['se_edit_project_id']);
                exit;
             }
            if (isset($_POST['se_project_message'])){
                wp_redirect(home_url().'/se_project_message/?p_id='.$_POST['se_edit_project_id']);
                exit;
            }
             if (isset($_POST['se_project_doc'])){
                wp_redirect(home_url().'/se_project_doc/?p_id='.$_POST['se_edit_project_id']);
                exit;
             }



            require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
            global $wpdb;
            $table = $wpdb->prefix .'projects';
            $get_projects = $wpdb->get_results("select * from {$table}  ORDER BY  status DESC,date DESC ");

            if( isset($_POST['se_np_submit']) )
            {
                 $pname = isset($_POST['se_np_pname']) ? sanitize_text_field($_POST['se_np_pname']) : '' ;
                 $expected_cost = isset($_POST['se_np_expected_cost']) ? intval($_POST['se_np_expected_cost']) : '' ;
                 $cname = isset($_POST['se_np_cname']) ? sanitize_text_field($_POST['se_np_cname']) : '' ;
                 $cprofit = isset($_POST['se_np_cprofit']) ? intval($_POST['se_np_cprofit']) : '' ;
                 $eid = isset($_POST['se_np_eid']) ? absint($_POST['se_np_eid']) : '' ;
                 $sid = isset($_POST['se_np_sid']) ? absint($_POST['se_np_sid']) : '' ;
                 $status = isset($_POST['se_np_status']) ? $_POST['se_np_status'] : '' ;

                $epoch = $_POST['se_np_date'];
                $dt = new DateTime("@$epoch");  // convert UNIX timestamp to PHP DateTime
                $date= $dt->format('Y-m-d'); // output = 2017-01-01 00:00:00

                $bio = isset($_POST['se_np_bio']) ? sanitize_textarea_field($_POST['se_np_bio']) : '' ;





                if( !isset($has_error) )
                {
                    $add_project = $wpdb->insert(
                            $table ,
                            array(
                                'pname'    => $pname,
                                'expected_cost'    => $expected_cost,
                                'cname'    => $cname,
                                'cprofit'    => $cprofit,
                                'eid'    => $eid,
                                'sid'    => $sid,
                                'date'    => $date,
                                'status'    => $status,
                                'bio'    => $bio
                                )
                        );

                    if($add_project)
                    {
                        wp_redirect(home_url().'/se_panel/?add=true');
                        exit;
                    }
                }

            }
            ?>

            <p> <span class="float-xs-right"><button type="button" class="btn purple-gradient btn-rounded  mr-1 mb-1" data-toggle="modal" data-target="#inlineForm"><i class="icon-plus3"></i>  پروژه جدید</button></span></p>
            <!-- stats -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">لیست پروژه ها</h4>
                            <?php ?>
                            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-block">
                            </div>
                            <div class="table-responsive">
                                <table id="dtAllProject" class="table table-hover mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th class="text-xs-center">عملیات</th>
                                        <th>نام پروژه</th>
                                        <th>هزینه پیش بینی شده</th>
                                        <th>پیمانکار</th>
                                        <th>سود پیمانکار</th>
                                        <th>کارفرما</th>
                                        <th>سرپرست</th>
                                        <th>تاریخ شروع</th>
                                        <th>وضعیت</th>
                                        <th>توضیحات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $count=1;
                                    foreach ($get_projects as $project)
                                    {
                                        ?>
                                        <tr>
                                            <td class="text-truncate"><a href="#"><?php echo $count;?></a></td>
                                            <td class="text-truncate">
                                                <form  method="post" action="<?php echo home_url().'/se_panel/';?>">
                                                    <input  type="hidden" name="se_edit_project_id" value="<?php echo $project->id?>">
                                                    <button type="submit" name="se_edit_project" class="btn btn-sm btn-elegant btn-rounded  mr-1 mb-1" data-toggle="popover-hover" title="ویرایش پروژه" ><i class="icon-pencil3 fa-lg"></i> </button>
                                                    <button type="submit" name="se_project_financial_bills" class="btn btn-sm btn-unique btn-rounded mr-1 mb-1" data-toggle="popover-hover" title=" صورت حساب مالی" > <i class="icon-dollar fa-lg"></i></button>
                                                    <button type="submit" name="se_project_situation_status" class="btn btn-sm btn-pink btn-rounded  mr-1 mb-1" data-toggle="popover-hover" title="صورت وضعیت" ><i class="icon-sort-amount-asc2 fa-lg"></i>   </button>
                                                    <br>
                                                    <button type="submit" name="se_project_daily_reports" class="btn btn-sm btn-light-green btn-rounded  mr-1 mb-1" data-toggle="popover-hover" title="گزارش روزانه" ><i class="icon-calendar4 fa-lg"></i></button>
                                                    <button type="submit" name="se_project_admin_chart" class="btn btn-sm btn-brown  btn-rounded  mr-1 mb-1" data-toggle="popover-hover" title="نمودار پیشرفت" ><i class="icon-bar-chart-o fa-lg"></i>  </button>
                                                    <button type="submit" name="se_project_gallery" class="btn btn-sm btn-blue  btn-rounded  mr-1 mb-1" data-toggle="popover-hover" title="گالری تصاویر" ><i class="icon-camera8 fa-lg"></i>  </button>
                                                    <br>
                                                    <button type="submit" name="se_project_doc" class="btn btn-sm btn-purple  btn-rounded  mr-1 mb-1" data-toggle="popover-hover" title="مستندات پروژه" ><i class="icon-images fa-lg"></i>  </button>
                                                    <?php
                                                    $table = $wpdb->prefix .'projects_messages';
                                                    $unread_messages = $wpdb->get_var("select count(*) from {$table} where p_id={$project->id} and status ='pending' and receiver='admin'");
                                                    ?>
                                                    <button type="submit" name="se_project_message" class="btn btn-sm btn-blue-grey  btn-rounded  mr-1 mb-1" data-toggle="popover-hover" title="پیام ها" ><i class="ficon icon-mail6 fa-lg"></i>  </button><?php if($unread_messages>0) echo '<span class="tag tag-pill tag-default tag-danger tag-default tag-up" style="    top: -20px;left: 26px;">'.$unread_messages.'</span>';?>
                                                    <button type="submit" name="se_project_notification" class="btn btn-sm btn-mdb-color  btn-rounded  mr-1 mb-1" data-toggle="popover-hover" title="اعلان ها" ><i class="ficon icon-bell4 fa-lg"></i>  </button>

                                                </form>

                                            </td>
                                            <td class="text-truncate"><?php echo $project->pname; ?></td>
                                            <td class="text-truncate"><?php echo $project->expected_cost; ?></td>
                                            <td class="text-truncate"><?php echo $project->cname; ?></td>
                                            <td class="text-truncate"><?php echo $project->cprofit; ?></td>
                                            <td class="text-truncate">
                                                <?php
                                                $employee=get_userdata($project->eid);
                                                echo $employee->first_name .  " " .$employee->last_name;
                                                ?>
                                            </td>
                                            <td class="text-truncate">
                                                <?php
                                                $supervisor=get_userdata($project->sid);
                                                echo $supervisor->first_name .  " " .$supervisor->last_name;
                                                ?>
                                            </td>
                                            <td class="text-truncate">
                                                <?php
                                                require_once( ABSPATH . 'wp-content/plugins/emp/inc/jdf.php' );
                                                echo $solar_date = jdate("Y/m/d", strtotime($project->date));
                                                ?>
                                            </td>
                                            <td class="text-truncate"><?php echo ($project->status=="enable")?'<span class="tag tag-default tag-info">درحال اجرا</span>':'<span class="tag tag-default tag-success">پایان یافته</span>' ?></td>
                                            <td class="text-truncate"><?php echo substr($project->bio, 0, 30)."..."; ?></td>
                                        </tr>
                                        <?php
                                        $count++;
                                    }
                                    ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ stats -->


        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade text-xs-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <label class="modal-title text-text-bold-600" id="myModalLabel33">پروژه جدید</label>
            </div>


            <div class="card-block">

                <form class="form" method="post">

                    <div class="form-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="se_np_pname">نام پروژه</label>
                                    <div class="position-relative has-icon-left">
                                        <input type="text" id="se_np_pname" class="form-control" placeholder="نام پروژه" name="se_np_pname" required>
                                        <div class="form-control-position">
                                            <i class="icon-briefcase4"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="se_np_expected_cost">هزینه پیش بینی شده پروژه</label>
                                    <div class="position-relative has-icon-left">
                                        <input type="number" id="se_np_expected_cost" class="form-control" placeholder="هزینه پیش بینی شده پروژه" name="se_np_expected_cost"  required >
                                        <div class="form-control-position">
                                            <i class="icon-arrow-graph-up-left"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="se_np_cname">پیمانکار</label>
                                    <div class="position-relative has-icon-left">
                                        <input type="text" id="se_np_cname" class="form-control" placeholder="پیمانکار" name="se_np_cname"  required >
                                        <div class="form-control-position">
                                            <i class="icon-head"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="se_np_cprofit">سود پیمانکار</label>
                                    <div class="position-relative has-icon-left">
                                        <input type="number" id="se_np_cprofit" class="form-control" placeholder="سود پیمانکار" name="se_np_cprofit" required>
                                        <div class="form-control-position">
                                            <i class="icon-dollar"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <?php
                            $table = $wpdb->prefix .'projects';
                            $temps=$wpdb->get_results("select eid from {$table}");
                            $used_eid=array();
                            foreach ($temps as $temp)
                            {
                                $used_eid[]=$temp->eid;
                            }

                            ?>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="se_np_eid">کارفرما</label>
                                    <select class="browser-default custom-select" id="se_np_eid" name="se_np_eid" required>

                                        <?php
                                        $emp_list =
                                            get_users(
                                                array(
                                                    'meta_query' => array(
                                                        array(
                                                            'key' => 'user_type',
                                                            'value' => 'employee',
                                                            'compare' => '=='
                                                        ),
                                                        array(
                                                            'key' => 'status',
                                                            'value' => 'enable',
                                                            'compare' => '=='
                                                        )
                                                    )
                                                )
                                            );
                                        
                                        foreach ( $emp_list as $emp){
                                            if (in_array($emp->ID,$used_eid))
                                                continue;
                                            $temp = get_userdata($emp->ID);
                                            ?>
                                            <option value="<?php echo $emp->ID?>"><?php echo $temp->first_name .  " " .$temp->last_name; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="se_np_sid">سرپرست</label>
                                    <select class="browser-default custom-select" id="se_np_sid" name="se_np_sid" required>
                                        <?php
                                        $sup_list = get_users(
                                            array(
                                                'meta_query' => array(
                                                    array(
                                                        'key' => 'user_type',
                                                        'value' => 'supervisor',
                                                        'compare' => '=='
                                                    ),
                                                    array(
                                                        'key' => 'status',
                                                        'value' => 'enable',
                                                        'compare' => '=='
                                                    )
                                                )
                                            )
                                        );
                                        foreach ( $sup_list as $sup){
                                            $temp = get_userdata($sup->ID);
                                            ?>
                                            <option value="<?php echo $sup->ID?>"><?php echo $temp->first_name .  " " .$temp->last_name;?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>وضعیت پروژه</label>
                                    <div class="input-group">
                                        <label class="display-inline-block custom-control custom-radio ml-1">
                                            <input type="radio" name="se_np_status" checked="" class="custom-control-input" value="enable">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description ml-0">در حال اجرا</span>
                                        </label>
                                        <label class="display-inline-block custom-control custom-radio">
                                            <input type="radio" name="se_np_status" class="custom-control-input" value="disable">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description ml-0">پایان یافته</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="se_np_date">تاریخ شروع</label>
                                    <div class="position-relative has-icon-left">
                                        <input type="text" id="se_np_date2" class="form-control" name="se_np_date2">
                                        <input type="hidden" id="se_np_date" class="form-control" name="se_np_date">
                                        <div class="form-control-position">
                                            <i class="icon-calendar5"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="se_np_bio">توضیحات</label>
                            <div class="position-relative has-icon-left">
                                <textarea id="se_np_bio" rows="5" class="form-control" name="se_np_bio" placeholder="توضیحات"></textarea>
                                <div class="form-control-position">
                                    <i class="icon-file2"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions right">
                        <button type="reset" class="btn btn-warning mr-1" data-dismiss="modal" value="close">
                            <i class="icon-cross2"></i> انصراف
                        </button>
                        <button type="submit" class="btn btn-primary" name="se_np_submit">
                            <i class="icon-check2"></i> افزودن
                        </button>
                    </div>
                </form>

            </div>


        </div>
    </div>
</div>

<!-- Modal -->
<!-- ////////////////////////////////////////////////////////////////////////////-->

<?php //require_once( plugin_dir_path(__FILE__) . 'footer/footer.php' ); ?>


<!-- BEGIN VENDOR JS-->
<script src="<?php echo plugins_url('emp/assets-profile/js/core/libraries/jquery.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo plugins_url('emp/assets-profile/vendors/js/ui/tether.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo plugins_url('emp/assets-profile/js/core/libraries/bootstrap.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo plugins_url('emp/assets-profile/vendors/js/ui/perfect-scrollbar.jquery.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo plugins_url('emp/assets-profile/vendors/js/ui/unison.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo plugins_url('emp/assets-profile/vendors/js/ui/blockUI.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo plugins_url('emp/assets-profile/vendors/js/ui/jquery.matchHeight-min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo plugins_url('emp/assets-profile/vendors/js/ui/screenfull.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo plugins_url('emp/assets-profile/vendors/js/extensions/pace.min.js'); ?>" type="text/javascript"></script>
<!-- BEGIN PAGE VENDOR JS-->
<script src="<?php echo plugins_url('emp/assets-profile/vendors/js/charts/chart.min.js'); ?>" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN ROBUST JS-->
<script src="<?php echo plugins_url('emp/assets-profile/js/core/app-menu.js'); ?>" type="text/javascript"></script>
<script src="<?php echo plugins_url('emp/assets-profile/js/core/app.js'); ?>" type="text/javascript"></script>
<!-- END ROBUST JS-->
<!-- BEGIN PAGE LEVEL JS-->
<!--<script src="--><?php //echo plugins_url('emp/assets-profile/js/scripts/pages/dashboard-lite.js'); ?><!--" type="text/javascript"></script>-->

<script src="<?php echo plugins_url('emp/assets-profile/js/scripts/mdb/mdb.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo plugins_url('emp/assets-profile/js/scripts/mdb/popper.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo plugins_url('emp/assets-profile/js/scripts/mdb/datatables.min.js'); ?>" type="text/javascript"></script>


<script src="<?php echo plugins_url('emp/assets-profile/js/persian-date/persian-date.min.js'); ?>" type="text/javascript"></script>
<script src="<?php echo plugins_url('emp/assets-profile/js/persian-date/persian-datepicker.min.js'); ?>" type="text/javascript"></script>



<script type="text/javascript">
    // Basic example
    $(document).ready(function () {

        $('#dtAllProject').DataTable({
            "pagingType": "simple_numbers",
            "tabIndex": 1,
            "lengthMenu":  [5],// "simple" option for 'Previous' and 'Next' buttons only
            "language": {
                "emptyTable": "رکوردی یافت نشد",
                "lengthMenu": "",
                "zeroRecords": "",
                "info": "",
                "infoEmpty": "",
                "infoFiltered": "",
                "search": "_INPUT_",
                "searchPlaceholder" : "جستجو...",
                "paginate": {
                    "previous": "قبلی",
                    "next": "بعدی"
                }

            }
        });
        $('.dataTables_length').addClass('bs-select');
        // $('#issueinput6').material_select();


        $("#se_np_date2").pDatepicker({

            "autoClose": true,
            "altField": "#se_np_date",
            "format" : "DD MMMM YYYY ",
            "altFieldFormatter" :function (unixDate) {
                var self = this;
                var pd = new persianDate(unixDate).toCalendar('gregorian').format('X');
                return pd;


            }
        });

        $('[data-toggle="popover-hover"]').popover({
            html: true,
            trigger: 'hover',
            placement: 'bottom'
        });


        persian={0:'۰',1:'۱',2:'۲',3:'۳',4:'۴',5:'۵',6:'۶',7:'۷',8:'۸',9:'۹'};
        function traverse(el){
            if(el.nodeType==3){
                var list=el.data.match(/[0-9]/g);
                if(list!=null && list.length!=0){
                    for(var i=0;i<list.length;i++)
                        el.data=el.data.replace(list[i],persian[list[i]]);
                }
            }
            for(var i=0;i<el.childNodes.length;i++){
                traverse(el.childNodes[i]);
            }
        }

        traverse(document.body);


    });
</script>
<!-- END PAGE LEVEL JS-->

</body>

</html>