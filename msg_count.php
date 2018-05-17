<?php include 'conn.php';?>
<?php
@session_start();
//print_r($_POST);
@$user_x = $_SESSION['user_x'];
if($user_x)
{	$result = $conn->query("SELECT COUNT(status) FROM message_module WHERE reciever='$user_x' AND status='0'");
$row = $result->fetch_row();
$count=$row[0];
}
else
{
	$count='0';
}
?>