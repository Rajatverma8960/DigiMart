<?php include 'conn.php';?>
<?php
session_start();
//print_r($_POST);
$user_x = $_SESSION['user_x'];
$snder=$_POST['snder'];
$reciever=$_POST['reciever'];
$msg=$_POST['msg'];
$date_x = date("Y-m-d");
$prod_id=$_POST['prod_id'];

$sql="INSERT INTO `message_module`(`sender`, `reciever`, `prod_id`, `message`, `date_x`, `status`) VALUES ('$snder','$reciever','$prod_id','$msg','$date_x','0')";
if ($conn->query($sql) === TRUE) 
{
    echo "Message Given";
}

?>