-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2018 at 07:38 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `harumyx`
--

-- --------------------------------------------------------

--
-- Table structure for table `member1`
--

CREATE TABLE `member1` (
  `ID` int(10) NOT NULL,
  `Mname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Uname` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Passwd` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `MType` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `Pic` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member1`
--

INSERT INTO `member1` (`ID`, `Mname`, `Uname`, `Passwd`, `MType`, `Pic`) VALUES
(1, 'Harumyx', 'Nititad', '0258', 'admin', 0),
(2, 'GG', 'GG', '123', 'admin', 0),
(14, 'asdsad', 'asd', 'asd', 'admin', 0),
(34, '123', '123', '123', 'member', 0),
(35, '333333', '333333', '333333', 'member', 0),
(36, '123', '123', '123', 'member', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member1`
--
ALTER TABLE `member1`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member1`
--
ALTER TABLE `member1`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
