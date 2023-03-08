-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Mar 2023 pada 00.57
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lelang_online`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `history_lelang`
--

CREATE TABLE `history_lelang` (
  `id_history` int(10) UNSIGNED NOT NULL,
  `id_lelang` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `penawaran_harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `history_lelang`
--

INSERT INTO `history_lelang` (`id_history`, `id_lelang`, `id_user`, `penawaran_harga`) VALUES
(87, 102, 1, 800000),
(88, 101, 1, 812000),
(89, 91, 1, 700000),
(90, 94, 1, 896000),
(91, 95, 1, 927400),
(92, 96, 1, 948000),
(93, 100, 1, 880000),
(94, 99, 1, 900120),
(95, 98, 1, 935000),
(96, 97, 1, 1000000),
(97, 93, 1, 1000000),
(98, 102, 2, 980000),
(99, 101, 2, 980000),
(100, 100, 2, 879100),
(101, 99, 2, 897000),
(102, 98, 2, 967000),
(103, 97, 2, 900000),
(104, 96, 2, 1000000),
(105, 95, 2, 2000000),
(106, 94, 2, 895100),
(107, 92, 2, 1000000),
(108, 97, 3, 1500000),
(109, 94, 3, 1000000),
(112, 92, 4, 950000),
(113, 99, 4, 900000),
(114, 101, 4, 813000),
(115, 97, 4, 950000),
(116, 94, 4, 905000),
(117, 98, 4, 1000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(10) UNSIGNED NOT NULL,
  `nama_barang` varchar(250) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `harga_awal` int(20) UNSIGNED NOT NULL,
  `deskripsi_barang` varchar(100) NOT NULL,
  `status_barang` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `gambar`, `tgl`, `harga_awal`, `deskripsi_barang`, `status_barang`) VALUES
