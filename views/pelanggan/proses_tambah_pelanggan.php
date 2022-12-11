<?php
    if($_POST){
        $username=$_POST['username'];
        $password= $_POST['password'];
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $telp=$_POST['telp'];

        if(empty($username)){
            echo "<script>alert('username tidak boleh kosong');location.href='../../index.php?page=tambah_pelanggan.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('password tidak boleh kosong');location.href='../../index.php?page=tambah_pelanggan.php';</script>";
        } elseif(empty($nama)){
            echo "<script>alert('nama tidak boleh kosong');location.href='../../index.php?page=tambah_pelanggan.php';</script>";
        } elseif(empty($alamat)){
            echo "<script>alert('alamat tidak boleh kosong');location.href='../../index.php?page=tambah_pelanggan.php';</script>";
        } elseif(empty($telp)){
            echo "<script>alert('telp tidak boleh kosong');location.href='../../index.php?page=tambah_pelanggan.php';</script>";
        } else{
            include "../../koneksi.php";
                $insert=mysqli_query($conn,"insert into pelanggan (username, password, nama, alamat, telp) value ('".$username."','".md5($password)."','".$nama."','".$alamat."','".$telp."')");
                if($insert){
                    echo "<script>alert('Sukses menambahkan pelanggan');location.href='../../index.php?page=tambah_pelanggan.php';</script>";
                } else {
                    echo "<script>alert('Gagal menambahkan pelanggan');location.href='../../index.php?page=tambah_pelanggan.php';</script>";
            }
        }
    }
?>