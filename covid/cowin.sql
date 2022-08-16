-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2022 at 02:50 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cowin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `adname` varchar(25) NOT NULL,
  `adusername` varchar(25) NOT NULL,
  `adpassword` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`adname`, `adusername`, `adpassword`) VALUES
('Aravindh R', 'cally', 'Aravindh2000'),
('Kaavya', 'kaavya2902', 'Kaavyaraman');

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `id` varchar(50) NOT NULL,
  `name` varchar(25) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `date` date NOT NULL,
  `aadhar` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`id`, `name`, `phone`, `date`, `aadhar`) VALUES
('1997', 'aswath', 7338821989, '2022-08-21', 112344567789),
('1997', 'Kabilan', 7854698745, '2022-08-21', 124536589874),
('1991', 'Aravindh R', 1234156781, '2022-08-21', 282325030389),
('1991', 'raman', 9358585625, '2022-08-21', 332511254478),
('1997', 'Hari', 9988577446, '2022-08-21', 332566587745),
('1997', 'Harish', 9447796965, '2022-08-21', 445677891123),
('1993', 'Swathi', 7799433668, '2022-08-21', 554688792233),
('1997', 'Karan', 9600245632, '2022-08-21', 558244716693),
('1991', 'Anirudh', 7624598456, '2022-08-21', 658958741452),
('1997', 'Karan', 9449688874, '2022-08-21', 669355824471);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`name`, `username`, `password`) VALUES
('Aravindh', 'aravindh29', 'Aravindh2000'),
('User', 'user123', 'Aravindh2000');

-- --------------------------------------------------------

--
-- Table structure for table `vaccentres`
--

CREATE TABLE `vaccentres` (
  `id` varchar(25) NOT NULL,
  `cname` varchar(25) NOT NULL,
  `address` varchar(75) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `Type` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccentres`
--

INSERT INTO `vaccentres` (`id`, `cname`, `address`, `contact`, `Type`) VALUES
('1993', 'Sathya Centre', 'Anna nagar, Chennai', 6694266942, 'covishield'),
('1995', 'Rajalakshmi centre', 'Madipakkam, chennai', 9444746404, 'covaxin'),
('1996', 'Lakshmi centre', 'ECR, Chennai', 9444824929, 'covaxin'),
('1997', 'Hindustan centre', '23rd cross Street, nanganallur, chennai', 9600085625, 'covishield');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`aadhar`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `vaccentres`
--
ALTER TABLE `vaccentres`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
