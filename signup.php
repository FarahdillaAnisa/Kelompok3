<!DOCTYPE html>
<html>
<head>
	<title>Sign Up form</title>
	<link rel="stylesheet" type="text/css" href="loginsignup-style.css">
</head>
<body>
	<div class="loginbox">
		<img src="images/avatar.jpg" class="avatar">
		<h1>Sign-Up</h1>
		<form action="daftar.php" method="post">
			<p>Name</p>
			<input type="text" name="nama" placeholder="Masukkan Nama :">
			<p>E-mail</p>
			<input type="text" name="email" placeholder="Masukkan Email : ">
			<p>Phone</p>
			<input type="text" name="nohp" placeholder="Masukkan No. HP : ">
			<p>Username</p>
			<input type="text" name="username" placeholder="Masukkan Username : ">
			<p>Password</p>
			<input type="Password" name="password" placeholder="Masukkan Password :">
			<input type="submit" name="submit" value="Sign Up">
		</form>
	</div>
</body>
</html>