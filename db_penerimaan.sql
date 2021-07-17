-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2021 at 11:55 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penerimaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelompok`
--

CREATE TABLE `tb_kelompok` (
  `nim` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kelompok`
--

INSERT INTO `tb_kelompok` (`nim`, `nama`) VALUES
('181011400490', 'GALIH HARYANTO'),
('181011401922', 'INDRIYANI OCTAVIA'),
('181011402253', 'HAIRUL RIDWAN'),
('181011402271', 'ISABELLA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penerimaan`
--

CREATE TABLE `tb_penerimaan` (
  `id_penerimaan` int(11) NOT NULL,
  `alokasi` varchar(255) NOT NULL,
  `jumlah_transaksi` int(11) NOT NULL,
  `jumlah_dana` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penerimaan`
--

INSERT INTO `tb_penerimaan` (`id_penerimaan`, `alokasi`, `jumlah_transaksi`, `jumlah_dana`, `nama`, `nohp`, `email`) VALUES
(3, 'Sembako masyarakat', 185, 171472, 'YAYA', '0764585', 'yaya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Kelompok 3', 'kelompok3', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kelompok`
--
ALTER TABLE `tb_kelompok`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tb_penerimaan`
--
ALTER TABLE `tb_penerimaan`
  ADD PRIMARY KEY (`id_penerimaan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_penerimaan`
--
ALTER TABLE `tb_penerimaan`
  MODIFY `id_penerimaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
