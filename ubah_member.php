<?php 
    include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php 
    include "koneksi.php";
    $qry_get_member=mysqli_query($conn,"select * from member where id_member = '".$_GET['id_member']."'");

//cara menampilkan webnya, dengan cara membuka tampil siswa, klik button ubah
//baru bisa masuk kedalam web ubah siswa
    //get, post. 
//Post: ngambil data, posting. 
//Form tidak ada ?id.siswa.12 dikarenakan tidak terlihat
//get: data dari url. 
//contoh: localhost/perpus/ubahsiswa?id.siswa.12
    $dt_member=mysqli_fetch_array($qry_get_member);
    ?>
    <h3>Ubah Member</h3>
    <form action="proses_ubah_member.php" method="post">
        <input type="hidden" name="id_member" value="<?=$dt_member['id_member']?>">
        Nama Member :
        <input type="varchar" name="nama" value="<?=$dt_member['nama']?>" class="form-control">
        Gender : 
        <select name="jk" class="form-control">
            <option></option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
        Alamat : 
        <textarea name="alamat" class="form-control" rows="4"><?=$dt_member['alamat']?></textarea>
        </select>
        No. Telepon : 
        <textarea name="telp" class="form-control" rows="4"><?=$dt_member['telp']?></textarea>
        <input type="submit" name="simpan" value="Ubah Member" class="btn btn-primary">
       </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>