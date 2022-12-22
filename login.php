<?php
    session_start();
    require('function.php');
    
    $error = '';
    $validate = '';
    
    if( isset($_POST['login']) ){
            
            $email = stripslashes($_POST['email']);
            $email = mysqli_real_escape_string($koneksi, $email);
            $password = stripslashes($_POST['password']);
            $password = mysqli_real_escape_string($koneksi, $password);
            // $level = stripslashes($_POST['level']);
            // $level = mysqli_real_escape_string($koneksi, $level);
            
            if(!empty(trim($email)) && !empty(trim($password))){
    
                $query      = "SELECT * FROM member WHERE email = '$email'";
                $result     = mysqli_query($koneksi, $query);
                $rows       = mysqli_num_rows($result);
                $row        = mysqli_fetch_array($result);
                $_SESSION["email"]=$row["email"];
                $_SESSION["level"]=$row["level"];

    
                if ($row != 0) {
                    //langsung verify
                    if (password_verify($password, $row["password"])) {
                        if ($_SESSION["level"]=$row["level"]=='member'){
                            header("Location:member.php");  
                        } 
                    } else if ($_SESSION["level"]=$row["level"]=='admin' AND $password==$row["password"]){
                        header("Location:admin.php");

                    }else { ?>
                        <script language="JavaScript">
                            alert('Email and Password are incorrect. Plese try again!');
                            document.location='login.php';
                        </script>
                    <?php }
                           
                } else {
                    $error =  'Register User Gagal !!';
                }
                
            }else {
                $error =  'Data tidak boleh kosong !!';
            }
    }
        
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body class="bg-light">
<div class="container my-4">    
    <div id="loginbox" style="margin-top:100px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
            <div class="panel-heading" style="background-color: #2d2a70;">
                <h2 class="text-center pt-2" style="color: white;">LOGIN</h2>
                <!-- <div class="panel-title" >Login dan Masuk Ke Sistem</div> -->
            </div>      
            <div style="background-color: #ed6b23; padding-top:30px" class="panel-body" >
                              
                <form id="loginform" class="form-horizontal" action="" method="POST" role="form">       
                    <div style="margin-bottom: 25px" class="input-group">
                        <span for="email" class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="email" type="text" class="form-control" name="email" value="" placeholder="email">                                        
                    </div>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span for="InputPassword" class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="InputPassword" type="password" class="form-control" name="password" placeholder="password">
                    </div>
                                    
                    <div class="mb-3">                  
                        <div class="form" style="color: #2d2a70;;">
                        <h3><center><button class="w-100 btn btn-lg" name="login" type="submit" style="background-color: #2d2a70; color:white ">Login</button>
                        </div>
                        <div class="checkbox">
                            <center>
                            Don't have an account? <a href="registrasi.php" style="text-decoration: none; color: #2d2a70;" class="link-danger">Register Now</a>
                            </center>                            
                        </div>
                    </div>
                </form>

            </div>                     
        </div>  
    </div>
</div>
</body>
</html>