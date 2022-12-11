<?php
    if($_POST){
        $username=$_POST['username'];
        $password= $_POST['password'];
        $nama=$_POST['nama'];
        $alamat=$_POST['alamat'];
        $telp=$_POST['telp'];
        
        if(empty($nama)){
            echo "<script>alert('nama tidak boleh kosong');location.href='../../index.php?page=tampil_pelanggan.php';</script>";
        } elseif(empty($username)){
            echo "<script>alert('username tidak boleh kosong');location.href='../../index.php?page=tampil_pelanggan.php';</script>";
        } else {
            include "../../koneksi.php";
            if(empty($password)){
                $update=mysqli_query($conn,"update pelanggan set nama='".$nama."', username ='".$username."', nama='".$nama."', alamat='".$alamat."', telp='".$telp."' where id_pelanggan = '".$id_pelanggan."' ") or die(mysqli_error($conn));
                if($update){
                    echo "<script>alert('Sukses update pelanggan');location.href='../../index.php?page=tampil_pelanggan.php';</script>";
                } else {
                    echo "<script>alert('Gagal update pelanggan');location.href='../../index.php?page=ubah_pelanggan.php?id_pelanggan=".$id_pelanggan."';</script>";
                }
            } else {
                $update=mysqli_query($conn,"update pelanggan set nama='".$nama."', username ='".$username."', password ='".md5($password)."',  nama='".$nama."', alamat='".$alamat."', telp='".$telp."' where id_pelanggan = '".$id_pelanggan."' ") or die(mysqli_error($conn));
                if($update){
                    echo "<script>alert('Sukses update pelanggan');location.href='../../index.php?page=tampil_pelanggan.php';</script>";
                } else {
                    echo "<script>alert('Gagal update pelanggan');location.href='../../index.php?page=ubah_pelanggan.php?id_pelanggan=".$id_pelanggan."';</script>";
                }
            }
        }
    }
?>