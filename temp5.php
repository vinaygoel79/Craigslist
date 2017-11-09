<html>
<body>
<?php
$State2=$_POST['State'];
if($State2=="All India")
	setcookie("SC2","1", time()+60000,"/");	
else
	setcookie("SC2","0", time()+60000,"/");	
setcookie("State2",$State2, time()+60000,"/");	
setcookie("City2","All Cities",time()+60000,"/");
header('Location:adlist.php');
?>
</body>
</html>
