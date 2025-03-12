-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2025 at 03:24 PM
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
-- Database: `db_pendaftaransiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_siswa`
--

CREATE TABLE `calon_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `agama` varchar(16) NOT NULL,
  `sekolah_asal` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `calon_siswa`
--

INSERT INTO `calon_siswa` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`) VALUES
(3, 'Nabil Arif', 'Semarang', 'Laki Laki', 'Islam', 'SMPN 30 Semarang'),
(4, 'Nabil Apip', 'Kendal', 'Laki', 'Islam', 'SMP'),
(5, 'Apps', 'Semarang Barat', 'Laki Laki', 'Islam', 'SMPN 30 Semarang'),
(6, 'Apps V2', 'Semarang Barat', 'Laki Laki', 'Islam', 'SMPN 30 Semarang'),
(7, 'Apps V2', 'Semarang Barat', 'Laki Laki', 'Islam', 'SMPN 30 Semarang'),
(8, 'Apps V2', 'Semarang Barat', 'Laki Laki', 'Islam', 'SMPN 30 Semarang'),
(9, 'Rayi', 'Bandengan', 'Laki Laki', 'Islam', 'SMPN 1 Kendal'),
(10, 'Nabil Arif', 'Semarang Barat', 'Laki Laki', 'Islam', 'SMPN 30 Semarang'),
(11, 'Nabil Apip', 'Semarang Barat', 'Laki Laki', 'Islam', 'SMPN 30 Semarang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
