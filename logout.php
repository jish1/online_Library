<?php   
session_start();
setcookie("fashionstore", "", time() - 3600,"/");
session_destroy();
header("location:./index.php");
exit();
?>