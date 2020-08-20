-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2020 at 05:15 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fl_arsippelanggan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `Id` int(11) NOT NULL,
  `Id_pelanggan` varchar(50) NOT NULL,
  `nomor_agenda` varchar(50) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `tarif` varchar(10) NOT NULL,
  `daya` varchar(20) NOT NULL,
  `tanggal_permohonan` date NOT NULL,
  `status_kelengkapan_berkas` varchar(20) NOT NULL,
  `nomor_lemari` int(10) NOT NULL,
  `nomor_rak` varchar(20) NOT NULL,
  `berkas` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`Id`, `Id_pelanggan`, `nomor_agenda`, `nama`, `alamat`, `tarif`, `daya`, `tanggal_permohonan`, `status_kelengkapan_berkas`, `nomor_lemari`, `nomor_rak`, `berkas`) VALUES
(47, '311400238455', '311409912007070266', 'CORNELIAiiqq', 'RURUKAN', 'R1T', '450 VA', '2020-08-19', 'Lengkap', 1, '2Ba', 'x.zip'),
(48, '311400238414', '31140051200708273', 'FRETS TAMBAHANI', 'WATULAMBOT', 'R1T', '450 VA', '2020-08-11', 'Lengkap', 1, '2B', 'berkas1.rar'),
(49, '311400238584', '311400512007130301', 'FERROX ASIEL TULONG', 'KOYA', 'R1MT', '450 VA', '2020-08-19', 'Lengkap', 1, '2B', 'buku1.zip'),
(50, '311400238422', '311400512007130297', 'LUSYE GREESE MANGUND', 'KINIAR', 'R1MT', '450 VA', '2018-07-26', 'Lengkap', 1, '2B', 'upload1.zip'),
(51, '311400238471', '311400512007100287', 'MARCHEL M TUILAN', 'ERIS', 'R1T', '450 VA', '2020-07-29', 'Lengkap', 1, '2B', 'upload2.zip'),
(52, '311400238145', '311400512007060258', 'JEFRY HERMANUS', 'KAPATARAN SATU', 'R1T', '450 VA', '2020-08-03', 'Lengkap', 1, '2B', 'upload3.zip'),
(53, '311400020117', '311400522007308787', 'USMAR AHUDULU', 'RINEGETAN', 'R1', '450 VA', '2020-08-04', 'Lengkap', 1, '2B', 'upload4.zip'),
(54, '311400238497', '311400512006250211', 'JULIUS Y SAMBUAGA', 'PARENTEK', 'R1T', '450 VA', '2020-07-28', 'Lengkap', 1, '2B', 'x.zip'),
(62, '3140005120387', '311400512007290387', 'FELIX KUSOY', 'KINALEOSAN', 'R1MT', '450 VA', '2020-08-13', 'Lengkap', 1, '2B', 'zz.zip');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
