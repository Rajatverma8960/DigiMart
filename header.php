<?php
session_start();
include 'msg_count.php';
?>

<!DOCTYPE html>

<html lang="en">
<head>
  <title>Comp-cart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- GOOGLE FONT-->
 <link href="https://fonts.googleapis.com/css?family=Rye" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Euphoria+Script" rel="stylesheet">
 <!--END GOOGLE FONT--> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
</head>
<style>
.navbar-nav {
    float: left;
    margin: 0;
    background-color: #fe9126;
}
#header{
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    background-color: #fe9126;
    margin-left: auto;
}
.navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover {
    color: #fff;
    background-color: #fe9126;
}
.navbar-inverse .navbar-nav>li>a {
    color: #fff6e9;
}
.badge-notify
{
background: red;
    position: relative;
    top: -8px;
    left: -9px;
}
button.btn.btn-default.btn-link {
    font-size: 20px;
    padding: 0px;
}
.btn-default:hover {
    background-color: #000;
    border: none;
}

.glyphicon 
{
    color: #2196F3;
}
.logo_products 
{
    padding: 0px 0px;
}
.w3ls_logo_products_left 
{
    float: left;
    text-align: center;
    width: 33.33%;
    padding: 36px 0px;
}
.w3l_search {
    float: right;
    width: 25.33%;
    margin: 0em 0 0em 0em;
    padding: 36px 0px;
}
.w3l_offers {
    padding: 9px 0;
    width: 33%;
	text-align:center;
}
.agile-login {
    float: left;
    width: auto; 
    text-align: center;
    padding: 9px 0;
}
</style>
<?php
//session_start();
@$_SESSION['user_x'];
if(isset($_SESSION['user_x']))
{
	$log_logout="logout";
	$log_logout_action="logout.php";
	$dash="Dashboard";
	$dash_link="dashboard.php";
	$name="Hi ".$_SESSION['user_x'];
}
else
{
	$log_logout="login";
	$log_logout_action="login.php";
	$name="Hi Customer";
}
?>
<body>
<!-- header -->
	<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				<p><a href="products.html">Call us at: (+91) 9205330582</a></p>
			</div>
			<div class="agile-login" >
				<ul>
				<li id="login_logout"><a href="<?php echo @$dash_link;?>"><?php echo $name;?></a></li>
				<li id="login_logout"><a href="<?php echo @$dash_link;?>"><?php echo @$dash;?></a></li>
				<a href="msg_page.php">
				<li>
				<!--Message-->
					<button class="btn btn-default btn-link">
					<span class="glyphicon glyphicon-comment"></span>
					</button>
					<span class="badge badge-notify"><?php echo $count;?></span
				<!--End Message-->
				</li>
				</a>
				<li id="login_logout"><a href="<?php echo $log_logout_action;?>"><?php echo $log_logout;?></a></li>
					
				</ul>
			</div>
			<div class="product_list_header">  
					<form action="#" method="post" class="last"> 
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true" float="right"></i></button>
					</form>  
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	
<!-- //header -->
<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left1">
		<img src="images/logox.png" id="msg" width="105">
				<!--<ul class="phone_email">
					<li>
					<img src="images/logox.png" id="msg">
					<i class="fa fa-phone" aria-hidden="true"></i>Call us at: (+91) 9205330582
					</li>
				</ul>-->
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php" style="font-family: 'Rye', cursive;">Digi-Lancer</a></h1>
			</div>
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="search" name="Search" placeholder="Search for a Service..." required="">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
				<div class="clearfix"></div>
			</form>
		</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
	
	<!-- navigation bar-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid" id="header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    								<ul class="nav navbar-nav">
									<li class="active"><a href="index.php" class="act">Home</a></li>	
									<!-- Mega Menu -->
									<li class="dropdown">
										  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Graphic Design<span class="caret"></span></a>
										  <ul class="dropdown-menu">
											<li>
											<a href="groceries.html">Logo Design</a></li>
														<li><a href="groceries.html">Business Card</a></li>
														<li><a href="groceries.html">Illustration</a></li>
														<li><a href="groceries.html">Cartoon</a></li>
														<li><a href="groceries.html"> Book Cover </a></li>
														<li><a href="groceries.html">Photoshop</a></li>
														<li><a href="groceries.html">2D & 3D models</a></li>
										  </ul>
									</li>
									
									<li class="dropdown">
										  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Digital Marketing<span class="caret"></span></a>
										  <ul class="dropdown-menu">
														<li><a href="household.html">Email Marketing</a></li>
														<li><a href="household.html">SEO</a></li>
														<li><a href="household.html">Content Making</a></li>
														<li><a href="household.html">Mobile Advertisement</a></li>
										  </ul>
									</li>
									
									<li class="dropdown">
										  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Writing & Translation<span class="caret"></span></a>
										  <ul class="dropdown-menu">
														<li><a href="personalcare.html">Proof Reading & Editing</a></li>
														<li><a href="personalcare.html">Translation</a></li>
														<li><a href="personalcare.html">Resume & Cover Letter</a></li>
														<li><a href="personalcare.html">Creative Writing</a></li>
														<li><a href="personalcare.html">Article & BlogPost</a></li>
										  </ul>
									</li>
									
									<li class="dropdown">
										  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Video & Animation<span class="caret"></span></a>
										  <ul class="dropdown-menu">
														<li><a href="packagedfoods.html">Promotional & Brand video</a></li>
														<li><a href="packagedfoods.html">Animation Character & Modeling</a></li>
														<li><a href="packagedfoods.html">Spokeperson & Testimonials</a></li>
										  </ul>
									</li>
									
									<li class="dropdown">
										  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Programming & Tech<span class="caret"></span></a>
										  <ul class="dropdown-menu">
														<li><a href="beverages.html">Wordpress</a></li>
														<li><a href="beverages.html">Website builder</a></li>
														<li><a href="beverages.html">E-commerce</a></li>
														<li><a href="beverages.html">User Testing</a></li>
														<li><a href="beverages.html">QA(Quality Assurance)</a></li>
										  </ul>
									</li>

									<li class="dropdown">
										  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Business<span class="caret"></span></a>
										  <ul class="dropdown-menu">
											<li><a href="#">Career Advice</a></li>
											<li><a href="#">Presentation</a></li>
											<li><a href="#">Market Research</a></li>
											<li><a href="#">Business Tips</a></li>
											<li><a href="#">Legal Consultancy</a></li>
											<li><a href="#">Finance</a></li>
										  </ul>
									</li>
									
								
									<li><a href="offers.html">Offers</a></li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
								</div>
								</nav>
							
								
 <!------------------------------------------>
