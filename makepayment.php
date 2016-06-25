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
  
	<link href="projectCss/pay.css" rel="stylesheet">
  <?php require 'book.inc.php'; ?>
    
  </head>
  <body>
    
	
	<?php
	if($logged_in==true){
	echo '
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					
				</button>
				<a href="MART.php" class="navbar-brand"> <span id="mart">Mart</span> <span>Welcome!';?> <?php echo $first_name; echo '</span></a>
				
				</div>
			
			<div class="collapse navbar-collapse">
				
				
				<ul class="nav navbar-nav">
					<li><a href="MART.php">Home</a></li>
					<li ><a href="#myprofile">My Profile</a></li>
					<li><a href="#todaysDeal">Todays Deals</a></li>
					<li class="active"><a href="products.php">Products</a></li>
					<li><a href="#contactUs">Contact Us</a></li>
					<li><a href="cart.php">Cart</a></li>
				</ul>
				
				<form action="logout.php" class="navbar-form navbar-right">
					
				<div class="form-group">
						<button type="submit"  class="btn btn-danger">Log Out</button>
				</div>	
				</form>
				
			</div>
		</div>
	</div>
	';
	}
	else {
		echo'
		<div class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="MART.php" class="navbar-brand" id="mart">Mart</a>
			</div>
			
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li ><a href="MART.php">Home</a></li>
					<li><a href="#todaysDeal">Todays Deals</a></li>
					<li class="active"><a href="products.php">Products</a></li>
					<li><a href="#contactUs">Contact Us</a></li>
					<li class="bold"><a href="MART.php" class="btn">Register</a></li>
				</ul>
				<form action="';?><?php echo $current_file; echo '" class="navbar-form navbar-right" method="POST">
					<div class="form-group">
						<input name="username" type="text" placeholder="Username" class="form-control">
					</div>
				<div class="form-group">
						<input name="password" type="password" placeholder="Password" class="form-control">
				</div>
				<div class="form-group">
						<button type="submit"  class="btn btn-success">Log In</button>
				</div>	
				</form>
				
			</div>
		</div>
	</div>
		
		';
	
	}
	?>
	
	
	<div class="container" id="books">
		<div class="row">
			<div class="col-md-6 col-md-offset-3" id="topRow">
				
				  
					
					<?php require 'makepayment.inc.php'; ?>	
					
					
					
					
			</div>
		</div>
	</div>
	
	
	
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<?php require 'bookscript.inc.php'; ?>
	<script type="text/javascript" src="projectScripts/books.js"></script>
	
  </body>
</html>


