<?php
session_start();
include "koneksi.php";

$id_pem = $_GET['id'];

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
  <form method="POSt">
<input class="form-control" value="<?php echo $_SESSION['user']['username'] ?>">
<select class="form-control" name="pilih">
    <option value="barang telah sampai">barang telah sampai</option>
</select>
<button name="kirim">kirim</button>
  </form>

  <?php
  if(isset($_POST['kirim'])){
      $pilih = $_POST['pilih'];

      $koneksi->query("UPDATE pembelian SET status_pembelian='$pilih' WHERE id_pembelian='$id_pem'");
      echo "<script>location='notifikasi.php'</script>";
    
  }
  
  ?>
  </body>
</html>