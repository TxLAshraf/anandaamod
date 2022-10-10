-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 12:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aamod`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Admin_Name` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `Admin_Password` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Admin_Name`, `Admin_Password`) VALUES
('Admin', 'admin123@'),
('Ashraf', 'ashraf@123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `arrival` date NOT NULL,
  `leaving` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Id`, `name`, `email`, `phone`, `arrival`, `leaving`) VALUES
(13, 'Ashraf', 'sonushaikh989898@gmail.com', '9991225525', '2022-09-21', '2022-09-22'),
(14, 'about', 'contact@contact.com', '8888888888', '2022-09-27', '2022-09-29'),
(15, 'Ashraf Shaikh', 'sonushaikh989898@gmail.com', '3333333333', '2022-09-21', '2022-09-22');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(6, 'Astra child', 'dilshadshaikh890890@gmail.com', '3333333333', 'Hi this is test message', 'gbdkshdjkahjkdashdjkacas dasbdhkhaskdjkashj dhasjkhdjkasjdasjk dashdjkashd shdashkd asgdas'),
(7, 'sagar', 'contact@contact.com', '9991225525', 'hi', 'hi this is test message'),
(8, 'chicha', 'cicha@chicha.com', '8552211222', 'hi testing', 'hsjkbdkasdbjkashjdhasjl dhasjlh djlashdjaslhdjlas djlashdjash ldshajkljhaskl dasldhjklashdklasjdkljd adhaskldh asljdlsajkldsjldask hdlasjhdlsajkldasjkldas dljasldjaskl dlasadkljkldhashhdgasjk dhasldklasjdklasjlka djaskljdljashjljhskl dsald djklajkldashdsa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
