-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 07, 2017 at 11:15 AM
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
-- Table structure for table `relays_tb`
--

CREATE TABLE `relays_tb` (
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
-- Dumping data for table `relays_tb`
--

INSERT INTO `relays_tb` (`row_id`, `sensor`, `threshold`, `relay_name`, `relay`, `relay_on`, `relay_off`, `timer_name`, `timer`, `timer_on`, `timer_off`, `control`, `program`, `schedule`, `dt`) VALUES
(1, '-', '-', '1', '2', '3', '4', '', '-', '-', '-', '-', '-', '-', '2017-11-06 15:14:19'),
(2, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2017-11-06 15:14:19'),
(3, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2017-11-06 15:14:19'),
(4, '-', '-', 'T', 't', 't', 't', '-', '-', '-', '-', '-', '-', '-', '2017-10-23 11:24:11'),
(5, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2017-10-23 11:24:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `relays_tb`
--
ALTER TABLE `relays_tb`
  ADD PRIMARY KEY (`row_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `relays_tb`
--
ALTER TABLE `relays_tb`
  MODIFY `row_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
