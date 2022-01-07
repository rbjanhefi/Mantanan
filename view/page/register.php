<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    
    <link rel="stylesheet" href="../css/font.css">
    <link rel="stylesheet" href="../css/alert.css">
    <title>Mantanan - Register</title>
  </head>

  <body>

    <div class="container d-flex flex-column justify-content-center align-items-center" style="width: 650px;"> 
        <form class="row g-3 border shadow p-3 rounded" method="POST" action="../../model/register_action.php" name="formregister" id="formregister" style="margin-top: 35px; margin-bottom:35px; width: 480px;">
        <h2 class="d-flex justify-content-center" style="margin-bottom: 10px; "><span class="logo">M</span><span class="antanan">antanan</span> </h2>
            <div class="" style="margin-top: 35px;">
            <?php
                    if (isset($_GET['error'])){
                        
                        echo "<p class='error alert alert-danger' style='font-size:13px; width: 430px; top: 60px; '>";
                        echo "<a name='close' href='register.php'><i class='close ri-close-line' style='left: 405px;'></i></a>";
                        echo $_GET['error'];
                    }
                    if(isset($_GET['success'])){
                        
                      echo "<p class='success alert alert-success' style='font-size:13px; width: 430px; top: 60px; '>";
                      echo "<a name='close' href='login.php'><i class='login ri-arrow-right-line' style='left: 405px;'></i></a>";
                      echo $_GET['success'];
                  }

                ?>
            </div>
            <div class="col-md-6 " style="margin-top: 5px;">
              <label for="first-name" class="form-label fs-6">First Name</label>
              <input type="text" autocomplete="off" name="firstname" id="firstname" class="form-control">
            </div>
            <div class="col-md-6 " style="margin-top: 5px;">
              <label for="last-name" class="form-label fs-6">Last Name</label>
              <input type="text" name="lastname" autocomplete="off" id="lastname" class="form-control">
            </div>
            <!-- <div class="col-12 "  style="margin-top: 5px;">
              <label for="username" class="form-label fs-6">Username</label>
              <input type="text" class="form-control" name="username" id="username">
            </div> -->
            <div class="col-12 "  style="margin-top: 5px;">
              <label for="email " class="form-label fs-6">Email</label>
              <input type="email" autocomplete="off" class="form-control" name="email" id="email">
            </div>
            <div class="col-12" style="margin-top: 5px;">
              <label for="password" class="form-label fs-6">Password</label>
              <input type="password" name="password" id="password" class="form-control">
            </div>            
            <div class="col-12" style="margin-top: 5px;">
              <label for="confirm" class="form-label fs-6">Confirm password</label>
              <input type="password" name="confirm" id="confirm" class="form-control">
            </div>
            <div class="col-12 d-flex justify-content-center" style="margin-top: 80px;">
              <button type="submit" name="register" value="register" id="register" class="btn btn-primary fs-6" style="background-color: #9A0680; border:#9A0680;">Submit</button>
            </div>
            <div class="col-12 d-flex justify-content-center" style="margin-top: 10px;">
              <a class="form-check-label" href="login.php" for="checkPassword" style="text-decoration: none; color:#9A0680;">
                  Already have account?
              </a>
          </div> 
          </form>
          
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>