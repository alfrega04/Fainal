<h2>Data Pembelian</h2>
<?php
include "koneksi.php";
?>

<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            
            <th>No</th>
            <th>Nama pelanggan</th>
            <th>tanggal</th>
            <th>Status</th>
            <th>total</th>
            <th>Jasa pengiriman</th>
            <th>aksi</th>
        </tr>
    </thead>
    <tbody>
            <?php $nomor = 1; ?>
            
            <?php $ambil = $koneksi->query("SELECT * FROM pembelian JOIN user ON pembelian.id_user = user.id_user"); ?>
            <?php while ($pecah = $ambil->fetch_assoc()){ ?>
        <tr> 
        <td><?php echo $nomor; ?></td>
        <td><?php echo $pecah['username']; ?></td>
        <td><?php echo $pecah['tanggal_pembelian']; ?></td>
        <td><?php echo $pecah['status_pembelian'] ?></td>
        <td><?php echo number_format($pecah['total_pembelian']); ?></td>
        <td><?php echo $pecah['jasa_pengiriman'] ?></td>
        <td>
                 <a href="halaman_admin.php?halaman=detail_pembayaran&id=<?php echo $pecah['id_pembelian']; ?>" class="btn btn-info">detail</a>

                <?php  if($pecah['status_pembelian']!=="dicekal"): ?>
                 <a href="halaman_admin.php?halaman=konfirmasi_pembayaran&id=<?php echo $pecah['id_pembelian'] ?>" class="btn btn-danger">Proses</a>
                 <?php endif; ?>
        </td>
        </tr>
        <?php $nomor++ ?>
        <?php } ?>
    </tbody>

</table>