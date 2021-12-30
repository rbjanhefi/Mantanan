<?php
include 'db_connect.php';

include 'login_cookie.php';

if(isset($_SESSION['email'])){
    $email=$_SESSION['email'];

    $result = mysqli_query($conn,"SELECT concat(firstname,' ',lastname) as names FROM users WHERE email ='$email'");
    $row = mysqli_fetch_assoc($result);
    
    $names = $row['names'];

    echo'
    <p class=" info-user" style="color:#9A0680;font-size:large; margin-top: 10px; margin-bottom:0px;">'.$names.'</p>
    <a href="../../model/login_out.php"><p class="text-light info-user" style="text-align:right; font-size:10px; ">LOGOUT</p></a>';
}
else{
    echo'
    <button class="Cbtn btn me-2 text-light" type="button" style="background-color: #9A0680;"><a href="login.php" style="text-decoration: none; color:white;">LOGIN</a></button>';
}
?>