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
  
	<link href="projectCss/search.css" rel="stylesheet">
  <?php require 'book.inc.php'; ?>
    
  </head>
  <body>
    
	
	<?php
		require 'navbar.inc.php';
	?>
	
	
	<div class="container" >
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
				/*
				else if(isset($_GET["success"]) && $_GET["success"]==1){
				echo '<div class="alert alert-success alert-dismissable">';
				echo '<button type="button" class="close" data-dismiss="alert">x</button>';
				echo 'The Item has been Removed from your cart. ';
				echo '</div>';
				}*/
				
				?>
						
				
				<h1 class="big">Let us help you get what you need.</h1>
				
				<p>
				<form action="<?php echo $current_file;?>" method="post" class="form-inline">
					<div class="form-group">
						<label for="category">Category</label>
						<input type="text" class="form-control" name="category"/>
					</div>
					<div class="form-group">
						<label for="minp">Min Price</label>
						<input type="text" class="form-control" name="minp"/>
					</div>
					<div class="form-group">
						<label for="maxp">Max Price</label>
						<input type="text" class="form-control" name="maxp"/>
					</div>						
					<div class="form-group">
						<input type="submit" value="Search" class="btn btn-default" name="Search"/>
					</div>
				</p>
				<!--script> alert('please use books');</script-->	
				<?php require 'searchengine.inc.php';?>
			</div>
		</div>
	</div>
	
	
	
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<?php require 'bookscript.inc.php'; ?>
	<script type="text/javascript" src="projectScripts/books.js"></script>
	
  </body>
</html>


