<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Register</title>
  </head>

  <body>

    <div class="container d-flex justify-content-center align-items-center" style="width: 30%;"> 
        <form class="row g-3 border shadow p-3 rounded" method="POST" action="../model/register_action.php" name="formregister" id="formregister" style="margin-top: 10%;">
            <h1 class="d-flex justify-content-center">Mantanan</h1>
            <div class="" style="margin-top: 10%;">
            <span>
               <?php  
               if (isset($_GET['error']))
                {
                   echo "<p class='error alert alert-danger'>";
                   echo $_GET['error'];
                }
              ?>
            </span>
            </div>
            <div class="col-md-6" style="margin-top: 10%;">
              <label for="first-name" class="form-label">First Name</label>
              <input type="text" name="firstname" id="firstname" class="form-control">
            </div>
            <div class="col-md-6" style="margin-top: 10%;">
              <label for="last-name" class="form-label">Last Name</label>
              <input type="text" name="lastname" id="lastname" class="form-control">
            </div>
            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="col-12">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" id="password" class="form-control">
            </div>            
            <div class="col-12">
              <label for="confirm" class="form-label">Confirm password</label>
              <input type="password" name="confirm" id="confirm" class="form-control">
            </div>
            <div class="col-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="checkPassword">
                <label class="form-check-label" for="checkPassword">
                  Show password
                </label>
              </div>
            </div>
            <div class="col-12 d-flex justify-content-center" style="margin-top: 10%;">
              <button type="submit" name="register" value="register" id="register" class="btn btn-primary" style="background-color: blueviolet;">Submit</button>
            </div>
            <div class="col-12 d-flex justify-content-center">
              <a class="form-check-label" href="../login.php" for="checkPassword" style="text-decoration: none;">
                  Already have account?
              </a>
            </div>
          </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
