
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/font.css">
    <title>Mantanan - Login and Register </title>
  </head>
  <body>
    <div class="container d-flex justify-content-center align-items-center border shadow rounded" style="margin-top: 8%; width:50%; background: blueviolet;" >
        
        <div class="container login-info" style="color: white;">
            <h1 class="d-flex justify-content-center">Welcome Back!</h1>
            <label class="d-flex justify-content-center" for="">To keep connect with us please</label>
            <label class="d-flex justify-content-center" for="">login with your personal info</label>
        </div>
        
        <div class="container login-form"  style="background: white;">
            <form method="POST" class="row g-3" style="margin: 50px;" action="../model/login_chek.php"> 
                <h2 class="d-flex justify-content-center" style="margin-bottom: 30px;"> <span class="logo">M</span><span class="antanan" >antanan</span></h2>

                <!-- PHP ALERT -->
                <span>
                    <?php

                    if (isset($_GET['error'])){
                        echo "<p class='error alert alert-danger'>";
                        echo $_GET['error'];
                    }
                
                    ?>
                </span>

                <div class="form-group col-12">
                    <label for="" class="form-label">Email</label>
                    <input class="form-control" type="text" name="email" id="email" >
                </div>

                <div class="form-group">
                    <label class="form-label" for="">Password</label>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                
                <div class="form-group ">
                    <input class="form-check-input" type="checkbox" id="gridCheck" name="remember">
                    <label class="form-check-label" for="gridCheck">Remember Me</label>
                </div>

                <br><br><br>

                <div class="form-group d-flex justify-content-center">
                    <input type="submit" class="btn btn-primary" id="login" name="login" value="LOGIN" style="background: rebeccapurple; border: rebeccapurple;">
                    
                </div>

                <div class="form-group d-flex justify-content-center">
                    <p><a href="login.php" style="text-decoration: none;">Don't have account yet</a></p>
                </div>
                
              </form>           
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

