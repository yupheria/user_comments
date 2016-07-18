-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2015 at 11:47 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `comment_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `test_message`
--

CREATE TABLE IF NOT EXISTS `test_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hidden` int(11) DEFAULT '0',
  `deleted` int(11) DEFAULT '0',
  `parent` int(11) DEFAULT '0',
  `message` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `test_message`
--

INSERT INTO `test_message` (`id`, `hidden`, `deleted`, `parent`, `message`) VALUES
(1, 0, 0, 1, 'First Comment'),
(2, 0, 0, 1, 'Second Comment');

-- --------------------------------------------------------

--
-- Table structure for table `test_user`
--

CREATE TABLE IF NOT EXISTS `test_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hidden` int(11) DEFAULT '0',
  `deleted` int(11) DEFAULT '0',
  `name` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `test_user`
--

INSERT INTO `test_user` (`id`, `hidden`, `deleted`, `name`) VALUES
(1, 0, 0, 'First User');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
