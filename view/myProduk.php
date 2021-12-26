<?php

session_start();

if (!isset($_SESSION['email'])) {
    header("location:../view/login.php");
}

//KONEKSI KE DATABASE

// // $result = mysqli_fetch_array($query);
// $username = $result['username'];
// $phone = $result['phone'];
// $img = $result['file_picture'];

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
        <link rel="stylesheet" href="./css/card.css">
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
                            <li >
                                <i class="ri-lock-password-line"></i>
                                <a href="./password.php">Change Password</a>
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
                            <li class="activeSideNav">
                                <i class="ri-apps-2-line"></i>
                                My Produk
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
                    <h3 class="mb-0">Produk</h3>
                    <p class="text-muted">Produk List</p>
                </div>
                <div class="produk p-2 ps-5 mt-3 d-flex flex-wrap">
                    <?php
                        include '../model/db_connect.php';

                        //MENAMPILKAN ID DAN USERNAME
                        $email = $_SESSION['email'];
                        $query = mysqli_query($conn, "select image_file,product_name,product_desc,product_price from products where email ='$email'");

                        while($row = mysqli_fetch_array($query)){
                            echo ' 
                            <div class="card shadow m-2" style="width: 12rem;">
                                <img src="data:image/png;base64,'.base64_encode($row["image_file"]).'" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">'.$row["product_name"].'</h5>
                                    <p class="card-text text-muted mb-0">'.$row["product_desc"].'</p>
                                    <p class="harga mt-1 mb-2">'.$row["product_price"].'</p>
                                    <div class="btnProduk mt-2 w-100 d-flex justify-content-evenly">
                                        <a href="./postProduk.php">
                                            <i class="ri-pencil-line"></i>
                                        </a>
                                        <div class="border-end"></div>
                                        <button>
                                            <i class="ri-delete-bin-line"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            ';
                        }
                    ?>
            </section>
        </main>
        <?php include "./footer.php" ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

    </body>

</html>