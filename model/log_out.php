<?php

session_start();
session_destroy();

setcookie('user','',time()-3600);
header("location:../view/page/login.php");

?>