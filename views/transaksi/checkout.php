<?php
    session_start();
    include "././koneksi.php";
    // print_r($_SESSION);
    // die();
        $cart=@$_SESSION['cartRfas'];
        if(count($cart)>0){
            mysqli_query($conn,"insert into transaksi (id_pelanggan,id_petugas,tgl_transaksi) value('".$_SESSION['id_pelanggan']."','".$_SESSION['id_petugas']."','".date('Y-m-d')."')");
            $id=mysqli_insert_id($conn);
            foreach ($cart as $key_produk => $val_produk) {
            mysqli_query($conn,"insert into detail_transaksi (id_transaksi,id_produk,qty) value('".$id."','".$val_produk['id_produk']."','".$val_produk['qty']."')");
            }
            unset($_SESSION['cartRfas']);
            echo '<script>alert("Anda berhasil membeli Produk");location.href="index.php?transaksi"</script>';
        }
?>