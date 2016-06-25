<?php

	require 'core.inc.php';
	require 'connect.inc.php';
	
	
		
		if(loggedin()){
		$first_name=getfield('firstname');
		$sur_name=getfield('surname');
		}else{
			header('Location: MART.php');
		}
	
/*<?php echo $first_name.' '.$sur_name; ?>*/

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

 
  
	<link href="projectCss/main.css" rel="stylesheet">
  
    
  </head>
  <body>
    
	
	
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="" class="navbar-brand"> <span id="mart">Mart</span> <span>Welcome! <?php echo $first_name?></span></a>
				
				</div>
			
			<div class="collapse navbar-collapse">
				
				
				<ul class="nav navbar-nav">
					<li class="active"><a href="#home">Home</a></li>
					<li><a href="#myprofile">My Profile</a></li>
					<li><a href="todayDeals.php">Todays Deals</a></li>
					<li><a href="products.php">Products</a></li>
					<li><a href="contactUs.php">Contact Us</a></li>
					<li><a href="cart.php">Cart</a></li>
					<li><a href="search.php">search</a></li>
				</ul>
				
				<form action="logout.php" class="navbar-form navbar-right">
					
				<div class="form-group">
						<button type="submit"  class="btn btn-danger">Log Out</button>
				</div>	
				</form>
				
			</div>
		</div>
	</div>
	
	<div class="container" id="topContainer">
		<div class="row">
			<div class="col-md-6 col-md-offset-3" id="topRow">
				<!--using offset we have just centred the div at the center-->
				<h1 class="big"> <?php echo 'Hey '.$first_name.' '.$sur_name; ?> </h1>
				<p class="lead">Thanks for choosing us ;)</p>
				<p class="text">Check out the latest offers. Exciting Deals for grab.</p>
				<p class="text">Lets go Shopping!!!</p>
			
			
			<!--
			<form action="" method="POST" >
			<div class="form-group">
				<label for="username"> Username </label>
				<input type="text" class="form-control" name="username"/>
			
			</div>
			
			
			<div class="form-group">
				<label for="Email"> Email </label>
				<input type="email" class="form-control" name="password"/>
			</div>
			
			<div class="form-group">
				<label for="password"> Password </label>
				<input type="password" class="form-control" name="password"/>
			</div>
			 
			
			<div class="form-group">
				<input type="submit" value="Login" class="btn btn-default" name="login"/>
			</div>
		</form>
			-->
			</div>	
		
			
		
		</div>
		
		
		
	</div>
	
	
	
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="projectScripts/mart.js"></script>
	
  </body>
</html>