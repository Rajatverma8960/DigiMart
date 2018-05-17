
<?php
$id=$_GET['pro_id'];
include 'conn.php';
session_start();
$user = $_SESSION['user_x'];
$path="auction_upload/".$user;
@mkdir($path);

if(isset($_POST['submit_x']))
{
	$start=$_POST['start'];
	$end=$_POST['end'];
 $date = date("Y-m-d");
	
	if(move_uploaded_file($_FILES['upl']['tmp_name'], $path.'/'.$_FILES['upl']['name']))
						{
							$path= $path.'/'.$_FILES['upl']['name'];
							$sqlx="UPDATE `auction_product` SET `product`='$path',`upload_date`='$date',`start_date`='$start',`end_date`='$end' WHERE `prod_id`='$id'";
							$conn->query($sqlx);
							echo '{"status":"success"}';
							echo "<script>window.location.href = 'dashboard.php?success=primary'</script>"; 
							exit;
						}
}

?>