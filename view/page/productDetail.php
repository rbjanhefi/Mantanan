<?php
    include '../../model/db_connect.php';

    $product_id= $_GET['product_id'];
    
    $query = mysqli_query($conn, "SELECT * FROM products INNER JOIN users ON products.email = users.email WHERE product_id = '$product_id'");
    $result = mysqli_fetch_array($query);
    
    $price = $result['product_price'];
    $namep = $result['product_name'];
    $origin = $result['product_origin'];
    $ufirst = $result['firstname'];
    $ulast = $result['lastname'];
    $phone = $result['phone'];
    $imageu = $result['file_picture'];
    $imagep= $result['image_file'] ;
    $category = $result['category'];
    $brand= $result['product_brand'] ;
    $stock = $result['stock'];
    $desc = $result['product_desc'] ;
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/detailproduk.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/active.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/button.css">
    <link rel="stylesheet" href="../css/font.css">
    <title>Detail Product</title>
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
    <section class="container d-flex justify-content-between mt-5">
        <div class="imgProduk ">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php
                        echo'<div class="carousel-item active">
                            <img src="data:image/jpeg;base64,'.base64_encode($imagep).'" class="d-block " alt="...">
                        </div>';
                    ?>
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
                <h1><?php echo $price?></h1>
                <p class="text-muted fs-5"><?php echo $namep?></p>
                <p class="text-muted mt-4 "><?php echo $origin?></p>
            </div>
            <div class="pelapak shadow-sm border mt-3 harga ps-5">
                <h1>Seller Description</h1>
                <div class="profil d-flex">
                    <?php
                    if($imageu==null){
                        echo'
                        <img src="../../asset/img/user.png" alt="">';
                    }
                    else{
                        echo'
                        <img src="data:image/jpeg;base64,'.base64_encode($imageu).'" alt="">';       
                    }

                    ?>

                    <div class="detailProfil">
                        <p class="ms-3 mt-2 mb-0"><?php echo  $ufirst?> <?php echo $ulast?></p>
                        <p class="ms-3"><?php echo $phone?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="deskripsiProduk border mt-5 m-auto  shadow">
        <div class="spesifikasiProduk">
            <div class="judul p-1  m-4">
                <h4>Detail Product</h4>
            </div>
            <div class="d-flex ms-4 mt-3">
                <label class="label text-muted">Category</label>
                <p class="ps-5"><?php echo $category?></p>
            </div>
            <div class="d-flex ms-4">
                <label class="label text-muted">Product ori</label>
                <p class="ps-4"><?php echo $origin?></p>
            </div>
            <div class="d-flex ms-4">
                <label class="label text-muted">Brand</label>
                <p class="ms-3 ps-5"><?php echo $brand?></p>
            </div>
            <div class="d-flex ms-4">
                <label class="label text-muted">Stock</label>
                <p class="ms-3 ps-5"><?php echo $stock?></p>
            </div>
        </div>
        <div class="deskripsiProdukk">
            <div class="judul p-1 m-4 ">
                <h4>Description</h4>
            </div>
            <p class="m-4 text-xl-start">
                <?php echo $desc?>
            </p>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
</html>
<?php

// if (isset($_GET['error'])) {
//     echo "<p class='error alert alert-danger'>";
//     echo $_GET['error'];
// }

?>