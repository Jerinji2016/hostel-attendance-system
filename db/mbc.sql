-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 27, 2019 at 04:57 PM
-- Server version: 5.7.26
-- PHP Version: 5.6.40

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
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_attendance_details`
--

INSERT INTO `hostel_attendance_details` (`si_no`, `status`, `date_id`, `adm_no`, `absent_id`, `entered_by`, `remarks`) VALUES
(1, 1, 2, 4501, NULL, 'jerin', 'sick'),
(2, 1, 3, 4501, NULL, 'aditya', 'home'),
(3, 1, 6, 4501, NULL, 'jerin', 'kuttikanam'),
(4, 1, 15, 4501, NULL, 'abijith', 'fest'),
(5, 1, 18, 4501, NULL, 'jerin', 'sick again'),
(6, 1, 23, 4501, NULL, 'jerin', 'bad remark'),
(7, 1, 27, 4501, NULL, 'abijith', 'study leave'),
(8, 1, 52, 4512, NULL, 'jerin', ''),
(9, 1, 52, 4516, NULL, 'jerin', ''),
(10, 1, NULL, 4501, NULL, 'jerin', ''),
(11, 1, 80, 4501, NULL, 'jerin', ''),
(12, 1, 80, 4506, NULL, 'jerin', ''),
(13, 1, 80, 4501, NULL, 'jerin', ''),
(14, 1, 80, 4506, NULL, 'jerin', ''),
(15, 1, 80, 4505, NULL, 'jerin', ''),
(16, 1, 80, 4507, NULL, 'jerin', ''),
(17, 1, 80, 4507, NULL, 'jerin', ''),
(18, 1, 80, 4507, NULL, 'jerin', ''),
(19, 1, NULL, 4506, NULL, 'jerin', ''),
(20, 1, NULL, 4501, NULL, 'jerin', ''),
(21, 1, NULL, 4506, NULL, 'jerin', '');

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
) ENGINE=MyISAM AUTO_INCREMENT=123 DEFAULT CHARSET=latin1;

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
(31, 1, '2019-05-01', 1, '---', 'jerin', '2019-05-08 02:28:48'),
(32, 1, '2019-05-02', 1, '----', 'abijith', '2019-05-22 20:18:39'),
(33, 1, '2019-05-03', 1, '----', 'abijith', '2019-05-22 20:18:39'),
(34, 1, '2019-05-04', 1, '----', 'abijith', '2019-05-22 20:18:39'),
(35, 1, '2019-05-05', 1, '----', 'abijith', '2019-05-22 20:18:39'),
(36, 1, '2019-05-06', 1, '----', 'abijith', '2019-05-22 20:18:39'),
(37, 1, '2019-05-07', 1, '----', 'abijith', '2019-05-22 20:18:39'),
(38, 1, '2019-05-08', 1, '----', 'abijith', '2019-05-22 20:18:39'),
(39, 1, '2019-05-09', 1, '----', 'abijith', '2019-05-22 20:18:39'),
(40, 1, '2019-05-10', 1, '----', 'abijith', '2019-05-22 20:18:39'),
(41, 1, '2019-05-11', 1, '----', 'abijith', '2019-05-22 20:18:39'),
(42, 1, '2019-05-12', 1, '----', 'abijith', '2019-05-22 20:18:39'),
(43, 1, '2019-05-13', 1, '----', 'abijith', '2019-05-22 20:18:39'),
(44, 1, '2019-05-14', 1, '----', 'abijith', '2019-05-22 20:18:39'),
(45, 1, '2019-05-15', 1, '----', 'abijith', '2019-05-22 20:18:39'),
(46, 1, '2019-05-16', 1, '----', 'abijith', '2019-05-22 20:18:39'),
(47, 1, '2019-05-17', 1, '----', 'abijith', '2019-05-22 20:18:39'),
(48, 1, '2019-05-18', 1, '----', 'abijith', '2019-05-22 20:18:39'),
(49, 1, '2019-05-19', 1, '----', 'abijith', '2019-05-22 20:18:39'),
(50, 1, '2019-05-20', 1, '----', 'abijith', '2019-05-22 20:18:39'),
(51, 1, '2019-05-21', 1, '----', 'abijith', '2019-05-22 20:18:39'),
(52, 1, '2019-05-22', 1, '----', 'abijith', '2019-05-22 20:18:39'),
(53, 1, '2019-05-23', 1, '----', 'abijith', '2019-05-22 20:18:39'),
(54, 1, '2019-05-24', 1, '----', 'abijith', '2019-05-22 20:18:39'),
(55, 1, '2019-05-25', 1, '----', 'abijith', '2019-05-22 20:18:39'),
(56, 1, '2019-05-26', 1, '----', 'abijith', '2019-05-22 20:18:39'),
(57, 1, '2019-05-27', 1, '----', 'abijith', '2019-05-22 20:18:39'),
(58, 1, '2019-05-28', 1, '----', 'abijith', '2019-05-22 20:18:39'),
(59, 1, '2019-05-29', 1, '----', 'abijith', '2019-05-22 20:18:39'),
(60, 1, '2019-05-30', 1, '----', 'abijith', '2019-05-22 20:18:39'),
(61, 1, '2019-05-31', 1, '----', 'abijith', '2019-05-22 20:18:39'),
(62, 1, '2019-06-01', 1, '----', 'aditya', '2019-05-22 20:19:35'),
(63, 1, '2019-06-02', 1, '----', 'aditya', '2019-05-22 20:19:35'),
(64, 1, '2019-06-03', 1, '----', 'aditya', '2019-05-22 20:19:35'),
(65, 1, '2019-06-04', 1, '----', 'aditya', '2019-05-22 20:19:35'),
(66, 1, '2019-06-05', 1, '----', 'aditya', '2019-05-22 20:19:35'),
(67, 1, '2019-06-06', 1, '----', 'aditya', '2019-05-22 20:19:35'),
(68, 1, '2019-06-07', 1, '----', 'aditya', '2019-05-22 20:19:35'),
(69, 1, '2019-06-08', 1, '----', 'aditya', '2019-05-22 20:19:35'),
(70, 1, '2019-06-09', 1, '----', 'aditya', '2019-05-22 20:19:35'),
(71, 1, '2019-06-10', 1, '----', 'aditya', '2019-05-22 20:19:36'),
(72, 1, '2019-06-11', 1, '----', 'aditya', '2019-05-22 20:19:36'),
(73, 1, '2019-06-12', 1, '----', 'aditya', '2019-05-22 20:19:36'),
(74, 1, '2019-06-13', 1, '----', 'aditya', '2019-05-22 20:19:36'),
(75, 1, '2019-06-14', 1, '----', 'aditya', '2019-05-22 20:19:36'),
(76, 1, '2019-06-15', 1, '----', 'aditya', '2019-05-22 20:19:36'),
(77, 1, '2019-06-16', 1, '----', 'aditya', '2019-05-22 20:19:36'),
(78, 1, '2019-06-17', 1, '----', 'aditya', '2019-05-22 20:19:36'),
(79, 1, '2019-06-18', 1, '----', 'aditya', '2019-05-22 20:19:36'),
(80, 1, '2019-06-19', 1, '----', 'aditya', '2019-05-22 20:19:36'),
(81, 1, '2019-06-20', 1, '----', 'aditya', '2019-05-22 20:19:36'),
(82, 1, '2019-06-21', 1, '----', 'aditya', '2019-05-22 20:19:36'),
(83, 1, '2019-06-22', 1, '----', 'aditya', '2019-05-22 20:19:36'),
(84, 1, '2019-06-23', 1, '----', 'aditya', '2019-05-22 20:19:36'),
(85, 1, '2019-06-24', 1, '----', 'aditya', '2019-05-22 20:19:36'),
(86, 1, '2019-06-25', 1, '----', 'aditya', '2019-05-22 20:19:36'),
(87, 1, '2019-06-26', 1, '----', 'aditya', '2019-05-22 20:19:36'),
(88, 1, '2019-06-27', 1, '----', 'aditya', '2019-05-22 20:19:36'),
(89, 1, '2019-06-28', 1, '----', 'aditya', '2019-05-22 20:19:36'),
(90, 1, '2019-06-29', 1, '----', 'aditya', '2019-05-22 20:19:36'),
(91, 1, '2019-06-30', 1, '----', 'aditya', '2019-05-22 20:19:36'),
(92, 1, '2019-07-01', 1, '----', 'aditya', '2019-05-22 20:20:34'),
(93, 1, '2019-07-02', 1, '----', 'aditya', '2019-05-22 20:20:34'),
(94, 1, '2019-07-03', 1, '----', 'aditya', '2019-05-22 20:20:34'),
(95, 1, '2019-07-04', 1, '----', 'aditya', '2019-05-22 20:20:34'),
(96, 1, '2019-07-05', 1, '----', 'aditya', '2019-05-22 20:20:34'),
(97, 1, '2019-07-06', 1, '----', 'aditya', '2019-05-22 20:20:34'),
(98, 1, '2019-07-07', 1, '----', 'aditya', '2019-05-22 20:20:34'),
(99, 1, '2019-07-08', 1, '----', 'aditya', '2019-05-22 20:20:34'),
(100, 1, '2019-07-09', 1, '----', 'aditya', '2019-05-22 20:20:34'),
(101, 1, '2019-07-10', 1, '----', 'aditya', '2019-05-22 20:20:34'),
(102, 1, '2019-07-11', 1, '----', 'aditya', '2019-05-22 20:20:34'),
(103, 1, '2019-07-12', 1, '----', 'aditya', '2019-05-22 20:20:34'),
(104, 1, '2019-07-13', 1, '----', 'aditya', '2019-05-22 20:20:34'),
(105, 1, '2019-07-14', 1, '----', 'aditya', '2019-05-22 20:20:34'),
(106, 1, '2019-07-15', 1, '----', 'aditya', '2019-05-22 20:20:34'),
(107, 1, '2019-07-16', 1, '----', 'aditya', '2019-05-22 20:20:34'),
(108, 1, '2019-07-17', 1, '----', 'aditya', '2019-05-22 20:20:34'),
(109, 1, '2019-07-18', 1, '----', 'aditya', '2019-05-22 20:20:34'),
(110, 1, '2019-07-19', 1, '----', 'aditya', '2019-05-22 20:20:34'),
(111, 1, '2019-07-20', 1, '----', 'aditya', '2019-05-22 20:20:34'),
(112, 1, '2019-07-21', 1, '----', 'aditya', '2019-05-22 20:20:34'),
(113, 1, '2019-07-22', 1, '----', 'aditya', '2019-05-22 20:20:34'),
(114, 1, '2019-07-23', 1, '----', 'aditya', '2019-05-22 20:20:34'),
(115, 1, '2019-07-24', 1, '----', 'aditya', '2019-05-22 20:20:34'),
(116, 1, '2019-07-25', 1, '----', 'aditya', '2019-05-22 20:20:34'),
(117, 1, '2019-07-26', 1, '----', 'aditya', '2019-05-22 20:20:34'),
(118, 1, '2019-07-27', 1, '----', 'aditya', '2019-05-22 20:20:34'),
(119, 1, '2019-07-28', 1, '----', 'aditya', '2019-05-22 20:20:34'),
(120, 1, '2019-07-29', 1, '----', 'aditya', '2019-05-22 20:20:34'),
(121, 1, '2019-07-30', 1, '----', 'aditya', '2019-05-22 20:20:34'),
(122, 1, '2019-07-31', 1, '----', 'aditya', '2019-05-22 20:20:34');

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
  `phn_no` varchar(13) NOT NULL,
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

INSERT INTO `hostel_details` (`si_no`, `academic_year`, `status`, `fee_status`, `fee_head_id`, `adm_no`, `name`, `room_no`, `floor_no`, `hostel_code`, `course`, `semester`, `branch`, `phn_no`, `remarks`, `allocated_on`, `reason`, `vacated_on`, `vct_remarks`, `entered_by`, `verified_by`, `verification_remarks`) VALUES
(1, NULL, 1, NULL, NULL, 4501, 'Jerin', 10, 1, 1, 'BTECH', 'S1', 'CSE', '7012788627', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, 1, NULL, NULL, 4502, 'Anand', 11, 1, 1, 'BTECH', 'S1', 'ECE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, 1, NULL, NULL, 4503, 'Rahul', 12, 1, 1, 'BTECH', 'S1', 'ME', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, 1, NULL, NULL, 4504, 'Bhim', 13, 1, 1, 'BTECH', 'S1', 'EEE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, 1, NULL, NULL, 4505, 'Aju', 14, 1, 1, 'BTECH', 'S1', 'CE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, 1, NULL, NULL, 4511, 'Jithin', 110, 2, 1, 'BTECH', 'S3', 'CSE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, 1, NULL, NULL, 4512, 'Kevin', 111, 2, 1, 'BTECH', 'S3', 'ECE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, 1, NULL, NULL, 4513, 'Jishnu', 112, 2, 1, 'BTECH', 'S3', 'EEE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, 1, NULL, NULL, 4514, 'Omar', 113, 2, 1, 'BTECH', 'S3', 'CE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, 1, NULL, NULL, 4515, 'Tintu', 114, 2, 1, 'BTECH', 'S3', 'ME', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, 1, NULL, NULL, 4601, 'Ted', 21, 1, 2, 'BTECH', 'S5', 'CSE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, 1, NULL, NULL, 4602, 'Daniel', 22, 1, 2, 'BTECH', 'S5', 'ECE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, 1, NULL, NULL, 4603, 'Sanjo', 23, 1, 2, 'BTECH', 'S5', 'EEE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, 1, NULL, NULL, 4604, 'Noyal', 24, 1, 2, 'BTECH', 'S5', 'CE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, 1, NULL, NULL, 4605, 'Libin', 25, 1, 2, 'BTECH', 'S5', 'ME', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, 1, NULL, NULL, 4611, 'Shijo', 121, 2, 2, 'BTECH', 'S7', 'ME', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, 1, NULL, NULL, 4612, 'Aman', 122, 2, 2, 'BTECH', 'S7', 'CE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, NULL, 1, NULL, NULL, 4613, 'Afsal', 123, 2, 2, 'BTECH', 'S7', 'ECE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, NULL, 1, NULL, NULL, 4614, 'Cyril', 124, 2, 2, 'BTECH', 'S7', 'CSE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, NULL, 1, NULL, NULL, 4615, 'Vishnu', 125, 2, 2, 'BTECH', 'S7', 'EEE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, NULL, 1, NULL, NULL, 4902, 'Rinoj', 212, 3, 1, 'MTECH', 'M1', 'ECE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, NULL, 1, NULL, NULL, 4901, 'Shinto', 211, 3, 1, 'MTECH', 'M1', 'CSE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, NULL, 1, NULL, NULL, 4903, 'Rohan', 213, 3, 1, 'MTECH', 'M1', 'EEE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, NULL, 1, NULL, NULL, 4904, 'Rinto', 214, 3, 1, 'MTECH', 'M1', 'CE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, NULL, 1, NULL, NULL, 4905, 'Tijo', 215, 3, 1, 'MTECH', 'M1', 'ME', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, NULL, 1, NULL, NULL, 4911, 'Edwin', 221, 3, 2, 'MTECH', 'M3', 'CE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, NULL, 1, NULL, NULL, 4912, 'Jerin', 222, 3, 2, 'MTECH', 'M3', 'EEE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, NULL, 1, NULL, NULL, 4913, 'Titto', 223, 3, 2, 'MTECH', 'M3', 'ECE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, NULL, 1, NULL, NULL, 4914, 'Aswin', 224, 3, 2, 'MTECH', 'M3', 'CSE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, NULL, 1, NULL, NULL, 4915, 'Nikhil A', 225, 3, 2, 'MTECH', 'M3', 'ME', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, NULL, 1, NULL, NULL, 4506, 'Ajay', 10, 1, 1, 'BTECH', 'S1', 'CSE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, NULL, 1, NULL, NULL, 4507, 'Aditya', 10, 1, 1, 'BTECH', 'S1', 'CSE', '9947189437', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, NULL, 1, NULL, NULL, 4508, 'Brian', 11, 1, 1, 'BTECH', 'S1', 'ECE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, NULL, 1, NULL, NULL, 4509, 'Brad', 13, 1, 1, 'BTECH', 'S1', 'EEE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, NULL, 1, NULL, NULL, 4510, 'Kriss', 14, 1, 1, 'BTECH', 'S1', 'CE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, NULL, 1, NULL, NULL, 4516, 'Drew', 111, 2, 1, 'BTECH', 'S3', 'ECE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, NULL, 1, NULL, NULL, 4517, 'Danny', 112, 2, 1, 'BTECH', 'S3', 'EEE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, NULL, 1, NULL, NULL, 4518, 'Chingan', 114, 2, 1, 'BTECH', 'S3', 'ME', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `si_no` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `incharge` varchar(25) NOT NULL,
  `admin_priority` int(2) NOT NULL,
  PRIMARY KEY (`si_no`),
  UNIQUE KEY `si_no` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`si_no`, `name`, `user_id`, `password`, `incharge`, `admin_priority`) VALUES
(1, 'Jerin', 'jerin', '3f7cf81f5056b329e5f02ca04e0efa66', 'Student 1', 1),
(2, 'Abijith', 'abijith', 'd76f3d05cc9ac98f1f9160274a39fe33', 'Student 2', 2),
(3, 'Aditya', 'aditya', '21232f297a57a5a743894a0e4a801fc3', 'Student 3', 2),
(4, 'Divya', 'divya', '65104f10b780a5c9732549a47d4e3239', 'Student 4', 2),
(9, 'Ajay', 'ajay', '29e457082db729fa1059d4294ede3909', 'Student 5', 2);

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

DROP TABLE IF EXISTS `login_details`;
CREATE TABLE IF NOT EXISTS `login_details` (
  `si_no` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(20) NOT NULL,
  `session_in` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `session_out` datetime DEFAULT NULL,
  PRIMARY KEY (`si_no`)
) ENGINE=MyISAM AUTO_INCREMENT=107 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`si_no`, `user_id`, `session_in`, `session_out`) VALUES
(1, 'jerin', '2019-05-11 18:59:32', '2019-05-11 13:29:39'),
(2, 'jerin', '2019-05-11 19:05:38', '2019-05-11 13:36:02'),
(3, 'jerin', '2019-05-11 19:06:29', '2019-05-11 19:14:48'),
(4, 'aditya', '2019-05-11 19:17:12', '2019-05-11 19:29:34'),
(5, 'jerin', '2019-05-12 13:53:36', '2019-05-12 14:07:50'),
(6, 'jerin', '2019-05-12 15:04:31', NULL),
(7, 'jerin', '2019-05-18 21:58:27', '2019-05-18 22:29:40'),
(8, 'jerin', '2019-05-18 23:04:28', '2019-05-20 22:17:42'),
(9, 'jerin', '2019-05-20 22:18:28', '2019-05-20 22:23:42'),
(10, 'jerin', '2019-05-20 22:28:25', NULL),
(11, 'jerin', '2019-05-22 19:51:41', '2019-05-22 19:52:18'),
(12, 'jerin', '2019-05-22 19:52:31', '2019-05-22 20:10:31'),
(13, 'jerin', '2019-05-22 20:11:44', '2019-05-22 22:07:47'),
(14, 'jerin', '2019-05-22 22:11:24', NULL),
(15, 'jerin', '2019-05-22 22:15:14', '2019-05-22 22:47:05'),
(16, 'jerin', '2019-05-22 22:47:30', NULL),
(17, 'jerin', '2019-05-22 23:23:33', '2019-05-22 23:29:25'),
(18, 'jerin', '2019-05-22 23:31:10', '2019-05-22 23:31:23'),
(19, 'jerin', '2019-05-22 23:31:32', '2019-05-22 23:34:54'),
(20, 'jerin', '2019-05-22 23:34:58', '2019-05-22 23:36:30'),
(21, 'jerin', '2019-05-22 23:37:21', '2019-05-22 23:54:00'),
(22, 'jerin', '2019-05-22 23:54:03', NULL),
(23, 'jerin', '2019-05-23 00:37:58', NULL),
(24, 'jerin', '2019-05-23 12:16:52', '2019-05-23 12:34:12'),
(25, 'jerin', '2019-05-23 12:34:15', '2019-05-23 13:23:58'),
(26, 'jerin', '2019-05-23 13:24:01', NULL),
(27, 'jerin', '2019-05-23 13:24:20', NULL),
(28, 'jerin', '2019-05-23 14:57:31', NULL),
(29, 'jerin', '2019-05-23 15:10:31', NULL),
(30, 'jerin', '2019-05-23 19:17:13', NULL),
(31, 'jerin', '2019-05-23 19:33:44', '2019-05-23 19:34:49'),
(32, 'jerin', '2019-05-23 19:35:53', NULL),
(33, 'jerin', '2019-05-23 19:49:53', '2019-05-23 19:51:50'),
(34, 'jerin', '2019-05-23 19:54:44', NULL),
(35, 'jerin', '2019-05-23 20:57:18', NULL),
(36, 'jerin', '2019-05-23 21:08:14', '2019-05-23 22:15:20'),
(37, 'jerin', '2019-05-23 22:15:23', '2019-05-23 22:15:29'),
(38, 'jerin', '2019-05-23 22:16:48', NULL),
(39, 'jerin', '2019-05-23 22:19:06', NULL),
(40, 'jerin', '2019-05-23 22:20:36', '2019-05-23 22:22:38'),
(41, 'jerin', '2019-05-23 22:30:10', NULL),
(42, 'jerin', '2019-05-23 22:35:43', '2019-05-23 22:36:02'),
(43, 'jerin', '2019-05-23 22:42:29', '2019-05-23 22:43:07'),
(44, 'jerin', '2019-05-29 20:48:20', '2019-05-29 20:50:59'),
(45, 'jerin', '2019-05-29 20:52:54', '2019-05-31 19:48:48'),
(46, 'jerin', '2019-05-31 19:48:50', '2019-05-31 21:25:36'),
(47, 'jerin', '2019-05-31 21:26:10', '2019-05-31 21:30:26'),
(48, 'jerin', '2019-05-31 21:30:31', '2019-05-31 22:41:19'),
(49, 'jerin', '2019-05-31 22:41:22', NULL),
(50, 'jerin', '2019-05-31 22:47:49', '2019-05-31 22:54:08'),
(51, 'jerin', '2019-05-31 22:54:12', '2019-05-31 22:54:58'),
(52, 'jerin', '2019-05-31 22:55:40', '2019-06-02 21:08:53'),
(53, 'jerin', '2019-06-02 21:11:01', '2019-06-02 21:12:32'),
(54, 'jerin', '2019-06-02 21:12:39', '2019-06-02 21:12:43'),
(55, 'jerin', '2019-06-02 23:17:17', NULL),
(56, 'jerin', '2019-06-02 23:18:33', '2019-06-02 23:22:14'),
(57, 'jerin', '2019-06-02 23:44:53', '2019-06-02 23:45:02'),
(58, 'jerin', '2019-06-04 15:03:42', '2019-06-04 21:29:10'),
(59, 'jerin', '2019-06-04 21:35:55', NULL),
(60, 'aditya', '2019-06-04 21:36:14', NULL),
(61, 'jerin', '2019-06-04 21:39:56', '2019-06-04 21:44:07'),
(62, 'jerin', '2019-06-04 21:44:14', '2019-06-04 21:46:10'),
(63, 'aditya', '2019-06-04 21:46:14', '2019-06-04 21:46:21'),
(64, 'jerin', '2019-06-04 21:46:37', '2019-06-04 21:46:46'),
(65, 'jerin', '2019-06-04 21:46:48', NULL),
(66, 'aditya', '2019-06-04 21:51:24', '2019-06-04 21:53:06'),
(67, 'jerin', '2019-06-04 21:57:59', NULL),
(68, 'aditya', '2019-06-04 23:22:08', '2019-06-04 23:28:46'),
(69, 'aditya', '2019-06-04 23:28:50', '2019-06-04 23:29:01'),
(70, 'jerin', '2019-06-04 23:29:10', NULL),
(71, 'aditya', '2019-06-10 22:48:20', '2019-06-10 22:49:21'),
(72, 'jerin', '2019-06-10 22:49:26', '2019-06-10 23:04:27'),
(73, 'aditya', '2019-06-10 23:04:31', NULL),
(74, 'aditya', '2019-06-10 23:56:46', NULL),
(75, 'aditya', '2019-06-13 12:01:50', '2019-06-16 15:08:11'),
(76, 'jerin', '2019-06-16 15:08:41', NULL),
(77, 'jerin', '2019-06-17 18:21:13', '2019-06-17 18:21:19'),
(78, 'aditya', '2019-06-17 18:21:26', NULL),
(79, 'aditya', '2019-06-17 18:28:03', NULL),
(80, 'aditya', '2019-06-17 18:54:46', '2019-06-17 19:13:08'),
(81, 'aditya', '2019-06-17 19:22:22', '2019-06-17 19:46:26'),
(82, 'jerin', '2019-06-17 19:46:35', NULL),
(83, 'aditya', '2019-06-17 19:51:37', NULL),
(84, 'aditya', '2019-06-17 20:24:55', '2019-06-17 20:25:00'),
(85, 'jerin', '2019-06-17 20:25:04', '2019-06-18 20:24:19'),
(86, 'jerin', '2019-06-18 20:24:23', '2019-06-18 20:25:24'),
(87, 'jerin', '2019-06-18 20:25:27', '2019-06-18 23:06:27'),
(88, 'jerin', '2019-06-18 23:06:31', NULL),
(89, 'jerin', '2019-06-19 18:53:08', NULL),
(90, 'jerin', '2019-06-19 22:07:03', '2019-06-19 22:27:27'),
(91, 'jerin', '2019-06-19 22:27:29', '2019-06-19 22:28:34'),
(92, 'jerin', '2019-06-19 22:28:35', '2019-06-19 22:28:55'),
(93, 'jerin', '2019-06-19 22:28:56', '2019-06-19 22:30:19'),
(94, 'jerin', '2019-06-19 22:30:21', NULL),
(95, 'jerin', '2019-06-19 22:34:30', NULL),
(96, 'jerin', '2019-06-19 22:34:50', NULL),
(97, 'jerin', '2019-06-19 22:35:07', NULL),
(98, 'jerin', '2019-06-19 22:35:17', NULL),
(99, 'jerin', '2019-06-19 22:35:35', '2019-06-19 22:37:29'),
(100, 'aditya', '2019-06-19 22:37:32', '2019-06-19 22:37:42'),
(101, 'jerin', '2019-06-19 22:37:45', '2019-06-19 22:41:13'),
(102, 'aditya', '2019-06-19 22:41:17', '2019-06-19 22:42:14'),
(103, 'jerin', '2019-06-19 22:42:20', '2019-06-19 22:49:18'),
(104, 'jerin', '2019-06-19 22:49:20', NULL),
(105, 'jerin', '2019-06-27 11:10:37', NULL),
(106, 'jerin', '2019-06-27 22:23:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sms_auth`
--

DROP TABLE IF EXISTS `sms_auth`;
CREATE TABLE IF NOT EXISTS `sms_auth` (
  `sl_no` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(35) NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_auth`
--

INSERT INTO `sms_auth` (`sl_no`, `name`, `username`, `password`) VALUES
(1, 'Jerin', 'jerinji2016@gmail.com', 'jimmyjerin.in'),
(2, 'Aditya', 'adityavishnu3610@gmail.com', 'justtesting');

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
