<?php
 include "koneksi.php";
global $koneksi;

$id=$_GET['id_reservasi'];
       
$result = mysqli_query($koneksi, "UPDATE reservasi SET status='filed for cancellation' where id_reservasi=$id ");

header("location:member.php");
return mysqli_affected_rows($koneksi);