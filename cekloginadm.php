<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
if ($username == 'admin' && $password == 'admin') {
	header('location: browse-users.php?status=sukses');
}
else{
	header('location: adminlogin.html?status=gagal');
}

?>