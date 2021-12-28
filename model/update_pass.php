<?php

    session_start();
    //KONEKSI KE DATABASE
    include '../model/db_connect.php';

    if(isset($_POST['update'])){
        $email = $_SESSION['email'];
        $oldpassword = $_POST['old-password'];
        $newpassword =$_POST['new-password'];
        $confirmpassword = $_POST['confirm-password'];

        //MENGECEK APAKAH PASSWORD LAMA SAMA
        if(empty($oldpassword) || empty($newpassword) || empty($confirmpassword)){
            header("location:../view/password.php?error=Undefined cannot be left empty");
            // header('location:../view/login.php');
            exit();
        }
        else{
            $sql = "SELECT * FROM users WHERE email ='$email'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) == 1){
                
                $row = mysqli_fetch_assoc($result);
                if($row['password']==$oldpassword){      
                   
                    if($newpassword == $confirmpassword){
                        $query = "UPDATE users SET password='$newpassword' WHERE email = '$email'";
                        $sql = mysqli_query($conn, $query);
                        header("location:../view/password.php?error= password update");
                        exit();
                   }else{
                        header("location:../view/password.php?error= confirm password incorrect");
                        exit();
                   }

                }else{
                    header("location:../view/password.php?error= old password incorrect");
                    exit();
                }
                
            }else{


                // if($password == $confirm){
                //     $query = "INSERT INTO users(email,firstname,lastname,password) VALUES ('$email','$firstname','$lastname','$password')";
                //     $sql = mysqli_query($conn, $query);
            
                //     if($sql){
                //     header("location:../index.php");
                //     }else{
                //         header("location:../view/register.php?error=Registere failed");
                //     }
                //     exit();
                
                // }else{
                //     header("location:../view/register.php?error=password didn't match");
                //     exit();
                // }
            }
        }
    }    
?>