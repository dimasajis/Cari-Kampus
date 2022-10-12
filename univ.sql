-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2022 at 01:29 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `univ`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_kampus` varchar(100) NOT NULL,
  `id_jurusan` varchar(100) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_kampus`, `id_jurusan`, `nama_jurusan`) VALUES
('0001', '0001001', 'Psikologi'),
('0001', '0001002', 'Kedokteran'),
('0002', '0002001', 'Kedokteran'),
('0002', '0002002', 'Peternakan'),
('0003', '0003001', 'Teknik Informatika'),
('0003', '0003002', 'Teknik Sipil'),
('1001', '1001001', 'Teknik Informatika'),
('1001', '1001002', 'Kedokteran'),
('1001', '1001003', 'Farmasi'),
('1002', '1002001', 'Teknik Informatika'),
('1002', '1002002', 'Ekonomi'),
('1003', '1003001', 'Ekonomi'),
('1003', '1003002', 'Kedokteran');

-- --------------------------------------------------------

--
-- Table structure for table `kampus`
--

CREATE TABLE `kampus` (
  `id_kampus` varchar(100) NOT NULL,
  `nama_kampus` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `akreditasi` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `id_follow` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kampus`
--

INSERT INTO `kampus` (`id_kampus`, `nama_kampus`, `alamat`, `akreditasi`, `status`, `id_follow`) VALUES
('0001', 'Universitas Indonesia (UI)', 'Kota Depok, Jawa Barat', 'A', 'PTN', '0'),
('0002', 'Universitas Gajah Mada (UGM)', 'Kota Yogyakarta, D I Yogyakarta', 'A', 'PTN', '1'),
('0003', 'Institut Teknologi Bandung (ITB)', 'Kota Bandung, Jawa Barat', 'A', 'PTN', '1'),
('1001', 'Universitas Ahmad Dahlan (UAD)', 'Kota Yogyakarta, D I Yogyakarta', 'A', 'PTS', '1'),
('1002', 'Universitas Islam Indonesia (UII)', 'Kabupaten Sleman, D I Yogyakarta', 'A', 'PTS', '1'),
('1003', 'Universitas Muhammadiyah Yogyakarta (UMY)', 'Kabupaten Bantul, D I Yogyakarta', 'A', 'PTS', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`),
  ADD KEY `id_kampus` (`id_kampus`);

--
-- Indexes for table `kampus`
--
ALTER TABLE `kampus`
  ADD PRIMARY KEY (`id_kampus`),
  ADD KEY `nama_kampus` (`nama_kampus`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
