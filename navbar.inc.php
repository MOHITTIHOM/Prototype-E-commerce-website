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
					<li><a href="todayDeals.php">Todays Deals</a></li>
					<li class="active"><a href="products.php">Products</a></li>
					<li><a href="contactUs.php">Contact Us</a></li>
					<li><a href="cart.php">Cart</a></li>
					<li><a href="search.php">Search</a></li>
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
					<li><a href="todayDeals.php">Todays Deals</a></li>
					<li class="active"><a href="products.php">Products</a></li>
					<li><a href="contactUs.php">Contact Us</a></li>
					<li class="bold"><a href="MART.php" class="btn">Register</a></li>
					<li><a href="search.php">Search</a></li>
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