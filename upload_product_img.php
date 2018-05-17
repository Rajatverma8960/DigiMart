
<?php
$id=$_GET['pro_id'];
include 'conn.php';
session_start();
$user = $_SESSION['user_x'];
$path="pro_upload/".$user;
@mkdir($path);
if(isset($_POST['submit_x']))
{
 $sub_cat_id=$_POST['select_x'];
 $date = date("Y-m-d");
	
	if(move_uploaded_file($_FILES['upl']['tmp_name'], $path.'/'.$_FILES['upl']['name']))
						{
							$path= $path.'/'.$_FILES['upl']['name'];
							$sqlx="UPDATE `product_upload` SET `product`='$path',`sub_cat_id`='$sub_cat_id',`upload_date`='$date' WHERE `prod_id`='$id'";
							$conn->query($sqlx);
							echo '{"status":"success"}';
							echo "<script>window.location.href = 'dashboard.php?success=primary'</script>"; 
							exit;
						}
}

?>