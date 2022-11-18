<?php
if($_POST){
    $id_member=$_POST['id_member'];
    $nama_member=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['jk'];
    $telp=$_POST['telp'];
    if(empty($nama_member)){
        echo "<script>alert('nama tidak boleh kosong');location.href='ubah_member.php?id_member=".$id_member."';</script>";

    } else {
        include "koneksi.php";
        $update=mysqli_query($conn,"update member set nama='".$nama_member."', alamat='".$alamat."', jk='".$gender."', telp='".$telp."'  where id_member = '".$id_member."'") or die(mysqli_error($conn));
        if($update){
            echo "<script>alert('Sukses update member');location.href='tampil_member.php';</script>";
        } else {
            echo "<script>alert('Gagal update member');location.href='ubah_member.php?id_member=".$id_member."';</script>";
        }
        
    } 
}
?>