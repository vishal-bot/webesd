<?php
setcookie("User_login","",time()-3600,"/");
header("location:index.php");

?>