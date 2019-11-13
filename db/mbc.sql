-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 13, 2019 at 10:55 AM
-- Server version: 10.1.36-MariaDB
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
CREATE TABLE `hostel` (
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

CREATE TABLE `hostel_absent_type` (
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

CREATE TABLE `hostel_academic_details` (
  `si_no` int(5) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `academic_from` int(4) NOT NULL,
  `academic_to` int(4) NOT NULL,
  `entered_by` varchar(20) NOT NULL,
  `entered_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_academic_details`
--

INSERT INTO `hostel_academic_details` (`si_no`, `start_date`, `end_date`, `academic_from`, `academic_to`, `entered_by`, `entered_on`) VALUES
(1, '2019-04-01', '2019-05-01', 2019, 2023, 'jerin', '2019-04-18 05:40:14');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_attendance_details`
--

CREATE TABLE `hostel_attendance_details` (
  `si_no` int(10) NOT NULL,
  `status` int(1) DEFAULT NULL,
  `date_id` int(11) DEFAULT NULL,
  `adm_no` int(20) DEFAULT NULL,
  `absent_id` int(100) DEFAULT NULL,
  `entered_by` varchar(20) DEFAULT NULL,
  `remarks` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_attendance_details`
--

INSERT INTO `hostel_attendance_details` (`si_no`, `status`, `date_id`, `adm_no`, `absent_id`, `entered_by`, `remarks`) VALUES
(1, 0, 13, 4502, NULL, 'aditya', ''),
(2, 0, 13, 4508, NULL, 'aditya', '');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_date_details`
--

CREATE TABLE `hostel_date_details` (
  `si_no` int(10) NOT NULL,
  `status` int(11) NOT NULL,
  `date` date NOT NULL,
  `day_type` int(3) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `entered_by` varchar(30) NOT NULL,
  `entered_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_date_details`
--

INSERT INTO `hostel_date_details` (`si_no`, `status`, `date`, `day_type`, `remarks`, `entered_by`, `entered_on`) VALUES
(1, 1, '2019-11-01', 1, '----', 'aditya', '2019-11-13 14:03:45'),
(2, 1, '2019-11-02', 1, '----', 'aditya', '2019-11-13 14:03:45'),
(3, 1, '2019-11-03', 1, '----', 'aditya', '2019-11-13 14:03:45'),
(4, 1, '2019-11-04', 1, '----', 'aditya', '2019-11-13 14:03:45'),
(5, 1, '2019-11-05', 1, '----', 'aditya', '2019-11-13 14:03:45'),
(6, 1, '2019-11-06', 1, '----', 'aditya', '2019-11-13 14:03:45'),
(7, 1, '2019-11-07', 1, '----', 'aditya', '2019-11-13 14:03:45'),
(8, 1, '2019-11-08', 1, '----', 'aditya', '2019-11-13 14:03:45'),
(9, 1, '2019-11-09', 1, '----', 'aditya', '2019-11-13 14:03:45'),
(10, 1, '2019-11-10', 1, '----', 'aditya', '2019-11-13 14:03:45'),
(11, 1, '2019-11-11', 1, '----', 'aditya', '2019-11-13 14:03:45'),
(12, 1, '2019-11-12', 1, '----', 'aditya', '2019-11-13 14:03:45'),
(13, 1, '2019-11-13', 1, '----', 'aditya', '2019-11-13 14:03:45'),
(14, 1, '2019-11-14', 1, '----', 'aditya', '2019-11-13 14:03:45'),
(15, 1, '2019-11-15', 1, '----', 'aditya', '2019-11-13 14:03:45'),
(16, 1, '2019-11-16', 1, '----', 'aditya', '2019-11-13 14:03:45'),
(17, 1, '2019-11-17', 1, '----', 'aditya', '2019-11-13 14:03:45'),
(18, 1, '2019-11-18', 1, '----', 'aditya', '2019-11-13 14:03:45'),
(19, 1, '2019-11-19', 1, '----', 'aditya', '2019-11-13 14:03:45'),
(20, 1, '2019-11-20', 1, '----', 'aditya', '2019-11-13 14:03:45'),
(21, 1, '2019-11-21', 1, '----', 'aditya', '2019-11-13 14:03:45'),
(22, 1, '2019-11-22', 1, '----', 'aditya', '2019-11-13 14:03:45'),
(23, 1, '2019-11-23', 1, '----', 'aditya', '2019-11-13 14:03:45'),
(24, 1, '2019-11-24', 1, '----', 'aditya', '2019-11-13 14:03:45'),
(25, 1, '2019-11-25', 1, '----', 'aditya', '2019-11-13 14:03:45'),
(26, 1, '2019-11-26', 1, '----', 'aditya', '2019-11-13 14:03:45'),
(27, 1, '2019-11-27', 1, '----', 'aditya', '2019-11-13 14:03:45'),
(28, 1, '2019-11-28', 1, '----', 'aditya', '2019-11-13 14:03:45'),
(29, 1, '2019-11-29', 1, '----', 'aditya', '2019-11-13 14:03:45'),
(30, 1, '2019-11-30', 1, '----', 'aditya', '2019-11-13 14:03:45');

-- --------------------------------------------------------

--
-- Table structure for table `hostel_details`
--

CREATE TABLE `hostel_details` (
  `si_no` int(10) NOT NULL,
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
  `verification_remarks` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel_details`
--

INSERT INTO `hostel_details` (`si_no`, `academic_year`, `status`, `fee_status`, `fee_head_id`, `adm_no`, `name`, `room_no`, `floor_no`, `hostel_code`, `course`, `semester`, `branch`, `phn_no`, `remarks`, `allocated_on`, `reason`, `vacated_on`, `vct_remarks`, `entered_by`, `verified_by`, `verification_remarks`) VALUES
(1, NULL, 1, NULL, NULL, 4501, 'Jerin', 10, 1, 1, 'BTECH', 'S1', 'CSE', '7012788627', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, 1, NULL, NULL, 4502, 'Anand', 11, 1, 1, 'BTECH', 'S1', 'ECE', '8086146060', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
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
(40, NULL, 1, NULL, NULL, 4508, 'Brian', 11, 1, 1, 'BTECH', 'S1', 'ECE', '9544982304', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, NULL, 1, NULL, NULL, 4509, 'Brad', 13, 1, 1, 'BTECH', 'S1', 'EEE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, NULL, 1, NULL, NULL, 4510, 'Kriss', 14, 1, 1, 'BTECH', 'S1', 'CE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, NULL, 1, NULL, NULL, 4516, 'Drew', 111, 2, 1, 'BTECH', 'S3', 'ECE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, NULL, 1, NULL, NULL, 4517, 'Danny', 112, 2, 1, 'BTECH', 'S3', 'EEE', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, NULL, 1, NULL, NULL, 4518, 'Chingan', 114, 2, 1, 'BTECH', 'S3', 'ME', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `si_no` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `incharge` varchar(25) NOT NULL,
  `admin_priority` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`si_no`, `name`, `user_id`, `password`, `incharge`, `admin_priority`) VALUES
(1, 'Jerin', 'jerin', '3f7cf81f5056b329e5f02ca04e0efa66', 'Student 1', 1),
(2, 'Abijith', 'abijith', 'd76f3d05cc9ac98f1f9160274a39fe33', 'Student 2', 3),
(3, 'Aditya', 'aditya', '21232f297a57a5a743894a0e4a801fc3', 'Student 3', 2),
(4, 'Divya', 'divya', '65104f10b780a5c9732549a47d4e3239', 'Student 4', 2),
(9, 'Ajay', 'ajay', '29e457082db729fa1059d4294ede3909', 'Student 5', 3),
(26, 'Use For Testing', 'test', '098f6bcd4621d373cade4e832627b4f6', 'Testing', 4);

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `si_no` int(5) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `session_in` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `session_out` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`si_no`, `user_id`, `session_in`, `session_out`) VALUES
(1, 'jerin', '2019-07-01 00:44:26', NULL),
(2, 'jerin', '2019-07-01 19:31:31', NULL),
(3, 'jerin', '2019-07-01 21:52:54', NULL),
(4, 'jerin', '2019-07-01 22:11:40', NULL),
(5, 'jerin', '2019-07-24 12:52:09', NULL),
(6, 'jerin', '2019-08-27 22:00:04', '2019-08-27 23:40:52'),
(7, 'aditya', '2019-08-27 23:40:55', NULL),
(8, 'aditya', '2019-08-27 23:40:55', '2019-08-27 23:41:34'),
(9, 'jerin', '2019-08-27 23:41:37', '2019-08-27 23:44:43'),
(10, 'jerin', '2019-08-27 23:44:51', '2019-08-27 23:48:12'),
(11, 'jerin', '2019-08-27 23:48:17', '2019-08-27 23:48:19'),
(12, 'aditya', '2019-08-27 23:48:25', '2019-08-27 23:49:25'),
(13, 'jerin', '2019-08-27 23:49:32', '2019-09-02 21:16:26'),
(14, 'jerin', '2019-09-02 21:16:28', '2019-09-02 21:17:55'),
(15, 'jerin', '2019-09-02 21:22:50', NULL),
(16, 'jerin', '2019-09-06 15:04:46', NULL),
(17, 'jerin', '2019-09-09 15:16:50', '2019-09-09 19:00:47'),
(18, 'aditya', '2019-09-09 19:00:52', '2019-09-09 19:20:41'),
(19, 'jerin', '2019-09-09 19:20:47', '2019-09-09 20:17:55'),
(20, 'jerin', '2019-09-09 20:17:59', '2019-09-09 20:19:04'),
(21, 'aditya', '2019-09-09 20:19:38', NULL),
(22, 'aditya', '2019-09-09 20:42:55', '2019-09-09 21:01:51'),
(23, 'aditya', '2019-09-09 21:01:54', '2019-09-09 21:50:49'),
(24, 'aditya', '2019-09-09 21:50:52', '2019-09-09 22:23:42'),
(25, 'jerin', '2019-09-09 22:24:33', '2019-09-09 22:26:32'),
(26, 'aditya', '2019-09-09 22:26:35', '2019-09-09 22:38:18'),
(27, 'jerin', '2019-09-09 22:38:22', '2019-09-09 22:40:07'),
(28, 'aditya', '2019-09-09 22:40:10', '2019-09-09 22:44:05'),
(29, 'divya', '2019-09-09 22:44:16', '2019-09-09 22:44:21'),
(30, 'divya', '2019-09-09 22:44:56', '2019-09-09 22:45:43'),
(31, 'jerin', '2019-09-09 22:45:49', NULL),
(32, 'divya', '2019-09-09 22:47:47', '2019-09-09 23:10:21'),
(33, 'divya', '2019-09-09 23:10:23', '2019-09-09 23:11:02'),
(34, 'jerin', '2019-09-09 23:11:06', '2019-09-09 23:22:41'),
(35, 'jerin', '2019-09-09 23:22:43', NULL),
(36, 'aditya', '2019-09-09 23:39:14', '2019-09-09 23:49:51'),
(37, 'jerin', '2019-09-09 23:49:55', NULL),
(38, 'jerin', '2019-09-10 12:24:39', '2019-09-10 12:29:44'),
(39, 'aditya', '2019-09-10 12:29:48', NULL),
(40, 'jerin', '2019-09-10 12:31:23', '2019-09-10 12:40:57'),
(41, 'jerin', '2019-09-10 12:41:01', NULL),
(42, 'jerin', '2019-09-10 17:22:31', NULL),
(43, 'divya', '2019-09-10 17:51:50', NULL),
(44, 'divya', '2019-09-10 18:05:23', NULL),
(45, 'divya', '2019-11-04 17:04:12', '2019-11-04 17:09:15'),
(46, 'jerin', '2019-11-06 17:08:26', NULL),
(47, 'aditya', '2019-11-13 13:46:32', NULL),
(48, 'jerin', '2019-11-13 14:12:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `report_student`
--

CREATE TABLE `report_student` (
  `sl_no` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `adm_no` int(5) NOT NULL,
  `course` varchar(10) NOT NULL,
  `semester` varchar(5) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `status` int(2) NOT NULL,
  `report` varchar(300) NOT NULL,
  `incharge` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report_student`
--

INSERT INTO `report_student` (`sl_no`, `name`, `adm_no`, `course`, `semester`, `branch`, `status`, `report`, `incharge`, `date`) VALUES
(1, 'Jerin', 4501, 'BTECH', 'S1', 'CSE', 0, 'sdfbhsdfs', 'Divya', '2019-09-09'),
(2, 'Aditya', 4507, 'BTECH', 'S1', 'CSE', 1, 'bad', 'Divya', '2019-09-09'),
(3, 'Ajay', 4506, 'BTECH', 'S1', 'CSE', 0, 'badder', 'Divya', '2019-08-02'),
(4, 'Jerin', 4501, 'BTECH', 'S1', 'CSE', 1, 'august', 'Aditya', '2019-08-09'),
(5, 'Ajay', 4506, 'BTECH', 'S1', 'CSE', 1, 'julyil veranam', 'Aditya', '2019-07-25'),
(6, 'Rahul', 4503, 'BTECH', 'S1', 'ME', 1, 'basdjhbskf', 'Aditya', '2019-09-10'),
(7, 'Brad', 4509, 'BTECH', 'S1', 'EEE', 1, 'kjskdhgpdih', 'Aditya', '2019-09-10');

-- --------------------------------------------------------

--
-- Table structure for table `sms_auth`
--

CREATE TABLE `sms_auth` (
  `sl_no` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hostel_academic_details`
--
ALTER TABLE `hostel_academic_details`
  ADD PRIMARY KEY (`si_no`);

--
-- Indexes for table `hostel_attendance_details`
--
ALTER TABLE `hostel_attendance_details`
  ADD PRIMARY KEY (`si_no`);

--
-- Indexes for table `hostel_date_details`
--
ALTER TABLE `hostel_date_details`
  ADD PRIMARY KEY (`si_no`);

--
-- Indexes for table `hostel_details`
--
ALTER TABLE `hostel_details`
  ADD PRIMARY KEY (`si_no`),
  ADD UNIQUE KEY `adm_no` (`adm_no`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`si_no`),
  ADD UNIQUE KEY `si_no` (`user_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`si_no`);

--
-- Indexes for table `report_student`
--
ALTER TABLE `report_student`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `sms_auth`
--
ALTER TABLE `sms_auth`
  ADD PRIMARY KEY (`sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hostel_academic_details`
--
ALTER TABLE `hostel_academic_details`
  MODIFY `si_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hostel_attendance_details`
--
ALTER TABLE `hostel_attendance_details`
  MODIFY `si_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hostel_date_details`
--
ALTER TABLE `hostel_date_details`
  MODIFY `si_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `hostel_details`
--
ALTER TABLE `hostel_details`
  MODIFY `si_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `si_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `si_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `report_student`
--
ALTER TABLE `report_student`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sms_auth`
--
ALTER TABLE `sms_auth`
  MODIFY `sl_no` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
