-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2024 at 08:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peduli_diri`
--

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `nik` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_telp` int(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`nik`, `nama`, `asal_sekolah`, `tanggal_lahir`, `no_telp`, `jenis_kelamin`, `alamat`) VALUES
(351514, 'hadi', '', '0000-00-00', 0, '', ''),
(1234567898, 'hadi', 'pp', '2024-02-14', 547546584, 'Laki Laki', 'jatisampurna');

-- --------------------------------------------------------

--
-- Table structure for table `config_admin`
--

CREATE TABLE `config_admin` (
  `nama` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `nik` int(13) NOT NULL,
  `level` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config_admin`
--

INSERT INTO `config_admin` (`nama`, `pass`, `nik`, `level`) VALUES
('haf', '123', 1234, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time(4) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `suhu` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `tanggal`, `jam`, `lokasi`, `suhu`) VALUES
(12345, '2024-02-13', '03:04:00.0000', 'jkt', 23),
(12345, '2024-02-20', '05:59:00.0000', 'prant', 32),
(12345, '2024-02-22', '04:05:00.0000', 'tmii', 45),
(1234, '2024-02-16', '23:23:00.0000', 'sdgv', 32);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `config_admin`
--
ALTER TABLE `config_admin`
  ADD PRIMARY KEY (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
