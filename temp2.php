<html>
<body>
<?php
$SubCat2=$_POST['SubCat1'];
setcookie("SubCat2",$SubCat2, time()+60000,"/");
setcookie("SC2","1", time()+60000,"/");	
setcookie("sc2","0", time()+60000,"/");	
setcookie("State2","All India", time()+60000,"/");
setcookie("City2","All Cities", time()+60000,"/");
header('Location:adlist.php');
?>
</body>
</html>
