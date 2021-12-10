<?php 

session_start();

if(isset($_SESSION['email'])){
    header("location:../index.php");
}

include 'db_conn.php';


//KONEKSI DATABASE
include '../model/db_connect.php';

//VALIDASI LOGIN
if(isset($_POST['login'])){
    

    $email = $_POST['email'];
    $password = $_POST['password'];

    //VALIDASI EMAIL KOSONG
    if(empty($email)){
        header("location:../view/login.php?error=Please enter the email/username");
        exit();
    }
    //VALIDASI PASSWORD KOSONG
    else if(empty($password)){
        header("location:../view/login.php?error=Password Cannot be empty");
        exit();
    }
    //PENGECEKAN EMAIL DAN PASSWORD
    else{
        $sql = "SELECT * FROM users WHERE email ='$email'  and password = '$password'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_assoc($result);
            if($row['email']==$email && $row['password']==$password){
                $_SESSION['email'] = $row['email'];
 
                header("location:../index.php");
                exit();

            }else{

                header("location:../view/login.php?error=Salah username atau password ya!");
                exit();
            }
        }else{
            header("location:../view/login.php?error=Salah 2 susername atau password ya!");
            exit();
        }
    }
}