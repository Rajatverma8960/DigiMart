
<?php 
include 'conn.php';
//session_start();
//$_SESSION['user_x']="rajatroxx480@gmail.com";
$user_x = $_SESSION['user_x'];
include 'fetch_user_img.php';
$name;
$email;
$country;
$contact;
$experience;
$about;

   $sql = "SELECT * FROM user_details WHERE email_id='$user_x'";
   $result = mysqli_query($conn, $sql);
   if (mysqli_num_rows($result) > 0)
   {
	   //echo "xxxxxx";
    while($row = mysqli_fetch_assoc($result))
		{
        //echo "first_name: " . $row["first_name"]. " - lastName: " . ;
		$name = $row["fname"]." ".$row["lname"];
		$email=$row["email_id"];
	    $country = $row["country"];
		$contact= $row["contact"];
		$experience=$row["experience"];
		$about=$row["description"];
		}
	}
	else 
	{
		//echo "yyyyyyyyyyy";
		$sql = "SELECT * FROM gmailuser WHERE email_id='$user_x'";
		   $result = mysqli_query($conn, $sql);
		   if (@mysqli_num_rows($result) > 0)
		   {
			while($row = mysqli_fetch_assoc($result))
				{
				//echo "first_name: " . $row["fname"]. " - lastName: " .$row["lname"] ;
				echo $name = $row["first_name"].$row["last_name"];
				echo $email=$row["email_id"];
				echo $country = $row["country"];
				$contact= $row["contact"];
				$experience=$row["experience"];
				$about=$row["description"];
				}
			}
	}
	
	$sql_sub_cat = "SELECT * FROM user_sub_cat WHERE user_id='$user_x'";
	$result_x = mysqli_query($conn, $sql_sub_cat);


	
 ?>