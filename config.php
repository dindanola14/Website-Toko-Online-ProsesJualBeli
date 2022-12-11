<?php
$page = (isset($_GET['page']))? $_GET['page'] : '';
switch($page){

  case 'home': // $page == tentang (jika isi dari $page adalah tentang)
  include "views/home.php"; // load file tentang.php yang ada di folder views
  break;  
  
  case 'produk': // $page == tentang (jika isi dari $page adalah tentang)
  include "views/product/produk.php"; // load file tentang.php yang ada di folder views
  break;

  case 'beli': // $page == tentang (jika isi dari $page adalah tentang)
  include "views/transaksi/beli.php"; // load file tentang.php yang ada di folder views
  break;

  case 'keranjang': // $page == tentang (jika isi dari $page adalah tentang)
  include "views/transaksi/keranjang.php"; // load file tentang.php yang ada di folder views
  break;

  case 'hapus_cartRfas': // $page == tentang (jika isi dari $page adalah tentang)
  include "views/transaksi/hapus_cartRfas.php"; // load file tentang.php yang ada di folder views
  break;

  case 'checkout': // $page == tentang (jika isi dari $page adalah tentang)
  include "views/transaksi/checkout.php"; // load file tentang.php yang ada di folder views
  break;

  case 'transaksi': // $page == tentang (jika isi dari $page adalah tentang)
  include "views/transaksi/transaksi.php"; // load file tentang.php yang ada di folder views
  break;

  case 'lunas': // $page == tentang (jika isi dari $page adalah tentang)
  include "views/transaksi/lunas.php"; // load file tentang.php yang ada di folder views
  break;

  case 'logout': // $page == tentang (jika isi dari $page adalah tentang)
  include "logout.php"; // load file tentang.php yang ada di folder views
  break;

  case 'tentang': // $page == tentang (jika isi dari $page adalah tentang)
  include "views/tentang.php"; // load file tentang.php yang ada di folder views
  break;
  
  // case 'case_selanjutnya':
  // include "views/case_selanjutnya.php";
  // break;
  
  // case 'case_selanjutnya':
  // include "views/case_selanjutnya.php";
  // break;
  
  // case 'case_selanjutnya':
  // include "views/case_selanjutnya.php";
  // break;
  
  default: // Ini untuk set default jika isi dari $page tidak ada pada 3 kondisi diatas
  include "views/home.php";
}
?>