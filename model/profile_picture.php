<?php

    session_start();
    //KONEKSI KE DATABASE
    include '../model/db_connect.php';
    
    if (isset($_POST['save'])){
        $email = $_SESSION['email'];
        //NAMA GAMBAR
        $image_name = $_FILES['profile_picture']['name'];

        //UKURAN GAMBAR
        $image_size = $_FILES['profile_picture']['size'];

        $fileinfo = @getimagesize($_FILES["profile_picture"]["tmp_name"]);
        //LEBAR GAMBAR
        $width = $fileinfo[0];
        //TINGGI GAMBAR
        $height = $fileinfo[1];


        //FILE GAMBAR
        $profile_picture=addslashes(file_get_contents($_FILES['profile_picture']['tmp_name']));

        //VALIDASI DAN PROSES UPLOAD FILE
        if($image_size > 1000000){
            echo 'Ukuran gambar melebihi 80kb';
        }else{
            $query = "UPDATE users SET picture = '$image_name',file_picture = '$profile_picture' WHERE email='$email'";
            $sql=mysqli_query($conn,$query);
            
            if($sql){
                echo "success";
            }else{
                echo "error";
            }
        }
    }    
    
?>