<?php
session_start(); 

if(!isset($_SESSION['email']) ){
  
    header("location:view/page/login.php");
  
}else{
    header('location:view/page/landingpage.php');
  }

    
?>


