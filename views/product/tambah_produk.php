<h3>Tambah Produk</h3>
<form action="views/product/proses_tambah_produk.php" method="post" enctype="multipart/form-data">
    
    Nama Produk :
    <input type="text" name="nama_produk" value="" class="form-control">
    Deskripsi :
    <textarea name="deskripsi" class="form-control"rows="4"></textarea>
    Harga :
    <input type="text" name="harga" value="" class="form-control">
    Foto Produk :
    <input type="file" name="file" class="form-control">
    <input type="submit" name="simpan" value="Tambah Produk" class="btn btn-primary">
</form>