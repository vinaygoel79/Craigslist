<?php $_password_="8584"?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>VIEW AD</title>
<link href="BlogPostAssets/styles/blogPostStyle.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"></script>
</head>
<style>
nav {
	background-color:#B9DEEF;
}
</style>
<body>
<hr>
<nav>
  <div class="container"> 
    
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle
navigation</span> <span class="icon-bar"></span> <span
class="icon-bar"></span> <span class="icon-bar"></span> </button>
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
<hr>
<?php
$AddId=$_COOKIE['AddId4'];
mysql_connect("localhost","root","$_password_");
mysql_select_db("CraigsList");
$query="select * from Ads where AddId=\"$AddId\"";
$result=mysql_query($query);
$row=mysql_fetch_array($result);
$Cat=$row['Cat'];
$State=$row['State'];
$City=$row['City'];
$Price=$row['Price'];
$Mobile=$row['Mobile'];
$Email=$row['Email'];
$PostalCode=$row['PostalCode'];
$Title=$row['Title'];
$SubCat=$row['SubCat'];
$Details=$row['Details'];
$INo=$AddId;
		if(!file_exists("upload/$INo.jpg"))
			$INo="a1";
		list($width, $height, $type, $attr) = getimagesize("upload/$INo.jpg");
		if($width>$height)
		{
			$width=200;
			$height=NULL;
		}
		else
		{
			$width=NULL;
			$height=180;
		}
echo "
<div id=\"mainwrapper\">
<div id=\"content\">
    <section id=\"mainContent\"> 
      <!--************************************************************************
    Main Blog content starts here
    ****************************************************************************-->
      <h1><!-- Blog title -->$Title</h1>
      <h3><!-- Tagline -->$Cat » $SubCat  <font size=\"4\">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
By : $Email</font></h3>
      <div id=\"bannerImage\"><img src=\"upload/$INo.jpg\" /></div>
      
      <h3><b>Details : </b></h3>
      <ul>
      <li><h4>$State » $City</h4></li>
	<li><h4>Postal Code &nbsp&nbsp: &nbsp&nbsp$PostalCode</h4></li>
";
if($Cat=="Housing"||$Cat=="For Sale")
{
echo "
      <li><h4>Rs. $Price</h4></li>
";
}
echo "
      <li><h4>$Details</h4></li>
      </ul>
<hr>
   	<h3><b>Seller Details : </b></h3>
<ul>
      <li><h4>Email &nbsp&nbsp: &nbsp&nbsp$Email</h4></li>

      <li><h4>Mobile&nbsp&nbsp:&nbsp&nbsp$Mobile</h4></li>
      </ul>
 ";
if($Email==$_COOKIE['Email']||$_COOKIE['Email']=="admin@gmail.com")
echo "<hr><a href=\"delete.php?AddId=$AddId\"><h3><b>Delete This Ad</b></h3></a> ";
echo "    </section>

    <section id=\"sidebar\"> 
      <!--************************************************************************
    Sidebar starts here. It contains a searchbox, sample ad image and 6 links
    ****************************************************************************-->
      
      <div id=\"adimage\"><img src=\"BlogPostAssets/images/buy.jpg\" alt=\"\"/></div>
<br><br>      
<nav>
        <ul>
          <li>&nbsp&nbsp<a href=\"home.php\" title=\"Link\">Home</a></li>
          <li>&nbsp&nbsp<a href=\"userads.php\" title=\"Link\">Go To Back</a></li>
          <li>&nbsp&nbsp<a href=\"userads.php?Email2=$Email\" title=\"Link\">Ads From This Seller</a></li>
      
        </ul>
      </nav>
    </section>
</div>
</div>
";
?>
<hr>
<div class="container well">
          <address>
        <strong>CS207 PROJECT<?php for($i=0;$i<170;$i++)echo"&nbsp";?>Developed By</strong><br>
		CSE Department<?php for($i=0;$i<170;$i++)echo"&nbsp";?>Manjush Mangal<br>
		Batch 2014<?php for($i=0;$i<179;$i++)echo"&nbsp";?>Shravan R. Patel<br>
<?php for($i=0;$i<198;$i++)echo"&nbsp";?>Vinay Goel
</address>
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
</body>
</html>
