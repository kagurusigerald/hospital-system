-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 16, 2015 at 08:59 
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hostpital`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient_tb`
--

CREATE TABLE IF NOT EXISTS `patient_tb` (
`patient_id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_tb`
--

INSERT INTO `patient_tb` (`patient_id`, `pname`, `regno`, `email`, `mname`, `address`, `date`, `name`, `city`, `dob`) VALUES
(1, 'Brian', '12345', 'kenny2brian@gmail.com', 'Nanangwe', 'KIBULI', '2015-12-10', 'magemule Brian', 'Kampala', '2015-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
`booking_id` int(11) NOT NULL,
  `checkin` date NOT NULL,
  `room` text NOT NULL,
  `adult` int(11) NOT NULL,
  `checkout` date NOT NULL,
  `child0_5` int(11) NOT NULL,
  `child6_12` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(4, 'max', 'kenny24brian@gmail.com', '5b3b190c2cb0b4652d555a75d6b7af02'),
(5, 'simon magool', 'simonmagoola@yahoo.com', 'd15474caedfc3a4c1ed7ec9d63997c15'),
(6, 'Magemule Brian', 'kennybrian648@yahoo.com', '202cb962ac59075b964b07152d234b70'),
(7, 'max kenny', 'kenny2brian@gmail.com', '5b3b190c2cb0b4652d555a75d6b7af02'),
(8, 'emmanuel', 'emanuelbaliwa@gmail.com', '4a55c487c03c483e09ea3310ffc98bfd'),
(9, 'saidalix', 'ahmed@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient_tb`
--
ALTER TABLE `patient_tb`
 ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
 ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient_tb`
--
ALTER TABLE `patient_tb`
MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
