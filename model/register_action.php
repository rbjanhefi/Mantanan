<?php 

//KONEKSI DATABASE
include 'db_connect.php';

//VALIDASI REGISTER
if(isset($_POST['register'])){
    
    include 'register_setid.php';
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $confirm = md5($_POST['confirm']);

//VALIDASI REGISTER KOSONG
    if(empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($confirm)){
        header("location:../view/page/register.php?error=Data cannot be empty!");
        exit();
    }
    // MENGECEK APAKAH ADA EMAIL SUDAH TERDAFTAR
    else{


        $sql = "SELECT * FROM users WHERE email ='$email'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) >= 1){

            $row = mysqli_fetch_assoc($result);
            if($row['email']==$email){      
                header("location:../view/page/register.php?error=Email has been registered !");
                exit();
            }
            
        }
        else{
            if($password == $confirm){
                $query = "INSERT INTO users(user_id,email,firstname,lastname,password,) VALUES ('$userid','$email','$firstname','$lastname','$password')";
                $sql = mysqli_query($conn, $query);
        
                if($sql){
                    header("location:../view/page/register.php?success=Register succes !");
                    exit();
                }else{
                    header("location:../view/page/register.php?error=Register failed !");
                    exit();
                }
                exit();
            
            }else{
                header("location:../view/page/register.php?error=password didn't match !");
                exit();
            }
        }
    }
}
?>