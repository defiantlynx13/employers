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
        .datepicker-plot-area{
            font-family: IRANSansWeb;
        }
        .custom-select{
            font-family: IRANSansWeb;
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
            <div class="row match-height">
                    <div class="col-sm-12">

                        <?php
                        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
                        global $wpdb;
                        $table = $wpdb->prefix .'projects';
                        if(isset($_GET['edit1']) and $_GET['edit1']=='true')
                        {
                            $p_id=intval($_GET['p_id']);
                            $project= $wpdb->get_row("select * from {$table}  WHERE id={$p_id}");
                            ?>

                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-colored-form-control">ویرایش پروژه</h4>
                                    <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body collapse in">
                                    <div class="card-block">

                                        <form class="form" method="post" action="<?php echo home_url().'/se_project_edit';?>">

                                            <div class="form-body">

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="se_ep_pname">نام پروژه</label>
                                                            <div class="position-relative has-icon-left">
                                                                <input type="text" id="se_ep_pname" class="form-control" placeholder="نام پروژه" name="se_ep_pname" value="<?php echo $project->pname;?>" required>
                                                                <div class="form-control-position">
                                                                    <i class="icon-briefcase4"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="se_ep_expected_cost">هزینه پیش بینی شده پروژه</label>
                                                            <div class="position-relative has-icon-left">
                                                                <input type="number" id="se_ep_expected_cost" class="form-control" placeholder="نام پروژه" name="se_ep_expected_cost" value="<?php echo $project->expected_cost;?>" required>
                                                                <div class="form-control-position">
                                                                    <i class="icon-briefcase4"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="se_ep_cname">پیمانکار</label>
                                                            <div class="position-relative has-icon-left">
                                                                <input type="text" id="se_ep_cname" class="form-control" placeholder="پیمانکار" name="se_ep_cname" value="<?php echo $project->cname;?>" required >
                                                                <div class="form-control-position">
                                                                    <i class="icon-head"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="se_ep_cprofit">سود پیمانکار</label>
                                                            <div class="position-relative has-icon-left">
                                                                <input type="number" id="se_ep_cprofit" class="form-control" placeholder="پیمانکار" name="se_ep_cprofit" value="<?php echo $project->cprofit;?>" required >
                                                                <div class="form-control-position">
                                                                    <i class="icon-head"></i>
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
                                                            <label for="se_ep_eid">کارفرما</label>
                                                            <select class="browser-default custom-select" id="se_ep_eid" name="se_ep_eid" required>

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

                                                                foreach ( $emp_list as $emp)
                                                                {
                                                                    if (in_array($emp->ID,$used_eid) && $emp->ID!=$project->eid)
                                                                        continue;

                                                                    $temp = get_userdata($emp->ID);
                                                                    ?>
                                                                    <option value="<?php echo $emp->ID ?>" <?php selected($emp->ID, $project->eid, true) ?>><?php echo $temp->first_name . " " . $temp->last_name;  ?></option>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="se_ep_sid">سرپرست</label>
                                                            <select class="browser-default custom-select" id="se_ep_sid" name="se_ep_sid" required>
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
                                                                    <option value="<?php echo $sup->ID?>" <?php selected($sup->ID,$project->sid,true)?>><?php echo $temp->first_name .  " " .$temp->last_name;?></option>
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
                                                                    <input type="radio" name="se_ep_status" <?php checked($project->status,'enable',true)?> class="custom-control-input" value="enable">
                                                                    <span class="custom-control-indicator"></span>
                                                                    <span class="custom-control-description ml-0">در حال اجرا</span>
                                                                </label>
                                                                <label class="display-inline-block custom-control custom-radio">
                                                                    <input type="radio" name="se_ep_status" <?php checked($project->status,'disable',true)?> class="custom-control-input" value="disable">
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
                                                            <label for="se_ep_date">تاریخ شروع</label>
                                                            <div class="position-relative has-icon-left">
                                                                <input type="text" id="se_ep_date2" class="form-control" name="se_ep_date2" value="<?php echo $project->date;?>">
                                                                <input type="hidden" id="se_ep_date" class="form-control" name="se_ep_date">
                                                                <div class="form-control-position">
                                                                    <i class="icon-calendar5"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="se_ep_bio">توضیحات</label>
                                                    <div class="position-relative has-icon-left">
                                                        <textarea id="se_ep_bio" rows="5" class="form-control" name="se_ep_bio" placeholder="توضیحات"><?php echo  $project->bio;?></textarea>
                                                        <div class="form-control-position">
                                                            <i class="icon-file2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-actions right">
                                                <a type="reset" class="btn btn-warning mr-1" href="<?php echo home_url().'/se_panel';?>">
                                                    <i class="icon-arrow1"></i>   بازگشت به لیست پروژه ها
                                                </a>
                                                <input  type="hidden" name="se_ep_id" value="<?php echo $project->id?>">
                                                <button type="submit" class="btn btn-primary" name="se_ep_submit">
                                                    <i class="icon-check2"></i> ویرایش
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>

                            <?php

                        }
                        if(isset($_POST['se_ep_submit']))
                        {
                            $se_ep_id=isset($_POST['se_ep_id']) ? intval($_POST['se_ep_id']) : '' ;
                            $se_ep_pname=isset($_POST['se_ep_pname']) ? sanitize_text_field($_POST['se_ep_pname']) : '' ;
                            $se_ep_expected_cost=isset($_POST['se_ep_expected_cost']) ? sanitize_text_field($_POST['se_ep_expected_cost']) : '' ;
                            $se_ep_cname=isset($_POST['se_ep_cname']) ? sanitize_text_field($_POST['se_ep_cname']) : '' ;
                            $se_ep_cprofit=isset($_POST['se_ep_cprofit']) ? sanitize_text_field($_POST['se_ep_cprofit']) : '' ;
                            $se_ep_eid=isset($_POST['se_ep_eid']) ? intval($_POST['se_ep_eid']) : '' ;
                            $se_ep_sid=isset($_POST['se_ep_eid']) ? intval($_POST['se_ep_sid']) : '' ;
                            $se_ep_status = isset($_POST['se_ep_status']) ? $_POST['se_ep_status'] : '' ;

                            $epoch = $_POST['se_ep_date'];
                            $dt = new DateTime("@$epoch");  // convert UNIX timestamp to PHP DateTime
                            $se_ep_date= $dt->format('Y-m-d'); // output = 2017-01-01 00:00:00

                            $se_ep_bio = isset($_POST['se_ep_bio']) ? sanitize_textarea_field($_POST['se_ep_bio']) : '' ;


                            $edit_project = $wpdb->update(
                                $table ,
                                array(
                                    'pname'    => $se_ep_pname,
                                    'expected_cost'    => $se_ep_expected_cost,
                                    'cname'    => $se_ep_cname,
                                    'cprofit'    => $se_ep_cprofit,
                                    'eid'    => $se_ep_eid,
                                    'sid'    => $se_ep_sid,
                                    'date'    => $se_ep_date,
                                    'status'    => $se_ep_status,
                                    'bio'    => $se_ep_bio
                                ),
                                array(
                                        'id' => $se_ep_id
                                )
                            );

                            if($edit_project === false)
                            {
                                wp_redirect(home_url().'/se_panel/?edit=false');
                                exit;
                            }else
                            {
                                wp_redirect(home_url().'/se_panel/?edit=true');
                                exit;
                            }

                        }


                        ?>

                    </div>
            </div>
        </div>
    </div>
</div>

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
        $("#se_ep_date2").pDatepicker({

            "autoClose": true,
            "initialValue" : true,
            "altField": "#se_ep_date",
            "format" : "DD MMMM YYYY ",
            "altFieldFormatter" :function (unixDate) {
                var self = this;
                var pd = new persianDate(unixDate).toCalendar('gregorian').format('X');
                return pd;


            }
        });

    });
</script>
<!-- END PAGE LEVEL JS-->

</body>

</html>