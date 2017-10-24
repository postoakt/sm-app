<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Login</title>
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
		<div id="login-form-container">
			<div class="form-header">Login</div>
			<form id="login-form" action="<?php echo base_url(); ?>login/login_user" method="post">
				<div class="form-desc">Email</div>
				<input type="text" id="email" name="email">
				<div class="form-desc">Password</div>
				<input type="password" id="password" name="password">
				<input type="submit" value="Log In">
			</form>
			<div class="register-btn">Don't have an account? <a href="<?php echo base_url(); ?>register">Register</a></div>
		</div>
		<?php 
			if ($login_fail){
				echo "<div class='login-fail'>Log in failed.</div>";
			}
		?>
	</body>
</html>