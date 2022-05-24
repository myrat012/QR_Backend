-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2022 at 07:54 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qr`
--

-- --------------------------------------------------------

--
-- Table structure for table `gurat_hat`
--

CREATE TABLE `gurat_hat` (
  `id` int(11) NOT NULL,
  `pyyyg_birligi` varchar(50) NOT NULL,
  `kysymy` varchar(100) NOT NULL,
  `nomeri` varchar(50) NOT NULL,
  `ondurulen_yyly` varchar(50) NOT NULL,
  `bellige_alnan_sene` date DEFAULT NULL,
  `gutaryan_yyly` date DEFAULT NULL,
  `sahadatnama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gurat_hat`
--

INSERT INTO `gurat_hat` (`id`, `pyyyg_birligi`, `kysymy`, `nomeri`, `ondurulen_yyly`, `bellige_alnan_sene`, `gutaryan_yyly`, `sahadatnama`) VALUES
(4, 'a', 'a', 'a', 'a', '2022-02-02', '2022-02-02', '288261'),
(5, 'h', 'h', 'b', 'b', '2018-04-07', '2018-04-07', '481012');

-- --------------------------------------------------------

--
-- Table structure for table `guwa_hat`
--

CREATE TABLE `guwa_hat` (
  `id` int(11) NOT NULL,
  `nomer` varchar(20) NOT NULL,
  `yyly` varchar(10) NOT NULL,
  `faa` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `marka` varchar(100) NOT NULL,
  `renk` varchar(20) NOT NULL,
  `mator` varchar(50) NOT NULL,
  `agram` varchar(10) NOT NULL,
  `kiminki` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guwa_hat`
--

INSERT INTO `guwa_hat` (`id`, `nomer`, `yyly`, `faa`, `address`, `marka`, `renk`, `mator`, `agram`, `kiminki`) VALUES
(1, 'AG5522LB', '2005', 'Meredow Merdan', 'Lebap', 'TAYOTA CAMRY', 'Ak', '123123asd', '1500', '288261'),
(3, 'AB3433LB', '2005', 'Mersanow ', 'sushsh', 'sjsnsusb', 'jwajah', 'zbshshs', 'HBsbsbbs', '481012');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `familyasy` varchar(100) NOT NULL,
  `ady` varchar(100) NOT NULL,
  `atasynyn_ady` varchar(100) NOT NULL,
  `doglan_guni` date DEFAULT NULL,
  `doglan_yeri` varchar(250) NOT NULL,
  `berlen_yeri` varchar(250) NOT NULL,
  `berlen_senesi` date DEFAULT NULL,
  `mohleti` date DEFAULT NULL,
  `derejesi` varchar(20) NOT NULL,
  `ayratyn_bellikler` varchar(20) NOT NULL,
  `belgisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `familyasy`, `ady`, `atasynyn_ady`, `doglan_guni`, `doglan_yeri`, `berlen_yeri`, `berlen_senesi`, `mohleti`, `derejesi`, `ayratyn_bellikler`, `belgisi`) VALUES
(17, 'ag', 'ag', 'ag', '2022-05-10', '', 'ag', '2022-05-10', '2032-05-10', 'X B X X X', '137890', 'yok'),
(18, 'ss', 'ss', 'ss', '2022-05-10', '', 'ss', '2022-05-10', '2032-05-10', 'X B X X X', '664742', 'yok'),
(19, 'ss', 'ss', 'ss', '2022-05-10', '', 'ss', '2022-05-10', '2032-05-10', 'X B X X X', '862027', 'yok'),
(20, 'ww', 'ww', 'ww', '2022-05-10', '', 'ww', '2022-05-10', '2032-05-10', 'X B X X X', '494725', 'yok'),
(21, '', '', '', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '', '459601', ''),
(22, 'Myradow', 'Myrat', 'Myradowic', '2015-05-11', 'Halac', 'Turkmenabat', '2020-05-11', '2030-05-11', 'X B X X X', '610412', 'yok'),
(23, 'Gylyjow', 'Jepbar', 'Gurdowiç', '1995-04-11', 'Halaç', 'Türkmenabat', '2020-05-11', '2030-05-11', 'X B X X X', '281829', 'yok'),
(24, 'Myradow', 'Merdan', 'Kamiljanowiç', '1995-09-03', 'Balkanabat', 'Aşgabat', '2018-10-19', '2028-10-19', 'X B X X X', '481012', 'yok'),
(27, 'zen', 'zen', 'zen', '2002-05-16', 'lebap', 'lebap', '2013-11-11', '2023-11-11', 'X B X X X', '386516', 'yok'),
(28, 'zen', 'zen', 'zen', '2002-05-16', 'lebap', 'lebap', '2013-11-11', '2023-11-11', 'X B X X X', '151947', 'yok'),
(29, 'aa', 'aa', 'aa', '2022-05-16', 'aa', 'as', '2022-05-16', '2032-05-16', 'X B X X X', '288261', 'yok');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gurat_hat`
--
ALTER TABLE `gurat_hat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guwa_hat`
--
ALTER TABLE `guwa_hat`
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
-- AUTO_INCREMENT for table `gurat_hat`
--
ALTER TABLE `gurat_hat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `guwa_hat`
--
ALTER TABLE `guwa_hat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
