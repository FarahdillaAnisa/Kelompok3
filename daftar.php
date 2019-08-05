<?php

include 'koneksi.php';

if (isset($_POST['submit'])) {

    $sql = "INSERT INTO user (nama, email, nohp, username, password) VALUES ('".$_POST["nama"]."','".$_POST["email"]."','".$_POST["nohp"]."','".$_POST["username"]."','".$_POST["password"]."')";

	$query = mysqli_query($db, $sql);
	if ($query) {
		header('Location: login.php?status=sukses');
	}
	else{
		header('Location: signup.php?status=gagal');
	}
}
	
	else{
	die("Akses dilarang..");
}

?>