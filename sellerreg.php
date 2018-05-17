<?php include 'conn.php';?>
<?php
session_start();
print_r($_POST);
$user_x = $_SESSION['user_x'];
if(isset($_POST['check_list1']))
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$dob = $_POST['dob'];
	$my_date = date('Y-m-d', strtotime($dob));
	$country = $_POST['country'];
	$contact = $_POST['contact'];
	$experience = $_POST['experience'];
	$about = $_POST['about'];
	// attempt insert query execution
	$sql = "INSERT INTO user_details(fname,lname,dob,country,email_id,contact,experience,description,user_type) VALUES ('$fname', '$lname', '$my_date', '$country', '$email', '$contact', '$experience', '$about','1')";
	$conn->query($sql);
	 
	
	foreach($_POST['check_list1'] as $arr )
	{
		$sql1 = "INSERT INTO user_sub_cat VALUES ('$user_x','$arr')";
		$conn->query($sql1);
	}
	if($_POST['111']!="")
	{
		$cat_info=$_POST['111'];
		$sql_x="INSERT INTO user_cat_disp VALUES ('$user_x','Graphic Design','$cat_info')";
		$conn->query($sql_x);
	}
	if($_POST['222']!="")
	{
		$cat_info=$_POST['222'];
		$sql_x="INSERT INTO user_cat_disp VALUES ('$user_x','Digital marketing','$cat_info')";
		$conn->query($sql_x);
	}
	if($_POST['333']!="")
	{
		$cat_info=$_POST['333'];
		$sql_x="INSERT INTO user_cat_disp VALUES ('$user_x','Writing & Tranlation','$cat_info')";
		$conn->query($sql_x);
	}
	if($_POST['444']!="")
	{
		$cat_info=$_POST['444'];
		$sql_x="INSERT INTO user_cat_disp VALUES ('$user_x','Video & Animation','$cat_info')";
		$conn->query($sql_x);
	}
	if($_POST['555']!="")
	{
		$cat_info=$_POST['555'];
		$sql_x="INSERT INTO user_cat_disp VALUES ('$user_x','Programming & Tech','$cat_info')";
		$conn->query($sql_x);
	}
	if($_POST['666']!="")
	{
		$cat_info=$_POST['666'];
		$sql_x="INSERT INTO user_cat_disp VALUES ('$user_x','Bussiness','$cat_info')";
		$conn->query($sql_x);
	}
	header("Location:dashboard.php");
}
else
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$dob = $_POST['dob'];
	$my_date = date('Y-m-d', strtotime($dob));
	$country = $_POST['country'];
	$contact = $_POST['contact'];
	$experience = $_POST['experience'];
	$about = $_POST['about'];


	$sql = "INSERT INTO user_details (fname,lname,dob,country,email_id,contact,experience,description,user_type) VALUES ('$fname', '$lname', '$my_date', '$country', '$email', '$contact', '$experience', '$about','0')";

	if ($conn->query($sql) === TRUE) 
	{
		header("Location:index.php");
	}
	else 
	{
		header("Location:index.php");
	}
}

?>