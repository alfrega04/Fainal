<?php
session_start();
$koneksi = new mysqli("localhost","root","","database_toko");

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/styleRegister.css">
    <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">

    <title>ROZZI STORE</title>
  </head>
  <body>
  <div class="container">
    <form class="form-container" method="POST">
      <h3 class="text-judul">Daftar</h3>
      <div class="row mt-5">
        <div class="col-md-7">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
          <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user-pen"></i></span>
          <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama lengkap">
        </div>
        </div>
        </div>

        <div class="col-md-5">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Password</label>
          <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
          <input type="text" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">
        </div>
        </div>
        </div>

        <div class="row">
        <div class="col-md-7">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">E-mail</label>
          <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
          <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
        </div>
        </div>
        </div>

        <div class="col-md-5">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Ulangi Password</label>
          <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-unlock-keyhole"></i></span>
          <input type="text" name="password2" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ulangi Password">
        </div>
        </div>
        </div>
        

        <div class="row">
        <div class="col-md-4">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">No Handphone</label>
          <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-mobile-button"></i></i></span>
          <input type="text" name="nohp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Handphone">
        </div>
        </div>
        </div>

        <div class="col-md-8">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Alamat</label>
          <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-location-dot"></i></span>
          <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alamat">
        </div>
        </div>
        </div>

        <div class="mb-3 form-check">
          <input type="checkbox" name="input" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Saya menyetujui <span class="text-merah">Syarat & Ketentuan</span> Yang Berlaku <span class="text-merah">*</span></label>
        </div>

        <div class="mt-5">
          <div class="row">
            <div class="col-md-6 d-grid">
              <button type="submit" name="daftar" class="btn btn-outline-primary">Daftar</button>
            </div>

            <div class="col-md-6 d-grid">
              <button type="submit" class="btn btn-outline-danger">Hapus Data</button>
            </div>
          </div>
        </div>

        <div class="mt-3">
          <label>Sudah punya akun? <a href="index.php" class="text-login">Login Disini</label>
        </div>
      </form>
  </div>  



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php
if (isset($_POST['daftar'])) {
  $nama = $_POST['nama'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $password2 = $_POST['password2'];
  $nohp = $_POST['nohp'];
  $alamat = $_POST['alamat'];

  if($password!==$password2){
    echo "<script>alert ('register gagal');</script>";
    echo "<script>location='register.php'</script>";

  }
    
    $ambil = $koneksi->query("SELECT * FROM user WHERE email ='$email'");
    $yangcocok = $ambil->num_rows;
    if ($yangcocok == 1) {
    echo "<script>alert ('gagal email sudah ada');</script>";
    echo "<script>location='register.php';</script>";
     } elseif($password!==$password2){
    echo "<script>alert ('register gagal');</script>";
    echo "<script>location='register.php'</script>";
    }
  else{
  $koneksi->query("INSERT INTO user(username,password,email,ulang_password,no_hp,alamat) VALUE ('$nama','$password','$email','$password2','$nohp','$alamat')");
  echo "<script>location='index.php';</script>";
  echo "<script>alert ('Register telah berhasil');</script>";

  }



  
}


?>