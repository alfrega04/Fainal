<?php
$koneksi = new mysqli("localhost", "root", "", "database_toko");


?>

<h2>tambah produk</h2>


                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                <label>Nama produk</label>
                                <input type="text" class="span8" name="nama" >
                                </div>
                                <div class="form-group">
                                <label>Harga (Rp)</label>
                                <input type="number" class="span8" name="harga">
                                </div>
                                <div class="form-group">
                                <label>Berat (gr)</label>
                                <input type="number" class="span8" name="berat">
                                </div>
                                <div class="form-group">
                                <label>Stok produk</label>
                                <input type="number" class="span8" name="stok" min="1">
                                </div>
                                <div class="form-group">
                                <label>Deskripsi produk</label>
                                <textarea class="span8" name="deskripsi" rows="10"></textarea>
                                </div>
                                <div class="form-group">
                                <label>foto produk</label>
                                <input type="file" name="foto" class="span8">
                                </div>
                                <button class="btn btn-primary " name="save">simpan</button>
                            </form>

<?php 
if(isset($_POST['save'])){

    $nama = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi, "../fileproduk/" . $nama);
    $koneksi->query("INSERT INTO produk(nama_produk,harga_produk,berat_produk,foto_produk,deskripsi_produk,stok_produk) VALUES('$_POST[nama]','$_POST[harga]','$_POST[berat]','$nama','$_POST[deskripsi]','$_POST[stok]')");

    echo "<script>alert ('Data tersimpan');</script>";
    echo "<meta http-equiv='refresh' content='1;url=halaman_admin.php?halaman=produk'>";
   
}



?>