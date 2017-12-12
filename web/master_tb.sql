-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 07, 2017 at 11:13 AM
-- Server version: 10.1.23-MariaDB-9+deb9u1
-- PHP Version: 7.0.19-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agstatus_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `master_tb`
--

CREATE TABLE `master_tb` (
  `row_id` int(11) NOT NULL,
  `sensor` text NOT NULL,
  `threshold` text NOT NULL,
  `relay_name` text NOT NULL,
  `relay` text NOT NULL,
  `relay_on` text NOT NULL,
  `relay_off` text NOT NULL,
  `timer_name` text NOT NULL,
  `timer` text NOT NULL,
  `timer_on` text NOT NULL,
  `timer_off` text NOT NULL,
  `control` text NOT NULL,
  `program` text NOT NULL,
  `schedule` text NOT NULL,
  `dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_tb`
--

INSERT INTO `master_tb` (`row_id`, `sensor`, `threshold`, `relay_name`, `relay`, `relay_on`, `relay_off`, `timer_name`, `timer`, `timer_on`, `timer_off`, `control`, `program`, `schedule`, `dt`) VALUES
(1, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', '2017-11-06 15:14:42'),
(2, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2017-10-23 11:11:47'),
(3, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2017-10-23 11:11:47'),
(4, '-', '-', 'y', '-', '-', '-', '-', '-', '-', '-', '', '', '', '2017-10-19 18:24:36'),
(5, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '', '', '2017-10-19 18:24:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_tb`
--
ALTER TABLE `master_tb`
  ADD PRIMARY KEY (`row_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_tb`
--
ALTER TABLE `master_tb`
  MODIFY `row_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
