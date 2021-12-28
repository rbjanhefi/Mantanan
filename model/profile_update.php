<?php

    session_start();
    //KONEKSI KE DATABASE
    include 'db_connect.php';

    if(isset($_POST['edit'])){
        $email = $_SESSION['email'];
        $username = $_POST['username'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];
        $birthdate = $_POST['birthdate'];
        $address = $_POST['address'];

        $query = "UPDATE users SET username = '$username',firstname = '$firstname',lastname = '$lastname',phone = '$phone',gender='$gender', birthdate = '$birthdate' ,address = '$address' WHERE email = '$email'";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location:../view/page/profile.php?success= Data updated succesfully");
            exit();
           
        }
        else{
            header("location:../view/page/profile.php?error= Data failed to update");
            exit();
        
        }
        exit();
        
    }    
?>