<?php
	$supply=true;
	$exist=true;
	
	require 'logincheck.inc.php';
	require 'registerCheck.inc.php';

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

 
  
	<link href="projectCss/mart.css" rel="stylesheet">
  
    
  </head>
  <body>
    
	
	
	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="" class="navbar-brand" id="mart">Mart</a>
			</div>
			
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#home">Home</a></li>
					<li><a href="todayDeals.php">Todays Deals</a></li>
					<li><a href="products.php">Products</a></li>
					<li><a href="contactUs.php">Contact Us</a></li>
					<li><a href="search.php">Search</a></li>
			</ul>
				<form action="<?php echo $current_file?>" class="navbar-form navbar-right" method="POST">
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
	
	<div class="container" id="topContainer">
		<div class="row">
			<div class="col-md-6 col-md-offset-3" id="topRow">
				<!--using offset we have just centred the div at the center-->
				<h1> Welcome to The Mart! </h1>
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
				}
				else if($length_prob==true){
				echo '<div class="alert alert-danger alert-dismissable">';
				echo '<button type="button" class="close" data-dismiss="alert">x</button>';
				echo $print_this;
				echo '</div>';
				}
				else if($successful==true){
				echo '<div class="alert alert-success alert-dismissable">';
				echo '<button type="button" class="close" data-dismiss="alert">x</button>';
				echo $print_this;
				echo '</div>';
				}
				?>
				
				
				
				
				
				<p class="lead">We Deliver, We Care!</p>
				<p>A place with the Best deals! Wish anything with the best price you can get anywhere.</p>
				<p class="bold">Need Anything? Join</p>
			
			
			
			<form action="<?php echo $current_file?>" method="POST" >
			<div class="form-group">
				<label for="rusername"> Username </label>
				<input type="text" class="form-control" name="rusername"/>
			
			</div>
			
			
			<div class="form-group">
				<label for="rfirstname"> Firstname </label>
				<input type="text" class="form-control" name="rfirstname"/>
			</div>
			
			<div class="form-group">
				<label for="rsurname"> Surname </label>
				<input type="text" class="form-control" name="rsurname"/>
			</div>
			
			<div class="form-group">
				<label for="rpassword"> Password </label>
				<input type="password" class="form-control" name="rpassword"/>
			</div>
			
			<div class="form-group">
				<label for="rpassword_again"> Password Again</label>
				<input type="password" class="form-control" name="rpassword_again"/>
			</div>			
			
			<div class="form-group">
				<label for="raddress"> Address</label>
				<input type="text" class="form-control" name="raddress"/>
			</div>
			
			
			<div class="form-group">
				<label for="remail"> Email</label>
				<input type="email" class="form-control" name="remail"/>
			</div>
			
			<div class="form-group">
				<label for="rtelephone"> Telephone No.</label>
				<input type="text" class="form-control" name="rtelephone"/>
			</div>
			
			
			<div class="form-group">
				<input type="submit" value="Register" class="btn btn-default" name="login"/>
			</div>
		</form>
			
			</div>	
		
			
		
		</div>
		
		
		
	</div>
	
	
	
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="projectScripts/mart.js"></script>
	
  </body>
</html>