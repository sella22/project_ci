-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jul 2021 pada 22.28
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_bpf`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `no_penjualan` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_makanan` int(11) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`no_penjualan`, `id_user`, `id_makanan`, `jumlah`, `total`) VALUES
('PJ1626206559', 10, 1, 4, 600000),
('PJ1626206559', 10, 1, 4, 600000),
('PJ1626209057', 10, 6, 2, 1093090),
('PJ1626412869', 9, 6, 2, 1093090),
('PJ1626909131', 10, 4, 1, 43543),
('PJ1626909382', 10, 6, 1, 546545),
('PJ1626941288', 10, 6, 2, 1093090),
('PJ1626977273', 10, 1, 1, 150000),
('PJ1626977368', 10, 10, 6, 108000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `bagian` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `bagian`, `status`) VALUES
(1, 'Putri', 'Chef', 'Aktif'),
(3, 'Riri', 'Kasir', 'Aktif'),
(4, 'Nissa', 'Pelayan', 'Aktif'),
(5, 'Nazwa', 'Chef', 'Aktif'),
(6, 'Yana', 'Chef', 'Aktif'),
(7, 'Winda', 'Pelayan', 'Aktif'),
(8, 'Mira', 'Pelayan', 'Aktif'),
(9, 'Yono', 'Juru Parkir', 'Aktif'),
(10, 'Lulu', 'Penyambut Tamu', 'Aktif'),
(11, 'Lina', 'Pencuci piring', 'Aktif'),
(12, 'Darmi', 'Pencuci piring', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_makanan` int(11) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id`, `id_user`, `id_makanan`, `jumlah`, `tanggal`, `total`) VALUES
(31, 10, 1, 1, '22/07/2021', 150000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL DEFAULT 'makanan.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id`, `nama`, `harga`, `stok`, `gambar`) VALUES
(1, 'pizza', 150000, 30, 'pizza.jpg'),
(4, 'Sate ayam', 30000, 33, 'sate.jpg'),
(6, 'Bakso', 25000, 60, 'bakso1.jpg'),
(7, 'Gurame Saus', 150000, 50, 'kepiting_saus.jpg'),
(8, 'Mie ayam', 18000, 80, 'mie_ayam.jpg'),
(9, 'Martabak India', 22000, 78, 'martabak_india.jpg'),
(10, 'Burger', 18000, 84, 'burger.jpg'),
(11, 'Kepiting  Saus', 180000, 56, 'kepiting_saus1.jpg'),
(12, 'Nasi Putih', 10000, 10000, 'nasi_putih.jpg'),
(13, 'Rendang', 16000, 87, 'rendang.jpg'),
(14, 'Spageti', 45000, 54, 'spageti.jpg'),
(15, 'Sushi', 67000, 76, 'sushi.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(11) NOT NULL,
  `no_penjualan` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `total_bayar` int(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pembayaran` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Belum Dikirim'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id`, `no_penjualan`, `id_user`, `total_bayar`, `tanggal`, `alamat`, `pembayaran`, `gambar`, `keterangan`, `status`) VALUES
(24, 'PJ1626977273', 10, 150000, '22/07/2021', 'JL.PEMBANGUNAN RT 05 KEL.SUKASARI ', 'MANDIRI', '', 'jangan banyak sosis', 'Belum Dikirim'),
(25, 'PJ1626977368', 10, 108000, '22/07/2021', 'JL.Yos Sudarso', 'BNI', 'bukti_tf.png', 'Banyakin mayones', 'Belum Dikirim');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `gambar`, `role`, `date_created`) VALUES
(3, 'admin', 'admin@gmail.com', '$2y$10$v5wDGp6CT/IKQtlJoVrypeaGvGMLMjNvJiVSXx/wJ8btiGCP8sVIq', 'default.jpg', 'Admin', 1618110832),
(9, 'sella', 'sella@gmail.com', '$2y$10$QzWaX0Hpwi/EVDjttD5UoejDuMtYa.X3uSfALvawGVloSt8aDHSjW', 'default.jpg', 'User', 1625153871),
(10, 'sella', 'sella12@gmail.com', '$2y$10$hASq95bI/kWt9MGlIwCMdOoGgh3SN5sK6nwmwyP.Ms6oVFHIKWjt.', 'default.jpg', 'User', 1625721805),
(11, 'nay', 'nay@gmail.com', '$2y$10$RuRBTcU6oK61pf3i3DYiTO/uIch0m9YRSSNiGLzAdtRnu0.ViYrl6', 'default.jpg', 'User', 1626050363),
(12, 'fdg', 'fgf@gmail.com', '$2y$10$GVDz9Vthu8D/oBB2CQjxzu4qFrAzfbeO0l8lwir6erpl2MMoalmoa', 'default.jpg', 'User', 1626157405),
(13, 'fcgghghgh', 'fff@gmail.com', '$2y$10$5On8cB74MX4BFDbBrbBHt.0krPDb3LXdxUMSYMlZYIYFJpHMPkqmG', 'default.jpg', 'User', 1626209350),
(14, 'sella', 'sellaaaaa@gmail.com', '$2y$10$oWrICRZoaOgjsUy.kZ4vfOexJboHuZkTIZXFxybE.RCoxtW904ICG', 'default.jpg', 'User', 1626392328);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD KEY `usr` (`id_user`),
  ADD KEY `mkn` (`id_makanan`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_makanan` (`id_makanan`);

--
-- Indeks untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`id_user`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD CONSTRAINT `mkn` FOREIGN KEY (`id_makanan`) REFERENCES `makanan` (`id`),
  ADD CONSTRAINT `usr` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Ketidakleluasaan untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `id_makanan` FOREIGN KEY (`id_makanan`) REFERENCES `makanan` (`id`),
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Ketidakleluasaan untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
