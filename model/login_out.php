<?php

session_start();
session_destroy();
setcookie("one","",time()-3600*30,'/');
setcookie("two","",time()-3600*30,'/');



header("location:../view/page/login.php");


?>