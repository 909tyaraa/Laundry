<?php
include("koneksi.php");
if(isset($_POST['id_paket'])){
    $id_paket = $_POST['id_paket'];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];

    $sql = "UPDATE paket SET jenis='$jenis', id_paket='$id_paket', jenis='$jenis', harga='$harga' WHERE id_paket=$id_paket";
    $query = mysqli_query($conn, $sql);

    if($query){
        header('Location: tampil_paket.php');
    }else{
        die("Gagal menyimpan perubahan");
    }
}
?>