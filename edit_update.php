<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$username = $_POST['username'];
$password = $_POST['password'];
 
// update data ke database
if (!empty($nama) && !empty($email) && !empty($nohp) && !empty($username) && !empty($password)) {
	mysqli_query($db, "UPDATE user SET nama='$nama', email='$email', nohp='$nohp', username='$username', password='$password' WHERE id_login='$id'" );

	header('location: crud.php?status=sukses');
}else{
	header('location: edit.php?status=gagal');
}
 
?>