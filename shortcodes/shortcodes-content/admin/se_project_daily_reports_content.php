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
            if (isset($_GET['p_id']))
            {
                $p_id=intval($_GET['p_id']);
            }
            else
            {
                wp_redirect(home_url().'/se_panel');
            }
            ?>

            <p>
                <span class="float-xs-right">
                    <a type="button" class="btn purple-gradient btn-rounded white mr-1 mb-1 waves-effect waves-light" href="<?php echo home_url('se_panel')?>">
                        بازگشت به لیست پروژه ها
                        <i class="icon-arrow-left4 fa-lg"></i>
                    </a>
                </span>
            </p>

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

                                <table id="pdr_tbl" class="table table-responsive-sm table-hover table-bordered mb-0">



                                    <thead class="thead-default">
                                    <tr>
                                        <!--                                        <th class="text-xs-center">#</th>-->
<!--                                        <th class="text-xs-center">عنوان</th>-->
                                        <th class="text-xs-center">تاریخ</th>
                                        <th class="text-xs-center">حداقل دما</th>
                                        <th class="text-xs-center">حداکثر دما</th>
                                        <th class="text-xs-center">وضعیت</th>
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


<!-- Modal -->
<div class="modal fade text-xs-left" id="edit_pdrs_form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <label class="modal-title text-text-bold-600" id="myModalLabel33">ویرایش گزارش</label>
            </div>


            <div class="card-block">

                <form class="form" method="post">

                    <div class="form-body">


                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="se_pdr_date_edit2">تاریخ</label>
                                    <div class="position-relative has-icon-left">
                                        <input type="text" id="se_pdr_date_edit2" class="form-control" name="se_pdr_date_edit2" style="direction: ltr;text-align: center">
                                        <input type="hidden" id="se_pdr_date_edit" class="form-control" name="se_pdr_date_edit">
                                        <div class="form-control-position">
                                            <i class="icon-calendar5"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>وضعیت</label>
                                    <div class="input-group">
                                        <label class="display-inline-block custom-control custom-radio ml-1">
                                            <input type="radio" id="se_pdr_status_published_edit" name="se_pdr_status_edit"  class="custom-control-input" value="published">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description ml-0">منتشر شده</span>
                                        </label>
                                        <label class="display-inline-block custom-control custom-radio">
                                            <input type="radio" id="se_pdr_status_pending_edit" name="se_pdr_status_edit" class="custom-control-input" value="pending">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description ml-0">در حال بررسی</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="se_pdr_min_temp_edit">حداقل دما</label>
                                    <div class="position-relative has-icon-left">
                                        <input type="number" id="se_pdr_min_temp_edit" class="form-control"  name="se_pdr_min_temp_edit" required>
                                        <div class="form-control-position">
                                            <i class="icon-arrow50"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="se_pdr_max_temp_edit">حداکثر دما</label>
                                    <div class="position-relative has-icon-left">
                                        <input type="number" id="se_pdr_max_temp_edit" class="form-control"  name="se_pdr_max_temp_edit" required>
                                        <div class="form-control-position">
                                            <i class="icon-arrow49"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="form-actions right">
                        <button type="reset" class="btn btn-warning mr-1" data-dismiss="modal" value="close">
                            <i class="icon-cross2"></i> انصراف
                        </button>
                        <button type="button" class="btn btn-primary" name="se_pdr_edit_submit" id="se_pdr_edit_submit">
                            <i class="icon-check2"></i> ویرایش
                        </button>
                        <input type="hidden"  name="se_pdr_id_edit" id="se_pdr_id_edit">
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
                    "dom": "Bfrtip",
                    "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
                    buttons: [
                        {
                            text: '<i class="icon-plus3 fa-lg "></i> &nbsp;افزودن گزارش روزانه',
                            className: 'btn purple-gradient btn-rounded  mr-1 mb-1 waves-effect waves-light',
                            attr:  {
                                id: 'add_row'
                            }
                        }
                    ],
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
                        "url"  : "<?php echo admin_url('admin-ajax.php?action=pdaily_reports_data&p_id=' . $p_id)?>",
                        "data" : {searchDate}
                    },
                    "fnDrawCallback" : function() {
                        traverse(document.body);
                    }
                }
            );



            // function extractContent(s) {
            //     var span = document.createElement('span');
            //     span.innerHTML = s;
            //     return span.textContent || span.innerText;
            // };




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


        $(document).on('click', '#add_row', function(){
            var html = '<tr class="row_insert">';
            html += '<td>' +
                '<input type="text" id="pdr_date_insert2" class="form-control" name="pdr_date_insert2">' +
                '<input type="hidden" id="pdr_date_insert" class="form-control" name="pdr_date_insert">' +
                '</td>';
            html += '<td>' +
                '<input type="number" id="pdr_min_temp_insert" class="form-control w-25" name="pdr_min_temp_insert">' +
                '</td>';
            html += '<td  >' +
                '<input type="number" id="pdr_max_temp_insert" class="form-control w-25" name="pdr_max_temp_insert">' +
                '</td>';
            html += '<td style="width: 30%" >' +
                '<div class="form-group">\n' +
                    '<div class="input-group">\n' +
                        '<label class="display-inline-block custom-control custom-radio ml-1">\n' +
                            '<input type="radio" name="pdr_status_insert" class="custom-control-input" value="published">\n' +
                            '<span class="custom-control-indicator"></span>\n' +
                            '<span class="custom-control-description ml-0">انتشار یافته</span>\n' +
                        '</label>\n' +
                        '<label class="display-inline-block custom-control custom-radio">\n' +
                            '<input type="radio" name="pdr_status_insert" checked="" class="custom-control-input" value="pending">\n' +
                            '<span class="custom-control-indicator"></span>\n' +
                            '<span class="custom-control-description ml-0">در حال بررسی</span>\n' +
                        '</label>\n' +
                    '</div>\n' +
                '</div>' +
                '</td>';



            html += '<td><button type="submit" name="se_pdr_insert" id="se_pdr_insert" class="btn btn-sm btn-success btn-rounded  mr-1 mb-1"> <i class="icon-check2"></i>  افزودن</button><button type="btn" name="se_pdr_cancel" id="se_pdr_cancel" class="btn btn-sm btn-warning  waves-effect waves-light btn-rounded  mr-1 mb-1"> <i class="icon-cross2" ></i>  انصراف</button></td>';
            html += '</tr>';
            $('#pdr_tbl tbody').prepend(html);
        });


        $(document).on('click', '#se_pdr_insert', function(){
            var pdr_date = $('#pdr_date_insert').val();
            var pdr_min_temp = $('#pdr_min_temp_insert').val();
            var pdr_max_temp = $('#pdr_max_temp_insert').val();
            var pdr_status = $("input[name='pdr_status_insert']:checked").val();

            if(pdr_date != '' && pdr_min_temp != '' && pdr_max_temp != '' && pdr_status != '')
            {
                $.ajax({
                    url:"<?php echo admin_url('admin-ajax.php?action=pdr_insert&p_id=' . $p_id)?>",
                    data:{
                        pdr_date:pdr_date,
                        pdr_min_temp:pdr_min_temp,
                        pdr_max_temp:pdr_max_temp,
                        pdr_status:pdr_status
                    },
                    success:function(data)
                    {
                        $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
                        $('#pdr_tbl').DataTable().destroy();
                        fetch_data("");
                    }
                });
                setInterval(function(){
                    $('#alert_message').html('');
                }, 5000);
            }
            else
            {
                alert("لطفا تمامی فیلد ها را وارد نمایید!");
            }
        });


        $(document).on('click', '#se_pdr_delete', function(){
            var id = $(this).data("id");
            if(confirm("مطمئن هستید?"))
            {
                $.ajax({
                    url:"<?php echo admin_url('admin-ajax.php?action=pdr_delete')?>",
                    data:{
                        id:id,
                    },
                    success:function(data){
                        $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
                        $('#pdr_tbl').DataTable().destroy();
                        fetch_data("");
                    }
                });
                setInterval(function(){
                    $('#alert_message').html('');
                }, 5000);
            }
        });

        $(document).on('click', '#se_pdr_complete', function(){
            var id = $(this).data("id");
            var home_url="<?php echo home_url();?>/se_project_daily_report/?p_id=<?php echo $p_id?>&pdr_id=";
            window.location.href =`${home_url}${id}`;
        });

        $('body').on('click',"#se_pdr_cancel", function(){
            $(this).closest("tr").remove();
        });



        $('body').on('focus',"#pdr_date_insert2", function(){
            $(this).pDatepicker({

                "autoClose": true,
                "initialValue": false,
                "altField": "#pdr_date_insert",
                "format" : "YYYY / MM / DD ",
                "altFieldFormatter" :function (unixDate) {
                    var self = this;
                    var pd = new persianDate(unixDate).toCalendar('gregorian').format('X');
                    return pd;
                }
            });
        });


        $('body').on('focus',"#se_pdr_date_edit2", function(){
            $(this).pDatepicker({

                "autoClose": true,
                "initialValue": false,
                "altField": "#se_pdr_date_edit",
                "format" : "YYYY / MM / DD ",
                "altFieldFormatter" :function (unixDate) {
                    var self = this;
                    var pd = new persianDate(unixDate).toCalendar('gregorian').format('X');
                    return pd;
                }
            });
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


        $('#pdr_tbl tbody').on('click',"#se_pdr_edit", function(){
            var pdr_id = $(this).data("id");
            var pdr_timestamp = $(this).data("timestamp");
            var pdr_date = $(this).data("date");

            var pdr_max_temp= $(this).data("max_temp");
            var pdr_min_temp = $(this).data("min_temp");
            var pdr_status = $(this).data("status");

            $('#se_pdr_max_temp_edit').val(pdr_max_temp);
            $('#se_pdr_min_temp_edit').val(pdr_min_temp);

            $('#se_pdr_date_edit2').val(pdr_date);
            $('#se_pdr_date_edit').val(pdr_timestamp);
            if(pdr_status== "pending")
            {
                $('#se_pdr_status_pending_edit').attr('checked', 'true');
            }
            else if (pdr_status== "published")
            {
                $('#se_pdr_status_published_edit').attr('checked', 'true');
            }
            $('#se_pdr_id_edit').val(pdr_id);
            $('#edit_pdrs_form').modal('toggle');
        });


        $('body').on('click',"#se_pdr_edit_submit", function(){
            var pdr_id_edit = $('#se_pdr_id_edit').val();
            var pdr_date_edit = $('#se_pdr_date_edit').val();
            var pdr_min_temp_edit = $('#se_pdr_min_temp_edit').val();
            var pdr_max_temp_edit = $('#se_pdr_max_temp_edit').val();
            var pdr_status_edit = $("input[name='se_pdr_status_edit']:checked").val();

            if(pdr_date_edit != '' && pdr_min_temp_edit != '' && pdr_max_temp_edit != ''&& pdr_status_edit != '')
            {
                $.ajax({
                    url:"<?php echo admin_url('admin-ajax.php?action=pdr_update&p_id=' . $p_id)?>",
                    data:{
                        pdr_id_edit:pdr_id_edit,
                        pdr_date_edit:pdr_date_edit,
                        pdr_min_temp_edit:pdr_min_temp_edit,
                        pdr_max_temp_edit:pdr_max_temp_edit,
                        pdr_status_edit:pdr_status_edit
                    },
                    success:function(data)
                    {
                        $('#edit_pdrs_form').modal('hide');
                        $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
                        $('#pdr_tbl').DataTable().destroy();
                        fetch_data("");
                    }
                });
                setInterval(function(){
                    $('#alert_message').html('');
                }, 5000);
            }
            else
            {
                alert("لطفا تمامی فیلد ها را وارد نمایید!");
            }
        });

    });





</script>
<!-- END PAGE LEVEL JS-->

</body>

</html>

