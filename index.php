<?php 
session_start();
include('config/db_conn.php');
if (!isset($_SESSION['email'])) {
    header("location:view/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=a, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="model/log_out.php">LOGOUT</a>
</body>
</html>
