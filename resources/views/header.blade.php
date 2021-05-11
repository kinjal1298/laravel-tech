<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui, maximum-scale=1">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Techrudite Admin</title>

    <link href="<?php echo env('APP_URL')."css/line-awesome/css/line-awesome.min.css" ?> rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" href="<?php echo  env('APP_URL').'/techrudite/public/css/vendors.css'?>" integrity="" >
    <link rel="stylesheet" href="<?php echo  env('APP_URL').'/techrudite/public/css/app.css'?>" integrity="" >
    <link rel="stylesheet" href="<?php echo  env('APP_URL').'/techrudite/public/css/custom.css'?>" integrity="" >
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo env('APP_URL').'css/vertical-menu.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo env('APP_URL').'css/palette-gradient.css'?>">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo env('APP_URL').'css/bootstrap-toggle.min.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo env('APP_URL').'css/animate.min.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo env('APP_URL').'css/style.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo env('APP_URL').'css/daterangepicker.css'?>">
    <script src="<?php echo env('APP_URL'); ?>assets/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo env('APP_URL'); ?>assets/js/bootstrap-toggle.min.js" type="text/javascript"></script>
    <script src="<?php echo env('APP_URL'); ?>assets/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="<?php echo env('APP_URL'); ?>assets/js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?php echo env('APP_URL'); ?>assets/js/sweetalert.min.js" type="text/javascript"></script>
    <script src="<?php echo env('APP_URL'); ?>assets/js/moment.min.js" type="text/javascript"></script>
    <script src="<?php echo env('APP_URL'); ?>assets/js/daterangepicker.min.js" type="text/javascript"></script>
    <script src="<?php echo env('APP_URL'); ?>assets/js/page_js/admin_custom.js" type="text/javascript"></script>
</head>

<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu" data-col="2-columns">
  <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-admin-color navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <h2 class="sidebar-header">Techrudite</h2>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="javascript:void(0);"></a></li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="javascript:void(0);" data-toggle="dropdown">
                                <span class="mr-1">Login
                                    <span id="admin_name" class="user-name text-bold-700">@if(Session()->has('user'))
                                     {{ Session()->get('user')['firstname']}}
                                    @endif
                            </span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                               
                                <a class="dropdown-item" href="logout"><i class="ft-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
