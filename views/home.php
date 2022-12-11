<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
    session_start();
        if($_SESSION['status_login']!=true){
        header('location: index.php');
}
?>
    <h4> Selamat Datang <?=$_SESSION['nama']?> di Website RFAS MERCH!</h4>

</body>
</html>
