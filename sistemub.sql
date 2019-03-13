-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2019 at 04:43 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_lengkap`, `username`, `password`) VALUES
(1, 'Nando Oktoviandi', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_stok` int(11) NOT NULL,
  `satuan` char(10) NOT NULL,
  `merk_barang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `jumlah_stok`, `satuan`, `merk_barang`) VALUES
('P0001', 'Enduro 4T (24x0,8)', 15, 'Dus', 'Pertamina'),
('P0002', 'Enduro Racing (6x1)', 10, 'Dus', 'Pertamina'),
('P0003', 'Enduro Matic (6x0,8)', 5, 'Dus', 'Pertamina'),
('P0004', 'Fastron Tecno 10/40 (20x1)', 20, 'Dus', 'Pertamina'),
('P0005', 'Fastron Tecno 10/40 (6x4)', 20, 'Dus', 'Pertamina'),
('P0006', 'Fastron Tecno 15/40 (20x1)', 10, 'Dus', 'Pertamina'),
('P0007', 'Fastron Tecno 15/40 (6x4)', 12, 'Dus', 'Pertamina'),
('P0008', 'Meditran sc (20x1)', 7, 'Dus', 'Pertamina'),
('P0009', 'Meditran sc (2x10)', 40, 'Dus', 'Pertamina'),
('P0010', 'Meditran sc (4x5)', 25, 'Dus', 'Pertamina'),
('P0011', 'Meditran s40 (20x1)', 25, 'Dus', 'Pertamina'),
('P0012', 'Meditran s40 (2x10)', 70, 'Dus', 'Pertamina'),
('P0013', 'Meditran s40 (4x5)', 55, 'Dus', 'Pertamina'),
('P0014', 'Meditran sx (20x1)', 5, 'Dus', 'Pertamina'),
('P0015', 'Meditran sx (2x10)', 28, 'Dus', 'Pertamina'),
('P0016', 'Meditran sx (6x4)', 25, 'Dus', 'Pertamina'),
('P0017', 'Mesran 40 (20x1)', 20, 'Dus', 'Pertamina'),
('P0018', 'Mesran 40 (6x4)', 3, 'Dus', 'Pertamina'),
('P0019', 'Prima xp (20x1)', 45, 'Dus', 'Pertamina'),
('P0020', 'Prima xp (6x4)', 58, 'Dus', 'Pertamina');

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id_keluar` varchar(20) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `satuan` char(10) NOT NULL,
  `nama_konsumen` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `barang_keluar`
--
DELIMITER $$
CREATE TRIGGER `pengeluaran_barang` AFTER INSERT ON `barang_keluar` FOR EACH ROW BEGIN
	UPDATE barang SET jumlah_barang=jumlah_stok-NEW.jumlah_barang
    WHERE id_keluar=NEW.kode_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id_masuk` varchar(20) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `satuan` char(10) NOT NULL,
  `nama_supplier` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_masuk`
--

INSERT INTO `barang_masuk` (`id_masuk`, `kode_barang`, `nama_barang`, `jumlah_barang`, `satuan`, `nama_supplier`, `tanggal`) VALUES
('BM01', 'P0012', 'Meditran s40 (2x10)', 25, 'Dus', 'PT. Natiotama Pusaka Cotranda', '2019-03-08'),
('BM02', 'P0012', 'Meditran s40 (2x10)', 30, 'Dus', 'PT. Arjuna Lumas Dwiguna', '2019-03-08'),
('BM03', 'P0012', 'Meditran s40 (2x10)', 7, 'Dus', 'PT. Arjuna Lumas Dwiguna', '2019-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `barang_out`
--

CREATE TABLE `barang_out` (
  `id_out` varchar(20) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `satuan` char(10) NOT NULL,
  `nama_konsumen` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `barang_return`
--

CREATE TABLE `barang_return` (
  `id_return` varchar(20) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `satuan` char(10) NOT NULL,
  `ket` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_return`
--

INSERT INTO `barang_return` (`id_return`, `kode_barang`, `nama_barang`, `jumlah_barang`, `satuan`, `ket`) VALUES
('R01', 'P0012', 'Meditran s40 (2x10)', 1, 'Dus', 'Barang Bocor pada bagian atas');

-- --------------------------------------------------------

--
-- Table structure for table `konsumen`
--

CREATE TABLE `konsumen` (
  `kode_konsumen` varchar(20) NOT NULL,
  `nama_konsumen` varchar(100) NOT NULL,
  `alamat_konsumen` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsumen`
--

INSERT INTO `konsumen` (`kode_konsumen`, `nama_konsumen`, `alamat_konsumen`, `telepon`) VALUES
('K0001', 'Adelia Service', 'Jl. KH Nasution', '-'),
('K0002', 'Fauzan Motor', 'Jl. Tengku Bey', ''),
('K0003', 'Baro Motor', 'Jl. KH Nasution', ''),
('K0004', 'Family Motor', 'Jl. KH Nasution', ''),
('K0005', 'Indah Service', 'Jl. Raya Kubang', ''),
('K0006', 'Sapta Jaya', 'Jl. Soekarno Hatta', ''),
('K0007', 'Budi Agung', 'Jl. Soekarno Hatta', ''),
('K0008', 'Ikomiyato', 'Jl. Soekarno Hatta', '');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `kode_supplier` varchar(20) NOT NULL,
  `nama_supplier` varchar(100) NOT NULL,
  `alamat_supplier` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `merk_barang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`kode_supplier`, `nama_supplier`, `alamat_supplier`, `telp`, `merk_barang`) VALUES
('S0001', 'PT. Natiotama Pusaka Cotranda', 'Jl. Panglima Undan No. 73', '0761-22184', 'Pertamina'),
('S0002', 'PT. Arjuna Lumas Dwiguna', 'Jl. Pahlawan No. 2', '0761-1234', 'Pertamina'),
('S0003', 'PT. Riau Mandiri Eka Sakti', 'Jl. Riau No. 73', '0761-88123', 'Pertamina'),
('S0004', 'PT. Calispo Jaya Abadi', 'Jl. SM Amin', '', 'Castrol'),
('S0005', 'PT. Rianda Ganda Mandiri', 'Jl. Rajawali', '', 'Shell'),
('S0006', 'PT. Dirgantara Mitrakarya', 'Jl. Riau Ujung', '', 'Unioil'),
('S0007', 'PT. Agung Automall', 'Jl. SM Amin', '', 'Toyota'),
('S0008', 'PT. Jasa Barutama Perkasa', 'Jl. Tuanku Tambusai', '', 'Top1'),
('S0009', 'PT. Oto Wira Eka Nusa', 'Jl. Cempaka', '', 'Total');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id_keluar`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id_masuk`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `barang_out`
--
ALTER TABLE `barang_out`
  ADD PRIMARY KEY (`id_out`);

--
-- Indexes for table `barang_return`
--
ALTER TABLE `barang_return`
  ADD PRIMARY KEY (`id_return`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`kode_konsumen`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`kode_supplier`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD CONSTRAINT `barang_keluar_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD CONSTRAINT `barang_masuk_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `barang_return`
--
ALTER TABLE `barang_return`
  ADD CONSTRAINT `barang_return_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
