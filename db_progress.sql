-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 13, 2023 at 09:40 AM
-- Server version: 10.6.13-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arthatech7_progress`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads_google`
--

CREATE TABLE `ads_google` (
  `id_iklan` int(11) NOT NULL,
  `judul_iklan` varchar(100) NOT NULL,
  `jml_klik` varchar(100) NOT NULL,
  `jml_tayangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `belapengadaan`
--

CREATE TABLE `belapengadaan` (
  `id_vendor` int(11) NOT NULL,
  `nama_perusahaan` varchar(80) NOT NULL,
  `website` varchar(40) NOT NULL,
  `jumlah_produk` varchar(100) NOT NULL,
  `jenis_produk` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `belapengadaan`
--

INSERT INTO `belapengadaan` (`id_vendor`, `nama_perusahaan`, `website`, `jumlah_produk`, `jenis_produk`) VALUES
(1, 'Bukapengadaan (Bukalapak)', 'Bukalapak.com', '1', 'Paket absen (finger)');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama_customer` varchar(70) NOT NULL,
  `daerah` varchar(40) NOT NULL,
  `sumber_informasi` varchar(90) NOT NULL,
  `status` enum('Belum','Closing','Batal') NOT NULL,
  `keterangan` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `daerah`, `sumber_informasi`, `status`, `keterangan`) VALUES
(2, 'Serawai jastindo', 'Parung Bogor', 'Pak acep', 'Belum', 'Tripod'),
(3, 'Cluster Perumahan', 'Bogor', 'Pak acep', 'Batal', 'One Gate System'),
(4, 'gaoljeff30@gmail.com', '-', 'Pak acep', 'Batal', 'Tripod'),
(5, 'Wisata air', 'Pandeglang', 'Sosial media', 'Batal', 'Parking'),
(6, 'Pak satya', '-', 'pak acep', 'Batal', 'Akses Kontrol'),
(7, 'Pak Thamrin (Katoomba)', 'Gunung Putri - Bogor', 'Google ads / website', 'Closing', 'tripod gate'),
(8, 'Pak Agustri', '-', 'Google/Website', 'Batal', 'Tripod Gate'),
(9, 'Pak Hendra (PT Budi Agung)', 'Bandung', 'Pak Rudi', 'Batal', 'Payroll system'),
(10, 'Malang smart home', 'malang', 'Pak Acep', 'Batal', 'One gate system'),
(11, 'Pak arya (Telkon)', 'Balikpapan', 'Pak acep', 'Batal', 'tripod gate'),
(12, 'Pak hisar (PT Wika Gedung)', 'Jakarta', 'Google/Website', 'Batal', 'Flap Barrier'),
(13, 'omindtech', 'Palembang', 'Google/Website', 'Batal', 'Tripod gate, parking'),
(14, 'Pak Hasan', 'Jember', 'Bu nina', 'Batal', 'akses masuk (manless)'),
(15, 'Pak arif ', 'Serpong', 'website', 'Batal', 'Flap barrier'),
(16, 'Pak Nawawi', 'CIlegon', 'Website', 'Batal', 'Parking, barrier gate'),
(17, 'Pak Nedi', '-', 'Website', 'Batal', 'Parking'),
(18, 'SBM ITB (Pak Budhi)', 'Bandung', 'Website ', 'Closing', 'Parking, Pedestrian Gate');

-- --------------------------------------------------------

--
-- Table structure for table `konversi_ads`
--

CREATE TABLE `konversi_ads` (
  `id_convert` int(11) NOT NULL,
  `asal_iklan` varchar(70) NOT NULL,
  `closing` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(90) NOT NULL,
  `harga` varchar(80) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`) VALUES
(12, 'taupiqurahman99@gmail.com', '$2y$10$eOVaaOZxyeuU9IhYTS3fS..M3eBooECcY/Va7OEK5dX5YdZ44DYJ.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads_google`
--
ALTER TABLE `ads_google`
  ADD PRIMARY KEY (`id_iklan`);

--
-- Indexes for table `belapengadaan`
--
ALTER TABLE `belapengadaan`
  ADD PRIMARY KEY (`id_vendor`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `konversi_ads`
--
ALTER TABLE `konversi_ads`
  ADD PRIMARY KEY (`id_convert`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads_google`
--
ALTER TABLE `ads_google`
  MODIFY `id_iklan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `belapengadaan`
--
ALTER TABLE `belapengadaan`
  MODIFY `id_vendor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `konversi_ads`
--
ALTER TABLE `konversi_ads`
  MODIFY `id_convert` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