(81, 'Sepeda balap 2021', 'balap2021.jpg', '2023-03-01', 989000, 'Sepeda balap tahun 2021 dengan variasi warna hijau dan hitam cocok untuk laki-laki', 0),
(82, 'Sepeda gunung anak polygon', 'gunung_anak_polygon1.jpeg', '2023-03-01', 834000, 'Sepeda gunung anak merek polygon dengan variasi merah dan orange', 0),
(83, 'Sepeda gunung wimcycle', 'gunung_wimsycle.jpeg', '2023-03-01', 902000, 'Sepeda gunung merek wimcycle dengan warna hitam dan sentuhan warna merah', 0),
(84, 'Sepeda lipat cream', 'lipat_cream.jpg', '2023-03-01', 789000, 'Sepeda lipat cream cocok untuk wanita terdapat keranjang didepan', 0),
(85, 'Sepeda lipat hitam', 'lipat_hitam.jpg', '2023-03-01', 789000, 'Sepeda lipat hitam dengan cocok untuk laki-laki terdapat keranjang didepan', 0),
(86, 'Sepeda lipat hitam-hijau', 'lipat.jpg', '2023-03-01', 789000, 'Sepeda lipat hitam-hijau cocok untuk laki-laki terdapat boncengan dibelakang', 1),
(87, 'Sepeda lipat merah', 'lipat_merah.jpg', '2023-03-01', 789000, 'Sepeda lipat merah dengan tambahan warna putih cocok untuk anak-anak maupun remaja', 1),
(88, 'Sepeda lipat TREX 20 XT-7', 'Lipat_TREX_20_XT-7.jpg', '2023-03-01', 879000, 'Sepeda lipat TREX 20 XT-7 dengan variasi warna ungu ', 1),
(89, 'Sepeda lipat TREX 20 XT-7 hitam', 'Lipat_TREX_20_XT-7_kuning.jpg', '2023-03-01', 894000, 'Sepeda lipat TREX 20 XT-7 dengan variasi warna hitam dan tambahan warna kuning-biru', 1),
(90, 'Sepeda lipat ducati', 'lipat_ducati.jpg', '2023-03-01', 934000, 'Sepeda lipat ducati bewarna hitam dengan tambahan warna kuning', 1),
(91, 'Sepeda listrik hybrid panama', 'listrik_hybrid_panama.jpg', '2023-03-01', 846000, 'Sepeda listrik hybrid panama dengan warna full hitam doff cocok untuk laki-laki', 1),
(92, 'Sepeda london taxi', 'london_taxi.jpeg', '2023-03-01', 947000, 'Sepeda london taxi dengan desain seperti sepeda tua tetapi sangat kokoh', 1),
(93, 'Sepeda pacific ofo', 'pacific_ofo.jpg', '2023-03-01', 926000, 'Sepeda pacific ofo dengan variasi warna kuning doff simple terdapat tambahan keranjang didepan', 1),
(94, 'Sepeda pacific ravella', 'pacific_ravella.jpg', '2023-03-01', 895000, 'Sepeda pacific ravella dengan warna cream cocok untuk wanita terdapat keranjang didepan', 1),
(95, 'Sepeda pacific ravella XT', 'pacific_ravella_xt.jpg', '2023-03-01', 836000, 'Sepeda pacific ravella XT variasi warna hitam dengan tambahan warna merah terdapat keranjang didepan', 1),
(96, 'Sepeda pacific viper', 'pacific_viper.jpg', '2023-03-01', 947000, 'Sepeda pacific viper cocok untuk laki-laki dengan warna orange', 1),
(97, 'Sepeda polygon 2020', 'putih2020.jpg', '2023-03-01', 699000, 'Sepeda polygon 2020 dengan variasi warna putih ke abu-abuan cocok untuk laki-laki', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lelang`
--

CREATE TABLE `tb_lelang` (
  `id_lelang` int(10) UNSIGNED NOT NULL,
  `id_barang` int(10) UNSIGNED NOT NULL,
  `tgl_lelang` datetime NOT NULL,
  `tgl_akhir` datetime DEFAULT NULL,
  `pemenang` varchar(225) DEFAULT NULL,
  `harga_akhir` int(20) UNSIGNED DEFAULT NULL,
  `id_petugas` int(10) UNSIGNED NOT NULL,
  `status` enum('dibuka','ditutup') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_lelang`
--

INSERT INTO `tb_lelang` (`id_lelang`, `id_barang`, `tgl_lelang`, `tgl_akhir`, `pemenang`, `harga_akhir`, `id_petugas`, `status`) VALUES
(91, 97, '2023-03-03 09:14:00', '2023-03-11 09:14:00', NULL, NULL, 2, 'dibuka'),
(92, 96, '2023-03-03 09:15:00', '2023-03-11 09:15:00', NULL, NULL, 2, 'dibuka'),
(93, 95, '2023-03-03 09:15:00', '2023-03-11 09:15:00', NULL, NULL, 2, 'dibuka'),
(94, 94, '2023-03-03 09:15:00', '2023-03-04 09:32:00', 'siti emeliana filasari', 1000000, 2, 'ditutup'),
(95, 93, '2023-03-01 15:21:00', '2023-03-04 06:16:00', 'widia sriwahyuni', 2000000, 2, 'ditutup'),
(96, 92, '2023-03-02 13:21:00', '2023-03-03 09:17:00', 'widia sriwahyuni', 1000000, 3, 'ditutup'),
(97, 91, '2023-03-02 14:23:00', '2023-03-04 09:18:00', 'siti emeliana filasari', 1500000, 3, 'ditutup'),
(98, 90, '2023-03-02 13:22:00', '2023-03-12 09:18:00', NULL, NULL, 3, 'dibuka'),
(99, 89, '2023-03-03 09:18:00', '2023-03-04 09:18:00', 'nayla nur afida', 900120, 3, 'ditutup'),
(100, 88, '2023-03-03 09:18:00', '2023-03-15 09:18:00', NULL, NULL, 3, 'dibuka'),
(101, 87, '2023-03-03 09:18:00', '2023-03-13 09:18:00', NULL, NULL, 3, 'dibuka'),
(102, 86, '2023-03-03 09:18:00', '2023-03-14 09:19:00', NULL, NULL, 3, 'dibuka');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_level`
--

CREATE TABLE `tb_level` (
  `id_level` int(11) UNSIGNED NOT NULL,
  `level` enum('administrator','petugas','masyarakat') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_level`
--

INSERT INTO `tb_level` (`id_level`, `level`) VALUES
(1, 'administrator'),
(2, 'petugas'),
(3, 'masyarakat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_masyarakat`
--

CREATE TABLE `tb_masyarakat` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(96) NOT NULL,
  `telp` varchar(25) NOT NULL,
  `id_level` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_masyarakat`
--

INSERT INTO `tb_masyarakat` (`id_user`, `nama_lengkap`, `username`, `password`, `telp`, `id_level`) VALUES
(1, 'nayla nur afida', 'nayla', '$2y$10$iKjpNgQscKtoYP0r5Hntk.E0jfLg36kZaEXBfQb1Vn5sQg1pvSDGi', '089346674263', 3),
(2, 'widia sriwahyuni', 'widia', '$2y$10$r3pDeTdF1mztXaZxeJDh1exaE2smQHUEWzCauvbLL2oa7skDQ/txy', '082394888224', 3),
(3, 'siti emeliana filasari', 'imel', '$2y$10$rXtRDe/y8PFHdpoHRmmoae0/vAICUXZOfGm1Nbht.Hl4IiNQIRblu', '089375477773', 3),
(4, 'nia nur afisah', 'niaa', '$2y$10$KxEYz.HKRm0bXCZms9Rqc.WQDnIZUkX06q17ZnnXvkjPjcHzYGXvK', '082740948834', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` int(10) UNSIGNED NOT NULL,
  `nama_petugas` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(96) NOT NULL,
  `id_level` int(11) UNSIGNED NOT NULL,
  `telp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `id_level`, `telp`) VALUES
(1, 'ririn novita sari', 'ririn', '$2y$10$Jrqmmu.uO3HSGbEgE/UN0u/fGT2ijl187faQrVBY7Ohra57nlebY2', 1, '085335477816'),
(2, 'diva oliviya', 'diva', '$2y$10$dfw1hsdRSMwiUpUMESeCzeN3zyDnlTYDSmeBhD4b1NQ1GM.F268BG', 2, '082484272389'),
(3, 'dwi khusnul khotimah', 'dwii', '$2y$10$2JgazvJxOHyaONmwKkyW2OIvfkXzWls5oOQNVq5zmPDVWys/DQpam', 2, '084332545641');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `history_lelang`
--
ALTER TABLE `history_lelang`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `id_lelang` (`id_lelang`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tb_lelang`
--
ALTER TABLE `tb_lelang`
  ADD PRIMARY KEY (`id_lelang`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indeks untuk tabel `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indeks untuk tabel `tb_masyarakat`
--
ALTER TABLE `tb_masyarakat`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `tb_masyarakat_ibfk_2` (`id_level`);

--
-- Indeks untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `history_lelang`
--
ALTER TABLE `history_lelang`
  MODIFY `id_history` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT untuk tabel `tb_lelang`
--
ALTER TABLE `tb_lelang`
  MODIFY `id_lelang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT untuk tabel `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id_level` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_masyarakat`
--
ALTER TABLE `tb_masyarakat`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id_petugas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `history_lelang`
--
ALTER TABLE `history_lelang`
  ADD CONSTRAINT `history_lelang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_masyarakat` (`id_user`),
  ADD CONSTRAINT `history_lelang_ibfk_2` FOREIGN KEY (`id_lelang`) REFERENCES `tb_lelang` (`id_lelang`);

--
-- Ketidakleluasaan untuk tabel `tb_lelang`
--
ALTER TABLE `tb_lelang`
  ADD CONSTRAINT `tb_lelang_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`),
  ADD CONSTRAINT `tb_lelang_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `tb_petugas` (`id_petugas`);

--
-- Ketidakleluasaan untuk tabel `tb_masyarakat`
--
ALTER TABLE `tb_masyarakat`
  ADD CONSTRAINT `tb_masyarakat_ibfk_2` FOREIGN KEY (`id_level`) REFERENCES `tb_level` (`id_level`);

--
-- Ketidakleluasaan untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD CONSTRAINT `tb_petugas_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `tb_level` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
