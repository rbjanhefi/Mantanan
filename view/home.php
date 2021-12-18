<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/active.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/button.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <nav class="navbar sticky-top navbar-expand navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                logo
            </a> 
            <div class="collapse navbar-collapse text-light" id="navbarText">
                <ul class="navbar-nav mx-auto d-flex justify-content-between w-25 me-auto" >
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item activee">
                        <a class="nav-link " href="#">Shop</a>
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
                    <button class="Cbtn btn btn-primary me-2" type="button">Login</button>
                </span>
            </div>
        </div>
    </nav>
    <section class="content d-flex mt-5">
        <div class="kategori shadow m-2 mt-lg-3 ">
            <div class="title m-3">
                <p>Kategori</p>
            </div>
            <div class="checkbok">
                <div class="form-check mx-3">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Baju
                    </label>
                </div>
                <div class="form-check mx-3">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Celana
                    </label>
                </div>
                <div class="form-check mx-3">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Kursi
                    </label>
                </div>
            </div>
        </div>
        <div class="produk">
            <div class="card-body d-flex flex-wrap justify-content-between align-content-center">
                <div class="card rounded m-1 " style="width: 15rem;">
                    <img src="../../asset/img/man.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jaket Hoodie</h5>
                        <p class="card-subtitle mb-2 text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-text fs-5">Rp 100.000</p>
                    </div>
                </div>
                <div class="card rounded m-1 " style="width: 15rem;">
                    <img src="../../asset/img/man.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jaket Hoodie</h5>
                        <p class="card-subtitle mb-2 text-muted"> text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-text fs-5">Rp 100.000</p>
                    </div>
                </div>
                <div class="card rounded m-1 " style="width: 15rem;">
                    <img src="../../asset/img/man.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jaket Hoodie</h5>
                        <p class="card-subtitle mb-2 text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-text fs-5">Rp 100.000</p>
                    </div>
                </div>
                <div class="card rounded m-1 " style="width: 15rem;">
                    <img src="../../asset/img/man.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jaket Hoodie</h5>
                        <p class="card-subtitle mb-2 text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-text fs-5">Rp 100.000</p>
                    </div>
                </div>
                <div class="card rounded m-1 " style="width: 15rem;">
                    <img src="../../asset/img/man.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jaket Hoodie</h5>
                        <p class="card-subtitle mb-2 text-muted">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-text fs-5">Rp 100.000</p>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <footer class="bg-black w-100 text-light d-flex p-lg-5 justify-content-evenly mt-5">
        <div class="logo">
            <p>ini Logo</p>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
<?php

    // if (isset($_GET['error'])) {
    //     echo "<p class='error alert alert-danger'>";
    //     echo $_GET['error'];
    // }

?>