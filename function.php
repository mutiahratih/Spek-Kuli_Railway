<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "skr";
    $koneksi = mysqli_connect($host, $username, $password, $database);

    if (mysqli_connect_errno()) {
        die("Connection failed: " . mysqli_connect_error());
    }
    include "koneksi.php";

    function registrasi($data)
    {
        global $koneksi;

        $email = $data["email"];
        $password = mysqli_escape_string($koneksi, $data["password"]);
        $konPassword = mysqli_escape_string($koneksi, $data["konPassword"]);
        $gender = $data["gender"];
        $tipeIdentitas = $data["tipeIdentitas"];
        $tglLahir = $data["tglLahir"];
        $telepon = $data["telepon"];
        $nama = $data["nama"];
        $noIdentitas = $data["noIdentitas"];
        $level = ("member");        


        $result = mysqli_query($koneksi, "SELECT email FROM member WHERE email = '$email'");

        if(mysqli_fetch_assoc($result)){
            echo "<script>alert('email sudah terdaftar')</script>";
            return false;
        }
    
        if ( !preg_match('~[0-9]+~', $password) ) {
            echo "<script>alert('password harus mengandung angka, minimal satu angka')</script>";
            return false;
        }
    
        if( !preg_match('/[A-Z]/', $password) ){
            echo "<script>alert('password harus mengandung huruf kapital, minimal satu huruf kapital')</script>";
            return false;
        }
    
        if( strlen($password) < 8 ){
            echo "<script>alert('password kurang dari 8 karakter')</script>";
            return false;
        }

        if ($password != $konPassword) {
            echo "
                <script>
                    alert('konfirmasi password tidak sama')
                </script>
            ";
            return false;

        } else {
            $password = password_hash($password, PASSWORD_DEFAULT); //tambah parameter PASSWORD_DEFAULT
            $konPassword = password_hash($konPassword, PASSWORD_DEFAULT);
            $result = mysqli_query($koneksi, "INSERT INTO member Values ('', '$gender', '$tipeIdentitas', '$tglLahir', '$telepon', '$nama', '$noIdentitas', '$email', '$password', '$konPassword', '$level')");

            return mysqli_affected_rows($koneksi);
        }
    };

    function reservasi($data)
    {
        global $koneksi;

        $tipeIdentitas = $data["tipeIdentitas"];
        $nama = $data["nama"];
        $noIdentitas = $data["noIdentitas"];
        $stasiun_awal = $data["staswal"];
        $stasiun_tujuan = $data["stakhir"];
        $tanggal_pesan = date("Y-m-d");
        $tanggal_berangkat = $data["tanggal_berangkat"];
        $waktu_berangkat = $data["waktu"];
        $status = ("ordered");

        $result = mysqli_query($koneksi, "INSERT INTO reservasi Values ('', '$tipeIdentitas', '$nama', '$noIdentitas', '$stasiun_awal', '$stasiun_tujuan', '$tanggal_pesan', '$tanggal_berangkat', '$waktu_berangkat', '$status') ");
    
        return mysqli_affected_rows($koneksi);
    }

    function cancle_pesanan($id){
        global $koneksi;
       
        $result = mysqli_query($koneksi, "UPDATE reservasi SET status='cancle' where id=$id ");
    
        return mysqli_affected_rows($koneksi);
    }
?>