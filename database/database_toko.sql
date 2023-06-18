-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2023 pada 13.23
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_toko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jasa_pengiriman`
--

CREATE TABLE `jasa_pengiriman` (
  `id_jasa_pengiriman` int(11) NOT NULL,
  `nama_jasa_pengiriman` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jasa_pengiriman`
--

INSERT INTO `jasa_pengiriman` (`id_jasa_pengiriman`, `nama_jasa_pengiriman`) VALUES
(2, 'J&T'),
(3, 'Sicepat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ongkir`
--

CREATE TABLE `ongkir` (
  `id_ongkir` int(11) NOT NULL,
  `nama_kota` varchar(250) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ongkir`
--

INSERT INTO `ongkir` (`id_ongkir`, `nama_kota`, `tarif`) VALUES
(1, 'Jakarta', 15000),
(2, 'makassar', 15000),
(3, 'Toraja', 15000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `bukti_pembayaran` varchar(200) NOT NULL,
  `bank` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pembelian`, `nama`, `jumlah`, `tanggal`, `bukti_pembayaran`, `bank`) VALUES
(5, 7, 'valen', 3564000, '2023-02-16', '230216085443th.jpeg', 'mandiri'),
(7, 0, 'Risnaa', 2500, '2023-06-02', '23254.jpg', 'Bri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `total_pembelian` int(11) NOT NULL,
  `id_ongkir` int(11) NOT NULL,
  `nama_kota` varchar(200) NOT NULL,
  `tarif` int(11) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `jasa_pengiriman` varchar(200) NOT NULL,
  `status_pembelian` varchar(200) NOT NULL DEFAULT 'Belum di validasi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_user`, `tanggal_pembelian`, `total_pembelian`, `id_ongkir`, `nama_kota`, `tarif`, `alamat`, `jasa_pengiriman`, `status_pembelian`) VALUES
(7, 6, '2023-02-16', 3564000, 2, 'makassar', 15000, 'afaddfsdafadsf', 'J&T', 'barang telah sampai'),
(9, 4, '2023-02-21', 3364000, 2, 'makassar', 15000, 'makassar', 'J&T', 'pembelian telah dikonfirmasi'),
(10, 9, '2023-06-03', 1149000, 0, '', 0, '', 'J&T', 'barang telah sampai'),
(11, 9, '2023-06-03', 550000, 0, '', 0, 'parinding', '', 'barang telah sampai'),
(12, 9, '2023-06-03', 949000, 0, '', 0, 'Jalan gajah', '', 'Belum di validasi'),
(13, 9, '2023-06-03', 700000, 0, '', 0, 'Jalan gajah', '', 'barang telah sampai'),
(14, 10, '2023-06-15', 350000, 0, '', 0, 'Jalan gajah', '', 'Belum di validasi'),
(15, 10, '2023-06-15', 850000, 0, '', 0, '', '', 'Belum di validasi'),
(16, 11, '2023-06-15', 350000, 0, '', 0, 'jln.gajah', '', 'barang telah sampai'),
(17, 11, '2023-06-15', 1799000, 0, '', 0, 'kakondongan', '', 'barang telah sampai'),
(18, 11, '2023-06-16', 150000, 0, '', 0, 'kakondongan', '', 'Belum di validasi'),
(19, 12, '2023-06-16', 2600000, 0, '', 0, 'Jalan gajah', '', 'Belum di validasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `subberat` int(11) NOT NULL,
  `subharga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah`, `nama`, `harga`, `berat`, `subberat`, `subharga`) VALUES
(17, 10, 28, 1, 'Celana Wanitaa', 250000, 0, 0, 250000),
(18, 10, 30, 1, 'Kaos Supreme', 899000, 0, 0, 899000),
(19, 11, 25, 1, 'Sepatu Lari Nike', 550000, 0, 0, 550000),
(20, 12, 29, 1, 'Tas Pria', 350000, 0, 0, 350000),
(21, 12, 20, 1, 'Kemeja', 599000, 0, 0, 599000),
(22, 13, 29, 2, 'Tas Pria', 350000, 0, 0, 700000),
(23, 14, 22, 1, 'Celana Pria', 350000, 0, 0, 350000),
(24, 15, 29, 2, 'Tas Pria', 350000, 0, 0, 700000),
(25, 15, 23, 1, 'Kaos', 150000, 0, 0, 150000),
(26, 16, 29, 1, 'Tas Pria', 350000, 0, 0, 350000),
(27, 17, 32, 1, 'Kaos', 150000, 0, 0, 150000),
(28, 17, 30, 1, 'Kaos Supreme', 899000, 0, 0, 899000),
(29, 17, 27, 1, 'Jaket Kulit Pria', 750000, 0, 0, 750000),
(30, 18, 23, 1, 'Kaos', 150000, 0, 0, 150000),
(31, 19, 21, 1, 'Nike Air Jordan Black And Red', 2600000, 0, 0, 2600000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilik_admin`
--

CREATE TABLE `pemilik_admin` (
  `id_pemilik_admin` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(200) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemilik_admin`
--

INSERT INTO `pemilik_admin` (`id_pemilik_admin`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin123', 'admin'),
(2, 'pemilik', 'pemilik123', 'pemilik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(250) NOT NULL,
  `harga_produk` varchar(250) NOT NULL,
  `berat_produk` varchar(250) NOT NULL,
  `foto_produk` varchar(250) NOT NULL,
  `deskripsi_produk` varchar(250) NOT NULL,
  `stok_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `berat_produk`, `foto_produk`, `deskripsi_produk`, `stok_produk`) VALUES
(20, 'baju laos', '529000', '', 'kemeja.jpg', '', 1),
(21, 'Nike Air Jordan Black And Red', '2600000', '', 'sepatu.jpg', 'Produk original dan bergaransi', 8),
(22, 'Celana Pria', '350000', '', 'celana.jpg', 'Produk original dan berkualitas', 12),
(23, 'Kaos', '150000', '', 'kaos.jpg', 'Produk Original dan Berkualitas', 17),
(24, 'Sepatu Ji', '350000', '', 'sepatu2.jpg', 'Produk original ', 12),
(25, 'Sepatu Lari Nike', '550000', '', 'sepatu3.jpg', 'sepatu nich', 14),
(26, 'Sweater Putih', '450000', '', 'sweater.jpg', 'Original', 15),
(27, 'Jaket Kulit Pria', '750000', '', 'produk10.jpg', 'original ji', 14),
(28, 'Celana Wanita', '250000', '', 'produk15.jpg', 'Beli mi kodong', 14),
(29, 'Tas Pria', '350000', '', 'tas.jpg', 'original', 9),
(30, 'Kaos Supreme', '899000', '', 'th (1).jpeg', 'produk ori dan berkualitas', 0),
(32, 'Kaos baju', '160000', '', 'kaos.jpg', 'barang original', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `ulang_password` varchar(250) NOT NULL,
  `no_hp` varchar(250) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `ulang_password`, `no_hp`, `alamat`) VALUES
(6, 'valen', '12345', 'valen@gmail.com', '12345', '082187357490', 'lanraki'),
(7, 'alfrega', '12345', 'alfrega@gmail.com', '12345', '085234567712', 'parinding'),
(9, 'silwana rising', '12345', 'risingsilwana@gmail.com', '12345', '082190129677', 'Jalan gajah'),
(10, 'wana', '12345', 'wana@gmail.com', '12345', '082190129677', 'Jalan gajah'),
(11, 'juwitapare', 'juwita', 'juwitapare@gmail.com', 'juwita', '082123530364', 'kakondongan'),
(12, 'andi', '12345', 'andi@gmail.com', '12345', '0886387725362', 'jln.gajah');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jasa_pengiriman`
--
ALTER TABLE `jasa_pengiriman`
  ADD PRIMARY KEY (`id_jasa_pengiriman`);

--
-- Indeks untuk tabel `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id_ongkir`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indeks untuk tabel `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indeks untuk tabel `pemilik_admin`
--
ALTER TABLE `pemilik_admin`
  ADD PRIMARY KEY (`id_pemilik_admin`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jasa_pengiriman`
--
ALTER TABLE `jasa_pengiriman`
  MODIFY `id_jasa_pengiriman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id_ongkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `pemilik_admin`
--
ALTER TABLE `pemilik_admin`
  MODIFY `id_pemilik_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
