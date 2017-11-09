<?php $_password_="8584"?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRAIGSLIST | HOME</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

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
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="home.php"><strong>CRAIGSLIST</strong></a></div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
<ul class="nav navbar-nav navbar-right hidden-sm">
<?php
setcookie("Cat4","Housing", time()+60000,"/");
setcookie("AddId",1, time()+60000,"/");
$cookie_name="Email";
if(isset($_COOKIE[$cookie_name])) 
{
    echo "
<li><a href=\"changepass.php#x\">Change Password</a></li>
<li><a href=\"userads.php?Email2=$_COOKIE[$cookie_name]\">View Your Ads</a></li>
<li><a href=\"#\">$_COOKIE[$cookie_name]</a></li>
";
}
?>
  <li> <a href="postanad.php">Post an Ad!</a></li>
<?php
if(!isset($_COOKIE[$cookie_name])) 
{
    echo '
<li><a href="login.php#x">Log In</a></li>
  <li> <a href="signup.php#x">Sign Up </a></li>
';
} 
else
{
	echo '
	<li><a href="logout.php">Log Out</a></li>
	';
}
?>
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
          <h4>Category-wise search </h4>
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
<h2 class="text-center"> CATEGORIES </h2>
<hr>
<div class="container">
  <div class="row text-center">
<a href="temp.php?Cat=Housing">
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
      <div class="thumbnail"><img src="img/fair-housing-month.jpg" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
          <h3>Housing</h3>
          <p>Lorem ipsum dolor sit amet, adipisicing consectetur.</p>
          <p><form action="temp.php" method="post"><button type="submit" class="btn btn-primary" role="button" name="Cat" value="Housing">Select</button></form></p>
        </div>
      </div>
    </div>
<a>
<a href="temp.php?Cat=For Sale">
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
      <div class="thumbnail"> <img src="img/sale_tag.jpg" alt="Thumbnail Image 1" class="img-responsive"Select>
        <div class="caption">
          <h3>For Sale</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <p><form action="temp.php" method="post"><button type="submit" class="btn btn-primary" role="button" name="Cat" value="For Sale">Select</button></form></p>
        </div>
      </div>
    </div>
</a>
<a href="temp.php?Cat=Jobs">
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
      <div class="thumbnail"> <img src="img/job.jpg" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
          <h3>Jobs</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <p><form action="temp.php" method="post"><button type="submit" class="btn btn-primary" role="button" name="Cat" value="Jobs">Select</button></form></p>
        </div>
      </div>
    </div>
</a>
<a href="temp.php?Cat=Services">
    <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6 hidden-lg hidden-md hidden-sm">
      <div class="thumbnail"> <img src="img/400X200.gif" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
          <h3>Services</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <p><form action="temp.php" method="post"><button type="submit" class="btn btn-primary" role="button" name="Cat" value="Services">Select</button></form></p>
        </div>
      </div>
    </div>
  </div>
</a>
<a href="temp.php?Cat=Services">
  <div class="row text-center hidden-xs">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="thumbnail"> <img src="img/serv.jpg" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
          <h3>Services</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <p><form action="temp.php" method="post"><button type="submit" class="btn btn-primary" role="button" name="Cat" value="Services">Select</button></form></p>
        </div>
      </div>
    </div>
</a>
<a href="temp.php?Cat=Personal">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="thumbnail"> <img src="img/personal-logo-apllicacion.jpg" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
          <h3>Personal</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <p><form action="temp.php" method="post"><button type="submit" class="btn btn-primary" role="button" name="Cat" value="Personal">Select</button></form></p>
        </div>
      </div>
    </div>
</a>
<a href="temp.php?Cat=Community">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
      <div class="thumbnail"> <img src="img/comm.jpg" alt="Thumbnail Image 1" class="img-responsive">
        <div class="caption">
          <h3>Community</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
          <p><form action="temp.php" method="post"><button type="submit" class="btn btn-primary" role="button" name="Cat" value="Community">Select</button></form></p>
        </div>
      </div>
    </div>
</a>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  </div>
</div>
<div class="container well">     
        <strong>CS207 PROJECT<?php for($i=0;$i<170;$i++)echo"&nbsp";?>Developed By</strong><br>
		CSE Department<?php for($i=0;$i<170;$i++)echo"&nbsp";?>Manjush Mangal<br>
		Batch 2014<?php for($i=0;$i<179;$i++)echo"&nbsp";?>Shravan R. Patel<br>
<?php for($i=0;$i<198;$i++)echo"&nbsp";
?>Vinay Goel
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
