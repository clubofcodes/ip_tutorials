-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2020 at 08:17 AM
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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active, 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `Image` text NOT NULL,
  `Note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `Name`, `UsernameEmail`, `Password`, `MobileNumber`, `Birthdate`, `Country`, `State`, `City`, `Image`, `Note`) VALUES
(1, 'Rahul Jagetia', 'rjagetiya780@rku.ac.in', '********', 8347383659, '1999-05-01', 'Australia', 'Gujarat', 'Jamnagar', 'uploads/img/nnb58gbqogoetl562ab34ncvg5_IMG_0111.JPG', 'RKU Student'),
(7, 'Manthan Kaneriya', 'kaneriyamanthan@gmail.com', '12345678', 9106659856, '2000-08-29', 'India', 'Gujarat', 'Rajkot', 'uploads/img/nnb58gbqogoetl562ab34ncvg5_HP Envy G wallpaper.jpg', 'RKU Student'),
(8, 'Parth Agravat', 'pagravat301@rku.ac.in', '12345678', 9067093235, '2000-02-20', 'India', 'Gujarat', 'Rajkot', 'uploads/img/nnb58gbqogoetl562ab34ncvg5_HP Envy wallpaper.jpg', 'RKU Student'),
(9, 'Deepak shukla', 'dshukla293@rku.ac.in', '12345678', 9898998877, '2000-06-08', 'India', 'Gujarat', 'Rajkot', 'uploads/img/nnb58gbqogoetl562ab34ncvg5_IMG_6027.JPG', 'RKU Student'),
(16, 'Gautam Kodiyatar', 'gautam.kodiyatar@rku.ac.in', '12345678', 9925103711, '2000-08-10', 'India', 'Gujarat', 'Porbandar', 'uploads/img/nnb58gbqogoetl562ab34ncvg5_g.jpg', 'Murlidhar Student'),
(22, 'dharmil dhameliya', 'dshukla293@rku.ac.in', '1e234535645', 7934081544, '2020-03-11', 'India', 'Gujarat', 'Surat', 'uploads/img/nnb58gbqogoetl562ab34ncvg5_HP Envy G wallpaper.jpg', 'RKU Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
