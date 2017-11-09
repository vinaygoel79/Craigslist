<?php $_password_="8584"?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRAIGSLIST | SIGN UP</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">
<style type="text/css">
#form1 p {
	color: #000000;
	font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
	font-style: italic;
	font-weight: bold;
	font-size: x-large;
}
#form1 .label.label-primary {
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
<?php
if(isset($_COOKIE['Email']))
	header('Location:home.php');
$Email=$_POST['email'];
$Password=$_POST['password'];
$Password2=$_POST['password2'];
if(isset($_POST['submit']))
{
	mysql_connect("localhost","root","$_password_");
	mysql_select_db("CraigsList");
	$query="select Email from Accounts where Email=\"$Email\"";
	$result=mysql_query($query);
	$num=mysql_num_rows($result);
	if($num==0)
	{
		if($Password==$Password2)
		{
			$q2="insert into Accounts values(\"$Email\",\"$Password\")";	
			$result2=mysql_query($q2);
			setcookie(Email, $Email, time() + (10*60), "/");
			header('Location:home.php');
		}
		else
			$pmatch="Passwords do not match";
	}
	else
	{
		$ematch="Email already exists";	
	}
}
?>
<hr>
<nav>
  <div class="container"> 
    
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="home.php"><strong>CRAIGSLIST</strong></a></div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
<ul class="nav navbar-nav navbar-right hidden-sm">
  <li> <a href="postanad.php">Post an Ad!</a></li>
  <li> </li>
  <li> <a href="login.php#x">Log in </a></li>
</ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div id="carousel1" class="carousel slide">
          <ol class="carousel-indicators">
            <li data-target="#carousel1" data-slide-to="0" class="active"> </li>
            <li data-target="#carousel1" data-slide-to="1" class=""> </li>
            <li data-target="#carousel1" data-slide-to="2" class=""> </li>
          </ol>
          <div class="carousel-inner">
            <div class="item"> <img class="img-responsive" src="img/1.jpg" alt="thumb">
              <div class="carousel-caption"> Stay Updated. </div>
            </div>
            <div class="item active"> <img class="img-responsive" src="img/2.jpg" alt="thumb">
              <div class="carousel-caption"> Get jobs. </div>
            </div>
            <div class="item"> <img class="img-responsive" src="img/3.jpg" alt="thumb">
              <div class="carousel-caption"> Get products. </div>
            </div>
          </div>
          <a class="left carousel-control" href="#carousel1" data-slide="prev"><span class="icon-prev"></span></a> <a class="right carousel-control" href="#carousel1" data-slide="next"><span class="icon-next"></span></a></div>
      </div>
</div>
    <hr>
  </div>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2"><img class="img-circle" alt="Free Shipping" src="img/11.jpg"></div>
        <div class="col-lg-6 col-md-9 col-sm-9 col-xs-9">
          <h4 id="x">Category-wise search </h4>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2"><img class="img-circle" alt="Free Shipping" src="img/22.jpg"></div>
        <div class="col-lg-6 col-md-9 col-sm-9 col-xs-9">
          <h4>Region-wise Search</h4>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2"><img class="img-circle" alt="Free Shipping" src="img/33.jpg"></div>
        <div class="col-lg-6 col-md-9 col-sm-9 col-xs-9">
          <h4>Unlimited Advertisements </h4>
        </div>
      </div>
    </div>
  </div>
</div>
<hr>
<center> <form id="form1" action="signup.php#x" name="form1" method="post">
  <p>Create a new account</p>
  <br>
<label for="email" class="label label-primary">Email:</label>
<input name="email" type="email" class="input-sm" required>
<font size="4" color="red"><?php
if(isset($ematch))
	echo "$ematch";
?></font>
<br>
<br>
<label for="password" class="label label-primary">Password:</label>
<input name="password" type="password" class="input-sm" id="password" required>
<br>
<br>
<label for="password3" class="label label-primary">Confirm Password:</label>
<input name="password2" type="password" class="input-sm" id="password2" required>
<font size="4" color="red"><?php
if(isset($pmatch))
	echo "$pmatch";
?></font>
<br>
<br>
<input name="reset" type="reset" class="btn btn-lg btn-default" value="Reset">
<input type="submit" name="submit" class="btn btn-lg btn-default" value="Submit">
<br> 
</form> </center>
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
