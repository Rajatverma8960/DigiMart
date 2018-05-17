<?php include 'conn.php';
include 'header.php';
@session_start();
//print_r($_POST);
@$user_x = $_SESSION['user_x'];
?>

<style>
.btn_snder
{
    border: none;
    border-radius: 3px;
    padding: 10px;
    font-family: initial;
    background-color: #ffc279;
    margin: 20px 0px;
    color: brown;
    box-shadow: 10px 10px 10px -4px;
}
input {
    padding-left: 6px;
    border: none;
    color: brown;
    font-family: initial;
    font-style: unset;
}
textarea.form-control {
    color: #673AB7;
    margin-top: 4px;
    margin: 7px 0px;
    border-color: chartreuse;
}
#container {
    width: 1170px;
    margin: 30px auto;
}
</style>
<div class="container" id="container">
<center><label style="font-style: italic;color: #d06418;font-size: 20px;">Unread Messages</label></center>
<?php

if($user_x)
{	
$sql = "SELECT * FROM message_module WHERE reciever='$user_x' AND status='0'";
$result = mysqli_query($conn, $sql);
					   if (@mysqli_num_rows($result) > 0)
					   {
					   $i=1;
						while($row = mysqli_fetch_assoc($result))
							{
								
								$snder=$row['sender'];
								$prod=$row['prod_id'];
								$msg=$row['message'];
?>
<script>
$(document).ready(function(){
	$('<?php echo "#btn_x".$i;?>').click(function()
	{
		$('<?php echo "#unread_msg".$i;?>').toggle();
	});
	
	$('<?php echo "#reply_x".$i;?>').click(function()
	{
		$('<?php echo "#reply_x".$i;?>').hide();
		$('<?php echo "#reply".$i;?>').show();
		$('<?php echo "#reply_msg".$i;?>').show();
	});
	
	$('<?php echo "#reply".$i;?>').click(function()
	{
		var sender='<?php echo $user_x?>';
		var reciever='<?php echo $snder;?>';
		var msg=$("<?php echo "#reply_msg".$i;?>").val();
		var id= $('<?php echo "#id".$i;?>').val();
		$.post("msg_reply.php",{snder: sender,reciever: reciever, msg: msg, prod_id: id},
		function(data, status)
		{
		alert("Status: " + data);
		});
	});
	
	$('<?php echo "#read".$i;?>').click(function()
	{
		var id= $('<?php echo "#id".$i;?>').val();
		var mgs=$("<?php echo "#msg".$i;?>").val();
		$.post("msg_read.php",{pro_id: id,message: mgs},
		function(data, status)
		{
		alert("Status: " + data);
		});
	});
});
</script>
								<button class="btn_snder" id="<?php echo "btn_x".$i;?>"><?php echo "Sender: ".$snder;?></button><br>
								<div id="<?php echo "unread_msg".$i;?>" style="display:none;">
								  <div class="form-group" >
									<label>Regarding Product Id: </label>
									<input id="<?php echo "id".$i;?>" value="<?php echo $prod;?>"><br>
									<label>Message:</label>
									<textarea class="form-control" rows="5" id="<?php echo "msg".$i;?>"><?php echo $msg;?></textarea>
									<textarea class="form-control" rows="5" id="<?php echo "reply_msg".$i;?>" placeholder="Give Your Reply Message" style="display:none;"></textarea>
									<button class="btn btn-success" id="<?php echo "reply_x".$i;?>">Want to Reply</button>
									<button class="btn btn-success" style="display:none;"id="<?php echo "reply".$i;?>">Reply</button>
									<button class="btn btn-info" id="<?php echo "read".$i;?>">Mark as Read</button>
								  </div>
								</div>
								
<?php						
							$i++;
							}
					   }
}
else
{
	header('location:index.php');
}
?>

<hr>
<center><label style="font-style: italic;color: #d06418;font-size: 20px;">Seen Messages</label></center>
<?php
if($user_x)
{	
$sql = "SELECT * FROM message_module WHERE reciever='$user_x' AND status='1'";
$result = mysqli_query($conn, $sql);
					   if (@mysqli_num_rows($result) > 0)
					   {
					   $i=1;
						while($row = mysqli_fetch_assoc($result))
							{
								
								$snder=$row['sender'];
								$prodx=$row['prod_id'];
								$msgx=$row['message'];
?>
<script>
$(document).ready(function(){
	$('<?php echo "#Seen_btn_x".$i;?>').click(function()
	{
		$('<?php echo "#Seen_unread_msg".$i;?>').toggle();
	});
});
</script>
<button class="btn_snder" id="<?php echo "Seen_btn_x".$i;?>"><?php echo "Sender: ".$snder;?></button><br>
								<div id="<?php echo "Seen_unread_msg".$i;?>" style="display:none;">
								  <div class="form-group" >
									<label>Regarding Product Id: </label>
									<input id="<?php echo "Seen_id".$i;?>" value="<?php echo $prodx;?>"><br>
									<label>Message:</label>
									<textarea class="form-control" rows="5"><?php echo $msgx;?></textarea>
								  </div>
								</div>
<?php						
							$i++;
							}
					   }
}
else
{
	header('location:index.php');
}
?>

</div>

<?php
include 'footer.php';
?>