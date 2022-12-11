<?php
    include '../../koneksi.php';
    if($_POST){
        $nama_produk=$_POST['nama_produk'];
        $deskripsi=$_POST['deskripsi'];
        $harga= $_POST['harga'];

        $ekstensi=array("png","jpg","jpeg");
        $filename =$_FILES['file']['name'];
        $tmp=$_FILES['file']['tmp_name'];
        $tipe_file=pathinfo($filename, PATHINFO_EXTENSION);
        $ukuran=$_FILES['file']['size']; 

        if(empty($nama_produk)){
            echo "<script>alert('nama produk tidak boleh kosong');location.href='../../index.php?page=tambah_produk';</script>";
        } else {
            if(!in_array($tipe_file, $ekstensi)){
                header("location:../../index.php?page=tambah_produk&alert=gagal_ekstensi");
            } else {
                if($ukuran<1044070){
                    move_uploaded_file($tmp, '../../rfas_produk/' .$filename);
                    $insert=mysqli_query($conn, "INSERT INTO produk (nama_produk, deskripsi, harga, foto_produk) value ('".$nama_produk."','".$deskripsi."','".$harga."','".$filename."')");
                    if($insert){
                        echo "<script>alert('Sukses menambahkan produk');location.href='../../index.php?page=tampil_produk';</script>";
                    } 
                    else {
                        echo "<script>alert('Gagal menambahkan produk');location.href='../../index.php?page=tambah_produk';</script>";
                    }
                }else{
                    echo "<script>alert('Ukuran file terlalu besar');location.href='../../index.php?page=tambah_produk';</script>"; 
                }
            }
        }
    }
?>