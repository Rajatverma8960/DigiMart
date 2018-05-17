<?php
include 'conn.php';
include 'header.php';	
$user = $_SESSION['user_x'];
//print_r($_GET);
$name=$_GET['pro_name'];
$id=$_GET['pro_id'];
$format=$_GET['pro_format'];
$type=$_GET['pro_type'];
//$prod=$_FILES['upl']; // upload File
$soft=$_GET['pro_soft'];
$cost=$_GET['pro_cost'];
$short=str_replace(array('\'', '"'), '', $_GET['short_disp']); 
$long=str_replace(array('\'', '"'), '', $_GET['long_disp']); 

	$sql="INSERT INTO `auction_product`(`prod_name`, `prod_id`, `prod_format`, `prod_type`, `soft`, `cost`, `short_disp`, `long_disp`) VALUES ('$name','$id','$format','$type','$soft','$cost','$short','$long')";
		if ($conn->query($sql)== TRUE) 
		{
			$sql2="INSERT INTO `auction_id_list`(`owner_id`, `prod_id`) VALUES ('$user','$id')";
			$conn->query($sql2);
			echo "<script>alert('Given product information is saved.')</script>";
		} 
		else
		{
			//echo "error";
			//echo "<script>window.location.href = 'dashboard.php?err=primary'</script>"; 
		}
		

?>


<div class="container" style="margin:80px;">

	<form id="img_upl" class="form-horizontal" action="<?php echo 'upload_auc_product_img.php?pro_id='.$id;?>" method="post" enctype="multipart/form-data">	  
   <div class="form-group">
   <label  class="control-label col-sm-2">Start Date:</label>
   <input class="col-sm-4"type="date" name="start">
   </div>
   <div class="form-group">
   <label  class="control-label col-sm-2">End Date:</label>
   <input class="col-sm-4"type="date" name="end">
   </div>
	<div class="form-group">
    <label class="control-label col-sm-2" >Upload File:</label>
    <div class="col-sm-4"> 
	<input type="file" name="upl" multiple />
	<input type="submit" name="submit_x" value="upload">
    </div>
	</div>
</form>
</div>
<?php include 'footer.php';
?>