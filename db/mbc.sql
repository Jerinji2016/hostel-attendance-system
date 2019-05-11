-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 11, 2019 at 09:18 AM
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
-- Table structure for table `hostel_academic_details`
--

DROP TABLE IF EXISTS `hostel_academic_details`;
CREATE TABLE IF NOT EXISTS `hostel_academic_details` (
  `si_no` int(5) NOT NULL AUTO_INCREMENT,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `academic_from` int(4) NOT NULL,
  `academic_to` int(4) NOT NULL,
  `entered_by` varchar(20) NOT NULL,
  `entered_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`si_no`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_academic_details`
--

INSERT INTO `hostel_academic_details` (`si_no`, `start_date`, `end_date`, `academic_from`, `academic_to`, `entered_by`, `entered_on`) VALUES
(1, '2019-04-01', '2019-05-01', 2019, 2023, 'jerin', '2019-04-18 05:40:14');

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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_attendance_details`
--

INSERT INTO `hostel_attendance_details` (`si_no`, `status`, `date_id`, `adm_no`, `absent_id`, `entered_by`, `remarks`) VALUES
(1, 1, 2, 4501, NULL, 'jerin', 'sick'),
(2, 1, 3, 4501, NULL, 'jerin', 'home'),
(3, 1, 6, 4501, NULL, 'jerin', 'kuttikanam'),
(4, 1, 15, 4501, NULL, 'jerin', 'fest'),
(5, 1, 18, 4501, NULL, 'jerin', 'sick again'),
(6, 1, 23, 4501, NULL, 'jerin', 'bad remark'),
(7, 1, 27, 4501, NULL, 'jerin', 'study leave');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_date_details`
--

DROP TABLE IF EXISTS `hostel_date_details`;
CREATE TABLE IF NOT EXISTS `hostel_date_details` (
  `si_no` int(10) NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL,
  `date` date NOT NULL,
  `day_type` int(3) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `entered_by` varchar(30) NOT NULL,
  `entered_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`si_no`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_date_details`
--

INSERT INTO `hostel_date_details` (`si_no`, `status`, `date`, `day_type`, `remarks`, `entered_by`, `entered_on`) VALUES
(1, 1, '2019-04-01', 1, '----', 'jerin', '2019-04-29 21:55:43'),
(2, 1, '2019-04-02', 1, '----', 'jerin', '2019-04-29 21:55:43'),
(3, 1, '2019-04-03', 1, '----', 'jerin', '2019-04-29 21:55:43'),
(4, 1, '2019-04-04', 1, '----', 'jerin', '2019-04-29 21:55:43'),
(5, 1, '2019-04-05', 1, '----', 'jerin', '2019-04-29 21:55:43'),
(6, 1, '2019-04-06', 1, '----', 'jerin', '2019-04-29 21:55:43'),
(7, 0, '2019-04-07', 2, '----', 'jerin', '2019-04-29 21:55:43'),
(8, 1, '2019-04-08', 1, '----', 'jerin', '2019-04-29 21:55:43'),
(9, 1, '2019-04-09', 1, '----', 'jerin', '2019-04-29 21:55:43'),
(10, 1, '2019-04-10', 1, '----', 'jerin', '2019-04-29 21:55:43'),
(11, 1, '2019-04-11', 1, '----', 'jerin', '2019-04-29 21:55:43'),
(12, 1, '2019-04-12', 1, '----', 'jerin', '2019-04-29 21:55:43'),
(13, 1, '2019-04-13', 1, '----', 'jerin', '2019-04-29 21:55:43'),
(14, 0, '2019-04-14', 2, '----', 'jerin', '2019-04-29 21:55:43'),
(15, 1, '2019-04-15', 1, '----', 'jerin', '2019-04-29 21:55:43'),
(16, 1, '2019-04-16', 1, '----', 'jerin', '2019-04-29 21:55:43'),
(17, 1, '2019-04-17', 1, '----', 'jerin', '2019-04-29 21:55:43'),
(18, 1, '2019-04-18', 1, '----', 'jerin', '2019-04-29 21:55:43'),
(19, 1, '2019-04-19', 1, '----', 'jerin', '2019-04-29 21:55:43'),
(20, 1, '2019-04-20', 1, '----', 'jerin', '2019-04-29 21:55:43'),
(21, 0, '2019-04-21', 2, '----', 'jerin', '2019-04-29 21:55:43'),
(22, 1, '2019-04-22', 1, '----', 'jerin', '2019-04-29 21:55:43'),
(23, 1, '2019-04-23', 1, '----', 'jerin', '2019-04-29 21:55:43'),
(24, 1, '2019-04-24', 1, '----', 'jerin', '2019-04-29 21:55:43'),
(25, 1, '2019-04-25', 1, '----', 'jerin', '2019-04-29 21:55:43'),
(26, 1, '2019-04-26', 1, '----', 'jerin', '2019-04-29 21:55:43'),
(27, 1, '2019-04-27', 1, '----', 'jerin', '2019-04-29 21:55:43'),
(28, 1, '2019-04-28', 1, '----', 'jerin', '2019-04-29 21:55:43'),
(29, 1, '2019-04-29', 1, '----', 'jerin', '2019-04-29 21:55:43'),
(30, 1, '2019-04-30', 1, '----', 'jerin', '2019-04-29 21:55:43'),
(31, 1, '2019-05-01', 1, '---', 'jerin', '2019-05-08 02:28:48');

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
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`si_no`, `user_id`, `session_in`) VALUES
(1, 'jerin', '2019-02-14 22:06:29'),
(2, 'jerin', '2019-02-17 02:29:20'),
(3, 'jerin', '2019-04-07 11:03:35'),
(4, 'jerin', '2019-04-07 11:08:34'),
(5, 'jerin', '2019-04-11 22:53:47'),
(6, 'aditya', '2019-04-11 22:54:06'),
(7, 'jerin', '2019-04-12 15:33:34'),
(8, 'jerin', '2019-04-12 15:40:04'),
(9, 'jerin', '2019-04-12 16:14:26'),
(10, 'jerin', '2019-04-13 23:41:04'),
(11, 'jerin', '2019-04-13 23:41:12'),
(12, 'jerin', '2019-04-13 23:41:19'),
(13, 'jerin', '2019-04-13 23:43:09'),
(14, 'jerin', '2019-04-13 23:43:18'),
(15, 'jerin', '2019-04-13 23:43:56'),
(16, 'jerin', '2019-04-13 23:47:55'),
(17, 'aditya', '2019-04-13 23:48:26'),
(18, 'aditya', '2019-04-13 23:48:35'),
(19, 'jerin', '2019-04-13 23:49:02'),
(20, 'jerin', '2019-04-13 23:49:47'),
(21, 'aditya', '2019-04-13 23:51:15'),
(22, 'jerin', '2019-04-13 23:51:49'),
(23, 'jerin', '2019-04-13 23:56:55'),
(24, 'jerin', '2019-04-14 00:00:40'),
(25, 'jerin', '2019-04-14 00:01:21'),
(26, 'jerin', '2019-04-14 20:19:13'),
(27, 'jerin', '2019-04-14 20:21:37'),
(28, 'jerin', '2019-04-14 20:23:59'),
(29, 'jerin', '2019-04-14 20:25:50'),
(30, 'jerin', '2019-04-14 20:29:09'),
(31, 'jerin', '2019-04-14 20:29:25'),
(32, 'jerin', '2019-04-14 20:36:34'),
(33, 'jerin', '2019-04-14 20:38:00'),
(34, 'jerin', '2019-04-14 20:38:59'),
(35, 'jerin', '2019-04-14 20:42:10'),
(36, 'jerin', '2019-04-14 20:42:31'),
(37, 'jerin', '2019-04-14 20:43:31'),
(38, 'jerin', '2019-04-14 20:44:53'),
(39, 'jerin', '2019-04-14 20:46:07'),
(40, 'jerin', '2019-04-14 20:48:08'),
(41, 'jerin', '2019-04-14 20:48:55'),
(42, 'aditya', '2019-04-14 20:49:08'),
(43, 'jerin', '2019-04-14 20:54:07'),
(44, 'aditya', '2019-04-14 20:54:48'),
(45, 'aditya', '2019-04-14 20:55:46'),
(46, 'jerin', '2019-04-14 20:56:13'),
(47, 'jerin', '2019-04-14 21:38:30'),
(48, 'jerin', '2019-04-14 21:40:49'),
(49, 'aditya', '2019-04-14 21:41:54'),
(50, 'aditya', '2019-04-14 21:43:16'),
(51, 'jerin', '2019-04-14 21:48:18'),
(52, 'jerin', '2019-04-14 21:56:02'),
(53, 'jerin', '2019-04-14 21:59:55'),
(54, 'jerin', '2019-04-15 20:30:48'),
(55, 'jerin', '2019-04-15 23:04:33'),
(56, 'jerin', '2019-04-15 23:09:32'),
(57, 'jerin', '2019-04-15 23:10:11'),
(58, 'jerin', '2019-04-15 23:12:54'),
(59, 'jerin', '2019-04-15 23:15:13'),
(60, 'aditya', '2019-04-15 23:20:35'),
(61, 'jerin', '2019-04-15 23:22:06'),
(62, 'jerin', '2019-04-15 23:24:56'),
(63, 'jerin', '2019-04-16 19:34:13'),
(64, 'jerin', '2019-04-16 19:58:19'),
(65, 'jerin', '2019-04-16 19:58:28'),
(66, 'jerin', '2019-04-16 19:58:39'),
(67, 'jerin', '2019-04-16 19:59:54'),
(68, 'jerin', '2019-04-16 20:00:04'),
(69, 'jerin', '2019-04-16 20:02:29'),
(70, 'jerin', '2019-04-16 20:03:58'),
(71, 'jerin', '2019-04-16 20:05:58'),
(72, 'jerin', '2019-04-16 20:06:24'),
(73, 'jerin', '2019-04-16 20:16:46'),
(74, 'jerin', '2019-04-16 20:43:45'),
(75, 'aditya', '2019-04-16 20:47:44'),
(76, 'jerin', '2019-04-16 20:49:41'),
(77, 'aditya', '2019-04-16 20:50:53'),
(78, 'jerin', '2019-04-17 11:29:12'),
(79, 'jerin', '2019-04-17 14:15:23'),
(80, 'jerin', '2019-04-17 14:17:44'),
(81, 'jerin', '2019-04-20 19:48:28'),
(82, 'jerin', '2019-04-20 19:58:45'),
(83, 'jerin', '2019-04-29 20:53:50'),
(84, 'jerin', '2019-05-05 20:54:12'),
(85, 'jerin', '2019-05-07 23:47:46'),
(86, 'jerin', '2019-05-07 23:54:31'),
(87, 'jerin', '2019-05-08 02:36:57'),
(88, 'jerin', '2019-05-08 21:05:41'),
(89, 'jerin', '2019-05-08 22:13:55'),
(90, 'jerin', '2019-05-08 23:28:53'),
(91, 'jerin', '2019-05-11 14:41:52'),
(92, 'jerin', '2019-05-11 14:42:23');

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
