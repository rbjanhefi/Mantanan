<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/active.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/button.css">
    <link rel="stylesheet" href="./css/font.css">
    <link rel="stylesheet" href="./css/card.css">
    <title>Hello, world!</title>
</head>

<body>
    <?php include "./navbar.php" ?>
    <section class="content d-flex mt-5">
        <div class="kategori shadow m-3 mt-lg-3 ">
            <div class="title m-3">
                <p>Kategori</p>
            </div>
            <div class="checkbok ps-2">
                <div class="form-check mx-3 mt-2 mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Baju
                    </label>
                </div>
                <div class="form-check mx-3 mt-2 mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Celana
                    </label>
                </div>
                <div class="form-check mx-3 mt-2 mb-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Kursi
                    </label>
                </div>
            </div>
            <div class="terapkan">
                <button class="shadow">Terapkan</button>
            </div>
        </div>
        <div class="produk p-2 ps-5 mt-1 d-flex flex-wrap">
            <div class="card shadow m-2" style="width: 12rem;">
                <img src="../asset/img/hoodie.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hoodie</h5>
                    <p class="card-text text-muted mb-0">Some quick example text to build on the card title and make.</p>
                    <p class="harga mt-1 mb-2">Rp 80.000</p>
                </div>
            </div>
            <div class="card shadow m-2" style="width: 12rem;">
                <img src="../asset/img/hoodie.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hoodie</h5>
                    <p class="card-text text-muted mb-0">Some quick example text to build on the card title and make.</p>
                    <p class="harga mt-1 mb-2">Rp 80.000</p>
                </div>
            </div>
            <div class="card shadow m-2" style="width: 12rem;">
                <img src="../asset/img/hoodie.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hoodie</h5>
                    <p class="card-text text-muted mb-0">Some quick example text to build </p>
                    <p class="harga mt-1 mb-2">Rp 80.000</p>
                </div>
            </div>
            <div class="card shadow m-2" style="width: 12rem;">
                <img src="../asset/img/hoodie.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hoodie</h5>
                    <p class="card-text text-muted mb-0">Some quick example text to build on the card title and make.</p>
                    <p class="harga mt-1 mb-2">Rp 80.000</p>
                </div>
            </div>
            <div class="card shadow m-2" style="width: 12rem;">
                <img src="../asset/img/hoodie.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Hoodie</h5>
                    <p class="card-text text-muted mb-0">Some quick example text to build on the card title and make.</p>
                    <p class="harga mt-1 mb-2">Rp 80.000</p>
                </div>
            </div>
            
    </section>
    <?php include "./footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
