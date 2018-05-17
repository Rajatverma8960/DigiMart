<?php
include 'header.php';
include 'conn.php';
$user = $_SESSION['user_x'];

$sql = "SELECT * FROM user_sub_cat WHERE user_id='$user'";
		   $result = mysqli_query($conn, $sql);
		   if (@mysqli_num_rows($result) > 0)
		   {
			while($row = mysqli_fetch_assoc($result))
				{
				$sub_id = $row["sub_cat_id"];
				$sqlx = "SELECT * FROM sub_category_table WHERE sub_cat_id='$sub_id'";
				$resultx = mysqli_query($conn, $sqlx);
					if(mysqli_num_rows($resultx)>0)
					{
						while($row_x = mysqli_fetch_assoc($resultx))
						{
							echo "<button class='btn-info'>".$row_x['sub_cat_name']."</button><br>";
							$sql1 = "SELECT * FROM user_uploads WHERE user_id='$user' && sub_cat_id='$sub_id'";
							$result1 = mysqli_query($conn, $sql1);
							if (@mysqli_num_rows($result1) > 0)
							   {
								   while($row1 = mysqli_fetch_assoc($result1))
									{
										if($row1['type']=='link')
										{
										?>
										<a href="<?php echo $row1['link'];?>">
										<?php echo $row1['link']."<br>";?>
										</a><?php
										}
										else if($row1['type']=='image')
										{?>
										<img src="<?php echo $row1['link'];?>" width="500"><br>
										<?php
										}
										else if($row1['type']=='video')
										{
										}
										else
										{
										?>
										<a href="<?php echo $row1['link'];?>" download>Download File</a><br>
										<?php	
										}
									}
							   }
							
						}
					}
				}
			}
			

?>