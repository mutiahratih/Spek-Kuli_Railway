<?php
    include_once('koneksi.php');

    $hari = mysqli_query($koneksi, 'select * from highchart_hari');
    while ($item=mysqli_fetch_array($hari)) {
        $data[] = array(
            $item['hari'],
            floatval($item['jumlah'])
        );
    }
    $json = json_encode($data);

    $hari1 = mysqli_query($koneksi, 'select * from highchart_jam');
    while ($item1=mysqli_fetch_array($hari1)) {
        $data1[] = array(
            $item1['jam'],
            floatval($item1['jumlah'])
        );
    }
    $json1 = json_encode($data1);
?> 


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SKR - Landing Page</title>
    <!-- Boostrap Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <!-- Remix Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!-- Style Css -->
    <link rel="icon" type="image/x-icon" href="img/logoskr.png">
    <link href="header_footer_style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="landing_style.css">
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

    <!-- Hero Slider -->
    <div id="heroSlider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item text-center bg-cover vh-100 active slide-1">
                <div class="container h-100 d-flex align-items-center justify-content-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <h6 class="text-white">WELCOME TO SPEK KULI RAILWAY</h6>
                            <h3 class="display-1 my-3 fw-bold text-white">The Best Travel Solution For Prospective Residents of Heaven</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item text-center bg-cover vh-100 slide-2">
                <div class="container h-100 d-flex align-items-center justify-content-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <h6 class="text-white">WELCOME TO SPEK KULI RAILWAY</h6>
                            <h3 class="display-1 my-3 fw-bold text-white">Only Rp 4000,- You Can Get Your Dream Trip to Heaven</h3>
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

    <!-- Features -->
    <section id="features" class="bg-cover">
        <div class="container">
            <div class="row">
                <div class="col-12 intro-text">
                    <h1>Why to choose us?</h1>
                    <p>we provide complete facilities to support your paradise journey</p>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="feature p-4 text-center">
                        <div class="feature-icon">
                            <i class="ri-wifi-fill"></i>
                        </div>
                        <h4 class="mt-4 mb-2">Free Wifi</h4>
                        <p>You can enjoy traveling with a fast internet network using free wifi
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="feature p-4 text-center">
                        <div class="feature-icon">
                            <i class="ri-timer-2-fill"></i>
                        </div>
                        <h4 class="mt-4 mb-2">Fast Delivery</h4>
                        <p>Everything you need is provided inside the train to serve you
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="feature p-4 text-center">
                        <div class="feature-icon">
                            <i class="ri-user-5-fill"></i>
                        </div>
                        <h4 class="mt-4 mb-2">Friendly Staff</h4>
                        <p>Our friendly staff will serve your trip as well as you want
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="feature p-4 text-center">
                        <div class="feature-icon">
                            <i class="ri-shield-star-fill"></i>
                        </div>
                        <h4 class="mt-4 mb-2">Highly Rated</h4>
                        <p>We have been verified as a trusted travel agent by heaven
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Post -->
    <section id="blog">
        <div class="container" style="color: black">
            <div class="row">
                <div class="col-12 intro-text">
                    <h1>Blog Posts</h1>
                    <p>What do you want to know ?</p>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-sm-6">
                    <div class="blog-post d-flex shadow-on-hover">
                        <img src="img/blog1.jpg" alt="">
                        <div class="blog-post-content p-4">
                            <p>Posted: 31 Oct, 2022</p>
                            <h4><a href="#">JR Central: Business Travel Return Catalyst
                                </a></h4>
                            <p>JR Central offers investors exposure to the world famous Tokaido Shinkansen</p>
                            <a href="https://global.jr-central.co.jp/en/">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="blog-post d-flex shadow-on-hover">
                        <img src="img/blog2.jpg" alt="">
                        <div class="blog-post-content p-4">
                            <p>Posted: 15 Dec, 2022</p>
                            <h4><a href="#">Amtrak in the Future
                                </a></h4>
                            <p>Newly released visuals offer a glimpse into state-of-the-art trains</p>
                            <a href="https://www.amtrak.com/home">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="blog-post d-flex shadow-on-hover">
                        <img src="img/blog3.jpg" alt="">
                        <div class="blog-post-content p-4">
                            <p>Posted: 16 Nov, 2022</p>
                            <h4><a href="#">Russian Rail To Develop Trans-Siberian Rail 
                                </a></h4>
                            <p>Capacity East Before North In Northern Latitudinal Railway Decision</p>
                            <a href="https://www.russianrailways.com/">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="blog-post d-flex shadow-on-hover">
                        <img src="img/blog4.jpg" alt="">
                        <div class="blog-post-content p-4">
                            <p>Posted: 26 Jan, 2022</p>
                            <h4><a href="#">CRIG holds the 2nd Session of the 2nd Workers
                                </a></h4>
                            <p>Staff' Congress and the Working Conference for the Year of 2022</p>
                            <a href="http://www.crecgi.com/en/">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ratings -->
    <section id="features" class="bg-cover">
        <div class="container-fluid mt-3">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-9">
                    <div class="card">
                        <div class="card-body">
                            <center><h5 class="card-title">SKR Passenger Crowded Chart this Month</h5></center>
                            <hr>
                            <div id="grafik"></div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </section>

    <section id="features" class="bg-cover">
        <div class="container-fluid mt-3">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-9">
                    <div class="card">
                        <div class="card-body">
                            <center><h5 class="card-title">SKR Passenger Crowded Chart Today</h5></center>
                            <hr>
                            <div id="grafik2"></div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </section>

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

    <!-- HIGHCHARTS  -->
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <script type="text/javascript">
        Highcharts.chart('grafik', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'per Weeks'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        yAxis: {
            title: {
                text: 'Average Passengers',
            }
        },
        xAxis: {
            type: 'category',
            accessibility: {
                rangeDescription: 'Days on Weeks'
            }
        },
        tooltip: {
            pointFormat: '{point.y} people',
            shared: true
        },
        series: [{
            type: 'column',
            name: 'Unemployed',
            color : '#ed6b23',
            data: <?= $json ?>,
            showInLegend: false
        }],
        chart: {
            inverted: false,
            polar: false
        },
        responsive: {
        rules: [{
          condition: {
            maxWidth: 500
          },
          chartOptions: {
            legend: {
              layout: 'horizontal',
              align: 'center',
              verticalAlign: 'bottom'
            }
          }
        }]
      },
    });
  </script>

<script type="text/javascript">
        Highcharts.chart('grafik2', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'per Days'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        yAxis: {
            title: {
                text: 'Average Passenger',
            }
        },
        xAxis: {
            type: 'category',
            accessibility: {
                rangeDescription: 'Departure'
            }
        },
        tooltip: {
            pointFormat: '{point.y} people',
            shared: true
        },
        series: [{
            type: 'column',
            name: 'Unemployed',
            color : '#2d2a70',
            data: <?= $json1 ?>,
            showInLegend: false
        }],
        chart: {
            inverted: false,
            polar: false
        },
        responsive: {
        rules: [{
          condition: {
            maxWidth: 500
          },
          chartOptions: {
            legend: {
              layout: 'horizontal',
              align: 'center',
              verticalAlign: 'bottom'
            }
          }
        }]
      },
    });
  </script>

</body>

</html>