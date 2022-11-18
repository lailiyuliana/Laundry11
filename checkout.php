<?php 
    session_start();
    if($_POST){
    include "koneksi.php";
    $cart=@$_SESSION['cart'];
    $tgl_selesai=date('Y-m-d',mktime(0,0,0,date('m'),(date('d')+2),date('Y')));
    if(count($cart)>0){
            mysqli_query($conn,"insert into transaksi (id_member,tgl_transaksi,batas_waktu,tgl_bayar,status_bayar,status_order,id_user) value('".$_POST['nama']."','".date('Y-m-d')."','".$tgl_selesai."','".date('Y-m-d')."','".$_POST['status']."','baru','".$_SESSION['id_user']."')");
        } else {
            mysqli_query($conn,"insert into transaksi (id_member,tgl_transaksi,batas_waktu,status_order,status_bayar,id_user) value('".$_POST['nama']."','".date('Y-m-d')."','".$tgl_selesai."','baru','".$_POST['status_order']."','".$_SESSION['id_user']."')");
        }
        $id=mysqli_insert_id($conn);
 
        foreach ($cart as $key_produk => $val_produk) {
            mysqli_query($conn,"insert into detail_transaksi (id_transaksi,id_paket,qty) value('".$id."','".$val_produk['id_paket']."','".$val_produk['qty']."')");
        }
 
 
        unset($_SESSION['cart']);
        echo '<script>alert("Anda berhasil melakukan transaksi");location.href="histori_transaksi.php"</script>';
    }
?>