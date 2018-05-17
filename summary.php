<?php
include 'header.php';
include 'conn.php';
@$user = $_SESSION['user_x'];
$id = $_POST['prod_id'];
$name;
$format;
$soft;
$cost;
$owner;
$sql = "SELECT * FROM product_upload WHERE prod_id='$id'";
			   $result = mysqli_query($conn, $sql);
			   if (@mysqli_num_rows($result) > 0)
			   {
				while($row = mysqli_fetch_assoc($result))
					{
						$name=$row['prod_name'];
						$format=$row['prod_format'];
						$soft=$row['soft'];
						$cost=$row['cost'];
						$link=$row['product'];
						$short=$row['short_disp'];
						$long=$row['long_disp'];
						//_--------------------
						$sqlx = "SELECT * FROM product_id_list WHERE prod_id='$id'";
						   $resultx = mysqli_query($conn, $sqlx);
						   if (@mysqli_num_rows($resultx) > 0)
						   {
							while($rowx = mysqli_fetch_assoc($resultx))
								{
									$owner=$rowx['owner_id'];
								}
						   }
					}
			   }
			   

?>
<style>
label {
    padding-left: 13px;
    border: none;
    margin: 8px 0px;
}
div#pay_box {
    font-family: serif;
    font-size: 22px;
    background-color: rgba(255, 166, 56, 0.55);
    margin-top: 29px;
    padding: 34px;
    border-radius: 7px;
    /* margin-left: 10px; */
}
.txt {
    color: #967d74;
    padding-left: 20px;
}
div#cust_req {
    background-color: rgba(139, 195, 74, 0.34);
    padding: 4%;
    border-radius: 10px;
	margin-top: 10px;
}
#cust_req
{
	display:none;
}
</style>
<script>

$(document).ready(function(){
    $("#cust_reqxxx").click(function(){
		var msg= $("#msg").val();
		var snder=$("#snder").val();
		var prod_id=$("#pro_id").val();
		var reciever=$("#reciever").val();
		
        $.post("customize_request.php",
        {
          sender: snder,
          reciever: reciever,
		  product_id: prod_id,
		  message: msg
        },
        function(data,status){
            alert("\nCustomization Request Status: " + status);
        });
		$("#cust_req").hide();
    });
	$("#myBtn").click(function(){
		$("#cust_req").show();	
    });
	
});

</script>
<input type="hidden" id="reciever" value="<?php echo $owner;?>">
<input type="hidden" id="snder" value="<?php echo $user;?>">
<input type="hidden" id="pro_id" value="<?php echo $id;?>">
<div class="container">
<div class="col-sm-12">
	<div class="col-md-4"style="margin-top: 29px;">
	<img src="<?php echo $link;?>" width="100%" class="img-thumbnail">
	</div>
	<div class="col-md-4" style="margin-top: 30px;background-color: rgba(204, 204, 204, 0.24);border-radius: 7px;">
	<center><label style="font-style: italic;color: #d06418;font-size: 20px;">Product Details</label></center>
	<label>Product ID:</label><label ><?php echo $id;?></label><br>
	<label>Product Name:</label><label><?php echo $name;?></label><br>
	<label>Product Format:</label><label><?php echo $format; ?></label><br>
	<label>Software Used:</label><label><?php echo $soft;?></label><br>
	<label>Owner:</label><label><?php echo $owner;?></label><br>
	</div>
	<div class="col-md-4" id="pay_box">
	<span><?php echo "Total Cost : Rs ".$cost;?></span><br><hr>
	<a href="<?php echo "pre_payment.php?qwner=".$owner."&link=".$link."&pro_id=".$id."&prod_name=".$name."&format=".$format."&soft=".$soft."&cost=".$cost?>">
	<button type="button" class="btn btn-info btn-lg" >proceed to payment</button>
	</a><br><hr>

		  <button type="button" class="btn btn-info btn-lg" id="myBtn">Reqiued Customization</button>
			<br><hr>

	<img src="images/x1.png" width="100%">
	</div>
</div>
<div class="col-md-12" id="cust_req">
<div class="form-group" >
  <label style="font-style: italic;color: #d06418;font-size: 20px;">Customization Request For Product :</label>
  <textarea class="form-control" rows="5" id="msg"></textarea><br>
  <button class="btn btn-success" id="cust_reqxxx">Submit Request</button>
</div>
</div>	
<center><label style="font-style: italic;color: #d06418;font-size: 20px;">More Details</label></center>
<div class="col-md-12">
	<div class="form-group">
	<label>Short Discription:</label>
	<div class="txt" ><?php echo $short;?></div>
	</div>
</div>
<hr>
<div class="col-md-12">
	<div class="form-group">
	<label>Full Discription:</label>
	<div class="txt" ><?php echo $long;?></div>
	</div> 
</div>
</div><!--end Container-->
<?php include 'footer.php';?>