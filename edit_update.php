<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_login = $_POST['id_login'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$username = $_POST['username'];
$password = $_POST['password'];
 
$update = mysqli_query($db, "UPDATE user SET nama='$nama', email='$email', nohp='$nohp', username='$username', password='$password' WHERE id_login='$id_login'");
// update data ke database
if ($update) {
echo "<script>alert('Data Berhasil Diedit');document.location.href='crud.php'</script>";
       
}else{
    echo "<script>alert('Data Gagal Diedit');document.location.href='crud.php?id_login='$id_login''</script>";
       
}
?>