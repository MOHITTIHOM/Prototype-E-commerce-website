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
		}else{
			header('Location: main.php');
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
  
	<link href="projectCss/cart.css" rel="stylesheet">
  <?php require 'book.inc.php'; ?>
    
  </head>
  <body>
    
	
	<?php
		require 'navbar.inc.php';
	?>
	
	
	<div class="container" id="books">
		<div class="row">
			<div class="col-md-6 col-md-offset-3" id="topRow">
				
				  
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
				echo 'The Item has been Removed from your cart. ';
				echo '</div>';
				}
				
				?>
						
						
						<?php  require 'cart.inc.php'; ?>
					
					
						<br><br><br><br><br><br>
					
			</div>
		</div>
	</div>
	
	
	
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<?php require 'bookscript.inc.php'; ?>
	<script type="text/javascript" src="projectScripts/books.js"></script>
	
  </body>
</html>


