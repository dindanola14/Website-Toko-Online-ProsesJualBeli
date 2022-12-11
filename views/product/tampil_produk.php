<h3>Tampil Produk</h3>
<table class="table table-hover table-striped">
    <thead>
        <tr>
        <th>NO</th>
        <th>NAMA PRODUK</th>
        <th>DESKRIPSI</th>
        <th>HARGA</th>
        <th>FOTO PRODUK</th>
        <th>AKSI</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "././koneksi.php";
            $qry_produk=mysqli_query($conn,"select * from produk");
            $no=0;
        while($data_produk = mysqli_fetch_array($qry_produk)){
            $no++;
        ?>
        <tr>
        <td><?=$no?></td><td><?=$data_produk['nama_produk']?></td>
        <td><?=$data_produk['deskripsi']?></td>
        <td><?=$data_produk['harga']?></td>
        <td><?=$data_produk['foto_produk']?></td>
        <td><a href="index.php?page=ubah_produk&id_produk=<?=$data_produk['id_produk']?>" class="btn btn-success">Ubah</a> | 
        <a href="index.php?page=hapus_produk&id_produk=<?=$data_produk['id_produk']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>