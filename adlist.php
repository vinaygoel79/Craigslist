<?php $_password_="8584"?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title>CSS Checkbox Demo from CSSCheckbox.com</title>
	<link rel="stylesheet" href="css/price_style.css"/>
	<style type="text/css">
		label {margin-right:20px;}
	</style>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRAIGSLIST | HOME</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">
<style type="text/css">
.myButton {
	height:200px;
	width:1100px;
	-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
	-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background-color:#ffffff;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #dcdcdc;
	display:inline-block;
	cursor:pointer;
	color:#666666;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #ffffff;
}
.myButton:hover {
	background-color:#f6f6f6;
}
.myButton:active {
	position:relative;
	top:1px;
}

select {
    margin-top: 5px;
    margin-bottom: 5px;
    display:inline-block;
    *display: inline;     /* for IE7*/
    zoom:1;              /* for IE7*/
    vertical-align:middle;
    margin-left:-50px;
    width:400px;
}
#price {
    margin-top: 5px;
    margin-bottom: 5px;
    display:inline-block;
    *display: inline;     /* for IE7*/
    zoom:1;              /* for IE7*/
    vertical-align:middle;
    margin-left:-400px;
    width:400px;
}
label {
    display:inline-block;
    *display: inline;     /* for IE7*/
    zoom:1;              /* for IE7*/
    float: left;
    padding-top: 5px;
    text-align: right;
    width: 250px;
    margin-left:300px;
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
<center>
<form id="form1" action="temp5.php" name="form1" method="post">
<br>
<br>
  <label for="select" class="label label-primary">State</label>
 <select class="btn btn-lg btn-default" name="State" onchange='this.form.submit()'>
<?php
	$State=$_COOKIE['State2'];
	echo "<option value=\"$State\">$State</option> ";
	if($State!="All India")
		echo "<option value=\"All India\">All India</option> ";
	mysql_connect("localhost","root","$_password_");
	mysql_select_db("CraigsList");
	$query="select State from State where State!=\"$State\" order by State";
	$result=mysql_query($query);
	$num=mysql_num_rows($result);
	for($i=0;$i<$num;$i++)
	{
		$row=mysql_fetch_array($result);
        	$State=$row['State'];		
		echo "<option value=\"$State\">$State</option> ";
	}
?>
</select>
<noscript><input type="submit1" value="Submit"></noscript>
</form></center>


<center>
<form id="form1" action="temp6.php" name="form1" method="post">
<br>
<br>
  <label for="select" class="label label-primary">City</label>
  <select class="btn btn-lg btn-default" name="City" onchange="this.form.submit()">
<?php
$City=$_COOKIE['City2'];
$State=$_COOKIE['State2'];
$SC=$_COOKIE['SC2'];
$StateSC=$_COOKIE['StateSC2'];
mysql_connect("localhost","root","$_password_");
mysql_select_db("CraigsList");
if($SC==0)
{	
	echo "<option value=\"$City\">$City</option>";
	if($City!="All Cities")
		echo "<option value=\"All Cities\">All Cities</option> ";
	$query="select distinct City from Ads where State=\"$State\" and City<> \"$City\" order by City";
	$result=mysql_query($query);
	$num=mysql_num_rows($result);
	for($i=0;$i<$num;$i++)
	{
		$row=mysql_fetch_array($result);
        	$City=$row['City'];		
		echo "<option value=\"$City\">$City</option>";
	}
	if($State=="All India")
	{
		$query="select Distinct City from Ads where City <> \"$City\" order by City ";
		$result=mysql_query($query);
		$num=mysql_num_rows($result);
		for($i=0;$i<$num;$i++)
		{
			$row=mysql_fetch_array($result);
			$City=$row['City'];		
			echo "<option value=\"$City\">$City</option>";
		}
	}
}
else if($SC=="1")
{	
		if($City=="All Cities")
			echo "<option value=\"$City\">$City</option>";
		else
		{
			echo "<option value=\"$City\">$City ( $StateSC )</option>";
			echo "<option value=\"-1\">All Cities</option>";
		}			
		$query="select Distinct City,State from Ads where City <> \"$City\" or State <> \"$StateSC\" order by City ";
		$result=mysql_query($query);
		$num=mysql_num_rows($result);
		for($i=0;$i<$num;$i++)
		{
			$row=mysql_fetch_array($result);
			$City=$row['City'];		
			$Statee=$row['State'];
			$query2="select AddId from Ads where City = \"$City\" and State = \"$Statee\" limit 1";	
			$result2=mysql_query($query2);
			$row2=mysql_fetch_array($result2);
			$AddId=$row2['AddId'];
			echo "<option value=\"$AddId\">$City ( $Statee )</option>";
		}
}
?>
</select>
<noscript><input type="submit1" value="Submit"></noscript>
</form></center>
<center>
<form id="form1" action="temp3.php" name="form1" method="post">
<br>
<br>
  <label for="select" class="label label-primary">Category</label>
  <select class="btn btn-lg btn-default" name="Cat" onchange='this.form.submit()'>
<?php
	//echo "<option value=\"$Cat\">$Cat</option>";	
	$Cat=$_COOKIE['Cat2'];
	echo "<option value=\"$Cat\">$Cat</option> ";
	if($Cat!="All Categories")
	echo "<option value=\"All Categories\">All Categories</option> ";
	mysql_connect("localhost","root","$_password_");
	mysql_select_db("CraigsList");
	$query="select distinct Cat from SubCat where Cat <> \"$Cat\"";
	$result=mysql_query($query);
	$num=mysql_num_rows($result);
	for($i=0;$i<$num;$i++)
	{
		$row=mysql_fetch_array($result);
        	$Cat=$row['Cat'];		
		echo "<option value=\"$Cat\">$Cat</option> ";
	}	
?>
</select>
<noscript><input type="submit1" value="Submit"></noscript>
</form></center>
<center>
<form id="form1" action="temp4.php" name="form1" method="post">
<br>
<br>
  <label for="select" class="label label-primary">SubCategory</label>
  <select class="btn btn-lg btn-default" name="SubCat" onchange='this.form.submit()'>
<?php
	$sc=$_COOKIE['sc2'];
	$Catsc=$_COOKIE['Catsc2'];
	$SubCat=$_COOKIE['SubCat2'];
	$Cat=$_COOKIE['Cat2'];
	mysql_connect("localhost","root","$_password_");
	mysql_select_db("CraigsList");
if($sc==0)
{
	echo "<option value=\"$SubCat\">$SubCat</option>";
	if($SubCat!="All SubCategories")
		echo "<option value=\"All SubCategories\">All SubCategories</option> ";
	$query="select SubCat from SubCat where Cat=\"$Cat\" and SubCat <> \"$SubCat\"";
	$result=mysql_query($query);
	$num=mysql_num_rows($result);
	for($i=0;$i<$num;$i++)
	{
		$row=mysql_fetch_array($result);
        	$SubCat=$row['SubCat'];		
		echo "<option value=\"$SubCat\">$SubCat</option> ";
	}
	if($Cat=="All Categories")
	{
		$query="select SubCat from SubCat where SubCat <> \"$SubCat\"order by SubCat";
		$result=mysql_query($query);
		$num=mysql_num_rows($result);
		for($i=0;$i<$num;$i++)
		{
			$row=mysql_fetch_array($result);
			$SubCat=$row['SubCat'];		
			echo "<option value=\"$SubCat\">$SubCat</option> ";
		}
	}
}
else if($sc==1)
{	
		if($SubCat=="All SubCategories")
			echo "<option value=\"$SubCat\">$SubCat</option>";
		else
		{
			echo "<option value=\"$SubCat\">$SubCat ( $Catsc )</option>";
			echo "<option value=\"-1\">All SubCategories</option>";
		}
		$query="select Distinct SubCat,Cat from SubCat where SubCat <> \"$SubCat\" or Cat <> \"$Catsc\" order by SubCat ";
		$result=mysql_query($query);
		$num=mysql_num_rows($result);
		for($i=0;$i<$num;$i++)
		{
			$row=mysql_fetch_array($result);
			$SubCat=$row['SubCat'];		
			$Cat=$row['Cat'];
			$query2="select S_No from SubCat where SubCat = \"$SubCat\" and Cat = \"$Cat\" limit 1";	
			$result2=mysql_query($query2);
			$row2=mysql_fetch_array($result2);
			$S_No=$row2['S_No'];
			echo "<option value=\"$S_No\">$SubCat ( $Cat )</option>";
		}
}	
?>
</select>
<noscript><input type="submit1" value="Submit"></noscript>
</form></center>
<br><br>
<?php
$LH=$_COOKIE['LH'];
if(!$LH)
	$LH="Low";
if($LH=="Low")
{
	$_1="checked=\"checked\"";
	$_2="";
}
else
{
	$_2="checked=\"checked\"";
	$_1="NULL";
}
echo "
<center>
<form id=\"form1\" action=\"temp10.php\" name=\"form1\" method=\"post\" onchange=\"this.form.submit();\">
  <label for=\"select\" class=\"label label-primary\">Price</label>
  

<tr>
	<td>
		<input type=\"radio\" name=\"LH\" id=\"radio4\" value=\"Low\" class=\"css-checkbox\" $_1 onclick=\"javascript: submit()\"/>
		<label for=\"radio4\" class=\"css-label radGroup2\">Low</label>	
	</td>
	<td>	
		<input type=\"radio\" name=\"LH\" id=\"radio5\" value=\"High\" class=\"css-checkbox\" $_2 onclick=\"javascript: submit()\"/>	
		<label for=\"radio5\" class=\"css-label radGroup2\">High</label>
	</td>
</tr>

</form>
</center>
<br><br>
<br><br><hr>
<center>
";
?>
<?php
	$SubCat=$_COOKIE['SubCat2'];
	$Cat=$_COOKIE['Cat2'];
	$City=$_COOKIE['City2'];
	$State=$_COOKIE['State2'];
	$SC=$_COOKIE['SC2'];
	$sc=$_COOKIE['sc2'];
	$StateSC2=$_COOKIE['StateSC2'];
	$Catsc2=$_COOKIE['Catsc2'];
	mysql_connect("localhost","root","$_password_");
	mysql_select_db("CraigsList");
	if($State=="All India"&&$City=="All Cities")
	{
		if($SubCat=="All SubCategories"&&$Cat!="All Categories")
			$query="select * from Ads where Cat=\"$Cat\" ";
		else if($SubCat=="All SubCategories"&&$Cat=="All Categories")
			$query="select * from Ads ";
		else if($SubCat!="All SubCategories"&&$Cat=="All Categories")
			$query="select * from Ads where SubCat=\"$SubCat\" and Cat=\"$Catsc2\" ";
		else if($SubCat!="All SubCategories"&&$Cat!="All Categories")		
			$query="select * from Ads where SubCat=\"$SubCat\" and Cat=\"$Cat\" ";
	}
	else if($State=="All India"&&$City!="All Cities")
	{
		if($SubCat=="All SubCategories"&&$Cat!="All Categories")
			$query="select * from Ads where Cat=\"$Cat\" and City=\"$City\" and State=\"$StateSC2\"";
		else if($SubCat=="All SubCategories"&&$Cat=="All Categories")
			$query="select * from Ads where City=\"$City\" and State=\"$StateSC2\"";
		else if($SubCat!="All SubCategories"&&$Cat=="All Categories")
			$query="select * from Ads where SubCat=\"$SubCat\"  and Cat=\"$Catsc2\" and City=\"$City\" and State=\"$StateSC2\"";
		else if($SubCat!="All SubCategories"&&$Cat!="All Categories")		
			$query="select * from Ads where SubCat=\"$SubCat\"  and Cat=\"$Cat\" and City=\"$City\" and State=\"$StateSC2\"";
	}
	else if($State!="All India"&&$City=="All Cities")
	{
		if($SubCat=="All SubCategories"&&$Cat!="All Categories")
			$query="select * from Ads where Cat=\"$Cat\" and State=\"$State\"";
		else if($SubCat=="All SubCategories"&&$Cat=="All Categories")
			$query="select * from Ads where State=\"$State\"";
		else if($SubCat!="All SubCategories"&&$Cat=="All Categories")
			$query="select * from Ads where SubCat=\"$SubCat\" and  Cat=\"$Catsc2\" and  State=\"$State\"";
		else if($SubCat!="All SubCategories"&&$Cat!="All Categories")		
			$query="select * from Ads where SubCat=\"$SubCat\"  and Cat=\"$Cat\" and State=\"$State\"";	
	}
	else
	{
		if($SubCat=="All SubCategories"&&$Cat!="All Categories")
			$query="select * from Ads where Cat=\"$Cat\" and City=\"$City\" and State=\"$State\"";
		else if($SubCat=="All SubCategories"&&$Cat=="All Categories")
			$query="select * from Ads where City=\"$City\" and State=\"$State\"";
		else if($SubCat!="All SubCategories"&&$Cat=="All Categories")
			$query="select * from Ads where SubCat=\"$SubCat\"  and Cat=\"$Catsc2\" and City=\"$City\" and State=\"$State\"";
		else if($SubCat!="All SubCategories"&&$Cat!="All Categories")		
			$query="select * from Ads where SubCat=\"$SubCat\"  and Cat=\"$Cat\" and City=\"$City\" and State=\"$State\"";		
	}
if($LH=="Low")
	$query=$query." order by Price";
else
$query="select * from ($query order by Price desc)D1 where Price <>1010010001 UNION select * from ($query)D2 where Price=1010010001";

	$result=mysql_query($query);
	$num=mysql_num_rows($result);
	echo "<br><br><font size=\"5\">$num Results Found For This Search</font><br><br><br><br><hr>
	<form action=\"temp8.php\" method=\"post\">
	";
	for($i=0;$i<$num;$i++)
	{
		$row=mysql_fetch_array($result);
		$Title=$row['Title'];
		$State=$row['State'];
		$City=$row['City'];		
		$Cat=$row['Cat'];
		$SubCat=$row['SubCat'];
		$Price=$row['Price'];
		$AddId=$row['AddId'];
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
		<button class=\"myButton\" name=\"AddId\" value=\"$AddId\">
		<tr>
	<td>
	<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" >
		<tbody>
			<tr>
				<td width=\"164\" rowspan=\"2\">
					<img src=\"upload/$INo.jpg\" alt=\"upload/14jpg\" width=\"$width\" height=\"$height\">
				</td>
				
				<td valign=\"top\">
					<span><font size=\"5\" color=\"black\">$Title</font></span>
					<br><br>
			                <p> $Cat » $SubCat</p>
				</td> ";
if($Cat=="Housing"||$Cat=="For Sale")
{
echo "
				<td width=\"170\" valign=\"top\">
					<p class=\"price x-large margintop10\">
					<strong > <font size=\"3\" color=\"black\">Rs. $Price </font></strong>
					</p>
				</td>
";
}
		echo "	</tr>
			<tr>
				<td valign=\"bottom\">
					<p>$State » $City</p>
				</td>
				<td width=\"170\" valign=\"bottom\">			
				</td>
			</tr>
		</tbody>
	</table>
	</td>
</tr>
		</button><br><br>
		";
	}
?>
</form >
</center>
  
 <br><br><br> 
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
