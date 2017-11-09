<html>
<body>
<?php
$Cat4=$_POST['Cat4'];
setcookie("Cat4",$Cat4, time()+60000,"/");
header('Location:postanad.php');
?>
</body>
</html>
