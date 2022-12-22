<?php
    //inisialisasi session
    session_start();
    
    $nama = $_SESSION["email"];
    
    //mengecek username pada session
    if( !isset($_SESSION['email']) ){
    header('Location: login.php');
    exit;
    }
    
    require 'koneksi.php';
    $result = mysqli_query($koneksi, "SELECT * FROM member ORDER BY id_member DESC")
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SKR - Member Page</title>
    <!-- Boostrap Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <!-- Remix Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Style Css -->
    <link rel="icon" type="image/x-icon" href="img/logoskr.png">
    <link href="header_footer_style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="landing_style.css">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <!-- Navbar -->
    <?php
        global $koneksi;
        $no=1;
        $query = mysqli_query($koneksi, "SELECT * FROM member WHERE email = '$nama'");     
        while ($item = mysqli_fetch_array($query)) { ?>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2d2a70;">
            <div class="container-fluid">
                <a class="navbar-brand" href="member.php">
                    <img src="img/logoskr.png" style="max-width: 80px;">
                </a>                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="member.php?>">
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="reservasi.php?id=<?= $item['nama']; ?>">
                                <span>Reservation</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="riwayatpesan.php?id=<?= $item['nama']; ?>" >
                                <span>Details</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="akun.php?id=<?= $item['nama']; ?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Account
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="akun.php">Profile</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Slider -->
    <div id="heroSlider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item text-center bg-cover vh-100 active slide-3">
                <div class="container h-100 d-flex align-items-center justify-content-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <h6 class="text-white">WELCOME TO SPEK KULI RAILWAY</h6>
                            <h3 class="display-1 my-3 fw-bold text-white">Hello, <?= $item['nama']; ?></h3>
                        </div>
                        <a href="reservasi.php?id=<?= $item['nama']; ?>" class="btn btn-block" style="background-color: #ed6b23; color: white"><b>Buy Ticket<i class="fa fa-edit"></i></b></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item text-center bg-cover vh-100 slide-4">
                <div class="container h-100 d-flex align-items-center justify-content-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <h6 class="text-white">WELCOME TO SPEK KULI RAILWAY</h6>
                            <h3 class="display-1 my-3 fw-bold text-white">Enjoy your heaven with us</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div>
    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #2d2a70;">
        <!-- Grid container -->
        <div class="p-5">
        <!-- Section: Links -->
        
            <!--Grid row-->
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-5 mx-auto">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-white">Additional Information</h5>
                    <p>Spek Kuli Railway, or commonly known as SKR is a commuter rail system for greater Solo in Indonesia. It is operated by PT KAI Commuter Indonesia (KAI Commuter / KCI), a subsidiary of the Indonesian national railway company PT Kereta Api Indonesia (KAI). The rail system uses rolling stock of rapid transit standard and operates at high frequency with a minimum headway. SKR operates on the Purwosari (in Surakarta) - Wonogiri (in Wonogiri) route.</p>
                </div>
                
                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <div class="col-md-4 col-lg-4 col-xl-5 mx-auto">
                <h5 class="text-uppercase mb-4 font-weight-bold text-white">Contact</h5>
                <p>Office : Jalan Slamet Riyadi, Purwosari, Kecamatan Laweyan, Kota Surakarta, Jawa, Tengah 57142, Indonesia 
                    <a href="https://goo.gl/maps/igiEf3XJ2umK6mF89">(Click Here)</a>
                        <br/>Office Phone : 022-4230032
                        <br/>Email Correspondence : dokumen@skr.id
                        <br/>Customer Service : cs@skr.id
                </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <center>    
                    <p class="mb-4"><img src="img/logoskr.png" style="max-width: 100px;"></p>
                    <ul class="socialE">
                        <li><a href="https://facebook.com/keretaapikita" target="_blank"><img src="icon/fb.png" width="35vw" height="35vw" ></a></li>
                        <li><a href="https://twitter.com/keretaapikita" target="_blank"><img src="icon/tw.png" width="35vw" height="35vw" ></a></li>
                        <li><a href="https://youtube.com/keretaapikita" target="_blank"><img src="icon/yt.png" width="35vw" height="35vw" ></a></li>
                        <li><a href="https://instagram.com/keretaapikita" target="_blank"><img src="icon/ig.png" width="35vw" height="35vw" ></a></li>
                    </ul> 
                </center>
            </div>
            </div>
            <!--Grid row-->
      
     
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: #ed6b23">
            Copyright © 2022 PT SPEK KULI RAILWAY, All Rights Reserved
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->
    </div>
    <!-- End of .container -->

    <!-- CDN JS  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>