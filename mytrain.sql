-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2018 at 09:34 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytrain`
--

-- --------------------------------------------------------

--
-- Table structure for table `res`
--

CREATE TABLE `res` (
  `snum` int(11) NOT NULL,
  `state` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `res`
--

INSERT INTO `res` (`snum`, `state`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1);

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`id`, `name`) VALUES
(1, 'cairo'),
(2, 'ALEXANDRIA'),
(3, 'giza'),
(4, 'beni suef'),
(6, 'al minia'),
(7, 'aswan'),
(8, 'luxor'),
(9, 'QENA'),
(10, 'sohag'),
(1, 'cairo'),
(2, 'ALEXANDRIA'),
(3, 'giza'),
(4, 'beni suef'),
(6, 'al minia'),
(7, 'aswan'),
(8, 'luxor'),
(9, 'QENA'),
(10, 'sohag');

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

CREATE TABLE `trains` (
  `no` int(11) NOT NULL,
  `source` varchar(30) DEFAULT NULL,
  `destination` varchar(50) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `stime` varchar(50) DEFAULT NULL,
  `atime` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trains`
--

INSERT INTO `trains` (`no`, `source`, `destination`, `type`, `stime`, `atime`) VALUES
(900, 'aswan', 'cairo', 'm', '3pm', '2Am'),
(150, 'aswan', 'cairo', 'v', '5pm', '3Am'),
(2020, 'aswan', 'cairo', 'm', '7pm', '9Am'),
(2002, 'aswan', 'cairo', 'v', '7am', '7pm'),
(544, 'aswan', 'cairo', 'd', '3pm', '2Am'),
(775, 'aswan', 'cairo', 'n', '4pm', '4Am'),
(2000, 'aswan', 'cairo', 'm', '8am', '5pm'),
(20, 'aswan', 'cairo', 'd', '5pm', '2Am'),
(74, 'aswan', 'cairo', 'm', '4pm', '1Am'),
(24, 'aswan', 'cairo', 'v', '3am', '4pm'),
(454, 'cairo', 'aswan', 'v', '5pm', '4Am'),
(45, 'cairo', 'aswan', 'm', '3pm', '11Pm'),
(202, 'cairo', 'aswan', 'v', '7am', '7pm'),
(921, 'cairo', 'aswan', 'd', '3pm', '2Am'),
(997, 'cairo', 'aswan', 'n', '4pm', '4Am'),
(54, 'cairo', 'aswan', 'm', '8am', '5pm'),
(81, 'cairo', 'aswan', 'd', '5pm', '2Am'),
(33, 'cairo', 'aswan', 'm', '4pm', '1Am'),
(95, 'cairo', 'aswan', 'v', '3am', '4pm'),
(45, 'aswan', 'cairo', 'v', '5pm', '3Am'),
(250, 'aswan', 'cairo', 'm', '7pm', '9Am'),
(24, 'aswan', 'cairo', 'v', '7am', '2pm'),
(744, 'aswan', 'cairo', 'd', '3pm', 'Am'),
(74, 'aswan', 'cairo', 'n', '4pm', '5Am'),
(240, 'aswan', 'cairo', 'm', '8am', '7pm'),
(854, 'aswan', 'cairo', 'd', '5pm', '5Am'),
(87, 'aswan', 'cairo', 'm', '4pm', '4Am'),
(45, 'aswan', 'cairo', 'v', '3am', '8pm'),
(28, 'cairo', 'aswan', 'v', '5pm', '1Am'),
(20, 'cairo', 'aswan', 'm', '3pm', '11Pm'),
(42, 'cairo', 'aswan', 'v', '7am', '2pm'),
(1020, 'cairo', 'aswan', 'd', '3pm', '3Am'),
(2018, 'cairo', 'aswan', 'n', '4pm', '4Am'),
(845, 'cairo', 'aswan', 'm', '8am', '5pm'),
(454, 'cairo', 'aswan', 'd', '5pm', '8Am'),
(343, 'cairo', 'aswan', 'm', '4pm', '10Am'),
(985, 'cairo', 'aswan', 'v', '3am', '1pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `res`
--
ALTER TABLE `res`
  ADD PRIMARY KEY (`snum`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `res`
--
ALTER TABLE `res`
  MODIFY `snum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
