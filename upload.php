<?php
include 'conn.php';
session_start();
$sub_cat=$_GET['sub_cat'];
$Type=$_GET['type'];
$user = $_SESSION['user_x'];

$path="uploads/".$user;
//print_r($_POST);
// A list of permitted file extensions
$allowed = array('png', 'jpg', 'gif','zip','avi','mov','flv','wvm','mp4');

if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){
mkdir($path);
	$extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);

	/*if(!in_array(strtolower($extension), $allowed)){
		echo '{"status":"error"}';
		exit;
	}*/

	//if(move_uploaded_file($_FILES['upl']['tmp_name'], 'uploads/'.$_FILES['upl']['name'])){
	if(move_uploaded_file($_FILES['upl']['tmp_name'], $path.'/'.$_FILES['upl']['name']))
	{
		$path= $path.'/'.$_FILES['upl']['name'];
		$sql="INSERT INTO user_uploads VALUES ('$user','$sub_cat','$path','$Type')";
		$conn->query($sql);
		echo '{"status":"success"}';
		
		exit;
	}
}
else
{
	if(isset($_POST['link']))
	{
		$arr=$_POST['link'];
		foreach($arr as $ar)
		{
			$path= $ar;
			$sql="INSERT INTO user_uploads VALUES ('$user','$sub_cat','$path','$Type')";
			$conn->query($sql);
			header("Location:index_uploads.php?sub_cat=$sub_cat");
		}
	}
}

echo '{"status":"error"}';
exit;