<?php
include("koneksi.php");
if($_POST){
    $id_transaksi=$_POST['id_transaksi'];
    $id_member=$_POST['id_member'];
    $tgl=$_POST['tgl'];
    $batas_waktu=$_POST['batas_waktu'];
    $tgl_bayar=$_POST['tgl_bayar'];
    $status=$_POST['status'];
    $dibayar=$_POST['dibayar'];
    $kategori=$_POST['kategori'];
    $qty=$_POST['qty'];
    $id_user=$_POST['id_user'];

    $paket=$_POST['id_paket'];

    $total=0;
    for ($i=0; $i < count($paket); $i++) { 
        // select transaksi
            $id_paket = $paket[$i];
            $sql = "select * from paket where id_paket ='$id_paket'";
            $hasil = mysqli_query($conn, $sql);
            $laund = mysqli_fetch_array($hasil);
            $harga = $laund["harga"];
            if ($kategori == 'cuci') {
                $harga += 0;
            } else if($kategori == 'cuci setrika') {
                $harga += 1500;
            } else if($kategori == 'setrika'){
                $harga += 500;
            }
            
    
            $total += $qty * $harga;
        }
    
        $sql = "insert into transaksi values
        ('$id_transaksi','$id_member','$tgl','$batas_waktu','$tgl_bayar','$status',
        '$dibayar','$total','$id_user')";
    
        if (mysqli_query($conn, $sql)) {
            # jika berhasil insert ke tabel transaksi
            # insert ke tabel detail transaksi
            for ($i=0; $i < count($paket); $i++) { 
                $id_paket = $paket[$i];
            
                $sql = "insert into detil_transaksi values
                ('','$id_transaksi','$id_paket','$qty')";
                if (mysqli_query($conn, $sql)) {
                
                }else {
                    # jika gaga insert ke table detail_transaksi
                    echo mysqli_error($conn);
                    exit;
                }
            }
            header('Location:tampil_transaksi.php');
        }else{
            # jia gagal insert tabel transaksi
            echo mysqli_error($conn);
        }
    }
    


?>