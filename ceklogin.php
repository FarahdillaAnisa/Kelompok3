<?php
session_start();

include 'koneksi.php';

$login = mysqli_query($db, "SELECT * FROM user WHERE (username = '".$_POST['username']."') AND (password = '".$_POST['password']."')");


$rowcount = mysqli_num_rows($login);
if ($rowcount == 1) {
	$_SESSION['username'] = $_POST['username'];
	header('location: beranda.html?status=sukses');
}
else{
	header('location: login.php?status=gagal');
}

?>