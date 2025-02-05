<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Website</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url('login/images/icons/favicon.ico');?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('login/vendor/bootstrap/css/bootstrap.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('fonts/font-awesome-4.7.0/css/font-awesome.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('login/vendor/animate/animate.css');?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('login/vendor/css-hamburgers/hamburgers.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('login/vendor/select2/select2.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('login/css/util.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('login/css/main.css');?>">
<!--===============================================================================================-->
</head>
<body>
		<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>		
					<img src="login/images/img-01.png" alt="IMG">
				</div>

				<form action="<?php echo base_url('login/proses'); ?>" method="post" class="login100-form validate-form">
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username" placeholder="username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="<?php echo base_url('login/vendor/jquery/jquery-3.2.1.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('login/vendor/bootstrap/js/popper.js');?>"></script>
	<script src="<?php echo base_url('login/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('login/vendor/select2/select2.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('login/vendor/tilt/tilt.jquery.min.js');?>"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('login/js/main.js');?>"></script>

</body>
</html>