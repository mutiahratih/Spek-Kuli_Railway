<?php
require_once("koneksi.php");

$id= $_GET['id'];

if (isset($_POST['update'])){
    $varnama            = $_POST['nama'];
    $varemail           = $_POST['email'];
    $vartelepon         = $_POST['telepon'];
    $vargender          = $_POST['gender'];
    $vartglLahir        = $_POST['tglLahir'];

    $result = mysqli_query($koneksi, "UPDATE member SET nama='$varnama', telepon='$vartelepon', email='$varemail', gender='$vargender', tglLahir='$vartglLahir'   WHERE nama='$id'");
    
    if ($result){
        header("Location: akun.php");
    }
}

    $result = mysqli_query($koneksi, "SELECT * FROM member WHERE nama ='$id'");
    while($item = mysqli_fetch_array($result)){
    $varnama            = $item['nama'];
    $varemail           = $item['email'];
    $vartelepon         = $item['telepon'];
    $vargender          = $item['gender'];
    $vartglLahir        = $item['tglLahir'];
    }
?>

<!doctype html>
<html>

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Change Profile</title>

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
    <hr>

<div id="content-wrapper">
	<div class="container">
        <div class="box box-primary" style="width:100%">
            <div class="box-body box-profile col-md-6 col-sm-12" style="margin:auto; float:unset; color: white"">
                <center><h1>Change Profile</h1></center>
                
                <hr>
                <form action="edit_profile.php?id=<?= $id ?>" method="post">
                    <table width="100%" style="color: white">
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="nama" class="form-control" value="<?= $varnama ?>"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="email" name="email" class="form-control" value="<?= $varemail ?>"></td>
                        </tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td><input type="tglLahir" name="tglLahir" class="form-control" value="<?= $vartglLahir?>"></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td><input type="gender" name="gender" class="form-control" value="<?= $vargender?>"></td>
                        </tr>
                        <tr>
                            <td>Telephone</td>
                            <td><input type="telepon" name="telepon" class="form-control" value="<?= $vartelepon?>"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <hr>
                            <button class="btn btn-lg" name="update" type="submit" style="background-color: #ed6b23; color:white ">Update Profile</button>
                            
                        </tr>
                    </table>
                </form>
                    
                <br>
            </div>
        </div>
    </div> 
</div> 

</body>
</html>