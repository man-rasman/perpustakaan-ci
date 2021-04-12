-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2021 at 03:11 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_buku`
--

CREATE TABLE `tabel_buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `jenis_buku` enum('Fiksi','Non fiksi') NOT NULL,
  `penulis_buku` varchar(50) NOT NULL,
  `penerbit_buku` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `nama_user` varchar(40) NOT NULL,
  `alamat_user` text NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `level` enum('pengurus','pengguna') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `username`, `password`, `nama_user`, `alamat_user`, `no_hp`, `level`) VALUES
(1, 'admin', '123', 'admin', 'langensari', '085712126196', 'pengurus'),
(3, 'pengguna', '123', 'pengguna', 'langensari', '082121588972', 'pengguna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_buku`
--
ALTER TABLE `tabel_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_buku`
--
ALTER TABLE `tabel_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
