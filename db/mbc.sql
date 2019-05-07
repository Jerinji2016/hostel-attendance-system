-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 08, 2019 at 05:57 PM
-- Server version: 5.7.23
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mbc`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `hostel`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `hostel`;
CREATE TABLE IF NOT EXISTS `hostel` (
`si_no` int(10)
,`adm_no` int(10)
,`name` varchar(20)
,`hostel_code` int(2)
,`floor_no` int(2)
,`room_no` int(5)
,`course` varchar(5)
,`branch` varchar(50)
,`semester` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `hostel_absent_type`
--

DROP TABLE IF EXISTS `hostel_absent_type`;
CREATE TABLE IF NOT EXISTS `hostel_absent_type` (
  `si_no` int(10) NOT NULL,
  `status` int(1) NOT NULL,
  `absent_type` int(2) NOT NULL,
  `remarks` varchar(30) NOT NULL,
  `entered_by` varchar(30) NOT NULL,
  `entered_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_absent_type`
--

INSERT INTO `hostel_absent_type` (`si_no`, `status`, `absent_type`, `remarks`, `entered_by`, `entered_on`) VALUES
(1, 1, 1, 'Absent', '', '2018-11-28 23:05:22'),
(2, 1, 1, 'Present', '', '2018-11-28 23:06:03'),
(3, 1, 1, 'Leave with Permission', '', '2018-11-28 23:06:03'),
(4, 1, 1, 'Absent without Permmission', '', '2018-11-28 23:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_attendance_details`
--

