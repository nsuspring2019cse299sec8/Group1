-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2019 at 11:10 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(20) NOT NULL,
  `GMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `USERNAME`, `GMAIL`, `PASSWORD`) VALUES
(2, 'admin', 'admin1234@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `product_insert_table`
--

CREATE TABLE `product_insert_table` (
  `ID` int(100) NOT NULL,
  `PRODUCT_NAME` varchar(100) NOT NULL,
  `PRODUCT_ID` int(50) NOT NULL,
  `PRODUCT_PRICE` varchar(50) NOT NULL,
  `PRODUCT_UPDATE_PRICE` varchar(50) NOT NULL,
  `IMAGE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_insert_table`
--

INSERT INTO `product_insert_table` (`ID`, `PRODUCT_NAME`, `PRODUCT_ID`, `PRODUCT_PRICE`, `PRODUCT_UPDATE_PRICE`, `IMAGE`) VALUES
(11, 'i-phone-10s', 159, '99990', '85000', 'samsang 01.PNG'),
(12, 'i-phone-6', 247, '65000', '60000', 'i phone 5s.PNG'),
(13, 'i-phone-x', 368, '99000', '95000', 'i phone x.PNG'),
(14, 'Samsung-J7', 785, '22000', '21500', 'samsang 01.PNG'),
(15, 'Samsung-m10', 458, '10999', '10400', 'i phone x.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product_insert_table`
--
ALTER TABLE `product_insert_table`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_insert_table`
--
ALTER TABLE `product_insert_table`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
