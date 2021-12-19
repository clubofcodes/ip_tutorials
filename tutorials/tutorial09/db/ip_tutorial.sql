-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2020 at 12:28 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ip_tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `UsernameEmail` varchar(30) NOT NULL,
  `Password` varchar(16) NOT NULL,
  `MobileNumber` bigint(10) NOT NULL,
  `Birthdate` date NOT NULL,
  `Country` varchar(20) NOT NULL,
  `State` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Image` blob NOT NULL,
  `Note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `Name`, `UsernameEmail`, `Password`, `MobileNumber`, `Birthdate`, `Country`, `State`, `City`, `Image`, `Note`) VALUES
(1, 'Rahul Jagetia', 'rjagetiya780@rku.ac.in', '********', 8347383659, '1999-05-01', 'India', 'Gujarat', 'Jamnagar', '', 'RKU Student'),
(7, 'Manthan Kaneriya', 'kaneriyamanthan@gmail.com', '12345678', 9106659856, '2000-08-29', 'India', 'Gujarat', 'Rajkot', '', 'RKU Student'),
(8, 'Parth Agravat', 'pagravat301@rku.ac.in', '12345678', 9067093235, '2000-02-20', 'India', 'Gujarat', 'Rajkot', '', 'RKU Student'),
(9, 'Deepak shukla', 'dshukla293@rku.ac.in', '12345678', 9898998877, '2000-06-08', 'India', 'Gujarat', 'Rajkot', '', 'Darshan Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
