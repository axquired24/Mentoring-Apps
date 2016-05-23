-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2016 at 03:44 PM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imm_mentoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE IF NOT EXISTS `absensi` (
  `idPeserta` int(5) NOT NULL,
  `pertemuan1` int(1) NOT NULL,
  `pertemuan2` int(1) NOT NULL,
  `pertemuan3` int(1) NOT NULL,
  `pertemuan4` int(1) NOT NULL,
  `pertemuan5` int(1) NOT NULL,
  `pertemuan6` int(1) NOT NULL,
  `pertemuan7` int(1) NOT NULL,
  `pertemuan8` int(1) NOT NULL,
  `pertemuan9` int(1) NOT NULL,
  `pertemuan10` int(1) NOT NULL,
  `pertemuan11` int(1) NOT NULL,
  `pertemuan12` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `idPeserta` int(5) NOT NULL,
  `nilai1` varchar(3) NOT NULL,
  `nilai2` varchar(3) NOT NULL,
  `nilai3` varchar(3) NOT NULL,
  `nilai4` varchar(3) NOT NULL,
  `keterangan` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peserta_mentoring`
--

CREATE TABLE IF NOT EXISTS `peserta_mentoring` (
  `idPeserta` int(5) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `angkatan` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta_mentoring`
--

INSERT INTO `peserta_mentoring` (`idPeserta`, `nim`, `nama`, `kelas`, `angkatan`) VALUES
(1, 'L200130172', 'Albert Septiawan', 'E', '2013'),
(5, '245', 'Albert', 'D', '2014'),
(6, '132', 'Ambar Jati', 'D', '2013'),
(7, '567', 'Albert', 'D', '2014'),
(8, '132', 'Ozzyl', 'D', '2014'),
(9, '132', 'Ozzyl', 'D', '2013'),
(10, '245', 'Ozzyl', 'D', '2014'),
(11, '245', 'Albert', 'D', '2014'),
(12, '189', 'Diana', 'D', '2013');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `idUser` int(5) NOT NULL,
  `username` tinytext NOT NULL,
  `passw` tinytext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `username`, `passw`) VALUES
(1, 'admin12', 'admin12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`idPeserta`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`idPeserta`);

--
-- Indexes for table `peserta_mentoring`
--
ALTER TABLE `peserta_mentoring`
  ADD PRIMARY KEY (`idPeserta`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peserta_mentoring`
--
ALTER TABLE `peserta_mentoring`
  MODIFY `idPeserta` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
