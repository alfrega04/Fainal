<h2>Data pembayaran</h2>

<?php

$id_pembelian=$_GET['id'];

$ambil=$koneksi->query("SELECT * FROM pembayaran WHERE id_pembelian='$id_pembelian'");
$detail=$ambil->fetch_assoc();

?>


    <div class=col-md-4 >
        <table class="table" >
            <tr>
                <th>Nama</th>
                <td><?php echo $detail['nama']; ?></td>
            </tr>
            <tr>
                <th>Tanggal pembelian</th>
                <td><?php echo $detail['tanggal'];?></td>
            </tr>
            <tr>
                <th>Jumlah</th>
                <td>Rp.<?php echo number_format($detail['jumlah']);?></td>
            </tr>
            <tr>
                <th>Bank</th>
                <td><?php echo $detail['bank'];?></tr>
            </tr>
        </table>
    </div>
    <div class=col-md-6 >
        <img src="../buktipembayaran/<?php echo $detail['bukti_pembayaran'] ?>" width="250px;" height="250px;"> 
        </div>
       




<form  method="POST">
    <div class="form-group">
    <label>Status</label>
    <select class="form-control" name="status" >
        <option value="">Pilih status</option>
        <option value="lunas">Lunas</option>
        <option value="barang dikirim">Barang dikirim</option>
        <option value="batal pesanan">Batal</option>
       
    </select>
    </div>
    <button class="btn btn-danger" name="proses">Proses</button>

    <?php
    if(isset($_POST['proses'])){
        
        $status=$_POST['status'];


        $koneksi->query("UPDATE pembelian SET status_pembelian='$status' WHERE id_pembelian='$id_pembelian'");

        echo "<script>location='halaman_admin.php?halaman=pembelian'</script>";
    }
    
    ?>

</form>