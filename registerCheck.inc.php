<?php
$successful=false;
$length_prob=false;
$print_this="NOTHING";
if(!loggedin()){
	
	if(isset($_POST['rusername']) && isset($_POST['rfirstname']) && isset($_POST['rsurname']) && isset($_POST['rpassword']) && isset($_POST['rpassword_again']) && isset($_POST['raddress'])   && isset($_POST['remail'])  && isset($_POST['rtelephone'])   ){
		$rusername=$_POST['rusername'];
		$rfirstname=$_POST['rfirstname'];
		$rsurname=$_POST['rsurname'];
		$rpassword=$_POST['rpassword'];
		$rpassword_again=$_POST['rpassword_again'];
		$password_hash=md5($rpassword);
		$raddress=$_POST['raddress'];
		$remail=$_POST['remail'];
		$rtelephone=$_POST['rtelephone'];
		
		if(!empty($rusername) && !empty($rfirstname) && !empty($rsurname) && !empty($rpassword) && !empty($rpassword_again) && !empty($raddress) && !empty($remail) && !empty($rtelephone) ){
			if(strlen($rusername)>40 || strlen($rfirstname)>40 || strlen($rsurname)>40 || strlen($raddress)>40 || strlen($remail)>40){
				$length_prob=true;
				$print_this="Username,FirstName,SurName,Address,Email cannot be greater than 30.";
			}else{
				if($rpassword!=$rpassword_again){
				$length_prob=true;
				$print_this="Passwords didnt match.";
				}else{
					//start registration
					//check user exists already or not?
					$query="SELECT `username` FROM `users` WHERE `username`='$rusername'";
					$query_run=mysql_query($query);
					if(mysql_num_rows($query_run)==1){
						$length_prob=true;
						$print_this="This Username already exists.";
					}else{
						$query="INSERT INTO `users` VALUES('','".mysql_real_escape_string($rusername)."','".mysql_real_escape_string($password_hash)."','".mysql_real_escape_string($rfirstname)."','".mysql_real_escape_string($rsurname)."','".mysql_real_escape_string($raddress)."','".mysql_real_escape_string($remail)."','".mysql_real_escape_string($rtelephone)."')";
						if($query_run=mysql_query($query)){
							//set something to show success
							$successful=true;
							$print_this="Successfully Registered. Please Login Now.";
						}else{
							//set something to show failure
							$length_prob=true;
							$print_this="Sorry registration failed. Please try again after some time.";
						}
					}
				}
			}
		}else{$length_prob=true;
			$print_this="Please Enter the complete details.";
		}
						
	}else{
		
		
	}
						
	
	
	
	
}


?>