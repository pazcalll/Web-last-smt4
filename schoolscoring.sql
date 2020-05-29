-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2020 at 02:00 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolscoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `CLASS_ID` int(11) NOT NULL,
  `CLASS_NAME` varchar(24) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`CLASS_ID`, `CLASS_NAME`) VALUES
(0, 'not class'),
(1, 'class 1'),
(2, 'class 2'),
(3, 'class 3'),
(4, 'class 4'),
(5, 'class 5'),
(6, 'class 6'),
(7, 'admin'),
(8, 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `SCOREID` int(11) NOT NULL,
  `USERNAME` varchar(24) DEFAULT NULL,
  `ID` int(11) DEFAULT NULL,
  `SUB_ID` varchar(8) DEFAULT NULL,
  `QUIZ1` float DEFAULT NULL,
  `QUIZ2` float DEFAULT NULL,
  `MID_EXAM` float DEFAULT NULL,
  `QUIZ3` float DEFAULT NULL,
  `LAST_EXAM` float DEFAULT NULL,
  `AVERAGE` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`SCOREID`, `USERNAME`, `ID`, `SUB_ID`, `QUIZ1`, `QUIZ2`, `MID_EXAM`, `QUIZ3`, `LAST_EXAM`, `AVERAGE`) VALUES
(1, 'student1', 10012020, '1', 7, 6, 8, 4, 6, 7),
(2, 'student1', 10012020, '2', 6, 7, 4, 7, 3, 4),
(3, 'student1', 10012020, '3', 7, 9, 7, 6, 8, 8),
(4, 'student1', 10012020, '4', 5, 9, 6, 4, 6, 6),
(5, 'student1', 10012020, '5', 7, 5, 8, 8, 9, 8),
(6, 'student2', 10022020, '1', 6, 4, 6, 8, 9, 7),
(7, 'student2', 10022020, '2', 7, 7, 5, 8, 6, 6),
(8, 'student2', 10022020, '3', 4, 3, 8, 8, 5, 6),
(9, 'student2', 10022020, '4', 8, 8, 8, 8, 8, 8),
(10, 'student2', 10022020, '5', 6, 7, 4, 3, 7, 6),
(11, 'student3', 10032020, '1', 9, 7, 6, 6, 7, 6),
(12, 'student3', 10032020, '2', 3, 4, 7, 5, 3, 5),
(13, 'student3', 10032020, '3', 4, 6, 7, 7, 6, 6),
(14, 'student3', 10032020, '4', 6, 7, 6, 6, 7, 7),
(15, 'student3', 10032020, '5', 5, 3, 8, 7, 9, 8),
(16, 'student4', 10042020, '1', 7, 6, 6, 5, 9, 7),
(17, 'student4', 10042020, '2', 6, 7, 5, 7, 5, 6),
(18, 'student4', 10042020, '3', 7, 9, 8, 6, 4, 6),
(19, 'student4', 10042020, '4', 5, 9, 8, 7, 7, 7),
(20, 'student4', 10042020, '5', 7, 5, 4, 4, 3, 4),
(21, 'student5', 10052020, '1', 6, 4, 6, 8, 8, 7),
(22, 'student5', 10052020, '2', 7, 7, 7, 6, 7, 7),
(23, 'student5', 10052020, '3', 4, 3, 7, 9, 4, 4),
(24, 'student5', 10052020, '4', 8, 8, 6, 8, 8, 7),
(25, 'student5', 10052020, '5', 6, 7, 8, 3, 7, 7),
(26, 'student6', 10062020, '1', 9, 5, 8, 5, 4, 5),
(27, 'student6', 10062020, '2', 3, 4, 7, 6, 7, 6),
(28, 'student6', 10062020, '3', 4, 6, 7, 7, 6, 6),
(29, 'student6', 10062020, '4', 6, 7, 6, 9, 4, 6),
(30, 'student6', 10062020, '5', 5, 3, 8, 10, 5, 6),
(31, 'student7', 10072020, '1', 7, 6, 8, 4, 6, 7),
(32, 'student7', 10072020, '2', 6, 7, 4, 7, 3, 4),
(33, 'student7', 10072020, '3', 7, 9, 7, 6, 8, 8),
(34, 'student7', 10072020, '4', 5, 9, 6, 4, 6, 6),
(35, 'student7', 10072020, '5', 7, 5, 8, 8, 9, 8),
(36, 'student8', 10082020, '1', 6, 4, 4, 8, 9, 7),
(37, 'student8', 10082020, '2', 7, 7, 7, 8, 6, 7),
(38, 'student8', 10082020, '3', 4, 3, 6, 4, 3, 4),
(39, 'student8', 10082020, '4', 8, 8, 8, 8, 8, 8),
(40, 'student8', 10082020, '5', 6, 7, 6, 6, 7, 7),
(41, 'student9', 10092020, '1', 9, 6, 5, 9, 7, 3),
(42, 'student9', 10092020, '2', 3, 4, 8, 3, 4, 5),
(43, 'student9', 10092020, '3', 4, 6, 8, 4, 6, 6),
(44, 'student9', 10092020, '4', 6, 7, 4, 6, 7, 6),
(45, 'student9', 10092020, '5', 5, 3, 6, 5, 3, 4),
(46, 'student10', 10102020, '1', 7, 6, 7, 7, 6, 7),
(47, 'student10', 10102020, '2', 6, 7, 7, 6, 7, 7),
(48, 'student10', 10102020, '3', 7, 9, 7, 7, 9, 8),
(49, 'student10', 10102020, '4', 5, 9, 6, 5, 9, 7),
(50, 'student10', 10102020, '5', 7, 5, 8, 7, 5, 6),
(55, 'student51', 60012020, '3', 7, 5, 7, 5, 4, 9),
(56, 'student51', 60012020, '5', 6, 6, 6, 6, 10, 7.5);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `SUB_ID` varchar(8) NOT NULL,
  `SUB_NAME` varchar(24) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`SUB_ID`, `SUB_NAME`) VALUES
