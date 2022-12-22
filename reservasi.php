
<?php
include "koneksi.php";
require 'function.php';

        $id= $_GET['id'];

        $query = mysqli_query($koneksi, "SELECT * FROM member WHERE nama = '$id'");
        while ($item = mysqli_fetch_assoc($query)){
            $nama = $item["nama"];
        }

    if (isset($_POST["submit"])) {
        if (reservasi($_POST) > 0) {
            echo "
            <script>
                alert('Reservation Success');
                document.location.href = 'member.php';
            </script>
            ";
         } else {
            echo mysqli_error($koneksi);
        }
    }
 
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKR - Reservation</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="icon" type="image/x-icon" href="img/logoskr.png">
    
    <link href="header_footer_style.css" rel="stylesheet"/>
</head>


<body class="bg-light">

    <!-- Navbar -->
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
                            <a class="nav-link" aria-current="page" href="member.php">
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="reservasi.php?id=<?= $nama; ?>">
                                <span>Reservation</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="riwayatpesan.php?id=<?= $nama; ?>" >
                                <span>Details</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="akun.php?id=<?= $nama; ?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

    

    <!-- Reservation      -->
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-lg-12 m-auto" style="background-color: #2d2a70;  border-radius: 10px;">
                <h3 class="pt-3" style="color: white;">Ticket Reservation</h3>
                <div class="d-flex justify-content-center">
                    <div class="spinner-border text-primary" role="status" id="load" 
                         style=
                            "position : absolute;
                             top      : 50%;
                             display  : none;"
                    >
                    </div>
                </div>  
                <p style="color: white;">
                    <?php
                    $tanggal = date("d-M-Y");
                    $day = date('D', strtotime($tanggal));
                    $moon = date('M', strtotime($tanggal));
                    echo $day. ", ". date('d') . " " . $moon . " " . date('Y');
                    ?>
                </p>
                
                <hr>
                <form action="" method="POST" enctype="multipart/form-data">
                <!-- form start -->
                <div class="row">
                        <div class="col-lg-6 m-auto">
                        <h5 style="color: white;">Name</h5>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" name="nama" id="nama" value="<?= $nama ?>">
                            </div>    
                        </div>

                        <div class="col-lg-3 m-auto">
                            <h5 style="color: white;">Identity Type</h5>
                                <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa fa-id-card-o"></i></span>
                                    <select class="form-control" name="tipeIdentitas" id="tipeIdentitas" required autofocus>
                                        <option value="">Choose Identity Type</option>
                                        <option value="NIK">NIK</option>
                                        <option value="Paspor">Paspor</option>
                                    </select>
                                </div>
                        </div>

                        <div class="col-lg-3 m-auto">
                            <h5 style="color: white;">Identity Number</h5>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa fa-id-card-o"></i></span>
                                <input type="text" class="form-control" name="noIdentitas" id="noIdentitas" placeholder="Enter Identification Number" required autofocus>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-6 m-auto">
                            <h5 style="color: white;">Departure</h5>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa fa-train"></i></span>
                                <select class="form-control" name="staswal" id="staswal" required autofocus>
                                    <option value="">Choose Departure</option>
                                    <?php
                                        $staswal = mysqli_query($koneksi,"SELECT * FROM stawal ORDER BY name ASC");
                                        foreach ($staswal as $stawalid)
                                        echo '<option value="'.$stawalid['name'].'">'.$stawalid['name'].'</option>';
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 m-auto">
                            <h5 style="color: white;">Destination</h5>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="fa fa-train"></i></span>
                                <select class="form-control" name="stakhir" id="stakhir" required autofocus>
                                    <option>Choose Destination</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 m-auto">
                            <h5 style="color: white;">Date of Departure</h5>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=" fa fa-calendar"></i></span>
                                <input type="date" name="tanggal_berangkat"  min="<?= date('Y-m-d') ?>" class="form-control" required autofocus>
                            </div>
                        </div>

                        <div class="col-lg-3 m-auto">
                            <h5 style="color: white;">Time of Departure</h5>
                            <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                <select class="form-control" name="waktu" id="waktu">
                                    <option value="">Choose Time of Departure</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 m-auto"></div>
                    </div>
                    
                    <div class="d-grid">
                        <button type="submit" class="btn" style="background-color: #ed6b23; color: white;" name="submit" id="submit">Order Now</button>
                        <hr>
                    </div>
                </form>
            </div>
        </div>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript">

    $(document).ready(function () {
        $('#staswal').click(function () {
                $('#load').show();
                var name = $(this).val();
                $.ajax({
                    type: "POST",
                    dataType: "html",
                    url: "data_waktu2.php?jenis=stakhir",
                    data: "id_staswal=" + name,
                    success: function (msg) {
                        $('select#stakhir').html(msg);
                        $('#load').hide();
                        getAjaxStakhir();
                    }
                });
            });
        
            $("#stakhir").change(getAjaxStakhir);

            function getAjaxStakhir() {
                $("#load").show();
                var name = $("#staswal").val();
                $.ajax({
                    type: "POST",
                    dataType: "html",
                    url: "data_waktu2.php?jenis=waktu",
                    data: "id_staswal=" + name,
                    success: function (msg) {
                        $("select#waktu").html(msg);
                        $("#load").hide();
                    }
                });
            }

        });
    </script>
</body>
</html>

