<?php 
include_once('config.php');
if(isset($_REQUEST['delId']) and $_REQUEST['delId']!=""){
	$db->delete('user',array('id_login'=>$_REQUEST['delId']));
	header('location: browse-users.php?msg=rds');
	exit;
}
?>