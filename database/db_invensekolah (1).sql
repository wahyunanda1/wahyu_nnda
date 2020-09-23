-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Sep 2020 pada 04.05
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_invensekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  `akun_aktif` int(1) NOT NULL,
  `waktu_dibuat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `nama`, `email`, `password`, `level`, `akun_aktif`, `waktu_dibuat`) VALUES
(3, 'Wahyu Nanda Putra', 'xlwahyu20@gmail.com', '$2y$10$EmtxWtg1yKEpdZ6WrCUF0ux4neE.QsdMYJJy6VhsXOKPe5VSZIhMO', 1, 1, 1600520571);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_token`
--

CREATE TABLE `login_token` (
  `id` int(11) NOT NULL,
  `email` varchar(123) NOT NULL,
  `token` varchar(123) NOT NULL,
  `waktu_dibuat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login_token`
--

INSERT INTO `login_token` (`id`, `email`, `token`, `waktu_dibuat`) VALUES
(4, 'xlwahyu20@gmail.com', 'rQAeTI4qlUG7QXW1', 1600520571);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_elektronik`
--

CREATE TABLE `tb_elektronik` (
  `id_barang` int(15) NOT NULL,
  `waktu_diinput` varchar(50) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `kondisi_barang` varchar(250) NOT NULL,
  `jumlah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_elektronik`
--

INSERT INTO `tb_elektronik` (`id_barang`, `waktu_diinput`, `nama_barang`, `kondisi_barang`, `jumlah`) VALUES
(18, '20-09-2020, 07:24:47', 'Komputer', 'Layak', '3'),
(20, '21-09-2020, 22:17:28', 'lemari', 'Layak', '31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nonelektronik`
--

CREATE TABLE `tb_nonelektronik` (
  `id_barang` int(15) NOT NULL,
  `waktu_diinput` varchar(50) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `kondisi_barang` varchar(250) NOT NULL,
  `jumlah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_nonelektronik`
--

INSERT INTO `tb_nonelektronik` (`id_barang`, `waktu_diinput`, `nama_barang`, `kondisi_barang`, `jumlah`) VALUES
(5, '20-09-2020, 07:25:42', 'Kursi', 'Tidak Layak', '4'),
(6, '21-09-2020, 14:45:24', 'Meja', 'Tidak Layak', '4');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `login_token`
--
ALTER TABLE `login_token`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_elektronik`
--
ALTER TABLE `tb_elektronik`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tb_nonelektronik`
--
ALTER TABLE `tb_nonelektronik`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `login_token`
--
ALTER TABLE `login_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_elektronik`
--
ALTER TABLE `tb_elektronik`
  MODIFY `id_barang` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_nonelektronik`
--
ALTER TABLE `tb_nonelektronik`
  MODIFY `id_barang` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
