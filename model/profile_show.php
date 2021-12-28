<?php

//KONEKSI KE DATABASE
include '../../model/db_connect.php';

//MENAMPILKAN ID DAN USERNAME
$email = $_SESSION['email'];
$query = mysqli_query($conn, "select * from users where email ='$email'");
$result = mysqli_fetch_array($query);
$user_id = $result['user_id'];
$username = $result['username'];
$firstname = $result['firstname'];
$lastname = $result['lastname'];
$password = $result['password'];
$phone = $result['phone'];
$gender = $result['gender'];
$birthdate = $result['birthdate'];
$address = $result['address'];
$img = $result['file_picture'];

?>