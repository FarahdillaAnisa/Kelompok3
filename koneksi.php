<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "rumahmakan_awak";

$db = mysqli_connect($server, $user, $password);
mysqli_select_db($db, $nama_database);

if (!$db) {
	die("gagal terhubung ke database :" . mysqli_connect_error());
}
else{
	echo "";
}
?>