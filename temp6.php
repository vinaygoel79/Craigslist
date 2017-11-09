<html>
<body>
<?php
$SC=$_COOKIE['SC2'];
if($SC==0)
{
	$City2=$_POST['City'];
	setcookie("City2",$City2, time()+60000,"/");		
}
else
{
	$AddId=$_POST['City'];
	if($AddId==-1)
	{
		setcookie("City2","All Cities", time()+60000,"/");
	}
	else
	{
		echo "$AddId"."hii";	
		mysql_connect("localhost","root","8584");
		mysql_select_db("CraigsList");
		$query="select City,State from Ads where AddId=\"$AddId\"";
		$result=mysql_query($query);
		$num=mysql_num_rows($result);
		$row=mysql_fetch_array($result);
		$City2=$row['City'];
		$StateSC2=$row['State'];
		echo "$City2"."$StateSC2";
		setcookie("City2",$City2, time()+60000,"/");
		setcookie("StateSC2",$StateSC2, time()+60000,"/");
	}
}

header('Location:adlist.php');
?>
</body>
</html>
