
<h2>Produk</h2>


<?php
$ambil=$koneksi->query("SELECT * FROM produk");?>
<?php while ($pecah = $ambil->fetch_assoc()) {?>

<div class="col-md-6" style="text-align:center;">
    <img src="../fileproduk/<?php echo $pecah['foto_produk'] ?>" width="200px" height="200px">
</div>
<table class="table table-bordered">
    <thead>
        <tr>
        <th>Nama produk</th>
        <th>Harga produk</th>
        <th>berat produk</th>
        <th>Stok produk</th>
        <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $pecah['nama_produk'] ?></td>
            <td><?php echo $pecah['harga_produk'] ?></td>
            <td><?php echo $pecah['berat_produk'] ?></td>
            <td><?php echo $pecah['stok_produk'] ?></td>
            <td>
           <a href="hapusproduk.php?id=<?php echo $pecah['id_produk'] ?>"><i class="fa-solid fa-trash"></i></a>
            </td>
        </tr>
    </tbody>
</table>

<?php } ?>

