<?php
	
	if( isset($_POST['username']) && isset($_POST['password'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password_hash = md5($password);
	if(!empty($username) && !empty($password) ){
		$query = "SELECT `id` FROM `users` WHERE `username`='".mysql_real_escape_string($username)."' AND `password`='".mysql_real_escape_string($password_hash)."'";
		if( $query_run = mysql_query($query)){
			$query_num_rows = mysql_num_rows($query_run);
			if($query_num_rows==0){
				$exist=false;
				
				echo 'Invalid username/password combination.';
			}else if($query_num_rows==1){
				$user_id =  mysql_result($query_run,0,'id');
				$_SESSION['user_id']=$user_id;
				if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER']))
				{
					$http_referer=$_SERVER['HTTP_REFERER'];
					header('Location: '.$http_referer);
					}
				else {
					header('Location: main.php');
				}
			}
		}
	}else{
		$supply=false;
		echo 'You must supply a Username and Password.';
	}		
	}
	
?>