('1', 'Math'),
('2', 'Bahasa'),
('3', 'English'),
('4', 'Natural Science'),
('5', 'Social Science');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `USERNAME` varchar(24) NOT NULL,
  `PASSWORD` varchar(24) DEFAULT NULL,
  `STATUS` varchar(16) NOT NULL,
  `ADDRESS` varchar(1024) DEFAULT NULL,
  `ID` int(11) NOT NULL,
  `CLASS_ID` int(11) DEFAULT NULL,
  `PHONE` int(11) DEFAULT NULL,
  `FATHERNAME` varchar(64) DEFAULT NULL,
  `MOTHERNAME` varchar(64) DEFAULT NULL,
  `BIRTHDATE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`USERNAME`, `PASSWORD`, `STATUS`, `ADDRESS`, `ID`, `CLASS_ID`, `PHONE`, `FATHERNAME`, `MOTHERNAME`, `BIRTHDATE`) VALUES
('admin', 'admin', 'admin', 'admin', 0, 7, 0, 'null', 'null', '0000-00-00'),
('student1', 'student', 'student', 'student', 10012020, 1, 0, 'null', 'null', '0000-00-00'),
('student10', 'student', 'student', 'student', 10102020, 1, 0, 'null', 'null', '0000-00-00'),
('student11', 'student', 'student', 'student', 20012020, 2, 0, 'null', 'null', '0000-00-00'),
('student12', 'student', 'student', 'student', 20022020, 2, 0, 'null', 'null', '0000-00-00'),
('student13', 'student', 'student', 'student', 20032020, 2, 0, 'null', 'null', '0000-00-00'),
('student14', 'student', 'student', 'student', 20042020, 2, 0, 'null', 'null', '0000-00-00'),
('student15', 'student', 'student', 'student', 20052020, 2, 0, 'null', 'null', '0000-00-00'),
('student16', 'student', 'student', 'student', 20062020, 2, 0, 'null', 'null', '0000-00-00'),
('student17', 'student', 'student', 'student', 20072020, 2, 0, 'null', 'null', '0000-00-00'),
('student19', 'student', 'student', 'student', 20092020, 2, 0, 'null', 'null', '0000-00-00'),
('student2', 'student', 'student', 'student', 10022020, 1, 0, 'null', 'null', '0000-00-00'),
('student20', 'student', 'student', 'student', 20102020, 2, 0, 'null', 'null', '0000-00-00'),
('student21', 'student', 'student', 'student', 30012020, 3, 0, 'null', 'null', '0000-00-00'),
('student22', 'student', 'student', 'student', 30022020, 3, 0, 'null', 'null', '0000-00-00'),
('student23', 'student', 'student', 'student', 30032020, 3, 0, 'null', 'null', '0000-00-00'),
('student24', 'student', 'student', 'student', 30042020, 3, 0, 'null', 'null', '0000-00-00'),
('student25', 'student', 'student', 'student', 30052020, 3, 0, 'null', 'null', '0000-00-00'),
('student26', 'student', 'student', 'student', 30062020, 3, 0, 'null', 'null', '0000-00-00'),
('student27', 'student', 'student', 'student', 30072020, 3, 0, 'null', 'null', '0000-00-00'),
('student28', 'student', 'student', 'student', 30082020, 3, 0, 'null', 'null', '0000-00-00'),
('student29', 'student', 'student', 'student', 30092020, 3, 0, 'null', 'null', '0000-00-00'),
('student3', 'student', 'student', 'student', 10032020, 1, 0, 'null', 'null', '0000-00-00'),
('student30', 'student', 'student', 'student', 30102020, 3, 0, 'null', 'null', '0000-00-00'),
('student31', 'student', 'student', 'student', 40012020, 4, 0, 'null', 'null', '0000-00-00'),
('student32', 'student', 'student', 'student', 40022020, 4, 0, 'null', 'null', '0000-00-00'),
('student33', 'student', 'student', 'student', 40032020, 4, 0, 'null', 'null', '0000-00-00'),
('student34', 'student', 'student', 'student', 40042020, 4, 0, 'null', 'null', '0000-00-00'),
('student35', 'student', 'student', 'student', 40052020, 4, 0, 'null', 'null', '0000-00-00'),
('student36', 'student', 'student', 'student', 40062020, 4, 0, 'null', 'null', '0000-00-00'),
('student37', 'student', 'student', 'student', 40072020, 4, 0, 'null', 'null', '0000-00-00'),
('student38', 'student', 'student', 'student', 40082020, 4, 0, 'null', 'null', '0000-00-00'),
('student39', 'student', 'student', 'student', 40092020, 4, 0, 'null', 'null', '0000-00-00'),
('student4', 'student', 'student', 'student', 10042020, 1, 0, 'null', 'null', '0000-00-00'),
('student40', 'student', 'student', 'student', 40102020, 4, 0, 'null', 'null', '0000-00-00'),
('student41', 'student', 'student', 'student', 50012020, 5, 0, 'null', 'null', '0000-00-00'),
('student42', 'student', 'student', 'student', 50022020, 5, 0, 'null', 'null', '0000-00-00'),
('student43', 'student', 'student', 'student', 50032020, 5, 0, 'null', 'null', '0000-00-00'),
('student44', 'student', 'student', 'student', 50042020, 5, 0, 'null', 'null', '0000-00-00'),
('student45', 'student', 'student', 'student', 50052020, 5, 0, 'null', 'null', '0000-00-00'),
('student46', 'student', 'student', 'student', 50062020, 5, 0, 'null', 'null', '0000-00-00'),
('student47', 'student', 'student', 'student', 50072020, 5, 0, 'null', 'null', '0000-00-00'),
('student48', 'student', 'student', 'student', 50082020, 5, 0, 'null', 'null', '0000-00-00'),
('student49', 'student', 'student', 'student', 50092020, 5, 0, 'null', 'null', '0000-00-00'),
('student5', 'student', 'student', 'student', 10052020, 1, 0, 'null', 'null', '0000-00-00'),
('student50', 'student', 'student', 'student', 50102020, 5, 0, 'null', 'null', '0000-00-00'),
('student51', 'student', 'student', 'student', 60012020, 6, 0, 'null', 'null', '0000-00-00'),
('student52', 'student', 'student', 'student', 60022020, 6, 0, 'null', 'null', '0000-00-00'),
('student53', 'student', 'student', 'student', 60032020, 6, 0, 'null', 'null', '0000-00-00'),
('student54', 'student', 'student', 'student', 60042020, 6, 0, 'null', 'null', '0000-00-00'),
('student55', 'student', 'student', 'student', 60052020, 6, 0, 'null', 'null', '0000-00-00'),
('student56', 'student', 'student', 'student', 60062020, 6, 0, 'null', 'null', '0000-00-00'),
('student57', 'student', 'student', 'student', 60072020, 6, 0, 'null', 'null', '0000-00-00'),
('student58', 'student', 'student', 'student', 60082020, 6, 0, 'null', 'null', '0000-00-00'),
('student59', 'student', 'student', 'student', 60092020, 6, 0, 'null', 'null', '0000-00-00'),
('student6', 'student', 'student', 'student', 10062020, 1, 0, 'null', 'null', '0000-00-00'),
('student7', 'student', 'student', 'student', 10072020, 1, 0, 'null', 'null', '0000-00-00'),
('student8', 'student', 'student', 'student', 10082020, 1, 0, 'null', 'null', '0000-00-00'),
('student9', 'student', 'student', 'student', 10092020, 1, 0, 'null', 'null', '0000-00-00'),
('teacher1', 'teacher', 'teacher', 'teacher', 202001, 8, 0, 'null', 'null', '0000-00-00'),
('teacher2', 'teacher', 'teacher', 'teacher', 202002, 8, 0, 'null', 'null', '0000-00-00'),
('teacher3', 'teacher3', 'Teacher', NULL, 202003, 8, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`CLASS_ID`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`SCOREID`),
  ADD KEY `RELATIONSHIP_1_FK` (`USERNAME`,`ID`),
  ADD KEY `RELATIONSHIP_2_FK` (`SUB_ID`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`SUB_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`USERNAME`,`ID`),
  ADD KEY `RELATIONSHIP_3_FK` (`CLASS_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `SCOREID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `scores`
--
ALTER TABLE `scores`
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`USERNAME`,`ID`) REFERENCES `users` (`USERNAME`, `ID`),
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`SUB_ID`) REFERENCES `subjects` (`SUB_ID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`CLASS_ID`) REFERENCES `class` (`CLASS_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
