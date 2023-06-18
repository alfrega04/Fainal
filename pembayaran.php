<?php
session_start();
include "koneksi.php";
$idpem=$_GET['id'];



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/stylehome.css">

    <title>ROZZI STORE</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
      <img src="../assets/logo.gif" alt="" width="60" height="30" class="me-2">
      ROZZI <strong>Store</strong>
    </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <form class="d-flex ms-auto">
      <input class="form-control me-2" type="search" placeholder="Cari Barang Anda!" aria-label="Cari">
      <button class="btn btn-light" type="submit">Cari</button>
    </form>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="homepage.html">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="keranjang.php">Keranjang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="notifikasi.php">Notifikasi</a>
          </li>
         <li class="nav-item">
            <a class="nav-link" href="register.php">Daftar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Masuk</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php
  $ambil=$koneksi->query("SELECT * FROM pembelian");
  $detpem=$ambil->fetch_assoc();
  ?>
  <div class="container">
        <h1>konfirmasi pembayaran anda</h1>
        <p>kirim bukti pembayaran disini</p>
        <div class=""><strong>Total pembelian anda: Rp.<?php echo number_format($detpem['total_pembelian']) ?></strong></div>


        <form method="POST" enctype="multipart/form-data">
            <div>
           <label>Nama pelanggan</label>
           <input type="text" class="form-control" name="nama" value="<?php echo $_SESSION['user']['username'] ?>">
            </div>
            <div>
           <label>Bank</label>
           <input type="text" class="form-control" name="bank">
            </div>
            <div>
           <label>jumlah</label>
           <input type="number" class="form-control" name="jumlah" min="1">
            </div>
            <div>
           <label>Foto bukti</label>
           <input type="file" class="form-control" name="bukti">
            <p class="text-danger">foto bukti pembayaran </p>
            </div>
            <button class="btn btn-primary" name="kirim">bayar</button>
        </form>
    </div>

    <?php


    if (isset($_POST['kirim'])) {
      $nama = $_POST['nama'];
      $bank = $_POST['bank'];
      $jumlah = $_POST['jumlah'];
      $tanggal = date("y-m-d");

      $namabukti = $_FILES['bukti']['name'];
      $lokasibukti = $_FILES['bukti']['tmp_name'];
      $namafixs = date("ymdHis") . $namabukti;
      move_uploaded_file($lokasibukti, "buktipembayaran/$namafixs");

      $koneksi->query("INSERT INTO pembayaran(id_pembelian,nama,jumlah,tanggal,bukti_pembayaran,bank)VALUES('$idpem','$nama','$jumlah','$tanggal','$namafixs','$bank') ");


      $koneksi->query("UPDATE pembelian SET status_pembelian='pembelian telah dikonfirmasi' WHERE id_pembelian='$idpem'");

      echo "<script>location='notifikasi.php';</script>";
      echo "<script>alert('terimah kasih telah melakukan pembayaran')</script>";
    }
    ?>

   

  </body>
</html>
  </body>
</html>