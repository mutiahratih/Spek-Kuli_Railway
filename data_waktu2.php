<?php
    include "koneksi.php";
    switch ($_GET['jenis']) {
        case 'stakhir':
            $id_staswal = $_POST['id_staswal'];
            if($id_staswal == ''){
                exit;
            } else {
                $query = mysqli_query($koneksi, "SELECT * FROM stakhir WHERE stawal_name='$id_staswal' ORDER BY name ASC") or die ('Query Gagal');
                while($data = mysqli_fetch_array($query)){
                    echo '<option value="'.$data['name'].'">'.$data['name'].'</option>';
                }
                exit;
            }
            break;

        case 'waktu':
            $id_staswal = $_POST['id_staswal'];
            if($id_staswal == ''){
                exit;
            } else {
                $query = mysqli_query($koneksi, "SELECT * FROM waktu_berangkat WHERE stawal_name='$id_staswal' ") or die ('Query Gagal');
                while($data = mysqli_fetch_array($query)){
                    echo '<option value="'.$data['name'].'">'.$data['name'].'</option>';
                }
                exit;
            }
            break;
    }
?>