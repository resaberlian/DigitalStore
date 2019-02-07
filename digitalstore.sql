-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2019 at 12:41 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_digitalstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `kode_detail_transaksi` int(11) NOT NULL,
  `kode_transaksi` int(11) NOT NULL,
  `kode_kamera` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`kode_detail_transaksi`, `kode_transaksi`, `kode_kamera`, `jumlah`) VALUES
(1, 41, 29, 1),
(2, 41, 33, 2);

-- --------------------------------------------------------

--
-- Table structure for table `kamera`
--

CREATE TABLE `kamera` (
  `kode_kamera` int(11) NOT NULL,
  `nama_kamera` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `kode_kategori` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamera`
--

INSERT INTO `kamera` (`kode_kamera`, `nama_kamera`, `deskripsi`, `kode_kategori`, `harga`, `foto`, `stok`) VALUES
(29, 'GoPro HERO 5 Black', 'Resolusi Foto 12MP Resolusi Video hingga 4K/30fps, 1440P/80fps, 1080P/120fps Waterproof 10m tanpa Ho', 7, 4500000, '7.jpg', 9),
(33, 'Nikon D5500 Kit AF-S 18-55mm VR II', 'ISO 100 – 25600 3? Fixed Type Screen 5.0 fps continuous shooting Full HD 1080p Video Recording at 60', 8, 7500000, 'camera1.png', 3),
(34, 'Nikon Coolpix AW130 Orange', 'ISO 80 – 1600 26–130 mm F3.2 – F6.5 Zoom Lens Digital only Image Stabilization 2.7? Fixed Type Scree', 11, 4000000, '26293_AW100_front.png', 5);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kode_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kode_kategori`, `nama_kategori`) VALUES
(6, 'Mirrorless'),
(7, 'Action Camera'),
(8, 'DSLR'),
(9, 'Drone & Aksesoris'),
(11, 'Kamera Pocket'),
(12, 'Kamera Underwater');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `kode_transaksi` int(11) NOT NULL,
  `kode_user` int(11) DEFAULT NULL,
  `nama_pembeli` varchar(50) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `tanggal_beli` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`kode_transaksi`, `kode_user`, `nama_pembeli`, `total`, `tanggal_beli`) VALUES
(16, 1, 'adiba', 7000, '2018-05-09'),
(40, 4, 'reza berlian ananda', 7000, '2019-02-05'),
(41, 5, 'Risa', 19500000, '2019-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `kode_user` int(11) NOT NULL,
  `nama_user` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`kode_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'Reza Berlian', 'resaberlian', '123', 'admin'),
(4, 'Yoga', 'yoga', 'kasir1', 'kasir'),
(5, 'doni', 'doniaja', 'kasir2', 'kasir'),
(6, 'Raisaa', 'hamish', 'kasir3', 'kasir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`kode_detail_transaksi`),
  ADD KEY `kode_transaksi` (`kode_transaksi`),
  ADD KEY `kode_buku` (`kode_kamera`);

--
-- Indexes for table `kamera`
--
ALTER TABLE `kamera`
  ADD PRIMARY KEY (`kode_kamera`),
  ADD KEY `kode_kategori` (`kode_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kode_kategori`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kode_transaksi`),
  ADD KEY `kode_user` (`kode_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kode_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `kode_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kamera`
--
ALTER TABLE `kamera`
  MODIFY `kode_kamera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kode_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `kode_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `kode_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`kode_transaksi`) REFERENCES `transaksi` (`kode_transaksi`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`kode_kamera`) REFERENCES `kamera` (`kode_kamera`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `kamera`
--
ALTER TABLE `kamera`
  ADD CONSTRAINT `kamera_ibfk_1` FOREIGN KEY (`kode_kategori`) REFERENCES `kategori` (`kode_kategori`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`kode_user`) REFERENCES `user` (`kode_user`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
