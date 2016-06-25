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
  
	<link href="projectCss/contactUs.css" rel="stylesheet">
  <?php require 'book.inc.php'; ?>
    
  </head>
  <body>
    
	
	<?php
	require 'navbar.inc.php';
	?>
	
	
	<div class="container" id="books">
		<div class="row">
			<div class="col-md-6 col-md-offset-3" id="topRow">
				<!--using offset we have just centred the div at the center-->
				<h1 class="big"> Help Centre </h1>
				<p class="text">Hi! How can we assist you?</p>
				<br><br>
				<p><b>Payment</b>: merchat@mart.in</p>
				<p><b>Cannot Add to Cart</b>: merchant@mart.in</p>
				<p><b>Return or Cancellation</b>: orders@mart.in</p>
				<p><b>Refund</b>: merchant@mart.in</p>
				<p><b>Order not delivered</b>: orders@mart.in</p>
				<p><b>Track package</b>: orders@mart.in</p>
				<p><b>Maintenance</b>: products@mart.in</p>
				<p><b>Wallet</b>: merchant@mart.in</p>
				<p><b>OverPriced Product</b>: products@mart.in</p>
				<p><b>Account Hacked</b>: general@mart.in</p>
				<p><b>Suggest Improvements</b>: dev@mart.in</p>
				<br><br>
				<p >Any Other query?</p>
				<p class="text">Write to us at help@mart.in</p>
				<p>We will get back to you within 24 hours.</p>
				<p class="text"><b>Toll Free: 1800-0000-0000-01</b></p>
				<br><br>
				<p>like us on <b>facebook.com/MART</b></p>
			</div>
		</div>
	</div>
	
	
	
	
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="projectScripts/contactUS.js"></script>
	
  </body>
</html>


