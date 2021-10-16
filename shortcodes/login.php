<?php

defined("ABSPATH") || exit;

add_shortcode('SE_login' , 'SE_login_function');

function SE_login_function()
{
    if( is_user_logged_in() )
    {
            wp_redirect( home_url().'/se_panel' );
            exit;
    }


    if(isset($_POST['se_username'] ) && isset($_POST['se_password'])){

        $user = get_user_by( 'login', sanitize_text_field($_POST['se_username']) );
        if ( $user && wp_check_password(  sanitize_text_field($_POST['se_password']), $user->data->user_pass, $user->ID) ){
            $creds = array();
            $creds['user_login'] =  sanitize_text_field($_POST['se_username']) ;
            $creds['user_password'] =  sanitize_text_field($_POST['se_password']);
            $creds['remember'] = true;
            $user = wp_signon( $creds, false );
            if ( is_wp_error($user) )
            {
                wp_redirect( home_url().'/se_login');
                exit;
            }
            else{

                    wp_redirect( home_url().'/se_panel' );
                    exit;

            }
        }
        else{
            wp_redirect( home_url().'/se_login?wrong=true');
            exit;
        }

    }
    ?>

    <!DOCTYPE html>
    <html lang="en" data-textdirection="rtl" class="loading">

    <!-- Mirrored from pixinvent.com/free-bootstrap-template/robust-lite/html/rtl/login-simple.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jun 2017 06:39:05 GMT -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="PIXINVENT">
        <title>Login Page - Robust Free Bootstrap Admin Template</title>

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
    </head>
    <body data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column  blank-page blank-page">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content container-fluid">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body"><section class="flexbox-container">
                    <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1  box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 m-0">
                            <div class="card-header no-border">
                                <div class="card-title text-xs-center">
                                    <div class="p-1"><img src="<?php echo plugins_url('emp/assets-profile/images/logo/login-logo.png'); ?>" alt="branding logo"></div>
                                </div>
                                <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>ورد به پنل</span></h6>
                            </div>

                            <?php
                              if(isset($_GET['wrong']) && $_GET['wrong'] == 'true')
                              {
                                ?>
                                  <div class="alert alert-danger no-border alert-dismissible fade in mb-2" role="alert">
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                      نام کاربری یا گذره واژه اشتباه وارد شده است!
                                  </div>
                                <?php
                              }
                            ?>
                            <div class="card-body collapse in">
                                <div class="card-block">
                                    <form class="form-horizontal form-simple" action="" method="post" novalidate>
                                        <fieldset class="form-group position-relative has-icon-left mb-0">
                                            <input type="text" name="se_username" class="form-control form-control-lg input-lg" id="user-name" placeholder="نام کاربری" required>
                                            <div class="form-control-position">
                                                <i class="icon-head"></i>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" name="se_password" class="form-control form-control-lg input-lg" id="user-password" placeholder="گذرواژه" >
                                            <div class="form-control-position">
                                                <i class="icon-key3"></i>
                                            </div>
                                        </fieldset>
<!--                                        <fieldset class="form-group row">-->
<!--                                            <div class="col-md-6 col-xs-12 text-xs-center text-md-left">-->
<!--                                                <fieldset>-->
<!--                                                    <input type="checkbox" id="remember-me" class="chk-remember">-->
<!--                                                    <label for="remember-me"> Remember Me</label>-->
<!--                                                </fieldset>-->
<!--                                            </div>-->
<!--                                            <div class="col-md-6 col-xs-12 text-xs-center text-md-right"><a href="recover-password.html" class="card-link">Forgot Password?</a></div>-->
<!--                                        </fieldset>-->
                                        <button type="submit" name="se_login_submit" class="btn btn-primary btn-lg btn-block"><i class="icon-unlock2"></i> ورود </button>
                                    </form>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="">
                                    <p class="float-sm-left text-xs-center m-0"><a href="recover-password.html" class="card-link">فراموشی گذرواژه</a></p>
                                    <p class="float-sm-right text-xs-center m-0"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

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
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="<?php echo plugins_url('emp/assets-profile/js/core/app-menu.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo plugins_url('emp/assets-profile/js/core/app.js'); ?>" type="text/javascript"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
    </body>

    <!-- Mirrored from pixinvent.com/free-bootstrap-template/robust-lite/html/rtl/login-simple.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Jun 2017 06:39:05 GMT -->
    </html>

    <?php
}