-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2021 pada 02.58
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_smanegerisby`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama`, `foto`) VALUES
('admin', 'admin', 'admin', 'admin.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sma_lokasi`
--

CREATE TABLE `sma_lokasi` (
  `id_lokasi` bigint(20) UNSIGNED NOT NULL,
  `nama_sma` varchar(50) NOT NULL,
  `alamat_sma` varchar(150) NOT NULL,
  `lokasi_sma` point NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sma_lokasi`
--

INSERT INTO `sma_lokasi` (`id_lokasi`, `nama_sma`, `alamat_sma`, `lokasi_sma`) VALUES
(1, 'SMA Negeri 5 Surabaya', 'Jl. Kusuma Bangsa No.21, Ketabang, Kec. Genteng, Kota SBY, Jawa Timur 60272', 0xfeffffff01010000009965a9a603305c4089dded7203071dc0),
(2, 'SMA Negeri 1 Surabaya', 'Jl. Wijaya Kusuma No.48, Ketabang, Kec. Genteng, Kota SBY, Jawa Timur 60272', 0xfeffffff01010000004947db85f42f5c40c06165e964071dc0),
(3, 'SMA Negeri 2 Surabaya', 'Jl. Wijaya Kusuma No.48, Ketabang, Kec. Genteng, Kota SBY, Jawa Timur 60272', 0xfeffffff0101000000235edc2af52f5c400aa0834297061dc0),
(4, 'SMA Negeri 9 Surabaya', 'Jl. Wijaya Kusuma No.48, Ketabang, Kec. Genteng, Kota SBY, Jawa Timur 60272', 0xfeffffff0101000000ba9132a407305c40ff4b2070fb071dc0),
(5, 'SMA Negeri 6 Surabaya', 'Jl. Gubernur Suryo No.11, Embong Kaliasin, Kec. Genteng, Kota SBY, Jawa Timur 60271', 0xfeffffff0101000000a9180cb0a62f5c40dce41613bb0d1dc0),
(6, 'SMA Negeri 4 Surabaya', 'Jl. Mayjen Prof. Dr. Moestopo No.4, Pacar Keling, Kec. Tambaksari, Kota SBY, Jawa Timur 60131', 0xfeffffff0101000000909d57dd57305c408224b682e70f1dc0),
(7, 'SMA Negeri 7 Surabaya', 'Jl. Ngaglik No.27-29, Kapasari, Kec. Genteng, Kota SBY, Jawa Timur 60273', 0xfeffffff0101000000743ca5fe2b305c4035f576dddefd1cc0),
(8, 'SMA Negeri 3 Surabaya', 'Jl. Memet Sastrowiryo No.54, Komp. Kenjeran, Kec. Bulak, Kota SBY, Jawa Timur 60121', 0xfeffffff0101000000fb83349c8f325c40188778cc09f81cc0),
(9, 'SMA Negeri 8 Surabaya', 'Jl. Sultan Iskandar Muda No.42, Ujung, Kec. Semampir, Kota SBY, Jawa Timur 60155', 0xfeffffff010100000047bcf830812f5c4077b21824d8e51cc0),
(10, 'SMA Negeri 10 Surabaya', 'Jl. Jemursari I No.28, Jemur Wonosari, Kec. Wonocolo, Kota SBY, Jawa Timur 60237', 0xfeffffff01010000002b6ff77a652f5c404ffb4135d5471dc0),
(11, 'SMA Negeri 11 Surabaya', 'Jalan Perumnas Jl. Manukan Adi No.1, Manukan Kulon, Kec. Tandes, Kota SBY, Jawa Timur 60185', 0xfeffffff010100000092c981764b2a5c4034782edb480c1dc0),
(12, 'SMA Negeri 12 Surabaya', 'Jl. Sememi Kidul No.1, Sememi, Kec. Benowo, Kota SBY, Jawa Timur 60198', 0xfeffffff0101000000b8e044e1bd285c40d69af44a23f81cc0),
(13, 'SMA Negeri 13 Surabaya', 'Jl. Menganti Lidah Kulon, Lidah Kulon, Kec. Lakarsantri, Kota SBY, Jawa Timur 60213', 0xfeffffff010100000098e733ea6a2a5c40f46db90cc53a1dc0),
(14, 'SMA Negeri 14 Surabaya', 'Perum YKP IV Blok KK, Jl. Raya Tenggilis Mejoyo, Kali Rungkut, Kec. Rungkut, Kota SBY, Jawa Timur 60292', 0xfeffffff0101000000f1034acefe305c40c4a76c46dd421dc0),
(15, 'SMA Negeri 15 Surabaya', 'Jl. Dukuh Menanggal Sel. No.103, Dukuh Menanggal, Kec. Gayungan, Kota SBY, Jawa Timur 60234', 0xfeffffff0101000000d7fc058fff2d5c406dc46cdb475d1dc0),
(16, 'SMA Negeri 16 Surabaya', 'Jl. Raya Prapen No.59, Panjang Jiwo, Kec. Tenggilis Mejoyo, Kota SBY, Jawa Timur 60299', 0xfeffffff01010000004e37abb69d305c40ac07670d493d1dc0),
(17, 'SMA Negeri 17 Surabaya', 'Jl. Rungkut Asri Tengah, Rungkut Kidul, Kec. Rungkut, Kota SBY, Jawa Timur 60293', 0xfeffffff0101000000d4cd2c9b99315c402fa421565d4f1dc0),
(18, 'SMA Negeri 18 Surabaya', 'Jl. Bibis Karah Sawah 1 No.9, Karah, Kec. Jambangan, Kota SBY, Jawa Timur 60232', 0xfeffffff010100000079ac35bdb42d5c406481d820c3401dc0),
(19, 'SMA Negeri 19 Surabaya', 'Jl. Kedung Cowek No.390, Tanah Kali Kedinding, Kec. Kenjeran, Kota SBY, Jawa Timur 60134', 0xfeffffff0101000000da6d38bbc4315c4028651f6d24e21cc0),
(20, 'SMA Negeri 20 Surabaya', 'Jl. Medokan Semampir Indah No.119, Medokan Semampir, Kec. Sukolilo, Kota SBY, Jawa Timur 60119', 0xfeffffff0101000000d1e20b3082325c40bbf8cfed833a1dc0),
(21, 'SMA Negeri 21 Surabaya', 'Jl. Argopuro No.11-15, Sawahan, Kec. Sawahan, Kota SBY, Jawa Timur 60251', 0xfeffffff01010000009e236ef9b32e5c4081f3fb30360a1dc0),
(22, 'SMA Negeri 22 Surabaya', 'Jl. Balas Klumprik No.22, Balas Klumprik, Kec. Wiyung, Kota SBY, Jawa Timur 60222', 0xfeffffff01010000007367c6a88e2b5c402f0a36eb30531dc0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `foto`) VALUES
('user', 'user', 'user', 'user.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `sma_lokasi`
--
ALTER TABLE `sma_lokasi`
  ADD UNIQUE KEY `id_lokasi` (`id_lokasi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `sma_lokasi`
--
ALTER TABLE `sma_lokasi`
  MODIFY `id_lokasi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
