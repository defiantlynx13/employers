
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
<!--        <link rel="stylesheet" type="text/css" href="--><?php //echo plugins_url('emp/assets-profile/css/style-rtl.css'); ?><!--">-->
    <!-- END Custom CSS-->

    <!-- BEGIN Custom font-->
    <link rel="stylesheet" type="text/css" href="<?php echo plugins_url('emp/assets/css/login-style.css'); ?>">
    <!-- END Custom Font-->



    <link rel="stylesheet" type="text/css" href="<?php echo plugins_url('emp/assets-profile/css-rtl/mdb/mdb.min.css'); ?>">
    <!--    <link rel="stylesheet" type="text/css" href="--><?php //echo plugins_url('emp/assets-profile/css-rtl/mdb/jquery.dataTables.min.css'); ?><!--">-->
    <!--    <link rel="stylesheet" type="text/css" href="--><?php //echo plugins_url('emp/assets-profile/css-rtl/mdb/buttons.dataTables.min.css'); ?><!--">-->
    <link rel="stylesheet" type="text/css" href="<?php echo plugins_url('emp/assets-profile/css-rtl/persian-date/persian-datepicker.min.css'); ?>">


    <style type="text/css">
        html body{
            background-color: white;
        }

        @media print {
            #se_pfb_footer_print:after {
                display: block;
                content: "";
                margin-bottom: 100mm; /* must be larger than largest paper size you support */
            }

        }
        /*@page{size:auto; margin-top:5mm;}*/


    </style>

</head>
<body>
    <div class="app-content content container-fluid">
        <div class="content-wrapper">

            <div class="content-body">

                    <div class="row">
                        <div class="col-xs-12">

                                <?php

                                    if (isset($_GET['p_id'],$_GET['target_tbl'],$_GET['pss_id']))
                                    {
                                        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
                                        require_once( ABSPATH . 'wp-content/plugins/emp/inc/jdf.php' );
                                        global $wpdb;
                                        if ($_GET['target_tbl']!='' and $_GET['target_tbl']=='pss_con')
                                        {
                                            require_once( ABSPATH . 'wp-content/plugins/emp/shortcodes/shortcodes-content/admin/print/tables/se_admin_print_pss_con.php' );
                                        }
                                        else
                                        {
                                            wp_redirect(home_url('se_panel'));
                                        }
                                    }
                                    elseif (isset($_GET['p_id'],$_GET['target_tbl'],$_GET['pdr_id']))
                                    {
                                        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
                                        require_once( ABSPATH . 'wp-content/plugins/emp/inc/jdf.php' );
                                        global $wpdb;
                                        if ($_GET['target_tbl']!='' and $_GET['target_tbl']=='pdaily_reports')
                                        {
                                            require_once( ABSPATH . 'wp-content/plugins/emp/shortcodes/shortcodes-content/admin/print/tables/se_admin_print_pdaily_report.php' );
                                        }
                                        else
                                        {
                                            wp_redirect(home_url('se_panel'));
                                        }
                                    }
                                    elseif (isset($_GET['p_id'],$_GET['target_tbl']))
                                    {
                                        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
                                        require_once( ABSPATH . 'wp-content/plugins/emp/inc/jdf.php' );
                                        global $wpdb;
                                        if ($_GET['target_tbl']!='' and $_GET['target_tbl']=='pfb')
                                        {
                                            require_once( ABSPATH . 'wp-content/plugins/emp/shortcodes/shortcodes-content/admin/print/tables/se_admin_print_pfb.php' );
                                        }
                                        else
                                        {
                                            wp_redirect(home_url('se_panel'));
                                        }
                                    }
                                    else
                                    {
                                        wp_redirect(home_url('se_panel'));
                                    }
                                ?>


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
                            <script src="<?php echo plugins_url('emp/assets-profile/js/scripts/mdb/dataTables.buttons.min.js'); ?>" type="text/javascript"></script>
                            <script src="<?php echo plugins_url('emp/assets-profile/js/scripts/mdb/buttons.flash.min.js'); ?>" type="text/javascript"></script>
                            <script src="<?php echo plugins_url('emp/assets-profile/js/scripts/mdb/jszip.min.js'); ?>" type="text/javascript"></script>
                            <script src="<?php echo plugins_url('emp/assets-profile/js/scripts/mdb/pdfmake.min.js'); ?>" type="text/javascript"></script>
                            <script src="<?php echo plugins_url('emp/assets-profile/js/scripts/mdb/vfs_fonts.js'); ?>" type="text/javascript"></script>

                            <script src="<?php echo plugins_url('emp/assets-profile/js/scripts/mdb/buttons.html5.min.js'); ?>" type="text/javascript"></script>
                            <script src="<?php echo plugins_url('emp/assets-profile/js/scripts/mdb/buttons.print.min.js'); ?>" type="text/javascript"></script>
                            <script src="<?php echo plugins_url('emp/assets-profile/js/scripts/mdb/persian.js'); ?>" type="text/javascript"></script>


                            <script src="<?php echo plugins_url('emp/assets-profile/js/persian-date/persian-date.min.js'); ?>" type="text/javascript"></script>
                            <script src="<?php echo plugins_url('emp/assets-profile/js/persian-date/persian-datepicker.min.js'); ?>" type="text/javascript"></script>
                            <script src="<?php echo plugins_url('emp/assets-profile/js/scripts/digitSeprator/autonumbric.min.js'); ?>" type="text/javascript"></script>

                            <!-- start bootstrap notify master-->
                            <script src="<?php echo plugins_url('emp/assets-profile/js/bootstrap-notify-master/bootstrap-notify.min.js'); ?>" type="text/javascript"></script>
                            <!-- end  bootstrap notify master-->

                            <script type="text/javascript">
                                $(document).ready(function(){
                                    $('#se_pfb_get_date').modal('toggle');

                                    $('#se_pfb_set_date2').pDatepicker({
                                        "autoClose": true,
                                        "initialValue": true,
                                        "altField": "#se_pfb_set_date",
                                        "format" : "DD / MM / YYYY",
                                        "altFieldFormatter" :function (unixDate) {
                                            var self = this;
                                            var pd = new persianDate(unixDate).toCalendar('gregorian').format('X');
                                            return pd;
                                        }
                                    });

                                    $('body').on('focus',"#se_pfb_set_date2", function(){
                                        $(this).pDatepicker({
                                            "autoClose": true,
                                            "initialValue": true,
                                            "altField": "#se_pfb_set_date",
                                            "format" : " DD / MM / YYYY ",
                                            "altFieldFormatter" :function (unixDate) {
                                                var self = this;
                                                var pd = new persianDate(unixDate).toCalendar('gregorian').format('X');
                                                return pd;
                                            }
                                        });
                                    });


                                    $('body').on('click',"#se_pfb_set_date_submit", function(){
                                        $('#se_pfb_get_date').modal('hide');
                                        $('#se_pfb_date_print').text('تاریخ : '+$('#se_pfb_set_date2').val()).css('direction','ltr');
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

