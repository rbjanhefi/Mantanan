<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/postProduk.css">
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
                        <li class="nav-item " >
                            <a class="nav-link text-light" style="z-index: 2;" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item text-light">
                            <a class="nav-link text-light" href="#">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  activee" href="#">Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">About</a>
                        </li>
                    </ul>
                    <form class="d-flex me-3">
                        <input class="form-control me-2 h-50" type="search" placeholder="Search" aria-label="Search">
                    </form>
                    <span class="navbar-text text-light">
                        <button class="Cbtn btn-primary me-2" type="button">Login</button>
                    </span>
                </div>
            </div>
        </nav>
        <section class="UploadProduk border mt-5 m-auto  shadow">
            <div class="imageProduk">
                <div class="judul p-1  ms-4 mt-4 mb-3" >
                    <h4>Upload Gambar Produk</h4>
                </div>
                <div class="d-flex w-50 ms-5">
                    <label for="formFileMultiple" class="form-label text-muted mt-1">File</label>
                    <input class="form-control left" type="file" id="formFileMultiple" multiple>
                </div>
            </div>
            <div class="InformasiProduk">
                <div class="judul p-1 ms-4 mt-4" >
                    <h4>Informasi Produk</h4>
                </div>
                <form class="ms-4 mt-3">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label text-muted fs-6 ms-3 text-muted fs-6">Nama Produk</label>
                        <div class="col-sm-10 w-50 ms-5">
                            <input type="text" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label text-muted fs-6 ms-3">Deskripsi Produk</label>
                        <div class="form-floating w-50 ms-5">
                            <textarea class="form-control" placeholder="Deskripsi Produk" id="floatingTextarea2" style="height: 150px"></textarea>
                            <label for="floatingTextarea2" class="ms-2">Deskripsi</label>
                        </div>
                    </div>
                    <div class="row mb-3  ">
                        <label for="inputPassword3" class="col-sm-2 col-form-label text-muted fs-6 ms-3">Kategori Produk</label>
                        <div class="dropdown w-50 ms-5">
                            <a class="btn btn-outline-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                Kategori Produk
                            </a>
                            
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Pakain</a></li>
                                <li><a class="dropdown-item" href="#">SmartPhone</a></li>
                                <li><a class="dropdown-item" href="#">Rumah</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label text-muted fs-6 ms-3">Merek</label>
                        <div class="col-sm-10 w-50 ms-5">
                            <input type="text" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label text-muted fs-6 ms-3">Asal Produk</label>
                        <div class="col-sm-10 w-50 ms-5">
                            <input type="text" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label text-muted fs-6 ms-3">Stock</label>
                        <div class="col-sm-10 w-25 ms-5">
                            <input type="number" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label text-muted fs-6 ms-3">Harga</label>
                        <div class="col-sm-10 w-25 ms-5">
                            <input type="number" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="d-grid gap-2 w-75 mb-4  d-md-flex justify-content-md-end">
                        <button class="Cbtn btn-primary me-md-2" type="button">Upload</button>
                        <button class="Cbtn btn-danger me-5" type="button">Cancel</button>
                    </div>
                </form>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

    </body>

</html>
<?php

    // if (isset($_GET['error'])) {
    //     echo "<p class='error alert alert-danger'>";
    //     echo $_GET['error'];
    // }

?>