-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2024 at 09:35 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `userlist`
--

CREATE TABLE `userlist` (
  `empID` varchar(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `empStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlist`
--

INSERT INTO `userlist` (`empID`, `fullName`, `dept`, `position`, `empStatus`) VALUES
('MA0001', 'Joe Swanson', 'ITdept', 'deptHead', 'fulltime'),
('MA0002', 'Joe Ronald', 'markDept', 'deptHead', 'parttime'),
('MA0003', 'Sang Yi', 'accountDept', 'jrStaff', 'parttime');

-- --------------------------------------------------------

--
-- Table structure for table `usertime`
--

CREATE TABLE `usertime` (
  `empID` varchar(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `timein` datetime NOT NULL,
  `timeExit` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertime`
--

INSERT INTO `usertime` (`empID`, `fullName`, `dept`, `timein`, `timeExit`) VALUES
('MA0001', 'Joe Swanson', 'ITdept', '2024-01-12 18:50:11', '2024-01-12 18:50:20'),
('MA0001', 'Joe Swanson', 'ITdept', '2024-01-13 00:39:51', '2024-01-13 00:40:07'),
('MA0002', 'Joe Ronald', 'markDept', '2024-01-13 00:45:16', '2024-01-13 00:45:20'),
('MA0001', 'Joe Swanson', 'ITdept', '2024-01-15 12:42:26', '2024-01-15 13:13:56'),
('MA0003', 'Sang Yi', 'accountDept', '2024-01-15 13:12:06', '2024-01-15 13:15:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userlist`
--
ALTER TABLE `userlist`
  ADD PRIMARY KEY (`empID`);

--
-- Indexes for table `usertime`
--
ALTER TABLE `usertime`
  ADD KEY `empIDPK` (`empID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `usertime`
--
ALTER TABLE `usertime`
  ADD CONSTRAINT `empIDPK` FOREIGN KEY (`empID`) REFERENCES `userlist` (`empID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
