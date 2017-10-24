<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Register</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/index.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font-awesome-4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div id="header-container">
			<div id="header-wrapper">
				<div id="header-icon-and-search">
					<i id="header-icon" class="fa fa-users" aria-hidden="true"></i>
					<div id="header-app-title">Social Media App</div>
				</div>
			</div>
		</div> 
		<div id="register-form-container">
			<div class="form-header">Register</div>
			<form id="register-form" action="<?php echo base_url() ?>register/register_user" method="post">
				<div class="form-desc">Email</div>
				<input type="text" id="email" name="email">
				<div class="form-desc">Password</div>
				<input type="password" id="password1" name="password">
				<div class="form-desc">Confirm Password</div>
				<input type="password" id="password2">
				<div class="form-desc">First Name</div>
				<input type="text" id="first_name" name="first_name">
				<div class="form-desc">Last Name</div>
				<input type="text" id="last_name" name="last_name">
				<input type="submit" value="Register">
			</form>
			<div class="register-btn">Already have an account? <a href="<?php echo base_url() ?>login">Login</a></div>
		</div
	</body>
</html>