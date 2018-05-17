<?php 
//include 'conn.php';

//$_SESSION['user_x']="rajatverma8960@gmail.com";
//$user_x = $_SESSION['user_x'];
$img;
$sql_img = "SELECT picture FROM users WHERE email='$user_x'";
   $result = mysqli_query($conn, $sql_img);
   if (mysqli_num_rows($result) > 0)
   {
    while($row = mysqli_fetch_assoc($result))
		{
        //echo "first_name: " . $row["first_name"]. " - lastName: " . ;
		$img=$row["picture"];
		}
	}
	else 
	{
		$sql_img = "SELECT picture FROM gmailusers WHERE email='$user_x'";
		$result = mysqli_query($conn, $sql_img);
		if (mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
			//echo "first_name: " . $row["first_name"]. " - lastName: " . ;
			$img=$row["picture"];
			}
			
		}
	}
 ?>