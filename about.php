<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initialscale=1">
    <!-- Boostrap Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="icon" type="image/x-icon" href="img/logoskr.png">

    <link href="header_footer_style.css" rel="stylesheet"/>

    <style type="text/css">
        .bg-cover{
            background-size: cover !important;
        }

        #team {
            padding: 60px 0;
            text-align: center;
            background-color: lightgrey;
            color: #145889;
        }
        #team h2 {
            position: relative;
            padding: 0px 0px 15px;
        }
        #team p {
            font-size: 15px;
            font-style: italic;
            padding: 0px;
            margin: 25px 0px 40px;
        }
        #team h2::after {
            content: '';
            border-bottom: 2px solid #ed6b23;
            position: absolute;
            bottom: 0px;
            right: 0px;
            left: 0px;
            width: 90px;
            margin: 0 auto;
            display: block;
        }
        #team .member {
            margin-bottom: 20px;
            position: relative;
            overflow: hidden;
            background-color: rgb(89, 95, 141);
            padding: 10px;
            box-shadow: 0px 1px 6px 0px rgba(0, 0, 0, 0.4);
        }
        #team .member .member-info {
            display: block;
            position: absolute;
            bottom: 0px;
            left: -200px;
            transition: 0.4s;
            padding: 15px 0;
            background: rgba(0, 0, 0, 0.4);
        }
        #team .member:hover .member-info {
            left: 0px;
            right: 0px;
        }
        #team .member h4 {
            font-weight: 700;
            margin-bottom: 2px;
            font-size: 18px;
            color: #fff;
        }
        #team .member span {
            font-style: italic;
            display: block;
            font-size: 13px;
            color: #fff;
        }
        #team .member .social-links {
            margin-top: 15px;
        }
        #team .member .social-links a {
            transition: none;
            color: #fff;
        }
        #team .member .social-links a:hover {
            color: #ffc107;
        }
        #team .member .social-links i {
            font-size: 18px;
            margin: 0 2px;
        }
    </style>
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

<header>
    <section>
        <div style="background: url(img/kereta3.jpg)" class="jumbotron bg-cover text-white">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.8);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="container py-5 text-center">
                        <h3 class="display-1 my-3 fw-bold text-white">ABOUT US</h3>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="container mt-5 text-center">
            <h2 class="font-weight-bold" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color: #2d2a70;">VISION</h2>
            <p class="font-italic">Become a paradise-class railroad imaginary company</p>
        </div>
        <div class="container py-5 text-center">
            <h2 class="font-weight-bold" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color: #2d2a70;">MISSION</h2>
            <p class="font-italic">Carry out the management of the upstream railway sector with an emphasis on good commercial and operating aspects, as well as grow and develop with heaven. Become the pioneer of the best company in the railway sector</p>
        </div>
    </section>
</header>


<main>
<section class="bg-light">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="h3 font-weight-bold" style="color: #ed6b23">Glimpse About SKR</h2>
                    <p class="font-italic" style="text-align: justify; color: #2d2a70;">
                    SKR is an imaginary railway company under the auspices of the one and only God. This company is useful for fulfilling the
                    final assignment for semester 3 web programming courses.</p>
                    <p class="font-italic" style="text-align: justify; color: #2d2a70;">
                    PT SKR was built on October 22, 2022 through a web programming assignment. The previous name of this company was PT BUROK because we wanted to create an accommodation website to heaven. However, we changed it to PT SKR to make it look more humane.</p>
            </div>
            <div class="col-lg-6">
                <h2 class="h3 font-weight-bold" style="color: #ed6b23">Logo Meaning</h2>
                    <p class="font-italic" style="text-align: justify; color: #2d2a70;">
                    The SKR logo consists of the inscription cur which stands for our company name, namely SPEK KULI RAILWAY.
                    With the presence of railroad elements in the letter K that is relevant to our company, namely the railroad company</p>
                    <p class="font-italic" style="text-align: justify; color: #2d2a70;">
                    The colors for the SKR logo are dark blue and orange. The meaning of the dark blue color indicates stability, professionalism,
                    trustworthiness, and confidence. While the meaning of the orange color shows enthusiasm, creativity, determination, success,
                    and happiness.</p>
                        
            </div>
        </div>
    </div>
</section>

<section>
    <div>
        <div class="container py-5 text-center">
        <h2 class="font-weight-light">President Director</h2>
        <p class="font-italic text-muted mb-4">Mutiah Ratih</p>
        <center><img src="img/fotomutiah.png" style="width: 400px; height: 400px" alt="" class="img-fluid"></img></center>
    </div>
</section>

<section id="team">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                  <h2>Our Team</h2>
                  <p>A Railway Company that was built with a team from the specifications of heaven's porters</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="member">
                      <div class="member-img">
                          <img src="img/sabil.png" class="img-fluid" alt="">
                      </div>
                        <div class="member-info">
                            <h4>Salsabila</h4>
                            <span>FACILITY MANAGEMENT</span>
                            <span>DIRECTOR</span>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member">
                      <div class="member-img">
                          <img src="img/hasna.png" class="img-fluid" alt="">
                      </div>
                        <div class="member-info">
                            <h4>Hasna Nurul</h4>
                            <span>INFRASTRUCTURE MANAGEMENT</span>
                            <span>DIRECTOR</span>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member">
                      <div class="member-img">
                          <img src="img/sanya.png" class="img-fluid" alt="">
                      </div>
                        <div class="member-info">
                            <h4>Anna Sanya</h4>
                            <span>HUMAN RECOURCES</span>
                            <span>DIRECTOR</span>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="member">
                      <div class="member-img">
                          <img src="img/zahra.png" class="img-fluid" alt="">
                      </div>
                        <div class="member-info">
                            <h4>Zahra Khalila</h4>
                            <span>SAFETY AND SECURITY</span>
                            <span>DIRECTOR</span>
                            <div class="social-links">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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