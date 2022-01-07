<?php

session_start();

?>

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
    <title>Mantanan - Home</title>
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
                            <a class="nav-link box text-activee" aria-current="page" href="landingpage.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="home.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="profile.php">Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">About</a>
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
    
    <section class="banner">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner position-relative">
                <div class="carousel-item active">
                    <img src="../../asset/img/donation1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../asset/img/donation2.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <div class="titleCaroussel position-absolute top-0 text-light">
                <h1>Let's sell your second-hand products now</h1>
                <p>You can sell/donate second-hand products that are still good for use.<br> Let's sell your second-hand now!</p>
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
                <p align="center">
                    Mantanan is a startup that helps you find second-hand items that are worth using. You can also find generic and unique items that are surprisingly cheap and of good quality. You can also sell and promote your goods on this website. What are you waiting for, let's register your used items right away or items that may be new but never used.
                </p>
            </div>
        </div>
    </section>
    <section class="bannerJoin w-100 d-flex align-items-center justify-content-evenly mb-5" style="background-color: #160040;">
        <h3>Do you have any old stuff that can still be used ? Let's sell now !!!</h3>
        <!-- <button type="button" class="btn btn-outline-success">Join Sekarang</button> -->
        <button class="Cbtn btn me-2 text-light" type="button" style="background-color: #9A0680;"><a href="register.php" style="text-decoration: none; color:white;">JOIN</a></button>
    </section>
    <section class="produkKami text-center">
        <h1>Our Product</h1>
        <div class="card-body w-100 d-flex justify-content-center">
            <?php
                include '../../model/db_connect.php';
                $query = mysqli_query($conn, "select image_file from products limit 5");
                while($row = mysqli_fetch_array($query)) {

                
                $image = $row['image_file'];
                echo'<div class="card m-1" style="width: 10rem;">
                    <img src="data:image/jpeg;base64,'.base64_encode($image).'" alt="...">
                </div>';
                 }   
            ?>
            
        </div>
    </section>
</body>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</html>
<?php

?>