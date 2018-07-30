-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 17, 2018 at 09:15 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `psignup`
--

CREATE TABLE IF NOT EXISTS `psignup` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `profession` varchar(500) NOT NULL,
  `service` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `psignup`
--

INSERT INTO `psignup` (`id`, `name`, `email`, `password`, `mobile`, `city`, `profession`, `service`) VALUES
(2, 'Jitendra Kumar', 'jitendrakumar10898@gmail.com', 'jkjkjk', '9760094278', 'bijnor', 'Tent House', ''),
(3, 'Jitendra Kumar', 'k@gmail.com', 'mk', '9760094278', 'bijnor', 'Banquet Hall', 'hiii');
