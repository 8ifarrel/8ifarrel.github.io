-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2023 pada 17.25
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penorak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_laporan`
--

CREATE TABLE `tb_laporan` (
  `id_laporan` int(5) NOT NULL,
  `judul_laporan` varchar(50) NOT NULL,
  `deskripsi_laporan` text NOT NULL,
  `tanggal_kejadian` date NOT NULL,
  `lokasi_kejadian` varchar(50) NOT NULL,
  `instansi_tujuan` varchar(30) NOT NULL,
  `alamat_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_laporan`
--

INSERT INTO `tb_laporan` (`id_laporan`, `judul_laporan`, `deskripsi_laporan`, `tanggal_kejadian`, `lokasi_kejadian`, `instansi_tujuan`, `alamat_email`) VALUES
(1, 'a', 'a', '2023-10-05', 'a', 'a', 'farrelsirah@gmail.com'),
(2, 'a', 'aaa', '2023-10-12', 'a', 'a', 'farrelsirah@gmail.com'),
(3, 'bbb', 'bbb', '2023-10-06', 'bbb', 'bbb', 'farrelsirah@gmail.com'),
(4, 'ccc', 'cc', '2023-10-13', 'cc', 'ccc', 'farrelsirah@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_laporan`
--
ALTER TABLE `tb_laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_laporan`
--
ALTER TABLE `tb_laporan`
  MODIFY `id_laporan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
