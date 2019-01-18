-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2017 at 05:37 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contest`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` varchar(4) NOT NULL,
  `question` varchar(200) NOT NULL,
  `optns1` varchar(75) NOT NULL,
  `optns2` varchar(75) NOT NULL,
  `crrct_ans` varchar(75) NOT NULL,
  `q_date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `question`, `optns1`, `optns2`, `crrct_ans`, `q_date`) VALUES
('Q06', 'Which one of the following functions can be used to compress a string?', 'gzcompress()', 'zip_compress()', 'option1', '06/19/2017'),
('Q07', 'Which one of the following PHP functions can be used to build a function that accepts any number of arguments?', 'func_get_argv()', 'func_get_argc()', 'option2', '06/18/2017'),
('Q09', 'Who is the developer of php?', 'Suraski & Gutman', 'Rasmus Lerdarf', 'option2', '06/07/2017'),
('Q11', 'Which method scope prevents a method from being overridden by a subclass?', 'Protected', ' Final', 'option2', '06/20/2017'),
('Q12', 'How to stop the execution of php?', 'stop()', 'exit()', 'option2', '06/17/2017');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(4) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `phnno` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `marks` int(2) NOT NULL,
  `attn_qus` varchar(5) NOT NULL,
  `status` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `uname`, `pass`, `phnno`, `address`, `marks`, `attn_qus`, `status`) VALUES
(5, 'admin_sj', '321', '', '', 0, '', ''),
(6, 'sutanu jana', '123', '98888889', 'asansol', 4, 'Q07', ''),
(9, 'Debanjon Ghosh', '12345', '98766554', 'Malda', 0, '', ''),
(10, 'Pratim Bhattacharya', '45678', '98654557', 'kolkata', 0, '', ''),
(11, 'Abhinaba Dasmunshi ', '3456', '785665675', 'Behala, kolkata', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
