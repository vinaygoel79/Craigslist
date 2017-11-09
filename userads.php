
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
    margin-left:-200px;
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
<form id="form1" action="temp9.php" name="form1" method="post">
<br>
<br>
  <label for="select" class="label label-primary">Email</label>
  <select class="btn btn-lg btn-default" name="Email2" onchange='this.form.submit()'>
<?php
	$Email2=$_GET['Email2'];
	if(!$Email2)
		$Email2=$_COOKIE['Email2'];
	if(!$Email2)
	{
		$Email2="All Sellers";
		setcookie("Email2",$Email2, time()+60000,"/");
	}		
	echo "<option value=\"$Email2\">$Email2</option> ";
	if($Email2!="All Sellers")
	echo "<option value=\"All Sellers\">All Sellers</option> ";
	mysql_connect("localhost","root","$_password_");
	mysql_select_db("CraigsList");
	$query="select distinct Email from Ads where Email <> \"$Email2\"";
	$result=mysql_query($query);
	$num=mysql_num_rows($result);
	for($i=0;$i<$num;$i++)
	{
		$row=mysql_fetch_array($result);
        	$Em=$row['Email'];		
		echo "<option value=\"$Em\">$Em</option> ";
	}	
?>
</select>
<noscript><input type="submit1" value="Submit"></noscript>
</form></center>
<br><br>
<center>
<?php
$LH2=$_COOKIE['LH2'];
if(!$LH2)
	$LH2="Low";
if($LH2=="Low")
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
<form id=\"form1\" action=\"temp11.php\" name=\"form1\" method=\"post\" onchange=\"this.form.submit();\">
  <label for=\"select\" class=\"label label-primary\">Price</label>
  

<tr>
	<td>
		<input type=\"radio\" name=\"LH2\" id=\"radio4\" value=\"Low\" class=\"css-checkbox\" $_1 onclick=\"javascript: submit()\"/>
		<label for=\"radio4\" class=\"css-label radGroup2\">Low</label>	
	</td>
	<td>	
		<input type=\"radio\" name=\"LH2\" id=\"radio5\" value=\"High\" class=\"css-checkbox\" $_2 onclick=\"javascript: submit()\"/>	
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
<center>
<?php
	if($Email2=="All Sellers")
		$query="select * from Ads";
	else	
		$query="select * from Ads where Email=\"$Email2\"";
	
	if($LH2=="Low")
		$query=$query." order by Price";
	else
		$query="select * from ($query order by Price desc)D1 where Price <>1010010001 UNION select * from ($query)D2 where Price=1010010001";

	mysql_connect("localhost","root","$_password_");
	mysql_select_db("CraigsList");
	$result=mysql_query($query);
	$num=mysql_num_rows($result);
	echo "<br><br><font size=\"5\">$num Results Found For This Search</font><br><br><br><br><hr>
	<form action=\"temp8_1.php\" method=\"post\">
	";
	for($i=0;$i<$num;$i++)
	{
		$row=mysql_fetch_array($result);
		$Title=$row['Title'];
		$Email=$row['Email'];
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
<p>$State » $City</p>
				</td>

				<td width=\"170\" valign=\"top\">
";
if($Cat=="Housing"||$Cat=="For Sale")
{
echo "
					<p class=\"price x-large margintop10\"><br>
					<strong > <font size=\"3\" color=\"black\">Rs. $Price </font></strong>
					</p><br><br>

";
}
				//	if($Email==$_COOKIE['Email']||$_COOKIE['Email']=="admin@gmail.com")
				//		echo "<a href=\"delete.php?AddId=$AddId\"><h4><b>Delete This Ad</b></h4></a> ";
					
echo "
				</td>
			</tr>
			<tr>
				<td valign=\"bottom\">
		<br>			
<p> By : $Email</p>
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
