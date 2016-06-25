	
	<?php
	$query1 = "SELECT * FROM `product` WHERE `category`='electronic' OR `category`='Electronic' OR `category`='Electronics' OR`category`='electronics'";
		if($query_run1 = mysql_query($query1)){
		if($count= mysql_num_rows($query_run1)){
		echo '<style>';
		for ($i = 0; $i < $count; $i += 1) {
			if($row = mysql_fetch_row($query_run1)){
			echo '
			
			#electronic'.$row[0].' { 
			background-image:url("'.$row[5].'");
		height:400px;
		width:100%;
		background-size:cover;}
		';
	
			}
		}
		echo '</style>';
		}
		}
	?>
	
	