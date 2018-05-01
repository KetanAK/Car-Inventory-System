-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2018 at 01:43 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `car1`
--

CREATE TABLE IF NOT EXISTS `car1` (
  `Serial` int(30) NOT NULL AUTO_INCREMENT,
  `Manufacturer` varchar(100) NOT NULL,
  `Modle` varchar(100) NOT NULL,
  `Count` int(30) NOT NULL,
  PRIMARY KEY (`Serial`),
  UNIQUE KEY `Modle` (`Modle`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `car1`
--

INSERT INTO `car1` (`Serial`, `Manufacturer`, `Modle`, `Count`) VALUES
(1, 'Maruti', 'WagonR', 2),
(2, 'TATA', 'Nano', 1);

-- --------------------------------------------------------

--
-- Table structure for table `car_manufacturer`
--

CREATE TABLE IF NOT EXISTS `car_manufacturer` (
  `Serial` int(30) NOT NULL AUTO_INCREMENT,
  `Manufacturer` varchar(100) NOT NULL,
  PRIMARY KEY (`Serial`),
  UNIQUE KEY `Manufacturer` (`Manufacturer`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `car_manufacturer`
--

INSERT INTO `car_manufacturer` (`Serial`, `Manufacturer`) VALUES
(14, 'BMW'),
(5, 'Maruti'),
(8, 'TATA');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
