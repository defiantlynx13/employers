<html lang="en" data-textdirection="rtl" class="loading">

<!-- Mirrored from pixinvent.com/free-bootstrap-template/robust-lite/html/rtl/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jun 2017 06:37:27 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title><?php get_the_title()?></title>
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
    <!--        <link rel="stylesheet" type="text/css" href="--><?php //echo plugins_url('emp/assets-profile/css-rtl/mdb/jquery.dataTables.min.css'); ?><!--">-->
    <!--        <link rel="stylesheet" type="text/css" href="--><?php //echo plugins_url('emp/assets-profile/css-rtl/mdb/buttons.dataTables.min.css'); ?><!--">-->
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

        td{
            direction: ltr;
            text-align: center;
            font-family: IRANSansWeb !important;
        }

        div.dt-buttons{
            float: right;
        }
        button.dt-button, div.dt-button, a.dt-button{
            border-radius: 40px;
        }

        .dataTables_info{
            float: left;
            padding: 20px;
        }
        .table th, .table td{
            vertical-align: middle;
        }
        #pdr_date_insert2 , #pdr_max_temp_insert,#pdr_min_temp_insert{
            text-align: center;
        }


        .indigo {
            background-color: white !important;
        }
        .red {
            background-color: white !important;
        }
        .green {
            background-color: white !important;
        }
        .deep-purple.lighten-1{
            background-color: white !important;
        }
        .teal.lighten-1{
            background-color: white !important;
        }
    </style>

</head>
<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">
<!-- navbar-fixed-top-->
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
            require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
            global $wpdb;
            if (isset($_GET['p_id']))
            {
                $p_id=intval($_GET['p_id']);
                $table = $wpdb->prefix .'projects';
                $e_id=get_current_user_id();
                $query = "SELECT * FROM {$table} WHERE id={$p_id} and eid={$e_id}";
                $results=$wpdb->get_results($query);
                if (count($results)==0)
                {
                    wp_redirect(home_url().'/se_panel');
                }
            }
            else
            {
                wp_redirect(home_url().'/se_panel');
            }
            ?>

            <div class="row">
                <?php
                $table = $wpdb->prefix .'projects';
                $query = "SELECT * FROM {$table} WHERE id={$p_id}";
                $result=$wpdb->get_row($query);
                ?>
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="p-2 text-xs-center  media-left media-middle">
                                    <i class="icon-building-o font-large-2 green indigo"></i>
                                </div>
                                <div class="p-2 media-body">
                                    <h5 class="green">پروژه</h5>
                                    <h5 class="text-bold-200" style="font-size: 100%;"><?php echo $result->pname;?></h5>
                                    <progress class="progress progress-sm progress-green green mt-1 mb-0" style="height: 2px" value="100" max="100"></progress>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <?php  $supervisor=get_userdata($result->sid); ?>
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="p-2 text-xs-center  media-left media-middle">
                                    <i class="icon-sitemap font-large-2 indigo"></i>
                                </div>
                                <div class="p-2 media-body">
                                    <h5 class="indigo">سرپرست کارگاه</h5>
                                    <h5 class="text-bold-400"><?php echo $supervisor->first_name .  " " .$supervisor->last_name?></h5>
                                    <progress class="progress progress-sm progress-indigo mt-1 mb-0" style="height: 2px" value="100" max="100"></progress>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <?php
                    $employee=get_userdata($result->eid);
                    ?>
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="p-2 text-xs-center  red media-left media-middle">
                                    <i class="icon-person-stalker font-large-2 red"></i>
                                </div>
                                <div class="p-2 media-body">
                                    <h5 class="red">کارفرما</h5>
                                    <h5 class="text-bold-400"><?php echo $employee->first_name .  " " .$employee->last_name?></h5>
                                    <progress class="progress progress-sm progress-red mt-1 mb-0" style="height: 2px" value="100" max="100"></progress>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="media">
                                <div class="p-2 text-xs-center  bg-accent-4 media-left media-middle">
                                    <i class="icon-cogs2 font-large-2 danger"></i>
                                </div>
                                <div class="p-2 media-body">
                                    <h5 class="danger">پیمانکار</h5>
                                    <h5 class="text-bold-400"><?php echo $result->cname; ?></h5>
                                    <progress class="progress progress-sm progress-danger mt-1 mb-0" style="height: 2px" value="100" max="100"></progress>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">گزارش های روزانه پروژه</h4>
                            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a id="card_relod" data-action="reload"><i class="icon-reload"></i></a></li>
                                    <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="alert_message"></div>

                                <br>

                                <table id="pdr_tbl" class="table table-sm table-hover table-bordered mb-0">



                                    <thead class="thead-default">
                                    <tr>
                                        <!--                                        <th class="text-xs-center">#</th>-->
                                        <!--                                        <th class="text-xs-center">عنوان</th>-->
                                        <th class="text-xs-center">تاریخ</th>
                                        <th class="text-xs-center">حداقل دما</th>
                                        <th class="text-xs-center">حداکثر دما</th>
                                        <th class="text-xs-center">عملیات</th>


                                    </tr>
                                    </thead>


                                </table>
                            </div>
                        </div>
                    </div>
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



