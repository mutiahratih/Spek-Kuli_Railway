<?php 
session_start();
$_SESSION['session_email'] = "";
$_SESSION['session_password'] = "";
session_destroy();

$cookie_nama = "cookie_email";
$cookie_value = "";
$time = time() - (60 * 60);
setcookie($cookie_nama,$cookie_value,$time,"/");

$cookie_nama = "cookie_password";
$cookie_value = "";
$time = time() - (60 * 60);
setcookie($cookie_nama,$cookie_value,$time,"/");

header("location:index.php");