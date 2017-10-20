<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Login</title>
	</head>
	<body>
		<form id="login-form" action="login/login_user" method="post">
			<div class="form-desc">Email</div>
			<input type="text" id="email" name="email">
			<div class="form-desc">Password</div>
			<input type="password" id="password" name="password">
			<input type="submit" value="Log In">
		</form>
		<div class="register-btn">Don't have an account? <a href="<?php echo base_url(); ?>register">Register</a></div>
		<?php 
			if ($login_fail){
				echo "<div class='login-fail'>Log in failed.</div>";
			}
		?>
	</body>
</html>