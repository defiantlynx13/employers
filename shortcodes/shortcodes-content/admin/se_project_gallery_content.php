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
    <!--    <link rel="stylesheet" type="text/css" href="--><?php //echo plugins_url('emp/assets-profile/css-rtl/mdb/jquery.dataTables.min.css'); ?><!--">-->
    <!--    <link rel="stylesheet" type="text/css" href="--><?php //echo plugins_url('emp/assets-profile/css-rtl/mdb/buttons.dataTables.min.css'); ?><!--">-->
    <link rel="stylesheet" type="text/css" href="<?php echo plugins_url('emp/assets-profile/css-rtl/persian-date/persian-datepicker.min.css'); ?>">

    <!-- BEGIN image upload-->
    <link rel="stylesheet" type="text/css" href="<?php echo plugins_url('emp/assets-profile/css-rtl/file-upload/fancy_fileupload.css'); ?>">
    <!-- END image upload-->


    <style type="text/css">
        [data-notify="progressbar"] {
            margin-bottom: 0px;
            position: absolute;
            bottom: 0px;
            left: 0px;
            width: 100%;
            height: 5px;
        }
        [data-notify="dismiss"] {
            float: left;
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

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">آپلود تصاویر</h4>
                            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <!-- First row -->
                            <div class="row">
                                <!-- First column -->
                                <div class="col-md-12">
                                    <input id="demo" type="file" name="files" accept=".jpg, .png, image/jpeg, image/png" multiple>
                                </div>
                            </div>
                            <!-- First row -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">گالری تصاویر پروژه</h4>
                            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-12">

                                    <div id="carousel-example-caption" class="carousel slide" data-ride="carousel">
                                        <?php
                                        $p_id=intval($_REQUEST['p_id']);
                                        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
                                        global $wpdb;
                                        $table = $wpdb->prefix .'projects_gallery';
                                        $query = "SELECT * FROM {$table} WHERE pid={$p_id} ";
                                        $results = $wpdb->get_results($query);
                                        ?>
                                        <ol class="carousel-indicators" id="carousel-example-caption-indicators">
                                            <?php
                                                for ($i=0;$i<$wpdb->num_rows;$i++)
                                                {
                                                    ?>
                                                    <li data-target="#carousel-example-caption" data-slide-to="<?php echo $i;?>" class=""></li>
                                                    <?php
                                                }
                                            ?>
                                        </ol>
                                        <div class="carousel-inner"  id="carousel-inner" role="listbox">
                                            <?php
                                            $count =1;
                                                foreach($results as $result)
                                                {
                                                    if ($count ==1)
                                                    {
                                                        ?>
                                                        <div class="carousel-item active">
                                                            <img src="<?php echo $result->link;?>" alt="First slide">
                                                            <div class="carousel-caption">
                                                                <h3><?php echo $result->title;?></h3>
                                                                <p>
                                                                    <button type="button" id="pgallery_image_delete" name="pgallery_image_delete" class="btn btn-sm btn-danger btn-rounded  mr-1 mb-1" data-id="<?php echo $result->id;?>">
                                                                        <i class="icon-android-delete fa-lg"></i>
                                                                        &nbsp;&nbsp;حذف
                                                                    </button>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }else
                                                    {
                                                        ?>
                                                        <div class="carousel-item ">
                                                            <img src="<?php echo $result->link;?>" alt="First slide">
                                                            <div class="carousel-caption">
                                                                <h3><?php echo $result->title;?></h3>
                                                                <p>
                                                                    <button type="button" id="pgallery_image_delete" name="pgallery_image_delete" class="btn btn-sm btn-danger btn-rounded  mr-1 mb-1" data-id="<?php echo $result->id;?>">
                                                                        <i class="icon-android-delete fa-lg"></i>
                                                                        &nbsp;&nbsp;حذف
                                                                    </button>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                    $count++;
                                                }
                                            ?>

                                        </div>

                                            <?php
                                                if ($wpdb->num_rows > 0)
                                                {
                                                    ?>
                                                        <a class="left carousel-control" href="#carousel-example-caption" role="button" data-slide="prev">
                                                            <span class="icon-prev" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>

                                                        <a class="right carousel-control" href="#carousel-example-caption" role="button" data-slide="next">
                                                            <span class="icon-next" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    <?php
                                                }
                                            ?>
                                    </div>
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

<!-- start file upload-->
<script src="<?php echo plugins_url('emp/assets-profile/js/scripts/image-upload/jquery.ui.widget.js'); ?>" type="text/javascript"></script>
<script src="<?php echo plugins_url('emp/assets-profile/js/scripts/image-upload/jquery.fileupload.js'); ?>" type="text/javascript"></script>
<script src="<?php echo plugins_url('emp/assets-profile/js/scripts/image-upload/jquery.iframe-transport.js'); ?>" type="text/javascript"></script>
<script src="<?php echo plugins_url('emp/assets-profile/js/scripts/image-upload/jquery.fancy-fileupload.js'); ?>" type="text/javascript"></script>

<!-- end file upload-->

    <!-- start bootstrap notify master-->
    <script src="<?php echo plugins_url('emp/assets-profile/js/bootstrap-notify-master/bootstrap-notify.min.js'); ?>" type="text/javascript"></script>
    <!-- end  bootstrap notify master-->

<script type="text/javascript">
    // Basic example
    $(document).ready(function ()
    {
        $('#demo').FancyFileUpload({
            url : "<?php echo admin_url('admin-ajax.php')?>",
            params : {
                action : 'pgallery_upload_image',
                p_id : <?php echo $p_id;?>
            },
            maxfilesize : 1000000,
            uploadcompleted : function(e, data)
            {
                data.ff_info.RemoveFile();

                $.notify(
                                {
                                message: 'تصویر مدنظر با موفقیت اپلود گردید.'
                                },
                                {
                                type: 'success',
                                placement: {
                                    from: "top",
                                    align: "left"
                                },
                                 showProgressbar : true,
                                  mouse_over: "pause",
                                    allow_dismiss : false
                                }
                          );

                $.ajax({
                    url:"<?php echo admin_url('admin-ajax.php')?>",
                    data:{
                        action:'pgallery_get_images',
                        p_id:<?php echo $p_id;?>
                    },
                    success:function(images)
                    {
                        $('#carousel-example-caption-indicators').html('');
                        $('#carousel-inner').html('');


                        for(let i = 0; i < images.length; i++)
                        {
                                var html1 = '<li data-target="#carousel-example-caption" ' +
                                    'data-slide-to="'+i+'" class=""></li>';
                                $('#carousel-example-caption-indicators').append(html1 );
                            if (i==0)
                            {
                                var html2= '<div class="carousel-item active">' +
                                                '<img src="'+images[i][1]+'" alt="First slide">' +
                                                '<div class="carousel-caption">' +
                                                    '<h3>'+images[i][2]+'</h3>' +
                                                    ' <p>' +
                                                        '<button type="button" id="pgallery_image_delete" name="pgallery_image_delete" class="btn btn-sm btn-danger btn-rounded  mr-1 mb-1" data-id="'+images[i][0]+'">' +
                                                            '<i class="icon-android-delete fa-lg"></i>' +
                                                            '&nbsp;&nbsp;حذف' +
                                                        '</button>' +
                                                    '</p>' +
                                                '</div>' +
                                            '</div>';
                                $('#carousel-inner').append(html2 );
                            }
                            else
                            {
                                var html3= '<div class="carousel-item">' +
                                    '<img src="'+images[i][1]+'" alt="First slide">' +
                                    '<div class="carousel-caption">' +
                                        '<h3>'+images[i][2]+'</h3>' +
                                        ' <p>' +
                                            '<button type="button" id="pgallery_image_delete" name="pgallery_image_delete" class="btn btn-sm btn-danger btn-rounded  mr-1 mb-1" data-id="'+images[i][0]+'">' +
                                                '<i class="icon-android-delete fa-lg"></i>' +
                                                '&nbsp;&nbsp;حذف' +
                                            '</button>' +
                                        '</p>' +
                                    '</div>' +
                                    '</div>';
                                $('#carousel-inner').append(html3 );
                            }

                        }
                    }
                });
            }
        });


        $(document).on('click', '#pgallery_image_delete', function(){
            var id = $(this).data("id");
            console.log(id);
            if(confirm("مطمئن هستید?")) {
                $.ajax({
                    url: "<?php echo admin_url('admin-ajax.php?action=pgallery_delete_image')?>",
                    data: {
                        id: id,
                    },
                    success: function (data)
                    {
                        $.notify(
                            {
                                message: data
                            },
                            {
                                type: 'success',
                                placement: {
                                    from: "top",
                                    align: "left"
                                },
                                showProgressbar : true,
                                mouse_over: "pause",
                                allow_dismiss : false
                            }
                        );


                        $.ajax({
                            url:"<?php echo admin_url('admin-ajax.php')?>",
                            data:{
                                action:'pgallery_get_images',
                                p_id:<?php echo $p_id;?>
                            },
                            success:function(images)
                            {
                                $('#carousel-example-caption-indicators').html('');
                                $('#carousel-inner').html('');


                                for(let i = 0; i < images.length; i++)
                                {
                                    var html1 = '<li data-target="#carousel-example-caption" ' +
                                        'data-slide-to="'+i+'" class=""></li>';
                                    $('#carousel-example-caption-indicators').append(html1 );
                                    if (i==0)
                                    {
                                        var html2= '<div class="carousel-item active">' +
                                            '<img src="'+images[i][1]+'" alt="First slide">' +
                                            '<div class="carousel-caption">' +
                                            '<h3>'+images[i][2]+'</h3>' +
                                            ' <p>' +
                                            '<button type="button" id="pgallery_image_delete" name="pgallery_image_delete" class="btn btn-sm btn-danger btn-rounded  mr-1 mb-1" data-id="'+images[i][0]+'">' +
                                            '<i class="icon-android-delete fa-lg"></i>' +
                                            '&nbsp;&nbsp;حذف' +
                                            '</button>' +
                                            '</p>' +
                                            '</div>' +
                                            '</div>';
                                        $('#carousel-inner').append(html2 );
                                    }
                                    else
                                    {
                                        var html3= '<div class="carousel-item">' +
                                            '<img src="'+images[i][1]+'" alt="First slide">' +
                                            '<div class="carousel-caption">' +
                                            '<h3>'+images[i][2]+'</h3>' +
                                            ' <p>' +
                                            '<button type="button" id="pgallery_image_delete" name="pgallery_image_delete" class="btn btn-sm btn-danger btn-rounded  mr-1 mb-1" data-id="'+images[i][0]+'">' +
                                            '<i class="icon-android-delete fa-lg"></i>' +
                                            '&nbsp;&nbsp;حذف' +
                                            '</button>' +
                                            '</p>' +
                                            '</div>' +
                                            '</div>';
                                        $('#carousel-inner').append(html3 );
                                    }

                                }
                            }
                        });
                    }
                });

            }
        });

    });



</script>
<!-- END PAGE LEVEL JS-->

</body>

</html>

