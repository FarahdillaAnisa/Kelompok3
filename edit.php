<?php
// include database connection file
include ("koneksi.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['submit']))
{   
    $id = $_GET['id_login'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // update user data
    $result = mysqli_query($db, "UPDATE user SET nama='$nama',email='$email',nohp='$nohp',username='$username',password='$password' WHERE id_login=$id");

    // Redirect to homepage to display updated user in list
    header("Location: crud.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($db, "SELECT * FROM user WHERE id_login=$id");

while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama'];
    $email = $user_data['email'];
    $nohp = $user_data['nohp'];
    $username = $user_data['username'];
    $password = $user_data['password'];
}
?>