-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2024 at 08:31 PM
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
-- Database: `catatan_perjalanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `nama_lengkap` varchar(250) NOT NULL,
  `profesi` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `jenis_kelamin` enum('LAKI-LAKI','PEREMPUAN') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`nama_lengkap`, `profesi`, `email`, `no_hp`, `jenis_kelamin`, `alamat`, `foto`, `id_user`) VALUES
('usridar muhamad saputra', 'Editor', 'usridarsaputra68@gmail.com', '085863246967', 'LAKI-LAKI', 'KP.BABAKAN ANYAR', '25569022_ceef5980488a6805cbdf592df781182d.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `catatan`
--

CREATE TABLE `catatan` (
  `id_catatan` int(10) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(6) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `suhu_tubuh` varchar(50) NOT NULL,
  `kondisi` enum('NORMAL','TIDAK NORMAL') NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catatan`
--

INSERT INTO `catatan` (`id_catatan`, `nama_lengkap`, `tanggal`, `jam`, `tujuan`, `suhu_tubuh`, `kondisi`, `id_user`) VALUES
(1, 'usridar', '2023-11-01', '12:00', 'palembang', '60', 'NORMAL', 0),
(2, 'ahmad', '2023-11-10', '16:26', 'palabuhanratu', '60', 'NORMAL', 0),
(3, 'usridar muhamad saputra', '2023-11-05', '16:38', 'surabaya', '60', 'NORMAL', 0),
(4, 'satria noval', '2023-12-02', '16:39', 'palabuhanratu', '65', 'NORMAL', 0),
(5, 'saskara', '2023-11-17', '16:39', 'jakarta', '65', 'NORMAL', 0),
(6, 'adam rahmatuallah', '2023-11-18', '16:40', 'jakarta', '65', 'TIDAK NORMAL', 0),
(7, 'usridar muhamad saputra', '2023-11-11', '17:27', 'surabaya', '60', 'NORMAL', 0),
(8, 'usridar muhamad saputra', '2023-12-02', '17:30', 'surabaya', '60', 'NORMAL', 0),
(9, 'satria noval', '2023-11-02', '19:16', 'jakarta', '60', 'TIDAK NORMAL', 0),
(10, 'usridar muhamad saputra', '2023-11-16', '22:09', 'palabuhanratu', '60', 'NORMAL', 0),
(52, 'usridar muhamad saputra', '2023-11-01', '22:13', 'palabuhanratu', '60', 'NORMAL', 2),
(53, 'adam rahmatuallah', '2023-11-18', '22:15', 'jakarta', '60', 'NORMAL', 2),
(54, 'satria noval', '2023-11-21', '23:16', 'jakarta', '60', 'NORMAL', 3),
(55, 'saskara', '2023-11-11', '23:30', 'malaysia', '60', 'NORMAL', 2),
(56, 'usridar muhamad saputra', '2023-11-04', '19:01', 'surabaya', '60', 'NORMAL', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama_lengkap` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `akses` enum('admin','user') NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `email`, `username`, `password`, `akses`, `foto`) VALUES
(1, 'Admin', 'Admin@gmail.com', '123', '123', 'admin', ''),
(2, 'usridar muhamad saputra', 'usridar@gmail.com', 'user', 'user', 'user', ''),
(3, 'satria noval', 'adam@gmail.com', 'adam123', 'adam123', 'user', ''),
(4, 'saskara akbar', 'abdul@gmail.com', 'abdul', 'abdul123', 'user', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `catatan`
--
ALTER TABLE `catatan`
  ADD PRIMARY KEY (`id_catatan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catatan`
--
ALTER TABLE `catatan`
  MODIFY `id_catatan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
