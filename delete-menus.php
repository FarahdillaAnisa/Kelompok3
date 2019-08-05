<?php 
include_once('config.php');
if(isset($_REQUEST['delId']) and $_REQUEST['delId']!=""){
	$db->delete('tbl_product',array('id'=>$_REQUEST['delId']));
	header('location: browse-menus.php?msg=rds');
	exit;
}
?>