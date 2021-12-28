<?php
  
  session_start();

  if (!isset($_SESSION['email'])) {
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
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/changePassword.css">
        <link rel="stylesheet" href="./css/active.css">
        <link rel="stylesheet" href="./css/navbar.css">
        <link rel="stylesheet" href="./css/button.css">
        <link rel="stylesheet" href="./css/font.css">
        <link rel="stylesheet" href="./css/profile.css">
        <title>Hello, world!</title>
    </head>

    <body>
        <header class="sticky-top">
            <div class="nav-main ">
                <nav class="navbar  navbar-expand navbar-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <span class="logo">M</span><span class="antanan text-light fs-6" >antanan</span>
                        </a>
                        <div class="collapse navbar-collapse text-light" id="navbarText">
                            <ul class="navbar-nav mx-auto d-flex justify-content-between w-25 me-auto">
                                <li class="nav-item">
                                    <a class="nav-link text-light" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="#">Shop</a>
                                </li>
                                <li class="nav-item activee">
                                    <a class="nav-link box text-activee" href="#">Account</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="#">About</a>
                                </li>
                            </ul>
                            <form class="d-flex me-3">
                                <input class="form-control me-2 h-50" type="search" placeholder="Search" aria-label="Search">
                            </form>
                            <span class="navbar-text">
                                <button class="Cbtn btn me-2" type="button" style="background-color: #9A0680;">
                                    <a href="../model/log_out.php" class="text-light" style="text-decoration: none; color:white;">LOGOUT</a>
                                </button>
                            </span>
                        </div>
                    </div>
                </nav>
                <div style="background-color: white; border:none; height:10px ; width:100%"></div>
            </div>
        </header>
        <main class="d-flex m-0">
            <section class="sideNav  d-flex flex-column justify-content-between shadow rounded  m-3 p-2">
                <div class="profile border-bottom rounded d-flex align-items-center p-2">
                    <div class="profile_img">
                        <img src="../asset/img/profile.jpg" alt="">
                    </div>
                    <div class="detail ms-3 h-75 d-flex flex-column">
                        <p class="m-0">Bio Akhyar Janhefi</p>
                        <p class="text-muted">081373817361</p>
                    </div>
                </div>
                <div class="navigasi">
                    <div class="account border-bottom">
                        <div class="title m-2 text-muted">
                            <p>ACCOUNT</p>
                        </div>
                        <ul>
                            <li>
                                <i class="ri-user-6-line"></i>
                                <a href="./profile.php">Profile</a>
                            </li>
                            <li class="activeSideNav">
                                <i class="ri-lock-password-line"></i>
                                Change Password
                            </li>
                        </ul>
                    </div>
                    <div class="product">
                        <div class="title m-2 text-muted">
                            <p>PRODUK</p>
                        </div>
                        <ul>
                            <li>
                                <i class="ri-upload-line"></i>
                                <a href="./postProduk.php">Upload Produk</a>
                                
                            </li>
                            <li>
                                <i class="ri-apps-2-line"></i>
                                <a href="./myProduk.php">My Produk</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="logout ms-2 mb-1">
                    <button class="Cbtn">Logout
                        <i class="ri-logout-circle-r-line"></i>
                    </button>
                </div>
            </section>
            <section class="content shadow m-3 p-2">
                <div class="title border-bottom p-1 d-flex flex-column align-items-center">
                    <h3 class="mb-0">Password</h3>
                    <p class="text-muted">Change your password</p>
                </div>
                <form method="POST" action="../model/update_pass.php" class="p-4 ms-5">
                    <span>
                            <?php  
                            if (isset($_GET['error']))
                                {
                                echo "<p class='error alert alert-danger'>";
                                echo $_GET['error'];
                                }
                            ?>
                    </span>
                    <div class="row mb-3 mt-4">
                        <label for="inputEmail3"
                            class="col-sm-2 col-form-label text-muted fs-6 ms-3 text-muted fs-6">Id</label>
                        <div class="col-sm-10 w-25 ms-5">
                            <input class="form-control" type="text" name="user_id" aria-label="readonly input example"
                                value="<?php echo $user_id?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label text-muted  ms-3">Username</label>
                        <div class="col-sm-10 w-50 ms-5">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $username?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="staticEmail" class="col-sm-2 col-form-label text-muted  ms-3">Email</label>
                        <div class="col-sm-10 w-50 ms-5">
                            <input type="email" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $email?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label text-muted  ms-3 text-muted fs-6">Old
                            Password</label>
                        <div class="col-sm-10 w-50 ms-5">
                            <input type="text" class="form-control" id="inputEmail3" name="old-password">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label text-muted  ms-3 text-muted fs-6">New
                            Password</label>
                        <div class="col-sm-10 w-50 ms-5">
                            <input type="text" class="form-control" id="inputEmail3" name="new-password">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3"
                            class="col-sm-2 col-form-label text-muted  ms-3 text-muted fs-6">Confirm Password</label>
                        <div class="col-sm-10 w-50 ms-5">
                            <input type="text" class="form-control" id="inputEmail3" name="confirm-password">
                        </div>
                    </div>
                    <div class="d-grid mb-2 mt-5 gap-2 w-75 bottom-0  d-md-flex justify-content-end">
                        <input type="submit" class="Cbtn me-2" id="edit" name="update" value="update">
                    </div>
                </form>
            </section>
        </main>
        <?php include "./footer.php" ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

    </body>

</html>
