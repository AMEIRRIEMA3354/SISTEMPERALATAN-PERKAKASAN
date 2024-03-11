-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 12, 2024 at 03:09 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `maklumat_peralatan`
--

DROP TABLE IF EXISTS `maklumat_peralatan`;
CREATE TABLE IF NOT EXISTS `maklumat_peralatan` (
  `nama_alatan` varchar(100) NOT NULL,
  `nombor_perolehan` varchar(10) NOT NULL,
  `nama_pegawai_pemeriksa` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tarikh` date NOT NULL,
  PRIMARY KEY (`nombor_perolehan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maklumat_peralatan`
--

INSERT INTO `maklumat_peralatan` (`nama_alatan`, `nombor_perolehan`, `nama_pegawai_pemeriksa`, `status`, `keterangan`, `tarikh`) VALUES
('Keyboard', 'C56v2', 'Amier bin Adam', 'Sedang Dibaiki', 'meletup', '2024-01-29');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
