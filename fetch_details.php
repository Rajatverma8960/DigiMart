<?php 
include 'conn.php';
$user_x = $_SESSION['user_x'];
$f_name;
$l_name;
$E_mail;


if(@$_GET['gmail']=='yes')
{
	//echo "from google";
	$sql = "SELECT * FROM gmailusers WHERE email='$user_x'";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
				//echo "first_name: " . $row["first_name"]. " - lastName: " . ;
				$f_name=$row["first_name"];
				$l_name=$row["last_name"];
				$E_mail=$row["email"];
			}
		}
}
else
{
	//echo "from facrebook";
	$sql = "SELECT * FROM users WHERE email='$user_x'";
	   $result = mysqli_query($conn, $sql);
	   if (mysqli_num_rows($result) > 0)
	   {
		while($row = mysqli_fetch_assoc($result))
			{
			//echo "first_name: " . $row["first_name"]. " - lastName: " . ;
			$f_name=$row["first_name"];
			$l_name=$row["last_name"];
			$E_mail=$row["email"];
			}
		}
	
}

 ?>