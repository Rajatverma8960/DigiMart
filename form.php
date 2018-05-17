<?php include 'header.php';
include 'fetch_details.php';?>

<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<script>
$(document).ready(function(){
	$("#cust_x").click(function(){
		var fname=$("#fname").val();
		var lname=$("#lname").val();
		var email=$("#email").val();
		var dob=$("#dob").val();
		var country=$("#country").val();
		var contact=$("#contact").val();
	})
	
});
</script>
</head>
<body>
<div class="container">
<form class="form-horizontal" id='register' action='sellerreg.php'  method='post'>		
	
<div class="form-group">
<fieldset style="align:center;">
<legend>Register</legend>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fname">First name:</label>
        <div class="col-sm-3">
        <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $f_name;?>"></div>
	</div>
	<div class="form-group">
		  <label class="control-label col-sm-2" for="lname">Last name:</label>
		  <div class="col-sm-3">
			<input type="text" class="form-control" id="lname" name="lname" value="<?php echo $l_name;?>"></div>
	</div>
	<div class="form-group">
		  <label class="control-label col-sm-2" for="email">Email Address:</label>
		  <div class="col-sm-3">
			<input type="text" class="form-control" id="email" name="email" value="<?php echo $E_mail;?>"></div>
	</div>
	<div class="form-group">
		  <label class="control-label col-sm-2" for="dob">Date Of Birth*:</label>
		  <div class="col-sm-3">
			<input type="date" class="form-control" id="dob" placeholder="Enter Date of Birth" name="dob"></div>
	</div>
	<div class="form-group">
		  <label class="control-label col-sm-2" for="country">Country*:</label>
		  <div class="col-sm-3">
			<input type="text" class="form-control" id="country" placeholder="Enter your country" name="country"></div>
	</div>
	<div class="form-group">
		  <label class="control-label col-sm-2" for="contact">Contact number*:</label>
		  <div class="col-sm-3">
			<input type="number" class="form-control" id="contact" placeholder="Enter contact number" name="contact"></div>
	</div>
	<div class="form-group">
		  <label class="control-label col-sm-2" for="experience">Experience:</label>
		  <div class="col-sm-3">
			<input type="text" class="form-control" id="experience" placeholder="Enter your experience" name="experience"></div>
	</div>
	<div class="form-group">
		  <label class="control-label col-sm-2" for="about">About your experience:</label>
		  <div class="col-sm-3">
		  <textarea rows = "4" class="form-control" cols = "57" id="about" placeholder="Description" name="about"></textarea></div>
	</div>
	
	<div class="form-group">        
		  <div class="col-sm-offset-2 col-sm-3">
		  <!--<input type="submit" name="submit" value="Register as service provider" class="btn btn-success" >-->
			<button class="btn btn-success" id="cust_x" style="width:200px;" >Become customer</button>
		  </div>
	</div>
</fieldset>
</div>

<?php include 'dropdown.php';?>
</form>
</div>
</body>
<?php include 'footer.php';?>






























