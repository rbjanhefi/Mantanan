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
    <link rel="stylesheet" href="../css/about.css">
    <link rel="stylesheet" href="../css/active.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/button.css">
    <link rel="stylesheet" href="../css/font.css">
    <title>Mantanan - Home</title>
</head>

<body>
    <div class="nav-main sticky-top">
        <nav class="navbar navbar-expand navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <span class="logo">M</span><span class="antanan text-light fs-6" >antanan</span>
                </a>
                <div class="collapse navbar-collapse text-light" id="navbarText">
                    <ul class="navbar-nav mx-auto d-flex justify-content-between w-25 me-auto">
                        <li class="nav-item">
                            <a class="nav-link text-light" aria-current="page" href="landingpage.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="home.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="profile.php">Account</a>
                        </li>
                        <li class="nav-item activee">
                            <a class="nav-link box text-activee" href="#">About</a>
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
    <section class="banner">
        <img src="../../asset/img/artificial.jpg" style="filter: blur(3px);" alt="">
        <div class="title">
            <h1><span class="logos">M</span><span >antanan</span></h1>
        </div>
    </section>
    <section class="our">
        <div class="title">
            <p><span class="logo">M</span><span >antanan</span>  is a startup that helps you find second-hand items that are worth to use.</p>
        </div>
        <div class="cardOurContainer">
            <div class="cardOur">
                <div class="img">
                    <img src="https://public-assets.toggl.com/b/static/2d0859139cc409ae734ed84df1a92cfb/tool-effective.svg" title="banner" alt="banner">
                </div>
                <div class="body">
                    <div class="title">
                        <p>Effective</p>
                    </div>
                    <div class="detail">
                        <p>Mantanan provides an effective platform in terms of selling your second hand</p>
                    </div>
                </div>
            </div>
            <div class="cardOur">
                <div class="img">
                    <img src="https://public-assets.toggl.com/b/static/2ec3a536d58bc26f5e92327e801e38b8/tool-empowering.svg" alt="">
                </div>
                <div class="body">
                    <div class="title">
                        <p>Save</p>
                    </div>
                    <div class="detail">
                        <p>Mantanan provides a safe and comfortable place to shop for second hand</p>
                    </div>
                </div>
            </div>
            <div class="cardOur">
                <div class="img">
                    <img src="https://public-assets.toggl.com/b/static/891df062711eb472341f36393f8e3a75/tool-effortless.svg" alt="">
                </div>
                <div class="body">
                    <div class="title">
                        <p>Grow Up</p>
                    </div>
                    <div class="detail">
                        <p>Formers are the best solution so that your second hand sales increase quickly.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="story d-flex ps-5">
        <div class="detailStory">
            <div class="title">
                <h1>Our Story</h1>
            </div>
            <div class="detail">
                <p> Mantanan is a startup that helps you find second-hand items that are worth using.</p>
                    <br>
                <p> You can also find generic and unique items that are surprisingly cheap and of good quality. You can also sell and promote your goods on this website. </p>
                    <br>
                <p>What are you waiting for, let's register your used items right away or items that may be new but never used.</p>
            </div>
        </div>
        <div class="character">
            <img src="../../asset/img/passion.jpg" alt="">
        </div>
    </section>
    <section class="ourTeam">
        <div class="title">
            <h1>Our Team</h1>
        </div>
        <div class="detail">
            <div class="foto">
                <div class="detailFoto">
                    <img src="https://cdn.discordapp.com/attachments/764062693124341760/860512591192522752/unknown.png" alt="">
                    <div class="profile">
                        <p class="mb-0">M.Muh.Akhyar.z</p>
                        <small class="text-muted">muh.0704@students.amikom.ac.id</small>
                    </div>
                </div>
                <div class="detailFoto">
                    <img src="https://cdn.discordapp.com/attachments/764062693124341760/860512682703323166/unknown.png" alt="">
                    <div class="profile">
                        <p class="mb-0">Feizal Reza</p>
                        <small class="text-muted">Feizal.reza@students.amikom.ac.id</small>
                    </div>
                </div>
                <div class="detailFoto">
                    <img src="https://cdn.discordapp.com/attachments/764062693124341760/860512639363710996/unknown.png" alt="">
                    <div class="profile">
                        <p class="mb-0">Rizqi Bio Janhefi</p>
                        <small class="text-muted">rizqi.janhefi@students.amikom.ac.id</small>
                    </div>
                </div>
            </div>
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
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</html>
<?php

?>