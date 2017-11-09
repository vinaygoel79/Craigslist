<?php $_password_="8584"?>
<html>
<body>
<?php
$sc=$_COOKIE['sc2'];
if($sc==0)
{
	$SubCat2=$_POST['SubCat'];
	setcookie("SubCat2",$SubCat2, time()+60000,"/");		
}
else
{
	$S_No=$_POST['SubCat'];
	if($S_No==-1)
	{
		setcookie("SubCat2","All SubCategories", time()+60000,"/");
	}
	else
	{
		echo "$S_No"."hii";	
		mysql_connect("localhost","root","$_password_");
		mysql_select_db("CraigsList");
		$query="select SubCat,Cat from SubCat where S_No=\"$S_No\"";
		$result=mysql_query($query);
		$num=mysql_num_rows($result);
		$row=mysql_fetch_array($result);
		$SubCat2=$row['SubCat'];
		$Catsc2=$row['Cat'];
		echo "$SubCat2"."$Catsc2";
		setcookie("SubCat2",$SubCat2, time()+60000,"/");
		setcookie("Catsc2",$Catsc2, time()+60000,"/");
	}
}
header('Location:adlist.php');
?>
</body>
</html>
