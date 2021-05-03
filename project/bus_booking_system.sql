-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 21, 2020 at 07:09 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bus_booking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `UserName` varchar(20) NOT NULL,
  `froms` varchar(15) NOT NULL,
  `to` varchar(15) NOT NULL,
  `name` varchar(15) NOT NULL,
  `mobileno` bigint(10) NOT NULL,
  `date` date NOT NULL,
  `seatno` int(2) NOT NULL,
  `price` varchar(11) NOT NULL,
  `time` varchar(22) NOT NULL,
  KEY `UserName` (`UserName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`UserName`, `froms`, `to`, `name`, `mobileno`, `date`, `seatno`, `price`, `time`) VALUES
('idrish12', 'Palanpur', 'Ahmedabad', 'Karan Israni', 6562786580, '2020-06-24', 1, 'Price:800', 'Depature Time: 8:00 PM'),
('idrish12', 'Palanpur', 'Surat', 'Karan Israni', 6562786580, '2020-06-24', 2, 'Price:1500', 'Depature Time: 8:00 PM'),
('idrish12', 'Palanpur', 'Surat', 'Karan Israni', 6562786580, '2020-06-24', 3, 'Price:1500', 'Depature Time: 8:00 PM'),
('idrish12', 'Palanpur', 'Surat', 'Karan Israni', 9824615242, '2020-06-24', 13, 'Price:1500', 'Depature Time: 8:00 PM'),
('idrish12', 'Palanpur', 'Mahesana', 'Karan Israni', 9824615242, '2020-06-20', 13, 'Price:500', 'Depature Time: 8:00 PM'),
('tapan12', 'Palanpur', 'Surat', 'tapan', 6464646464, '2020-06-20', 1, 'Price:1500', 'Depature Time: 8:00 PM'),
('tapan12', 'Palanpur', 'Surat', 'tapan', 6464646464, '2020-06-20', 2, 'Price:1500', 'Depature Time: 8:00 PM'),
('tapan12', 'Palanpur', 'Surat', 'tapan', 6464646464, '2020-06-20', 50, 'Price:1500', 'Depature Time: 8:00 PM'),
('bk123', 'Palanpur', 'Surat', 'bhargvi', 7475747474, '2020-07-21', 6, 'Price:1500', 'Depature Time: 8:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  PRIMARY KEY (`id`,`UserName`),
  UNIQUE KEY `UserName` (`UserName`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `UserName`, `password`) VALUES
(1, 'karan@123', 'karan123'),
(23, 'vishal123', 'vishal12'),
(24, 'dixit123', 'dixit12'),
(25, 'idrish12', 'idrish12'),
(26, 'tapan12', 'tapan12'),
(27, 'bk123', 'bk1234');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  `mobileno` bigint(10) NOT NULL,
  `city` varchar(15) NOT NULL,
  PRIMARY KEY (`id`,`UserName`),
  UNIQUE KEY `UserName` (`UserName`),
  UNIQUE KEY `mobileno` (`mobileno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `Name`, `UserName`, `password`, `mobileno`, `city`) VALUES
(1, 'karan israni', 'karan@123', 'karan123', 9798979797, 'palanpur'),
(23, 'vishal israni', 'vishal123', 'vishal12', 8182818181, 'palanpur'),
(24, 'dixit', 'dixit123', 'dixit12', 7676767676, 'palanpur'),
(25, 'idrish khan', 'idrish12', 'idrish12', 8585858585, 'palanpur'),
(26, 'tapan', 'tapan12', 'tapan12', 7978787878, 'palanpur'),
(27, 'bhargvi', 'bk123', 'bk1234', 7475747474, 'Mahesana');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`UserName`) REFERENCES `registration` (`UserName`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_10` FOREIGN KEY (`UserName`) REFERENCES `registration` (`UserName`),
  ADD CONSTRAINT `login_ibfk_9` FOREIGN KEY (`id`) REFERENCES `registration` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
