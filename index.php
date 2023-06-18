<?php
session_start();
$koneksi = new mysqli("localhost", "root", "", "database_toko");

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <title>ROZZI STORE</title>
  </head>
  <body>
    <div class="container">
      <form class="login-container" method="POST"> 
        <h3 class="textJudul mb-5">Masuk</h3>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label textForm">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label textForm">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="text-end">
        <a href class="textForm text-hover" ="#">Lupa Password?</a>
        </div>
        <div class="d-grid textForm mt-5">
        <button type="submit" name="masuk" class="btn btn-primary">Masuk</button>
        </div>
        <div class="mt-3">
          <span class="textForm">Belum Punya Akun? <a href="register.php" class="text-hover">Daftar</span>
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
if(isset($_POST['masuk'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $ambil = $koneksi->query("SELECT * FROM user WHERE email='$_POST[email]'AND password='$_POST[password]'");
    $akuncocok = $ambil->num_rows;
    
    
    if($akuncocok==1){
        $akun=$ambil->fetch_assoc();

        $_SESSION['user'] = $akun;

      echo "<script>location='homepage.php'</script>";
    }else{
        header("location:index.php");

    }

}


?>