-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2023 at 07:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_fastprint`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_produk` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_produk`, `no`, `nama_produk`, `kategori`, `harga`, `status`) VALUES
(6, 7, 'ALCOHOL GEL POLISH CLEANSER GP-CLN01', 'L QUEENLY', 12500, 'bisa dijual'),
(9, 10, 'ALUMUNIUM FOIL ALL IN ONE BULAT 23mm IM', 'L MTH AKSESORIS (IM)', 1000, 'bisa dijual'),
(11, 12, 'ALUMUNIUM FOIL ALL IN ONE BULAT 30mm IM', 'L MTH AKSESORIS (IM)', 1000, 'bisa dijual'),
(12, 13, 'ALUMUNIUM FOIL ALL IN ONE SHEET 250mm IM', 'L MTH AKSESORIS (IM)', 12500, 'tidak bisa dijual'),
(15, 16, 'ALUMUNIUM FOIL HDPE/PE BULAT 23mm IM', 'L MTH AKSESORIS (IM)', 12500, 'bisa dijual'),
(17, 18, 'ALUMUNIUM FOIL HDPE/PE BULAT 30mm IM', 'L MTH AKSESORIS (IM)', 1000, 'bisa dijual'),
(18, 19, 'ALUMUNIUM FOIL HDPE/PE SHEET 250mm IM', 'L MTH AKSESORIS (IM)', 13000, 'tidak bisa dijual'),
(19, 20, 'ALUMUNIUM FOIL PET SHEET 250mm IM', 'L MTH AKSESORIS (IM)', 1000, 'tidak bisa dijual'),
(22, 23, 'ARM PENDEK MODEL U', 'L MTH AKSESORIS (IM)', 13000, 'bisa dijual'),
(23, 24, 'ARM SUPPORT KECIL', 'L MTH TABUNG (LK)', 13000, 'tidak bisa dijual'),
(24, 25, 'ARM SUPPORT KOTAK PUTIH', 'L MTH AKSESORIS (IM)', 13000, 'tidak bisa dijual'),
(26, 27, 'ARM SUPPORT PENDEK POLOS', 'L MTH TABUNG (LK)', 13000, 'bisa dijual'),
(27, 28, 'ARM SUPPORT S IM', 'L MTH AKSESORIS (IM)', 1000, 'tidak bisa dijual'),
(28, 29, 'ARM SUPPORT T (IMPORT)', 'L MTH AKSESORIS (IM)', 13000, 'bisa dijual'),
(29, 30, 'ARM SUPPORT T - MODEL 1 ( LOKAL )', 'L MTH TABUNG (LK)', 10000, 'bisa dijual'),
(50, 51, 'BLACK LASER TONER FP-T3 (100gr)', 'L MTH AKSESORIS (IM)', 13000, 'tidak bisa dijual'),
(56, 57, 'BODY PRINTER CANON IP2770', 'SP MTH SPAREPART (LK)', 500, 'bisa dijual'),
(58, 59, 'BODY PRINTER T13X', 'SP MTH SPAREPART (LK)', 15000, 'bisa dijual'),
(59, 60, 'BOTOL 1000ML BLUE KHUSUS UNTUK EPSON R1800/R800 - 4180 IM (T054920)', 'CI MTH TINTA LAIN (IM)', 10000, 'bisa dijual'),
(60, 61, 'BOTOL 1000ML CYAN KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4120 IM (T054220)', 'CI MTH TINTA LAIN (IM)', 10000, 'tidak bisa dijual'),
(61, 62, 'BOTOL 1000ML GLOSS OPTIMIZER KHUSUS UNTUK EPSON R1800/R800/R1900/R2000/IX7000/MG6170 - 4100 IM (T054020)', 'CI MTH TINTA LAIN (IM)', 1500, 'bisa dijual'),
(62, 63, 'BOTOL 1000ML L.LIGHT BLACK KHUSUS UNTUK EPSON 2400 - 0599 IM', 'CI MTH TINTA LAIN (IM)', 1500, 'tidak bisa dijual'),
(63, 64, 'BOTOL 1000ML LIGHT BLACK KHUSUS UNTUK EPSON 2400 - 0597 IM', 'CI MTH TINTA LAIN (IM)', 1500, 'tidak bisa dijual'),
(64, 65, 'BOTOL 1000ML MAGENTA KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4140 IM (T054320)', 'CI MTH TINTA LAIN (IM)', 1000, 'bisa dijual'),
(65, 66, 'BOTOL 1000ML MATTE BLACK KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 3503 IM (T054820)', 'CI MTH TINTA LAIN (IM)', 1500, 'tidak bisa dijual'),
(66, 67, 'BOTOL 1000ML ORANGE KHUSUS UNTUK EPSON R1900/R2000 IM - 4190 (T087920)', 'CI MTH TINTA LAIN (IM)', 1500, 'bisa dijual'),
(67, 68, 'BOTOL 1000ML RED KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4170 IM (T054720)', 'CI MTH TINTA LAIN (IM)', 1000, 'tidak bisa dijual'),
(68, 69, 'BOTOL 1000ML YELLOW KHUSUS UNTUK EPSON R1800/R800/R1900/R2000 - 4160 IM (T054420)', 'CI MTH TINTA LAIN (IM)', 1500, 'tidak bisa dijual'),
(70, 71, 'BOTOL KOTAK 100ML LK', 'L MTH AKSESORIS (LK)', 1000, 'bisa dijual'),
(72, 73, 'BOTOL 10ML IM', 'S MTH STEMPEL (IM)', 1000, 'tidak bisa dijual'),
(78, 79, 'Product update', 'L MTH AKSESORIS (IM)', 12000, 'bisa dijual');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
