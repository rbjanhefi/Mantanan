<?php

//KONEKSI DATABASE
include 'db_connect.php';



if(isset($_COOKIE['one']) && isset($_COOKIE['two'])){
        
    $one = $_COOKIE['one'];
    $two = $_COOKIE['two'];

    $result = mysqli_query($conn,"SELECT email FROM users WHERE user_id ='$two'");
    $row = mysqli_fetch_assoc($result);

    if($one==hash('sha256',$row['email'])){
        $_SESSION['email']=$row['email'];
    }
    else{
        header('location:register.php');
    }
}

?>