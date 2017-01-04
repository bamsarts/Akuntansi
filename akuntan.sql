-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2017 at 01:27 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akuntan`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurnalpembelian`
--

CREATE TABLE `jurnalpembelian` (
  `id` int(11) NOT NULL,
  `tgl_pembelian` varchar(20) NOT NULL,
  `no_akun` int(4) NOT NULL,
  `nama_akun` varchar(40) NOT NULL,
  `saldo` int(7) NOT NULL,
  `jenis` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnalpembelian`
--

INSERT INTO `jurnalpembelian` (`id`, `tgl_pembelian`, `no_akun`, `nama_akun`, `saldo`, `jenis`) VALUES
(7, '31 January 2017', 7, 'edi', 300000, 'Debit'),
(13, '14 January 2017', 9, 'dika', 43252, 'Debit'),
(26, '12 January 2017', 2141, 'asdfa', 224, 'Debit'),
(27, '17 January 2017', 10, 'diding', 120000, 'Kredit'),
(28, '19 January 2017', 11, 'eko', 120029, 'Debit'),
(29, '27 January 2017', 12, 'sigit', 221000, 'Kredit'),
(30, '15 February 2017', 13, 'ryan', 324222, 'Kredit'),
(31, '17 January 2017', 1, 'alfat', 122000, 'Kredit');

-- --------------------------------------------------------

--
-- Table structure for table `jurnalumum`
--

CREATE TABLE `jurnalumum` (
  `id` int(11) NOT NULL,
  `tgl_pembelian` varchar(20) NOT NULL,
  `jurnal` varchar(20) NOT NULL,
  `akun_debit` varchar(20) NOT NULL,
  `total_debit` int(10) NOT NULL,
  `akun_kredit` varchar(20) NOT NULL,
  `total_kredit` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnalumum`
--

INSERT INTO `jurnalumum` (`id`, `tgl_pembelian`, `jurnal`, `akun_debit`, `total_debit`, `akun_kredit`, `total_kredit`) VALUES
(4, '19 January 2017', 'Pembelian', 'eko', 120029, 'KAS', 120029),
(5, '27 January 2017', 'Pembelian', 'KAS', 221000, 'sigit', 221000),
(6, '15 February 2017', 'Pembelian', 'KAS', 324222, 'ryan', 324222),
(7, '18 January 2017', 'Penjualan', 'dila', 420222, 'KAS', 420222),
(8, '10 January 2017', 'Penggajian', 'KAS', 203399, 'deden', 203399),
(9, '04 January 2017', 'Penerimaan', 'KAS', 233122, 'rahmat', 233122),
(13, '12 January 2017', 'Pengeluaran Kas', 'lulud', 123112, 'KAS', 123112),
(14, '16 January 2017', 'Penerimaan Kas', 'aris', 230000, 'KAS', 230000),
(15, '17 January 2017', 'Pembelian', 'KAS', 122000, 'alfat', 122000),
(16, '13 January 2017', 'Penjualan', 'KAS', 212333, 'sinta', 212333),
(17, '08 January 2017', 'Penggajian', 'ica', 122999, 'KAS', 122999),
(18, '09 January 2017', 'Pengeluaran Kas', 'KAS', 120000, 'rista', 120000);

-- --------------------------------------------------------

--
-- Table structure for table `jurnal_kas`
--

CREATE TABLE `jurnal_kas` (
  `id` int(11) NOT NULL,
  `tgl_penerimaan` varchar(20) NOT NULL,
  `no_akun` int(10) NOT NULL,
  `nama_akun` varchar(40) NOT NULL,
  `saldo` int(10) NOT NULL,
  `jenis` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnal_kas`
--

INSERT INTO `jurnal_kas` (`id`, `tgl_penerimaan`, `no_akun`, `nama_akun`, `saldo`, `jenis`) VALUES
(1, '04 January 2017', 1, 'rahmat', 233122, 'Kredit'),
(2, '16 January 2017', 2, 'aris', 230000, 'Debit');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal_pengeluaran_kas`
--

CREATE TABLE `jurnal_pengeluaran_kas` (
  `id` int(11) NOT NULL,
  `tgl_pengeluaran` varchar(20) NOT NULL,
  `no_akun` int(10) NOT NULL,
  `nama_akun` varchar(40) NOT NULL,
  `saldo` int(10) NOT NULL,
  `jenis` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnal_pengeluaran_kas`
--

INSERT INTO `jurnal_pengeluaran_kas` (`id`, `tgl_pengeluaran`, `no_akun`, `nama_akun`, `saldo`, `jenis`) VALUES
(4, '12 January 2017', 1, 'lulud', 123112, 'Debit'),
(5, '09 January 2017', 2, 'rista', 120000, 'Kredit');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal_penggajian`
--

CREATE TABLE `jurnal_penggajian` (
  `id` int(11) NOT NULL,
  `tgl_penggajian` varchar(20) NOT NULL,
  `no_akun` int(10) NOT NULL,
  `nama_akun` varchar(40) NOT NULL,
  `saldo` int(10) NOT NULL,
  `jenis` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnal_penggajian`
--

INSERT INTO `jurnal_penggajian` (`id`, `tgl_penggajian`, `no_akun`, `nama_akun`, `saldo`, `jenis`) VALUES
(1, '10 January 2017', 1, 'deden', 203399, 'Kredit'),
(2, '08 January 2017', 2, 'ica', 122999, 'Debit');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal_penjualan`
--

CREATE TABLE `jurnal_penjualan` (
  `id` int(11) NOT NULL,
  `tgl_penjualan` varchar(20) NOT NULL,
  `no_akun` int(10) NOT NULL,
  `nama_akun` varchar(40) NOT NULL,
  `saldo` int(10) NOT NULL,
  `jenis` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnal_penjualan`
--

INSERT INTO `jurnal_penjualan` (`id`, `tgl_penjualan`, `no_akun`, `nama_akun`, `saldo`, `jenis`) VALUES
(1, '18 January 2017', 1, 'dila', 420222, 'Debit'),
(2, '13 January 2017', 2, 'sinta', 212333, 'Kredit');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(10) NOT NULL,
  `id` int(11) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `id`, `pass`, `level`) VALUES
('admin', 1, 'admin', 'admin'),
('manager', 2, 'manager', 'manager'),
('accounting', 3, 'accounting', 'accounting');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurnalpembelian`
--
ALTER TABLE `jurnalpembelian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurnalumum`
--
ALTER TABLE `jurnalumum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurnal_kas`
--
ALTER TABLE `jurnal_kas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurnal_pengeluaran_kas`
--
ALTER TABLE `jurnal_pengeluaran_kas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurnal_penggajian`
--
ALTER TABLE `jurnal_penggajian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurnal_penjualan`
--
ALTER TABLE `jurnal_penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurnalpembelian`
--
ALTER TABLE `jurnalpembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `jurnalumum`
--
ALTER TABLE `jurnalumum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `jurnal_kas`
--
ALTER TABLE `jurnal_kas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jurnal_pengeluaran_kas`
--
ALTER TABLE `jurnal_pengeluaran_kas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `jurnal_penggajian`
--
ALTER TABLE `jurnal_penggajian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jurnal_penjualan`
--
ALTER TABLE `jurnal_penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
