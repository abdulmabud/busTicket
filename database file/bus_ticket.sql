-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2021 at 07:24 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus_ticket`
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
  `busDesB` varchar(255) DEFAULT NULL,
  `busType` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `busName`, `busDate`, `busTime`, `busDesA`, `busDesB`, `busType`) VALUES
(28, 'Royal Express', '2021-10-22', '8.00 AM', 'Dhaka', 'Mujibnagar', 'acBus'),
(35, 'Abdul Mabud', '2021-10-29', '10.00 PM', 'Dhaka', 'Dhaka', ''),
(36, 'Abdul Mabud', '2021-10-28', '10.00 PM', 'Dhaka', 'Dhaka', ''),
(37, 'Abdul Mabud', '2021-10-27', '10.00 PM', 'Dhaka', 'Dhaka', ''),
(38, 'Abdul Mabud', '2021-10-22', '7.00 AM', 'Dhaka', 'Dhaka', ''),
(50, 'Abdul Mabud', '2021-10-27', '7.00 AM', 'Dhaka', 'Dhaka', ''),
(51, 'Abdul Mabud', '2021-10-27', '7.00 AM', 'Dhaka', 'Dhaka', ''),
(52, 'Abdul Mabud', '2021-10-27', '7.00 AM', 'Dhaka', 'Dhaka', ''),
(53, 'Abdul Mabud', '2021-10-27', '7.00 AM', 'Dhaka', 'Dhaka', ''),
(54, 'Abdul Mabud', '2021-10-27', '7.00 AM', 'Dhaka', 'Dhaka', ''),
(55, 'Abdul Mabud', '2021-10-28', '7.00 AM', 'Dhaka', 'Dhaka', ''),
(56, 'Abdul Mabud', '2021-10-28', '7.00 AM', 'Dhaka', 'Dhaka', ''),
(57, 'Abdul Mabud', '2021-10-23', '7.00 AM', 'Dhaka', 'Dhaka', ''),
(58, 'updated bnus', '2021-10-13', '2.00 PM', 'Dhaka', 'Mujibnagar', ''),
(59, 'RB', '2021-10-31', '10.00 PM', 'Dhaka', 'Mujibnagar', 'nonAcBus'),
(60, 'RB', '2021-10-31', '7.00 AM', 'Dhaka', 'Mujibnagar', 'acBus'),
(61, 'RB', '2021-10-30', '7.00 AM', 'Dhaka', 'Mujibnagar', 'nonAcBus'),
(62, 'Abdul Mabud', '2021-10-30', '2.00 PM', 'Dhaka', 'Dhaka', ''),
(63, 'Abdul Mabud', '2021-11-01', '7.00 AM', 'Dhaka', 'Dhaka', 'nonAcBus'),
(64, 'Abdul Mabud', '2021-11-01', '10.00 PM', 'Dhaka', 'Mujibnagar', 'nonAcBus'),
(65, 'html', '2021-11-02', '7.00 AM', 'Dhaka', 'Mujibnagar', 'acBus'),
(66, 'html', '2021-11-02', '7.00 AM', 'Dhaka', 'Mujibnagar', 'acBus'),
(67, 'MB', '2021-11-03', '2.00 PM', 'Dhaka', 'Mujibnagar', 'nonAcBus'),
(68, 'New Bus For', '2021-10-24', '2.00 PM', 'Mujibnagar', 'Magura', 'acBus'),
(69, 'Royal Express', '2021-10-31', '10.00 PM', 'Mujibnagar', 'Dhaka', 'nonAcBus'),
(70, 'Royal Express', '2021-11-01', '2.00 PM', 'Dhaka', 'Mujibnagar', 'nonAcBus');

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
(2, '0150000000', 'c3, c4, ', 1000, '2332343434', 'abdulmabud@gmail.com', 23),
(3, '2342121312', 'c1, c1, c3, c3, c4, c4, d2, d2, e2, e2, ', 0, 'sdffffffffffffffffffffffff', 'abdulmabud@gmail.com', 25),
(4, 'j473', 'd3, d3, d4, d4, ', 1800, 'ytguyk', 'abdulmabud@gmail.com', 25),
(5, 'fdgdfg', 'e1, e1, e2, e2, ', 1800, 'drgdfg', 'abdulmabud@gmail.com', 25),
(6, '33', 'g3, g3, ', 900, 'drgdfg', 'abdulmabud@gmail.com', 25),
(7, '01711223344', 'h3, h3, h4, h4, ', 1800, 'drgdfg', 'abdulmabud@gmail.com', 25),
(8, '01930854808', 'h1, h1, h2, h2, ', 1800, 'drgdfg', 'abdulmabud@gmail.com', 25),
(9, '4234234', 'a1, a1, ', 900, 'drgdfgfsdf', 'abdulmabud@gmail.com', 25),
(10, '232234', 'a2, a2, ', 900, 'dfgdgsdf', 'abdulmabud@gmail.com', 25),
(11, '232234', '', 0, 'dfgdgsdf', 'abdulmabud@gmail.com', 25),
(12, '232234', '', 0, 'dfgdgsdf', 'abdulmabud@gmail.com', 25),
(13, '232234', '', 0, 'dfgdgsdf', 'abdulmabud@gmail.com', 25),
(14, '232234', '', 0, 'dfgdgsdf', 'abdulmabud@gmail.com', 25),
(15, '232234', '', 0, 'dfgdgsdf', 'abdulmabud@gmail.com', 25),
(16, '3123234234', 'a1, ', 450, 'drgdfgaaa', 'abdulmabud@gmail.com', 26),
(17, '01930854', 'a2, ', 450, 'drgdfgfsdf', 'abdulmabud@gmail.com', 26),
(18, '01930854sdf', '', 0, 'drgdfgfsdfswdfs', 'user@abdulmabud.com', 58),
(19, '3213', '', 0, 'drgdfgsdf', 'user@abdulmabud.com', 63),
(20, '342343', '', 0, 'fsdfsdfsdf', 'user@abdulmabud.com', 63),
(21, '324234', '', 0, 'sdfsdfsd', 'user@abdulmabud.com', 63),
(22, '23421', '', 0, 'drgdfg12', 'user@abdulmabud.com', 63),
(23, '23421', '', 0, 'drgdfg12', 'user@abdulmabud.com', 63),
(24, '23421', '', 0, 'drgdfg12', 'user@abdulmabud.com', 63),
(25, '23421', '', 0, 'drgdfg12', 'user@abdulmabud.com', 63),
(26, '23421', '', 0, 'drgdfg12', 'user@abdulmabud.com', 63),
(27, '23421', '', 0, 'drgdfg12', 'user@abdulmabud.com', 63),
(28, '23421', '', 0, 'drgdfg12', 'user@abdulmabud.com', 63),
(29, '3242342', 'b3, b4, ', 800, 'SDFSDF', 'user@abdulmabud.com', 66),
(30, '324234', 'g1, g2, ', 800, 'sdfsdf11', 'user@abdulmabud.com', 66),
(31, '23213', 'j4, ', 400, 'rwerewrew', 'user@abdulmabud.com', 66),
(32, 'fddsfds', 'c3, c4, ', 800, 'gsdfgsdf', 'user@abdulmabud.com', 66),
(33, 'dsdsa', 'a1, ', 400, 'drgdfg222', 'user@abdulmabud.com', 66),
(34, '334', 'b1, ', 400, 'gfdgdf', 'user@abdulmabud.com', 66),
(35, '42343', 'c1, c2, ', 800, 'fsdfsdf', 'user@abdulmabud.com', 66),
(36, '01711223344', 'e1, ', 400, 'drgdfgfsdf', 'user@abdulmabud.com', 66),
(37, '+8801930854808', 'f1, ', 400, 'dfgdgsdf', 'user@abdulmabud.com', 66),
(38, '01930854808', 'g4, ', 400, 'drgdfgfsdf', 'user@abdulmabud.com', 66),
(39, '01930854808', 'j2, ', 400, 'drgdfgfsdf', 'user@abdulmabud.com', 66),
(40, '+8801930854808', 'd3, d4, ', 0, 'drgdfgfsdf', 'user@abdulmabud.com', 69),
(41, '34334', 'g1, ', 300, 'ssfdsfsd', 'user@abdulmabud.com', 69),
(42, 'sfdsdf', 'g3, ', 400, 'sdfsdf', 'user@abdulmabud.com', 69);

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
  `disAmount` int(11) NOT NULL DEFAULT 0,
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
(32, '0190000000', 'g1, g2, ', '860', '321321', 'abdulmabud@gmail.com', '20'),
(48, '01930854sdf', '', '0', 'drgdfgfsdfswdfs', 'user@abdulmabud.com', '58'),
(50, '342343', '', '0', 'fsdfsdfsdf', 'user@abdulmabud.com', '63'),
(51, '324234', '', '0', 'sdfsdfsd', 'user@abdulmabud.com', '63'),
(52, '23421', '', '0', 'drgdfg12', 'user@abdulmabud.com', '63'),
(53, '23421', '', '0', 'drgdfg12', 'user@abdulmabud.com', '63'),
(54, '23421', '', '0', 'drgdfg12', 'user@abdulmabud.com', '63'),
(55, '23421', '', '0', 'drgdfg12', 'user@abdulmabud.com', '63'),
(56, '23421', '', '0', 'drgdfg12', 'user@abdulmabud.com', '63'),
(57, '23421', '', '0', 'drgdfg12', 'user@abdulmabud.com', '63'),
(58, '23421', '', '0', 'drgdfg12', 'user@abdulmabud.com', '63');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `description` text DEFAULT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `name`, `description`, `status`) VALUES
(16, 'Dhaka', NULL, 1),
(17, 'Mujibnagar', NULL, 1),
(18, 'Magura', NULL, 1);

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
(51, 'abdulmabud@gmail.com', 'c1, c1, c3, c3, c4, c4, d2, d2, e2, e2, ', '2021-10-21', '6.00 AM', 'Dhaka', 'Mujibnagar', 'Rejected'),
(52, 'abdulmabud@gmail.com', 'd3, d3, d4, d4, ', '2021-10-21', '6.00 AM', 'Dhaka', 'Mujibnagar', 'Accepted'),
(53, 'abdulmabud@gmail.com', 'e1, e1, e2, e2, ', '2021-10-21', '6.00 AM', 'Dhaka', 'Mujibnagar', 'Pending'),
(54, 'abdulmabud@gmail.com', 'g3, g3, ', '2021-10-21', '6.00 AM', 'Dhaka', 'Mujibnagar', 'Pending'),
(55, 'abdulmabud@gmail.com', 'h3, h3, h4, h4, ', '2021-10-21', '6.00 AM', 'Dhaka', 'Mujibnagar', 'Accepted'),
(56, 'abdulmabud@gmail.com', 'h1, h1, h2, h2, ', '2021-10-21', '6.00 AM', 'Dhaka', 'Mujibnagar', 'Accepted'),
(57, 'abdulmabud@gmail.com', 'a1, a1, ', '2021-10-21', '6.00 AM', 'Dhaka', 'Mujibnagar', 'Pending'),
(58, 'abdulmabud@gmail.com', 'a2, a2, ', '2021-10-21', '6.00 AM', 'Dhaka', 'Mujibnagar', 'Pending'),
(59, 'abdulmabud@gmail.com', '', '2021-10-21', '6.00 AM', 'Dhaka', 'Mujibnagar', 'Accepted'),
(60, 'abdulmabud@gmail.com', '', '2021-10-21', '6.00 AM', 'Dhaka', 'Mujibnagar', 'Accepted'),
(61, 'abdulmabud@gmail.com', '', '2021-10-21', '6.00 AM', 'Dhaka', 'Mujibnagar', 'Accepted'),
(62, 'abdulmabud@gmail.com', '', '2021-10-21', '6.00 AM', 'Dhaka', 'Mujibnagar', 'Accepted'),
(63, 'abdulmabud@gmail.com', '', '2021-10-21', '6.00 AM', 'Dhaka', 'Mujibnagar', 'Accepted'),
(64, 'abdulmabud@gmail.com', 'a1, ', '2021-10-22', '7.00 AM', 'Dhaka', 'Mujibnagar', 'Rejected'),
(65, 'abdulmabud@gmail.com', 'a2, ', '2021-10-22', '7.00 AM', 'Dhaka', 'Mujibnagar', 'Accepted'),
(77, 'user@abdulmabud.com', 'b3, b4, ', '2021-11-03', '2.00 PM', 'Dhaka', 'Mujibnagar', 'Accepted'),
(78, 'user@abdulmabud.com', 'g1, g2, ', '2021-11-03', '2.00 PM', 'Dhaka', 'Mujibnagar', 'Rejected'),
(79, 'user@abdulmabud.com', 'j4, ', '2021-11-03', '2.00 PM', 'Dhaka', 'Mujibnagar', 'Accepted'),
(80, 'user@abdulmabud.com', 'c3, c4, ', '2021-11-03', '2.00 PM', 'Dhaka', 'Mujibnagar', 'Rejected'),
(81, 'user@abdulmabud.com', 'a1, ', '2021-11-03', '2.00 PM', 'Dhaka', 'Mujibnagar', 'Rejected'),
(82, 'user@abdulmabud.com', 'b1, ', '2021-11-03', '2.00 PM', 'Dhaka', 'Mujibnagar', 'Rejected'),
(83, 'user@abdulmabud.com', 'c1, c2, ', '2021-11-03', '2.00 PM', 'Dhaka', 'Mujibnagar', 'Accepted'),
(84, 'user@abdulmabud.com', 'e1, ', '2021-11-03', '2.00 PM', 'Dhaka', 'Mujibnagar', 'Accepted'),
(85, 'user@abdulmabud.com', 'f1, ', '2021-11-03', '2.00 PM', 'Dhaka', 'Mujibnagar', 'Rejected'),
(86, 'user@abdulmabud.com', 'g4, ', '2021-11-03', '2.00 PM', 'Dhaka', 'Mujibnagar', 'Accepted'),
(87, 'user@abdulmabud.com', 'j2, ', '2021-11-03', '2.00 PM', 'Dhaka', 'Mujibnagar', 'Accepted'),
(88, 'user@abdulmabud.com', 'd3, d4, ', '2021-10-31', '2.00 PM', 'Dhaka', 'Magura', 'Rejected'),
(89, 'user@abdulmabud.com', 'g1, ', '2021-10-31', '2.00 PM', 'Dhaka', 'Magura', 'Accepted'),
(90, 'user@abdulmabud.com', 'g3, ', '2021-11-01', '2.00 PM', 'Dhaka', 'Mujibnagar', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` int(11) NOT NULL,
  `cityF` varchar(255) NOT NULL,
  `cityT` varchar(255) NOT NULL,
  `fare` int(11) DEFAULT NULL,
  `busType` varchar(40) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `cityF`, `cityT`, `fare`, `busType`, `status`) VALUES
