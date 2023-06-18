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
          <tbody class="align-middle">
            <tr>
              <th scope="row"><a href=""><i class="fa-solid fa-trash-can"></i></a></th>
              <td>Nike Air Jordan</td>
              <td><img src="../assets/produk/produk3.jpg" class="img-keranjang"></td>
              <td>Rp. 2.750.000</td>
              <td>
                <button class="button btn-dark btn-sm"><i class="fas fa-minus"></i></button>
                 <span class="mx-2">1</span>
                 <button class="button btn-dark btn-sm"><i class="fas fa-plus text-white"></i></button>
              </td>
              <td>Rp. 2.750.000</td>
            </tr>
            <tr>
              <th scope="row"><a href=""><i class="fa-solid fa-trash-can"></i></a></th>
              <td>Keyboard Komputer</td>
              <td><img src="../assets/produk/produk9.jpg" class="img-keranjang"></td>
              <td>Rp. 750.000</td>
              <td>
                <button class="button btn-dark btn-sm"><i class="fas fa-minus"></i></button>
                 <span class="mx-2">1</span>
                 <button class="button btn-dark btn-sm"><i class="fas fa-plus text-white"></i></button>
              </td>
              <td>Rp. 750.000</td>
            </tr>
            <tr>
              <th scope="row"><a href=""><i class="fa-solid fa-trash-can"></i></a></th>
              <td>Kamera Canon</td>
              <td><img src="../assets/produk/produk7.jpg" class="img-keranjang"></td>
              <td>Rp. 7.750.000</td>
              <td>
                <button class="button btn-dark btn-sm"><i class="fas fa-minus"></i></button>
                 <span class="mx-2">1</span>
                 <button class="button btn-dark btn-sm"><i class="fas fa-plus text-white"></i></button>
              </td>
              <td>Rp. 7.750.000</td>
            </tr>
          </tbody>
        </table>
     </div>
   </div>
   <div class="row">
     <div class="col">
       <table class="table">
        <thead>
          <tr>
            <th scope="col" colspan="2">Total Keranjang Belanja</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="fw-bold">Total Harga</td>
            <td>Rp. 12.500.000</td>
          </tr>
          <tr>
            <td><button class="btn btn-dark btn-sm">Checkout</button></td>
          </tr>
        </tbody>
      </table>
     </div>
   </div>
 </div>
 <!-- Keranjang-->
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