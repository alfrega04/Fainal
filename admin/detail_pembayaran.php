<h2>Detail pembelian</h2>

<?php
$id_pem=$_GET['id'];
 $ambil=$koneksi->query("SELECT * FROM pembelian JOIN user ON pembelian.id_user=user.id_user WHERE pembelian.id_pembelian =' $id_pem'");

$detail = $ambil->fetch_assoc();
?>

<strong style="">Nama pelanggan <br><?php echo $detail['username'] ?></strong><br>

<p>
    <strong>Email :</strong>
    <?php echo $detail['email']; ?> <br>
    <strong>No HP :</strong>
    <?php echo $detail['no_hp']; ?>
</p>
<p>
    <strong>Tanggal pembelian :</strong> 
<?php echo $detail['tanggal_pembelian']; ?> <br>
<strong>Total belanja :</strong>
Rp.<?php echo number_format($detail['total_pembelian']); ?>
</p>


<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>subtotal</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor = 1;?>
        <?php $ambil= $koneksi->query("SELECT * FROM pembelian_produk LEFT JOIN produk ON pembelian_produk.id_pembelian_produk=produk.id_produk WHERE pembelian_produk.id_pembelian = '$id_pem'"); ?>
        <?php while($pecah=$ambil->fetch_assoc()){ ?>
            
        <tr>
        <td><?php echo $nomor; ?></td>
        <td><?php echo $pecah['nama']; ?></td>
        <td><?php echo number_format($pecah['harga']); ?></td>
        <td><?php echo $pecah['jumlah']; ?></td>
        <td><?php echo number_format($pecah['harga'] *$pecah['jumlah']); ?>
        </td>
        </tr>
        <?php $nomor++ ?>
            
        <?php }?>
    </tbody>
</table>