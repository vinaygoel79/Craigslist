<html>
<body>
<?php
$Email2=$_POST['Email2'];
setcookie("Email2",$Email2, time()+60000,"/");
header('Location:userads.php');
?>
</body>
</html>
