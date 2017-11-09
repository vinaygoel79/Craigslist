<?php $_password_="8584"?>
<?php
if(!isset($_COOKIE['Email']))
{
	setcookie("mustlog","You Must Login First",time()+600,"/");
	header('Location:login.php#x');	
}
?>
<!DOCTYPE html> 
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRAIGSLIST | SUCCESS</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">
<style type="text/css">
nav {
	background-color:#F1F192;
}
#form1 p {
	color: #000000;
	font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
	font-style: italic;
	font-weight: bold;
	font-size: x-large;
}
.container-fluid p {
	color: #E13235;
	text-align: right
}
.row .col-xs-6.col-sm-6.col-md-6.col-lg-5 p {
	color: #E13E40;
	font-style: normal;
	font-family: Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	font-weight: bolder;
	font-size: x-large;
	line-height: -10px;
	text-align: center;
}
.col-xs-6.col-sm-6.col-md-6.col-lg-5 p .btn.btn-default.btn-primary.btn-block {
	font-size: x-large;
}
</style>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<hr>
<nav>
  <div class="container"> 
    
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a href="home.php" class="navbar-brand"><strong>CRAIGSLIST</strong></a></div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
<ul class="nav navbar-nav navbar-right hidden-sm">
<?php
$cookie_name="Email";
echo "<li><a href=\"changepass.php#x\">Change Password</a></li>
<li><a href=\"userads.php?Email2=$_COOKIE[$cookie_name]\">View Your Ads</a></li>
<li><a href=\"#\">$_COOKIE[$cookie_name]</a></li>";
?>
<li> <a href="postanad.php">Post an Ad!</a></li>
  <li> <a href="logout.php">Logout</a></li>
</ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<hr>
<div class="container">
  <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-7">
        <div class="row">
        <img src="img/success.jpg" alt="Placeholder image" class="img-circle img-responsive" title="Classified Posted">
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-5">
        <br><br><p>Password Successfully Changed</p><br><br>
<?php
$cookie_name="Email";
echo "
        <p><a href=\"userads.php?Email2=$_COOKIE[$cookie_name]\" class=\"btn btn-default btn-primary btn-block\">View your Ads</a></p>
";
?>     
   <p><a href="home.php" class="btn btn-default btn-primary btn-block">Home</a></p>
      </div>
  </div>
  </div>
<hr>
<div class="container well">     
        <strong>CS207 PROJECT<?php for($i=0;$i<170;$i++)echo"&nbsp";?>Developed By</strong><br>
		CSE Department<?php for($i=0;$i<170;$i++)echo"&nbsp";?>Manjush Mangal<br>
		Batch 2014<?php for($i=0;$i<179;$i++)echo"&nbsp";?>Shravan R. Patel<br>
<?php for($i=0;$i<198;$i++)echo"&nbsp";?>Vinay Goel
</div>		  
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © IITMandi's Website. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<script src="js/jquery-1.11.2.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>
