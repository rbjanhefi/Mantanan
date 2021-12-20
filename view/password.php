<?php
  
    session_start();
    if(isset($_SESSION['email'])){
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
    $password = $result ['password'];
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../view/css/password.css" rel="stylesheet">
    <title>Mantanan - Change Password</title>
  </head>

  <body class="d-flex justify-content-center mt-5">    
    <div style="width:18%;">
      
      <!-- MENU -->
      <div >
        <label for="" style="margin-top: 30px; margin-bottom: 30px;"></label>
      </div>
      <div style=" height:5px; background:grey; border-radius: 3px;" ></div>
      <div>
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
    <form method="POST" action="../model/update_pass.php" style="width:73%;">
      
      <!-- TITLE -->
      <div class="profile-title" style=" height:90px; background:#9A0680; " >
        <h1 for="" >Change Password</h6>
        <label for="">enter your password for security</label>
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
          <h5 for="">Email</h5>
          <h5 for="">Old Password</h5>
          <h5 for="">New Password</h5>
          <h5 for="">Confirm Password</h5>
      </div>  
      <div style="width:44%; height:500px;">
          <label class="data" for=""><?php echo $user_id?></label><br>
          <label class="data" for=""><?php echo $username?></label><br>
          <label class="data" for=""><?php echo $email?></label><br>
          <input type="password" name="old-password" class="data"> <br>
          <input type="password" name="new-password" class="data"> <br>
          <input type="password" name="confirm-password" class="data"> <br>
      </div>
      </div>
      <div class="d-flex justify-content-center" style=" height:90px; background:#9A0680;" >
          <div class="">
            <input  type="submit" class="btn btn-primary" id="submit" name="update" value="update" style="background: rebeccapurple; border: rebeccapurple;"> 
           </div>  
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>

</html>