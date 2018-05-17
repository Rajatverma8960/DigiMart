<?php include 'conn.php';?>
<?php
session_start();
//print_r($_POST);
$user_x = $_SESSION['user_x'];
$pro_id=$_POST['pro_id'];
$message=$_POST['message'];
$sql="UPDATE `message_module` SET `status`='1' WHERE prod_id='$pro_id' AND message='$message'";
if ($conn->query($sql) === TRUE) 
{
    echo "Message Marked As Read";
}

?>