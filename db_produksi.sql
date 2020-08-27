-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2020 at 04:37 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_produksi`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL,
  `nama_customer` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `telepon` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `nama_customer`, `alamat`, `email`, `telepon`) VALUES
(1, 'PT. KICI', 'BIC', 'kici@gmail.com', '082168379283'),
(2, 'PT. AAA', 'Bekasi', 'aaa@gmail.com', '081245682782');

-- --------------------------------------------------------

--
-- Table structure for table `data_produksi`
--

CREATE TABLE IF NOT EXISTS `data_produksi` (
  `id` int(11) NOT NULL,
  `line` varchar(128) NOT NULL,
  `customer` varchar(128) NOT NULL,
  `nama_product` varchar(128) NOT NULL,
  `rencana_produksi` int(11) NOT NULL,
  `hasil` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `ng` int(11) NOT NULL,
  `note` varchar(128) NOT NULL,
  `delivery` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_produksi`
--

INSERT INTO `data_produksi` (`id`, `line`, `customer`, `nama_product`, `rencana_produksi`, `hasil`, `stok`, `ng`, `note`, `delivery`) VALUES
(1, 'TG4R', 'PT.KICI', '2VF', 360, 360, 60, 0, 'tidak ada', 300),
(2, 'TG4R', 'PT.KICI', 'YR9', 16, 16, 0, 0, 'tidak ada', 16);

-- --------------------------------------------------------

--
-- Table structure for table `leader`
--

CREATE TABLE IF NOT EXISTS `leader` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `line` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `Telepon` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leader`
--

INSERT INTO `leader` (`id`, `nama`, `line`, `email`, `Telepon`) VALUES
(1, 'wahyu', '2vf', 'wahyusetiawan.ws33@gmail.com', '0811111111111');

-- --------------------------------------------------------

--
-- Table structure for table `line`
--

CREATE TABLE IF NOT EXISTS `line` (
  `id` int(11) NOT NULL,
  `nama_line` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `line`
--

INSERT INTO `line` (`id`, `nama_line`) VALUES
(1, 'TG4R'),
(2, 'D01N');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL,
  `nama_product` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `nama_product`) VALUES
(1, '2VF'),
(2, 'YR9');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int(11) NOT NULL,
  `line` varchar(128) NOT NULL,
  `customer` varchar(128) NOT NULL,
  `nama_product` varchar(128) NOT NULL,
  `rencana_produksi` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `line`, `customer`, `nama_product`, `rencana_produksi`) VALUES
(1, 'TG4R', 'PT. KICI', '2VF', 360),
(2, 'TG4R', 'PT. KICI', 'YR9', 16);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(5, 'Wahyu setiawan', 'Wahyusetiawan.ws33@gmail.com', 'default.jpg', '$2y$10$gAhvFzV3QZfRVE9olJakSusKx//E5k2rcSQ0F4CRuBBAggk7cMEpG', 1, 1, 1588645250),
(7, 'dany alamsah', 'danyalamsah@gmail.com', 'use.png', '$2y$10$xCSixN0.IQzzp9VXv8jYTOc0BvY8dd4TdnNUOfPGZ6YHniJTIJ8Hu', 3, 1, 1588728051),
(8, 'supervisor', 'aku@gmail.com', 'default.jpg', '$2y$10$lS2Ths/BuxuuvzVOsPY3/uf2dwr63DMG.0wvI6vjQ2CmdN.o4mb.i', 2, 1, 1592290382);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_produksi`
--
ALTER TABLE `data_produksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leader`
--
ALTER TABLE `leader`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `line`
--
ALTER TABLE `line`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `data_produksi`
--
ALTER TABLE `data_produksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `leader`
--
ALTER TABLE `leader`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `line`
--
ALTER TABLE `line`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
