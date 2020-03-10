-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 19, 2019 at 11:08 AM
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
-- Table structure for table `major_details`
--

DROP TABLE IF EXISTS `major_details`;
CREATE TABLE IF NOT EXISTS `major_details` (
  `Dept_id` varchar(10) NOT NULL,
  `Major_title` varchar(15) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `no_units` int(5) NOT NULL,
  `req_courses` varchar(50) NOT NULL,
  `elec_courses` varchar(50) NOT NULL,
  `grad_advisors` varchar(30) NOT NULL,
  PRIMARY KEY (`Dept_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `major_details`
--

INSERT INTO `major_details` (`Dept_id`, `Major_title`, `Department`, `no_units`, `req_courses`, `elec_courses`, `grad_advisors`) VALUES
('CS', 'Master\'s', 'Computer Science', 30, 'Data Structures, Algorithms, Operating Systems', 'Intro to Web, Modern Web, Android', 'Roger Whitney'),
('MECH', 'Master\'s', 'Mechanical', 30, 'Intro To Dynamics, Machine Design, Workshop Intro', 'Mechanics, Thermodynamics, Manufacturing', 'Michael Clarke'),
('EC', 'Master\'s', 'Electronics and Communication', 30, 'Stochastic, Embedded Systems', 'VLSI testing, VLSI design', 'Mahasweta Sarkar'),
('CV', 'Master\'s', 'Civil', 3, 'Construction Mangement, Intro to Design, CAD', 'Waste Management, EVS, Geology', 'Ryan Gyle');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
