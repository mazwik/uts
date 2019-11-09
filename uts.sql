-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2019 at 01:59 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `no_hp_lama` int(14) NOT NULL,
  `no_hp_baru` int(14) NOT NULL,
  `tgl_diubah` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(20) DEFAULT NULL,
  `nama_mahasiswa` varchar(50) DEFAULT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan','','') DEFAULT NULL,
  `alamat_lengkap` varchar(60) DEFAULT NULL,
  `nomor_hp` int(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama_mahasiswa`, `jenis_kelamin`, `alamat_lengkap`, `nomor_hp`) VALUES
(1, '001', 'dwi laksono', 'laki-laki', 'pati', 88888),
(2, '002', 'tumini', 'perempuan', 'kudus', 88887),
(3, '003', 'bima', 'laki-laki', 'pati', 8889),
(4, '004', 'sarmi', 'perempuan', 'jepara', 99999),
(5, '005', 'widya', 'perempuan', 'jepara', 987474);

-- --------------------------------------------------------

--
-- Stand-in structure for view `uts_view`
-- (See below for the actual view)
--
CREATE TABLE `uts_view` (
`id` int(11)
,`nim` varchar(20)
,`nama_mahasiswa` varchar(50)
,`jenis_kelamin` enum('laki-laki','perempuan','','')
,`alamat_lengkap` varchar(60)
,`nomor_hp` int(14)
);

-- --------------------------------------------------------

--
-- Structure for view `uts_view`
--
DROP TABLE IF EXISTS `uts_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `uts_view`  AS  select `mahasiswa`.`id` AS `id`,`mahasiswa`.`nim` AS `nim`,`mahasiswa`.`nama_mahasiswa` AS `nama_mahasiswa`,`mahasiswa`.`jenis_kelamin` AS `jenis_kelamin`,`mahasiswa`.`alamat_lengkap` AS `alamat_lengkap`,`mahasiswa`.`nomor_hp` AS `nomor_hp` from `mahasiswa` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `log_ibfk_1` FOREIGN KEY (`id`) REFERENCES `mahasiswa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
