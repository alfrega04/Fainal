<?php
session_start();
$koneksi=new mysqli("localhost","root","","database_toko");
$detail=$_GET['id'];

$ambil=$koneksi->query("SELECT * FROM produk WHERE id_produk='$detail'");
$pecah=$ambil->fetch_assoc();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/styleproduct.css">

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
 <!-- Breadcrumb -->
 <div class="container">
   <nav aria-label="breadcrumb" style="background-color: #fff" class="mt-3">
  <ol class="breadcrumb p-3">
    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Beranda</a></li>
    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Kategori</a></li>
    <li class="breadcrumb-item active" aria-current="page">Produk</li>
  </ol>
</nav>
 </div>
 <!-- Breadcrumb -->
 
 <!-- single product -->
 <div class="container">
   <div class="row row-product">
     <div class="col-lg-5">
       <figure class="figure">
        <img src="./fileproduk/<?php echo $pecah['foto_produk'] ?>" class="figure-img img-fluid" style="border-radius: 5px; width: 450px;">
        <figcaption class="figure-caption d-flex justify-content-evenly">
          <a href="#">
            <img src="./fileproduk/<?php echo $pecah['foto_produk'] ?>" class="figure-img img-fluid" style="border-radius: 5px; width: 70px;">
          </a>

          <a href="#">
            <img src="./fileproduk/<?php echo $pecah['foto_produk'] ?>" class="figure-img img-fluid" style="border-radius: 5px; width: 70px;">
          </a>

          <a href="#">
            <img src="./fileproduk/<?php echo $pecah['foto_produk'] ?>" class="figure-img img-fluid" style="border-radius: 5px; width: 70px;">
          </a>

          <a href="#">
            <img src="./fileproduk/<?php echo $pecah['foto_produk'] ?>" class="figure-img img-fluid" style="border-radius: 5px; width: 70px;">
          </a>

          <a href="#">
            <img src="./fileproduk/<?php echo $pecah['foto_produk'] ?>" class="figure-img img-fluid" style="border-radius: 5px; width: 70px;">
          </a>
        </figcaption>
      </figure>
     </div>

     <div class="col-lg-7">
       <h4><?php echo $pecah['nama_produk'] ?></h4>
       <div class="garis-product"></div>
       <h3 class="text-muted mb-2">Rp<?php echo number_format($pecah['harga_produk']) ?></h3>

       <button class="button btn-dark btn-sm"><i class="fas fa-minus"></i></button>
       <span class="mx-2">1</span>
       <button class="button btn-warning btn-sm"><i class="fas fa-plus text-white"></i></button>
       <span class="mx-2"><?php echo $pecah['stok_produk'] ?></span>
       <div class="btn-produk mt-4">
         <a href="beli.php?id=<?php echo $pecah['id_produk'] ?>" class="btn btn-dark btn-lg" style="font-size: 14px"><i class="fas fa-shopping-cart fs-6 me-2"></i>Masukkan Keranjang</a>
         <a href="#" class="btn btn-warning btn-lg" style="font-size: 14px">Beli Sekarang</a>
       </div>
     </div>
   </div>

   <!-- review-->
   <div class="row row-product">
           <divv class="col-12">
             <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="deskripsi-tab" data-bs-toggle="tab" data-bs-target="#deskripsi" type="button" role="tab" aria-controls="deskripsi" aria-selected="true">Deskripsi Produk</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review" type="button" role="tab" aria-controls="review" aria-selected="false">Review Produk</button>
        </li>
      </ul>
      <div class="tab-content p-3" id="myTabContent">
        <div class="tab-pane fade show active deskripsi" id="deskripsi" role="tabpanel" aria-labelledby="deskripsi-tab">
          <p>
          <?php echo $pecah['deskripsi_produk'] ?>
          </p>
        </div>
        <div class="tab-pane fade review" id="review" role="tabpanel" aria-labelledby="review-tab">
          <div class="row">
            <div class="col-1">
              <img src="../assets/profil/1.png" class="review-img rounded-circle">
            </div>
            <div class="col">
              <h5 class="review-name">Sabe'</h5>
              <p class="review-des">Produk Original, Packing rapi, dan pengiriman super cepat</p>
            </div>
          </div>

          <div class="row">
            <div class="col-1">
              <img src="../assets/profil/2.png" class="review-img rounded-circle">
            </div>
            <div class="col">
              <h5 class="review-name">Duma'</h5>
              <p class="review-des">Produk Original, Packing rapi, dan pengiriman super cepat</p>
            </div>
          </div>

          <div class="row">
            <div class="col-1">
              <img src="../assets/profil/3.png" class="review-img rounded-circle">
            </div>
            <div class="col">
              <h5 class="review-name">Sampe</h5>
              <p class="review-des">Produk Original, Packing rapi, dan pengiriman super cepat</p>
            </div>
          </div>

          <div class="row">
            <div class="col-1">
              <img src="../assets/profil/4.png" class="review-img rounded-circle">
            </div>
            <div class="col">
              <h5 class="review-name">Thomas Seppa</h5>
              <p class="review-des">Produk Original, Packing rapi, dan pengiriman super cepat</p>
            </div>
          </div>

          <div class="row">
            <div class="col-1">
              <img src="../assets/profil/5.png" class="review-img rounded-circle">
            </div>
            <div class="col">
              <h5 class="review-name">Kaplo</h5>
              <p class="review-des">Produk Original, Packing rapi, dan pengiriman super cepat</p>
            </div>
          </div>
        </div>
      </div>
     </divv>
   </div>
   <!-- review-->

 </div>
 <!-- single product -->
  <!-- footer -->
  <footer class="bg-light p-5 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <a href="" class="text-decoration-none">
            <img src="../assets/logo.png" style="width: 30px;">
          </a>
          <span>Copyright @2022 | Created and Developed by <a href="https://www.facebook.com/ROSSYCZT?mibextid=ZbWKwL" class="text-decoration-none text-dark fw-bold">Rossi Muttung</a></span>
        </div>

        <div class="col-md-6 text-end">
          <a href="" class="text-decoration-none">
            <img src="../assets/sosialMedia/facebook.png" class="ms-2" style="width: 32px;">
          </a>
          <a href="" class="text-decoration-none">
            <img src="../assets/sosialMedia/instagram.png" class="ms-2" style="width: 30px;">
          </a>
          <a href="" class="text-decoration-none">
            <img src="../assets/sosialMedia/twitter.png" class="ms-2" style="width: 30px;">
          </a>
        </div>
      </div>
    </div>
  </footer>
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