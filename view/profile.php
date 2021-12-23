<?php

session_start();

if (!isset($_SESSION['email'])) {
    header("location:../view/login.php");
}

//KONEKSI KE DATABASE
include '../model/db_connect.php';

//MENAMPILKAN ID DAN USERNAME
$email = $_SESSION['email'];
$query = mysqli_query($conn, "select * from users where email ='$email'");
$result = mysqli_fetch_array($query);
$user_id = $result['user_id'];
$username = $result['username'];
$firstname = $result['firstname'];
$lastname = $result['lastname'];
$password = $result['password'];
$phone = $result['phone'];
$gender = $result['gender'];
$birthdate = $result['birthdate'];
$address = $result['address'];


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
    <link rel="stylesheet" href="./css/profile.css">
    <link rel="stylesheet" href="./css/active.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/button.css">
    <link rel="stylesheet" href="./css/font.css">
    <title>Mantanan-Home</title>
</head>

<style>
    <?php include "./css/profile.css" ?>
</style>

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
                            <button class="Cbtn btn me-2 text-light" type="button" style="background-color: #9A0680;"><a href="../../model/log_out.php" style="text-decoration: none; color:white;">LOGOUT</a></button>
                        </span>
                    </div>
                </div>
            </nav>
            <div style="background-color: white; border:none; height:10px ; width:100%"></div>
        </div>
    </header>
    <main class="d-flex m-0">
        <section class="sideNav d-flex flex-column justify-content-between shadow rounded  m-3 p-2">
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
                        <li class="activeSideNav">
                            <i class="ri-user-6-line"></i>
                            Profile
                        </li>
                        <li>
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
                        <li><i class="ri-upload-line"></i>Upload Produk</li>
                        <li><i class="ri-apps-2-line"></i>My Produk</li>
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
                <h3 class="mb-0">Account</h3>
                <p class="text-muted">Complete your profile data</p>
            </div>
            <div class="data d-flex">
                <div class="dataForm">
                    <form class="ms-4 mt-3" method="POST" action="../model/profile_update.php">
                        <?php
                        if (isset($_GET['error'])) {
                            echo "<p class='error alert alert-danger'>";
                            // include "./popUp.php";
                            echo $_GET['error'];
                        }
                        ?>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-muted fs-6 ms-3 text-muted fs-6">Id</label>
                            <div class="col-sm-10 w-25 ms-5">
                                <input class="form-control" type="text" name="user_id" value="<?php echo $user_id ?>" aria-label="readonly input example" readonly>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-muted  ms-3 text-muted fs-6">Username</label>
                            <div class="col-sm-10 w-50 ms-5">
                                <input type="text" class="form-control" id="inputEmail3" name="username" value="<?php echo $username ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-10 w-50  d-flex align-items-center">
                                <label for="inputEmail3" class="col-sm-2 col-form-label w-50 text-muted  ms-3 fs-6">Name</label>
                                <input type="text" class="form-control " id="inputEmail3" placeholder="First name" name="firstname" value="<?php echo $firstname ?>">
                            </div>
                            <div class="col-sm-10 w-25">
                                <input type="text" class="form-control ms-1" id="inputEmail3" placeholder="Last name" name="lastname" value="<?php echo $lastname ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="staticEmail" class="col-sm-2 col-form-label text-muted  ms-3">Email</label>
                            <div class="col-sm-10 w-50 ms-5">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $email ?>">
                            </div>
                        </div>
                        <div class="row mb-3 ">
                            <label for="inputPassword3" class="col-sm-2 col-form-label text-muted fs-6 ms-3">Phone</label>
                            <div class="dropdown w-50 ms-5">
                                <input type="tel" class="form-control" id="inputEmail3" name="phone" value="<?php echo $phone ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-muted fs-6 ms-3">Gender</label>
                            <div class="col-sm-10 w-50 ms-5">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-muted fs-6 ms-3">Birthdate</label>
                            <div class="col-sm-10 w-50 ms-5">
                                <input type="date" class="form-control" id="inputEmail3" name="birthdate"  value="<?php echo $birthdate ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label text-muted fs-6 ms-3">Address</label>
                            <div class="col-sm-10 w-50 ms-5">
                                <input type="text" class="form-control" id="inputEmail3" name="address" value="<?php echo $address ?>">
                            </div>
                        </div>
                        <div class="d-grid mb-2 mt-5 gap-2 w-75 bottom-0  d-md-flex w-100 me-5 justify-content-end">
                            <input type="submit" class="Cbtn" id="edit" name="edit"  value="Simpan">
                            <button class="Cbtn btn-danger"  type="button">Cancel</button>
                        </div>
                    </form>
                </div>
                <div class="uploaudData d-flex flex-column justify-content-between">
                    <div class="imageProduk ms-4 mt-3">
                        <div class="w-100">
                            <input class="form-control uploadFile"  type="file" id="formFileMultiple">
                            <p class="text-muted fs-7 mb-0 mt-2 ">*Max file size 1MB</p>
                            <p class="text-muted fs-7">*Format file = JPG/JPEG</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="w-100 text-light d-flex p-lg-5 justify-content-evenly mt-5" style="background-color: #160040;">
        <div class="logo">
        <span class="logo">M</span><span class="antanan text-light fs-6" >antanan</span>
        </div>
        <div class="addres">
            <p>Alamat</p>
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
                    <p>+6285338562270</p>
                    <p>Mantanant@mantanan.info</p>
                </div>
            </div>
        </div>
    </footer>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</html>
<!-- <?php

// if (isset($_GET['error'])) {
//     echo "<p class='error alert alert-danger'>";
//     echo $_GET['error'];
// }

?> -->