-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 18, 2018 at 11:06 AM
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
-- Table structure for table `tent`
--

CREATE TABLE IF NOT EXISTS `tent` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(30) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `service` varchar(10000) NOT NULL,
  `img` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tent`
--

