<?php

require_once "../function/koneksi.php";
if(function_exists($_GET['function'])) {
    $_GET['function']();
}

function insert_pembelian_produk(){
    global $koneksi;
    $check = array('id_pembelian_produk' => '', 'id_pembelian' => '', 'jumlah' => '', 'nama' => '', 'harga' => '', 'berat' => '', 'subberat' => '', 'subharga' => ''  );
    $check_match = count(array_intersect_key($_POST, $check));
    if($check_match == count($check)) {
        $result = mysqli_query($koneksi, "INSERT INTO pembelian_produk SET
        id_pembelian_produk = '$_POST[id_pembelian_produk]',
        id_pembelian = '$_POST[id_pembelian]',
        id_produk = '$_POST[id_produk]',
        jumlah= '$_POST[jumlah]',
        nama = '$_POST[nama]'
        harga = '$_POST[harga]'
        berat = '$_POST[berat]'
        subberat = '$_POST[subberat]'
        subharga = '$_POST[subharga]'");
        

        if($result) {
            $respons = array(
                'status' => 1,
                'massage' => 'Insert Data Sukses'
            );
        }
        else {
            $respons = array(
                'status' => 0,
                'massage' => 'Gagal Insert Tabel'
            );
        }
    }else {
            $respons = array(
                'status' => 0,
                'massage' => 'Parameter Salah'
            );
        }
    header('content-Type:application/json');
    echo json_encode($respons);
}

function get_pembelian_produk() {
    global $koneksi;
    $query = $koneksi ->query("SELECT * FROM pembelian_produk");
    while($row = mysqli_fetch_object($query)) {
        $data[] = $row;
    }
    $respons = array (
        'status' => 1,
        'massage' => 'Sukses Menampilkan Data',
        'data' => $data
    );
    header('Content-Type:aplication/json');
    echo json_encode($respons);
}

function get_pembelian_produk_id() {
    global $koneksi;
    if(!empty($_GET["id_pembelian_produk"])) {
        $id_pembelian_produk = $_GET["id_pembelian_produk"];
    }
    $query = "SELECT * FROM pembelian_produk WHERE id=$id_pembelian_produk";
    $result = $koneksi -> query($query);
    while($row = mysqli_fetch_object($result)) {
        $data[] = $row;
    }
    if($data) {
        $respons = array(
            'status' => 1,
            'massage' => 'Sukses Menampilkan Data Berdasarkan ID',
            'data' => $data
        );
    }
    else {
        $respons = array(
            'status' => 0,
            'massage' => 'Data Tidak Ditemukan'
        );
    }
    header('Content-Type:aplication/json');
    echo json_encode($respons);
}

function update_pembelian_produk() {
    global $koneksi;
    if(!empty($_GET["id_pembelian_produk"])) {
        $id = $_GET["id_pembelian_produk"];
    }
    $check = array('id_pembelian_produk' => '', 'id_pembelian'=>'', 'jumlah' => '', 'nama' => '', 'harga' => '', 'berat' => '', 'subberat' => '', 'subharga' => ''  );
    $check_match = count(array_intersect_key($_POST, $check));
    if($check_match == count($check)) {
        $result = mysqli_query($koneksi, "UPDATE pembelian_produk SET
        id_pembelian ='$_POST[id_pembelian]', jumlah = '$_POST[jumlah]', nama ='$_POST[nama]', harga ='$_POST[harga]', berat ='$_POST[berat]', subberat ='$_POST[subberat]', subharga ='$_POST[subharga]' WHERE id=$id_pembelian_produk");
        if($result) {
            $respons = array (
                'status' => 1,
                'massage' => 'Update Data Berhasil'
            );
        }
        else {
            $respons = array (
                'status' => 0,
                'massage' => 'Gagal Mengupdate Data'
            );
        }
    }else{
        $respons = array (
            'status' => 0,
            'massage' => 'Gagal Mengupdate Data',
            'data' => $id
        );
    }
    header('Content-Type:aplication/json');
    echo json_encode($respons);
}

function hapus_pembelian_produk() {
    global $koneksi;
    $id = $_GET['id'];
    $query = "DELETE FROM pembelian_produk WHERE id=$id_pembelian_produk";
    if(mysqli_query($koneksi, $query)) {
        $respons = array (
            'status' => 1,
            'massage' => 'Hapus Data Berhasil'
        );
    }
    else {
        $respons = array (
            'status' => 0,
            'massage' => 'Gagal Menghapus Data'
        );
    }
    header('Content-Type:aplication/json');
    echo json_encode($respons);
}

?>