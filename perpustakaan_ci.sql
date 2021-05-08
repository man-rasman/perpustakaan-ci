-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2021 at 06:12 AM
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
  `penerbit_buku` varchar(60) NOT NULL,
  `isi_buku` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_buku`
--

INSERT INTO `tabel_buku` (`id_buku`, `nama_buku`, `jenis_buku`, `penulis_buku`, `penerbit_buku`, `isi_buku`, `keterangan`) VALUES
(1, 'AOT', 'Non fiksi', 'Hajime Isayama', 'Studio Mapa', 'menceritakan tentang benteng yang dihancurkan oleh titan', 'anime'),
(2, 'Bung Karno Penyambung Lidah Rakyat Indonesia', 'Fiksi', 'Syamsu Hadi', 'Yayasan Bung Karno', 'Kata Sukarno pada Bab pertama buku ini : “Buku ini tidak ditulis untuk mendapatkan simpati atau meminta supaya setiap orang suka kepadaku. Harapanku hanyalah, agar dapat menambah pengertian yang lebih baik tentang Sukarno dan dengan itu menambah pengertian yang lebih baik terhadap Indonesia tercinta.”\r\n\r\nBuku yang berjudul “Bung Karno Penyambung Lidah Rakyat Indonesia” adalah otobiografi dari presiden pertama Republik Indonesia, Sukarno, yang terbit pertama kali pada tahun 1966. Buku ini adalah terjemahan dari buku yang berjudul “Sukarno: An Autobiography as told to Cindy Adams”. Pertama kali diterbtikan oleh The Bobbs-Merrill Company, Inc, New York, pada tahun 1965. Dan telah dicetak berulang kali.\r\n\r\nPenulis buku ini adalah Cindy Adams, seorang wartawan perempuan yang berasal dari Amerika. Ia kebetulan berada di Jakarta bersama suaminya, pelawak Joey Adams, yang memimpin Misi Kesenian Presiden Kennedy ke Asia Tenggara tahun 1961. Sukarno memiliki kesan tersendiri pada Cindy Adams, “dia adalah penulis tercantik yang pernah kutemui!” Karena Cindy Adams pula, Sukarno berkenan menuliskan riwayat hidupnya – setelah sekian lama sulit sekali untuk dibujuk.\r\n\r\nYa, sulit membujuk Sukarno untuk mau menulis buku biografinya. Inilah yang dirasakan oleh Duta Besar Amerika di Indonesia, Howard Jones. Pada suatu hari, saat Howard dan istrinya sedang makan bersama Sukarno dan Hartini (Istri Sukarno) di bungalow Istana Bogor, Howard mengatakan, “Tuan Presiden, aku kira sudah waktunya Anda melihat kembali perjalanan sejarah. Menurutku sudah waktunya Anda menuliskan sejarah kehidupan Anda.” Dan seperti biasa, pertanyan serupa itu sering ditanyakan kepada Sukarno, ia menjawab, “Tidak. Insya Allah, aku masih hidup 10 atau 20 tahun lagi.”', '415 Halaman');

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
(3, 'pengguna', '1234', 'pengguna', 'langensari', '082121588972', 'pengguna'),
(6, 'user', 'pass', 'pelanggan', 'langensari', '090909090', 'pengurus'),
(7, 'sugeng', '123', 'Sugeng', 'langensari', '085712126196', 'pengurus'),
(9, 'upin', 'upin', 'upin', 'sukahurip', '123456789', 'pengguna');

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
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
