<?php 

session_start();

//KONEKSI DATABASE
include '../model/db_connect.php';

//VALIDASI LOGIN
if(isset($_POST['login'])){
    

    $email = $_POST['email'];
    $password = $_POST['password'];

    //VALIDASI EMAIL KOSONG
    if(empty($email)){
        header("location:../view/page/login.php?error=Enter an email !");
        exit();
    }
    //VALIDASI PASSWORD KOSONG
    else if(empty($password)){
        header("location:../view/page/login.php?error=Enter a password");
        exit();
    }
    //PENGECEKAN EMAIL DAN PASSWORD
    else{
        $sql = "SELECT * FROM users WHERE email ='$email'  and password = '$password'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_assoc($result);
            if($row['email']==$email && $row['password']==$password){
                
                //SESSION
                $_SESSION['email'] = $email;
                header("location:../index.php");

            }
            else{

                header("location:../view/page/login.php?error=Wrong password!");
                exit();
            }
        }
        else{
            header("location:../view/page/login.php?error=Wrong password!");
            exit();
        }
    }
}
?>