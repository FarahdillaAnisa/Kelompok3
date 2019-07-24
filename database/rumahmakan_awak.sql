-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2019 at 12:49 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rumahmakan_awak`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Dekke Na Niura', 'DekkeNaNiura.jpg', 30000),
(2, 'Pempek', 'pempek.jpg', 20000),
(3, 'Sate Ayam Madura', 'sateayamm.jpg', 15000),
(10, 'Sate Kambing', 'satekambing.jpg', 20000),
(11, 'Soto Lamongan', 'sotolamongan.jpeg', 20000),
(12, 'Karedok Sunda', 'karedok.jpg', 15000),
(13, 'Es Cendol', 'cendol.jpg', 7000),
(14, 'Es Blewah', 'esblewah.jpg', 10000),
(15, 'Es Campur', 'escampur.jpg', 7000),
(16, 'Es Cincau Hitam', 'escincauhitam.png', 8000),
(17, 'Putu Piring', 'putupiring.jpg', 10000),
(18, 'Lapis Legit', 'lapislegit.jpg', 20000),
(19, 'Talam Bulan', 'kuetepungberas.jpg', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_login` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_login`, `nama`, `email`, `nohp`, `username`, `password`) VALUES
(1, 'farahdilla anisa', 'farahdillaanisa13@gmail.com', '082386311010', 'farah', 'farah'),
(2, 'fikri', 'fikri@gmail.com', '082247834097', 'fikri', 'fikri'),
(3, 'elsa', 'elsa@gmail', '082386311010', 'elsa', ''),
(4, 'Kiki Harapan Hutapea', 'elsa@gmail', '082386311010', 'kiki', ''),
(5, 'elsa', 'farahdillaanisa13@gmail.com', '082386311010', 'farah', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
