<?php

	require 'core.inc.php';
	require 'connect.inc.php';
	
	if(loggedin()){
		header('Location: main.php');
	}else{
		include 'loginform.inc.php';
	}


?>

