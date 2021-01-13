-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jan 13, 2021 at 08:11 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dineth`
--

-- --------------------------------------------------------

--
-- Table structure for table `harvestinfo`
--

CREATE TABLE `harvestinfo` (
  `HID` bigint(20) NOT NULL,
  `NIC` bigint(12) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Type` varchar(60) NOT NULL,
  `HName` varchar(60) NOT NULL,
  `UPrice` bigint(20) NOT NULL,
  `Weight` bigint(20) NOT NULL,
  `image` blob NOT NULL,
  `lat` varchar(50) NOT NULL,
  `lng` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harvestinfo`
--

INSERT INTO `harvestinfo` (`HID`, `NIC`, `Email`, `Name`, `Date`, `Type`, `HName`, `UPrice`, `Weight`, `image`, `lat`, `lng`, `status`) VALUES
(128430, 99001238954, 'k.yasintha@hwoeh', 'kavindu', '2021-01-16', 'vegetable', 'carrot', 100, 23, '', '6.894359068065016', '80.33365510937504', 1),
(1284302, 99001238954, 'k.yasintha@hwoeh', 'kavindu', '2021-01-15', 'vegetable', 'beans', 100, 23, '', '6.326870628633709', '80.99283479687504', 0),
(2344, 99001238954, 'k.yasintha@hwoeh', 'kavindu', '2021-01-14', 'vegetable', 'beet', 100, 23, '', '6.8779984541597505', '80.46549104687504', 1),
(343345, 99001238954, '', 'kavindu', '2021-01-08', 'vegetable', 'pumpkin', 100, 23, '', '6.736183001735333', '80.65775178906254', 0),
(34333, 99001238954, '', 'kavindu', '2021-01-22', 'vegetable', 'carrot', 100, 23, '', '6.785277702704766', '80.60282014843754', 0),
(128430234, 99001238954, 'k.yasintha@hwoeh', '34', '2021-01-22', 'vegetable', 'beet', 100, 23, '', '6.872544790895468', '80.55338167187504', 0),
(23423535, 0, 'k.yasintha@hwoeh', 'admin', '', 'fruits', 'carrot', 100, 23, '', '6.790732361192496', '80.46549104687504', 1),
(4234, 34324, '343', 'admin', '2021-01-21', 'grains', 'beet', 100, 23, '', '7.657203933251055', '80.22379182812504', 1),
(2343, 99001238954, 'k.yasintha@hwoeh', 'k', '2021-01-16', 'leaves', 'pumpkin', 100, 23, '', '6.52883990123213', '80.78958772656254', 1),
(453554, 99001238954, 'k.yasintha@hwoeh', 'admin', '2021-01-15', 'fruits', 'beet', 100, 23, '', '6.8779984541597505', '80.84451936718754', 0),
(128430546, 99001238954, 'k.yasintha@hwoeh', 'kavindu', '2021-01-08', 'fruits', 'beans', 100, 23, '', '6.053814179711985', '80.26773714062504', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `harvestinfo`
--
ALTER TABLE `harvestinfo`
  ADD PRIMARY KEY (`HID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `harvestinfo`
--
ALTER TABLE `harvestinfo`
  MODIFY `HID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128430547;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
