<?php
include 'conn.php';
$user = $_SESSION['user_x'];

					$sql="SELECT user_type FROM `user_details` WHERE email_id='$user'";
					$result = mysqli_query($conn, $sql);
					   if (@mysqli_num_rows($result) > 0)
					   {
						while($row = mysqli_fetch_assoc($result))
							{
								$status=$row['user_type'];
								if($status==0)
								{
									echo '<script>window.location.href = "index.php";</script>';
								}
							
							}
					   }
?>



  