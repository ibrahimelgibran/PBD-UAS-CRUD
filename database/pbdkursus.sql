-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 20, 2023 at 12:14 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbdkursus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `nama_kelas`, `deskripsi`) VALUES
(1, 'Web Development', 'saad'),
(2, 'Mobile Development', 'adas');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `kelas` int(11) NOT NULL,
  `nama_lengkap` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_profil` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `tanggal_daftar`, `kelas`, `nama_lengkap`, `jenis_kelamin`, `alamat`, `email`, `whatsapp`, `foto_profil`) VALUES
('ID-00001', '2023-12-19', 2, 'Ibrahim El Gibran', 'Laki-laki', 'Jl . Monjali', 'elgibran@exemple.com', '081234567', '20a26a86d26ff04e3b898eeb103c030a0de58d04.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
