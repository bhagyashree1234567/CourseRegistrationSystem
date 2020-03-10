-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 19, 2019 at 11:06 AM
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
-- Table structure for table `course_registration`
--

DROP TABLE IF EXISTS `course_registration`;
CREATE TABLE IF NOT EXISTS `course_registration` (
  `Dept_id` varchar(6) NOT NULL,
  `Dept_name` char(30) NOT NULL,
  `Course_id` varchar(8) NOT NULL,
  `Course_name` varchar(30) NOT NULL,
  `Avail_seat` int(2) NOT NULL,
  `Total_seat` int(2) NOT NULL,
  `Course_hours` char(15) NOT NULL,
  `Faculty_name` char(15) NOT NULL,
  `Faculty_id` int(5) NOT NULL,
  `Units` int(3) NOT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`Course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_registration`
--

INSERT INTO `course_registration` (`Dept_id`, `Dept_name`, `Course_id`, `Course_name`, `Avail_seat`, `Total_seat`, `Course_hours`, `Faculty_name`, `Faculty_id`, `Units`, `flag`) VALUES
('CS', 'Computer Science', 'CS500', 'System Programming', 30, 30, '08:00-09:15 TTH', 'Guy Leonard', 123, 3, 0),
('CS', 'Computer Science', 'CS532', 'Software Engineering', 58, 60, '117:30-18:45 MW', 'Guy Leonard', 123, 3, 1),
('CS', 'Computer Science', 'CS596', ' Machine Learning', 60, 60, '14:00-15:15 TTH', 'Xiobai Liu', 234, 3, 0),
('CS', 'Computer Science', 'CS643', 'Oops', 30, 30, '06:00-07:15 MW', 'Roger Whitney', 267, 3, 0),
('CS', 'Computer Science', 'CS646', 'IOS Development', 29, 30, '19:00-20:15 TTH', 'Roger Whitney', 13245, 3, 1),
('CS', 'Computer Science', 'CS650', 'Intro To Programming', 50, 50, '12:00-13:00 TTH', 'Mary Roch', 298, 3, 1),
('CS', 'Computer Science', 'CS654', 'Operating Systems', 30, 30, '08:15-09:30 TTH', 'Ashley Byne', 232, 3, 0),
('CS', 'Computer Science', 'CS686', 'Algorithms', 50, 50, '03:00-04:30 TTH', 'Syne Leonard', 332, 3, 0),
('CS', 'Computer Science', 'CS695', 'Advance Programming', 60, 60, '13:00-15:00 MW', 'Mary Roch', 298, 3, 1),
('CS', 'Computer Science', 'CS696', 'Advance CV', 60, 60, '8:00-9:15 MW', 'Xiobai Liu', 234, 3, 0),
('CV', 'Civil', 'CV560', 'Mterials Theory', 50, 50, '15:30-17:30 TTH', 'John Smith', 496, 3, 1),
('CV', 'Civil', 'CV600', 'Construction', 50, 50, '13:30-14:30 MW', 'John Smith', 496, 3, 1),
('CV', 'Civil', 'CV620', 'Structural Enginering', 20, 20, '13:30-14:30 MW', 'Gyle Rick', 988, 3, 1),
('CV', 'Civil', 'CV630', 'Structural Design', 30, 30, '15:30-16:30 MW', 'John Smith', 496, 3, 1),
('CV', 'Civil', 'CV640', 'Geotechnical Design', 60, 60, '14:30-15:30 TTH', 'Jonny Singh', 497, 3, 1),
('CV', 'Civil', 'CV650', 'Hydrology', 20, 20, '03:00-04:15 MW', 'Jonny Singh', 497, 3, 1),
('CV', 'Civil', 'CV655', 'Bridge Engineering', 30, 30, '05:00-06:15 TTH', 'Gyle Rick', 988, 3, 0),
('CV', 'Civil', 'CV670', 'Environmental', 30, 30, '15:50-16:45 MW', 'John Carol', 498, 3, 0),
('CV', 'Civil', 'CV687', 'Survaying and Drafting', 40, 40, '12.30-13.30 MTH', 'Jonny Singh', 497, 3, 1),
('CV', 'Civil', 'CV690', 'Quantum Mechanics', 50, 50, '06:00-07:30 TTH', 'John Carol', 498, 3, 0),
('EC', 'Electronics and Communciation', 'EC530', 'Embedded System', 45, 45, '19:00-20:15 MW', 'John Carrol', 349, 3, 0),
('EC', 'Electronics and Communication', 'EC545', 'Microprocessor', 40, 40, '17:30-18:45 TTH', 'Roger Qualy', 989, 3, 1),
('EC', 'Electronics and Communication', 'EC569', 'Telecommunication', 60, 60, '12:30-13:30 TTH', 'Roger Qualy', 989, 3, 1),
('EC', 'Electronics and Communication', 'EC598', 'Electronics', 40, 40, '15:30-16:30 MW', 'Sydny Huge', 150, 3, 0),
('EC', 'Electronics and Communication', 'EC602', 'Resistor Theory', 30, 30, '06:00-07:15 MW', 'Daniel Liu', 151, 3, 0),
('EC', 'Electronics and Communication', 'EC616', 'Digital Control System', 60, 60, '19:00-20:15 TTH', 'John Carrol', 349, 3, 0),
('EC', 'Electronics and Communication', 'EC620', 'Capacitors', 20, 20, '05:00-06:15 MW', 'Robert White', 158, 3, 0),
('EC', 'Electronics and Communication', 'EC656', 'Electromagnetic waves', 30, 30, '03:30-04:45 TH', ' Daniel Liu', 151, 3, 1),
('EC ', 'Elctronics and Communication', 'EC676', 'CRO', 20, 20, '04:00-05:20 MW', 'Robert White', 158, 3, 1),
('EC', 'Electronics and Communication', 'EC690', 'Wireless Networks', 30, 30, '05:00-06:45 MW', 'Sydny Huge', 150, 3, 0),
('MECH', 'Mechanical', 'MECH650', 'Robotics', 90, 90, '14.30-16:30 MW', 'Daniel Smith', 536, 3, 1),
('MECH', 'Mechanical', 'MECH651', 'Quantum Computing', 70, 70, '18:30-19:30 MW', 'Daniel Smith', 536, 3, 1),
('MECH', 'Mechanical', 'MECH652', 'Power Systems', 60, 60, '12:30-13:30 TTH', 'Grace Sylden', 534, 3, 1),
('MECH', 'Mechanical', 'MECH653', 'Engines', 60, 60, '8:30-9:30 MW', 'Shrine Cook', 535, 3, 0),
('MECH', 'Mechanical', 'MECH654', 'Quality Control', 60, 60, '18:30-18:30 MW', 'Daniel Smith', 536, 3, 0),
('MECH', 'Mechanical', 'MECH655', 'Turbines', 60, 60, '15:30-16.30 TTH', 'Shyne Merry', 533, 3, 0),
('MECH', 'Mechanical', 'MECH656', 'Thermodynamics', 50, 50, '14:30-15:30 TTH', 'Shyne Merry', 533, 3, 1),
('MECH', 'Mechanical', 'MECH657', 'Mechanics', 45, 45, '9:30-10:30 MW', 'Grace Sylden', 534, 3, 1),
('MECH', 'Mechanical', 'MECH658', 'Mechatronics', 45, 45, '8:00-9:00 MW', 'Shrine Cook', 535, 3, 0),
('MECH', 'Mechanical', 'MECH659', 'Welding Theory', 30, 30, '12:30-13:30 MW', 'Shrine Cook', 535, 3, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
