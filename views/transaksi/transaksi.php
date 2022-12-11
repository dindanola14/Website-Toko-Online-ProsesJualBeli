<?php
    session_start();
        if($_SESSION['status_login']!=true){
        header('location: index.php');
}
?>
<h2>Transaksi</h2>
    <table class="table table-hover table-striped">
        <thead>
            <th>NO</th><th>Tanggal Transaksi</th><th>Produk</th><th>Jumlah</th><th>Subtotal</th><th>Status</th><th>Aksi</th>
        </thead>
        <tbody>
<?php
    include "././koneksi.php";
        $qry_transaksi=mysqli_query($conn,"select * from transaksi order by id_transaksi desc");
        $no=0;
        while ($dt_transaksi = mysqli_fetch_array($qry_transaksi)) {

            $no++;
            //menampilkan produk yang dibeli
            $produk_dibeli = "<ol>";
            $qry_produk = mysqli_query($conn,"select * from detail_transaksi join produk on produk.id_produk = detail_transaksi.id_produk where id_transaksi = '".$dt_transaksi['id_transaksi']."'");

            while($dt_produk = mysqli_fetch_array($qry_produk)){
                $produk_dibeli .= "<li>".$dt_produk['nama_produk']."</li>";
            }

            $produk_dibeli .= "</ol>";

            //menampilkan banyak produk yang dibeli
            $jumlahproduk_dibeli = '<ul style="list-style-type:none">';
            $qry_produk = mysqli_query($conn, "select * from detail_transaksi join produk on produk.id_produk = detail_transaksi.id_produk where id_transaksi = '".$dt_transaksi['id_transaksi']."'");

            while($dt_produk = mysqli_fetch_array($qry_produk)) {
                $jumlahproduk_dibeli .= "<li>" . $dt_produk['qty'] . "</li>";
            }
            $jumlahproduk_dibeli .= "</ul>";

            //menampilkan subtotal yang dibeli
            $bayarproduk_dibeli='<ul style="list-style-type:none">';
            $qry_produk=mysqli_query($conn,"select * from detail_transaksi join produk on produk.id_produk = detail_transaksi.id_produk where id_transaksi = '".$dt_transaksi['id_transaksi']."'");

            while($dt_produk=mysqli_fetch_array($qry_produk)){
                $subtotal = $dt_produk['qty'] * $dt_produk['harga'];
                $bayarproduk_dibeli .= "<li>".$subtotal."</li>";
            }

            $bayarproduk_dibeli.="</ul>";

            //menampilkan status sudah lunas/belum
            $qry_cek_lunas=mysqli_query($conn,"select * from pembayaran where id_transaksi = '".$dt_transaksi['id_transaksi']."'");
            if(mysqli_num_rows($qry_cek_lunas)>0){
                $dt_lunas=mysqli_fetch_array($qry_cek_lunas);
                $status_lunas="<label class='alert alert-success'>Lunas<br></label>";
                $button_lunas="";
            } else {
                $status_lunas="<label class='alert alert-danger'>Belum bayar</label>";
                $button_lunas="<a href='views/transaksi/lunas.php?id=".$dt_transaksi['id_transaksi']."' class='btn btn-warning' onclick='return confirm(\"Apakah Anda Yakin untuk melakukan pembayaran?\")'>Bayar</a>";
            }
         ?>
    <tr>
        <td><?=$no?></td><td><?=$dt_transaksi['tgl_transaksi']?></td>
        <td><?=$produk_dibeli?></td>
        <td><?=$jumlahproduk_dibeli?></td>
        <td><?=$bayarproduk_dibeli?></td>
        <td><?=$status_lunas?></td>
        <td><?=$button_lunas?></td>
    </tr>
    <?php
    }
    ?>
 </tbody>
</table>
