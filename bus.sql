-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2018 at 08:52 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `allusers`
--

CREATE TABLE `allusers` (
  `id` int(20) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allusers`
--

INSERT INTO `allusers` (`id`, `full_name`, `username`, `email`, `password`, `role`) VALUES
(1, 'Protik Hore', 'protik', 'protik.hore@gmail.com', '123456', 'admin'),
(2, 'Ratan', 'ratan', 'shuab.ratan@gmail.com', '1234567', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `availablebuses`
--

CREATE TABLE `availablebuses` (
  `id` int(20) NOT NULL,
  `bus_type` varchar(30) NOT NULL,
  `deprature_time` varchar(20) NOT NULL,
  `available_seat` int(30) NOT NULL,
  `price` int(20) NOT NULL,
  `selected_seat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `availablebuses`
--

INSERT INTO `availablebuses` (`id`, `bus_type`, `deprature_time`, `available_seat`, `price`, `selected_seat`) VALUES
(1, 'Ac', '3 PM', 5, 300, '\'1_2\', \'1_4\''),
(2, 'Non Ac', '5 PM', 20, 500, '\'1_2\', \'4_2\''),
(8, 'Ac', '6 Pm', 1, 300, '2_4, 3_1, 3_2'),
(10, 'Ac', '6 Pm', 2, 100, '3_4, 3_5'),
(12, 'Hyundai', '10 PM', 20, 1000, '\'1_1\'');

-- --------------------------------------------------------

--
-- Table structure for table `searchbuses`
--

CREATE TABLE `searchbuses` (
  `id` int(20) NOT NULL,
  `deprature` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `searchbuses`
--

INSERT INTO `searchbuses` (`id`, `deprature`, `destination`, `date`, `status`) VALUES
(1, 'Dhaka', 'Sherpur', '2017-07-15', 1),
(2, 'Dhaka', 'Sylhet', '2017-07-25', 1),
(3, 'Mymensingh', 'Dhaka', '2017-07-05', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ID` int(20) NOT NULL,
  `seat_number` varchar(200) NOT NULL,
  `total_price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`ID`, `seat_number`, `total_price`) VALUES
(1, '2_2', 600),
(2, '2_2', 600),
(3, '2_2', 600),
(4, '2_4, 3_1, 3_2', 400),
(5, '2_4, 3_5', 550),
(6, '4_4', 50),
(43, '\'2_1\'', 1000),
(44, '\'3_1\'', 50),
(45, '\'3_1\'', 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allusers`
--
ALTER TABLE `allusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `availablebuses`
--
ALTER TABLE `availablebuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `searchbuses`
--
ALTER TABLE `searchbuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allusers`
--
ALTER TABLE `allusers`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `availablebuses`
--
ALTER TABLE `availablebuses`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `searchbuses`
--
ALTER TABLE `searchbuses`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
