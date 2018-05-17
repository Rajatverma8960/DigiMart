
	<?php						
	include 'conn.php';
@$user = $_SESSION['user_x'];

$sql = "(SELECT * FROM `product_upload` ORDER BY `upload_date` DESC )";
		   $result = mysqli_query($conn, $sql);
		   if (@mysqli_num_rows($result) > 0)
		   {
			   while($row = mysqli_fetch_assoc($result))
				{
					 $id = $row['prod_id'];
					 $name = $row['prod_name'];
					 $link = $row['product'];
					 $software = $row['soft'];
					 $price = $row['cost'];
					 ;?>
								<div class="col-md-4 top_brand_left" style="    margin-bottom: 30px;">
									<div class="hover14 column" style="height: 345px;">
										<div class="agile_top_brand_left_grid" style="height: 340px;">
											<div class="agile_top_brand_left_grid_pos">
												<img src="images/offer.png" alt=" " class="img-responsive" />
											</div>
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<div class="img_x" style="height: 175px;" ><a href="products.html"><img src="<?php echo $link;?>" width="280"/></a></div>	
															<p><?php echo $name;?></p>
															<div class="stars">
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star blue-star" aria-hidden="true"></i>
																<i class="fa fa-star gray-star" aria-hidden="true"></i>
															</div>
															<h4><?php echo "Rs ".$price;?></h4>
														</div>
														<form action="summary.php" method="post">
														<input type="hidden" name="prod_id" value="<?php echo $id;?>">
														<center><input class="btn-info" type="submit" name="submit" value="BUY NOW"></center>
														</form>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>

			<?php		}
		   }

?>	