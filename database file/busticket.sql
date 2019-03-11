-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2019 at 06:25 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `busticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id` int(11) NOT NULL,
  `busName` varchar(255) NOT NULL,
  `busDate` varchar(255) NOT NULL,
  `busTime` varchar(255) NOT NULL,
  `busDesA` varchar(255) DEFAULT NULL,
  `busDesB` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `busName`, `busDate`, `busTime`, `busDesA`, `busDesB`) VALUES
(21, 'Meherpur Delux', '2018-12-01', '7.00 AM', 'Dhaka', 'Mujibnagar'),
(22, 'Dhaka Line', '2018-12-01', '7.00 AM', 'Dhaka', 'Jaterpur'),
(23, 'Royal express', '2018-12-12', '6.00 AM', 'Dhaka', 'Meherpur'),
(24, 'Royal express', '2018-12-12', '7.00 AM', 'Dhaka', 'Meherpur'),
(25, 'Meherpur Delux', '2018-12-12', '8.00 AM', 'Dhaka', 'Meherpur');

-- --------------------------------------------------------

--
-- Table structure for table `cancel`
--

CREATE TABLE `cancel` (
  `id` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `ticket` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `txnId` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `busId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cancel`
--

INSERT INTO `cancel` (`id`, `phone`, `ticket`, `amount`, `txnId`, `email`, `busId`) VALUES
(1, '01700000000', 'e3, e4, ', 1000, '2134234', 'abdulmabud@gmail.com', 23),
(2, '0150000000', 'c3, c4, ', 1000, '2332343434', 'abdulmabud@gmail.com', 23);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `username`, `email`, `phone`, `website`, `comment`) VALUES
(1, 'Abdul Mabud', 'abdulmabud@gmail.com', '0190000000', 'busticket.com', ''),
(2, 'Ratul', 'ratul@ds.com', '01300000', 'busticket.com', ''),
(3, 'Ratul', 'ratul@ds.com', '01300000', 'busticket.com', 'good job');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `location`, `email`, `password`) VALUES
(1, 'Dhaka', 'counter@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `counteradmin`
--

CREATE TABLE `counteradmin` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counteradmin`
--

INSERT INTO `counteradmin` (`id`, `location`, `email`, `password`) VALUES
(1, 'Dhaka', 'cadmin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `disAmount` int(11) NOT NULL DEFAULT '0',
  `disStatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`id`, `code`, `disAmount`, `disStatus`) VALUES
(1, 'diu100', 100, 'Currenly you are enjoying 100 taka discount'),
(3, 'cse75', 75, 'Enjoy 75 taka discount');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `ticket` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `txnId` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `busId` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `phone`, `ticket`, `amount`, `txnId`, `email`, `busId`) VALUES
(32, '0190000000', 'g1, g2, ', '860', '321321', 'abdulmabud@gmail.com', '20');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `id` int(11) NOT NULL,
  `cityF` varchar(255) NOT NULL,
  `cityT` varchar(255) NOT NULL,
  `fare` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id`, `cityF`, `cityT`, `fare`) VALUES
(5, 'Dhaka', 'Mujibnagar', 450),
(9, 'Dhaka', 'Magura', 400),
(10, 'Dhaka', 'Sirajganj', 350),
(11, 'Rajshahi ', 'Dhaka', 500),
(12, 'Dinajpur', 'Dhaka', 600),
(13, 'Dhaka', 'Barisal', 400),
(14, 'Dhaka', 'Jaterpur', 500),
(15, 'Dhaka', 'Meherpur', 500);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ticket` varchar(255) NOT NULL,
  `busDate` varchar(255) NOT NULL,
  `busTime` varchar(255) NOT NULL,
  `busDesA` varchar(255) NOT NULL,
  `busDesB` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `email`, `ticket`, `busDate`, `busTime`, `busDesA`, `busDesB`, `status`) VALUES
