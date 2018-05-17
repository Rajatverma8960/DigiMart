<?php
include 'header.php';
include 'conn.php';

$user = $_SESSION['user_x'];
if(!$user)
{
	echo "<script>window.location.href='login.php'</script>";
}
else
{
$id = $_GET['pro_id'];
$name;
$format;
$soft;
$cost;
$owner;
$sql = "SELECT * FROM user_details WHERE email_id='$user'";
			   $result = mysqli_query($conn, $sql);
			   if (@mysqli_num_rows($result) > 0)
			   {
				while($row = mysqli_fetch_assoc($result))
					{
						$fname=$row['fname'];
						$lname=$row['lname'];
						$dob=  $row['dob'];
						$country=$row['country'];
						$contact=$row['contact'];
						$email=$row['email_id'];
					}
			   }
			
?>
<script>
$(document).ready(function(){
	$("#confirm").click(function(){
		$("#confirm").hide();
		$("#payment").show();
	});
});
</script>
<style>
input#x 
{
    border: none;
    width: 70%;
    padding-left: 7px;
    font-size: 17px;
}
#payment
{
	display:none;
}
</style>
<div class="container">
<div class="col-md-12" style="padding-top: 25px;">
	<div class="col-md-6">
	<center><h4>Your Details</h4></center><br>
		<form >
		  <div class="form-group">
			<label for="email">First Name:</label>
			<input type="text" class="form-control" readonly="readonly" value="<?php echo $fname;?>">
		  </div>
		  
		  <div class="form-group">
			<label for="pwd">Last Name:</label>
			<input type="text" class="form-control" readonly="readonly"  value="<?php echo $lname;?>">
		  </div>
		
		<div class="form-group">
			<label for="pwd">Date Of Birth:</label>
			<input type="text" class="form-control" readonly="readonly"  value="<?php echo $dob;?>">
		  </div>
		  
		<div class="form-group">
			<label for="pwd">Country:</label>
			<input type="text" class="form-control" readonly="readonly"  value="<?php echo $country;?>">
		  </div>
		<div class="form-group">
			<label for="pwd">Contact:</label>
			<input type="text" class="form-control" readonly="readonly"  value="<?php echo $contact;?>">
		  </div>
		  
		<div class="form-group" >
			<label for="pwd">Email: <span style="font-size: 10px;color: #da7777;">NOTE: *you can edit your Email-Id</span></label>
			<input type="text" class="form-control" value="<?php echo $email;?>">
		  </div>
		  <!--<button type="submit" class="btn btn-default">Submit</button>-->
		</form>
	</div>
	<div class="col-md-6">
	<center><h4>Product Details</h4></center><br>
	<img class="img-thumbnail" src="<?php echo $_GET['link'];?>" width="100%"><br><br>
	<label for="pwd" style="padding-left:20px;">Product Id:</label>
	<input type="text" id="x" value="<?php echo $_GET['pro_id'];?>">
	<label for="pwd" style="padding-left:20px;">Product Name:</label>
	<input type="text" id="x" value="<?php echo $_GET['prod_name'];?>">
	<label for="pwd" style="padding-left:20px;">Format:</label>
	<input type="text" id="x" value="<?php echo $_GET['format'];?>">
	<label for="pwd" style="padding-left:20px;">Software:</label>
	<input type="text" id="x" value="<?php echo $_GET['soft'];?>">
	<label for="pwd" style="padding-left:20px;">Price:</label>
	<input type="text" id="x" value="<?php echo $_GET['cost'];?>">
	</div>
</div>
<div class="col-md-12" id="confirm" style="margin:20px;">
<center>
<button class="btn btn-success btn-lg">Confirm Details</button>
</center>
</div>
<div class="col-md-12" id="payment" style="margin:20px;">
<center><a href="https://www.instamojo.com/@Digi_Lancer/" rel="im-checkout" data-behaviour="link" data-style="light" data-text="Checkout With Instamojo"></a>
<script src="https://js.instamojo.com/v1/button.js"></script></center>
</div>
</div>
<?php	
}
?>