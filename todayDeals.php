<?php
 $supply=true;
	$exist=true;
	$successful=false;
	
	require 'core.inc.php';
	require 'connect.inc.php';
	
	
	
	$logged_in=false;
 
 $num= date("j");
 //echo $num;
 $query="SELECT count(*) FROM `product`";
 $supply=true;
$exist=true;
$successful=false;

 if($query_run=mysql_query($query)){
	 $row=mysql_fetch_row($query_run);
	 //echo $row[0];
	 $val=$row[0]% $num;
	 $query="SELECT * FROM `product` WHERE `prod_id`=".$val;
	 if($query_run=mysql_query($query)){
		 $row=mysql_fetch_row($query_run);
		 // make in general
		 
		 
	 }
 }
 
 require 'logincheck.inc.php';
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
  
	<link href="projectCss/todayDeals.css" rel="stylesheet">
  <?php require 'book.inc.php'; ?>
    
	<style>
	
	body{
		
		background-image:url("<?php echo $row[5];?>");
		height:800px;
		width:100%;
		background-size:cover;
		background-attachment: fixed;
	
	}
	
	</style>
	
  </head>
  <body>
    
	
	<?php
	
	require 'navbar.inc.php';
	?>
	<?php
	echo
		 '
		 <div class="container" id="'.$row[0].'" >
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
          <a data-toggle="collapse" href="#collapse'.$row[0].'">Description</a>
        </h4>
      </div>
      <div id="collapse'.$row[0].'" class="panel-collapse collapse">
        <ul class="list-group">
          <li class="list-group-item"><p class="text">'.$row[6].'</p></li>
          
        </ul>
        
      </div>
    </div>
  </div>
<!-- collapse template-->
					
					
					
					<p class="bold">
					<a href="books.php?product_id='.$row[0].'"><button class="btn btn-success">Add To Cart</button></a></p>
	
		
		</div>
	</div>
</div>';
	
	
	?>

	


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<?php require 'bookscript.inc.php'; ?>
	<script type="text/javascript" src="projectScripts/books.js"></script>
	
  </body>
</html>





