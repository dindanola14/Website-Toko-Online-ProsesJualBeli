<?php
    if($_GET['id']){
        include "../../koneksi.php";
            $id_transaksi=$_GET['id'];
            $cek_transaksi=mysqli_query($conn, "select * from transaksi where id_transaksi = '".$id_transaksi."' ");
            $dt_transaksi=mysqli_fetch_array($cek_transaksi);
            mysqli_query($conn, "insert into pembayaran (id_transaksi, tgl_transaksi) value('".$id_transaksi."','".date('Y-m-d')."')");
            header('location:../../index.php?page=transaksi');
     }
?>