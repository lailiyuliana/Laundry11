<?php
if($_POST){
    $nama_paket=$_POST['nama_paket'];
    $harga=$_POST['harga'];
    if(empty($nama_paket)){
        echo "<script>alert('nama paket tidak boleh kosong');location.href='tambah_paket.php';</script>";
    } elseif(empty($harga)){
        echo "<script>alert('harga tidak boleh kosong');location.href='tambah_paket.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into user (nama, harga) value ('".$nama."','".$harga."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan Paket');location.href='tambah_paket.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Paket');location.href='tambah_paket.php';</script>";
        }
    }
}
?>