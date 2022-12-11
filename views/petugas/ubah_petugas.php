<?php
    include "././koneksi.php";
        $qry_get_petugas=mysqli_query($conn,"select * from petugas where id_petugas = '".$_GET['id_petugas']."'");
        $dt_petugas=mysqli_fetch_array($qry_get_petugas);
?>
<h3>Ubah Petugas</h3>
<form action="views/petugas/proses_ubah_petugas.php" method="post">
    <input type="hidden" name="id_petugas" value="<?=$dt_petugas['id_petugas']?>">

    Nama Petugas :
    <input type="text" name="nama_petugas" value="<?=$dt_petugas['nama_petugas']?>" class="form-control">
    Username :
    <input type="text" name="username" value="<?=$dt_petugas['username']?>" class="form-control">
    Password :
    <input type="password" name="password" value="" class="form-control">
    Level :
    <input type="level" name="level" value="<?=$dt_petugas['level']?>" class="form-control">
    <input type="submit" name="simpan" value="Ubah Petugas" class="btn btn-primary">
</form>