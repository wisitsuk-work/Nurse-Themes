-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2020 at 02:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nurse`
--

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE `drug` (
  `Id` int(11) NOT NULL,
  `Code` int(9) NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Count` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `drug`
--

INSERT INTO `drug` (`Id`, `Code`, `Name`, `Count`) VALUES
(1, 123, 'Abacavir ', 100),
(2, 124, 'Acetazolamide ', 100),
(3, 125, 'Acetylcholine ', 20),
(4, 126, 'Acetylcysteine ', 40),
(5, 127, 'Acitretin ', 10);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `Id` int(1) NOT NULL,
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`Id`, `Title`) VALUES
(1, 'คณะบริหารธุรกิจและศิลปศาสตร์'),
(2, 'คณะวิศวกรรมศาสตร์');

-- --------------------------------------------------------

--
-- Table structure for table `major`
--

CREATE TABLE `major` (
  `Id` int(1) NOT NULL,
  `Faculty_id` int(1) NOT NULL,
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `major`
--

INSERT INTO `major` (`Id`, `Faculty_id`, `Title`) VALUES
(1, 1, 'การจัดการ'),
(2, 1, 'การท่องเที่ยว'),
(3, 2, 'วิศวกรรมคอมพิวเตอร์'),
(4, 2, 'วิศวกรรมเครื่องกล'),
(5, 2, 'วิศวกรรมซอฟต์แวร์');

-- --------------------------------------------------------

--
-- Table structure for table `profile_student`
--

CREATE TABLE `profile_student` (
  `Id` int(6) NOT NULL,
  `Student_Id` int(10) NOT NULL,
  `Firstname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Age` int(2) NOT NULL,
  `Sex` int(1) NOT NULL,
  `Faculty` int(1) NOT NULL,
  `Major` int(1) NOT NULL,
  `Birthday` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Class` int(1) NOT NULL,
  `Tel` int(10) NOT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `District` varchar(2555) COLLATE utf8_unicode_ci NOT NULL,
  `Province` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Code` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profile_student`
--

INSERT INTO `profile_student` (`Id`, `Student_Id`, `Firstname`, `Lastname`, `Age`, `Sex`, `Faculty`, `Major`, `Birthday`, `Class`, `Tel`, `Address`, `District`, `Province`, `Code`) VALUES
(1, 1234567890, 'Test1', 'System1', 22, 1, 1, 1, '2 ธันวาคม 2540', 3, 123456789, 'ถนนซูปเปอร์ไฮเวย์เชียงใหม่-ลำปาง', 'เมือง', 'เชียงใหม่ ', 50000),
(2, 1234567891, 'Test2', 'Ststem2', 20, 2, 2, 1, '2 มกราคม 2542', 1, 123456789, 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', 50100);

-- --------------------------------------------------------

--
-- Table structure for table `sex`
--

CREATE TABLE `sex` (
  `Id` int(1) NOT NULL,
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sex`
--

INSERT INTO `sex` (`Id`, `Title`) VALUES
(1, 'male'),
(2, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `Id` int(1) NOT NULL,
  `Title` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`Id`, `Title`) VALUES
(1, 'เจ้าหน้าที่'),
(2, 'พยาบาล');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `Id` int(6) NOT NULL,
  `Student_Id` int(10) NOT NULL,
  `Weight` decimal(5,2) NOT NULL,
  `Height` decimal(5,2) NOT NULL,
  `Pulse` decimal(5,2) NOT NULL,
  `Temperature` decimal(4,2) NOT NULL,
  `Treatment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Drug1` int(3) NOT NULL,
  `Count1` int(2) NOT NULL,
  `Drug2` int(3) NOT NULL,
  `Count2` int(2) NOT NULL,
  `Drug3` int(3) NOT NULL,
  `Count3` int(2) NOT NULL,
  `Reporter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Record` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`Id`, `Student_Id`, `Weight`, `Height`, `Pulse`, `Temperature`, `Treatment`, `Drug1`, `Count1`, `Drug2`, `Count2`, `Drug3`, `Count3`, `Reporter`, `Record`) VALUES
(9, 1234567890, '11.00', '111.00', '11.00', '99.99', 'ddsf', 2, 13, 4, 31, 3, 21, 'Test', '2020-05-05 14:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(3) NOT NULL,
  `Status` int(1) NOT NULL,
  `Username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Status`, `Username`, `Password`, `Firstname`, `Lastname`) VALUES
(1, 1, 'test1', '1234', 'Test', 'System');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drug`
--
ALTER TABLE `drug`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `major`
--
ALTER TABLE `major`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `profile_student`
--
ALTER TABLE `profile_student`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `sex`
--
ALTER TABLE `sex`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drug`
--
ALTER TABLE `drug`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `Id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `major`
--
ALTER TABLE `major`
  MODIFY `Id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `profile_student`
--
ALTER TABLE `profile_student`
  MODIFY `Id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sex`
--
ALTER TABLE `sex`
  MODIFY `Id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `Id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `Id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
