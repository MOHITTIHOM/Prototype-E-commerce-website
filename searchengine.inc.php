<?php
if(isset($_POST['category']) && isset($_POST['minp']) && isset($_POST['maxp'])){
	$category=$_POST['category'];
	$minp=$_POST['minp'];
	$maxp=$_POST['maxp'];
	if(!empty($category) && !empty($minp) &&!empty($minp)){
		$query="SELECT * FROM `product` WHERE `category`='".$category."' AND (`price` BETWEEN ".$minp." AND ".$maxp.")";
		if($query_run=mysql_query($query)){
							$count=mysql_num_rows($query_run);
							
							if($count==0){
							echo '<h1> Sorry we Couldn\'t find anything.</h1>';	
							echo '<br>please use the following categories books electronics';
							}else{
							echo '<h1> We have the following results.. </h1>';
			
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
														
														<a href="'.$category.'.php?product_id='.$row[0].'">Add to Cart</a><br><br>
									
													</td>
													
												</tr>
											</tbody>
									</div>';
									
								}
							echo '</div>';
				
							}
				
						}
		}else{
			
		}
	}else{ }
}else{ }

?>