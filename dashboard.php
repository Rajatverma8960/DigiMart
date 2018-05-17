<?php include 'header.php'; 
include 'select_user_or_cust.php';
?>
<?php include 'dashboardFetch.php';
if(isset($_GET['err']))
{
	echo "<script>alert('Product Id is already in use.');</script>";
}
if(isset($_GET['success']))
{
	echo "<script>alert('Product Successfully Uploaded.');</script>";
}
?>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<style>
.note {
    font-size: 12px;
    color: red;
    padding: 5px;
}
</style>
</head>
<body>
<div class="container">

<div class="col-md-12" style="background-color: #fff;">
<div class="col-md-6" style="margin-top:30px;margin-bottom:15px;border:0px solid #ccc;"> 
		<div class="form-group">
		<h4 style="margin:0px;">Profile Information:</h4>
		<img src="<?php echo $img; ?>" class="img-rounded" style="margin:30px;box-shadow: 10px 10px 5px #888888;" alt="Profile Image" width="200" height="200"> 
		</div>

		<div class="form-group">
				  <label class="control-label" for="name">Name:</label>
					<input type="text" id="name" readonly="readonly" style="border:none;" name="name" value="<?php echo $name;?>">
				  
			 </div>
			 
		<div class="form-group">
			  <label class="control-label" for="email">Email Address:</label>
			  
				<input type="text" id="email" name="email" readonly="readonly" style="border:none;width:70%;" value="<?php echo $email;?>">
		
		</div>
		
		<div class="form-group">
			  <label class="control-label" for="country">Country:</label>
			  
				<input type="text" id="country" name="country" readonly="readonly" style="border:none;" value="<?php echo $country;?>">
		
		</div>
		
		<div class="form-group">
			  <label class="control-label" for="contact">Contact:</label>
			  
				<input type="text"  id="contact" name="contact" readonly="readonly" style="border:none;" value="<?php echo $contact;?>">
		
		</div>
		
		<div class="form-group">
			  <label class="control-label" for="experience">Experience:</label>
			  
				<input type="text" id="experience" name="experience" readonly="readonly" style="border:none;" value="<?php echo $experience;?>">
		
		</div>
		
		<div class="form-group">
			  <label class="control-label" for="about">About:</label>
			 <textarea class="form-control" style="margin-top:10px;" rows = "8" ><?php echo $about;?></textarea>
	
		</div><br>
		
</div>
	
	<div class="col-md-6" style="margin-top:30px;margin-bottom:15px;border:0px solid #ccc;">
		<div class="col-md-12">
		<h4 style="margin:0px;">Selected Category:</h4>
		<div class="note">*Note: Click on category to upload related files</div><br>
			<?php
				if (@mysqli_num_rows($result_x) > 0)
				   {
					while($row = mysqli_fetch_assoc($result_x))
						{
						//echo "first_name: " . $row["first_name"]. " - lastName: " . ;
						$x=$row["sub_cat_id"];
						$sq="Select * from sub_category_table where sub_cat_id='$x'";
						$resu = mysqli_query($conn, $sq);
						$sub_id= mysqli_fetch_assoc($resu);
						$x=$sub_id['sub_cat_id'];
					
						?>
						<a href="<?php echo 'index_uploads.php?sub_cat='.$x;?>">
						<button class="btn btn-success" style="margin:10px;box-shadow: 10px 10px 5px #ccc;">
						<?php echo $sub_id['sub_cat_name'];?>
						</button>
						</a>
						<?php
						}
					}
			?>
			<hr>
			<h4 style="margin:0px;">More Info. On Selected Category:</h4><br>
			<?php
			$sql = "SELECT * FROM user_cat_disp WHERE user_id='$user_x'";
			   $result = mysqli_query($conn, $sql);
			   if (@mysqli_num_rows($result) > 0)
			   {
				while($row = mysqli_fetch_assoc($result))
					{
					//echo "first_name: " . $row["first_name"]. " - lastName: " . ;
					$cat_name = $row["cat_name"];
					$info_x=$row["disp"];
					?>
					<div class="form-group">
					 <button class="btn " style="margin:10px;"><?php echo $cat_name;?></button><br>
					<div style="color:#777;padding:10px;"><?php echo $info_x;?></div>
					</div>
					<?php
					}
				}
			?>
		</div>
		<div class="col-md-12">
			<hr>
			<center>
			<a href="gallery.php">
			<button class="btn btn-primary" style="width:50%;margin:15px 0px;display:block;">View Gallery</button>
			</a>
			</center>
			
			<center>
			<a href="auction.php">
			<button class="btn btn-primary" style="width:50%;margin:15px 0px;;display:block;">Auction Product</button>
			</a>
			</center>
			
			<center>
			<a href="upload_product.php">
			<button class="btn btn-primary" style="width:50%;margin:15px 0px;;display:block;">Sell Product</button>
			</a>
			</center>
		</div>
	</div>
</div>
</div>

</body>

<?php include 'footer.php';?>