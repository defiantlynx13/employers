
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
    <link rel="stylesheet" type="text/css" href="<?php echo plugins_url('emp/assets-profile/css/style-rtl.css'); ?>">
    <!-- END Custom CSS-->

    <!-- BEGIN Custom font-->
    <link rel="stylesheet" type="text/css" href="<?php echo plugins_url('emp/assets/css/login-style.css'); ?>">
    <!-- END Custom Font-->


    <style>
        .carousel-inner > .carousel-item > img
        {
            height: 260px;
        }
    </style>
</head>
<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">
<?php
require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
global $wpdb;
$e_id=get_current_user_id();
$table = $wpdb->prefix .'projects';
$query = "SELECT * FROM {$table} WHERE eid={$e_id}";
$result=$wpdb->get_row($query);
$expected_cost=$result->expected_cost;
$p_id=$result->id;

$table = $wpdb->prefix .'projects_notification';
$query = "SELECT COUNT(*) FROM {$table} WHERE p_id={$p_id} AND status = 'pending' ";
$p_not_count=$wpdb->get_var($query);

$table = $wpdb->prefix .'projects_messages';
$query = "SELECT COUNT(*) FROM {$table} WHERE p_id={$p_id} AND status = 'pending' and receiver='employee'";
$p_message_count=$wpdb->get_var($query);

