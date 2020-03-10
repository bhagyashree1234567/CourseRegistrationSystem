-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 19, 2019 at 11:07 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty_info`
--

DROP TABLE IF EXISTS `faculty_info`;
CREATE TABLE IF NOT EXISTS `faculty_info` (
  `faculty_id` varchar(9) NOT NULL,
  `username` char(30) NOT NULL,
  `password` varchar(18) NOT NULL,
  `phone_no` int(12) NOT NULL,
  `position_title` char(20) NOT NULL,
  `department` char(30) NOT NULL,
  `office_hours` varchar(30) NOT NULL,
  PRIMARY KEY (`faculty_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_info`
--

INSERT INTO `faculty_info` (`faculty_id`, `username`, `password`, `phone_no`, `position_title`, `department`, `office_hours`) VALUES
('123', 'Guy Leonard', 'coolguy', 1654449221, 'Professor', 'Computer Science', 'MW 07:00-07:45 pm'),
('234', 'Xiobai Liu', 'AppliedCV', 2145678916, 'Professor', 'Computer Science', 'TTH 11:30-12:45 pm'),
('267', 'Roger Whitney', '123', 2073145921, 'Graduate Adviser', 'Computer Science', 'MW 03:00-03:45 pm'),
('349', 'John Carrol', '123', 2051617180, 'Assistant Professor', 'Electronics and Communication', 'TW 02:00-02:40 pm'),
('298', 'Mary Roch', '123', 2034356789, 'Professor', 'Computer Science', 'TTH 05:00-05:45 pm'),
('232', 'Ashley Byne', '123', 2011246546, 'Assistant Professor', 'Computer Science', 'MW 08:30-09:30 am'),
('332', 'Syne Leonard', '123', 2012659659, 'Assistant Professor', 'Computer Science', 'MW 08:30-09:30 pm'),
('533', 'Shyne Merry', '123', 2011659556, 'Assistant Professor', 'Mechanical', 'TW 09:30-10:30 am'),
('534', 'Grace Sylden', '123', 2011659655, 'Assistant Professor', 'Mechanical', 'TW 09:30-11:30 am'),
('535', 'Shrine Cook', '123', 2011659656, 'Assistant Professor', 'Mechanical', 'MW 09:30-11:30 am'),
('536', 'Daniel Smith', '123', 2011659657, 'Assistant Professor', 'Mechanical', 'TW 09:30-10:30 am'),
('496', 'John Smith', '123', 2046579812, 'Assistant Professor', 'Civil', 'TW 07:30-08:30 pm'),
('497', 'Jonny Singh', '123', 2046579813, 'Assistant Professor', 'Civil', 'MW 07:30-08:30 pm'),
('498', 'John Carol', '123', 2046579814, 'Assistant Professor', 'Civil', 'MW 05:30-06:30 pm'),
('988', 'Gyle Rick', '123', 205444921, 'Assistant Professor', 'Civil', 'MW 07:00-07:45 pm'),
('989', 'Roger Qualy', '123', 1231562013, 'Assistant Professor', 'Electronics and Communication', 'MW 07:00-08:45 pm'),
('150', 'Sydny Huge', '123', 201555655, 'Assistant Professor', 'Electronics and Communication', 'MW 03:00-03:45 pm'),
('151', 'Daniel Liu', '123', 201555651, 'Assistant Professor', 'Electronics and Communication', 'MW 06:00-06:45 pm'),
('158', 'Robert White', '123', 2073145920, 'Assistant Professor', 'Electronics and Communication', 'MW 04:00-04:45 pm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
