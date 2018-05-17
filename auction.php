<?php include 'header.php';
?>
<script>
function myFunction() 
{
    document.getElementById("img_upl").submit();
}
</script>
<div class="container" style="margin-top:30px;">
<form class="form-horizontal" action="upload_auc_product_functionality.php" method="get">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Product Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="pro_name" placeholder="Enter name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Product Id:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="pro_id" placeholder="Enter product Id">
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Product Format:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="pro_format" placeholder="Ex: Jpg, Pdf, Psd, MB">
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Product Type:</label>
    <div class="col-sm-10"> 
      <select class="form-control" name="pro_type">
        <option>Image</option>
        <option>File</option>
        <option>Video</option>
      </select>
    </div>
  </div>
  	
    <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Software Used:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="pro_soft" placeholder="Ex: Photoshop, Maya, 3D Max, Unity, Excel, MS-Office etc">
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Cost of Product:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="pro_cost" placeholder="Ex:35000/- (INR)">
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Short Discription:</label>
    <div class="col-sm-10"> 
      <textarea class="form-control" name="short_disp" placeholder="Short Discription"></textarea>
    </div>
  </div>
      <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Long Discription:</label>
    <div class="col-sm-10"> 
      <textarea class="form-control" name="long_disp" placeholder="Long Discription"></textarea>
    </div>
  </div>
	
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
</div>
<?php include 'footer.php';
?>