<?php $_password_="8584"?>
<?php
if(!isset($_COOKIE['Email']))
{
	setcookie("mustlog","You Must Login First",time()+600,"/");
	header('Location:login.php#x');	
}
if(isset($_POST['submit']))
{
	$Cat4=$_COOKIE['Cat4'];
	$Email=$_COOKIE['Email'];
	$SubCat=$_POST['SubCat'];
	$Mobile=$_POST['Mobile'];
	$City=$_POST['City'];
	$PCode=$_POST['PCode'];
	$Price=$_POST['Price'];
	if(!$Price)
		$Price=1010010001;
	$Title=$_POST['Title'];
	$Details=$_POST['Details'];
	$State=$_POST['State'];
	mysql_connect("localhost","root","$_password_");
	mysql_select_db("CraigsList");
	$query="insert into Ads(Email,Mobile,Price,Cat,SubCat,State,City,PostalCode,Title,Details) values(\"$Email\",\"$Mobile\",\"$Price\",\"$Cat4\",\"$SubCat\",\"$State\",\"$City\",\"$PCode\",\"$Title\",\"$Details\")";
	$result=mysql_query($query);	
	$query="select AddId from Ads order by AddId desc limit 1";
	$result=mysql_query($query);	
	$row=mysql_fetch_array($result);	
	$AddId=$row['AddId'];
	setcookie("AddId4",$AddId, time()+60000,"/");
	if(isset($_FILES['image']))
	{
	      $file_name = $_FILES['image']['name'];
	      $file_size =$_FILES['image']['size'];
	      $file_tmp =$_FILES['image']['tmp_name'];
	      $file_type=$_FILES['image']['type'];
	      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
	      $expensions= array("jpeg","jpg","png");
	      $query="select AddId from Ads order by AddId desc limit 1";
		$result=mysql_query($query);	
		$row=mysql_fetch_array($result);
		$file_name=$row['AddId'];
	      move_uploaded_file($file_tmp,"/var/www/html/CraigsList/upload/".$file_name.".jpg");
 	}
 	header('Location:posted.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRAIGSLIST | LOGIN</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">
<style type="text/css">
select {
    margin-top: 5px;
    margin-bottom: 5px;
    display:inline-block;
    *display: inline;     /* for IE7*/
    zoom:1;              /* for IE7*/
    vertical-align:middle;
    margin-left:20px;
    width:300px;
}
input {
    margin-top: 5px;
    margin-bottom: 5px;
    display:inline-block;
    *display: inline;     /* for IE7*/
    zoom:1;              /* for IE7*/
    vertical-align:middle;
    margin-left:20px;
	    width:300px;
}
textarea {
	margin-left:20px;
}

label {
    display:inline-block;
    *display: inline;     /* for IE7*/
    zoom:1;              /* for IE7*/
    float: left;
    padding-top: 5px;
    text-align: right;
    width: 250px;
    margin-left:350px;
}
#form1 p {
        color: #000000;
        font-family: "Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed",
Helvetica, Arial, sans-serif;
        font-style: italic;
        font-weight: bold;
        font-size: x-large;
}
#form1 .label.label-primary {
        font-size: x-large;
}
textarea {
    width: 300px;
    height: 300px;
}
nav {
        background-color:#B9DEEF;
}
p {
        background-color: #FFFFFF;
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
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle
navigation</span> <span class="icon-bar"></span> <span
class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="home.php"><strong>CRAIGSLIST</strong></a></div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
<ul class="nav navbar-nav navbar-right hidden-sm">
<?php
if(!$_COOKIE['Cat4'])
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
<form id="form1" action="temp7.php" name="form1" method="post">
<br>
<br>
  <label for="select4" class="label label-primary">Category</label>
  <select class="btn btn-lg btn-default" name="Cat4" onchange='this.form.submit()'>
<?php
	$Cat=$_COOKIE['Cat4'];
	echo "<option value=\"$Cat\">$Cat</option>";	
	mysql_connect("localhost","root","$_password_");
	mysql_select_db("CraigsList");
	$query="select distinct Cat from SubCat where Cat !=\"$Cat\"";
	$result=mysql_query($query);
	$num=mysql_num_rows($result);
	for($i=0;$i<$num;$i++)
	{
		$row=mysql_fetch_array($result);
        	$Cat1=$row['Cat'];		
		echo "<option value=\"$Cat1\">$Cat1</option> ";
	}	
?>
</select>
<noscript><input type="submit1" value="Submit"></noscript>
</form>
<form id="form1" name="form1" action="postanad.php" method="post" enctype="multipart/form-data">
  <br>
  <br>
  <label for="select5" class="label label-primary">Sub-Category</label>
  <select name="SubCat" class="btn btn-lg btn-default">
<?php
	mysql_connect("localhost","root","$_password_");
	mysql_select_db("CraigsList");
	$query="select SubCat from SubCat where Cat=\"$Cat\"";
	$result=mysql_query($query);
	$num=mysql_num_rows($result);
	for($i=0;$i<$num;$i++)
	{
		$row=mysql_fetch_array($result);
        	$SubCat=$row['SubCat'];		
		echo "<option value=\"$SubCat\">$SubCat</option> ";
	}
?>
  </select>
  <br>
  <hr>
  <br>
  <label for="tel" class="label label-primary">Mobile</label>
  <input name="Mobile" type="number" class="input-sm" required>
<br>
  <br>
  <label for="select5" class="label label-primary">State</label>
  <select name="State" class="btn btn-lg btn-default">
<?php
	mysql_connect("localhost","root","$_password_");
	mysql_select_db("CraigsList");
	$query="select State from State order by State";
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
<br>
  <br>
  <label for="textfield4" class="label label-primary">City</label>
  <input name="City" type="text" class="input-sm" required>
<br><br>
        <label for="number6" class="label label-primary">Postal Code</label>
        <input name="PCode" type="number" class="input-sm" required>
<br><hr>
<br>
        <label for="number6" class="label label-primary"> Upload Image</label>
	<input type="file" class="btn btn-default" name="image" id="fileInput" onchange="ValidateSingleInput(this);" />
<?php
if($_COOKIE['Cat4']=="Housing"||$_COOKIE['Cat4']=="For Sale")
echo "	<br><br>
        <label for=\"number6\" class=\"label label-primary\">Price</label>
        <input name=\"Price\" type=\"number\" class=\"input-sm\">
";
?>
  <br>
  <br>
  <label for="textfield3" class="label label-primary">Title</label>
  <input name="Title" type="text" class="input-sm" required>
  <br>
  <br>
  <label for="textarea2" class="label label-primary">Details</label>
  <textarea rows="10" name="Details" class="input-sm"></textarea>
  <br>
  <br>
<center>
  <input name="reset" type="reset" class="btn btn-lg btn-default" value="Reset">
<input name="submit" type="submit" class="btn btn-lg btn-default" value="Submit">
</center>
<br>
  &nbsp;
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

</head>

<body>
<script type="text/javascript">
function AlertFilesize(oInput){
    if(window.ActiveXObject){
        var fso = new ActiveXObject("Scripting.FileSystemObject");
        var filepath = document.getElementById('fileInput').value;
        var thefile = fso.getFile(filepath);
        var sizeinbytes = thefile.size;
	var ext=filepath.split('.').pop();
    }else{
        var sizeinbytes = document.getElementById('fileInput').files[0].size;
    }
	if(sizeinbytes>5000000)
{
		alert("Sorry, Size of image should be less than 5 MB");
oInput.value = "";
return false;
}
	else
return true;
}
var _validFileExtensions = [".jpg", ".jpeg",".png"];    
function ValidateSingleInput(oInput) {
    if (oInput.type == "file") {
        var sFileName = oInput.value;
         if (sFileName.length > 0) {
            var blnValid = false;
            for (var j = 0; j < _validFileExtensions.length; j++) {
                var sCurExtension = _validFileExtensions[j];
                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                    blnValid = true;
                    break;
                }
            }
            if (!blnValid) {
                alert("Extension not allowed, please choose a JPEG or PNG or JPG file");
                oInput.value = "";
                return false;
            }
        }
    }
    return AlertFilesize(oInput);
}
</script>
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
        <p>Copyright Â© IITMandi's Website. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<script src="js/jquery-1.11.2.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>
