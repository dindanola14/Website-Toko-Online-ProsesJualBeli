<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RFAS MERCH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css" />
  </head>
  <body>
    <nav>
      <div class="logo">RFAS MERCH</div>
      <ul>
        <li><a href="index.php?page=home">Home</a></li>
        <li>
          <a href="index.php?page=produk">Produk</a>
        </li>
        <li>
          <a href="index.php?page=transaksi">Transaksi</a>
        </li>
        <li>
          <a href="index.php?page=logout">Logout</a>
        </li>
      </ul>
    </nav>
    <div class="content" style="padding: 50px;margin-top:10px;">
       <?php include "config.php"; // Load file config.php ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"crossorigin="anonymous"></script>
  </body>
</html>
