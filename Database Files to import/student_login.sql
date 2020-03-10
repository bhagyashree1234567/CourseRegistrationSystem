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
-- Table structure for table `student_login`
--

DROP TABLE IF EXISTS `student_login`;
CREATE TABLE IF NOT EXISTS `student_login` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(18) NOT NULL,
  `ID` varchar(9) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `phone_no` int(12) NOT NULL,
  `Address line-1` varchar(15) NOT NULL,
  `Address line-2` varchar(10) NOT NULL,
  `City` char(15) NOT NULL,
  `Country` char(10) NOT NULL,
  `Zipcode` int(5) NOT NULL,
  `DOB` date NOT NULL,
  `Dept_id` varchar(11) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`Username`, `Password`, `ID`, `Name`, `phone_no`, `Address line-1`, `Address line-2`, `City`, `Country`, `Zipcode`, `DOB`, `Dept_id`) VALUES
('Bhagyashree', '12345678', '824452556', 'Bhagyashree Mahajan', 1021021546, 'Penthouse Apt', 'Unit 53', 'San Diego', 'USA', 92115, '1998-04-05', 'CS'),
('Bhuvan', '12345678', '824777066', 'Bhuvan Bam', 203111455, 'Aztec Pacific', 'Unit 22', 'San Diego', 'USA', 92116, '1994-10-29', 'EC'),
('Darshan', '12345678', '824452597', 'Darshan Brahmbhatt', 1031024569, '5055 Collwood', 'Unit 320', 'San Diego', 'USA', 92115, '1998-03-01', 'CS'),
('Dhruvil', '12345678', '824452525', 'Dhruvil Shah', 2013336544, 'Devil Avenue', 'Unit 320', 'San Diego', 'USA', 92115, '1998-05-02', 'CS'),
('Dhwani', '12345678', '824452502', 'Dhwani Thobhani', 2011115642, 'Aztec Pacific', 'Unit 66', 'San Diego', 'USA', 92115, '1998-02-22', 'EC'),
('Heena', '12345678', '800654123', 'Heena Khan', 2049876310, 'Diplomat Apt', 'Unit 55', 'San Diego', 'USA', 986541, '1996-10-31', 'CV'),
('Hina', '12345678', '824555100', 'Hina Panchal', 201444755, 'Diplomat Apt', 'Unit 4', 'San Diego', 'USA', 92114, '1992-11-07', 'MECH'),
('Manish', '12345678', '824000123', 'Manish Kala', 2013336544, 'Aztec Pacific', 'Unit 10', 'San Diego', 'USA', 92115, '1998-09-02', 'EC'),
('Naval', '12345678', '804222100', 'Naval Parekh', 203444011, 'Diplomat Apt', 'Unit 10', 'San Diego', 'USA', 92114, '1996-10-10', 'MECH'),
('Nitin', '12345678', '824555011', 'Nitin Yadav', 201333600, 'Dorchester Apt', 'Unit 22', 'San Diego', 'USA', 92001, '1996-03-02', 'MECH'),
('Pavan', '12345678', '824555977', 'Pavan Patil', 2011456456, 'Penthouse Apt', 'Unit 33', 'San Diego', 'USA', 92115, '1996-11-01', 'EC'),
('Piyush', '12345678', '824453535', 'Piyush Kurkure', 203111455, 'Diplomet Apt', 'Unit 59', 'San Diego', 'USA', 92115, '1998-08-08', 'EC'),
('Pranay', '12345678', '824666055', 'Pranay Patel', 201333644, 'Penthouse Apt', 'Unit 52', 'San DIego', 'USA', 91224, '1997-11-19', 'EC'),
('Priya', '12345678', '824666700', 'Priya Pol', 2014789630, 'Dorchester Apt', 'Unit 5', 'San Diego', 'USA', 92115, '1997-05-02', 'CS'),
('Rachana', '12345678', '824452525', 'Rachana Ramesh', 201333655, 'Dorchester Apt', 'Unit 55', 'San Diego', 'USA', 92115, '1997-10-31', 'EC'),
('Rajesh', '12345678', '824333011', 'Rajesh Singh', 201333699, 'Aztec Pacific', 'Unit 44', 'San DIego', 'USA', 92115, '1995-08-14', 'EC'),
('Reetu', '12345678', '824555011', 'Reetu Yadav', 2014563987, 'Dorchester Apt', 'Unit 6', 'San Diego', 'USA', 92115, '1998-05-06', 'CS'),
('Rita', '12345678', '800000666', 'Rita Patil', 2045698710, 'Aztec Pacific', 'Unit 12', 'San Diego', 'USA', 963115, '1997-08-31', 'MECH'),
('Sanjay', '12345678', '865479321', 'Sanjay Gandhi', 2036987410, 'Diplomat Apt', 'Unit 32', 'San Diego', 'USA', 92115, '1997-08-04', 'CV'),
('Umang', '1234567', '824111033', 'Umang Patil', 2011365415, 'Dorchester Apt', 'Unit 22', 'San Diego', 'USA', 92115, '1995-08-05', 'CV'),
('Umesh ', '12345678', '802444655', 'Umesh Gandhi', 2011365498, 'Dorchester Apt', 'Unit 11', 'San Diego', 'USA', 92116, '1998-01-17', 'MECH'),
('Veena', '12345678', '824111055', 'Veena Bansi', 201555400, 'Diplomat Apt', 'Unit 6', 'San Diego', 'USA', 92115, '1996-11-05', 'CV'),
('Vinay', '12345678', '824000144', 'Vinay Prabhu', 203444988, 'Diplomat Apt', 'Unit 5', 'San Diego', 'USA', 92114, '1996-02-01', 'CS'),
('Vishal', '12345678', '824666511', 'Vishal Tiwari', 102222333, 'Diplomat Apt', 'Unit 44', 'San Diego', 'USA', 92446, '1994-11-04', 'MECH'),
('Yami', '12345678', '824555077', 'Yami Gautam', 2014448771, 'Penthouse Apt', 'Unit 20', 'San Diego', 'USA', 92115, '1998-11-08', 'CV');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
