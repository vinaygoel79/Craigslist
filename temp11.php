<html>
<body>
<?php
$LH2=$_POST['LH2'];
setcookie("LH2",$LH2, time()+60000,"/");
header('Location:userads.php');
?>
</body>
</html>
