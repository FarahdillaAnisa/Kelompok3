<?php
// include database connection file
include ("koneksi.php");
if(isset($_POST['submit']))
{  // Get id from URL to delete that user
	$id = $_GET['id'];

// Delete user row from table based on given id
	$result = mysqli_query($db, "DELETE FROM user WHERE id_login=$id");

// After delete redirect to Home, so that latest user list will be displayed.
	header("Location:crud.php");
}
?>