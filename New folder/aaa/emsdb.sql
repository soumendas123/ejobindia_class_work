-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2017 at 11:16 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `empdetails`
--

CREATE TABLE `empdetails` (
  `sid` int(4) NOT NULL,
  `eid` varchar(255) NOT NULL,
  `ename` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `blood` varchar(5) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empdetails`
--

INSERT INTO `empdetails` (`sid`, `eid`, `ename`, `address`, `gender`, `phone`, `email`, `dob`, `blood`, `qualification`, `experience`) VALUES
(1, 'SYS01', 'Rahul Kumar', 'Patna', 'Male', '9876543210', 'rkkumar@gmail.com', '8/8/95', 'B+', 'B.Tech in Civil', '2 years'),
(2, '', '', '', '', '', '', '', 'A+', '', ''),
(3, '', 'jvmhk', '', '', '', '', '', 'A+', '', ''),
(4, '', '', '', '', '', '', '', 'A+', '', ''),
(5, '', '', '', 'Male', '', '/', '', 'A+', '', ''),
(6, 'SYS007', 'aa', 'dd', 'Male', 'df', 'dddf', '2/5/89', 'A+', 'ad', '3'),
(7, 'SYS010', 'Sam', 'Surat', 'Male', '9876543256', 'jhon@gmail.com', '08/12/79', 'O+', 'B.Sc.', '3 yrs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empdetails`
--
ALTER TABLE `empdetails`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empdetails`
--
ALTER TABLE `empdetails`
  MODIFY `sid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
