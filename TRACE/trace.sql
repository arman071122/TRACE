-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2023 at 02:20 PM
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
-- Database: `trace`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` int(10) NOT NULL,
  `KTU_ID` varchar(256) NOT NULL,
  `Academic_year` int(11) NOT NULL,
  `file_name` varchar(256) NOT NULL,
  `uploaded_on` date NOT NULL,
  `Activity_head` varchar(256) NOT NULL,
  `Activity` varchar(256) NOT NULL,
  `loa` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `Approval` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `KTU_ID`, `Academic_year`, `file_name`, `uploaded_on`, `Activity_head`, `Activity`, `loa`, `points`, `Approval`) VALUES
(1, 'CEM20CS001', 1, 'CEM20CS001NSS cert.jpg', '2023-06-27', 'National Initiatives Participation', 'NCC', 0, 60, 'Approved'),
(2, 'CEM20CS001', 2, 'CEM20CS001Sample report.pdf', '2023-06-27', 'Sports & Games Participation', 'Games -Third prize', 3, 30, 'Approved'),
(3, 'CEM20CS001', 3, 'CEM20CS001Narendran S6.pdf', '2023-06-29', 'Cultural Activities Participation', 'Music', 3, 20, 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `point_alloc`
--

CREATE TABLE `point_alloc` (
  `id` int(11) NOT NULL,
  `Activity_head` varchar(256) NOT NULL,
  `Activity` varchar(256) NOT NULL,
  `loa` int(11) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `point_alloc`
--

INSERT INTO `point_alloc` (`id`, `Activity_head`, `Activity`, `loa`, `points`) VALUES
(1, 'National Initiatives Participation', 'NCC', 0, 60),
(2, 'National Initiatives Participation', 'NSS', 0, 60),
(3, 'Sports & Games Participation', 'Games -Consolation', 1, 8),
(4, 'Sports & Games Participation', 'Games -Consolation', 2, 15),
(5, 'Sports & Games Participation', 'Games -Consolation', 3, 25),
(6, 'Sports & Games Participation', 'Games -Consolation', 4, 40),
(7, 'Sports & Games Participation', 'Games -Consolation', 5, 60),
(8, 'Sports & Games Participation', 'Sports', 1, 8),
(9, 'Sports & Games Participation', 'Sports', 2, 15),
(10, 'Sports & Games Participation', 'Sports', 3, 25),
(11, 'Sports & Games Participation', 'Sports', 4, 40),
(12, 'Sports & Games Participation', 'Sports', 5, 60),
(13, 'Sports & Games Participation', 'Games -First prize', 1, 18),
(14, 'Sports & Games Participation', 'Games -First prize', 2, 25),
(15, 'Sports & Games Participation', 'Games -First prize', 3, 35),
(16, 'Sports & Games Participation', 'Games -First prize', 4, 60),
(17, 'Sports & Games Participation', 'Games -First prize', 5, 80),
(18, 'Sports & Games Participation', 'Games -Second prize', 1, 16),
(19, 'Sports & Games Participation', 'Games -Second prize', 2, 23),
(20, 'Sports & Games Participation', 'Games -Second prize', 3, 33),
(21, 'Sports & Games Participation', 'Games -Second prize', 4, 56),
(22, 'Sports & Games Participation', 'Games -Second prize', 5, 76),
(23, 'Sports & Games Participation', 'Games -Third prize', 1, 13),
(24, 'Sports & Games Participation', 'Games -Third prize', 2, 20),
(25, 'Sports & Games Participation', 'Games -Third prize', 3, 30),
(26, 'Sports & Games Participation', 'Games -Third prize', 4, 52),
(27, 'Sports & Games Participation', 'Games -Third prize', 5, 72),
(28, 'Cultural Activities Participation', 'Music', 1, 8),
(29, 'Cultural Activities Participation', 'Music', 2, 12),
(30, 'Cultural Activities Participation', 'Music', 3, 20),
(31, 'Cultural Activities Participation', 'Music', 4, 40),
(32, 'Cultural Activities Participation', 'Music', 5, 60),
(33, 'Cultural Activities Participation', 'Performing arts', 1, 8),
(34, 'Cultural Activities Participation', 'Performing arts', 2, 12),
(35, 'Cultural Activities Participation', 'Performing arts', 3, 20),
(36, 'Cultural Activities Participation', 'Performing arts', 4, 40),
(37, 'Cultural Activities Participation', 'Performing arts', 5, 60),
(38, 'Cultural Activities Participation', 'Literary arts -Consolation', 1, 8),
(39, 'Cultural Activities Participation', 'Literary arts -Consolation', 2, 12),
(40, 'Cultural Activities Participation', 'Literary arts -Consolation', 3, 20),
(41, 'Cultural Activities Participation', 'Literary arts -Consolation', 4, 40),
(42, 'Cultural Activities Participation', 'Literary arts -Consolation', 5, 60),
(43, 'Cultural Activities Participation', 'Literary arts -First prize', 1, 18),
(44, 'Cultural Activities Participation', 'Literary arts -First prize', 2, 22),
(45, 'Cultural Activities Participation', 'Literary arts -First prize', 3, 30),
(46, 'Cultural Activities Participation', 'Literary arts -First prize', 4, 60),
(47, 'Cultural Activities Participation', 'Literary arts -First prize', 5, 80),
(48, 'Cultural Activities Participation', 'Literary arts -Second prize', 1, 16),
(49, 'Cultural Activities Participation', 'Literary arts -Second prize', 2, 20),
(50, 'Cultural Activities Participation', 'Literary arts -Second prize', 3, 28),
(51, 'Cultural Activities Participation', 'Literary arts -Second prize', 4, 56),
(52, 'Cultural Activities Participation', 'Literary arts -Second prize', 5, 76),
(53, 'Cultural Activities Participation', 'Literary arts -Third prize', 1, 13),
(54, 'Cultural Activities Participation', 'Literary arts -Third prize', 2, 17),
(55, 'Cultural Activities Participation', 'Literary arts -Third prize', 3, 25),
(56, 'Cultural Activities Participation', 'Literary arts -Third prize', 4, 52),
(57, 'Cultural Activities Participation', 'Literary arts -Third prize', 5, 72);

-- --------------------------------------------------------

--
-- Table structure for table `tr_details`
--

CREATE TABLE `tr_details` (
  `ID` int(11) NOT NULL,
  `KTU_ID` varchar(256) NOT NULL,
  `Institution` varchar(256) NOT NULL,
  `Name` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tr_details`
--

INSERT INTO `tr_details` (`ID`, `KTU_ID`, `Institution`, `Name`, `Email`, `Password`) VALUES
(1, 'CEMT20CS001', 'College of Engineering Muttathara', 'Rekha V R', 'rekha@gmail.com', 'rekha');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `ID` int(10) NOT NULL,
  `KTU_ID` varchar(256) NOT NULL,
  `Name` varchar(256) NOT NULL,
  `Institution` varchar(256) NOT NULL,
  `Year` int(10) NOT NULL,
  `Branch` varchar(256) NOT NULL,
  `Sem` int(10) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`ID`, `KTU_ID`, `Name`, `Institution`, `Year`, `Branch`, `Sem`, `Email`, `Password`) VALUES
(1, 'CEM20CS001', 'Arman A', 'College of Engineering Muttathara', 3, 'CSE', 6, 'arman@gmail.com', 'arman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `point_alloc`
--
ALTER TABLE `point_alloc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tr_details`
--
ALTER TABLE `tr_details`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `point_alloc`
--
ALTER TABLE `point_alloc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
