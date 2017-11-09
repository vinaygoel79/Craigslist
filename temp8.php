<html>
<body>
<?php
$AddId=$_POST['AddId'];
setcookie("AddId4",$AddId, time()+60000,"/");
header('Location:view.php');
?>
</body>
</html>
