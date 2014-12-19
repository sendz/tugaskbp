-- phpMyAdmin SQL Dump
-- version 4.3.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2014 at 06:01 PM
-- Server version: 10.0.15-MariaDB-log
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kbprs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_diagnosa`
--

CREATE TABLE IF NOT EXISTS `tbl_diagnosa` (
  `id` int(8) NOT NULL,
  `kode_pasien` varchar(16) COLLATE utf8_bin NOT NULL,
  `tgl_msk` date NOT NULL,
  `tgl_kluar` date NOT NULL,
  `diagnosa` text COLLATE utf8_bin NOT NULL,
  `status` varchar(12) COLLATE utf8_bin NOT NULL,
  `kode_diagnosa` varchar(16) COLLATE utf8_bin NOT NULL,
  `kode_dokter` varchar(16) COLLATE utf8_bin NOT NULL,
  `kode_kamar` varchar(16) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_diagnosa`
--

INSERT INTO `tbl_diagnosa` (`id`, `kode_pasien`, `tgl_msk`, `tgl_kluar`, `diagnosa`, `status`, `kode_diagnosa`, `kode_dokter`, `kode_kamar`) VALUES
(4, '0', '0000-00-00', '0000-00-00', '0', '0', '0', '0', '0'),
(6, '20141220052', '2014-12-19', '0000-00-00', 'Lampu', 'Rawat Inap', 'D20141220053', 'DR3243242', 'RM1003');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokter`
--

CREATE TABLE IF NOT EXISTS `tbl_dokter` (
  `kode_dokter` varchar(16) COLLATE utf8_bin NOT NULL,
  `nama_dokter` varchar(30) COLLATE utf8_bin NOT NULL,
  `alamat` varchar(100) COLLATE utf8_bin NOT NULL,
  `spesialis` varchar(15) COLLATE utf8_bin NOT NULL,
  `id` int(8) NOT NULL,
  `kontak` varchar(12) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_dokter`
--

INSERT INTO `tbl_dokter` (`kode_dokter`, `nama_dokter`, `alamat`, `spesialis`, `id`, `kontak`) VALUES
('DR123456', 'Sudin Silahudin', 'Kampung Bojong', 'Dokter Umum', 1, '0838383838'),
('0', '0', '0', '0', 2, '0'),
('DR3243242', 'Sendy Aditya', 'Jogja', 'Dokter Umum', 3, '084084080');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kamar`
--

CREATE TABLE IF NOT EXISTS `tbl_kamar` (
  `id` int(8) NOT NULL,
  `kode_kamar` varchar(16) COLLATE utf8_bin NOT NULL,
  `nama_kamar` varchar(25) COLLATE utf8_bin NOT NULL,
  `kelas` varchar(8) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_kamar`
--

INSERT INTO `tbl_kamar` (`id`, `kode_kamar`, `nama_kamar`, `kelas`) VALUES
(1, 'RM1001', '0', '0'),
(2, 'RM1002', 'Melati II', '0'),
(4, 'RM1003', 'Melati III', '0'),
(5, 'RM2001', 'Mawar I', 'II'),
(6, '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karyawan`
--

CREATE TABLE IF NOT EXISTS `tbl_karyawan` (
  `kode_karyawan` int(4) NOT NULL,
  `nama_karyawan` varchar(30) COLLATE utf8_bin NOT NULL,
  `alamat_karyawan` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_obat`
--

CREATE TABLE IF NOT EXISTS `tbl_obat` (
  `id_obat` int(4) NOT NULL,
  `kode_pasien` int(4) NOT NULL,
  `obat` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasien`
--

CREATE TABLE IF NOT EXISTS `tbl_pasien` (
  `kode_pasien` varchar(16) COLLATE utf8_bin NOT NULL,
  `id` int(4) NOT NULL,
  `nama` varchar(30) COLLATE utf8_bin NOT NULL,
  `alamat` text COLLATE utf8_bin NOT NULL,
  `tempat_lahir` varchar(25) COLLATE utf8_bin NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kelamin` varchar(2) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`kode_pasien`, `id`, `nama`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `kelamin`) VALUES
('20141220052', 5, 'Emma Watson', '', 'Washington', '2010-10-31', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembayaran`
--

CREATE TABLE IF NOT EXISTS `tbl_pembayaran` (
  `kode_bayar` int(4) NOT NULL,
  `kode_pasien` int(4) NOT NULL,
  `kode_karyawan` int(4) NOT NULL,
  `jenis_pembayaran` varchar(10) COLLATE utf8_bin NOT NULL,
  `biaya_periksa` int(20) NOT NULL,
  `biaya_obat` int(20) NOT NULL,
  `total_bayar` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_diagnosa`
--
ALTER TABLE `tbl_diagnosa`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `kode_diagnosa` (`kode_diagnosa`), ADD KEY `kode_pasien` (`kode_pasien`);

--
-- Indexes for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `kode_dokter` (`kode_dokter`), ADD KEY `kode_dokter_2` (`kode_dokter`);

--
-- Indexes for table `tbl_kamar`
--
ALTER TABLE `tbl_kamar`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `kode_kamar` (`kode_kamar`);

--
-- Indexes for table `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`kode_karyawan`);

--
-- Indexes for table `tbl_obat`
--
ALTER TABLE `tbl_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`id`), ADD KEY `kode_pasien` (`kode_pasien`), ADD KEY `kode_pasien_2` (`kode_pasien`);

--
-- Indexes for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`kode_bayar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_diagnosa`
--
ALTER TABLE `tbl_diagnosa`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_kamar`
--
ALTER TABLE `tbl_kamar`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
