-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jan 2022 pada 15.35
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_klasifikasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_latih`
--

CREATE TABLE `data_latih` (
  `id_latih` int(3) NOT NULL,
  `mkd_latih` varchar(25) NOT NULL,
  `ips_latih` varchar(25) NOT NULL,
  `mkp_latih` varchar(25) NOT NULL,
  `sas_latih` varchar(25) NOT NULL,
  `wp_aktual` enum('1S','2S','3S') NOT NULL,
  `wp_prediksi` enum('1S','2S','3S') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_latih`
--

INSERT INTO `data_latih` (`id_latih`, `mkd_latih`, `ips_latih`, `mkp_latih`, `sas_latih`, `wp_aktual`, `wp_prediksi`) VALUES
(69, 'SANGAT BAIK', 'SANGAT BAIK', 'KURANG', 'SANGAT BAIK', '1S', '2S'),
(70, 'BAIK', 'SANGAT BAIK', 'SANGAT BAIK', 'SANGAT BAIK', '1S', '1S'),
(71, 'KURANG', 'SANGAT BAIK', 'BAIK', 'BAIK', '1S', '1S'),
(72, 'BAIK', 'SANGAT BAIK', 'SANGAT BAIK', 'SANGAT BAIK', '1S', '1S'),
(73, 'SANGAT BAIK', 'SANGAT BAIK', 'BAIK', 'SANGAT BAIK', '1S', '2S'),
(74, 'SANGAT BAIK', 'SANGAT BAIK', 'CUKUP', 'SANGAT BAIK', '1S', '2S'),
(75, 'BAIK', 'KURANG', 'CUKUP', 'SANGAT KURANG', '1S', '1S'),
(76, 'SANGAT BAIK', 'BAIK', 'KURANG', 'BAIK', '1S', '2S'),
(77, 'SANGAT BAIK', 'BAIK', 'CUKUP', 'BAIK', '1S', '2S'),
(78, 'SANGAT BAIK', 'SANGAT BAIK', 'SANGAT BAIK', 'SANGAT BAIK', '1S', '2S'),
(79, 'SANGAT BAIK', 'BAIK', 'SANGAT BAIK', 'SANGAT BAIK', '1S', '2S'),
(80, 'BAIK', 'SANGAT KURANG', 'SANGAT KURANG', 'SANGAT KURANG', '1S', '2S'),
(81, 'KURANG', 'SANGAT KURANG', 'CUKUP', 'SANGAT KURANG', '1S', '1S'),
(82, 'SANGAT BAIK', 'BAIK', 'BAIK', 'SANGAT BAIK', '1S', '2S'),
(83, 'SANGAT BAIK', 'SANGAT BAIK', 'CUKUP', 'BAIK', '1S', '2S'),
(87, 'BAIK', 'CUKUP', 'SANGAT BAIK', 'SANGAT BAIK', '1S', '3S'),
(88, 'SANGAT BAIK', 'KURANG', 'SANGAT BAIK', 'KURANG', '1S', '3S'),
(89, 'SANGAT BAIK', 'BAIK', 'BAIK', 'BAIK', '2S', '2S'),
(90, 'SANGAT BAIK', 'BAIK', 'SANGAT BAIK', 'BAIK', '2S', '2S'),
(91, 'SANGAT BAIK', 'BAIK', 'CUKUP', 'BAIK', '2S', '2S'),
(92, 'SANGAT BAIK', 'BAIK', 'CUKUP', 'BAIK', '2S', '2S'),
(93, 'SANGAT BAIK', 'BAIK', 'CUKUP', 'BAIK', '2S', '2S'),
(94, 'SANGAT BAIK', 'SANGAT BAIK', 'SANGAT BAIK', 'BAIK', '2S', '2S'),
(95, 'SANGAT BAIK', 'SANGAT BAIK', 'CUKUP', 'SANGAT BAIK', '2S', '2S'),
(96, 'SANGAT BAIK', 'BAIK', 'BAIK', 'SANGAT BAIK', '2S', '2S'),
(97, 'SANGAT BAIK', 'SANGAT BAIK', 'SANGAT BAIK', 'BAIK', '2S', '2S'),
(98, 'SANGAT BAIK', 'BAIK', 'SANGAT BAIK', 'BAIK', '2S', '2S'),
(99, 'SANGAT BAIK', 'BAIK', 'BAIK', 'BAIK', '2S', '2S'),
(100, 'SANGAT BAIK', 'SANGAT BAIK', 'SANGAT BAIK', 'SANGAT BAIK', '2S', '2S'),
(101, 'SANGAT BAIK', 'SANGAT BAIK', 'SANGAT BAIK', 'SANGAT BAIK', '2S', '2S'),
(102, 'SANGAT BAIK', 'SANGAT BAIK', 'KURANG', 'SANGAT BAIK', '2S', '2S'),
(103, 'BAIK', 'BAIK', 'BAIK', 'BAIK', '2S', '3S'),
(104, 'SANGAT BAIK', 'SANGAT BAIK', 'BAIK', 'SANGAT BAIK', '2S', '2S'),
(105, 'SANGAT BAIK', 'SANGAT BAIK', 'SANGAT BAIK', 'SANGAT BAIK', '2S', '2S'),
(106, 'SANGAT BAIK', 'SANGAT BAIK', 'SANGAT BAIK', 'SANGAT BAIK', '2S', '2S'),
(107, 'SANGAT BAIK', 'SANGAT BAIK', 'SANGAT BAIK', 'BAIK', '2S', '2S'),
(108, 'SANGAT BAIK', 'SANGAT BAIK', 'SANGAT BAIK', 'SANGAT BAIK', '2S', '2S'),
(109, 'SANGAT BAIK', 'SANGAT BAIK', 'CUKUP', 'SANGAT BAIK', '2S', '2S'),
(110, 'BAIK', 'BAIK', 'KURANG', 'KURANG', '3S', '3S'),
(111, 'BAIK', 'BAIK', 'SANGAT BAIK', 'KURANG', '3S', '3S'),
(112, 'SANGAT BAIK', 'BAIK', 'BAIK', 'BAIK', '3S', '2S'),
(113, 'BAIK', 'CUKUP', 'BAIK', 'KURANG', '3S', '3S'),
(114, 'SANGAT BAIK', 'CUKUP', 'SANGAT KURANG', 'KURANG', '3S', '3S'),
(115, 'SANGAT BAIK', 'SANGAT KURANG', 'SANGAT KURANG', 'SANGAT KURANG', '3S', '3S'),
(116, 'KURANG', 'SANGAT KURANG', 'BAIK', 'SANGAT KURANG', '3S', '3S'),
(117, 'CUKUP', 'BAIK', 'BAIK', 'BAIK', '3S', '3S'),
(118, 'SANGAT BAIK', 'KURANG', 'SANGAT KURANG', 'SANGAT KURANG', '3S', '3S'),
(119, 'BAIK', 'CUKUP', 'BAIK', 'SANGAT KURANG', '3S', '3S'),
(120, 'BAIK', 'BAIK', 'BAIK', 'SANGAT KURANG', '3S', '3S'),
(121, 'SANGAT KURANG', 'BAIK', 'KURANG', 'BAIK', '3S', '3S'),
(122, 'SANGAT BAIK', 'CUKUP', 'KURANG', 'BAIK', '3S', '3S'),
(123, 'BAIK', 'CUKUP', 'SANGAT KURANG', 'BAIK', '3S', '3S'),
(124, 'SANGAT BAIK', 'SANGAT KURANG', 'KURANG', 'KURANG', '3S', '3S'),
(125, 'SANGAT BAIK', 'BAIK', 'SANGAT BAIK', 'KURANG', '3S', '3S'),
(126, 'SANGAT BAIK', 'CUKUP', 'SANGAT BAIK', 'KURANG', '3S', '3S'),
(127, 'SANGAT BAIK', 'BAIK', 'BAIK', 'SANGAT BAIK', '3S', '2S'),
(128, 'SANGAT BAIK', 'BAIK', 'BAIK', 'BAIK', '3S', '2S'),
(133, 'SANGAT BAIK', 'BAIK', 'SANGAT KURANG', 'SANGAT BAIK', '1S', '2S'),
(134, 'SANGAT BAIK', 'KURANG', 'CUKUP', 'SANGAT KURANG', '1S', '1S'),
(135, 'BAIK', 'SANGAT KURANG', 'SANGAT KURANG', 'SANGAT KURANG', '1S', '1S'),
(136, 'BAIK', 'SANGAT KURANG', 'CUKUP', 'SANGAT KURANG', '1S', '1S'),
(137, 'KURANG', 'KURANG', 'KURANG', 'SANGAT KURANG', '3S', '1S'),
(138, 'CUKUP', 'KURANG', 'BAIK', 'SANGAT KURANG', '3S', '3S');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_uji`
--

CREATE TABLE `data_uji` (
  `id_uji` int(3) NOT NULL,
  `mkd_uji` varchar(25) NOT NULL,
  `ips_uji` varchar(25) NOT NULL,
  `mkp_uji` varchar(25) NOT NULL,
  `sas_uji` varchar(25) NOT NULL,
  `wp_aktual` enum('1S','2S','3S') NOT NULL,
  `wp_prediksi` enum('1S','2S','3S') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_uji`
