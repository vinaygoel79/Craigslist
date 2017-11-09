<html>
<body>
<?php
$LH=$_POST['LH'];
setcookie("LH",$LH, time()+60000,"/");
header('Location:adlist.php');
?>
</body>
</html>
