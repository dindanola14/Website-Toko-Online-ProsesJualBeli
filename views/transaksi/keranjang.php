<?php
    session_start();
        if($_SESSION['status_login']!=true){
            header('location: index.php');
    }
?>
<h2>Daftar Produk di Keranjang</h2>
    <table class="table table-hover striped">
        <thead>
            <tr>
                <th>NO</th><th>Nama Produk</th><th>Jumlah</th><th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach (@ $_SESSION ['cartRfas'] as $key_produk => $val_produk): ?>
            <tr>
            <td><?=($key_produk+1)?></td><td><?=$val_produk['nama_produk']?></td><td><?=$val_produk['qty']?></td><td>
            <a href="index.php?page=hapus_cartRfas&id=<?=$key_produk?>" class="btn btn-danger"><strong>X</strong></a></td>
            </tr>
        <?php  
            endforeach ?>
        </tbody>
    </table>
    <a href="index.php?page=checkout" class="btn btn-primary">Check Out</a>
