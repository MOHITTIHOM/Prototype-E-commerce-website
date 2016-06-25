<?php
	
	if(loggedin()){
	$query="SELECT * FROM `users` WHERE `id`=".$_SESSION['user_id'];
	
	$query2="SELECT `name`,`price` FROM  `product` WHERE prod_id IN(SELECT `prod_id` FROM `buyer` WHERE `id`=".$_SESSION['user_id'].")";
		if($query_run2=mysql_query($query2)){
			
			$count2=mysql_num_rows($query_run2);
			//echo $count2;
			if($count2==0){
			header('Location: main.php');
			}
		
		
	
	
	
	else if($query_run=mysql_query($query)){
		echo '<h1 class="big"> Your Order Has been Placed Successfully </h1>';
	
		$count=mysql_num_rows($query_run);
		for($i=0;$i<$count;$i+=1){
			$row=mysql_fetch_row($query_run);
			$user_name=$row[1];
			echo '<p class="text">Hi '.$row[3].' '.$row[4].'<br>
			Your orders have been dispatched to '.$row[5].'.
			<br> A Confirmation email has been sent to '.$row[6].'
			<br> Thanks for choosing us..</p>';
		}
		$query2="SELECT `name`,`price` FROM  `product` WHERE prod_id IN(SELECT `prod_id` FROM `buyer` WHERE `id`=".$_SESSION['user_id'].")";
		if($query_run2=mysql_query($query2)){
			$count2=mysql_num_rows($query_run2);
			for($j=0;$j<$count2;$j+=1){
				$row=mysql_fetch_row($query_run2);
				echo '<p>'.$row[0].' '.$row[1].' </p>';
			}
		$query3="SELECT sum(`price`) FROM  `product` WHERE prod_id IN(SELECT `prod_id` FROM `buyer` WHERE `id`=".$_SESSION['user_id'].")";
		if($query_run3=mysql_query($query3)){
			$row=mysql_fetch_row($query_run3);
				echo '<p class="big">Rs. '.$row[0].' </p>';
				echo '<p class="text">Delivery Details</p>';
				$query4="select count(`emp_id`) FROM `service`";
				if($query_run4=mysql_query($query4)){
					$row=mysql_fetch_row($query_run4);
					$total=$row[0];
					$num=rand(1,$total);
					$query="SELECT * FROM `service` WHERE `emp_id`=".$num;
					if($query_run=mysql_query($query)){
						$row=mysql_fetch_row($query_run);
						$emp_id=$row[0];
						$emp_name=$row[1];
						
						echo '<p>The order will be delivered by '.$row[1].'<br>'.$row[2].'<br>'.$row[3].' </p>';		
						$user_id=$_SESSION['user_id'];
						$query="INSERT INTO `delivery` VALUES('','".$emp_id."','".$emp_name."','".$user_name."','".$total."')";
						if($query_run=mysql_query($query)){
							$query="DELETE FROM `buyer` WHERE `id`=".$_SESSION['user_id'];
							if($query_run=mysql_query($query)){
								
							}
						}else{
							//echo 'lol';
						}
					}
				}
		}
		}else{
			echo 'lol';
		}
		
		
		
	}
		}
	}
?>