<script type="text/javascript">
    // Basic example
    $(document).ready(function () {

        fetch_data("");
        function fetch_data(searchDate)
        {
            var dataTable = $('#pdr_tbl').DataTable
            (
                {
                    "pagingType": "full_numbers",
                    // "paging": false,
                    "tabIndex": 1,
                    "order": [[ 0, "desc" ]],
                    "pageLength":10,
                    "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
                    "searching": true,
                    "bAutoWidth": false,
                    // "filter": false,
                    "language": {
                        "processing": "در حال پردازش اطلاعات ...",
                        "sInfo":"نمایش _START_ تا _END_ از مجموع _TOTAL_ مورد",
                        "emptyTable": "رکوردی یافت نشد",
                        "lengthMenu": "",
                        "zeroRecords": "رکوردی یافت نشد",
                        "info": "",
                        "infoEmpty": "",
                        "infoFiltered": "",
                        "search": "_INPUT_",
                        "searchPlaceholder": "جستجو بر اساس تاریخ",
                        "paginate": {
                            "previous": "بعدی",
                            "next": "قبلی",
                            "last" : "»",
                            "first" : "«"
                        }

                    },
                    // "processing": true,
                    "serverSide": true,
                    "ajax": {
                        "url"  : "<?php echo admin_url('admin-ajax.php?action=employee_pdaily_reports_data&p_id=' . $p_id)?>",
                        "data" : {searchDate}
                    },
                    "fnDrawCallback" : function() {
                        traverse(document.body);
                    }
                }
            );





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
        }



        $(document).on('click', '#card_relod', function(){
            $('#pdr_tbl').DataTable().destroy();
            fetch_data("");
        });







        $(document).on('click', '#se_pdr_complete', function(){
            var id = $(this).data("id");
            var home_url="<?php echo home_url();?>/se_employee_pdr_list/?p_id=<?php echo $p_id?>&pdr_id=";
            window.location.href =`${home_url}${id}`;
        });


        $('body').on('focus',"#pdr_tbl_filter label input", function(){
            $(this).pDatepicker({

                "autoClose": true,
                "initialValue": false,
                "altField": "#pss_date_insert",
                "format" : "YYYY / MM / DD ",
                "altFieldFormatter" :function (unixDate) {
                    var self = this;
                    var pd = new persianDate(unixDate).toCalendar('gregorian').format('X');
                    return pd;
                },
                "onSelect": function(unixDate) {
                    var pd2 = new persianDate(unixDate).toCalendar('gregorian').format('X');
                    $('#pdr_tbl').DataTable().destroy();
                    fetch_data(pd2);
                }
            });
        });
    });
</script>
<!-- END PAGE LEVEL JS-->

</body>

</html>

