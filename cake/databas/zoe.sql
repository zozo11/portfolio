-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2015 at 01:02 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zoe`
--

-- --------------------------------------------------------

--
-- Table structure for table `love_cup`
--

CREATE TABLE IF NOT EXISTS `love_cup` (
  `name` varchar(25) NOT NULL,
  `order` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `love_cup`
--

INSERT INTO `love_cup` (`name`, `order`, `date`, `email`) VALUES
('Zoe', '1 cup cake ,1 chocolate cake', '2015-05-23', 'zoe@yahoo.com'),
('zoe', 'crown one', '2015-05-30', ''),
('zoe', 'one crown', '2015-05-16', 'zoe@zoe.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
