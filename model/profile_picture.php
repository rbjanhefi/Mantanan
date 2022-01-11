<?php

    session_start();
    //KONEKSI KE DATABASE
    include '../model/db_connect.php';
   
    if (isset($_POST['save'])){
        if($_FILES['profile_picture']['name'] != '' ){
            $email = $_SESSION['email'];
        //NAMA GAMBAR
        $image_name = $_FILES['profile_picture']['name'];

        //UKURAN GAMBAR
        $image_size = $_FILES['profile_picture']['size'];
        
        //UKURAN GAMBAR
        $image_type = $_FILES['profile_picture']['type'];

        // $fileinfo = @getimagesize($_FILES["profile_picture"]["tmp_name"]);
        // //LEBAR GAMBAR
        // $width = $fileinfo[0];
        // //TINGGI GAMBAR
        // $height = $fileinfo[1];


        //FILE GAMBAR
        $profile_picture=addslashes(file_get_contents($_FILES['profile_picture']['tmp_name']));

        //VALIDASI DAN PROSES UPLOAD FILE
        if($image_size > 1000000){
            
            header("location:../view/page/profile.php?error=Failed, Maximum image size 1MB");

        }
        else if($image_type != 'image/jpg' && $image_type != 'image/jpeg'){
            header("location:../view/page/profile.php?error=Failed, Format file must jpg/jpeg!");
        }
        else{
            $query = "UPDATE users SET picture = '$image_name',file_picture = '$profile_picture' WHERE email='$email'";
            $sql=mysqli_query($conn,$query);
            
            if($sql){
                header("location:../view/page/profile.php?success=Image upload has been successfull");
            }else{
                header("location:../view/page/profile.php?error=Image upload failed");
            }
        }
        }
        else{
            header("location:../view/page/profile.php?error=No file chosen.");
        }
    }    
    
?>