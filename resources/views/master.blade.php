<!DOCTYPE html>
<html>
<head>
	<title>TechruDite</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- jquery -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="<?php echo  env('APP_URL').'/techrudite/public/js/custom.js'?>"></script>
	<script src="<?php echo  env('APP_URL').'/techrudite/public/js/jquery.validate.min.js'?>"></script>
	<script type="text/javascript">
		$('#login').on('click',function(){
			alert('in');
		})
	</script>
</head>
<body>
	{{View::make('header')}}
@yield('content')

</body>
</html>