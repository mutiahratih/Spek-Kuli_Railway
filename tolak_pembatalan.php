<?php
 include "koneksi.php";
global $koneksi;

$id=$_GET['id_reservasi'];
       
$result = mysqli_query($koneksi, "UPDATE reservasi SET status='ordered' where id_reservasi=$id ");

header("location:cancel.php");
return mysqli_affected_rows($koneksi);