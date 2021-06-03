-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 02:11 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshop`
--
CREATE DATABASE IF NOT EXISTS `onlineshop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `onlineshop`;

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', '123', 1),
(2, 'Ani', 'Ani', '123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(2, 'Album', 'Album izone', 'album', 300000, 19, 'album.jpg'),
(3, 'Lighstick', 'Lightstick izone', 'perlengkapan konser', 300000, 20, 'lighstick.jpg'),
(5, 'Action Figure', 'Action Figure gatau anime apaan', 'idol', 200000, 10, 'figure.jpg'),
(6, 'Kotak Musik ', 'Kotak Musik Beruang Lucu', 'perlengkapan konser', 90000, 18, 'musicbox.jpg'),
(7, 'Bantal Lucu', 'Bantal Lucu unyu ea', 'perlengkapan konser', 90000, 20, 'bantal.jpg'),
(8, 'Jaket', 'Jaket izone', 'perlengkapan konser', 90000, 18, 'jaket.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(1, 'asd', 'Jakarta', '2020-12-30 22:14:36', '2020-12-31 22:14:36'),
(2, 'nia', 'sukabumi', '2020-12-30 22:33:23', '2020-12-31 22:33:23'),
(3, 'asd', 'Jakarta', '2020-12-31 11:08:16', '2021-01-01 11:08:16'),
(4, 'asd', 'asd', '2021-01-01 12:19:03', '2021-01-02 12:19:03'),
(5, '', '', '2021-01-01 12:20:58', '2021-01-02 12:20:58'),
(6, 'Nia', 'cgb', '2021-01-09 16:04:06', '2021-01-10 16:04:06');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 1, 3, 'Lighstick', 1, 300000, ''),
(2, 1, 8, 'Jaket', 1, 90000, ''),
(3, 1, 7, 'Bantal Lucu', 1, 90000, ''),
(4, 1, 6, 'Kotak Musik ', 1, 90000, ''),
(5, 1, 2, 'Album', 1, 300000, ''),
(6, 1, 5, 'Action Figure', 1, 200000, ''),
(7, 2, 2, 'Album', 1, 300000, ''),
(8, 2, 3, 'Lighstick', 1, 300000, ''),
(9, 2, 5, 'Action Figure', 1, 200000, ''),
(10, 2, 6, 'Kotak Musik ', 1, 90000, ''),
(11, 2, 7, 'Bantal Lucu', 1, 90000, ''),
(12, 2, 8, 'Jaket', 1, 90000, ''),
(13, 3, 2, 'Album', 1, 300000, ''),
(14, 3, 3, 'Lighstick', 1, 300000, ''),
(15, 3, 8, 'Jaket', 1, 90000, ''),
(16, 3, 7, 'Bantal Lucu', 1, 90000, ''),
(17, 4, 2, 'Album', 1, 300000, ''),
(18, 5, 8, 'Jaket', 2, 90000, ''),
(19, 6, 6, 'Kotak Musik ', 2, 90000, '');

--
-- Triggers `pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `pesanan` FOR EACH ROW BEGIN
	UPDATE barang SET stok = stok-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
   END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
