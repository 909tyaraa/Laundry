<?php
    if($_POST){
        $id_transaksi=$_POST['id_transaksi'];
        $id_member=$_POST['id_member'];
        $tgl_transaksi=$_POST['tgl_transaksi'];
        $batas_waktu=$_POST['batas_waktu'];
        $tgl_bayar=$_POST['tgl_bayar'];
        $status_transaksi=$_POST['status_transaksi'];
        $dibayar=$_POST['dibayar'];
        $id_user=$_POST['id_user'];
        if(empty($id_member)){
            echo "<script>alert('id member tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
        } elseif(empty($tgl_transaksi)){
            echo "<script>alert('tgl transaksi tidak boleh kosong');location.href='tambah_transaksi.php';</script>";

        } elseif(empty($batas_waktu)){
            echo "<script>alert('batas waktu tidak boleh kosong');location.href='tambah_transaksi.php';</script>";

        } elseif(empty($tgl_bayar)){
            echo "<script>alert('tgl bayar tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
        } elseif(empty($status_transaksi)){
            echo "<script>alert('status transaksi tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
        } elseif(empty($dibayar)){
            echo "<script>alert('dibayar tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
        } elseif(empty($id_user)){
            echo "<script>alert('id user tidak boleh kosong');location.href='tambah_transaksi.php';</script>";
        } else {
            include "koneksi.php";

                $update=mysqli_query($conn,"update transaksi set id_member='".
                $id_member."', tgl_transaksi='".$tgl_transaksi."', batas_waktu='".$batas_waktu."', tgl_bayar='".$tgl_bayar."' , status_transaksi='".$status_transaksi."' , dibayar='".$dibayar."' , id_user='".$id_user."' WHERE id_transaksi='".$id_transaksi."'") or die(mysqli_error($conn));
                if($update){
                    echo "<script>alert('Sukses update transaksi');location.href='tampil_transaksi.php';</script>";
                } else {
                    echo "<script>alert('Gagal update transaksi');location.href='ubah_transaksi.php?id_transaksi=".$id_transaksi."';</script>";
                }

            }

        }


    ?>