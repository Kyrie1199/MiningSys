-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 06:27 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mining`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `username` longtext NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `username`, `password`) VALUES
(1, 'admin', 'ironman');

-- --------------------------------------------------------

--
-- Table structure for table `claims`
--

CREATE TABLE `claims` (
  `claimid` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `status` longtext NOT NULL DEFAULT 'Available',
  `expectedyield` longtext NOT NULL,
  `gridreference` longtext NOT NULL,
  `size` double NOT NULL,
  `composition` double NOT NULL,
  `payment` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `claims`
--

INSERT INTO `claims` (`claimid`, `name`, `status`, `expectedyield`, `gridreference`, `size`, `composition`, `payment`) VALUES
(1, 'Tango', 'Available', '20000', '482584', 1200, 1.25, 0),
(2, 'Bravo', 'Available', '35000', '737593', 2300, 3.24, 0),
(3, 'Chitima', 'Available', '4000', '5741252', 1500, 1.21, 0),
(4, 'Winnie', 'Available', '5000', '574273', 2000, 1.2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `idnumbers`
--

CREATE TABLE `idnumbers` (
  `uniqueid` int(11) NOT NULL,
  `idnumber` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `idnumbers`
--

INSERT INTO `idnumbers` (`uniqueid`, `idnumber`) VALUES
(1, '58-2025Z26'),
(2, '58-2937C49'),
(3, '58-2039Z45'),
(4, '58-3929F23'),
(5, '58-3919F23'),
(6, '58-3923F23'),
(7, '58-3929F13'),
(8, '58-4119F23'),
(9, '58-4219F23'),
(10, '58-4319F23'),
(11, '58-4419F23');
-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `paymentid` int(11) NOT NULL,
  `amount` double NOT NULL,
  `receivedcode` longtext NOT NULL,
  `userid` int(11) NOT NULL,
  `proof` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`paymentid`, `amount`, `receivedcode`, `userid`, `proof`) VALUES
(1, 0, 'MP12334D4', 0, ''),
(2, 30000, 'MP12.443.56', 1, ''),
(3, 4000, 'MP12.443.40', 1, ''),
(4, 6200, 'MP.43523.DD', 1, 'uploads/EcoCash.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `firstname` longtext NOT NULL,
  `surname` longtext NOT NULL,
  `phonenumber` longtext NOT NULL,
  `idnumber` longtext NOT NULL,
  `years` longtext NOT NULL,
  `capital` longtext NOT NULL,
  `username` longtext NOT NULL,
  `password` longtext NOT NULL,
  `claim` int(11) NOT NULL,
  `changerequest` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `firstname`, `surname`, `phonenumber`, `idnumber`, `years`, `capital`, `username`, `password`, `claim`, `changerequest`) VALUES
(1, 'Ruben', 'Barwe', '0773245886', '58-2426198 R 92', '3', '20000', 'mj', 'ironman', 3, 0),
(2, 'Winnie', 'Flare', '0773456991', '58-2025Z26', '4', '20000', 'king', 'ironman', 2, 0),
(5, 'Vanessa', 'Dube', '0775646007', '58-3929F23', '3', '23000', 'vee', 'ironman', 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `claims`
--
ALTER TABLE `claims`
  ADD PRIMARY KEY (`claimid`);

--
-- Indexes for table `idnumbers`
--
ALTER TABLE `idnumbers`
  ADD PRIMARY KEY (`uniqueid`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`paymentid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `claims`
--
ALTER TABLE `claims`
  MODIFY `claimid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `idnumbers`
--
ALTER TABLE `idnumbers`
  MODIFY `uniqueid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `paymentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