--

INSERT INTO `data_uji` (`id_uji`, `mkd_uji`, `ips_uji`, `mkp_uji`, `sas_uji`, `wp_aktual`, `wp_prediksi`) VALUES
(6, 'SANGAT BAIK', 'BAIK', 'KURANG', 'BAIK', '1S', '2S'),
(7, 'BAIK', 'BAIK', 'BAIK', 'BAIK', '1S', '2S'),
(8, 'SANGAT BAIK', 'BAIK', 'KURANG', 'SANGAT KURANG', '1S', '2S'),
(9, 'SANGAT BAIK', 'KURANG', 'SANGAT KURANG', 'SANGAT KURANG', '1S', '3S'),
(10, 'SANGAT BAIK', 'SANGAT BAIK', 'SANGAT BAIK', 'BAIK', '2S', '2S'),
(12, 'SANGAT BAIK', 'SANGAT BAIK', 'SANGAT BAIK', 'SANGAT BAIK', '2S', '2S'),
(13, 'SANGAT BAIK', 'SANGAT BAIK', 'SANGAT BAIK', 'SANGAT BAIK', '2S', '2S'),
(14, 'SANGAT BAIK', 'BAIK', 'CUKUP', 'SANGAT BAIK', '2S', '2S'),
(15, 'SANGAT BAIK', 'SANGAT BAIK', 'SANGAT BAIK', 'SANGAT BAIK', '2S', '2S'),
(16, 'SANGAT BAIK', 'SANGAT BAIK', 'SANGAT BAIK', 'SANGAT BAIK', '2S', '2S'),
(17, 'SANGAT BAIK', 'SANGAT BAIK', 'SANGAT BAIK', 'SANGAT BAIK', '2S', '2S'),
(18, 'SANGAT BAIK', 'SANGAT BAIK', 'BAIK', 'BAIK', '2S', '2S'),
(19, 'SANGAT BAIK', 'BAIK', 'BAIK', 'BAIK', '2S', '2S'),
(20, 'SANGAT BAIK', 'SANGAT BAIK', 'BAIK', 'SANGAT BAIK', '2S', '2S'),
(21, 'SANGAT BAIK', 'BAIK', 'SANGAT BAIK', 'BAIK', '2S', '2S'),
(22, 'SANGAT BAIK', 'SANGAT BAIK', 'BAIK', 'BAIK', '2S', '2S'),
(23, 'SANGAT BAIK', 'SANGAT BAIK', 'BAIK', 'BAIK', '2S', '2S'),
(24, 'SANGAT BAIK', 'SANGAT BAIK', 'BAIK', 'BAIK', '2S', '2S'),
(25, 'SANGAT BAIK', 'BAIK', 'BAIK', 'BAIK', '2S', '2S'),
(26, 'SANGAT KURANG', 'SANGAT KURANG', 'BAIK', 'SANGAT KURANG', '2S', '2S'),
(27, 'SANGAT KURANG', 'CUKUP', 'SANGAT KURANG', 'BAIK', '3S', '3S'),
(28, 'SANGAT BAIK', 'SANGAT KURANG', 'SANGAT KURANG', 'SANGAT KURANG', '3S', '3S'),
(29, 'SANGAT BAIK', 'BAIK', 'SANGAT BAIK', 'KURANG', '3S', '3S'),
(30, 'SANGAT BAIK', 'CUKUP', 'SANGAT BAIK', 'BAIK', '3S', '3S'),
(31, 'BAIK', 'BAIK', 'BAIK', 'BAIK', '3S', '2S'),
(32, 'KURANG', 'BAIK', 'BAIK', 'SANGAT BAIK', '3S', '3S'),
(33, 'BAIK', 'CUKUP', 'SANGAT KURANG', 'BAIK', '3S', '3S'),
(34, 'CUKUP', 'CUKUP', 'BAIK', 'SANGAT KURANG', '3S', '3S'),
(35, 'BAIK', 'CUKUP', 'KURANG', 'KURANG', '3S', '3S'),
(36, 'SANGAT BAIK', 'CUKUP', 'BAIK', 'KURANG', '3S', '3S'),
(37, 'SANGAT BAIK', 'CUKUP', 'KURANG', 'BAIK', '3S', '3S'),
(38, 'SANGAT BAIK', 'CUKUP', 'KURANG', 'BAIK', '3S', '3S'),
(39, 'SANGAT BAIK', 'BAIK', 'SANGAT BAIK', 'KURANG', '3S', '3S'),
(42, 'BAIK', 'KURANG', 'SANGAT BAIK', 'SANGAT KURANG', '1S', '3S'),
(46, 'SANGAT BAIK', 'BAIK', 'KURANG', 'SANGAT KURANG', '1S', '3S'),
(50, 'SANGAT BAIK', 'SANGAT BAIK', 'BAIK', 'SANGAT BAIK', '1S', '2S'),
(51, 'SANGAT BAIK', 'SANGAT BAIK', 'KURANG', 'SANGAT KURANG', '1S', '2S'),
(52, 'BAIK', 'KURANG', 'KURANG', 'SANGAT KURANG', '1S', '1S'),
(53, 'SANGAT BAIK', 'BAIK', 'SANGAT KURANG', 'KURANG', '3S', '3S'),
(54, 'SANGAT BAIK', 'BAIK', 'BAIK', 'KURANG', '3S', '3S');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengujian`
--

CREATE TABLE `pengujian` (
  `id` int(3) NOT NULL,
  `mkd` varchar(25) NOT NULL,
  `ips` varchar(25) NOT NULL,
  `sas` varchar(25) NOT NULL,
  `mkp` varchar(25) NOT NULL,
  `wp` enum('1S','2S','3S') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengujian`
