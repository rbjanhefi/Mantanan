<?php

  session_start();

  if(!isset($_SESSION['email']) ){
    header("location:../view/login.php");
  }

  //KONEKSI KE DATABASE
  include '../model/db_connect.php';

  //MENAMPILKAN ID DAN USERNAME
  $email = $_SESSION['email'];
  $query = mysqli_query($conn,"select * from users where email ='$email'");
  $result = mysqli_fetch_array($query);
  $user_id = $result ['user_id'];
  $username = $result ['username'];
  $firstname = $result ['firstname'];
  $lastname = $result ['lastname'];
  $password = $result ['password'];
  $phone = $result ['phone'];
  $gender = $result ['gender'];
  $birthdate = $result ['birthdate'];
  $address = $result ['address'];


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../view/css/profile.css" rel="stylesheet">
    <title>Mantanan - Profile</title>
  </head>

  <body class="d-flex justify-content-center mt-5">    
    <div style="width:18%;">
      
      <!-- MENU -->
      <div >
        <label for="" style="margin-top: 30px; margin-bottom: 30px;">Feizal Reza bin feizal</label>
      </div>
      <div style=" height:5px; background:grey; border-radius: 3px;" ></div>
      <div  >
        <div class="menu">
          <ul class="menu-profile list-group" style="list-style: none;">
            <h4><a class="sub-menu" href=" " >ACCOUNT</a></h4>
              <li class="list-menu-profile list"><a href="">Profile</a></li>
              <li class="list-menu-profile list"><a href="">Change Password</a></li>
            <h4><a class="sub-menu" href=" " >PRODUCT</a> </h4>
              <li class="list-menu-profile list"><a href="">Product List</a></li>
            <h4><a class="sub-menu" href=" " >LOGOUT</a></h4>
          </ul>
        </div>
      </div>
    </div>

    <div style="width:1%; "></div>
    <!-- PROFILE -->
    <form method="POST" action="../model/profile_update.php" style="width:73%;">
      
      <!-- TITLE -->
      <div class="profile-title" style=" height:90px; background:#9A0680; " >
        <h1 for="" >My Profile</h6>
        <label for="">Complete your profile data</label>
        <div  style=" height:5px; background:grey; border-radius: 3px; width: 80%; text-align: center;"  ></div>
      </div>
      <span>
               <?php  
               if (isset($_GET['error']))
                {
                   echo "<p class='error alert alert-danger'>";
                   echo $_GET['error'];
                }
              ?>
      </span>
      <!-- DATA -->
      <div class="d-flex justify-content-center" style=" background:#9A0680;" >
        <div class="profile-info" style="width:29%; height:500px;  ">
          <h5 for="">ID</h5>
          <h5 for="">Username</h5>
          <h5 for="">Name</h5>
          <h5 for="">Email</h5>
          <h5 for="">Phone</h5>
          <h5 for="">Gender</h5>
          <h5 for="">Birthdate</h5>
          <h5 for="">Address</h5>
        </div>
        <div style="width:44%; height:500px;">
          <label style="margin-top: 20px;" class="data" for="" name="user_id"><?php echo $user_id ?></label> <br>

          <input type="text" class="data-input" name="username" value="<?php echo $username ?>" ><br>
          
          <input type="text" class="data-input" name="firstname" value="<?php echo $firstname ?>">
          <input style="margin-left: 20px;" type="text" class="data-input" name="lastname" value="<?php echo $lastname ?>"> <br>
          <label class="data" for="" name="email"><?php echo $email?></label> <br>
          <input class="data-input" type="text" name="phone" value="<?php echo $phone ?>"><br>

          <?php
          if($gender=="female"){
            $fgender=true;
          }
          else if($gender=="male"){
            $mgender=true;
          }
          else{
            $fgender=false;
            $mgender=false;
          }
          ?>
          <input class="data-radio" name="gender" type="radio" value="<?php echo $fgender ?>">
          <label for="">Female</label>
          <input class="data-radio" name="gender" type="radio" value="<?php echo $mgender ?>">
          <label for="">Male</label>
          <br><input class="data-input" type="date" name="birthdate" value="<?php echo $birthdate ?>">
          <br><input class="data-input" type="text" name="address" value=<?php echo $address ?>>
        </div>
        <div style="width:25%; height:500px; ">
          <div class="gambar">
            <div class="contoh">Ini yang gambar</div>
            <input type="submit" value="Choose Image">
            <label for="">Max image size : 1MB</label>
            <label for="">Format image: JPG, JPEG</label>
         </div>
        </div>
      </div>

      <!-- BUTTON -->
      <div class="d-flex justify-content-center" style=" height:90px; background:#9A0680;" >
        <div class="">
          <input type="submit" class="btn btn-primary" id="edit" name="edit" value="edit" style="background: rebeccapurple; border: rebeccapurple;">  
        </div>

      </div>
        </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>

</html>