<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <link rel="icon" type="image/x-icon" href="img/logoskr.png">

    <link href="header_footer_style.css" rel="stylesheet"/>
    <link href="rute_style.css" rel="stylesheet"/>

    <title>SRK - Routes and Schedules</title>
</head>

<body>
    
    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2d2a70;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="img/logoskr.png" style="max-width: 80px;">
                </a>                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">
                                <span>HOME</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php" >
                                <span>ABOUT US</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="rute.php">
                                <span>ROUTES AND SCHEDULES</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php" target="_blank" onclick= "#"  id="login">LOGIN / SIGN UP</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main -->
    <main>
        <div class="container" style="margin-top:50px">
            <center>
                <h1 style="color: #2d2a70;">Batara Kresna Train Route</h1>
                <hr>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/rute.png" alt="Card image cap">
                </div>
            </center>
        </div>

        <div class="container" style="margin-top:50px">
            <center>
                <h1 style="color: #2d2a70;">About The Station</h1>
                <hr>
            </center>
        </div>

        <!-- Section 2 RR -->
        <div id="section2">
            <center>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/purwosari.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Purwosari Station</h5>
                            <p class="card-text">Purwosari Station is a type C large class train station located in Purwosari, Laweyan, Surakarta, Central Java. The station, which is located at an altitude of +93 m, is included in Operational Area VI Yogyakarta and only serves economy class trains across the south and local/commuter.</p>
                            <a href="https://goo.gl/maps/aRsjKMWAyJVGZvMK8" class="btn btn-primary">For More Information</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/solokota.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Solo Kota Station</h5>
                            <p class="card-text">Solo Kota Station is a class III/small train station located in Sangkrah Village, Pasar Kliwon District, Surakarta City, Central Java; is located at an altitude of +98 m and is included in Operational Area VI Yogyakarta. Because of that location, this station is also known as Sangkrah Station.</p> 
                            <a href="https://goo.gl/maps/62TJLRTWGSR4Qcy79" class="btn btn-primary">For More Information</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/sukoharjo.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Sukoharjo Station</h5>
                            <p class="card-text">Sukoharjo Station is a class III/small train station located in Gayam, Skh, Skh. The station, which is located at an altitude of +98 meters, is included in Operational Area VI Yogyakarta. Towards Pasarnguter Station, there are four non-active stops, namely Gayam, Kepuh, Songgorunggi, and Nguter.</p> 
                            <a href="https://goo.gl/maps/jy7oQDHNfhwEJPXVA" class="btn btn-primary">For More Information</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row py-5">
                <div class="col-lg-3 col-md-6"></div>
                <div class="col-lg-3 col-md-6">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/pasarnguter.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Pasar Nguter Station</h5>
                            <p class="card-text">Pasar Nguter Station is a class III/small train station located in Nguter, Nguter, Sukoharjo. The station, which is located at an altitude of +105 meters, is included in the Yogyakarta Operational Area VI.</p> 
                            <a href="https://goo.gl/maps/mgeuwiY1zCLqVDgz9" class="btn btn-primary">For More Information</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="img/wonogiri.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Wonogiri Station</h5>
                            <p class="card-text">Wonogiri Station is a class III/small train station located in Giripurwo, Wonogiri, Wonogiri; at an altitude of +144 m; included in Operational Area VI Yogyakarta. This station is located behind the market and public transport terminal.</p> 
                            <a href="https://goo.gl/maps/9UqvqgGCBuracLCD6" class="btn btn-primary">For More Information</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6"></div>
            </div>
            </center>
        </div>

        <div class="container" style="margin-top:50px">
            <center>
                <h1 style="color: #2d2a70;">Batara Kresna Train Departure Schedule</h1>
                <hr>
            </center>
        </div>

        <center>
            <div class="col-12 col-sm-1 col-lg-11 col-md-10">
                <div class="card">
                    <div class="card-body" style="overflow-x:auto;">
                        <table class="table table-striperd table-bordered table-hover">

                            <tr class="text-light" style="background-color: #ed6b23;">
                                <th>No</th>
                                <th>Nomor KA</th>
                                <th>Relasi</th>
                                <th>Purwosari (PWS)</th>
                                <th>Solo Kota (STA)</th>
                                <th>Sukoharjo (SKH)</th>
                                <th>Pasar Nguter (PNT)</th>
                                <th>Wonogiri (WNG)</th>
                            </tr>

                            <?php
                                include "koneksi.php";
                                $no=1;
                                $query = mysqli_query($koneksi, "SELECT * from jadwal order by pws asc");
                                while ($item = mysqli_fetch_array($query)) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $item['id_ka']; ?></td>
                                    <td><?= $item['relasi']; ?></td>
                                    <td><?= $item['pws']; ?></td>
                                    <td><?= $item['sta']; ?></td>
                                    <td><?= $item['skh']; ?></td>
                                    <td><?= $item['pnt']; ?></td>
                                    <td><?= $item['wng']; ?></td>
                                </tr>  
                            <?php } ?>
                            
                        </table>
                    </div>
                </div>
            </div>
        </center>
        
        <br><br>
    </main>
    

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

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


</body>

</html>