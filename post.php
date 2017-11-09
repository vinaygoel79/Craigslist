<html>
<body>
<?php
if(!isset($_COOKIE['Email']))
{
	setcookie("mustlog","You Must Login First",time()+600,"/");
	header('Location:login.php');	
}
$Email=$_COOKIE['Email'];
$Cat=$_COOKIE['Cat'];
$SubCat=$_COOKIE['SubCat'];
$Mobile=$_COOKIE['Mobile'];
$City=$_COOKIE['City'];
$PCode=$_COOKIE['PCode'];
$Price=$_COOKIE['Price'];
if(!isset($Price))
	$Price="-1";
$Title=$_COOKIE['Title'];
$Details=$_COOKIE['Details'];
	setcookie("SubCat",$SubCat,time()-600000,"/");
	setcookie("Mobile",$Mobile,time()-600000,"/");
	setcookie("City",$City,time()-600000,"/");
	setcookie("PCode",$PCode,time()-600000,"/");
	setcookie("Price",$Price,time()-600000,"/");
	setcookie("Title",$Title,time()-600000,"/");
	setcookie("Details",$Details,time()-600000,"/");
	//setcookie("Cat",$Cat,time()-600000,"/");  //will delete in new page
if(isset($SubCat))
{
	mysql_connect("localhost","root","8584");
	mysql_select_db("CraigsList");
	$query="insert into Ads(Email,Mobile,Price,Cat,SubCat,City,PostalCode,Title,Details) values(\"$Email\",\"$Mobile\",\"$Price\",\"$Cat\",\"$SubCat\",\"$City\",\"$PCode\",\"$Title\",\"$Details\")";
	$result=mysql_query($query);
}
echo "Successfully posted";
?>
</body>
</html>
