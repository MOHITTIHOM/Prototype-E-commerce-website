<?php
	ob_start();
	require 'core.inc.php';
	require 'connect.inc.php';

if (!isset($_GET["product_id"])) {
	echo "Invalid approach";
	die();
}
if(!loggedin())
{	//echo "<script>alert('You are not logged In')</script>";
	// echo "Not logged";
	if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER']))
				{
					$http_referer=$_SERVER['HTTP_REFERER'];
					header('Location: '.$http_referer);
					}
				else {
					header('Location: main.php');
				}
}
else {
	$product_id = $_GET["product_id"];
	// echo "You have bought product with ID: ".$product_id;
	//To Run SQL Query To insert book in buyer table :-
	$user_id=$_SESSION['user_id'];

	$query="INSERT INTO `buyer` (`id`,`prod_id`) VALUES ($user_id,$product_id) ";
	$query_run=mysql_query($query);
	if($query_run)
	{	 echo 'Succesfulll Added in your cart ';	
	}
	else
	{	echo mysql_error();
	}
	if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER']))
				{
					$http_referer=$_SERVER['HTTP_REFERER'];
					header('Location: '.$http_referer);
					}
				else {
					header('Location: main.php');
				}
}

?>

