<?php

if(isset($_COOKIE['User_login']) && !empty($_COOKIE['User_login']))
{

}
else {
    header("location:login.php");
}

?>