(5, 'Mujibnagar', 'Magura', 420, 'nonAcBus', 0),
(9, 'Dhaka', 'Mujibnagar', 400, 'nonAcBus', 1),
(10, 'Dhaka', 'Sirajganj', 350, '', 1),
(12, 'Magura', 'Dhaka', 600, 'nonAcBus', 0),
(14, 'Dhaka', 'Jaterpur', 500, '', 1),
(15, 'Dhaka', 'Meherpur', 500, '', 1),
(17, 'Dhaka', 'Magura', 600, 'acBus', 1),
(18, 'Dhaka', 'Magura', 300, 'nonAcBus', 1);

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `id` int(11) NOT NULL,
  `state` varchar(255) NOT NULL,
  `val` int(11) NOT NULL DEFAULT 0,
  `txnId` varchar(255) DEFAULT NULL,
  `busId` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`id`, `state`, `val`, `txnId`, `busId`) VALUES
(1812, 'A1.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1813, 'A2.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1814, 'A3.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1815, 'A4.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1816, 'B1.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1817, 'B2.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1818, 'B3.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1819, 'B4.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1820, 'C1.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1821, 'C2.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1822, 'C3.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1823, 'C4.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1824, 'D1.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1825, 'D2.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1826, 'D3.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1827, 'D4.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1828, 'E1.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1829, 'E2.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1830, 'E3.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1831, 'E4.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1832, 'F1.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1833, 'F2.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1834, 'F3.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1835, 'F4.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1836, 'G1.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1837, 'G2.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1838, 'G3.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1839, 'G4.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1840, 'H1.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1841, 'h2.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1842, 'H3.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1843, 'H4.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1844, 'I1.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1845, 'I2.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1846, 'I3.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1847, 'I4.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1848, 'J1.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1849, 'J2.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1850, 'J3.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1851, 'J4.2021-10-22.8.00 AM.Dhaka.Mujibnagar.27', 0, NULL, '28'),
(1932, 'A1.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1933, 'A2.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1934, 'A3.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1935, 'A4.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1936, 'B1.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1937, 'B2.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1938, 'B3.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1939, 'B4.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1940, 'C1.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1941, 'C2.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1942, 'C3.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1943, 'C4.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1944, 'D1.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1945, 'D2.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1946, 'D3.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1947, 'D4.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1948, 'E1.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1949, 'E2.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1950, 'E3.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1951, 'E4.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1952, 'F1.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1953, 'F2.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1954, 'F3.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1955, 'F4.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1956, 'G1.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1957, 'G2.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1958, 'G3.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1959, 'G4.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1960, 'H1.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1961, 'h2.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1962, 'H3.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1963, 'H4.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1964, 'I1.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1965, 'I2.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1966, 'I3.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1967, 'I4.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1968, 'J1.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1969, 'J2.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1970, 'J3.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(1971, 'J4.2021-10-31.7.00 AM.Dhaka.Mujibnagar.59', 0, NULL, '60'),
(2132, 'A1.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2133, 'A2.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2134, 'A3.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2135, 'A4.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2136, 'B1.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2137, 'B2.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2138, 'B3.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2139, 'B4.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2140, 'C1.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2141, 'C2.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2142, 'C3.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2143, 'C4.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2144, 'D1.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2145, 'D2.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2146, 'D3.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2147, 'D4.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2148, 'E1.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2149, 'E2.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2150, 'E3.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2151, 'E4.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2152, 'F1.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2153, 'F2.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2154, 'F3.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2155, 'F4.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2156, 'G1.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2157, 'G2.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2158, 'G3.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2159, 'G4.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2160, 'H1.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2161, 'h2.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2162, 'H3.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2163, 'H4.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2164, 'I1.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2165, 'I2.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2166, 'I3.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2167, 'I4.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2168, 'J1.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2169, 'J2.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2170, 'J3.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2171, 'J4.2021-11-02.7.00 AM.Dhaka.Mujibnagar.65', 0, NULL, '66'),
(2172, 'A1.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, 'drgdfg222', '67'),
(2173, 'A2.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, NULL, '67'),
(2174, 'A3.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, NULL, '67'),
(2175, 'A4.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, NULL, '67'),
(2176, 'B1.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, 'gfdgdf', '67'),
(2177, 'B2.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, NULL, '67'),
(2178, 'B3.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 1, 'SDFSDF', '67'),
(2179, 'B4.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 1, 'SDFSDF', '67'),
(2180, 'C1.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 1, 'fsdfsdf', '67'),
(2181, 'C2.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 1, 'fsdfsdf', '67'),
(2182, 'C3.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, 'gsdfgsdf', '67'),
(2183, 'C4.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, 'gsdfgsdf', '67'),
(2184, 'D1.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, NULL, '67'),
(2185, 'D2.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, NULL, '67'),
(2186, 'D3.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, NULL, '67'),
(2187, 'D4.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, NULL, '67'),
(2188, 'E1.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, 'drgdfgfsdf', '67'),
(2189, 'E2.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, NULL, '67'),
(2190, 'E3.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, NULL, '67'),
(2191, 'E4.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, NULL, '67'),
(2192, 'F1.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, 'dfgdgsdf', '67'),
(2193, 'F2.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, NULL, '67'),
(2194, 'F3.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, NULL, '67'),
(2195, 'F4.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, NULL, '67'),
(2196, 'G1.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, 'sdfsdf11', '67'),
(2197, 'G2.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, 'sdfsdf11', '67'),
(2198, 'G3.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, NULL, '67'),
(2199, 'G4.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, 'drgdfgfsdf', '67'),
(2200, 'H1.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, NULL, '67'),
(2201, 'h2.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, NULL, '67'),
(2202, 'H3.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, NULL, '67'),
(2203, 'H4.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, NULL, '67'),
(2204, 'I1.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, NULL, '67'),
(2205, 'I2.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, NULL, '67'),
(2206, 'I3.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, NULL, '67'),
(2207, 'I4.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, NULL, '67'),
(2208, 'J1.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, NULL, '67'),
(2209, 'J2.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, 'drgdfgfsdf', '67'),
(2210, 'J3.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 0, NULL, '67'),
(2211, 'J4.2021-11-03.2.00 PM.Dhaka.Mujibnagar.66', 1, 'rwerewrew', '67'),
(2212, 'A1.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2213, 'A2.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2214, 'A3.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2215, 'A4.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2216, 'B1.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2217, 'B2.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2218, 'B3.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2219, 'B4.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2220, 'C1.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2221, 'C2.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2222, 'C3.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2223, 'C4.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2224, 'D1.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2225, 'D2.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2226, 'D3.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2227, 'D4.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2228, 'E1.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2229, 'E2.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2230, 'E3.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2231, 'E4.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2232, 'F1.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2233, 'F2.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2234, 'F3.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2235, 'F4.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2236, 'G1.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2237, 'G2.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2238, 'G3.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2239, 'G4.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2240, 'H1.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2241, 'h2.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2242, 'H3.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2243, 'H4.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2244, 'I1.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2245, 'I2.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2246, 'I3.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2247, 'I4.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2248, 'J1.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2249, 'J2.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2250, 'J3.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2251, 'J4.2021-10-24.2.00 PM.Mujibnagar.Magura.67', 0, NULL, '68'),
(2252, 'D1.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2253, 'D2.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2254, 'D3.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2255, 'D4.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2256, 'B1.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2257, 'B2.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2258, 'B3.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2259, 'B4.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2260, 'C1.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2261, 'C2.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2262, 'C3.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2263, 'C4.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2264, 'D1.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2265, 'D2.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2266, 'D3.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2267, 'D4.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2268, 'D1.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2269, 'D2.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2270, 'D3.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2271, 'D4.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2272, 'D1.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2273, 'D2.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2274, 'D3.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2275, 'D4.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2276, 'D1.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2277, 'D2.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2278, 'D3.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2279, 'D4.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2280, 'D1.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2281, 'D2.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2282, 'D3.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2283, 'D4.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2284, 'D1.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2285, 'D2.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2286, 'D3.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2287, 'D4.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2288, 'D1.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2289, 'D2.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2290, 'D3.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2291, 'D4.2021-10-31.10.00 PM.Mujibnagar.Dhaka.68', 0, NULL, '69'),
(2292, 'A1.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2293, 'A2.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2294, 'A3.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2295, 'A4.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2296, 'B1.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2297, 'B2.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2298, 'B3.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2299, 'B4.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2300, 'C1.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2301, 'C2.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2302, 'C3.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2303, 'C4.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2304, 'D1.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2305, 'D2.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2306, 'D3.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, 'drgdfgfsdf', '70'),
(2307, 'D4.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, 'drgdfgfsdf', '70'),
(2308, 'E1.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2309, 'E2.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2310, 'E3.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2311, 'E4.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2312, 'F1.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2313, 'F2.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2314, 'F3.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2315, 'F4.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2316, 'G1.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 1, 'ssfdsfsd', '70'),
(2317, 'G2.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2318, 'G3.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 1, 'sdfsdf', '70'),
(2319, 'G4.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2320, 'H1.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2321, 'H2.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2322, 'H3.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2323, 'H4.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2324, 'I1.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2325, 'I2.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2326, 'I3.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2327, 'I4.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2328, 'J1.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2329, 'J2.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2330, 'J3.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70'),
(2331, 'J4.2021-11-01.2.00 PM.Dhaka.Mujibnagar.69', 0, NULL, '70');

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
  `disAmount` int(11) DEFAULT 0,
  `disStatus` varchar(255) DEFAULT NULL,
  `tAmount` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `address`, `password`, `nid`, `disAmount`, `disStatus`, `tAmount`) VALUES
(2, 'Mabud', 'ratun$ymail.com', '01700000000', 'Meherpur', '123456', NULL, NULL, NULL, 0),
(3, 'Abdul Mabud', 'abdulmabud@gmail.com', '0190000000', 'Dhaka', '123456', NULL, 0, 'Currenly you are enjoying 100 taka discount', 8540),
(4, 'Shakil Shahrar', 'shakil@gmail.com', '01743918787', 'Mohammadpur', '123456', NULL, NULL, NULL, 0),
(5, 'admin@abdulmabud.com', 'user@abdulmabud.com', '012458455', 'Mohammadpur', '123456', NULL, 0, NULL, 5100);

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
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `cancel`
--
ALTER TABLE `cancel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2332;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
