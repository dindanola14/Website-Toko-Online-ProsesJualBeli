<?php
 session_start();
 unset($_SESSION['cartRfas'][$_GET['id']]);
 header('location: index.php?page=keranjang');
?>