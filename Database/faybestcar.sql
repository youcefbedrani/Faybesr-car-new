-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2023 at 10:34 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faybestcar`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcard`
--

CREATE TABLE `addcard` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addcard`
--

INSERT INTO `addcard` (`id`, `name`, `price`) VALUES
(7, ' Audi A1 ', ' 3,000,000 dz');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) UNSIGNED NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `Describetion` varchar(60) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `Date` date DEFAULT NULL,
  `comment` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `type_car` varchar(255) NOT NULL,
  `km` varchar(255) NOT NULL,
  `transi` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `color` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `used` varchar(255) NOT NULL,
  `star` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `type_car`, `km`, `transi`, `image`, `color`, `year`, `used`, `star`, `location`) VALUES
(20, 'Audi A1', '3,000,000 dz', 'petrole', '1400', 'auto', './insert_image/audi1.jpeg', 'black', 2018, 'new', '9', 'djelfa'),
(21, 'forgo', '', '', '', '', './insert_image/', '', 0, '', '', ''),
(22, '', '', '', '', '', './insert_image/audi1.jpeg', '', 0, '', '', ''),
(23, '', '', '', '', '', './insert_image/', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `FNAME` varchar(50) NOT NULL,
  `LNAME` varchar(50) NOT NULL,
  `EMAIL` varchar(60) NOT NULL,
  `ADRESSE` varchar(60) NOT NULL,
  `PNUMBER` int(11) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `FNAME`, `LNAME`, `EMAIL`, `ADRESSE`, `PNUMBER`, `PASSWORD`) VALUES
(1, 'az', 'az', 'azeezaaze@sfsdf', 'efrfzrdf', 56416352, '45254246'),
(2, 'az', 'az', 'azeezaaze@sfsdf', 'efrfzrdf', 56416352, '__'),
(3, 'az', 'az', 'azeezaaze@sfsdf', 'efrfzrdf', 56416352, '__'),
(4, 'az', 'az', 'azeezaaze@sfsdf', 'efrfzrdf', 56416352, '&'),
(5, 'az', 'az', 'azeezaaze@sfsdf', 'efrfzrdf', 56416352, '&'),
(6, 'az', 'az', 'azeezaaze@sfsdf', 'efrfzrdf', 56416352, '&&');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcard`
--
ALTER TABLE `addcard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcard`
--
ALTER TABLE `addcard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
