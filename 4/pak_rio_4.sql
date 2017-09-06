-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2017 at 04:54 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pak_rio_4`
--

-- --------------------------------------------------------

--
-- Table structure for table `dt_kelas`
--

CREATE TABLE `dt_kelas` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dt_kelas`
--

INSERT INTO `dt_kelas` (`id`, `nama`) VALUES
(2, 'XI RPL 2'),
(3, 'XI RPL 2'),
(4, 'XII RPL 4'),
(5, 'XI RPL 1');

-- --------------------------------------------------------

--
-- Table structure for table `dt_mapel`
--

CREATE TABLE `dt_mapel` (
  `id` int(11) NOT NULL,
  `materi` text NOT NULL,
  `deskripsi` text NOT NULL,
  `file` varchar(50) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dt_mapel`
--

INSERT INTO `dt_mapel` (`id`, `materi`, `deskripsi`, `file`, `id_mapel`, `id_guru`) VALUES
(1, 'bab 1: kehidupan', 'deskripsi ipa tambahan', '', 4, 2),
(2, 'Bab 3: Perang Dunia 2 (Call Of Duty II)', 'Deskripsi Sejarah', '', 3, 4),
(3, 'Bab 1: Tata Cara Tidur', 'Deskripsi Tata cara tidur dengan baik dan benar di kelas', '', 5, 5),
(4, 'Bab 1:Tutorial Bermain Moba', 'Deskripsi Turial Bermain Game Moba dengan benar', '', 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `dt_siswa`
--

CREATE TABLE `dt_siswa` (
  `id` int(11) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama` text NOT NULL,
  `id_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dt_siswa`
--

INSERT INTO `dt_siswa` (`id`, `nis`, `nama`, `id_kelas`) VALUES
(1, '12312321', 'qwerty =>', 2),
(3, '1234556', 'M Sobirin', 4);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nip`, `nama`, `password`) VALUES
(2, '12313169', 'Rusman Wahab', '66666666'),
(4, '69696969', 'Yogi Darusman', '666666'),
(5, '5454343', 'udin', '1234567'),
(6, '545464348', 'AoV', 'nnvbvcvv'),
(7, '9389481', 'Bambang', 'dkjfkdjkf');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id`, `nama`) VALUES
(3, 'ips'),
(4, 'ipa'),
(5, 'Tidur'),
(6, 'Bermain Game Moba'),
(7, 'Hekel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dt_kelas`
--
ALTER TABLE `dt_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dt_mapel`
--
ALTER TABLE `dt_mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dt_siswa`
--
ALTER TABLE `dt_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dt_kelas`
--
ALTER TABLE `dt_kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `dt_mapel`
--
ALTER TABLE `dt_mapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dt_siswa`
--
ALTER TABLE `dt_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
