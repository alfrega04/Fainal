<?php
session_start();
include "koneksi.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/keranjang.css">

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
            <a class="nav-link active" aria-current="page" href="homepage.php">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="keranjang.php">Keranjang</a>
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
  <div class="container">
    <div class="col-md-4">
      <h3>nama pelanggan <?php echo $_SESSION['user']['username'] ?></h3>
    </div>
  <table class="table table-bordered">
      <thead>
        <tr>
          
          <th>alamat</th>
          <th>tanggal</th>
          <th>total</th>
          <th>status_pembelian</th>
          <th>aksi</th>
        </tr>
      </thead>
      <?php $nomor=1; ?>
      <?php $id_user=$_SESSION['user']['id_user']; ?>
       <?php $ambil=$koneksi->query("SELECT * FROM pembelian where id_user='$id_user'");?> 
       <?php while ($pecah = $ambil->fetch_assoc()) {?>
      
      <tbody>
        <tr>
          
          <td><?php echo $pecah['alamat'] ?></td>
          <td><?php echo $pecah['tanggal_pembelian'] ?></td>
          <td><?php echo number_format($pecah['total_pembelian']) ?></td>
          <td><?php echo $pecah['status_pembelian'] ?></td>
          <td>
            <?php
            if($pecah["status_pembelian"]=="dicekal"):?> 
            <a href="pembayaran.php?id=<?php echo $pecah['id_pembelian'] ?>"> <button class="button btn-warning btn-sm">Bayar</button></a>
            <?php elseif($pecah['status_pembelian']=="barang dikirim"||"lunas"): ?>
                  <a href="konfirmasistatus.php?id=<?php echo $pecah['id_pembelian']?>"><button class="btn btn-success">Cek status barang</button></a>
                  
            <?php else: ?>
              <a href="lihatpembayaran.php?id=<?php echo $pecah['id_pembayaran'] ?>"><button class="btn btn-primary">lihat pembayaran</button></a>
            <?php endif ?> 
            
            </td>
        </tr>     
 <?php } ?>
      </tbody>
    
  </table>
  </div>
  </body>
</html>