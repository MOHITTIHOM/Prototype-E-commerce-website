<?php

ob_start();
require 'core.inc.php';
require 'connect.inc.php';

if(isset($_GET['product_id'])){
	$id=$_GET['product_id'];
	$user_id=$_SESSION['user_id'];
	$query="DELETE FROM `buyer` WHERE `prod_id`=".$id." && `id`=".$user_id;
	if($query_run=mysql_query($query)){
		header ("Location: cart.php?success=1");
	}else{
		echo mysql_error();
	}
	
	}
?>
