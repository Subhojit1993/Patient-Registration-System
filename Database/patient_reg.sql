-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2016 at 07:38 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `patient_reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient_register`
--

CREATE TABLE IF NOT EXISTS `patient_register` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `age` int(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `cnct` double NOT NULL,
  `txtinfo` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `patient_register`
--

INSERT INTO `patient_register` (`id`, `fname`, `lname`, `age`, `dob`, `gender`, `cnct`, `txtinfo`) VALUES
(3, 'Subhojit', 'Debnath', 23, '1993-09-09', 'male', 9051051021, 'Cough and Cold'),
(23, 'Shankhadeep', 'Ghosal', 23, '1994-03-25', 'male', 9674699241, 'Please send an ambulance.\r\nPressure became high.'),
(24, 'Ayan', 'Some', 23, '1994-01-02', 'male', 9877564456, 'I am having fever right now. Measured the temperature with the thermometer. Its reached at 104 Degree Celsius.'),
(25, 'Atanu', 'Chowdhury', 23, '1994-02-23', 'male', 8420545544, 'Please help! Having Pain behind my head.'),
(26, 'Prashant', 'Tamang', 25, '1991-02-02', 'male', 9767543345, 'I cant feel my legs. Please help me!');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
