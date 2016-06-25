<?php
	ob_start();
if (isset($_GET["product_id"])){
if(loggedin()){
 if($product_id = $_GET["product_id"]){
	
	// echo "You have bought product with ID: ".$product_id;
	//To Run SQL Query To insert book in buyer table :-
	$user_id=$_SESSION['user_id'];

	$query="INSERT INTO `buyer` (`id`,`prod_id`) VALUES ($user_id,$product_id) ";
	$query_run=mysql_query($query);
	if($query_run)
	{	 
			$successful=true;
	
	}
	else
	{	echo mysql_error();
	}
		header("Location: ".$current_file."?success=1");
	}
}else{
	$login_error=true;
}
}
?>

