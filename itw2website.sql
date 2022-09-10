-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2022 at 07:26 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itw2website`
--

-- --------------------------------------------------------

--
-- Table structure for table `auction_participation`
--

CREATE TABLE `auction_participation` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `auction_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auction_participation`
--

INSERT INTO `auction_participation` (`id`, `fname`, `category`, `auction_date`) VALUES
(1, 'sairaj', 'scul', 'jan');

-- --------------------------------------------------------

--
-- Table structure for table `place_order_data`
--

CREATE TABLE `place_order_data` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `artwork` varchar(255) NOT NULL,
  `description_art` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `place_order_data`
--

INSERT INTO `place_order_data` (`id`, `fname`, `artwork`, `description_art`) VALUES
(1, 'sairaj', 'va', 'xasdsf');

-- --------------------------------------------------------

--
-- Table structure for table `userinfodata`
--

CREATE TABLE `userinfodata` (
  `ID` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `choice` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfodata`
--

INSERT INTO `userinfodata` (`ID`, `fname`, `lname`, `profession`, `email`, `age`, `choice`, `password`) VALUES
(1, 'Pranesh', 'Ghadge', 'ac', 'praneshghadge25@gmail.com', 'eighteen', 'paint', '$2y$10$1x0idptDkJSQLZm4PvVRXuYUyEeg5NKLcwUPc62rllbCjfgAGsdBK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auction_participation`
--
ALTER TABLE `auction_participation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place_order_data`
--
ALTER TABLE `place_order_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfodata`
--
ALTER TABLE `userinfodata`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auction_participation`
--
ALTER TABLE `auction_participation`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `place_order_data`
--
ALTER TABLE `place_order_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userinfodata`
--
ALTER TABLE `userinfodata`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
