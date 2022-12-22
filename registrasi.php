<?php
require 'function.php';

if (isset($_POST["submit"])) {
    if (registrasi($_POST) > 0) {
        echo "
        <script>
            alert('Registration Success');
            document.location.href = 'login.php';
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
    <title>Registrasi</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"> 
</head>

<body class="bg-light">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-4 m-auto" style="background-color: #ed6b23; border-radius: 10px;">
                <h2 class="text-center pt-3" style="color: #2d2a70;">Register Now</h2>
                <hr>
                <!-- form start -->
                <form action="" method="post" enctype="multipart/form-data">
                    <h5 style="color: white;">Full Name</h5>
                    <div class="input-group mb-3">
                        <label for="nama" class="input-group-text"><i class="fa fa-user"></i></label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Enter Your Name">
                    </div>
                    <h5 style="color: white;">Gender</h5>
                    <div class="input-group mb-3">
                    <label for="gender" class="input-group-text"><i class="fa fa-male"></i></label>                   
                    <select name="gender" id="gender" class="form-control" required >
                        <option value="">Select Your Gender</option>
                        <option value="Laki-Laki">Male</option>
                        <option value="Perempuan">Female</option>
                    </select>                    
                   </div>
                   <h5 style="color: white;">Identity Type</h5>
                   <div class="input-group mb-3">
                    <label for="tipeIdentitas" class="input-group-text"><i class="fa fa-book"></i></label>                   
                    <select name="tipeIdentitas" id="tipeIdentitas" class="form-control" required >
                        <option value="">Select Your Identity Type</option>
                        <option value="NIK">NIK</option>
                        <option value="Paspor">Passport</option>
                    </select>                    
                   </div>
                   <h5 style="color: white;">Identity Number</h5>
                   <div class="input-group mb-3">
                        <label for="noIdentitas" class="input-group-text"><i class="fa fa-book"></i></label>
                        <input type="text" name="noIdentitas" class="form-control" placeholder="Enter Your Identity Number" required autofocus>
                    </div>
                    <h5 style="color: white;">Date of Birth</h5>
                    <div class="input-group mb-3">
                        <label for="tglLahir" class="input-group-text" ><i class="fa fa-calendar"></i></label>
                        <input type="date" name="tglLahir"  max="<?= date('Y-m-d') ?>" class="form-control" required autofocus>
                    </div>
                    <h5 style="color: white;">Email</h5>
                    <div class="input-group mb-3">
                        <label for="email" class="input-group-text"><i class="fa fa-envelope"></i></label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email" required autofocus>
                    </div>
                    <h5 style="color: white;">Phone Number</h5>
                    <div class="input-group mb-3">
                        <label for="telepon" class="input-group-text"><i class="fa fa-phone"></i></label>
                        <input type="text" name="telepon" class="form-control" placeholder="Enter Your Phone Number" 
                        onkeypress="return hanyaAngka(event)" maxlength="13" required autofocus><br>                        
                    </div>
                    <span></span>
                    <hr>
                    <h2 class="text-center pt-3" style="color: #2d2a70;">Authentication</h2>
                    <hr>
                    <div class="input-group mb-3">
                        <label for="password" class="input-group-text"><i class="fa fa-lock"></i></label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required autofocus>
                    </div>
                    <div class="input-group mb-3">
                        <label for="konPassword" class="input-group-text"><i class="fa fa-lock"></i></label>
                        <input type="password" name="konPassword" class="form-control" id="konPassword" placeholder="Repeat Password" required autofocus>
                    </div>
                  
                    <div class="d-grid">
                        <div class="form">
                            <center><button style="background-color: #2d2a70; color: white;" name="submit" id="submit" type="submit" class="btn" >Register Now</button></center>                                           
                        </div>
                        <div class="checkbox">
                            <hr>
                            <p class="text-center" style="color: white;">
                            Already have an account ? <a class="href" style="color: #2d2a70;" href="login.php">Log in</a>
                            </p>
                        </div>                        
                    </div>                   
                </form>
            </div>
        </div>
    </div>
    <!-- <body class="bg-light">
    <div class="container">
        <div class="row mt-3 mb-5">
            <div class="col-lg-4 m-auto" style="background-color: #ed6b23; border-radius: 10px;">
                <h2 class="text-center pt-3" style="color: #2d2a70;">Otentikasi</h2>
                <hr>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <label for="password" class="input-group-text"><i class="fa fa-lock"></i></label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Kata Sandi" required autofocus>
                    </div>
                    <div class="input-group mb-3">
                        <label for="konPassword" class="input-group-text"><i class="fa fa-lock"></i></label>
                        <input type="password" name="konPassword" class="form-control" id="konPassword" placeholder="Ulangi Kata Sandi" required autofocus>
                    </div>
                  
                    <div class="d-grid">
                        <div class="form">
                            <center><button style="background-color: #2d2a70; color: white;" name="submit" id="submit" type="submit" class="btn" >Daftar Sekarang</button></center>                                           
                        </div>
                        <div class="checkbox">
                            <hr>
                            <p class="text-center" style="color: white;">
                                Sudah Punya Akun ? <a class="href" style="color: #2d2a70;" href="login.php">Masuk Disini</a>
                            </p>
                        </div>                        
                    </div>                                    
                   
            </div>
        </div>
    </div> -->
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>

<script>
    function hanyaAngka(event) {
        var angka = (event.which) ? event.which : event.keyCode
        if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
            return false;
        return true;
    }
</script>