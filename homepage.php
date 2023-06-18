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

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/stylehome.css">

    <title>ONLINE STORE</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
      <img src="../assets/logo.gif" alt="" width="60" height="30" class="me-2">
      Online <strong>Store</strong>
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

 <!-- carousel -->
<div class="container">
    <div id="carouselExampleControls" class="carousel slide mt-5" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../assets/img1.png" class="d-block img-fluid" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../assets/img2.png" class="d-block img-fluid" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../assets/img3.png" class="d-block img-fluid" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../assets/img4.jpg" class="d-block img-fluid" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../assets/img5.jpg" class="d-block img-fluid" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../assets/img6.jpg" class="d-block img-fluid" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</div>
 <!-- carousel -->
  
  <!-- Kategori -->
  <div class="container mt-5">
    <div class="judul-kategori" style="background-color: #FFF; padding: 5px 10px;">
      <h5 class="text-center" style="margin-top: 5px;">KATEGORI</h5>
      
    </div>
    <div class="row text-center row-container mt-2">
      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-kategori">
          <a href="#"><img src="../assets/kategori/baju.png" class="img-categori mt-3"></a>
          <p class="mt-2">Baju</p>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-kategori">
          <a href="#"><img src="../assets/kategori/celana.png" class="img-categori mt-3"></a>
          <p class="mt-2">Celana</p>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-kategori">
          <a href="#"><img src="../assets/kategori/elektronik.png" class="img-categori mt-3"></a>
          <p class="mt-2">Elektronik</p>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-kategori">
          <a href="#"><img src="../assets/kategori/fotografi.png" class="img-categori mt-3"></a>
          <p class="mt-2">Fotografi</p>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-kategori">
          <a href="#"><img src="../assets/kategori/hp.png" class="img-categori mt-3"></a>
          <p class="mt-2">Handphone</p>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-kategori">
          <a href="#"><img src="../assets/kategori/jamtangan.png" class="img-categori mt-3"></a>
          <p class="mt-2">Jam Tangan</p>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-kategori">
          <a href="#"><img src="../assets/kategori/kecantikan.png" class="img-categori mt-3"></a>
          <p class="mt-2">Kecantikan</p>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-kategori">
          <a href="#"><img src="../assets/kategori/kesehatan.png" class="img-categori mt-3"></a>
          <p class="mt-2">Kesehatan</p>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-kategori">
          <a href="#"><img src="../assets/kategori/laptop.png" class="img-categori mt-3"></a>
          <p class="mt-2">Laptop & Komputer</p>
        </div>

      </div><div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-kategori">
          <a href="#"><img src="../assets/kategori/otomotif.png" class="img-categori mt-3"></a>
          <p class="mt-2">Otomotif</p>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-kategori">
          <a href="#"><img src="../assets/kategori/sepatu.png" class="img-categori mt-3"></a>
          <p class="mt-2">Sepatu</p>
        </div>
      </div>

      <div class="col-lg-2 col-md-3 col-sm-4 col-6">
        <div class="menu-kategori">
          <a href="#"><img src="../assets/kategori/tas.png" class="img-categori mt-3"></a>
          <p class="mt-2">Tas</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container mt-5">
      <div class="judul-kategori" style="background-color: #FFF; padding: 5px 10px;">
      <h5 class="text-center" style="margin-top: 5px;">PRODUK</h5>
      <div class="row mt-2">
      <?php $ambil = $koneksi->query("SELECT * FROM produk");
        while($pecah=$ambil->fetch_assoc()){
  
  ?>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-2">
            <div class="card text-center">
            <img src="fileproduk/<?php echo $pecah['foto_produk'] ?>" class="card-img-top" alt="" width="200px" height="150px">
            <div class="card-body">
              <h6 class="card-title"><?php echo $pecah['nama_produk'] ?></h6>
              <p class="card-text">Rp<?php echo number_format($pecah['harga_produk']) ?></p>
              <a href="singleproduct.php?id=<?php echo $pecah['id_produk'] ?>" class="btn btn-dark d-grid">Detail</a><br>
              <a href="beli.php?id=<?php echo $pecah['id_produk'] ?>" class="btn btn-dark d-grid">Beli</a>
            </div>
          </div>
        </div>
        <?php } ?>
        </div>
      </div>
      
     
      <!-- footer -->
    <br><!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
  </body>
</html>
