-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2021 at 12:07 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE IF NOT EXISTS `booking_details` (
  `dateBooking` date NOT NULL,
  `id` int(11) NOT NULL,
  `destinationFrom` varchar(250) NOT NULL,
  `destinationTo` varchar(250) NOT NULL,
  `dateTravel` date NOT NULL,
  `userName` varchar(250) NOT NULL,
  `number` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobileNumber` int(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`dateBooking`, `id`, `destinationFrom`, `destinationTo`, `dateTravel`, `userName`, `number`, `email`, `mobileNumber`) VALUES
('2021-07-04', 3, 'Johor', 'Kuala Lumpur', '2021-07-23', 'Farah Izzati Binti Abu Bakar', '971228015818', 'abfarahizzati@gmail.com', 177027950),
('2021-07-04', 4, 'Johor', 'Pahang', '2021-07-23', 'Farah Izzati Binti Abu Bakar', '971228015818', 'abfarahizzati@gmail.com', 177027950),
('2021-07-04', 5, 'Melaka', 'Selangor', '2021-08-20', 'Muhammad Ali Bin Abu', '880515021369', 'ali@gmail.com', 147853664),
('2021-07-04', 6, 'Kuala Lumpur', 'Perlis', '2021-07-05', 'Muhammad Ali Bin Abu', '880515021369', 'ali@gmail.com', 147853664);

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE IF NOT EXISTS `userdetails` (
  `id` int(11) NOT NULL,
  `userName` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `mobileNumber` int(25) NOT NULL,
  `password` varchar(250) NOT NULL,
  `passwordConfirmation` varchar(250) NOT NULL,
  `number` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`id`, `userName`, `email`, `gender`, `mobileNumber`, `password`, `passwordConfirmation`, `number`) VALUES
(1, 'Farah Izzati Binti Abu Bakar', 'abfarahizzati@gmail.com', 'Female', 177027950, '123', '123', '971228000321'),
(3, 'Admin Bus Booking', 'admin@gmail.com.my', 'Female', 123456789, '123', '123', 'unknown'),
(7, 'Muhammad Ali Bin Abu', 'ali@gmail.com', 'Male', 147853664, '123', '123', '880515021369');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
