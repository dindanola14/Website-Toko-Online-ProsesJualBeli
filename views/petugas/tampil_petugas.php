<h3>Tampil Petugas</h3>
<table class="table table-hover table-striped">
    <thead>
        <tr>
        <th>NO</th>
        <th>NAMA PETUGAS</th>
        <th>USERNAME</th>
        <th>PASSWORD</th>
        <th>LEVEL</th>
        <th>AKSI</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "././koneksi.php";
            $qry_petugas=mysqli_query($conn,"select * from petugas");
            $no=0;
        while($data_petugas = mysqli_fetch_array($qry_petugas)){
            $no++;
        ?>
        <tr>
        <td><?=$no?></td><td><?=$data_petugas['nama_petugas']?></td>
        <td><?=$data_petugas['username']?></td>
        <td><?=$data_petugas['password']?></td>
        <td><?=$data_petugas['level']?></td>
        <td><a href="index.php?page=ubah_petugas&id_petugas=<?=$data_petugas['id_petugas']?>" class="btn btn-success">Ubah</a> | 
        <a href="index.php?page=hapus_petugas&id_petugas=<?=$data_petugas['id_petugas']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>