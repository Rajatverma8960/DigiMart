
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
	$(".btn").click(function(){
		$(".list").toggle("slow","swing");
		$(".list1,.list2,.list3,.list4,.list5,.list6,.sub_btn").hide("slow");
		
	});
	
	$(".btn1").click(function(){
	$(".list1").toggle("slow");
	$(".sub_btn").show("slow");
	});
	$(".btn2").click(function(){ $(".list2").toggle("slow"); $(".sub_btn").show("slow"); });
	$(".btn3").click(function(){ $(".list3").toggle("slow"); $(".sub_btn").show("slow"); });
	$(".btn4").click(function(){ $(".list4").toggle("slow"); $(".sub_btn").show("slow"); });
	$(".btn5").click(function(){ $(".list5").toggle("slow"); $(".sub_btn").show("slow"); });
	$(".btn6").click(function(){ $(".list6").toggle("slow"); $(".sub_btn").show("slow"); });
});
</script>
<style>
.btn,.btn_x
{
	style="padding:10px 10px 10px 10px";
	margin-top:10px;
}
.btn-success
{
	width: 45%;
    padding: 9px;
    border-radius:4px;
}
/*.col-md-4 {
    width: 33.33333333%;
    border: 1px solid #ccc;
    height: 70%;
    padding: 26px;
}*/
input.btn-info
{
    width: 65%;
    padding: 9px;
    border-radius:4px;
}
.list,.list1,.list2,.list3,.list4,.list5,.list6,.sub_btn
{
	display:none;
	padding:10px 0px 10px 0px
}

</style>
<body>
<div class="container">
<a class="btn btn-primary" >To Become A Service Provider Select The Category You Can Provide</a>
<!--<form action="submiting_cat.php" method="post">-->
	<div class="list">
	<div id="l1" class="col-md-12" style="padding:10px 0px 10px 0px">
		<div class="col-md-4"><input type="button" class="btn1 btn-info" value="Graphic Design">
		   <div class="list1">
			<input type="checkbox" name="check_list1[]" value="1111"> <label>Logo: </label><br>
			<input type="checkbox" name="check_list1[]" value="1112"> <label>Bussiness card: </label><br>
			<input type="checkbox" name="check_list1[]" value="1113"> <label>Illustration: </label><br>
			<input type="checkbox" name="check_list1[]" value="1114"> <label>Cartoon: </label><br>
			<input type="checkbox" name="check_list1[]" value="1115"> <label>Book cover: </label><br>
			<input type="checkbox" name="check_list1[]" value="1116"> <label>Photoshop: </label><br>
			<input type="checkbox" name="check_list1[]" value="1117"> <label>2d & 3d model: </label><br><br>
			<div class="form-group">
				<label for="comment">Tell us more about you in this category:</label>
				<textarea class="form-control" rows="5" name="111" id="title[]"></textarea>
			</div><!--end of form-group-->
			</div> 
		</div>
		
		
		<div class="col-md-4"><input type="button" class="btn2 btn-info" value="Digital marketing">
			<div class="list2">
			<input type="checkbox" name="check_list1[]" value="2221"> <label>Email Marketing </label><br>
			<input type="checkbox" name="check_list1[]" value="2222"> <label>SEO(search engine optamization)</label><br>
			<input type="checkbox" name="check_list1[]" value="2223"> <label>Content making</label><br>
		    <input type="checkbox" name="check_list1[]" value="2224"> <label>Mobile advertisement</label><br><br>
			<div class="form-group"><br><br><br><br>
				<label for="comment">Tell us more about you in this category:</label>
				<textarea class="form-control" rows="5"  name="222" id="title[]"></textarea>
			</div><!--end of form-group-->
			</div>
		</div>
		
		<div class="col-md-4"><input type="button" class="btn3 btn-info" value="Writing & Tranlation">
			<div class="list3">
			<input type="checkbox" name="check_list1[]" value="3331"> <label>Proof Reading & editing</label><br>
			<input type="checkbox" name="check_list1[]" value="3332"> <label>Translation </label><br>
			<input type="checkbox" name="check_list1[]" value="3333"> <label>Resume & cover letter</label><br>
			<input type="checkbox" name="check_list1[]" value="3334"> <label>Creative writing </label><br>
			<input type="checkbox" name="check_list1[]" value="3335"> <label>Article & Blog Post</label><br><br>
			<div class="form-group"><br><br><br>
				<label for="comment">Tell us more about you in this category:</label>
				<textarea class="form-control" rows="5"  name="333" id="title[]"></textarea>
			</div><!--end of form-group-->
			</div>
		</div>
		</div>
		
		<div  id="l2" class="col-md-12" style="padding:10px 0px 10px 0px">
		<div class="col-md-4"><input type="button" class="btn4 btn-info" value="Video & Animation">
			<div class="list4">
			 <input type="checkbox" name="check_list1[]" value="4441"> <label>Promotional & brand video</label><br>
			 <input type="checkbox" name="check_list1[]" value="4442"> <label>Animation Character & Modelling</label><br>
			 <input type="checkbox" name="check_list1[]" value="4443"> <label>Spoke person & testimonial</label><br><br>
			 <div class="form-group"><br><br><br><br>
				<label for="comment">Tell us more about you in this category:</label>
				<textarea class="form-control" rows="5" name="444" id="title[]"></textarea>
			 </div><!--end of form-group-->
			</div>
		</div>
		
		<div class="col-md-4"><input type="button" class="btn5 btn-info" value="Programming & Tech">
		   <div class="list5">
			<input type="checkbox" name="check_list1[]" value="5551"> <label>Worpress </label><br>
			<input type="checkbox" name="check_list1[]" value="5552"> <label>Website builder </label><br>
			<input type="checkbox" name="check_list1[]" value="5553"> <label>E-commerce </label><br>
			<input type="checkbox" name="check_list1[]" value="5554"> <label>User testing </label><br>
			<input type="checkbox" name="check_list1[]" value="5555"> <label>QA (Quality Accurance) </label><br><br>
			<div class="form-group"><br>
				<label for="comment">Tell us more about you in this category:</label>
				<textarea class="form-control" rows="5" name="555" id="title[]"></textarea>
			</div><!--end of form-group-->
			</div>
		</div>
		<div class="col-md-4"><input type="button" class="btn6 btn-info" value="Bussiness">
			<div class="list6">
			<input type="checkbox" name="check_list1[]" value="6661"> <label>Career Advice</label><br>
			<input type="checkbox" name="check_list1[]" value="6662"> <label>Presentation </label><br>
			<input type="checkbox" name="check_list1[]" value="6663"> <label>Market Research </label><br>
			<input type="checkbox" name="check_list1[]" value="6664"> <label>Bussiness Tips </label><br>
			<input type="checkbox" name="check_list1[]" value="6665"> <label>Legal Consultancy </label><br>
			<input type="checkbox" name="check_list1[]" value="6666"> <label>Finance </label><br><br>
			<div class="form-group">
				<label for="comment">Tell us more about you in this category:</label>
				<textarea class="form-control" rows="5"name="666" id="title[]"></textarea>
			</div><!--end of form-group-->
			</div>
		</div>	
		</div>
	</div>


	<div class="col-md-12" style="padding:10px 0px 10px 0px">
	<hr size="30">
		<center><div class="sub_btn"><input class=" btn-success" type="submit" value="Continue as Service provider">
		<!--</form>--></div></center>
	</div>
</div>
</body>
</html>