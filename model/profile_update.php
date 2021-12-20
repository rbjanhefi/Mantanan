<?php

    session_start();
    //KONEKSI KE DATABASE
    include '../model/db_connect.php';

    if(isset($_POST['edit'])){
        $email = $_SESSION['email'];
        $username = $_POST['username'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        //$gender = $_POST['gender'];
        $birthdate = $_POST['birthdate'];
        $address = $_POST['address'];

        $query = "UPDATE users SET username = '$username',firstname = '$firstname',lastname = '$lastname',phone = '$phone',birthdate = '$birthdate',address = '$address' WHERE email = '$email'";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location:../view/profile.php?error= update data");
            header("location:../view/profile.php");
        }
        else{
            header("location:../view/profile.php?error= fail update data");
        
        
        }
        header("location:../view/profile.php?error= $username");

        exit();
        
       
            // $sql = "SELECT * FROM users WHERE email ='$email'";
            // $result = mysqli_query($conn, $sql);

            // if(mysqli_num_rows($result) == 1){
                
            //     $row = mysqli_fetch_assoc($result);
            //     if($row['password']==$oldpassword){      
                   
            //         if($newpassword == $confirmpassword){
            //             $query = "UPDATE users SET password='$newpassword' WHERE email = '$email'";
            //             $sql = mysqli_query($conn, $query);
            //             header("location:../view/password.php?error= password update");
            //             exit();
            //        }else{
            //             header("location:../view/password.php?error= confirm password incorrect");
            //             exit();
            //        }

            //     }else{
            //         header("location:../view/password.php?error= old password incorrect");
            //         exit();
            //     }
                
            // }else{


            //     // if($password == $confirm){
            //     //     $query = "INSERT INTO users(email,firstname,lastname,password) VALUES ('$email','$firstname','$lastname','$password')";
            //     //     $sql = mysqli_query($conn, $query);
            
            //     //     if($sql){
            //     //     header("location:../index.php");
            //     //     }else{
            //     //         header("location:../view/register.php?error=Registere failed");
            //     //     }
            //     //     exit();
                
            //     // }else{
            //     //     header("location:../view/register.php?error=password didn't match");
            //     //     exit();
            //     // }
            // }
    }    
?>