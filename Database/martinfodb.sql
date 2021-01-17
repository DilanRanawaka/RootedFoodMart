-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 17, 2021 at 03:53 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `martinfodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactorder`
--

DROP TABLE IF EXISTS `contactorder`;
CREATE TABLE IF NOT EXISTS `contactorder` (
  `OrderID` bigint(20) NOT NULL,
  `FNIC` bigint(20) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Details` varchar(100) NOT NULL,
  `AddInfo` varchar(600) NOT NULL,
  PRIMARY KEY (`OrderID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactorder`
--

INSERT INTO `contactorder` (`OrderID`, `FNIC`, `Email`, `Details`, `AddInfo`) VALUES
(18595, 200283404088, 'pubzzz2002@gmail.com', 'sdfsdfsdf', 'dffsdf');

-- --------------------------------------------------------

--
-- Table structure for table `harvestinfo`
--

DROP TABLE IF EXISTS `harvestinfo`;
CREATE TABLE IF NOT EXISTS `harvestinfo` (
  `HID` varchar(20) NOT NULL,
  `NIC` bigint(12) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Type` varchar(60) NOT NULL,
  `HName` varchar(60) NOT NULL,
  `UPrice` bigint(20) NOT NULL,
  `Weight` bigint(20) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `lng` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`HID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harvestinfo`
--

INSERT INTO `harvestinfo` (`HID`, `NIC`, `Email`, `Name`, `Date`, `Type`, `HName`, `UPrice`, `Weight`, `lat`, `lng`, `status`) VALUES
('23405', 1234567890, 'dineth@gmail.com', 'dineth', '2021-01-10', 'grains', 'beans', 52, 360, '5.9549', '80.5550', 1),
('94892', 200283404088, 'pubzzz2002@gmail.com', 'Prabhashi ', '2021-01-17', 'fruits', 'tomato', 2000, 360, '7.4818', '80.3609', 1),
('24429', 1472583690, 'visse@gmail.com', 'Visse', '2021-01-08', 'fruits', 'tomato', 90, 1000, '6.9497', '80.7891', 0),
('25588', 195709800530, 'DilanRanawaka@gmail.com', 'Dilan', '2021-01-17', 'vegetable', 'pumpkin', 450, 3690, '6.0535', '80.2210', 1);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `IMAGE` longblob NOT NULL,
  `HID` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
CREATE TABLE IF NOT EXISTS `locations` (
  `id` int(20) NOT NULL,
  `lat` geometry NOT NULL,
  `lng` geometry NOT NULL,
  `description` varchar(100) NOT NULL,
  `locationStatus` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `nic` bigint(10) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `zip` int(10) NOT NULL,
  `province` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pno` bigint(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`fname`, `lname`, `nic`, `pass`, `address`, `street`, `district`, `zip`, `province`, `email`, `pno`) VALUES
('Prabhashi', 'Hettiarachchi', 200283404088, 'fsdfsdf', '28 Greenland Mawatha', 'Nadimala,', 'colombo', 10350, 'Western Province', 'pubzzz2002@gmail.com', 703479616),
('Dilan', 'Ranawaka', 195709800530, 'DR', 'galle', 'galle', 'Galle', 18500, 'Southern Province', 'DilanRanawaka@gmail.com', 715893460),
('Dineth', 'Gunasekara', 1234567890, 'DG', 'matara', 'matara', 'matara', 10000, 'Malaysia', 'dineth@gmail.com', 701234567),
('Visse', 'Pathirana', 1472583690, 'VP', 'Kadawatha', 'Kadawatha', 'kadawatha', 10000, 'Vietnam', 'visse@gmail.com', 123456789),
('malith', 'sumuditha', 159357258456, 'web', 'matara', 'matara', 'matara', 18595, 'Southern Province', 'malith@gmail.com', 718033707);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
