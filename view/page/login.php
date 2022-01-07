
<?php
    session_start();
    


    //VALIDASI COOKIE
    include '../../model/login_cookie.php';


    if(isset($_SESSION['email'])){
        
        header('location:../../index.php');
        exit();
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        
    <link rel="stylesheet" href="../css/font.css">
    <link rel="stylesheet" href="../css/alert.css">

    <title>Mantanan - Login </title>
  </head>
  <body >
    <div class="container d-flex justify-content-center align-items-center border shadow rounded" style="margin-top: 50px; width:700px; background: #9A0680;" >
        
        <div class="container login-info" style="color: white;">
            <label class="d-flex justify-content-center" ><span class="wellcome">Welcome Back!</span> </label>
            <label class="d-flex justify-content-center" for="">To keep connect with us please</label>
            <label class="d-flex justify-content-center" for="">login with your personal info</label>
        </div>
        
        <div class="container login-form"  style="background: white;">
            <form method="POST" class="row g-3" style="margin: 10px;" action="../../model/login_chek.php"> 
                <h2 class="d-flex justify-content-center" style="margin-bottom: 10px; "><span class="logo">M</span><span class="antanan">antanan</span> </h2>

                <!-- PHP ALERT -->
               
                <div>
                <?php
                    if (isset($_GET['error'])){
                        
                        echo "<p class='error alert alert-danger' style='font-size:13px; width:277px; top: 75px;'>";
                        echo "<a name='close' href='login.php'><i class='close ri-close-line' style='left:255px;'></i></a>";
                        echo $_GET['error'];
                    }
                ?>
                </div>
                
                

                <div class="form-group" style="margin-top: 40px;">
                    <label for="" class="form-label fs-6">Email</label>
                    <input class="form-control" type="email" autocomplete="off" name="email" id="email" >
                </div>

                <div class="form-group">
                    <label class="form-label fs-6" for="">Password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                
                <div class="form-group ">
                    <input class="form-check-input" type="checkbox" id="remember" name="remember" value="true">
                    <label class="form-check-label fs-6" for="gridCheck">Remember Me</label>

                   
                </div>

                <br><br><br>

                <div class="form-group d-flex justify-content-center">
                    <input type="submit" class="btn btn-primary" id="login" name="login" value="LOGIN" style="background: #9A0680; border: #9A0680;">
                    
                </div><br>

                <div class="form-group d-flex justify-content-center">
                    <p><a href="register.php" style="text-decoration: none; color:#9A0680;">Don't have account yet</a></p>
                </div>
                
              </form>           
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
  </body>
</html>