?>

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
        <div class="content-body"><!-- stats -->
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-block">
                                <div class="media">
                                    <div class="media-body text-xs-left">
                                        <h3 class="pink">عنوان پروژه</h3>
                                        <span><?php echo $result->pname.'  ';?></span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <i class="icon-building-o  pink font-large-2 float-xs-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-block">
                                <div class="media">
                                    <div class="media-body text-xs-left">
                                        <?php
                                        $employee=get_userdata($result->eid);
                                        ?>
                                        <h3 class="teal">کارفرما</h3>
                                        <span><?php echo $employee->first_name .  " " .$employee->last_name?></span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <i class="icon-person-stalker  teal font-large-2 float-xs-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-block">
                                <div class="media">
                                    <div class="media-body text-xs-left">
                                        <h3 class="deep-orange">پیمانکار</h3>
                                        <span><?php echo $result->cname.'  ';?></span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <i class="icon-cogs2 deep-orange font-large-2 float-xs-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-block">
                                <div class="media">
                                    <div class="media-body text-xs-left">
                                        <?php
                                        $supervisor=get_userdata($result->sid);
                                        ?>
                                        <h3 class="cyan">سرپرست کارگاه</h3>
                                        <span><?php echo $supervisor->first_name .  " " .$supervisor->last_name?></span>
                                    </div>
                                    <div class="media-right media-middle">
                                        <i class="icon-sitemap cyan font-large-2 float-xs-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ stats -->

            <!-- Area Chart -->
            <div class="row match-height">
                <div class="col-xs-12">
                    <div class="card" style="height: 550px">
                        <div class="card-header">
                            <h4 class="card-title">نــمودار پـیشرفت پــروژه</h4>
                            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                                    <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body collapse in">
                            <div class="card-block chartjs" style="height: 500px;">
                                <canvas id="area-chart" height="420px" width="1015px" style="display: block; width: 1015px; height: 420px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ project charts -->

            <div class="row">
                <div class="col-xl-4 col-md-6 col-sm-12">


                    <div class="card">
                        <?php
                        $table = $wpdb->prefix .'pfinancial_bills';
                        $query = "SELECT SUM(pfb_amount) AS positive_amount FROM {$table} WHERE pid={$p_id} AND pfb_amount >= 0 ";
                        $result_fb_pss=$wpdb->get_row($query);
                        $ppfb= $result_fb_pss->positive_amount;

                        $query = "SELECT SUM(pfb_amount) AS minus_amount FROM {$table} WHERE pid={$p_id} AND pfb_amount < 0 ";
                        $result_fb_pss=$wpdb->get_row($query);
                        $mpfb= -($result_fb_pss->minus_amount);

                        ?>
                        <div class="card-body">
                            <div class="media">
                                <div class="p-2 text-xs-center  media-left media-middle">
                                    <i class="icon-diagram2  font-large-2 indigo"></i>
                                </div>
                                <div class="p-2 media-body">
                                    <h5 class="indigo">هزینه پیش بینی شده پروژه</h5>
                                    <h5 class="text-bold-400"><?php echo $expected_cost;?></h5>
                                    <progress class="progress progress-sm progress-indigo mt-1 mb-0" style="height: 2px" value="100" max="110"></progress>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="media">
                                <div class="p-2 text-xs-center  media-left media-middle">
                                    <i class="icon-gold2 font-large-2 red"></i>
                                </div>
                                <div class="p-2 media-body">
                                    <h5 class="red">مبالغ خرج کرد</h5>
                                    <h5 class="text-bold-400"><?php echo $mpfb;?></h5>
                                    <progress class="progress progress-sm progress-red mt-1 mb-0" style="height: 2px" value="<?php echo ceil($mpfb/$expected_cost);?>" max="100"></progress>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="media">
                                <div class="p-2 text-xs-center  bg-accent-4 media-left media-middle">
                                    <i class="icon-moneypig font-large-2 green"></i>
                                </div>
                                <div class="p-2 media-body">
                                    <h5 class="green">مبالغ دریافتی</h5>
                                    <h5 class="text-bold-400"><?php echo $ppfb;?></h5>
                                    <progress class="progress progress-sm progress-green mt-1 mb-0"  style="height: 2px" value="<?php echo ceil($ppfb/$expected_cost);?>" max="100"></progress>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">رویداد های پروژه</h4>
                            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="card-body">
                                <?php
                                    $table = $wpdb->prefix .'projects_gallery';
                                    $query = "SELECT * FROM {$table} WHERE pid={$p_id}";
                                    $results=$wpdb->get_results($query);
                                ?>
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <?php
                                            $i=0;
                                            foreach ($results as $result)
                                            {
                                                ?>
                                                    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i?>" <?php if($i==0) echo 'class="active"';?>></li>
                                                <?php
                                                $i++;
                                            }
                                        ?>
                                    </ol>
                                    <div class="carousel-inner" role="listbox">

                                        <?php
                                        $i=0;
                                        foreach ($results as $result)
                                        {
                                            if ($i==0)
                                            {
                                                ?>
                                                <div class="carousel-item active" >
                                                    <img src="<?php echo $result->link?>">
                                                </div>
                                                <?php
                                            }else
                                            {
                                               ?>
                                                <div class="carousel-item" >
                                                    <img src="<?php echo $result->link?>">
                                                </div>
                                                <?php
                                            }
                                            $i++;
                                        }
                                        ?>
                                    </div>
                                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                        <span class="icon-prev" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                        <span class="icon-next" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <!--                                    <div class="card-block">-->
                                <!--                                        <p class="card-text">بعضی از نمونه های سریع نمونه ای که بر روی عنوان کارت ساخته می شوند و بخش عمده ای از محتوای کارت را تشکیل می دهند</p>-->
                                <!--                                    </div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-block">
                                <h4 class="card-title">مستندات پروژه</h4>
                            </div>
                            <ul class="list-group list-group-flush">
                                <?php
                                    $table = $wpdb->prefix .'projects_doc';
                                    $query = "SELECT * FROM {$table} WHERE pid={$p_id} ";
                                    $results=$wpdb->get_results($query);

                                    foreach ($results as $result)
                                    {
                                        ?>
                                        <li class="list-group-item">
                                            <span class="tag tag-default tag-pill bg-green float-xs-right"><a target="_blank" href="<?php echo $result->link?>"><i class="icon-cloud-download3"></i></a></span> <?php echo $result->title?>
                                        </li>
                                        <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<?php require_once( plugin_dir_path(__FILE__) . 'footer/footer.php' ); ?>


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
<!-- END PAGE LEVEL JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script type="text/javascript">

    $(document).ready(function () {
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



        //Get the context of the Chart canvas element we want to select
        var ctx = $("#area-chart");

        // Chart Options
        var chartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                position: 'top'
            },
            hover: {
                mode: 'label'
            },
            scales: {
                xAxes: [{
                    display: true,
                    gridLines: {
                        color: "#f3f3f3",
                        drawTicks: false,
                    },
                    scaleLabel: {
                        display: true,
                        labelString: ''
                    }
                }],
                yAxes: [{
                    display: true,
                    gridLines: {
                        color: "#f3f3f3",
                        drawTicks: false,
                    },
                    scaleLabel: {
                        display: true,
                        labelString: 'روز'
                    }
                }]
            },
            title: {
                display: false,
                text: ''
            }
        };

        <?php
            $table = $wpdb->prefix .'pchart';
            $query = "SELECT * FROM {$table} WHERE pid={$p_id} order  by pchart_plan_start ";
            $results=$wpdb->get_results($query);
            $i = 0;
            $len = count($results);
            $pchart_lables1='';
            $pchart_plan_num='';
            $pchart_exec_num='';
            foreach ($results as $result)
            {
                $pchart_lables1 .='"'.$result->pchart_name.'"';

                $pchart_plan_num .=(strtotime($result->pchart_plan_end) - strtotime($result->pchart_plan_start))/86400;
                $pchart_exec_num .=(strtotime($result->pchart_exec_end) - strtotime($result->pchart_exec_start))/86400;

                if (!($i == $len - 1))
                {
                    $pchart_lables1  .=",";
                    $pchart_plan_num .=',';;
                    $pchart_exec_num .=',';;
                }
                $i++;
            }

        ?>
        // Chart Data
        var chartData = {
            labels: [<?php echo $pchart_lables1;?>],
            datasets: [{
                label: " برنامه ریزی",
                data: [<?php echo $pchart_plan_num;?>],
                backgroundColor: "rgba(59,175,218,.3)",
                borderColor: "transparent",
                pointBorderColor: "#3BAFDA",
                pointBackgroundColor: "#FFF",
                pointBorderWidth: 2,
                pointHoverBorderWidth: 2,
                pointRadius: 4,
            }, {
                label: "اجرا",
                data: [<?php echo $pchart_exec_num;?>],
                backgroundColor: "rgba(29,233,182,.6)",
                borderColor: "transparent",
                pointBorderColor: "#1DE9B6",
                pointBackgroundColor: "#FFF",
                pointBorderWidth: 2,
                pointHoverBorderWidth: 2,
                pointRadius: 4,
            }]
        };

        var config = {
            type: 'line',

            // Chart Options
            options : chartOptions,

            // Chart Data
            data : chartData
        };

        // Create the chart
        var areaChart = new Chart(ctx, config);


    });
</script>
<!-- END PAGE LEVEL JS-->
</body>

</html>