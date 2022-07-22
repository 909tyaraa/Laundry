<?php
include("koneksi.php");
if(isset($_POST['id_user'])){
    $id_user = $_POST['id_user'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $role = $_POST['role'];

    $sql = "UPDATE user SET nama='$nama', id_user='$id_user', nama='$nama', username='$username', role ='$role' WHERE id_user=$id_user";
    $query = mysqli_query($conn, $sql);

    if($query){
        header('Location: tampil_user.php');
    }else{
        die("Gagal menyimpan perubahan");
    }
}
?>