DROP TABLE IF EXISTS `hostel_attendance_details`;
CREATE TABLE IF NOT EXISTS `hostel_attendance_details` (
  `si_no` int(10) NOT NULL AUTO_INCREMENT,
  `status` int(1) DEFAULT NULL,
  `date_id` int(11) DEFAULT NULL,
  `adm_no` int(20) DEFAULT NULL,
  `absent_id` int(100) DEFAULT NULL,
  `entered_by` varchar(20) DEFAULT NULL,
  `remarks` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`si_no`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_attendance_details`
--

INSERT INTO `hostel_attendance_details` (`si_no`, `status`, `date_id`, `adm_no`, `absent_id`, `entered_by`, `remarks`) VALUES
(1, 1, NULL, 4601, NULL, 'jerin', NULL),
(2, 1, NULL, 4605, NULL, 'jerin', NULL),
(3, 1, NULL, 4613, NULL, 'jerin', NULL),
(4, 1, NULL, 4503, NULL, 'jerin', NULL),
(5, 1, NULL, 4611, NULL, 'jerin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hostel_date_details`
--

DROP TABLE IF EXISTS `hostel_date_details`;
CREATE TABLE IF NOT EXISTS `hostel_date_details` (
  `si_no` int(10) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `day_type` int(3) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `entered_by` varchar(30) NOT NULL,
  `entered_on` date NOT NULL,
  PRIMARY KEY (`si_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hostel_details`
--

DROP TABLE IF EXISTS `hostel_details`;
CREATE TABLE IF NOT EXISTS `hostel_details` (
  `si_no` int(10) NOT NULL AUTO_INCREMENT,
  `academic_year` varchar(10) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `fee_status` int(1) DEFAULT NULL,
  `fee_head_id` int(5) DEFAULT NULL,
  `adm_no` int(10) DEFAULT NULL,
  `name` varchar(20) NOT NULL,
  `room_no` int(5) DEFAULT NULL,
  `floor_no` int(2) DEFAULT NULL,
  `hostel_code` int(2) DEFAULT NULL,
  `course` varchar(5) NOT NULL,
  `semester` varchar(50) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `remarks` varchar(1000) DEFAULT NULL,
  `allocated_on` timestamp NULL DEFAULT NULL,
  `reason` int(4) DEFAULT NULL,
  `vacated_on` date DEFAULT NULL,
  `vct_remarks` varchar(100) DEFAULT NULL,
  `entered_by` varchar(30) DEFAULT NULL,
  `verified_by` varchar(30) DEFAULT NULL,
  `verification_remarks` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`si_no`),
  UNIQUE KEY `adm_no` (`adm_no`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_details`
--

INSERT INTO `hostel_details` (`si_no`, `academic_year`, `status`, `fee_status`, `fee_head_id`, `adm_no`, `name`, `room_no`, `floor_no`, `hostel_code`, `course`, `semester`, `branch`, `remarks`, `allocated_on`, `reason`, `vacated_on`, `vct_remarks`, `entered_by`, `verified_by`, `verification_remarks`) VALUES
(1, NULL, 1, NULL, NULL, 4501, 'Aby', 10, 1, 1, 'BTECH', 'S1', 'CSE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, 1, NULL, NULL, 4502, 'Anand', 11, 1, 1, 'BTECH', 'S1', 'ECE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, 1, NULL, NULL, 4503, 'Rahul', 12, 1, 1, 'BTECH', 'S1', 'ME', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, 1, NULL, NULL, 4504, 'Bhim', 13, 1, 1, 'BTECH', 'S1', 'EEE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, 1, NULL, NULL, 4505, 'Aju', 14, 1, 1, 'BTECH', 'S1', 'CE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, 1, NULL, NULL, 4511, 'Jithin', 110, 2, 1, 'BTECH', 'S3', 'CSE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, 1, NULL, NULL, 4512, 'Kevin', 111, 2, 1, 'BTECH', 'S3', 'ECE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, 1, NULL, NULL, 4513, 'Jishnu', 112, 2, 1, 'BTECH', 'S3', 'EEE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, 1, NULL, NULL, 4514, 'Omar', 113, 2, 1, 'BTECH', 'S3', 'CE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, 1, NULL, NULL, 4515, 'Tintu', 114, 2, 1, 'BTECH', 'S3', 'ME', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, 1, NULL, NULL, 4601, 'Ted', 21, 1, 2, 'BTECH', 'S5', 'CSE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, 1, NULL, NULL, 4602, 'Daniel', 22, 1, 2, 'BTECH', 'S5', 'ECE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, 1, NULL, NULL, 4603, 'Sanjo', 23, 1, 2, 'BTECH', 'S5', 'EEE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, 1, NULL, NULL, 4604, 'Noyal', 24, 1, 2, 'BTECH', 'S5', 'CE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, 1, NULL, NULL, 4605, 'Libin', 25, 1, 2, 'BTECH', 'S5', 'ME', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, 1, NULL, NULL, 4611, 'Shijo', 121, 2, 2, 'BTECH', 'S7', 'ME', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, 1, NULL, NULL, 4612, 'Aman', 122, 2, 2, 'BTECH', 'S7', 'CE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, NULL, 1, NULL, NULL, 4613, 'Afsal', 123, 2, 2, 'BTECH', 'S7', 'ECE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, NULL, 1, NULL, NULL, 4614, 'Cyril', 124, 2, 2, 'BTECH', 'S7', 'CSE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, NULL, 1, NULL, NULL, 4615, 'Vishnu', 125, 2, 2, 'BTECH', 'S7', 'EEE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, NULL, 1, NULL, NULL, 4902, 'Rinoj', 212, 3, 1, 'MTECH', 'M1', 'ECE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, NULL, 1, NULL, NULL, 4901, 'Shinto', 211, 3, 1, 'MTECH', 'M1', 'CSE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, NULL, 1, NULL, NULL, 4903, 'Rohan', 213, 3, 1, 'MTECH', 'M1', 'EEE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, NULL, 1, NULL, NULL, 4904, 'Rinto', 214, 3, 1, 'MTECH', 'M1', 'CE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, NULL, 1, NULL, NULL, 4905, 'Tijo', 215, 3, 1, 'MTECH', 'M1', 'ME', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, NULL, 1, NULL, NULL, 4911, 'Edwin', 221, 3, 2, 'MTECH', 'M3', 'CE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, NULL, 1, NULL, NULL, 4912, 'Jerin', 222, 3, 2, 'MTECH', 'M3', 'EEE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, NULL, 1, NULL, NULL, 4913, 'Titto', 223, 3, 2, 'MTECH', 'M3', 'ECE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, NULL, 1, NULL, NULL, 4914, 'Aswin', 224, 3, 2, 'MTECH', 'M3', 'CSE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, NULL, 1, NULL, NULL, 4915, 'Nikhil A', 225, 3, 2, 'MTECH', 'M3', 'ME', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, NULL, 1, NULL, NULL, 4506, 'Ajay', 10, 1, 1, 'BTECH', 'S1', 'CSE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, NULL, 1, NULL, NULL, 4507, 'Jude', 10, 1, 1, 'BTECH', 'S1', 'CSE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, NULL, 1, NULL, NULL, 4508, 'Brian', 11, 1, 1, 'BTECH', 'S1', 'ECE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, NULL, 1, NULL, NULL, 4509, 'Brad', 13, 1, 1, 'BTECH', 'S1', 'EEE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, NULL, 1, NULL, NULL, 4510, 'Kriss', 14, 1, 1, 'BTECH', 'S1', 'CE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, NULL, 1, NULL, NULL, 4516, 'Drew', 111, 2, 1, 'BTECH', 'S3', 'ECE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, NULL, 1, NULL, NULL, 4517, 'Danny', 112, 2, 1, 'BTECH', 'S3', 'EEE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, NULL, 1, NULL, NULL, 4518, 'Chingan', 114, 2, 1, 'BTECH', 'S3', 'ME', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `si_no` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`si_no`),
  UNIQUE KEY `si_no` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`si_no`, `user_id`, `password`) VALUES
(1, 'jerin', '3f7cf81f5056b329e5f02ca04e0efa66'),
(2, 'abijith', 'd76f3d05cc9ac98f1f9160274a39fe33'),
(3, 'aditya', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

DROP TABLE IF EXISTS `login_details`;
CREATE TABLE IF NOT EXISTS `login_details` (
  `si_no` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `session_in` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`si_no`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`si_no`, `user_id`, `session_in`) VALUES
(1, 'jerin', '2019-02-14 22:06:29'),
(2, 'jerin', '2019-02-17 02:29:20'),
(3, 'jerin', '2019-04-07 11:03:35'),
(4, 'jerin', '2019-04-07 11:08:34');

-- --------------------------------------------------------

--
-- Structure for view `hostel`
--
DROP TABLE IF EXISTS `hostel`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hostel`  AS  select `hostel_details`.`si_no` AS `si_no`,`hostel_details`.`adm_no` AS `adm_no`,`hostel_details`.`name` AS `name`,`hostel_details`.`hostel_code` AS `hostel_code`,`hostel_details`.`floor_no` AS `floor_no`,`hostel_details`.`room_no` AS `room_no`,`hostel_details`.`course` AS `course`,`hostel_details`.`branch` AS `branch`,`hostel_details`.`semester` AS `semester` from `hostel_details` ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
