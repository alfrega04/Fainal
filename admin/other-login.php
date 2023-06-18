<?php
session_start();
$koneksi=new mysqli("localhost","root","","database_toko");


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Logout</title>
	<link type="text/css" href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="../bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="../css/theme.css" rel="stylesheet">
	<link type="text/css" href="../images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.html">
			  		Login Admin
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
				
					<ul class="nav pull-right">

						<li><a href="#">
							Daftar
						</a></li>

						

						<li><a href="#">
							lupa password?
						</a></li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->


<form method="POST">
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form class="form-vertical">
						<div class="module-head">
							<h3>Masuk</h3>
						</div>
						<div class="module-body">
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="text" id="inputEmail" placeholder="Username" name="username">
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
									<input class="span12" type="password" id="inputPassword" placeholder="Password" name="password">
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									<button type="submit" class="btn btn-primary pull-right" name="masuk">Login</button>
									<label class="checkbox">
										<input type="checkbox"> Ingat saya
									</label>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->
	</form>

	<div class="footer">
		<div class="container">
			 
	<span>Copyright @2022 | Created and Developed by <a href="https://www.facebook.com/ROSSYCZT?mibextid=ZbWKwL" class="text-decoration-none text-dark fw-bold">Rossi Muttung</a></span>
		</div>
	</div>
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>

<?php
// mengaktifkan session pada php


// menghubungkan php dengan koneksi database

if(isset($_POST["masuk"])){
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login=$koneksi->query("SELECT * FROM pemilik_admin WHERE username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

 $data = mysqli_fetch_assoc($login);

 // cek jika user login sebagai admin
 if($data['level']=="admin"){

  // buat session login dan username
  $_SESSION['username'] = $username;
  $_SESSION['level'] = "admin";
  // alihkan ke halaman dashboard admin
  
  echo "<script>location='halaman_admin.php';</script>";
 // cek jika user login sebagai pegawai
 }else if($data['level']=="pimpinan"){
  // buat session login dan username
  $_SESSION['username'] = $username;
  $_SESSION['level'] = "pimpinan";
  // alihkan ke halaman dashboard pegawai
  echo"<script>location='pemimpin.php';</srtipt>";

 }else{

  // alihkan ke halaman login kembali
  header("location:index.php?pesan=gagal");
 } 
}else{
 header("location:index.php?pesan=gagal");
}
}
?>
<img src="../pages/admin/halaman_admin.php">
