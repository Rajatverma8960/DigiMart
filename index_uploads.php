<?php include 'header.php';?>
<?php 
@$_SESSION['user_x'];
$sub_cat=$_GET['sub_cat'];
?>
		<!-- Google web fonts -->
		<link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />

		<!-- The main CSS file -->
		<link href="assets/css/style.css" rel="stylesheet" />
		<script>	
			$(document).ready(function(){
				$("#add").click(function(){$('#myContainer').append("<input type='text' class='form-control' name='link[]'><br>");});
			});
			
			$(document).ready(function()
			{
			var sub_cat= "<?php echo $_GET['sub_cat']; ?>";	
			
				$("#1").click(function(){ 
				//var value = "upload.php?sub_cat="+sub_cat+"&type="+$("#1").val();
				$("#demo").html($("#1").val());
				$("#button_option").hide();
				$("#link").hide();
				$('#upload').attr('action',"upload.php?sub_cat="+sub_cat+"&type="+$("#1").val());
				$("#upload_img").show();
				$("#back_btn").show();
				})
				
				$("#2").click(function(){ 
				//var value = "upload.php?sub_cat="+sub_cat+"&type="+$("#2").val();
				$("#demo").html($("#2").val());
				$("#button_option").hide();
				$("#link").hide();
				$('#upload').attr('action',"upload.php?sub_cat="+sub_cat+"&type="+$("#2").val());
				$("#upload_img").show();
				$("#back_btn").show();
				})
				
				$("#3").click(function(){ 
				var value = $("#3").val();
				$("#button_option").hide();
				$("#upload_img").hide();
				$("#link").show();
				$("#back_btn").show();
				})
				
				$("#4").click(function(){ 
				//var value = "upload.php?sub_cat="+sub_cat+"&type="+$("#4").val();
				$("#demo").html($("#4").val());
				$("#button_option").hide();
				$("#link").hide();
				$('#upload').attr('action',"upload.php?sub_cat="+sub_cat+"&type="+$("#4").val());
				$("#upload_img").show();
				$("#back_btn").show();
				})
			});
		</script>
		<style>
		#link, #upload_img, #upload_file
		{
			margin-top: 42px;
		}
		#add, #submt
		{
			float: right;
			margin-bottom: 10px !important;
		}
		label 
		{
			display: block;
			max-width: 100%;
			margin-bottom: 5px;
			font-weight: bold;
		}
		#upload_img,#link,#back_btn
		{
			display:none;
		}
		.btn-info
		{
					color: #fff;
					background-color: #5bc0de;
					border-color: #46b8da;
					width: 80%;
					padding: 14px;
					border-radius: 8px;
					margin: 50px 0px;
					border: none;
		}
		</style>
	</head>
	

	<body>
	<div class="container">
		<div class="col-md-12"  id="button_option" style="width:100%;background-color:#ffd;">
	<div class="col-md-3"><button class="btn-info" id="1" value="image" >Images</button></div>
	<div class="col-md-3"><button class="btn-info" id="2" value="video" >Videos</button></div>
	<div class="col-md-3"><button class="btn-info" id="3" value="links" >links</button></div>
	<div class="col-md-3"><button class="btn-info" id="4" value="file" >Files</button></div>
	</div>
	

	<div class="col-md-12" id="upload_img" style="width:100%;background-color:#ffd;">
	<label>Upload <span id="demo"></span>:</label><br><br>
		<form id="upload" method="post" action="" enctype="multipart/form-data">
			<div id="drop">
				Drop Here
				<a>Browse</a>
				<input type="file" name="upl" multiple />
			</div>
			<ul>
				<!-- The file uploads will be shown here -->
			</ul>
		</form>
	</div>
	
	<div class="col-md-12" id="link" style="width:100%;background-color:#ffd";>
	<form class="form-horizontal" id='register' action="<?php echo 'upload.php?sub_cat='.$sub_cat.'&type=link';?>" method='post'>
	    <div class="form-group">
			<label>Enter Link:</label><br><br>
					<input type="text" class="form-control" name="link[]"><br>
					<div id="myContainer"> <!-- All the links are here--></div>
					<div class="col-sm-12"><a class="btn btn-info" id="add" >+ More Links</a><br></div>
					<div class="col-sm-12"><input type="submit" value="Submit" name="submit_x" id="submt" class="btn btn-success"><br></div>
				
		</div>
		</form>
	</div>
	</div><!--END CONTAINER-->
	<center><a href="<?php echo "dashboard.php"?>" id="back_btn"><button class="btn-info" > Back To Dashboard </button></a></center>
	</div>

		

		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="assets/js/jquery.knob.js"></script>

		<!-- jQuery File Upload Dependencies -->
		<script src="assets/js/jquery.ui.widget.js"></script>
		<script src="assets/js/jquery.iframe-transport.js"></script>
		<script src="assets/js/jquery.fileupload.js"></script>
		
		<!-- Our main JS file -->
		<script src="assets/js/script.js"></script>


		<!-- Only used for the demos. Please ignore and remove. 
        <script src="http://cdn.tutorialzine.com/misc/enhance/v1.js" async></script>--> 

	</body>
	<?php include 'footer.php';?>