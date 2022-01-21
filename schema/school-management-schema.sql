-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 21, 2022 at 12:37 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_accounts`
--

CREATE TABLE `admin_accounts` (
  `adminID` int(255) NOT NULL,
  `adminNumber` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_accounts`
--

INSERT INTO `admin_accounts` (`adminID`, `adminNumber`, `username`, `password`, `firstname`, `lastname`, `status`) VALUES
(1, 'TUP-ADMIN-0000', 'admin', '$2y$10$cFxtHgNDDa21QJU/uEQXlOp3j5iREQTk/SDFMpwn2iJAczXNQUv1K', 'admin', '', 1),
(2, 'TUP-ADMIN-5525', 'admin-01', '$2y$10$H4GOzj1LQtLLeFZu7EByMe0aPMW92JTq59Kj51JsgQlfIhV6c/4Dq', 'William Cris', 'Hod', 1);

-- --------------------------------------------------------

--
-- Table structure for table `applicant_accounts`
--

CREATE TABLE `applicant_accounts` (
  `applicantID` int(255) NOT NULL,
  `applicantNumber` varchar(255) NOT NULL,
  `courseID` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `extname` varchar(255) NOT NULL,
  `LRN` bigint(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `birthday` date NOT NULL,
  `birthplace` varchar(255) NOT NULL,
  `contactnum` varchar(255) NOT NULL,
  `landline` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `zipcode` int(255) NOT NULL,
  `last_school_attended` varchar(255) NOT NULL,
  `track` varchar(255) NOT NULL,
  `school_address` varchar(255) NOT NULL,
  `year_level` varchar(255) NOT NULL,
  `year_graduated` int(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `gpa` int(255) NOT NULL,
  `medical_record` varchar(255) NOT NULL,
  `form_137` varchar(255) NOT NULL,
  `good_moral` varchar(255) NOT NULL,
  `applicant_result` varchar(255) NOT NULL,
  PRIMARY KEY (`applicantID`),
  KEY `studentCourse` (`courseID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant_accounts`
--

INSERT INTO `applicant_accounts` (`applicantID`, `applicantNumber`, `courseID`, `firstname`, `middlename`, `lastname`, `extname`, `LRN`, `gender`, `age`, `birthday`, `birthplace`, `contactnum`, `landline`, `email`, `unit`, `street`, `barangay`, `city`, `province`, `zipcode`, `last_school_attended`, `track`, `school_address`, `year_level`, `year_graduated`, `category`, `gpa`, `medical_record`, `form_137`, `good_moral`, `applicant_result`) VALUES
(1, 'TUPM-APPL22-9732', 2, 'William Cris', 'Entero', 'Hod', ' ', 123456, 'Male', 20, '2022-01-08', 'Metro Manila', '09270287483', '717-1426', 'williamcris18@gmail.com', '149', 'Narra Alley', 'Balingasa', 'Quezon City', 'Metro Manila', 1115, 'Siena College', 'ICT', 'Del Monte Avenue, Quezon City', 'grade 12', 2017, 'K-12', 93, 'MR-8ZP9TGYg.jpg', 'F137-8ZP9TGYg.jpg', 'GM-8ZP9TGYg.jpg', 'Student'),
(2, 'TUPM-APPL22-9926', 2, 'Vann Chezter', ' ', 'Lizan', ' ', 123456, 'Male', 20, '2021-12-31', 'Metro Manila', '09270287483', '717-1426', 'williamcris18@gmail.com', '149', 'Narra Alley', 'Balingasa', 'Quezon City', 'Metro Manila', 1115, 'Siena College', 'ABM', 'Del Monte Avenue, Quezon City', 'grade 12', 2017, 'K-12', 93, 'MR-5Nzfwtr8.jpg', 'F137-5Nzfwtr8.jpg', 'GM-5Nzfwtr8.jpg', 'Student'),
(3, 'TUPM-APPL22-4276', 2, 'Lyah Bianca', ' ', 'Aquino', ' ', 123456, 'Female', 20, '2021-12-29', 'Metro Manila', '09270287483', '717-1426', 'williamcrshod@gmail.com', '149', 'Narra Alley', 'Balingasa', 'Quezon City', 'Metro Manila', 1115, 'Siena College', 'ABM', 'Del Monte Avenue, Quezon City', 'grade 12', 2017, 'K-12', 93, 'MR-YZzfaCIu.jpg', 'F137-YZzfaCIu.jpg', 'GM-YZzfaCIu.jpg', 'Student'),
(4, 'TUPM-APPL22-7328', 2, 'Minatozaki', 'Sana', 'Hod', ' ', 123456, 'Female', 20, '2022-01-01', 'Metro Manila', '09270287483', '717-1426', 'williamcris18@gmail.com', '149', 'Narra Alley', 'Balingasa', 'Quezon City', 'Metro Manila', 1115, 'Siena College', 'ABM', 'Del Monte Avenue, Quezon City', 'grade 12', 2017, 'K-12', 93, 'MR-gC9XGZPl.jpg', 'F137-gC9XGZPl.jpg', 'GM-gC9XGZPl.jpg', 'Student'),
(5, 'TUPM-APPL22-3046', 2, 'Matthew Perry', ' ', 'Bustarde', ' ', 123456, 'Male', 20, '2022-01-13', 'Metro Manila', '09270287483', '717-1426', 'williamcris18@gmail.com', '149', 'Narra Alley', 'Balingasa', 'Quezon City', 'Metro Manila', 1115, 'Siena College', 'ICT', 'Del Monte Avenue, Quezon City', 'grade 12', 2017, 'K-12', 93, 'MR-BKGg0Q37.jpg', 'F137-BKGg0Q37.jpg', 'GM-BKGg0Q37.jpg', 'Student'),
(6, 'TUPM-APPL22-9463', 2, 'Kimberly', ' ', 'Delgado', ' ', 123456, 'Female', 20, '2022-01-22', 'Metro Manila', '09270287483', '717-1426', 'williamcris18@gmail.com', '149', 'Narra Alley', 'Balingasa', 'Quezon City', 'Metro Manila', 1115, 'Siena College', 'ABM', 'Del Monte Avenue, Quezon City', 'grade 12', 2017, 'K-12', 93, 'MR-HwBYMQP9.jpg', 'F137-HwBYMQP9.jpg', 'GM-HwBYMQP9.jpg', 'Student'),
(7, 'TUPM-APPL22-3381', 2, 'Harold ', ' ', 'Talavera', ' ', 123456, 'Male', 21, '2022-01-20', 'Metro Manila', '09270287483', '8-7000', 'williamcrshod@gmail.com', '149', 'Narra Alley', 'Balingasa', 'Quezon City', 'Metro Manila', 1115, 'Siena College', 'ABM', 'Del Monte Avenue, Quezon City', 'grade 12', 2017, 'K-12', 93, 'MR-OTgtWiMC.jpg', 'F137-OTgtWiMC.jpg', 'GM-OTgtWiMC.jpg', 'Student'),
(8, 'TUPM-APPL22-9126', 2, 'Czarina', ' ', 'Pielago', ' ', 123456, 'Female', 20, '2022-01-22', 'Metro Manila', '09270287483', '717-1426', 'williamcris18@gmail.com', '149', 'Narra Alley', 'Balingasa', 'Quezon City', 'Metro Manila', 1115, 'Siena College', 'ICT', 'Del Monte Avenue, Quezon City', 'grade 12', 2017, 'K-12', 93, 'MR-EkseLmMr.jpg', 'F137-EkseLmMr.jpg', 'GM-EkseLmMr.jpg', 'Student'),
(9, 'TUPM-APPL22-6075', 5, 'Gabrielle', 'MaColl', 'Demo', ' ', 123456, 'Male', 20, '2022-01-21', 'Metro Manila', '09270287483', '717-1426', 'williamcrshod@gmail.com', '149', 'Narra Alley', 'Balingasa', 'Quezon City', 'Metro Manila', 1115, 'Siena College', 'ICT', 'Del Monte Avenue, Quezon City', 'grade 12', 2017, 'K-12', 93, 'MR-WjyGb05n.jpg', 'F137-WjyGb05n.jpg', 'GM-WjyGb05n.jpg', 'Student'),
(10, 'TUPM-APPL22-6996', 4, 'Paolo', 'Lovidioro', 'Gonzales', ' ', 123456, 'Male', 20, '2022-02-03', 'Metro Manila', '09270287483', '717-1426', 'williamcrshod@gmail.com', '149', 'Narra Alley', 'Balingasa', 'Quezon City', 'Metro Manila', 1115, 'Siena College', 'ICT', 'Del Monte Avenue, Quezon City', 'grade 12', 2017, 'K-12', 93, 'MR-eJfAuUMV.jpg', 'F137-eJfAuUMV.jpg', 'GM-eJfAuUMV.jpg', 'Student'),
(11, 'TUPM-APPL22-8391', 7, 'Raffy', 'Crisostomo', 'Tenedor', ' ', 123456, 'Male', 20, '2022-02-04', 'Metro Manila', '09270287483', '717-1426', 'williamcrshod@gmail.com', '149', 'Narra Alley', 'Balingasa', 'Quezon City', 'Metro Manila', 1115, 'Siena College', 'STEM', 'Del Monte Avenue, Quezon City', 'grade 12', 2017, 'K-12', 93, 'MR-6cABUjvx.jpg', 'F137-6cABUjvx.jpg', 'GM-6cABUjvx.jpg', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `classID` int(255) NOT NULL,
  `class_code` varchar(255) NOT NULL,
  `teacherID` int(255) DEFAULT NULL,
  `subjectID` int(255) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `courseID` int(255) NOT NULL,
  `yearlevel` int(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `room_no` varchar(255) NOT NULL,
  `isTaken` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`classID`),
  KEY `class_subject` (`subjectID`),
  KEY `class_teacher` (`teacherID`),
  KEY `class_course` (`courseID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`classID`, `class_code`, `teacherID`, `subjectID`, `start_time`, `end_time`, `courseID`, `yearlevel`, `day`, `room_no`, `isTaken`, `status`) VALUES
(1, 'CLASS-01', NULL, 1, '20:01:00', '21:01:00', 2, 1, 'Monday', 'TBA', 1, 1),
(2, 'CLASS-01', NULL, 2, '21:01:00', '20:03:00', 2, 1, 'Tuesday', 'TBA', 1, 1),
(3, 'CLASS-01', NULL, 3, '22:01:00', '20:02:00', 2, 1, 'Wednesday', 'TBA', 1, 1),
(4, 'CLASS-01', NULL, 4, '12:01:00', '12:01:00', 2, 1, 'Thursday', 'TBA', 1, 1),
(5, 'CLASS-01', NULL, 5, '20:08:00', '13:02:00', 2, 1, 'Thursday', 'TBA', 1, 1),
(6, 'CLASS-01', NULL, 6, '20:07:00', '13:02:00', 2, 1, 'Wednesday', 'TBA', 1, 1),
(7, 'CLASS-01', NULL, 7, '22:02:00', '20:04:00', 2, 1, 'Friday', 'TBA', 1, 1),
(8, 'CLASS-01', NULL, 8, '23:06:00', '12:02:00', 2, 1, 'Tuesday', 'TBA', 1, 1),
(9, 'CLASS-01', NULL, 9, '20:07:00', '13:02:00', 2, 1, 'Monday', 'TBA', 1, 1),
(10, 'CLASS-01', NULL, 10, '08:02:00', '14:02:00', 2, 1, 'Friday', 'TBA', 1, 1),
(11, 'CLASS-01', NULL, 11, '13:02:00', '20:06:00', 2, 1, 'Wednesday', 'TBA', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `course_table`
--

CREATE TABLE `course_table` (
  `courseID` int(255) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `major` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_table`
--

INSERT INTO `course_table` (`courseID`, `degree`, `major`, `college`, `status`) VALUES
(1, 'Bachelor of Engineering', 'Railway Management', 'College of Engineering', 1),
(2, 'Bachelor of Science', 'Computer Science', 'College of Science', 1),
(3, 'Bachelor of Science', 'Information System', 'College of Engineering', 1),
(4, 'Bachelor of Science', 'Computer Engineering', 'College of Science', 1),
(5, 'Bachelor of Engineering', 'Mechanical Engineering', 'College of Engineering', 1),
(6, 'Bachelor of Science', 'Architecture', 'College of Architecture and Fine Arts', 1),
(7, 'Bachelor of Science', 'Mathematics', 'College of Science', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dropped_subjects`
--

CREATE TABLE `dropped_subjects` (
  `droppedsubjectsID` int(255) DEFAULT NULL,
  `studentID` int(255) NOT NULL,
  `coursesubjectID` int(255) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enrollment_table`
--

CREATE TABLE `enrollment_table` (
  `enrollmentID` int(255) NOT NULL,
  `studentID` int(255) NOT NULL,
  `courseID` int(255) NOT NULL,
  `courses_subjectID` int(255) NOT NULL,
  `payment_gateway` varchar(255) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events_announcements`
--

CREATE TABLE `events_announcements` (
  `eaID` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `creatorID` int(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events_announcements`
--

INSERT INTO `events_announcements` (`eaID`, `title`, `details`, `time`, `date`, `creatorID`, `status`) VALUES
(1, 'Test Announcement 1', 'test', '00:00:00', '2021-12-25', 1, 1),
(2, 'testing ulet', 'kskskksks', '00:00:00', '2022-01-01', 1, 1),
(4, 'test', 'test', '19:03:00', '2021-12-01', 1, 0),
(5, 'test', 'test', '21:58:00', '2021-12-15', 1, 1),
(6, 'test', 'test', '00:19:00', '2021-12-01', 1, 0),
(7, 'testing last', 'PAG ETO GUMANA BIBILI AKO NG PHOTOCARD ULET', '02:35:00', '2021-12-16', 1, 0),
(8, 'last test', 'minjeong cutie', '05:17:00', '2021-12-03', 1, 0),
(10, 'test william admin', 'test', '03:36:00', '2021-12-03', 2, 1),
(11, 'testing add', 'testing chuchu', '18:10:00', '2022-01-05', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `examination_table`
--

CREATE TABLE `examination_table` (
  `examID` int(255) NOT NULL,
  `applicantID` int(255) NOT NULL,
  `schedule` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exam_schedule`
--

CREATE TABLE `exam_schedule` (
  `schedID` int(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `building` varchar(255) NOT NULL,
  `room_no` varchar(255) NOT NULL,
  `floor_no` int(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_schedule`
--

INSERT INTO `exam_schedule` (`schedID`, `date`, `time`, `building`, `room_no`, `floor_no`, `status`) VALUES
(0, '2022-02-05', '15:13:00', 'College of Science', 'COS-153', 2, 1),
(2, '2022-01-07', '02:14:00', 'College of Industrial Education', 'CIE-314', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `section_table`
--

DROP TABLE IF EXISTS `section_table`;
CREATE TABLE IF NOT EXISTS `section_table` (
  `sectionID` int(255) NOT NULL AUTO_INCREMENT,
  `sectionName` varchar(255) NOT NULL,
  `classID` int(255) NOT NULL,
  `courseID` int(255) NOT NULL,
  `capacity` int(255) NOT NULL,
  `studCount` int(255) NOT NULL,
  `yearlevel` int(11) NOT NULL,
  `schoolyear` varchar(255) NOT NULL,
  PRIMARY KEY (`sectionID`),
  KEY `classSection` (`classID`),
  KEY `sectionCourse` (`courseID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_table`
--

INSERT INTO `section_table` (`sectionID`, `sectionName`, `classID`, `courseID`, `capacity`, `studCount`, `yearlevel`, `schoolyear`) VALUES
(1, 'BSCS-NS-1C', 1, 2, 5, 5, 1, '2022-2023');

-- --------------------------------------------------------

--
-- Table structure for table `student-subjects`
--

DROP TABLE IF EXISTS `student-subjects`;
CREATE TABLE IF NOT EXISTS `student-subjects` (
  `studentSubjectID` int(255) NOT NULL AUTO_INCREMENT,
  `studentID` int(255) NOT NULL,
  `subjectID` int(255) NOT NULL,
  `grade` int(255) NOT NULL,
  PRIMARY KEY (`studentSubjectID`),
  KEY `subj` (`subjectID`),
  KEY `stud` (`studentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_accounts`
--

CREATE TABLE `student_accounts` (
  `studentID` int(255) NOT NULL,
  `applicantID` int(255) NOT NULL,
  `studentNumber` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `sectionID` int(255) DEFAULT NULL,
  `yearlevel` int(255) NOT NULL,
  `status` varchar(1) NOT NULL,
  `creatorID` int(255) NOT NULL,
  PRIMARY KEY (`studentID`),
  KEY `studentDetails` (`applicantID`),
  KEY `studentAdmin` (`creatorID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_accounts`
--

INSERT INTO `student_accounts` (`studentID`, `applicantID`, `studentNumber`, `username`, `password`, `sectionID`, `yearlevel`, `status`, `creatorID`) VALUES
(1, 1, 'TUPM-22-9591', 'TUPM-22-9591', '$2y$10$eaU4rFjSVopbf9THGRzX/OFE4M275B215duBRhMt3Icpczpe6SXlG', 1, 1, '1', 1),
(2, 2, 'TUPM-22-7830', 'TUPM-22-7830', '$2y$10$npWPXEszb4cKXVJG3W/cUuurp.btTR/x5xYoV9otrEziid08rUNYa', 1, 1, '1', 1),
(3, 3, 'TUPM-22-8308', 'TUPM-22-8308', '$2y$10$4boc1s78c.G.UCrEAehJF.GBGyZANLzjrwIffptLlASGlGepPvQtm', 1, 1, '1', 1),
(4, 4, 'TUPM-22-2132', 'TUPM-22-2132', '$2y$10$bDSyJgpjrFByyirzgafSdeeitV8gWyU/0q3UHozx7JY6IcyOMjkqm', 1, 1, '1', 1),
(5, 5, 'TUPM-22-9307', 'TUPM-22-9307', '$2y$10$DtZZEEgpw8D6bvTmGscUwubvgtaPinirN2q2VGlS0M8ef0rwlqESi', 1, 1, '1', 1),
(6, 6, 'TUPM-22-6929', 'TUPM-22-6929', '$2y$10$Aws.6dSokiQTTn1hjf/MSO5voIrGmtvLNzoqULIdqHuOoeO9DEc2q', NULL, 1, '1', 1),
(7, 7, 'TUPM-22-5134', 'TUPM-22-5134', '$2y$10$SHgclVbQgR4ZtSItQk3RIOkeOiFNABSrLvJKf79/5QFC0LWMkECMq', NULL, 1, '1', 1),
(8, 8, 'TUPM-22-2491', 'TUPM-22-2491', '$2y$10$ffdNBRGRqqbd2AsjO7LjV.9ZklUiBAjVZFW.IfBsWHIf12yNeZpAu', NULL, 1, '1', 1),
(9, 10, 'TUPM-22-6069', 'TUPM-22-6069', '$2y$10$rNLT0TCv4rm0KB/y6JnSD.cjhuKTdEAGQ.RM.QLDDR30/eD1Ecpde', NULL, 1, '1', 1),
(10, 9, 'TUPM-22-1895', 'TUPM-22-1895', '$2y$10$CldHgsAt.riCf.2bHZqABOEhLJWua6KwNVazFaE1e257YmWG8JGxa', NULL, 1, '1', 1),
(11, 11, 'TUPM-22-2707', 'TUPM-22-2707', '$2y$10$y5U7UrAvhDiVurR3cWkeiuXQl68OmOn/KbT/kpskTfnhYwdG7/4lG', NULL, 1, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_course`
--

CREATE TABLE `student_course` (
  `studentcourseID` int(255) NOT NULL,
  `studentID` int(255) NOT NULL,
  `courseID` int(255) NOT NULL,
  `enrollmentID` int(255) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subjects_table`
--

CREATE TABLE `subjects_table` (
  `subjectID` int(255) NOT NULL,
  `courseID` int(255) NOT NULL,
  `subjectCode` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `units` int(255) NOT NULL,
  `yearlevel` int(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects_table`
--

INSERT INTO `subjects_table` (`subjectID`, `courseID`, `subjectCode`, `name`, `units`, `yearlevel`, `college`, `semester`, `status`) VALUES
(1, 2, 'CC131L-M', 'Computer Programming 1, Lab', 1, 1, 'COS', '1', 1),
(2, 2, 'CC132-M', 'Computer Programming 1, Lec', 2, 1, 'COS', '1', 1),
(3, 2, 'CHEMGENL-M', 'General Chemistry, Laboratory', 1, 1, 'COS', '1', 1),
(4, 2, 'CHEMGEN-M', 'General Chemistry, Lecture', 4, 1, 'COS', '1', 1),
(5, 2, 'PHYSGENL-M', 'General Physics Laboratory', 1, 1, 'COS', '1', 1),
(6, 2, 'PHYSGEN-M', 'General Physics, Lecture', 4, 1, 'COS', '1', 1),
(7, 2, 'CC113-M', 'Introduction to Computing', 3, 1, 'COS', '1', 1),
(8, 2, 'PE1-M', 'Physical Fitness', 2, 1, 'CLA', '1', 1),
(9, 2, 'MATHA05-M', 'Pre-Calculus', 5, 1, 'COS', '1', 1),
(10, 2, 'GEC1-M', 'Understanding the Self', 3, 1, 'CLA', '1', 1),
(11, 2, 'NSTP1-M', 'National Service Training Program 1', 3, 1, 'NSTP', '1', 1),
(12, 2, 'CC101L-M', 'Computer Programming 2, Lab', 1, 1, 'COS', '2', 1),
(13, 2, 'CC102-M', 'Computer Programming 2, Lec', 2, 1, 'COS', '2', 1),
(14, 2, 'MATHA35-M', 'Differential and Integral Calculus', 5, 1, 'COS', '2', 1),
(15, 2, 'CC123-M', 'Discrete Structures', 3, 1, 'COS', '2', 1),
(16, 2, 'CS103-M', 'Linear Algebra', 3, 1, 'COS', '2', 1),
(17, 2, 'GEC4-M', 'Mathematics in the Modern World', 3, 1, 'COS', '2', 1),
(18, 2, 'GEC5-M', 'Purposive Communication', 3, 1, 'CLA', '2', 1),
(19, 2, 'PE2-M', 'Rhythmic Activities', 2, 1, 'CLA', '2', 1),
(20, 2, 'NSTP2-M', 'National Service Training Program 2', 3, 1, 'NSTP', '2', 1),
(21, 2, 'GEC6-M', 'Art Appreciation', 3, 2, 'CAFA', '1', 1),
(22, 2, 'CS213-M', 'Combinatorics and Graph Theory', 3, 2, 'COS', '1', 1),
(23, 2, 'CC271L-M', 'Computer Architecture and Organization, Laboratory', 1, 2, 'COS', '1', 1),
(24, 2, 'CC272-M', 'Computer Architecture and Organization, Lecture', 2, 2, 'COS', '1', 1),
(25, 2, 'CC211L', 'Data Structures and Algorithms, Laboratory', 1, 2, 'COS', '1', 1),
(26, 2, 'CC212-M', 'Data Structures and Algorithms, Lecture', 3, 2, '', '1', 1),
(27, 2, 'CC233-M', 'Human Computer Interaction', 3, 2, '', '1', 1),
(28, 2, 'PE3-M', 'Individual and Dual Sports', 2, 2, '', '1', 1),
(29, 2, 'CC251L-M', 'Object Oriented Programming, Laboratory', 1, 2, '', '1', 1),
(30, 2, 'CC252-M', 'Object Oriented Programming, Lecture', 2, 2, '', '1', 1),
(31, 2, 'GEC7-M', 'Science, Technology and Society', 3, 2, '', '1', 1),
(32, 2, 'CC223-M', 'Applications Development and Emerging Technologies', 3, 2, '', '2', 1),
(33, 2, 'CS203-M', 'Design and Analysis of Algorithms', 3, 2, '', '2', 1),
(34, 2, 'GEC8-M', 'Ethics', 3, 2, '', '2', 1),
(35, 2, 'CC201L-M', 'Information Management, Laboratory', 1, 2, '', '2', 1),
(36, 2, 'CC202-M', 'Information Management, Lecture', 2, 2, '', '2', 1),
(37, 2, 'CS221L-M', 'Networks and Communications, Laboratory', 1, 2, '', '2', 1),
(38, 2, 'CS222-M', 'Networks and Communications, Lecture', 2, 2, '', '2', 1),
(39, 2, 'CC241L-M', 'Operating Systems Concepts, Laboratory', 1, 2, '', '2', 1),
(40, 2, 'CC242-M', 'Operating Systems Concepts, Lecture', 2, 2, '', '2', 1),
(41, 2, 'MATHSTAT03-M', 'Probability and Statistics', 3, 2, '', '2', 1),
(42, 2, 'CC261L-M', 'Programming Language (Design and Implementation), Laboratory', 1, 2, '', '2', 1),
(43, 2, 'CC262-M', 'Programming Language (Design and Implementation), Lecture', 2, 2, '', '2', 1),
(44, 2, 'PE4-M', 'Team Sports', 2, 2, '', '2', 1),
(45, 2, 'CSE1-M', 'CS Professional Elective 1', 3, 3, '', '1', 1),
(46, 2, 'CSE2-M', 'CS Professional Elective 2', 3, 3, '', '1', 1),
(47, 2, 'CS333-M', 'Data Analytics', 3, 3, '', '1', 1),
(48, 2, 'CS313-M', 'Information Assurance and Security', 3, 3, '', '1', 1),
(49, 2, 'CS373-M', 'Parallel and Distributed Computing', 3, 3, '', '1', 1),
(50, 2, 'GEC2-M', 'Readings in Philippine History', 3, 3, '', '1', 1),
(51, 2, 'CS351L-M', 'Software Engineering 1, Laboratory', 1, 3, '', '1', 1),
(52, 2, 'CS352-M', 'Software Engineering 1, Lecture', 2, 3, '', '1', 1),
(53, 2, 'CC311L-M', 'Web Development, Laboratory', 1, 3, '', '1', 1),
(54, 2, 'CC312-M', 'Web Development, Lecture', 2, 3, '', '1', 1),
(55, 2, 'CS321L-M', 'Artificial Intelligence, Laboratory', 1, 3, '', '2', 1),
(56, 2, 'CS322-M', 'Artificial Intelligence, Lecture', 2, 3, '', '2', 1),
(57, 2, 'CS303-M', 'Automata Theory and Formal Language', 3, 3, '', '2', 1),
(58, 2, 'CSE3-M', 'CS Professional Elective 3', 3, 3, '', '2', 1),
(59, 2, 'CSE4-M', 'CS Professional Elective 4', 3, 3, '', '2', 1),
(60, 2, 'CC303-M', 'Methods of Research in Computing', 3, 3, '', '2', 1),
(61, 2, 'CS363-M', 'Modeling and Simulation', 3, 3, '', '2', 1),
(62, 2, 'CS341L-M', 'Software Engineering 2, Laboratory', 1, 3, '', '2', 1),
(63, 2, 'CS342-M', 'Software Engineering 2, Lecture', 2, 3, '', '2', 1),
(64, 2, 'GEC3-M', 'The Contemporary World', 3, 3, '', '2', 1),
(65, 2, 'GEM14-M', 'Life and Works of Rizal', 3, 4, '', '1', 1),
(66, 2, 'GEE11D-M', 'Living in the IT Era', 3, 4, '', '1', 1),
(67, 2, 'GEE13D-M', 'Reading Visual Arts', 3, 4, '', '1', 1),
(68, 2, 'CC413-M', 'Social and Professional Issues', 3, 4, '', '1', 1),
(69, 2, 'GEE12D-M', 'The Entrepreneurial Mind', 3, 4, '', '1', 1),
(70, 2, 'CS413-M', 'Thesis Writing 1', 3, 4, '', '1', 1),
(71, 2, 'CC406-M', 'Supervised Industrial Training', 6, 4, '', '2', 1),
(72, 2, 'CS403-M', 'Thesis Writing 2', 3, 4, '', '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_accounts`
--

CREATE TABLE `teacher_accounts` (
  `teacherID` int(255) NOT NULL,
  `teacherNumber` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `extname` varchar(255) NOT NULL,
  `phonenum` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `creatorID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_accounts`
--

INSERT INTO `teacher_accounts` (`teacherID`, `teacherNumber`, `username`, `password`, `firstname`, `middlename`, `lastname`, `extname`, `phonenum`, `email`, `college`, `department`, `status`, `creatorID`) VALUES
(1, 'PROF-TUPM-22-6713', 'PROF-TUPM-22-6713', '$2y$10$jxbGh6AUgBMEWv2fJTDamOZYD3Njx/yF/WdAWrzbkP1gH2nzwNVei', 'William Cris', 'Entero', 'Hod', ' ', '09270287483', 'williamcris18@gmail.com', 'Science', 'Computer', 1, 1),
(2, 'PROF-TUPM-22-7204', 'PROF-TUPM-22-7204', '$2y$10$OllPfi.MnyBVZJgyQAmMNOUz3gaKm.HRzVWByiIjW9Cna.b6l.4.O', 'Minatozaki', 'Sana', 'Hod', ' ', '', '', 'Science', 'Computer', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `applicant_accounts`
--
ALTER TABLE `applicant_accounts`
  ADD PRIMARY KEY (`applicantID`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`classID`),
  ADD KEY `class_subject` (`subjectID`),
  ADD KEY `class_teacher` (`teacherID`);

--
-- Indexes for table `course_table`
--
ALTER TABLE `course_table`
  ADD PRIMARY KEY (`courseID`);

--
-- Indexes for table `dropped_subjects`
--
ALTER TABLE `dropped_subjects`
  ADD KEY `student` (`studentID`),
  ADD KEY `course-subject` (`coursesubjectID`);

--
-- Indexes for table `enrollment_table`
--
ALTER TABLE `enrollment_table`
  ADD PRIMARY KEY (`enrollmentID`),
  ADD KEY `studentID` (`studentID`),
  ADD KEY `courseenroll` (`courseID`),
  ADD KEY `course-subjects` (`courses_subjectID`);

--
-- Indexes for table `events_announcements`
--
ALTER TABLE `events_announcements`
  ADD PRIMARY KEY (`eaID`),
  ADD KEY `EA_Admin` (`creatorID`);

--
-- Indexes for table `examination_table`
--
ALTER TABLE `examination_table`
  ADD PRIMARY KEY (`examID`),
  ADD KEY `applicantExam` (`applicantID`),
  ADD KEY `schedule` (`schedule`);

--
-- Indexes for table `exam_schedule`
--
ALTER TABLE `exam_schedule`
  ADD PRIMARY KEY (`schedID`);

--
-- Indexes for table `grades_table`
--
ALTER TABLE `grades_table`
  ADD PRIMARY KEY (`gradeID`),
  ADD KEY `teacherID` (`teacherID`),
  ADD KEY `studentID` (`studentID`),
  ADD KEY `subjectID` (`subjectID`);

--
-- Indexes for table `student_accounts`
--
ALTER TABLE `student_accounts`
  ADD PRIMARY KEY (`studentID`),
  ADD KEY `studentDetails` (`applicantID`),
  ADD KEY `studentAdmin` (`creatorID`);

--
-- Indexes for table `student_course`
--
ALTER TABLE `student_course`
  ADD PRIMARY KEY (`studentcourseID`),
  ADD KEY `studentConnection` (`studentID`),
  ADD KEY `courseConnection` (`courseID`),
  ADD KEY `enrollment` (`enrollmentID`);

--
-- Indexes for table `subjects_table`
--
ALTER TABLE `subjects_table`
  ADD PRIMARY KEY (`subjectID`),
  ADD KEY `course` (`courseID`);

--
-- Indexes for table `teacher_accounts`
--
ALTER TABLE `teacher_accounts`
  ADD PRIMARY KEY (`teacherID`),
  ADD KEY `teacherAdmin` (`creatorID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_accounts`
--
ALTER TABLE `admin_accounts`
  MODIFY `adminID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `applicant_accounts`
--
ALTER TABLE `applicant_accounts`
  MODIFY `applicantID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `classID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_table`
--
ALTER TABLE `course_table`
  MODIFY `courseID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `enrollment_table`
--
ALTER TABLE `enrollment_table`
  MODIFY `enrollmentID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events_announcements`
--
ALTER TABLE `events_announcements`
  MODIFY `eaID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `examination_table`
--
ALTER TABLE `examination_table`
  MODIFY `examID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_schedule`
--
ALTER TABLE `exam_schedule`
  MODIFY `schedID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `grades_table`
--
ALTER TABLE `grades_table`
  MODIFY `gradeID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `student_accounts`
--
ALTER TABLE `student_accounts`
  MODIFY `studentID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_course`
--
ALTER TABLE `student_course`
  MODIFY `studentcourseID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjects_table`
--
ALTER TABLE `subjects_table`
  MODIFY `subjectID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `teacher_accounts`
--
ALTER TABLE `teacher_accounts`
  MODIFY `teacherID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicant_accounts`
--
ALTER TABLE `applicant_accounts`
  ADD CONSTRAINT `studentCourse` FOREIGN KEY (`courseID`) REFERENCES `course_table` (`courseID`);

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_course` FOREIGN KEY (`courseID`) REFERENCES `course_table` (`courseID`),
  ADD CONSTRAINT `class_subject` FOREIGN KEY (`subjectID`) REFERENCES `subjects_table` (`subjectID`),
  ADD CONSTRAINT `class_teacher` FOREIGN KEY (`teacherID`) REFERENCES `teacher_accounts` (`teacherID`);

--
-- Constraints for table `dropped_subjects`
--
ALTER TABLE `dropped_subjects`
  ADD CONSTRAINT `course-subject` FOREIGN KEY (`coursesubjectID`) REFERENCES `subjects_table` (`subjectID`),
  ADD CONSTRAINT `student` FOREIGN KEY (`studentID`) REFERENCES `student_accounts` (`studentID`);

--
-- Constraints for table `enrollment_table`
--
ALTER TABLE `enrollment_table`
  ADD CONSTRAINT `course-subjects` FOREIGN KEY (`courses_subjectID`) REFERENCES `subjects_table` (`subjectID`),
  ADD CONSTRAINT `courseenroll` FOREIGN KEY (`courseID`) REFERENCES `course_table` (`courseID`),
  ADD CONSTRAINT `studentID` FOREIGN KEY (`studentID`) REFERENCES `student_accounts` (`studentID`);

--
-- Constraints for table `events_announcements`
--
ALTER TABLE `events_announcements`
  ADD CONSTRAINT `EA_Admin` FOREIGN KEY (`creatorID`) REFERENCES `admin_accounts` (`adminID`);

--
-- Constraints for table `examination_table`
--
ALTER TABLE `examination_table`
  ADD CONSTRAINT `applicantExam` FOREIGN KEY (`applicantID`) REFERENCES `applicant_accounts` (`applicantID`),
  ADD CONSTRAINT `schedule` FOREIGN KEY (`schedule`) REFERENCES `exam_schedule` (`schedID`);

--
-- Constraints for table `section_table`
--
ALTER TABLE `section_table`
  ADD CONSTRAINT `classSection` FOREIGN KEY (`classID`) REFERENCES `class` (`classID`),
  ADD CONSTRAINT `sectionCourse` FOREIGN KEY (`courseID`) REFERENCES `course_table` (`courseID`);

--
-- Constraints for table `student-subjects`
--
ALTER TABLE `student-subjects`
  ADD CONSTRAINT `stud` FOREIGN KEY (`studentID`) REFERENCES `student_accounts` (`studentID`),
  ADD CONSTRAINT `subj` FOREIGN KEY (`subjectID`) REFERENCES `subjects_table` (`subjectID`);

--
-- Constraints for table `student_accounts`
--
ALTER TABLE `student_accounts`
  ADD CONSTRAINT `studentAdmin` FOREIGN KEY (`creatorID`) REFERENCES `admin_accounts` (`adminID`),
  ADD CONSTRAINT `studentDetails` FOREIGN KEY (`applicantID`) REFERENCES `applicant_accounts` (`applicantID`);

--
-- Constraints for table `student_course`
--
ALTER TABLE `student_course`
  ADD CONSTRAINT `courseConnection` FOREIGN KEY (`courseID`) REFERENCES `course_table` (`courseID`),
  ADD CONSTRAINT `enrollment` FOREIGN KEY (`enrollmentID`) REFERENCES `enrollment_table` (`enrollmentID`),
  ADD CONSTRAINT `studentConnection` FOREIGN KEY (`studentID`) REFERENCES `student_accounts` (`studentID`);

--
-- Constraints for table `subjects_table`
--
ALTER TABLE `subjects_table`
  ADD CONSTRAINT `course` FOREIGN KEY (`courseID`) REFERENCES `course_table` (`courseID`);

--
-- Constraints for table `teacher_accounts`
--
ALTER TABLE `teacher_accounts`
  ADD CONSTRAINT `teacherAdmin` FOREIGN KEY (`creatorID`) REFERENCES `admin_accounts` (`adminID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
