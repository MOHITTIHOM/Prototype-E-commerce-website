<?php

//changes to make.. tell which product is added to the cart

	$supply=true;
	$exist=true;
	$successful=false;
	
	require 'core.inc.php';
	require 'connect.inc.php';
	require 'logincheck.inc.php';
	
	
	$logged_in=false;
		
		if(loggedin()){
		$first_name=getfield('firstname');
		$sur_name=getfield('surname');
		$logged_in=true;
		}
	$login_error=false;
	include 'buy.inc.php';

?>




<html lang="en">
  <head>
	<!--metaTags for Bootstrap-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MART</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	
	<script type="text/javascript" src="jquery.min.js"></script>
  
	<link href="projectCss/electronics.css" rel="stylesheet">
  <?php require 'electronic.inc.php'; ?>
    
  </head>
  <body>
    
	
	<?php
	require 'navbar.inc.php';
	?>
	
	
	<div class="container" id="electronics">
		<div class="row">
			<div class="col-md-6 col-md-offset-3" id="topRow">
				<!--using offset we have just centred the div at the center-->
				<h1 class="big"> Electronics </h1>
				<?php if($supply==false){
				echo '<div class="alert alert-danger alert-dismissable">';
				echo '<button type="button" class="close" data-dismiss="alert">x</button>';
				echo 'Please provide a username and password.';
				echo '</div>';
				}else if($exist==false){
				echo '<div class="alert alert-danger alert-dismissable">';
				echo '<button type="button" class="close" data-dismiss="alert">x</button>';
				echo 'Invalid Username/Password.';
				echo '</div>';
				}else if($login_error==true){
				echo '<div class="alert alert-danger alert-dismissable">';
				echo '<button type="button" class="close" data-dismiss="alert">x</button>';
				echo 'Please Login/Register to add to Cart.';
				echo '</div>';
				}
				
				else if(isset($_GET["success"]) && $_GET["success"]==1){
				echo '<div class="alert alert-success alert-dismissable">';
				echo '<button type="button" class="close" data-dismiss="alert">x</button>';
				echo 'Added Successfully to your Cart. Continue shopping <br> Or<br> Select Cart to make Payment<br>Or<br> If you have accidently added to cart you can remove it any time';
				echo '</div>';
				}
				
				?>
				
				<p class="text">We love technology too..</p>
				<p >Here is everything you need..</p>
<!-- collapse template--
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1">Collapsible list group</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <ul class="list-group">
          <li class="list-group-item">One</li>
          <li class="list-group-item">Two</li>
          <li class="list-group-item">Three</li>
        </ul>
        <div class="panel-footer">Footer</div>
      </div>
    </div>
  </div>
<!-- collapse template-->	



<?php
	
	$query1 = "SELECT * FROM `product` WHERE `category`='electronic' OR `category`='Electronic' OR `category`='Electronics' OR`category`='electronics'";
		
		
		if($query_run1 = mysql_query($query1)){
		if($count= mysql_num_rows($query_run1)){
		
		for ($i = 0; $i < $count; $i += 1) {
			if($row = mysql_fetch_row($query_run1)){
			echo ' 
			<a href="#electronic'.$row[0].'">'.$row[1].'</a>';
	
			}
		}
		
		}
		}
	
		
?>



		
				
			</div>	
		</div>
				
	</div>
	
	<?php
		$query1 = "SELECT * FROM `product` WHERE `category`='electronic' OR `category`='Electronic' OR `category`='Electronics' OR`category`='electronics'";
		if($query_run1 = mysql_query($query1)){
		if($count= mysql_num_rows($query_run1)){
		echo '<table>';
		for ($i = 0; $i < $count; $i += 1) {
			if($row = mysql_fetch_row($query_run1)){
		echo '<tr>	
		
		<div class="container" id="';?><?php echo'electronic'.$row[0].'" >
			<div class="row">
				<div class="col-md-6 col-md-offset-3  allBooks" >
					<!--using offset we have just centred the div at the center-->
					<p class="headText"> '.$row[1].' </p>
					<!--p >'.$row[2].'</p-->
					<p class="text bold"> Rs '.$row[4].'</p>
					<p class="text">Publication:'.$row[3].'</p>
					
					<!-- collapse template-->
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse';?><?php echo $row[0].'">Description</a>
        </h4>
      </div>
      <div id="collapse';?><?php echo $row[0].'" class="panel-collapse collapse">
        <ul class="list-group">
          <li class="list-group-item"><p class="text">'.$row[6].'</p></li>
          
        </ul>
        
      </div>
    </div>
  </div>
<!-- collapse template-->
					
					
					
					<p class="bold">
					<a href="electronics.php?product_id=';?><?php echo $row[0].'"><button class="btn btn-success">Add To Cart</button></a></p>
					</div>	
			</div>
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
					';
		}
		}
		}
		/*
					<p class="bold">
					<form action="books.php" action="POST">
					<button type="submit" name="product_id" value="'.$row[0].'"class="btn btn-success">Add To Cart</button></form></p>
					not to change the method in buy.inc.php
		*/
		}		
		echo "</table>";
	?>
	
	
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<?php require 'electronicscript.inc.php'; ?>
	<script type="text/javascript" src="projectScripts/electronics.js"></script>
	
  </body>
</html>


