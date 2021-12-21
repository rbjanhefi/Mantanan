<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/landingpage.css">
    <link rel="stylesheet" href="../css/active.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/button.css">
    <link rel="stylesheet" href="../css/font.css">
    <title>Mantanan-Home</title>
</head>
<div class="nav-main sticky-top">
    <nav class="navbar navbar-expand navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <span class="logo">M</span><span class="antanan text-light fs-6" >antanan</span>
                </a>
                <div class="collapse navbar-collapse text-light" id="navbarText">
                    <ul class="navbar-nav mx-auto d-flex justify-content-between w-25 me-auto">
                        <li class="nav-item activee">
                            <a class="nav-link box text-activee" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Account</a>
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

    <body>
    
    <section class="banner">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner position-relative">
                <div class="carousel-item active">
                    <img src="../../asset/img/donation1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../asset/img/donation2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../asset/img/donation3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <div class="titleCaroussel position-absolute top-0 text-light">
                <h1>Ayo Jual Barang Bekas Anda Sekarang</h1>
                <p>Barang bekas yang masih layak pakai dapat anda jual/donasikan kepada orang yang membutuhkan. <br>Ayo jual barang bekas anda sekarang!</p>
                <button type="button" class="btn text-light"style="background-color: #9A0680;"><a href="login.php" style="text-decoration: none; color:white;">LOGIN NOW</a></button>
            </div>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="visi d-flex mt-5 mb-5">
        <div class="character d-flex justify-content-center align-content-center">
            <img src="../../asset/img/59859.jpg" class="img-fluid" alt="...">
        </div>
        <div class="visiMisi d-flex justify-content-center">
            <div class="detailvisiMisi rounded shadow-sm h-100 w-75 p-5">
            <h2 class="d-flex justify-content-center" style="margin-bottom: 10px; "><span class="logo">M</span><span class="antanan">antanan</span> </h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quae soluta quas exercitationem quia labore impedit suscipit amet, consequuntur, minus architecto ratione ea cumque quam rem totam unde officia obcaecati nemo tempore quidem odit? Harum commodi libero minus et architecto, optio illo voluptas earum perferendis ducimus, asperiores fugit quod corrupti!
                </p>
            </div>
        </div>
    </section>
    <section class="bannerJoin w-100 d-flex align-items-center justify-content-evenly mb-5" style="background-color: #160040;">
        <h3>Ayo Jual/Donasikan Barang Bekas Layak Pakai Anda Sekarang!</h3>
        <!-- <button type="button" class="btn btn-outline-success">Join Sekarang</button> -->
        <button class="Cbtn btn me-2 text-light" type="button" style="background-color: #9A0680;"><a href="register.php" style="text-decoration: none; color:white;">JOIN</a></button>
    </section>
    <section class="produkKami text-center">
        <h1>Produk Kami</h1>
        <div class="card-body w-100 d-flex justify-content-center">
            <div class="card m-1" style="width: 10rem;">
                <img src="../../asset/img/man.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card m-1" style="width: 10rem;">
                <img src="../../asset/img/man.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card m-1" style="width: 10rem;">
                <img src="../../asset/img/man.jpg" class="card-img-top" alt="...">
            </div>
            <div class="card m-1" style="width: 10rem;">
                <img src="../../asset/img/man.jpg" class="card-img-top" alt="...">
            </div>
        </div>
    </section>
</body>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</html>
<?php

// if (isset($_GET['error'])) {
//     echo "<p class='error alert alert-danger'>";
//     echo $_GET['error'];
// }

?>