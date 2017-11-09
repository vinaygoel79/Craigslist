<html>
<body>
<?php
$Cat2=$_POST['Cat'];
if($Cat2=="All Categories")
	setcookie("sc2","1", time()+60000,"/");	
else
	setcookie("sc2","0", time()+60000,"/");	
setcookie("Cat2",$Cat2, time()+60000,"/");
setcookie("SubCat2","All SubCategories",time()+60000,"/");	
header('Location:adlist.php');
?>
</body>
</html>
