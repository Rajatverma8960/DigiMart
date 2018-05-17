<?php
session_start();
$user = $_SESSION['user_x'];
$sub_cat=$_GET['sub_cat'];

//$user= "rajatverma8960@gmail.com";
$path="uploads/".$user;
mkdir($path);
mkdir("$path/files");
mkdir("$path/video");
mkdir("$path/images");
// A list of permitted file extensions
$allowed = array('pdf', 'jpg', 'gif','zip','avi','mov','flv','wvm','mp4');

if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){

	$extension = pathinfo($_FILES['upl']['name'], PATHINFO_EXTENSION);

	if(!in_array(strtolower($extension), $allowed)){
		echo '{"status":"error"}';
		exit;
	}

	if(move_uploaded_file($_FILES['upl']['tmp_name'], 'uploads/'.$_FILES['upl']['name']))
	//if(move_uploaded_file($_FILES['upl']['tmp_name'], $path.'/files/'.$_FILES['upl']['name']))
	{
		//$path= '../'.$path.'/files/'.$_FILES['upl']['name'];
		//$sql="INSERT INTO user_uploads VALUES ('$user','$sub_cat','$path')";
		//$conn->query($sql);
		echo '{"status":"success"}';
		exit;
	}
}

echo '{"status":"error"}';
exit;