<?php
session_start();
include 'conn.php';
$snder=$_POST['sender'];
$reciever_x=$_POST['reciever'];
$prod_id=$_POST['product_id'];
$msg=str_replace(array('\'', '"'), '', $_POST['message']);
$date=date("Y-m-d");

$sql = "INSERT INTO `message_module`(`sender`, `reciever`, `prod_id`, `message`, `date_x`, `status`) VALUES ('$snder','$reciever_x','$prod_id','$msg','$date','0')";
			   $conn->query($sql);				
?>