-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 08:01 AM
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
  `userID` int(11) NOT NULL,
  `fullName` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `userPass` varchar(128) NOT NULL,
  `admincheck` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlist`
--

INSERT INTO `userlist` (`userID`, `fullName`, `email`, `username`, `userPass`, `admincheck`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', '$2y$10$K8KZc2ArFqv0VRKD2FMoYeVlRtadwUE2LRxqqnLu9ung1V8gZSp7q', 'admin'),
(2, 'John smith', 'smith@gmail.com', 'smith', '$2y$10$KHo1g8oruJDOHKuXXotwbelEtU2phfT.KYjyPG1WEupLOIosntX7e', 'notadmin');

-- --------------------------------------------------------

--
-- Table structure for table `usertimein`
--

CREATE TABLE `usertimein` (
  `timeKey` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `dateEntered` date NOT NULL,
  `timeEntered` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userlist`
--
ALTER TABLE `userlist`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `usertimein`
--
ALTER TABLE `usertimein`
  ADD KEY `userIDPK` (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userlist`
--
ALTER TABLE `userlist`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `usertimein`
--
ALTER TABLE `usertimein`
  ADD CONSTRAINT `userIDPK` FOREIGN KEY (`userID`) REFERENCES `userlist` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