--

INSERT INTO `pengujian` (`id`, `mkd`, `ips`, `sas`, `mkp`, `wp`) VALUES
(1, 'SANGAT BAIK', 'SANGAT BAIK', 'SANGAT BAIK', 'SANGAT BAIK', '2S'),
(2, 'SANGAT BAIK', 'SANGAT KURANG', 'SANGAT BAIK', 'KURANG', '2S'),
(3, 'CUKUP', 'CUKUP', 'SANGAT BAIK', 'SANGAT BAIK', '3S'),
(4, 'CUKUP', 'SANGAT BAIK', 'KURANG', 'SANGAT BAIK', '1S'),
(5, 'SANGAT BAIK', 'KURANG', 'SANGAT BAIK', 'BAIK', '3S'),
(6, 'SANGAT KURANG', 'KURANG', 'BAIK', 'SANGAT BAIK', '3S');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(2) NOT NULL,
  `nama_user` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama_user`, `username`, `password`) VALUES
(1, 'Kepala Program Studi', 'kaprodi', 'kaprodi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_latih`
--
ALTER TABLE `data_latih`
  ADD PRIMARY KEY (`id_latih`);

--
-- Indeks untuk tabel `data_uji`
--
ALTER TABLE `data_uji`
  ADD PRIMARY KEY (`id_uji`);

--
-- Indeks untuk tabel `pengujian`
--
ALTER TABLE `pengujian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_latih`
--
ALTER TABLE `data_latih`
  MODIFY `id_latih` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT untuk tabel `data_uji`
--
ALTER TABLE `data_uji`
  MODIFY `id_uji` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `pengujian`
--
ALTER TABLE `pengujian`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
