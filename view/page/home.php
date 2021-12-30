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
    <link rel="stylesheet" href="../css/font.css">
    <link rel="stylesheet" href="../css/card.css">
    <title>Mantanan - Shop</title>
</head>
<div class="nav-main sticky-top">
    <nav class="navbar navbar-expand navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <span class="logo">M</span><span class="antanan text-light fs-6" >antanan</span>
                </a>
                <div class="collapse navbar-collapse text-light" id="navbarText">
                    <ul class="navbar-nav mx-auto d-flex justify-content-between w-25 me-auto">
                        <li class="nav-item ">
                            <a class="nav-link text-light"  href="landingpage.php">Home</a>
                        </li>
                        <li class="nav-item activee">
                            <a class="nav-link box text-activee" aria-current="page" href="home.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="profile.php">Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">About</a>
                        </li>
                    </ul>
                    <form class="d-flex me-3">
                        <input class="form-control me-2 h-50" type="search" placeholder="Search" aria-label="Search">
                    
                    </form>
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
        <div class="containerProduk w-100 h-75">
            <div class="produk p-2 ps-5 mt-1 d-flex flex-wrap">
            <?php
                            include '../model/db_connect.php';
    
                            //MENAMPILKAN ID DAN USERNAME
                            // $email = $_SESSION['email'];
                            $query = mysqli_query($conn, "select product_id,image_file,product_name,product_desc,product_price from products");
    
                            while($row = mysqli_fetch_array($query)){
                                echo ' 
                                <div href="./detailproduk" id="'.$row["product_id"].'" class="card shadow m-2" style="width: 12rem;">
                                    <img src="data:image/png;base64,'.base64_encode($row["image_file"]).'" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">'.$row["product_name"].'</h5>
                                        <p class="card-text text-muted mb-0">'.$row["product_desc"].'</p>
                                        <p class="harga mt-1 mb-2">'.$row["product_price"].'</p>
                                    </div>
                                    <a class="btn" href="./detailproduk.php" role="button"></a>
                                </div>
                                ';
                            }
                        ?>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                    </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
