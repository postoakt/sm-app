<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Register</title>
	</head>
	<body>
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
	</body>
</html>