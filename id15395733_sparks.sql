-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 07:17 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparks`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_name`
--

CREATE TABLE `user_name` (
  `id` int(20) NOT NULL,
  `Name` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `balance` bigint(20) NOT NULL,
  `account_no` bigint(20) NOT NULL,
  `ifce` varchar(20) NOT NULL,
  `contact` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_name`
--

INSERT INTO `user_name` (`id`, `Name`, `email`, `balance`, `account_no`, `ifce`, `contact`) VALUES
(1, 'Shivam Kumar Rajak', 'shiv@gmail.com', 2355140, 3124456897, 'SBIN0008754', 9458769142),
(2, 'Akshat Raj', 'akshat@gmail.com', 50000, 31452789784, 'SBIN0007784', 9865124784),
(3, 'Shubhangi Anand', 'shubhangi@gmail.com', 0, 31114178521, 'SBIN01009856', 9845623145),
(4, 'Rishav Gupta', 'rishav@gmail.com', 70900, 31114121458, 'SBIN0009998', 9572311894),
(5, 'Neharika', 'neha@gmail.com', 78956, 31114988765, 'SBIN0007789', 9865321454),
(6, 'Shubhro Sadhu', 'shibu@gmail.com', 98765, 45612789455, 'SBIN09865421', 9865426132),
(7, 'Shriya Singh', 'shriya@gmail.com', 178965, 45623145896, 'SBIN00078965', 7896541254),
(8, 'Debashish Gosh', 'Debu@gmail.com', 45689, 78965478578, 'SBIN0001111', 9865745632),
(9, 'Priyanka Singh', 'priya@gmail.com', 456321, 31114177787, 'SBIN0007854', 9854782145),
(10, 'Rahul Kumar Saw', 'rahul@gmail.com', 27363, 31114178520, 'SBIN0006880', 9572311465);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_name`
--
ALTER TABLE `user_name`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_name`
--
ALTER TABLE `user_name`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
