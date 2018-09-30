-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 30, 2018 at 03:25 PM
-- Server version: 5.7.21
-- PHP Version: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oracooli`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

DROP TABLE IF EXISTS `user_profile`;
CREATE TABLE IF NOT EXISTS `user_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_reg_id` int(10) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `languages_know` varchar(255) NOT NULL,
  `mobile_number` int(11) NOT NULL,
  `current_qualification` varchar(255) NOT NULL,
  `desired_job` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `jobs` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `expertise` int(11) NOT NULL,
  `achievement` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `followers` varchar(255) NOT NULL,
  `following` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_UserRegId` (`user_reg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `user_reg_id`, `first_name`, `last_name`, `languages_know`, `mobile_number`, `current_qualification`, `desired_job`, `education`, `jobs`, `experience`, `designation`, `expertise`, `achievement`, `country`, `university`, `about`, `followers`, `following`, `profile_image`) VALUES
(1, 2, 'shaunak', 'datar', 'c,c++', 1111111111, 'BE', 'PHP', 'BE', 'NEo', '3', 'software Developer', 3, 2, 'India', 'marathwada University', 'i am php developer', '200', '400', '2016HT13403.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

DROP TABLE IF EXISTS `user_registration`;
CREATE TABLE IF NOT EXISTS `user_registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_activated` tinyint(1) NOT NULL DEFAULT '0',
  `code` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `username`, `email`, `password`, `is_activated`, `code`) VALUES
(1, 'shaunak', 'shaunak.datar@wwindia.com', 'shaunak@123', 0, '3ef64ddce54c31c'),
(2, 'shaunak', 'datarshaunak@gmail.com', 'shaunak@123', 0, 'ad848b6bafae837');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