(50, 'abdulmabud@gmail.com', 'c3, c4, ', '2018-12-12', '6.00 AM', 'Dhaka', 'Meherpur', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `id` int(11) NOT NULL,
  `state` varchar(255) NOT NULL,
  `val` int(11) NOT NULL DEFAULT '0',
  `txnId` varchar(255) DEFAULT NULL,
  `busId` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`id`, `state`, `val`, `txnId`, `busId`) VALUES
(1492, 'A1.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '24', '21'),
(1493, 'A2.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '24', '21'),
(1494, 'A3.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '24', '21'),
(1495, 'A4.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '24', '21'),
(1496, 'B1.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '30', '21'),
(1497, 'B2.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '30', '21'),
(1498, 'B3.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '2', '21'),
(1499, 'B4.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '2', '21'),
(1500, 'C1.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '1', '21'),
(1501, 'C2.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '1', '21'),
(1502, 'C3.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '30', '21'),
(1503, 'C4.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '30', '21'),
(1504, 'D1.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '30', '21'),
(1505, 'D2.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '30', '21'),
(1506, 'D3.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '1', '21'),
(1507, 'D4.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '1', '21'),
(1508, 'E1.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '19', '21'),
(1509, 'E2.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '19', '21'),
(1510, 'E3.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '30', '21'),
(1511, 'E4.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '30', '21'),
(1512, 'F1.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '2', '21'),
(1513, 'F2.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '2', '21'),
(1514, 'F3.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '1', '21'),
(1515, 'F4.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '1', '21'),
(1516, 'G1.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '30', '21'),
(1517, 'G2.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '30', '21'),
(1518, 'G3.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '2', '21'),
(1519, 'G4.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '2', '21'),
(1520, 'H1.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '27', '21'),
(1521, 'h2.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '27', '21'),
(1522, 'H3.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 0, '321321', '21'),
(1523, 'H4.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 0, '321321', '21'),
(1524, 'I1.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 0, '30', '21'),
(1525, 'I2.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 0, '30', '21'),
(1526, 'I3.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '33', '21'),
(1527, 'I4.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '33', '21'),
(1528, 'J1.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 0, '888654', '21'),
(1529, 'J2.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 0, '888654', '21'),
(1530, 'J3.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '28', '21'),
(1531, 'J4.2018-12-01.7.00 AM.Dhaka.Mujibnagar.20', 1, '28', '21'),
(1532, 'A1.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1533, 'A2.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1534, 'A3.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1535, 'A4.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1536, 'B1.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1537, 'B2.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1538, 'B3.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1539, 'B4.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1540, 'C1.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1541, 'C2.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1542, 'C3.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1543, 'C4.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1544, 'D1.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1545, 'D2.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1546, 'D3.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1547, 'D4.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1548, 'E1.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, '888654', '22'),
(1549, 'E2.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, '888654', '22'),
(1550, 'E3.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, '23432432', '22'),
(1551, 'E4.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, '23432432', '22'),
(1552, 'F1.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1553, 'F2.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1554, 'F3.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, '23432432', '22'),
(1555, 'F4.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1556, 'G1.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1557, 'G2.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1558, 'G3.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1559, 'G4.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1560, 'H1.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, '23423423', '22'),
(1561, 'h2.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, '23423423', '22'),
(1562, 'H3.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1563, 'H4.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1564, 'I1.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1565, 'I2.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1566, 'I3.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1567, 'I4.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1568, 'J1.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1569, 'J2.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1570, 'J3.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1571, 'J4.2018-12-01.7.00 AM.Dhaka.Jaterpur.21', 0, NULL, '22'),
(1572, 'A1.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1573, 'A2.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1574, 'A3.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1575, 'A4.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1576, 'B1.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1577, 'B2.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1578, 'B3.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1579, 'B4.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1580, 'C1.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1581, 'C2.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1582, 'C3.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, '43534534', '23'),
(1583, 'C4.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, '43534534', '23'),
(1584, 'D1.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1585, 'D2.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1586, 'D3.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1587, 'D4.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1588, 'E1.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1589, 'E2.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1590, 'E3.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1591, 'E4.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1592, 'F1.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1593, 'F2.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1594, 'F3.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1595, 'F4.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1596, 'G1.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1597, 'G2.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1598, 'G3.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1599, 'G4.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1600, 'H1.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1601, 'h2.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1602, 'H3.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1603, 'H4.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1604, 'I1.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1605, 'I2.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1606, 'I3.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1607, 'I4.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1608, 'J1.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1609, 'J2.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1610, 'J3.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1611, 'J4.2018-12-12.6.00 AM.Dhaka.Meherpur.22', 0, NULL, '23'),
(1612, 'A1.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1613, 'A2.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1614, 'A3.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1615, 'A4.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1616, 'B1.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1617, 'B2.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1618, 'B3.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1619, 'B4.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1620, 'C1.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1621, 'C2.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1622, 'C3.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 1, '2332343434', '24'),
(1623, 'C4.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 1, '2332343434', '24'),
(1624, 'D1.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1625, 'D2.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1626, 'D3.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1627, 'D4.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1628, 'E1.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1629, 'E2.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1630, 'E3.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, '2134234', '24'),
(1631, 'E4.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, '2134234', '24'),
(1632, 'F1.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1633, 'F2.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1634, 'F3.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1635, 'F4.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1636, 'G1.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1637, 'G2.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1638, 'G3.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1639, 'G4.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1640, 'H1.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1641, 'h2.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1642, 'H3.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1643, 'H4.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1644, 'I1.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1645, 'I2.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1646, 'I3.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1647, 'I4.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1648, 'J1.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1649, 'J2.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1650, 'J3.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1651, 'J4.2018-12-12.7.00 AM.Dhaka.Meherpur.23', 0, NULL, '24'),
(1652, 'A1.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1653, 'A2.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1654, 'A3.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1655, 'A4.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1656, 'B1.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1657, 'B2.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1658, 'B3.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1659, 'B4.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1660, 'C1.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1661, 'C2.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1662, 'C3.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1663, 'C4.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1664, 'D1.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1665, 'D2.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1666, 'D3.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1667, 'D4.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1668, 'E1.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1669, 'E2.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1670, 'E3.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1671, 'E4.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1672, 'F1.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1673, 'F2.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1674, 'F3.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1675, 'F4.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1676, 'G1.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1677, 'G2.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1678, 'G3.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1679, 'G4.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1680, 'H1.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1681, 'h2.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1682, 'H3.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1683, 'H4.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1684, 'I1.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1685, 'I2.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1686, 'I3.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1687, 'I4.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1688, 'J1.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1689, 'J2.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1690, 'J3.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25'),
(1691, 'J4.2018-12-12.8.00 AM.Dhaka.Meherpur.24', 0, NULL, '25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nid` int(11) DEFAULT NULL,
  `disAmount` int(11) DEFAULT '0',
  `disStatus` varchar(255) DEFAULT NULL,
  `tAmount` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `address`, `password`, `nid`, `disAmount`, `disStatus`, `tAmount`) VALUES
(2, 'Mabud', 'ratun$ymail.com', '01700000000', 'Meherpur', '123456', NULL, NULL, NULL, 0),
(3, 'Abdul Mabud', 'abdulmabud@gmail.com', '0190000000', 'Dhaka', '123456', NULL, 0, 'Currenly you are enjoying 100 taka discount', 2690),
(4, 'Shakil Shahrar', 'shakil@gmail.com', '01743918787', 'Mohammadpur', '123456', NULL, NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cancel`
--
ALTER TABLE `cancel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counteradmin`
--
ALTER TABLE `counteradmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `cancel`
--
ALTER TABLE `cancel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `counteradmin`
--
ALTER TABLE `counteradmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1692;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
