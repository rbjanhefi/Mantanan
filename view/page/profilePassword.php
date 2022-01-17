<?php

    session_start();

    if (!isset($_SESSION['email'])) {
        header("location:login.php?error=Please login first!");
    }

    //MENAMPILKAN INFORMASI PASSWORD
    include '../../model/profile_show.php';

    //CEK DATA APAKAH SUDAH LENGKAP
    include '../../model/profile_chek.php';
    
    
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
    <!-- <link href="../css/password.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="../css/active.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/button.css">
    <link rel="stylesheet" href="../css/font.css">
    <link rel="stylesheet" href="../css/alert.css">

    <title>Mantanan - Change Password</title>
  </head>
  <div class="nav-main sticky-top">
    <nav class="navbar navbar-expand navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <span class="logo">M</span><span class="antanan text-light fs-6" >antanan</span>
                </a>
                <div class="collapse navbar-collapse text-light" id="navbarText">
                    <ul class="navbar-nav mx-auto d-flex justify-content-between w-25 me-auto">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="landingpage.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="home.php">Shop</a>
                        </li>
                        <li class="nav-item activee">
                            <a class="nav-link box text-activee" aria-current="page" href="profile.php">Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="about.php">About</a>
                        </li>
                    </ul>
                    <!-- <form class="d-flex me-3">
                        <input class="form-control me-2 h-50" type="search" placeholder="Search" aria-label="Search">
                    
                    </form> -->
                    <!-- <div class="" style="width:50px; height:50px">
                        <i style="width:40px;" class ="ri-account-circle-fill" >test</i>
                    </div> -->
                    <span class="navbar-text" style="margin-left:20px">
                        <!-- <button class="Cbtn btn me-2 text-light" type="button" style="background-color: #9A0680;"><a href="../../model/log_out.php" style="text-decoration: none; color:white;">LOGOUT</a></button> -->
                        <!-- <p class=' info-user' style="color:#9A0680;font-size:large; margin-top: 10px; margin-bottom:0px;">Rizqi Bio Janhefi</p>
                        <a href=""><p class='text-light info-user' style='text-align:right; font-size:10px; '>LOGOUT</p></a> -->
                        <?php 
                        
                        include '../../model/navbar_user.php';
                        
                        ?>
                    </span>
                </div>
            </div>
        </nav>
        <div style="background-color: white; border:none; height:10px ; width:100%"></div>
</div>

  <body>
    <main class="d-flex m-0">
    <section class="sideNav d-flex flex-column justify-content-between shadow rounded  m-3 p-2">
            <div class="profile border-bottom rounded d-flex align-items-center p-2">
                <div class="profile_img">
                    <?php
                    if($img==null){
                        echo'
                        <img src="../../asset/img/user.png" alt="">';
                    }
                    else{
                        echo'
                        <img src="data:image/jpeg;base64,'.base64_encode($img).'" alt="">';       
                    }

                    ?>
                </div>
                <div class="detail ms-3 h-75 d-flex flex-column">
                    <p class="m-0"><?php echo"$names"?></p>
                    <p class="text-muted"><?php echo"$email"?></p>
                </div>
            </div>
            <div class="navigasi">
                <div class="account border-bottom">
                    <div class="title m-2 text-muted">
                        <p>ACCOUNT</p>
                    </div>
                    <ul>
                        <li >
                        <a href="profile.php"><i class="ri-user-6-line"></i>Profile</a>
                            
                        </li>
                        <li class="activeSideNav">
                            <i class="ri-lock-password-line"></i>Change Password
                            
                        </li>
                    </ul>
                </div>
                <div class="product">
                    <div class="title m-2 text-muted">
                        <p>PRODUK</p>
                    </div>
                    <ul>
                        <li>
                            <a href="productUpload.php"><i class="ri-upload-line"></i>Upload Product</a>
                            
                        </li>
                        <li>
                        <a href="product.php"><i class="ri-apps-2-line"></i>My Product</li></a>
                            
                    </ul>
                </div>
            </div>
            <div class="logout ms-2 mb-1">
            <a class="Cbtn d-flex align-items-center justify-content-center" href="../../model/login_out.php">Logout
                    <i class="ri-logout-circle-r-line"></i>
                </a>
            </div>
        </section>
        <section class="content shadow m-3 p-2">
                <div class="title border-bottom p-1 d-flex flex-column align-items-center">
                    <h3 class="mb-0">Password</h3>
                    <p class="text-muted">Change your password</p>
                </div>
                <form method="POST" action="../../model/profile_password.php" class="p-4 ms-5">
                  <div class="" style="margin-top: 80px;">
                              <?php
                                  if (isset($_GET['error'])){
                                      
                                      echo "<p class='error alert alert-danger' style='font-size:13px; width: 650px; top: 130px; '>";
                                      echo "<a name='close' href='profilePassword.php'><i class='close ri-close-line' style='left: 610px;'></i></a>";
                                      echo $_GET['error'];
                                  }
                                  if(isset($_GET['success'])){
                                      
                                    echo "<p class='success alert alert-success' style='font-size:13px; width: 650px; top: 130px; '>";
                                    echo "<a name='close' href='profilePassword.php'><i class='login ri-close-line' style='left: 610px;'></i></a>";
                                    echo $_GET['success'];
                                }

                              ?>
                          </div>
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
                            <input type="password" class="form-control" id="inputEmail3" name="old-password">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label text-muted  ms-3 text-muted fs-6">New
                            Password</label>
                        <div class="col-sm-10 w-50 ms-5">
                            <input type="password" class="form-control" id="inputEmail3" name="new-password">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3"
                            class="col-sm-2 col-form-label text-muted  ms-3 text-muted fs-6">Confirm Password</label>
                        <div class="col-sm-10 w-50 ms-5">
                            <input type="password" class="form-control" id="inputEmail3" name="confirm-password">
                        </div>
                    </div>
                    <div class="d-grid mb-2 mt-5 gap-2 w-75 bottom-0  d-md-flex justify-content-center">
                        <input type="submit" class="Cbtn me-2" id="edit" name="update" value="update">
                    </div>
                </form>
            </section>
    </main>

    <footer class="w-100 text-light d-flex p-lg-5 justify-content-evenly mt-5" style="background-color: #160040;">
        <div class="logo">
        <span class="logo">M</span><span class="antanan text-light fs-6" >antanan</span>
        </div>
        <div class="addres">
            <p>Address</p>
            <p>Sleman Yogyakarta</p>
        </div>
        <div class="contact">
            <p>Contact</p>
            <div class="d-flex">
                <div class="contactName">
                    <p>Whatsapp </p>
                    <p>Email</p>
                </div>
                <div class="detailContact ms-lg-4">
                    <p>+62 812 3457 8944</p>
                    <p>Mantanant@mantanan.info</p>
                </div>
            </div>
        </div>
    </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
                                
  </body>

</html>
