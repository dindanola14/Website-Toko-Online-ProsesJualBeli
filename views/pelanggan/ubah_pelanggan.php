<?php
    include "././koneksi.php";
        $qry_get_pelanggan=mysqli_query($conn,"select * from pelanggan where id_pelanggan = '".$_GET['id_pelanggan']."'");
        $dt_pelanggan=mysqli_fetch_array($qry_get_pelanggan);
?>
<h3>Ubah pelanggan</h3>
<form action="views/pelanggan/proses_ubah_pelanggan.php" method="post">
    <input type="hidden" name="id_pelanggan" value="<?=$dt_pelanggan['id_pelanggan']?>">

    Nama pelanggan :
    <input type="text" name="nama" value="<?=$dt_pelanggan['nama']?>" class="form-control">
    Username :
    <input type="text" name="username" value="<?=$dt_pelanggan['username']?>" class="form-control">
    Password :
    <input type="password" name="password" value="" class="form-control">
    Alamat :
    <input type="text" name="alamat" value="<?=$dt_pelanggan['alamat']?>" class="form-control">
    Telp :
    <input type="text" name="telp" value="<?=$dt_pelanggan['telp']?>" class="form-control">
    <input type="submit" name="simpan" value="Ubah pelanggan" class="btn btn-primary">
</form>
