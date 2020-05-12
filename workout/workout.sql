-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2020 at 12:08 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workout`
--

-- --------------------------------------------------------

--
-- Table structure for table `movement`
--

CREATE TABLE `movement` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movement`
--

INSERT INTO `movement` (`id`, `name`) VALUES
(1, 'Dumbbell Lateral Raise'),
(2, 'Dumbbell Shoulder Press');

-- --------------------------------------------------------

--
-- Table structure for table `movementresult`
--

CREATE TABLE `movementresult` (
  `id` int(30) NOT NULL,
  `usermovementID` int(30) NOT NULL,
  `resultID` int(30) NOT NULL,
  `repInfo` text NOT NULL,
  `ResultPercentage` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movementresult`
--

INSERT INTO `movementresult` (`id`, `usermovementID`, `resultID`, `repInfo`, `ResultPercentage`) VALUES
(1, 1, 2, '', 60),
(2, 2, 2, '', 80),
(3, 3, 1, '', 100),
(4, 4, 1, '', 60),
(5, 5, 2, '', 80),
(6, 6, 2, '', 80),
(7, 7, 1, '', 60),
(8, 8, 1, '', 100),
(9, 9, 1, '', 80),
(18, 10, 2, '', 60),
(19, 11, 1, '', 80),
(22, 12, 2, '', 80),
(23, 13, 1, '', 60),
(24, 14, 2, '', 100),
(25, 15, 1, '', 80),
(26, 16, 1, '', 100),
(27, 17, 2, '', 80),
(28, 18, 1, '', 100),
(29, 19, 2, '', 80),
(30, 20, 2, '', 60),
(31, 45, 2, '', 60),
(34, 45, 2, '', 60),
(35, 46, 2, '', 60),
(36, 47, 2, '', 60),
(39, 47, 2, '', 100),
(40, 47, 2, '', 100),
(41, 47, 2, '', 100),
(42, 47, 2, 'Wrong Wrong Wrong Wrong Wrong Wrong', 100),
(43, 47, 2, 'wr', 100);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(30) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `type`) VALUES
(1, 'Right '),
(2, 'Wrong');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(30) NOT NULL,
  `height` int(30) NOT NULL,
  `weight` int(30) NOT NULL,
  `usertype` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `username`, `password`, `gender`, `age`, `height`, `weight`, `usertype`) VALUES
(1, 'ahmed', 'mohamed', 'ahmed', '11111111', 'male', 21, 173, 75, 1),
(2, 'poula', 'moheb', 'poula', '22222222', 'male', 22, 193, 120, 1),
(3, 'abdelrahman ', 'tarek', 'khashaba', '85225885', 'male', 45, 166, 90, 2),
(5, 'ali', 'abdelkarem', 'ali', '751157751', 'male', 12, 44, 80, 2),
(10, 'rouline', 'ahmed', 'rouline', '987654321', 'female', 28, 165, 78, 2),
(11, 'sara', 'elsayed', 'sara', '98765423', 'female', 24, 180, 76, 2),
(12, 'abdelrahman', 'salah', 'salah', '74125896', 'male', 23, 160, 70, 2),
(13, 'hoda', 'farid', 'hoda', '98765432', 'female', 36, 190, 80, 2),
(14, 'poula', 'samir', 'poula', '98741256', 'male', 20, 160, 110, 2),
(15, 'omar', 'alaa', 'omar', '987654456', 'male', 21, 185, 100, 2),
(16, 'danial', 'nasser', 'danial', '98741256', 'male', 21, 165, 75, 2);

-- --------------------------------------------------------

--
-- Table structure for table `usermovement`
--

CREATE TABLE `usermovement` (
  `id` int(30) NOT NULL,
  `UserID` int(30) NOT NULL,
  `MovementID` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usermovement`
--

INSERT INTO `usermovement` (`id`, `UserID`, `MovementID`) VALUES
(1, 10, 2),
(2, 16, 2),
(3, 14, 2),
(4, 16, 2),
(5, 10, 2),
(6, 10, 2),
(7, 15, 2),
(8, 12, 2),
(9, 11, 2),
(10, 5, 2),
(11, 5, 2),
(12, 11, 1),
(13, 3, 1),
(14, 11, 1),
(15, 15, 1),
(16, 15, 1),
(17, 13, 1),
(18, 5, 1),
(19, 12, 1),
(20, 11, 1),
(21, 12, 1),
(22, 5, 1),
(44, 10, 1),
(45, 10, 1),
(46, 10, 1),
(47, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `userID` int(11) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`userID`, `type`) VALUES
(1, 'adminstrator'),
(2, 'regular user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movement`
--
ALTER TABLE `movement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movementresult`
--
ALTER TABLE `movementresult`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usermovementID` (`usermovementID`),
  ADD KEY `resultID` (`resultID`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usertype` (`usertype`),
  ADD KEY `gender` (`gender`);

--
-- Indexes for table `usermovement`
--
ALTER TABLE `usermovement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `MovementID` (`MovementID`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`userID`,`type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movement`
--
ALTER TABLE `movement`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `movementresult`
--
ALTER TABLE `movementresult`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `usermovement`
--
ALTER TABLE `usermovement`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movementresult`
--
ALTER TABLE `movementresult`
  ADD CONSTRAINT `movementresult_ibfk_1` FOREIGN KEY (`resultID`) REFERENCES `result` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `movementresult_ibfk_2` FOREIGN KEY (`usermovementID`) REFERENCES `usermovement` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`usertype`) REFERENCES `usertype` (`userID`) ON UPDATE CASCADE;

--
-- Constraints for table `usermovement`
--
ALTER TABLE `usermovement`
  ADD CONSTRAINT `usermovement_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usermovement_ibfk_2` FOREIGN KEY (`MovementID`) REFERENCES `movement` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
