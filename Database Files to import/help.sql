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
-- Table structure for table `help`
--

DROP TABLE IF EXISTS `help`;
CREATE TABLE IF NOT EXISTS `help` (
  `serial_no` int(3) NOT NULL,
  `title_name` varchar(50) NOT NULL,
  `questions` varchar(150) NOT NULL,
  `answers` varchar(500) NOT NULL,
  PRIMARY KEY (`serial_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`serial_no`, `title_name`, `questions`, `answers`) VALUES
(1, 'Personal Details', 'Where can I see my Home Address?\r\n', 'A student is able to see his/her Home Address in Personal details menu.\r\n'),
(2, 'Personal Details', 'I want to see my all Completed Courses. Where is list of these courses?\r\n', 'A student is able to see his/her Home Address in Personal details menu.\r\n'),
(3, 'Personal Details', 'How to edit my personal information in Personal details?\r\n', 'You can see your completed courses in the Personal details menu.\r\n'),
(4, 'Personal Details', 'Can I view my grades in Completed Courses?\r\n', 'To edit your personal information, go to Settings menu.\r\n'),
(5, 'Personal Details', 'Can I view my grades in Completed Courses?\r\n', 'Yes, you can see your grades of each course in Personal details.\r\n'),
(6, 'Course Registration', 'Where can I see all the courses offered by the University?\r\n', 'You can view a list of all courses in the Course Registration menu.\r\n'),
(7, 'Course Registration', 'Does Course Registration menu shows courses of all the departments?\r\n', 'Yes, can see all the courses offered by the University.\r\n'),
(8, 'Course Registration', 'What if available seats get filled up (i.e. 0 seats)?\r\n', 'A student will not be able to register for the courses if availability is full.\r\n'),
(9, 'Course Registration', 'Can I choose two courses having same timings?\r\n', 'No, A student should not choose different lectures with same timings. If done by mistake, Contact Graduate advisor for that.\r\n'),
(10, 'Course Registration', 'How many units are there for each courses.\r\n', 'The units of every course is mentioned in Course Registration menu.\r\n'),
(11, 'Course Registration', 'How to add courses for registration?\r\n', 'A student can add courses by going through Course registration menu and in bottom there is option to add upto 3 courses. A student need to fill Course ID to add a course.\r\n'),
(12, 'Course Registration', 'Do we need to add all the 3 courses for registration?\r\n', 'Yes, all three course are mandatory to be added.\r\n'),
(13, 'Major Details', 'Where can I see the pre-requisite courses for any department?\r\n', 'The pre-requisites of all the majors are present in Major Details menu.\r\n'),
(14, 'Major Details', 'What if my pre-requistes are completed for any major but still my admission is conditional?\r\n', 'For this issue, a student is required to contact their graduate advisor mentioned in details menu.\r\n'),
(15, 'Major Details', 'What is minimum units of credits required for completion of the the degree?\r\n', 'The minimum credits required for the respective major is mentioned Major details\r\n'),
(16, 'Major Details', 'What are various departmental elective courses offered by the University?\r\n', 'The elective courses depends on the decisions of faculty members, which is diaplayed in Major details after the pre-requisite courses.\r\n'),
(17, 'Faculty Details', 'Where I am able to see the list of all faculty members of University?\r\n', 'All the faculty members along with their details are present in Faculty details menu\r\n'),
(18, 'Faculty Details', 'What I if want to meet a professor personally in office hours?\r\n', 'A student should meet respective faculties only in their given Office hours shown in Faculty details\r\n'),
(19, 'Faculty Details', 'I need to contact professor. Where can I get their office phone number?\r\n', 'The office phone numbers of all faculty members is present in faculty details.\r\n'),
(20, 'View Grades', 'Where can I see the grades of all my courses?\r\n', 'The grades of students are seen in the View Grades menu\r\n'),
(21, 'View Grades', 'What if there is any correction in the grade value?\r\n', 'Student should contact their respective professors if there is any mistake in updation of grades.\r\n'),
(22, 'View Grades', 'What is Common Notes?\r\n', 'The common notes is information a professor wants to convey to all the students of his class.\r\n'),
(23, 'View Grades', 'Can I print the grades?\r\n', 'Yes, a student is allowed to print the grades.\r\n'),
(24, 'View Grades', 'What is Specific Notes?\r\n', 'The specific notes are provded to student individually if a professor want to convey some message to particular student.\r\n'),
(25, 'Settings', 'Where should I go to change my password?\r\n', 'You can go to settings menu, where you can see Change Password link to change the password.\r\n'),
(26, 'Settings', 'What all details can I update for the personal details?\r\n', 'A student is able to update only Phone number and their respective address.\r\n'),
(27, 'Settings', 'Can I update my given Student Id?\r\n', 'No, student is not authorized to update thier Student ID.\r\n'),
(28, 'Settings', 'How many digits should be a Phone number?\r\n', 'A phone number should be a valid 10 digit number.\r\n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
