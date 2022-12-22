<?php
require 'koneksi.php';
    // inisialisasi session
    session_start();
    
    $nama = $_SESSION["email"];
    
    //cek apakah user sudah login
    if(!isset($_SESSION['email'])){
        header('Location: login.php');
        exit;
    }

    //cek level user
    $query      = "SELECT * FROM member WHERE email = '$nama'";
    $result     = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
    $_SESSION["level"]=$row["level"];

    if($_SESSION["level"]=$row["level"]!='member'){
        die("Anda bukan member");
    }
    
    $result = mysqli_query($koneksi, "SELECT * FROM member ORDER BY id_member DESC")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SKR - Profile Member</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="icon" type="image/x-icon" href="img/logoskr.png">
    
    <link href="header_footer_style.css" rel="stylesheet"/>
</head>
<body style="background-color: #2d2a70">
    
<div id="content-wrapper">
	<div class="container mt-5">
    <div class="box box-primary" style="width:100%">
        <div class="box-body box-profile col-md-6 col-sm-12" style="margin:auto; float:unset; color: white">
            <hr>
            <center><h1>Profile</h1></center>
            <br>
                <table class="table table-striperd table-bordered" style="color: white">
                    <?php
                        global $koneksi;
                        $no=1;
                        $query = mysqli_query($koneksi, "SELECT * FROM member WHERE email = '$nama'");
                    
                            while ($row = mysqli_fetch_array($query)) { ?>
                                <tr>
                        <th>Name</th>
                        <td><span><?= $row['nama']; ?></span></td>
                        
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><span><?= $row['email']; ?></span></td>
                    </tr>
                    <tr>
                        <th>Date of Birth</th>
                        <td><span><?= $row['tglLahir']; ?></span></td>
                            
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td><span><?= $row['gender']; ?></span></td>
                    </tr>
                    <tr>
                        <th>Telephone</th> 
                        <td><span><?= $row['telepon']; ?></span></td>
                    </tr>
                                  
                </table>
            <br>
            <div class="d-grid">                       
                <a href="edit_profile.php?id=<?= $row['nama']; ?>" class="btn btn-block" style="background-color: #ed6b23; color: white"><b>Change Profile <i class="fa fa-edit"></i></b></a>
                <br>
                <a href="member.php?id=<?= $row['nama']; ?>" class="btn btn-block" style="background-color: #ed6b23; color: white"><b>Back to Dashboard</b></a>
            </div>
            <hr>
            <?php } ?>
        </div>
    </div>
    </div> 
</div> 

    <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, dan  yang terakhit Bootstrap JS -->
    <!-- CDN JS  -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.1.5/js/iziToast.min.js"></script>
    <script>iziToast.({title: "",message: "",});</script>
</body>
</html>