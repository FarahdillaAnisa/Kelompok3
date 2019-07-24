<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
if ($username == 'admin' && $password == 'admin') {
	header('location: crud.php?status=sukses');
}
else{
	header('location: adminlog.html?status=gagal');
}

?>