<!DOCTYPE html>
<html>
<head>
	<title>Login form</title>
	<link rel="stylesheet" type="text/css" href="loginsignup-style.css">
</head>
<body>
	<div class="loginbox">
	<img src="images/avatar.jpg" class="avatar">
	<h1>Login</h1>
	<form action="ceklogin.php" method="post">
		<p>Username</p>
		<input type="text" name="username" placeholder="Enter Username">
		<p>Password</p>
		<input type="Password" name="password" placeholder="Enter Password">
		<input type="submit" name="submit" value="Login">
		<a href="signup.php">Don't have an account?</a>
	</form>

	</div>
</body>
</html>