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
    });
	
	
});
</script>

<div class="container">
<div class="col-sm-12">
	<div class="col-md-4">
	<img src="<?php echo $link;?>" width="100%">
	</div>
	<div class="col-md-4">
	<label>Product ID:</label><input type="text" id="pro_id" value="<?php echo $id;?>" >
	<label>Product Name:</label><input type="text" value="<?php echo $name;?>" >
	<label>Product Format:</label><input type="text" value="<?php echo $format; ?>" >
	<label>Software Used:</label><input type="text" value="<?php echo $soft;?>" >
	<label>Owner:</label><input type="text" value="<?php echo $owner;?>" >
	</div>
	<div class="col-md-4">
	<span><?php echo "Prise: Rs".$cost;?></span>
	<a href="<?php echo "pre_payment.php?qwner=".$owner."&link=".$link."&pro_id=".$id."&prod_name=".$name."&format=".$format."&soft=".$soft."&cost=".$cost?>">
	<button type="button" class="btn btn-info btn-lg" >proceed to payment</button>
	</a>
	<!--MODal-->
	  <h2>Modal Example</h2>
		  <!-- Trigger the modal with a button -->
		  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

		  <!-- Modal -->
		  <div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">
			
			  <!-- Modal content-->
			  <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				  <h4 class="modal-title">Required Customization</h4>
				</div>
				<div class="modal-body">
				  <p>Some text in the modal.</p>
				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-default" data-dismiss="modal">Submit</button>
				</div>
			  </div>
			  
			</div>
		  </div>
	<!--END MODAL-->
	</div>
</div>
	
<div class="col-md-12">
<label>Short Discription:</label>
<textarea rows="5"><?php echo $short;?></textarea>
<label>Long Discription:</label>
<textarea rows="5"><?php echo $long;?></textarea>
  
</div>
