-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Des 2022 pada 05.34
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karyawan_sasmito`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datalatih`
--

CREATE TABLE `datalatih` (
  `IdPelamar` int(11) NOT NULL,
  `Jk` enum('L','P') NOT NULL,
  `Usia` enum('1','2','3') NOT NULL,
  `Pengalaman` enum('1','2','3') NOT NULL,
  `Pendidikan` enum('Sarjana Teknik Sipil','D3 Teknik Sipil','SMK') NOT NULL,
  `TesWawancara` enum('A','B','C','D','E') NOT NULL,
  `TesKemampuan` enum('A','B','C','D','E') NOT NULL,
  `TesKesehatan` enum('Sehat','Tidak Sehat') NOT NULL,
  `Seleksi` enum('Diterima','Tidak Diterima') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datalatih`
--

INSERT INTO `datalatih` (`IdPelamar`, `Jk`, `Usia`, `Pengalaman`, `Pendidikan`, `TesWawancara`, `TesKemampuan`, `TesKesehatan`, `Seleksi`) VALUES
(1, 'L', '2', '2', 'Sarjana Teknik Sipil', 'B', 'B', 'Sehat', 'Diterima'),
(2, 'P', '3', '2', 'Sarjana Teknik Sipil', 'D', 'A', 'Sehat', 'Diterima'),
(3, 'L', '1', '2', 'SMK', 'A', 'D', 'Tidak Sehat', 'Diterima'),
(4, 'P', '2', '3', 'SMK', 'C', 'A', 'Sehat', 'Diterima'),
(5, 'P', '3', '3', 'Sarjana Teknik Sipil', 'B', 'D', 'Sehat', 'Diterima'),
(6, 'P', '1', '2', 'Sarjana Teknik Sipil', 'C', 'D', 'Sehat', 'Tidak Diterima'),
(7, 'L', '1', '2', 'D3 Teknik Sipil', 'A', 'A', 'Sehat', 'Diterima'),
(8, 'P', '1', '1', 'D3 Teknik Sipil', 'D', 'C', 'Tidak Sehat', 'Tidak Diterima'),
(9, 'P', '1', '3', 'SMK', 'D', 'A', 'Sehat', 'Diterima'),
(10, 'L', '1', '2', 'SMK', 'B', 'D', 'Tidak Sehat', 'Tidak Diterima'),
(11, 'L', '3', '1', 'D3 Teknik Sipil', 'D', 'A', 'Sehat', 'Diterima'),
(12, 'L', '1', '2', 'D3 Teknik Sipil', 'C', 'D', 'Sehat', 'Tidak Diterima'),
(13, 'P', '1', '2', 'Sarjana Teknik Sipil', 'B', 'C', 'Tidak Sehat', 'Diterima'),
(14, 'P', '1', '2', 'Sarjana Teknik Sipil', 'D', 'B', 'Sehat', 'Diterima'),
(15, 'P', '2', '3', 'D3 Teknik Sipil', 'A', 'D', 'Tidak Sehat', 'Diterima'),
(16, 'P', '1', '1', 'D3 Teknik Sipil', 'C', 'D', 'Sehat', 'Tidak Diterima'),
(17, 'L', '2', '1', 'SMK', 'E', 'E', 'Tidak Sehat', 'Tidak Diterima'),
(18, 'P', '1', '3', 'SMK', 'D', 'C', 'Tidak Sehat', 'Tidak Diterima'),
(19, 'L', '2', '3', 'SMK', 'E', 'D', 'Sehat', 'Tidak Diterima'),
(20, 'P', '1', '2', 'Sarjana Teknik Sipil', 'B', 'B', 'Sehat', 'Diterima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datauji`
--

CREATE TABLE `datauji` (
  `IdPelamar` int(11) NOT NULL,
  `Jk` enum('L','P') NOT NULL,
  `Usia` enum('1','2','3') NOT NULL,
  `Pengalaman` enum('1','2','3') NOT NULL,
  `Pendidikan` enum('Sarjana Teknik Sipil','D3 Teknik Sipil','SMK') NOT NULL,
  `TesWawancara` enum('A','B','C','D','E') NOT NULL,
  `TesKemampuan` enum('A','B','C','D','E') NOT NULL,
  `TesKesehatan` enum('Sehat','Tidak Sehat') NOT NULL,
  `Prediksi` enum('Diterima','Tidak Diterima') DEFAULT NULL,
  `Seleksi` enum('Diterima','Tidak Diterima') NOT NULL,
  `Koreksi` enum('Benar','Salah') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datauji`
--

INSERT INTO `datauji` (`IdPelamar`, `Jk`, `Usia`, `Pengalaman`, `Pendidikan`, `TesWawancara`, `TesKemampuan`, `TesKesehatan`, `Prediksi`, `Seleksi`, `Koreksi`) VALUES
(21, 'P', '1', '2', 'SMK', 'D', 'D', 'Tidak Sehat', 'Tidak Diterima', 'Tidak Diterima', 'Benar'),
(22, 'L', '3', '3', 'D3 Teknik Sipil', 'C', 'E', 'Sehat', 'Tidak Diterima', 'Tidak Diterima', 'Benar'),
(23, 'P', '1', '2', 'Sarjana Teknik Sipil', 'E', 'E', 'Sehat', 'Diterima', 'Tidak Diterima', 'Salah'),
(24, 'L', '3', '2', 'Sarjana Teknik Sipil', 'B', 'C', 'Sehat', 'Diterima', 'Diterima', 'Benar'),
(25, 'L', '1', '3', 'D3 Teknik Sipil', 'E', 'C', 'Sehat', 'Tidak Diterima', 'Tidak Diterima', 'Benar'),
(26, 'P', '3', '3', 'D3 Teknik Sipil', 'B', 'E', 'Sehat', 'Diterima', 'Tidak Diterima', 'Salah'),
(27, 'L', '3', '2', 'SMK', 'B', 'C', 'Sehat', 'Diterima', 'Diterima', 'Benar'),
(28, 'L', '1', '3', 'D3 Teknik Sipil', 'B', 'B', 'Tidak Sehat', 'Tidak Diterima', 'Diterima', 'Salah'),
(29, 'P', '2', '1', 'SMK', 'E', 'D', 'Tidak Sehat', 'Tidak Diterima', 'Tidak Diterima', 'Benar'),
(30, 'P', '2', '3', 'D3 Teknik Sipil', 'C', 'B', 'Tidak Sehat', 'Tidak Diterima', 'Diterima', 'Salah');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datalatih`
--
ALTER TABLE `datalatih`
  ADD PRIMARY KEY (`IdPelamar`);

--
-- Indeks untuk tabel `datauji`
--
ALTER TABLE `datauji`
  ADD PRIMARY KEY (`IdPelamar`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datalatih`
--
ALTER TABLE `datalatih`
  MODIFY `IdPelamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `datauji`
--
ALTER TABLE `datauji`
  MODIFY `IdPelamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
