<?php

	require 'core.inc.php';
	require 'connect.inc.php';
	require 'logincheck.inc.php';
	$logged_in=false;
		
		if(loggedin()){
		$first_name=getfield('firstname');
		$sur_name=getfield('surname');
		$logged_in=true;
		}
	

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

 
  
	<link href="projectCss/products.css" rel="stylesheet">
  
    
  </head>
  <body>
    
	
	<?php
	require 'navbar.inc.php';
	
	?>
	
	
	<div class="container" id="books">
		<div class="row">
			<div class="col-md-6 col-md-offset-3" id="topRow">
				<!--using offset we have just centred the div at the center-->
				<h1 class="big"> Books </h1>
				<p class="lead"><Books are man's Best Friend.<br></p>
				<p class="text">We know you love to read..</p>
				<p class="text">We have got amazing reads just for you.</p>
				<p class="text">From Fictions to TextBooks.</p>
				<p class="text">Children and Young Adult</p>
				<p class="text">Classics</p>
				<p class="text">Modern</p>
				<p class="text">Biography</p>
				<p class="text">Bestsellers...</p>
				
				<p class="bold"><a href="books.php" class="btn btn-info">Lets read</a></p>
				
			
		
			</div>	
		
			
		
		</div>
		
		
		
	</div>
	<div class="container" id="electronics">
		<div class="row">
			<div class="col-md-6 col-md-offset-3" id="topRow">
				<!--using offset we have just centred the div at the center-->
				<h1 class="big"> Electronics </h1>
				<p class="lead"> Embrace Technology.</p>
				<p class="text">We know your love for gadgets and stuffs</p>
				<p class="text">Let us help you with</p>
				<p class="text">Computers & Accessories</p>
				<p class="text">SmartPhones</p>
				<p class="text">Cameras, Audio & Video </p>
				<p class="text">Smart TV...</p>
				
				<p class="bold"><a href="electronics.php" class="btn btn-info">Explore</a></p>
			
		
			</div>	
		
			
		
		</div>
		
		
		
	</div>
	
	
	
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="projectScripts/products.js"></script>
	
  </body>
</html>


