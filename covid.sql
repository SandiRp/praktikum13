-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2020 at 05:43 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `covid`
--

CREATE TABLE `covid` (
  `id_case` int(11) NOT NULL,
  `id_negara` int(11) NOT NULL,
  `total_kasus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `covid`
--

INSERT INTO `covid` (`id_case`, `id_negara`, `total_kasus`) VALUES
(1, 1, 1029878),
(2, 2, 232128),
(3, 3, 201505),
(4, 4, 165911),
(5, 5, 161145),
(6, 6, 159431),
(7, 7, 114653),
(8, 8, 93558),
(9, 9, 92584),
(10, 10, 82836);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `covid`
--
ALTER TABLE `covid`
  ADD PRIMARY KEY (`id_case`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `covid`
--
ALTER TABLE `covid`
  MODIFY `id_case` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
