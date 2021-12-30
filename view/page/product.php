<?php

session_start();

if (!isset($_SESSION['email'])) {
    header("location:../view/login.php");
}

//MENAMPILKAN INFORMASI PASSWORD
include '../../model/profile_show.php';

//CEK DATA APAKAH SUDAH LENGKAP
include '../../model/profile_chek.php';


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
        <link rel="stylesheet" href="../css/card.css">
        <link rel="stylesheet" href="../css/active.css">
        <link rel="stylesheet" href="../css/navbar.css">
        <link rel="stylesheet" href="../css/button.css">
        <link rel="stylesheet" href="../css/font.css">
        <link rel="stylesheet" href="../css/profile.css">
        <link rel="stylesheet" href="../css/alert.css">
        <title>Mantanan - My Product</title>
    </head>
    <div class="nav-main sticky-top">
    <nav class="navbar navbar-expand navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <span class="logo">M</span><span class="antanan text-light fs-6" >antanan</span>
                </a>
                <div class="collapse navbar-collapse text-light" id="navbarText">
                    <ul class="navbar-nav mx-auto d-flex justify-content-between w-25 me-auto">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="landingpage.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="home.php">Shop</a>
                        </li>
                        <li class="nav-item activee">
                            <a class="nav-link box text-activee" aria-current="page" href="profile.php">Account</a>
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
      
        <main class="d-flex m-0">
        <section class="sideNav d-flex flex-column justify-content-between shadow rounded  m-3 p-2">
            <div class="profile border-bottom rounded d-flex align-items-center p-2">
                <div class="profile_img">
                    <?php
                    if($img==null){
                        echo'
                        <img src="../../asset/img/user.png" alt="">';
                    }
                    else{
                        echo'
                        <img src="data:image/jpeg;base64,'.base64_encode($img).'" alt="">';       
                    }

                    ?>
                </div>
                <div class="detail ms-3 h-75 d-flex flex-column">
                    <p class="m-0"><?php echo"$names"?></p>
                    <p class="text-muted"><?php echo"$email"?></p>
                </div>
            </div>
            <div class="navigasi">
                <div class="account border-bottom">
                    <div class="title m-2 text-muted">
                        <p>ACCOUNT</p>
                    </div>
                    <ul>
                        <li >
                        <a href="profile.php"><i class="ri-user-6-line"></i>Profile</a>
                        </li>
                        <li>
                            <a href="profilePassword.php"><i class="ri-lock-password-line"></i>Change Password</a>
                            
                        </li>
                    </ul>
                </div>
                <div class="product">
                    <div class="title m-2 text-muted">
                        <p>PRODUK</p>
                    </div>
                    <ul>
                        <li>
                            <a href="productUpload.php"><i class="ri-upload-line"></i>Upload Product</a>
                            
                        </li>
                        <li class="activeSideNav"> 
                        <i class="ri-apps-2-line"></i>My Product</li>
                            
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
                <div class="" style="margin-top: 80px;">
                            <?php
                                if (isset($_GET['error'])){
                                    
                                    echo "<p class='error alert alert-danger' style='font-size:13px; width: 750px; top: 130px; '>";
                                    echo "<a name='close' href='productUpload.php'><i class='close ri-close-line' style='left: 710px;'></i></a>";
                                    echo $_GET['error'];
                                }
                                if(isset($_GET['success'])){
                                    
                                  echo "<p class='success alert alert-success' style='font-size:13px; width: 750px; top: 130px; '>";
                                  echo "<a name='close' href='productUpload.php'><i class='login ri-close-line' style='left: 710px;'></i></a>";
                                  echo $_GET['success'];
                              }

                            ?>
                </div>
                <div class="produk p-2 ps-5 mt-3 d-flex flex-wrap">
                
                    <?php
                        include '../../model/db_connect.php';

                        //MENAMPILKAN ID DAN USERNAME
                        $email = $_SESSION['email'];
                        $query = mysqli_query($conn, "select * from products where email ='$email'");

                        while($row = mysqli_fetch_array($query)){
                            echo ' 
                            <div class="card shadow m-2" style="width: 12rem;">
                                <img src="data:image/png;base64,'.base64_encode($row["image_file"]).'" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">'.$row["product_name"].'</h5>
                                    <p class="card-text text-muted mb-0">'.$row["product_desc"].'</p>
                                    <p class="harga mt-1 mb-2">'.$row["product_price"].'</p>
                                    <div class="btnProduk mt-2 w-100 d-flex justify-content-evenly">
                                        <a href="productEdit.php?id='.$row['product_id'].'">
                                            <i class="ri-pencil-line"></i>
                                        </a>
                                        <div class="border-end"></div>
                                        <button>
                                        <a href="../../model/product_delete.php?id='.$row['product_id'].'">
                                            <i class="ri-delete-bin-line"></i>
                                        </a>
                                            
                                        </button>
                                    </div>
                                </div>
                            </div>
                            ';
                        }
                    ?>
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
    </footer>s
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

    </body>

</html>