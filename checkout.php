<?php
session_start();

$koneksi = new mysqli("localhost", "root", "", "database_toko");
if (empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"]))
 {
 echo "<script>alert('Keranjang Kosong, silahkan belanja');</script>";
 echo "<script>location='../produk.php';</script>";
}

if (!isset($_SESSION['user'])) {

  echo "<script>location='../index.php';</script>";
  echo "<script> alert('ettt login dulu'); </script>";
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


      <section class="content">
        <div class="keranjang">
            <img src=""  alt="">
            <h1>Checkout</h1>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Subharga</th>
                </tr>
            </thead>
            <?php $nomor = 1; ?>
            <?php $totalbelanja = 0; ?>
            <?php foreach($_SESSION["keranjang"]as $id_produk=>$jumlah): ?>
            <?php 
             $ambil=$koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
             ?> 
            <?php while ($pecah = $ambil->fetch_assoc()) { ?>
            <?php $subharga = $pecah["harga_produk"] * $jumlah; ?>

            <tbody>
                <tr>
                    <td><?php echo $nomor; ?></td>
                    <td><?php echo $pecah['nama_produk']; ?></td>
                    <td>Rp.<?php echo number_format($pecah['harga_produk']); ?></td>
                    <td><?php echo $jumlah; ?></td>
                    <td><?php echo number_format($subharga); ?></td>
                    
                </tr>
                <?php $nomor++; ?>
                <?php $totalbelanja += $subharga; ?>
                <?php } ?>
            <?php endforeach ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="4">total belanja</th>
                    <th><?php echo number_format($totalbelanja); ?></th>
                </tr>
            </tfoot>
        </table>     
      </section>

                <form action=""  method="POST">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" readonly value="<?php echo $_SESSION['user']['username']; ?> " class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" readonly value="<?php echo $_SESSION['user']['no_hp']; ?> " class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select class="form-control" name="ongkir" >
                                        <option>pilih ongkir</option>
                                        <?php
                                       $ambil= $koneksi->query("SELECT * FROM ongkir");
                                       while($perproduk=$ambil->fetch_assoc()) {
                                        ?>

                                        <option value="<?php echo $perproduk['id_ongkir']; ?>">
                                        <?Php echo $perproduk['nama_kota']; ?>-
                                       Rp.<?Php echo number_format( $perproduk['tarif']); ?>
                                        </option>

                                      
                                      <?php }?>
                                        
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="col-md-3">
                                      <div class="form-group">
                                        <select class="form-control" name="jasa">
                                          <option>Jasa pengiriman</option>
                                          <?php
                                          $ambil= $koneksi->query("SELECT * FROM jasa_pengiriman");
                                          while ($jasaproduk = $ambil->fetch_assoc()) {

                                            ?>  
                                            <option value="<?php echo $jasaproduk['id_jasa_pengiriman'] ?>">
                                          <?php echo $jasaproduk['nama_jasa_pengiriman'] ?>
                                          </option>


                                          <?php } ?>
                                        </select>
                                      </div>
                                    </div>
                        </div>
                    </div>
                    <div class="form-group">
                                        <label>alamat lengkap pengiriman</label>
                                        <textarea class="form-control"  name="alamat"  placeholder="masukkan alamat lengkap beserta kode pos"></textarea>

                    </div>
                    
                                       <button class="btn btn-primary" name="checkout" style="margin-left:15%;" >Checkout</button>
                </form>
              
                <?Php
                if (isset( $_POST["checkout"])) {
                   $id_user= $_SESSION["user"]['id_user'];
                   $id_ongkir= $_POST['ongkir'];
                  $alamat = $_POST['alamat'];
                   $tanggal_pembelian= date("y-m-d");
                  $jasapeng = $_POST['jasa'];

                   $ambil= $koneksi->query("SELECT * FROM ongkir WHERE id_ongkir='$id_ongkir'");
                   $array = $ambil->fetch_assoc();
                   $namakota = $array['nama_kota'];
                   $tarif = $array['tarif'];

                   $ambil= $koneksi->query("SELECT * FROM jasa_pengiriman WHERE id_jasa_pengiriman='$jasapeng'");
                   $array = $ambil->fetch_assoc();
                   $jasa = $array['nama_jasa_pengiriman'];


                   $total_pembelian = $totalbelanja + $tarif;

                 
                    $koneksi->query("INSERT INTO pembelian (id_user,tanggal_pembelian,total_pembelian,id_ongkir,nama_kota,tarif,alamat,jasa_pengiriman) VALUES('$id_user','$tanggal_pembelian','$total_pembelian','$id_ongkir','$namakota','$tarif','$alamat','$jasa')");

                  $id_pembelian_barusan = $koneksi->insert_id;

                    foreach ($_SESSION['keranjang'] as $id_produk => $jumlah)
                     {

                        $ambil= $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
                        $perproduk=$ambil->fetch_assoc();

                        $nama= $perproduk["nama_produk"];
                        $harga= $perproduk["harga_produk"];
                        $berat= $perproduk["berat"];

                    $subberat = $perproduk['berat'] * $jumlah;
                    $subharga = $perproduk['harga_produk'] * $jumlah;


                    
                        $koneksi->query("INSERT INTO pembelian_produk (id_pembelian,id_produk,jumlah,nama,harga,berat,subberat,subharga)VALUES('$id_pembelian_barusan','$id_produk','$jumlah','$nama','$harga','$berat','$subberat','$subharga')");


                        $koneksi->query("UPDATE produk SET stok_produk=stok_produk -$jumlah WHERE id_produk='$id_produk'");
                     }

                    unset($_SESSION['keranjang']);
                    echo "<script>alert('sukses');</script>";
                    echo "<script>location='notifikasi.php?id=$id_pembelian_barusan';</script>";
   
                }
                
                ?>
           
  </body>
</html>