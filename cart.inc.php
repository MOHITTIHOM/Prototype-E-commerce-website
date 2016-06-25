<?php
	if(loggedin()){
		if(isset($_GET["success"]) && $_GET["success"]==1){
			echo "<script>alert('You have removed the Item from your cart')</script>";
		}
	$query="SELECT * FROM product,buyer WHERE product.prod_id=buyer.prod_id && buyer.id=".$_SESSION['user_id'];
		if($query_run=mysql_query($query)){
			$count=mysql_num_rows($query_run);
			
			if($count==0){
			echo '<h1 class="big"> There is nothing in the Cart.</h1>';	
			echo '<a href="'.$_SERVER['HTTP_REFERER'].'"><button class="btn btn-success">Go Back</button></a><br><br>';
					
			}else{
			echo '<h1 class="big"> Done Shopping? </h1>';
			
			for($i=1;$i<=$count;$i+=3){
				echo '<div class="row">';
				
				for($j=0;$i+$j<=$count && $j<3;$j+=1){
					$row=mysql_fetch_row($query_run);
					echo '<div class="col-md-4">';
					echo '
							<tbody>
								<tr>	
									<td>	
										<img src="'.$row[5].'" height="300" width="200"><br><br>
										
														</td>
									<td style="padding-top:0px">
										
										<b>Name:</b> '.$row[1].'<br><br>
										<b>Price:</b>Rs '.$row[4].'<br>
										<b>Category:</b> '.$row[2].'<br>
										<b>Brand:</b> '.$row[3].'<br><br>
										
										<a href="remove.php?product_id='.$row[0].'"><button class="bookbutton">Remove</button></a><br><br>
					
									</td>
									
								</tr>
							</tbody>
					</div>';
					
				}
				echo '</div>';
				
			}
		echo '<a href="makepayment.php"><button class="btn btn-success"> Make Payment</button> </a><br><br<br><br>';
		}
		}
	}



?>