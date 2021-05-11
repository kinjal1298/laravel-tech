<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <!-- css files -->
    <title>Registration</title>
   
	<link rel="stylesheet" href="<?php echo  env('APP_URL').'/techrudite/public/css/vendors.css'?>" integrity="" >
	<link rel="stylesheet" href="<?php echo  env('APP_URL').'/techrudite/public/css/app.css'?>" integrity="" >
	<link rel="stylesheet" href="<?php echo  env('APP_URL').'/techrudite/public/css/custom.css'?>" integrity="" >
	<!-- jquery -->
	<!-- java files -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="<?php echo  env('APP_URL').'/techrudite/public/js/custom.js'?>"></script>
	<script src="<?php echo  env('APP_URL').'/techrudite/public/js/jquery.validate.min.js'?>"></script>

    
  <style type="text/css">
    html body.bg-full-screen-image{
      background-color: rgb(255 255 255)!important;
    }
    .btn-outline-first {
      border-color: #009688!important;
      background-color: transparent;
      color: #009688!important;
    }
    html body a {
      color: #009688!important;
    }
    .header_color{color: #009688!important;}
    .form-control:focus {
      border-color: #009688!important;;
    }
    .btn_color{ background-color: #009688!important;  }
  </style>
</head>
<body class="vertical-layout vertical-menu 1-column bg-full-screen-image menu-expanded blank-page blank-page"
data-open="click" data-menu="vertical-menu" data-col="1-column">
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-body p-0 btn_color" >
                <section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-md-4 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                                <div class="card-header border-0">
                                    <div class="card-title text-center">
                                      
                                        <h2 class="header_color">Techrudite - Registration</h2>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form id="registration" class="form-horizontal" action="registration_submit" method="POST" accept-charset="utf-8" novalidate name="registration">
                                    	<fieldset class="form-group position-relative has-icon-left">
                                    		@csrf
                                            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Your First Name" />
                                            @error('firstname')
										    <span class="text-danger">{{$message}}</span>
										    @enderror
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Your Last Name" />
                                            @error('lastname')
										    <span class="text-danger">{{$message}}</span>
										    @enderror
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Your Email" />
                                            @error('email')
										    <span class="text-danger">{{$message}}</span>
										    @enderror
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter Password" />
                                          
                                            @error('pwd')
										    <span class="text-danger">{{$message}}</span>
										    @enderror
                                        </fieldset>
                                        <div class="form-group row">
                                            <div class="col-12 text-center text-sm-left">
                                                <button type="submit" id="admin_login_submit" class="btn btn-outline-first btn-block"><i id="unlock_i" class="ft-unlock"></i> Submit</button>
                                            </div>
                                        </div>
                                        <div class="form-check">
            								<a href="<?php echo  env('APP_URL').'/techrudite/' ?>" class="text-danger">SignIn?</a>
            							</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>
</html>
<script type="text/javascript">
 var base_url = "<?php echo env('APP_URL');?>";
</script>