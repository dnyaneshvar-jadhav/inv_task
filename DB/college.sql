-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2014 at 06:29 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `Firstname` varchar(100) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  `Mobile` int(12) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `Firstname`, `Lastname`, `Mobile`, `Email`, `Password`) VALUES
(1, 'dnyaneshvar', 'jadhavdj', 214748364, 'dnyanesh@gmail.com', '123456'),
(2, 'ganesh', 'jagtap', 2147483647, 'ganesh@jagtap.com', '56789'),
(3, 'suyog', 'kales', 2147483647, 'kale@suyog.com', '45678'),
(4, 'shivajimore', 'moreshivaji', 2147483647, 'saj@gmail.com', 'shivaji'),
(5, 'riteshpowar', 'pawar', 2147483647, 'ritesh@gmail.com', '12345'),
(6, 'vikas', 'jakate', 2147483647, 'vikas@gmail.com', '56789'),
(7, 'ruturaj', 'jape', 23719387, 'rutu@gmail.com', 'ruturaj'),
(8, 'avinash', 'jadhav', 2147483647, 'avi@gmail.com', 'avinash'),
(9, 'shreyas', 'jadhav', 2147483647, 'sree@gmail.com', 'shreyasjadhav');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
