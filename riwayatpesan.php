<?php
    include "koneksi.php";
    require 'function.php';
    
            $id= $_GET['id'];
    
            $query = mysqli_query($koneksi, "SELECT * FROM member WHERE nama = '$id'");
            while ($item = mysqli_fetch_assoc($query)){
                $nama = $item["nama"];
            }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SKR - Detail Reservation</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="icon" type="image/x-icon" href="img/logoskr.png">
    
    <link href="header_footer_style.css" rel="stylesheet"/>
</head>
<body>

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
    <hr>
    
    <!-- Details  -->
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-lg-12 m-auto" style="background-color: #ed6b23; border-radius: 10px; color: white;">
            <center><h5 class="pt-3" style="color: white;">Ticket Reservation</h5></center>
            <br>
            <div style="overflow-x:auto;">
            <table class="table table-striperd table-bordered" id="table-data" style= "background-color: #2d2a70; color: white;">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Departure</th>
                        <th>Destination</th>
                        <th>Date ordered</th>
                        <th>Date of Departure</th>
                        <th>Time of Departure</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        global $koneksi;
                        $id= $_GET['id'];
                        $query = mysqli_query($koneksi, "SELECT * FROM reservasi WHERE nama ='$id'");
                        foreach ($query as $row) { ?>
                            <tr>
                                <td><?= $row['nama']; ?></td>
                                <td><?= $row['stasiun_awal']; ?></td>
                                <td><?= $row['stasiun_tujuan']; ?></td>
                                <td><?= $row['tanggal_pesan']; ?></td>
                                <td><?= $row['tanggal_berangkat']; ?></td>
                                <td><?= $row['waktu_keberangkatan']; ?></td>
                                <td><?= $row['status']; ?></td>
                                <td> 
                                <?php
                                    $stat = $row['status'];
                                    if ($stat == 'canceled'){
                                        echo '<a href="#" class="btn btn-sm disabled" style="background-color: #ed6b23; color: white;">Cancellation Request</a>';
                                    } else {
                                        ?><a href="http://localhost/pemweb/UAS2/pengajuan_pembatalan.php?id_reservasi=<?= $row['id_reservasi']?>" class="btn btn-sm" style="background-color: #ed6b23; color: white;">Cancellation Request</a>
                                    <?php } ?>                          
                                </td>                                
                            </tr> 
                    <?php } ?>
                </tbody>
            </table>
            </div>
            
            <br>
            </div>
        </div>
    </div>
    <hr>

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
   
    <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, dan  yang terakhit Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            //DataTable
            $('#table-data').DataTable( {
                "searching" : false
            });

        });
        function cancle_pesanan(id,status) {
        console.log(id)
        
        }
    </script>

</body>
</html>