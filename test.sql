-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2022 at 04:42 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_detail`
--

CREATE TABLE `admin_detail` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_detail`
--

INSERT INTO `admin_detail` (`username`, `password`) VALUES
('[Admin]', '[Admin]'),
('Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `staff_detail`
--

CREATE TABLE `staff_detail` (
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_detail`
--

INSERT INTO `staff_detail` (`username`, `password`) VALUES
('staffid', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `std_details`
--

CREATE TABLE `std_details` (
  `Name` varchar(50) DEFAULT NULL,
  `RollNo` int(11) NOT NULL,
  `Department` varchar(50) DEFAULT NULL,
  `BookName` varchar(50) DEFAULT NULL,
  `InitialDate` date DEFAULT NULL,
  `Status` varchar(30) DEFAULT NULL,
  `renewalDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_details`
--

INSERT INTO `std_details` (`Name`, `RollNo`, `Department`, `BookName`, `InitialDate`, `Status`, `renewalDate`) VALUES
('sddla', 12, 'asdgm', 'dfg', '2022-11-02', 'Submited', '0000-00-00'),
('pavi', 123, 'asdfg', 'asdfg', '2022-11-02', 'Submited', '0000-00-00'),
('wertyu', 1234, 'asdfg', 'qwer', '2022-11-02', 'Submited', '0000-00-00'),
('qwertyuio', 12345, 'sdfghj', 'sdfgh', '2022-11-02', 'Submited', '0000-00-00'),
('saranya', 22137, 'information technology', 'python', '2022-11-09', 'Submited', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `std_details`
--
ALTER TABLE `std_details`
  ADD PRIMARY KEY (`RollNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
