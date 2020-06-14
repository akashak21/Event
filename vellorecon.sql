-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2019 at 08:35 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vellorecon`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `eventname` varchar(20) NOT NULL,
  `eventtype` varchar(20) NOT NULL,
  `eventcategory` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `organizer` varchar(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `description` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `eventname`, `eventtype`, `eventcategory`, `date`, `month`, `year`, `organizer`, `title`, `contact`, `description`) VALUES
(8, 'fabsys technologys', 'workshop', 'engineering', '3', 'march', '2018', 'org2', 'Trigger 2019', 'gfdgd', 'asdfghjkl;'),
(9, 'India2020', 'conference', 'engineering', '7', 'april', '2019', 'org1', 'India2020', '0987654321', 'morning'),
(10, 'attack2019', 'seminor', 'engineering', '3', 'april', '2019', 'org2', 'attack 2019', '0987654321', 'black'),
(11, 'mission 2019', 'conference', 'mathematics', '7', 'september', '2019', 'org3', 'mission 2019', 'me', 'grand'),
(12, 'IPL20-20', 'seminor', 'law', '7', 'april', '2019', 'org4', 'IPL20-20', '0987654321', 'cricket'),
(13, 'business2019', 'workshop', 'business', '3', 'may', '2019', 'org5', 'business2019', '0987654321', 'business');

-- --------------------------------------------------------

--
-- Table structure for table `participate`
--

CREATE TABLE `participate` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `eventtype` varchar(20) NOT NULL,
  `eventcategory` varchar(20) NOT NULL,
  `organizer` varchar(20) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `paper` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participate`
--

INSERT INTO `participate` (`id`, `title`, `eventtype`, `eventcategory`, `organizer`, `pname`, `phone`, `email`, `cname`, `paper`) VALUES
(25, 'mission 2019', 'conference', 'mathematics', 'org3', 'gowtham', '9999999999', 'gowtham@fabhost.in', 'pec', 'Ceramics vendor Management system.docx'),
(26, 'attack 2019', 'seminor', 'engineering', 'org2', 'gowtham', '9999999999', 'gowtham@fabhost.in', 'pec', 'FARM FRESH VEGETABLE MARKET MANAGEMENT SYSTEM.docx'),
(27, 'India2020', 'conference', 'engineering', 'org1', 'gowtham', '9999999999', 'gowtham@fabhost.in', 'pec', 'Online Home service Management System.docx'),
(28, 'Trigger 2019', 'workshop', 'engineering', 'org2', 'gowtham', '9999999999', 'gowtham@fabhost.in', 'pec', 'SCRAP AND FABRICATION MANAGEMENT SYSTEM.docx');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`, `cpassword`) VALUES
(1, 'org1', 'gowtham@fabhost.in', '1144', '1144'),
(2, 'org2', 'naveen@fabhost.in', 'naveen', 'naveen'),
(3, 'org3', 'pandi@fabhost.in', '1234', '1234'),
(4, 'org4', 'mani@fabhost.in', '5555', '5555'),
(5, 'org5', 'aravind@fabhost.in', '6666', '6666');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participate`
--
ALTER TABLE `participate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `participate`
--
ALTER TABLE `participate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
