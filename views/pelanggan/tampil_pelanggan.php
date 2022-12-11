<h3>Tampil Pelanggan</h3>
<table class="table table-hover table-striped">
    <thead>
        <tr>
        <th>NO</th>
        <th>NAMA PELANGGAN</th>
        <th>USERNAME</th>
        <th>PASSWORD</th>
        <th>ALAMAT</th>
        <th>TELP</th>
        <th>AKSI</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "././koneksi.php";
            $qry_pelanggan=mysqli_query($conn,"select * from pelanggan");
            $no=0;
        while($data_pelanggan = mysqli_fetch_array($qry_pelanggan)){
            $no++;
        ?>
        <tr>
        <td><?=$no?></td><td><?=$data_pelanggan['nama']?></td>
        <td><?=$data_pelanggan['username']?></td>
        <td><?=$data_pelanggan['password']?></td>
        <td><?=$data_pelanggan['alamat']?></td>
        <td><?=$data_pelanggan['telp']?></td>
        <td><a href="index.php?page=ubah_pelanggan&id_pelanggan=<?=$data_pelanggan['id_pelanggan']?>" class="btn btn-success">Ubah</a> | 
        <a href="index.php?page=hapus_pelanggan&id_pelanggan=<?=$data_pelanggan['id_pelanggan']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>