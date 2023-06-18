<?php
session_start();
include "koneksi.php";
$idpem=$_GET["id"];
$ambil=$koneksi->query("SELECT * FROM pembelian WHERE id_pembelian='$idpem'");
$detpem = $ambil->fetch_assoc();


?>





<div class="container">
        <h1>konfirmasi pembayaran anda</h1>
        <p>kirim bukti pembayaran disini</p>
        <div class=""><strong>Total pembelian anda: Rp.<?php echo number_format($detpem['total_pembelian']) ?></strong></div>


        <form method="POST" enctype="multipart/form-data">
            <div>
           <label>Nama pelanggan</label>
           <input type="text" class="form-control" name="nama" value="<?php echo $_SESSION['user']['username'] ?>">
            </div>
            <div>
           <label>Bank</label>
           <input type="text" class="form-control" name="bank">
            </div>
            <div>
           <label>jumlah</label>
           <input type="number" class="form-control" name="jumlah" min="1">
            </div>
            <div>
           <label>Foto bukti</label>
           <input type="file" class="form-control" name="bukti">
            <p class="text-danger">foto bukti pembayaran </p>
            </div>
            <button class="btn btn-primary" name="kirim">bayar</button>
        </form>
    </div>

    <?php


    if (isset($_POST['kirim'])) {
      $nama = $_POST['nama'];
      $bank = $_POST['bank'];
      $jumlah = $_POST['jumlah'];
      $tanggal = date("y-m-d");

      $namabukti = $_FILES['bukti']['name'];
      $lokasibukti = $_FILES['bukti']['tmp_name'];
      $namafixs = date("ymdHis") . $namabukti;
      move_uploaded_file($lokasibukti, "../buktibayar/$namafixs");

      $koneksi->query("INSERT INTO pembayaran(id_pembelian,nama,jumlah,tanggal,bukti_pembayaran,bank)VALUES('$idpem','$nama','$jumlah','$tanggal','$namafixs','$bank') ");


      $koneksi->query("UPDATE pembelian SET status_pembelian='pembelian telah dikonfirmasi' WHERE id_pembelian='$idpem'");

      echo "<script>location='riwayat.php';</script>";
      echo "<script>alert('terimah kasih telah melakukan pembayaran')</script>";
    }
    ?>