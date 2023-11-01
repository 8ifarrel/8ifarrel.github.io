-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Nov 2023 pada 10.16
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
-- Struktur dari tabel `tb_akun_user`
--

CREATE TABLE `tb_akun_user` (
  `email` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_akun_user`
--

INSERT INTO `tb_akun_user` (`email`, `nama_lengkap`, `password`) VALUES
('8ifarrel@gmail.com', 'Muhammad Farrel Sirah', '$2y$10$uS9z0krKh4SfYYR9SIGQ8eazCJ.MbtpiJPo/vGcnLON'),
('8ifarrelgaming@gmail.com', 'Parel', '$2y$10$S/0AJQDt5Af0geYXU8zf6OZQ3zpO8lfd0TbKifUr3W5'),
('farrelsirah@gmail.com', 'Muhammad Farrel Sirah', '$2y$10$1FvRH47o71X9LW7.V5V1kuxc7V/kKV/43tVGSxqg4xo');

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
(8, 'aaa', 'a', '2023-10-12', 'a', 'a', 'farrelsirah@gmail.com'),
(9, 'bebek', 'bebek', '2023-10-07', 'bebek', 'bebek', 'farrelsirah@gmail.com'),
(10, 'dapin cabul', 'waktu itu dapin blablabla dan blablabal', '2023-10-04', 'Suryanata', 'YTTA Empire', 'farrelsirah@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_akun_user`
--
ALTER TABLE `tb_akun_user`
  ADD PRIMARY KEY (`email`);

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
  MODIFY `id_laporan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
