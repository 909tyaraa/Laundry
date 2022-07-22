<?php
include("koneksi.php");
if(isset($_POST['id_outlet'])){
    $id_outlet = $_POST['id_outlet'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE outlet SET nama='$nama', id_outlet='$id_outlet', nama='$nama', alamat='$alamat' WHERE id_outlet=$id_outlet";
    $query = mysqli_query($conn, $sql);

    if($query){
        header('Location: tampil_outlet.php');
    }else{
        die("Gagal menyimpan perubahan");
    }
}
?>