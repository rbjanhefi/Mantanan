<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/detailproduk.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/active.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/button.css">
    <link rel="stylesheet" href="./css/font.css">
    <title>Hello, world!</title>
</head>

<body>
    <?php include "./navbar.php" ?>
    <section class="container d-flex justify-content-between mt-5">
        <div class="imgProduk ">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../asset/img/man.jpg" class="d-block " alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../asset/img/hoodie.jpg" class="d-block " alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="detailProduk">
            <div class="harga shadow-sm border ps-5 d-flex flex-column">
                <h1>Rp.500,000</h1>
                <p class="text-muted fs-5">Hoodie Juara Liga Champions</p>
                <p class="text-muted mt-4 ">Yogyakarta,Indonesia</p>
            </div>
            <div class="pelapak shadow-sm border mt-3 harga ps-5">
                <h1>Deskripsi Penjual</h1>
                <div class="profil d-flex">
                    <img src="../../asset/img/profile.jpg" alt="">
                    <div class="detailProfil">
                        <p class="ms-3 mt-2 mb-0">Rizqi Akhyar Janhefi</p>
                        <p class="ms-3">0877665765</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="deskripsiProduk border mt-5 m-auto  shadow">
        <div class="spesifikasiProduk">
            <div class="judul p-1  m-4">
                <h4>Spesifikasi Produk</h4>
            </div>
            <div class="d-flex ms-4 mt-3">
                <label class="label text-muted">Kategori</label>
                <p class="ps-5">Hoodie</p>
            </div>
            <div class="d-flex ms-4">
                <label class="label text-muted">Asal Barang</label>
                <p class="ps-4">Lokal</p>
            </div>
            <div class="d-flex ms-4">
                <label class="label text-muted">Merek</label>
                <p class="ms-3 ps-5">Adidas</p>
            </div>
            <div class="d-flex ms-4">
                <label class="label text-muted">Stock</label>
                <p class="ms-3 ps-5">10</p>
            </div>
        </div>
        <div class="deskripsiProdukk">
            <div class="judul p-1 m-4 ">
                <h4>Deskripsi Produk</h4>
            </div>
            <p class="m-4 text-xl-start">
                BAHAN FLEECE
                <br>
                COTTON LEMBUT DAN NYAMAN DIPAKAI
                <br>
                HIGH QUALITY
                <br>
                Barang READY, langsung ORDER aja. Thanks
                <br>
                DETAIL UKURAN ( Lebar x Panjang ) :
                <br>
                XS : 47 cm x 58
                <br>
                S : 50 cm x 60 cm
                <br>
                M : 53 cm x 64 cm
                <br>
                L : 55 cm x 67 cm
                <br>
                XL : 60 cm x 72 cm
                <br>
                XXL : 65 cm x 75 cm
            </p>
        </div>
    </section>
    <?php include "./footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
<?php

// if (isset($_GET['error'])) {
//     echo "<p class='error alert alert-danger'>";
//     echo $_GET['error'];
// }

?>