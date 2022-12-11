<?php
    include "././koneksi.php";
        $qry_get_produk=mysqli_query($conn,"select * from produk where id_produk = '".$_GET['id_produk']."'");
        $dt_produk=mysqli_fetch_array($qry_get_produk);
?>
<h3>Ubah Produk</h3>
<form action="views/product/proses_ubah_produk.php" method="post">
    <input type="hidden" name="id_produk" value="<?=$dt_produk['id_produk']?>">

    Nama Produk :
    <input type="text" name="nama_produk" value="<?=$dt_produk['nama_produk']?>" class="form-control">
    Deskripsi :
    <textarea name="deskripsi" class="form-control" rows="4"><?=$dt_produk['deskripsi']?></textarea>
    Harga :
    <input type="harga" name="harga" value="" class="form-control">
    Foto Produk :
    <input type="foto_produk" name="foto_produk" value="<?=$dt_produk['foto_produk']?>" class="form-control">
    <input type="submit" name="simpan" value="Ubah Produk" class="btn btn-primary">
</form>