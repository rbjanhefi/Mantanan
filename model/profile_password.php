<?php

    session_start();
    //KONEKSI KE DATABASE
    include 'db_connect.php';

    if(isset($_POST['update'])){
        $email = $_SESSION['email'];
        $oldpassword = md5($_POST['old-password']);
        $newpassword = md5($_POST['new-password']);
        $confirmpassword = md5($_POST['confirm-password']);

        //MENGECEK APAKAH PASSWORD LAMA SAMA
        if(empty($_POST['old-password']) || empty($_POST['new-password']) || empty($_POST['confirm-password'])){
            header("location:../view/page/profilePassword.php?error=Column cannto be empty!");
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
                        header("location:../view/page/profilePassword.php?success= change password successfull");
                        exit();
                   }else{
                        header("location:../view/page/profilePassword.php?error= confirm password didn't match");
                        exit();
                   }

                }else{
                    header("location:../view/page/profilePassword.php?error= old password incorrect");
                    exit();
                }
                
            }else{
                header("location:../view/page/profilePassword.php?error= failed change password");
                exit(); 

            }
        }
    }    
?>