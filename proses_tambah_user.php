<?php
if($_POST){
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $alamat=$_POST['alamat'];
    $password= $_POST['password'];
    $kota=$_POST['kota'];
    $provinsi=$_POST['provinsi'];
    $role=$_POST['role'];
    if(empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_user.php';</script>";

    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_user.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_user.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into user (nama, username, alamat, password, kota,  provinsi, role) value ('".$nama."','".$username."','".$alamat."','".md5($password)."','".$kota."','".$provinsi."','".$role."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan User');location.href='tampil_user.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan User');location.href='tampil_user.php';</script>";
        }
    }
}
?>