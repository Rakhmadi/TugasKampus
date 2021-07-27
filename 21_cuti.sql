-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2021 pada 00.17
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `21_cuti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti`
--

CREATE TABLE `cuti` (
  `kode_cuti` int(11) NOT NULL,
  `nik_kr` varchar(10) DEFAULT NULL,
  `tanggal_cuti` date DEFAULT NULL,
  `keperluan_cuti` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cuti`
--

INSERT INTO `cuti` (`kode_cuti`, `nik_kr`, `tanggal_cuti`, `keperluan_cuti`) VALUES
(3, '6222010001', '2021-07-20', 'Input Data Produksi'),
(4, '6222010002', '2021-07-21', 'Pengawas Proses Produksi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `nik_kr` varchar(10) NOT NULL,
  `nama_kr` varchar(50) DEFAULT NULL,
  `jenis_kelamin_kr` varchar(15) DEFAULT NULL,
  `tempat_lahir_kr` varchar(35) DEFAULT NULL,
  `tanggal_lahir_kr` date DEFAULT NULL,
  `alamat_kota_kr` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`nik_kr`, `nama_kr`, `jenis_kelamin_kr`, `tempat_lahir_kr`, `tanggal_lahir_kr`, `alamat_kota_kr`) VALUES
('6222010001', 'Ryan Zain', 'Laki - Laki', 'Palembang', '1985-05-22', 'Jakarta Utara'),
('6222010002', 'Rahma Syntia', 'Perempuan', 'Bandung', '1990-08-11', 'Jakarta Utara'),
('6222010003', 'Lucky Hidayat', 'Laki - Laki', 'jakarta', '1992-11-05', 'Bekasi'),
('6222010004', 'Frida Ariska', 'Perempuan', 'Surabaya', '1992-09-21', 'Bekasi'),
('6222010005', 'Toni Saputro', 'Laki - Laki', 'Jakarta', '1993-12-25', 'Jakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `kode_usr` int(11) NOT NULL,
  `nik_kr` varchar(10) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`kode_usr`, `nik_kr`, `username`, `password`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, '6222010001', 'user01', 'b75705d7e35e7014521a46b532236ec3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_log`
--

CREATE TABLE `users_log` (
  `kode_log` int(11) NOT NULL,
  `kode_usr` int(11) DEFAULT NULL,
  `session_log` varchar(50) DEFAULT NULL,
  `date_log` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users_log`
--

INSERT INTO `users_log` (`kode_log`, `kode_usr`, `session_log`, `date_log`) VALUES
(25, 1, '1g51rc16ej49hbm3gpkmvvvqod', '2021-07-15T00:17:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`kode_cuti`),
  ADD KEY `nik_kr` (`nik_kr`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nik_kr`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`kode_usr`),
  ADD KEY `nik_kr` (`nik_kr`);

--
-- Indeks untuk tabel `users_log`
--
ALTER TABLE `users_log`
  ADD PRIMARY KEY (`kode_log`),
  ADD KEY `kode_usr` (`kode_usr`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cuti`
--
ALTER TABLE `cuti`
  MODIFY `kode_cuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `kode_usr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users_log`
--
ALTER TABLE `users_log`
  MODIFY `kode_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
