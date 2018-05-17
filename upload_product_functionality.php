<?php
include 'conn.php';
include 'header.php';	
$user = $_SESSION['user_x'];
//print_r($_GET);
$name=$_GET['pro_name'];
$id=$_GET['pro_id'];
$format=$_GET['pro_format'];
$type=$_GET['pro_type'];
//$prod=$_FILES['upl']; // upload File
$soft=$_GET['pro_soft'];
$cost=$_GET['pro_cost'];
$short=str_replace(array('\'', '"'), '', $_GET['short_disp']); 
$long=str_replace(array('\'', '"'), '', $_GET['long_disp']); 

	$sql="INSERT INTO `product_upload`(`prod_name`, `prod_id`, `prod_format`, `prod_type`, `soft`, `cost`, `short_disp`, `long_disp`) VALUES ('$name','$id','$format','$type','$soft','$cost','$short','$long')";
		if ($conn->query($sql)== TRUE) 
		{
			$sql2="INSERT INTO `product_id_list`(`owner_id`, `prod_id`) VALUES ('$user','$id')";
			$conn->query($sql2);
			
			echo "<script>alert('Given product information is saved.')</script>";
		} 
		else
		{
			//echo "error";
			//echo "<script>window.location.href = 'dashboard.php?err=primary'</script>"; 
		}
		

?>
<style>
#c1,#c2,#c3,#c4,#c5,#c6
{
	display:none;
}
</style>
<script>
$( document ).ready(function() {
	
  $("#1").click(function(){
	  $("#c1").show();
	  $("#c2").hide();
	  $("#c3").hide();
	  $("#c4").hide();
	  $("#c5").hide();
	  $("#c6").hide();
  });
  
    $("#2").click(function(){
	  $("#c1").hide();
	  $("#c2").show();
	  $("#c3").hide();
	  $("#c4").hide();
	  $("#c5").hide();
	  $("#c6").hide();
  });
  
    $("#3").click(function(){
	  $("#c1").hide();
	  $("#c2").hide();
	  $("#c3").show();
	  $("#c4").hide();
	  $("#c5").hide();
	  $("#c6").hide();
  });
  
    $("#4").click(function(){
	  $("#c1").hide();
	  $("#c2").hide();
	  $("#c3").hide();
	  $("#c4").show();
	  $("#c5").hide();
	  $("#c6").hide();
  });
  
    $("#5").click(function(){
	  $("#c1").hide();
	  $("#c2").hide();
	  $("#c3").hide();
	  $("#c4").hide();
	  $("#c5").show();
	  $("#c6").hide();
  });
  
    $("#6").click(function(){
	  $("#c1").hide();
	  $("#c2").hide();
	  $("#c3").hide();
	  $("#c4").hide();
	  $("#c5").hide();
	  $("#c6").show();
  });
  
  
});
</script>

<div class="container">
<label>Select Category:</label> 
<div class="col-md-12"  id="button_option" style="width:100%;background-color:#ffd;">
	<div class="col-md-2"><button class="btn btn-info" id="1" value="image" >Graphic Design</button></div>
	<div class="col-md-2"><button class="btn btn-info" id="2" value="video" >Digital marketing</button></div>
	<div class="col-md-2"><button class="btn btn-info" id="3" value="links" >Writing & translation</button></div>
	<div class="col-md-2"><button class="btn btn-info" id="4" value="file" >Video & Animation</button></div>
	<div class="col-md-2"><button class="btn btn-info" id="5" value="links" >Programming & Tech</button></div>
	<div class="col-md-2"><button class="btn btn-info" id="6" value="file" >Bussiness</button></div>
	</div>
	<form id="img_upl" class="form-horizontal" action="<?php echo 'upload_product_img.php?pro_id='.$id;?>" method="post" enctype="multipart/form-data">	  
		<div class="form-group" id="c1">
      <label for="sel1">Graphic Design (select one):</label>
      <select class="form-control" name="select_x" id="sel1">
        <option value="1111">Logo Design</option>
        <option value="1112">Business Card</option>
        <option value="1113">Illustration</option>
        <option value="1114">Cartoon</option>
		<option value="1115">Book Cover</option>
        <option value="1116">Photoshop</option>
        <option value="1117">2D & 3D models</option>

      </select>
	  </div>

	  <div class="form-group" id="c2">
      <label for="sel1">Digital marketing(select one):</label>
      <select class="form-control" id="sel1">
        <option value="2221">Email Marketing</option>
        <option value="2222">SEO</option>
        <option value="2223">Content Making</option>
        <option value="2224">Mobile Advertisement</option>
      </select>
	  </div>
	  
	  	  <div class="form-group" id="c3">
      <label for="sel1">Writing & translation (select one):</label>
      <select class="form-control" id="sel1">
        <option value="3331">Proof Reading & Editing</option>
        <option value="3332">Translation</option>
        <option value="3333">Resume & Cover Letter</option>
        <option value="3334">Creative Writing</option>
		<option value="3335">Article & BlogPost</option>
      </select>
	  </div>
	  
	  	  <div class="form-group" id="c4">
      <label for="sel1">Video & Animation (select one):</label>
      <select class="form-control" id="sel1">
        <option value="4441">Promotional & Brand video</option>
        <option value="4442">Animation Character & Modeling</option>
        <option value="4443">Spokeperson & Testimonials</option>
      </select>
	  </div>
	
	<div class="form-group" id="c5">
      <label for="sel1">Programming & Tech (select one):</label>
      <select class="form-control" id="sel1">
        <option value="5551">Wordpress</option>
        <option value="5552">Website builder</option>
        <option value="5553">E-commerce</option>
        <option value="5554">User Testing</option>
		<option value="5555">QA(Quality Assurance)</option>
      </select>
	  </div>
	  
	  <div class="form-group" id="c6">
      <label for="sel1">Bussiness (select one):</label>
      <select class="form-control" id="sel1">
        <option value="6661">Career Advice</option>
        <option value="6662">Presentation</option>
        <option value="6663">Market Research</option>
        <option value="6664">Business Tips</option>
		<option value="6665">Legal Consultancy</option>
		<option value="6666">Finance</option>
      </select>
	  </div>
	

   <div class="form-group">
    <label class="control-label col-sm-2" >Upload Product File:</label>
    <div class="col-sm-10"> 
	<input type="file" name="upl" multiple />
	<input type="submit" name="submit_x" value="upload">
    </div>
	</div>
</form>
</div>
<?php include 'footer.php';
?>