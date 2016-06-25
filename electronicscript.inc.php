<?php
	
	$query1 = "SELECT * FROM `product` WHERE `category`='book' OR `category`='Electronic' OR `category`='Electronics' OR`category`='electronics'   OR`category`='electronic'";
		
		
		if($query_run1 = mysql_query($query1)){
		if($count= mysql_num_rows($query_run1)){
		echo '<script>';
		for ($i = 0; $i < $count; $i += 1) {
			if($row = mysql_fetch_row($query_run1)){
			echo ' 
			$("#electronic'.$row[0].'").css("height",window.innerHeight/2);';
			//$("#book'.$row[0].'").css("width",$(window).width());';
			}
		}
		echo '</script>';
		}
		}
	
		
?>
