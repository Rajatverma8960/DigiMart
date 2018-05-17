<?php
session_start();
$_SESSION['user']="rv";
$user=$_SESSION['user'];
@include_once "conn.php";
print_r($_POST);
@$arr= $_POST['check_list1'];
//echo "count".count($arr);
foreach($arr as $arr_val)
{
	$sql = "INSERT INTO user_sub_cat (user_id,sub_cat_id)
	VALUES ('$user','$arr_val')";

	if ($conn->query($sql) === TRUE)
		{
		   //echo "New record created successfully";
		} 
	else 
		{
		   //echo "Error: " . $sql . "<br>" . $conn->error;
		}	
}


?>