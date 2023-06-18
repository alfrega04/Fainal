<?php
session_start();
include "koneksi.php";

if(!isset($_SESSION['keranjang'])||(empty($_SESSION['keranjang']))){
  echo "<script>location='homepage.php'</script>";
}

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
 <!-- Breadcrumb -->
 <div class="container">
   <nav aria-label="breadcrumb" style="background-color: #fff" class="mt-3">
  <ol class="breadcrumb p-3">
    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Beranda</a></li>
    <li class="breadcrumb-item active" aria-current="page">Keranjang</li>
  </ol>
</nav>
 </div>
 <!-- Breadcrumb -->
 <!-- Keranjang-->
 <div class="container">
   <div class="row row-product">
     <div class="col">
       <table class="table">
          <thead class="table-secondary">
            <tr>
              <th scope="col">Hapus</th>
              <th scope="col">Produk</th>
              <th scope="col">Gambar</th>
              <th scope="col">Harga</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Sub Total</th>
            </tr>
          </thead>
          <?php foreach($_SESSION['keranjang']as $id_produk=>$jumlah): ?>
            <?php $ambil=$koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");?> 
            <?php while ($pecah = $ambil->fetch_assoc()) { ?>
            <?php $subharga = $pecah["harga_produk"] * $jumlah; ?>
            
          <tbody class="align-middle">
         
            <tr>
              <th scope="row"><a href="hapusproduk.php?id=<?php echo $id_produk ?>"><i class="fa-solid fa-trash-can"></i></a></th>
              <td><?php echo $pecah['nama_produk'] ?></td>
              <td><img src="fileproduk/<?php echo $pecah['foto_produk'] ?>" class="img-keranjang"></td>
              <td>Rp.<?php echo number_format($pecah['harga_produk']) ?></td>
              <td>
                
                 <span class="mx-2"><?php echo $jumlah ?></span>
                
              </td>
              <td>Rp.<?php echo number_format($subharga) ?></td>
              
            </tr>
            <?php } ?>
            <?php endforeach ?>
          </tbody>
       </table>
       <a href="checkout.php"><button class="btn btn-primary">checkout</button></a>
     </div>
   </div>
 </div>
  </body>
</html>