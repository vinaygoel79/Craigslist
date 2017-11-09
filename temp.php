<html>
<body>
<?php
$Cat2=$_POST['Cat'];
if(!isset($Cat2))
	$Cat2=$_GET['Cat'];
setcookie("Cat2",$Cat2, time()+60000,"/");
header('Location:subcat.php#x');
?>
</body>
</html>
