-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 04:34 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task3`
--

-- --------------------------------------------------------

--
-- Table structure for table `task3`
--

CREATE TABLE `task3` (
  `sno` int(4) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(33) NOT NULL,
  `tour_type` varchar(11) NOT NULL,
  `tour_code` varchar(11) NOT NULL,
  `start` varchar(11) NOT NULL,
  `end` varchar(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task3`
--

INSERT INTO `task3` (`sno`, `fname`, `lname`, `phone`, `email`, `tour_type`, `tour_code`, `start`, `end`, `date`) VALUES
(1, 'we', 'we', '2465475325', 'test@test.com', 'gvse', '34rss3', '33/33/33', '33/33/33', '2021-11-23 00:00:00'),
(2, 'vv', 'vv', '8234567891', 'test1@test1.com', 'gvse', 'rfhg', '11/11/11', '11/12/11', '2021-11-23 10:48:45'),
(3, 'wwrr', 'wwrerr', '2465475325', 'test1@test1.com', 'gvse', '34rss3', '33/33/33', '33/33/33', '2021-11-23 12:23:39'),
(4, 'Sheikh', 'Sheikh', '9373092865', 'qqq@gmail.com', 'C', 'rr4', '4', '56', '2021-11-23 12:25:53'),
(5, 'Sheikh', 'Sheikh', '9373092865', 'easytek.owners@gmail.com', 'C', 'rr4', '4', '56', '2021-11-23 12:26:09'),
(6, 'Sheikh', 'Sheikh', '9373092865', 'easytek.owners@gmail.com', 'C', 'rr4', '4', '56', '2021-11-23 12:27:10'),
(7, 'Sheikh', 'Sheikh', '9373092865', 'easytek.owners@gmail.com', 'C', 'rr4', '4', '56', '2021-11-23 12:29:19'),
(8, 'Sheikh', 'Sheikh', '9373092865', 'easytek.owners@gmail.com', 'C', 'rr4', '4', '56', '2021-11-23 15:40:58'),
(9, 'Sheikh', 'Sheikh', '9373092865', 'easytek.owners@gmail.com', 'C', 'rr4', '4', '56', '2021-11-23 15:43:48'),
(10, 'Sheikh', 'Sheikh', '9373092865', 'easytek.owners@gmail.com', 'C', 'rr4', '4', '56', '2021-11-23 15:44:34'),
(11, 'Sheikh', 'Sheikh', '9373092865', 'easytek.owners@gmail.com', 'C', 'rr4', '4', '56', '2021-11-23 17:17:59'),
(12, 'Sheikh', 'Sheikh', '9373092865', 'easytek.owners@gmail.com', 'C', 'rr4', '4', '56', '2021-11-23 17:18:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `task3`
--
ALTER TABLE `task3`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task3`
--
ALTER TABLE `task3`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
