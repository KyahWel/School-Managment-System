-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 07, 2022 at 05:26 PM
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

DROP TABLE IF EXISTS `admin_accounts`;
CREATE TABLE IF NOT EXISTS `admin_accounts` (
  `adminID` int(255) NOT NULL AUTO_INCREMENT,
  `adminNumber` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_accounts`
--

INSERT INTO `admin_accounts` (`adminID`, `adminNumber`, `username`, `password`, `firstname`, `lastname`, `status`) VALUES
(1, 'TUP-ADMIN-0000', 'admin', '$2y$10$cFxtHgNDDa21QJU/uEQXlOp3j5iREQTk/SDFMpwn2iJAczXNQUv1K', 'admin', '', 1),
(2, 'TUP-ADMIN-5525', 'admin-01', '$2y$10$H4GOzj1LQtLLeFZu7EByMe0aPMW92JTq59Kj51JsgQlfIhV6c/4Dq', 'William Cris', 'Hod', 1),
(3, 'TUP-ADMIN-8520', 'admin-02', '$2y$10$CvTeIqw8Z8BrSk44VrQRl.OKLWM/27eyAAYOKSenpgdJ5ccEEYw/W', 'Juan', 'Pedro', 1),
(4, 'TUP-ADMIN-2654', 'admin-03', '$2y$10$qVzeyO0IU86FOeXbn3xKxedD.qesE5SBRry6yrt1BMmwM6K0LUO4y', 'Cesar', 'Hawkins', 1),
(5, 'TUP-ADMIN-1667', 'adminstrange', '$2y$10$O2z1ZPIyNgLuP9wIzZ6oYOcsRwrMrxknYBi3y1f5kt6ukVgldUOLS', 'Stephen', 'Strange', 1);

-- --------------------------------------------------------

--
-- Table structure for table `applicant_accounts`
--

DROP TABLE IF EXISTS `applicant_accounts`;
CREATE TABLE IF NOT EXISTS `applicant_accounts` (
  `applicantID` int(255) NOT NULL AUTO_INCREMENT,
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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

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
(11, 'TUPM-APPL22-8391', 7, 'Raffy', 'Crisostomo', 'Tenedor', ' ', 123456, 'Male', 20, '2022-02-04', 'Metro Manila', '09270287483', '717-1426', 'williamcrshod@gmail.com', '149', 'Narra Alley', 'Balingasa', 'Quezon City', 'Metro Manila', 1115, 'Siena College', 'STEM', 'Del Monte Avenue, Quezon City', 'grade 12', 2017, 'K-12', 93, 'MR-6cABUjvx.jpg', 'F137-6cABUjvx.jpg', 'GM-6cABUjvx.jpg', 'Student'),
(12, 'TUPM-APPL22-7908', 2, 'Pocholo', 'Lee', 'Chua', '', 123456, 'Male', 20, '2022-01-20', 'Metro Manila', '09270287483', '717-1426', 'williamcrshod@gmail.com', '149', 'Narra Alley', 'Balingasa', 'Quezon City', 'Metro Manila', 1115, 'Siena College', 'ICT', 'Del Monte Avenue, Quezon City', 'grade 12', 2017, 'K-12', 93, 'MR-lHRsEc32.jpg', 'F137-lHRsEc32.jpg', 'GM-lHRsEc32.jpg', 'Applied'),
(13, 'TUPM-APPL22-1492', 2, 'Kim', 'Jimin', 'Minjeong', '', 123456, 'Female', 20, '2022-02-02', 'Metro Manila', '09270287483', '717-1426', 'williamcris18@gmail.com', '149', 'Narra Alley', 'Balingasa', 'Quezon City', 'Metro Manila', 1115, 'Siena College', 'ICT', 'Del Monte Avenue, Quezon City', 'rade 12', 2017, 'K-12', 93, 'MR-t546zpaR.jpg', 'F137-t546zpaR.jpg', 'GM-t546zpaR.jpg', 'Applied'),
(14, 'TUPM-APPL22-4029', 1, 'Ricalyn', 'Marcelo', 'Siman', '', 123456, 'Male', 20, '2022-02-17', 'Metro Manila', '09270287483', '717-1426', 'williamcris18@gmail.com', '149', 'Narra Alley', 'Balingasa', 'Quezon City', 'Metro Manila', 1115, 'Siena College', 'ABM', 'Del Monte Avenue, Quezon City', '12', 2017, 'K-12', 93, 'MR-lgZnk4TF.jpg', 'F137-lgZnk4TF.jpg', 'GM-lgZnk4TF.jpg', 'Applied'),
(15, 'TUPM-APPL22-4001', 9, 'Albert', 'Ewan', 'Einstein', '', 123456, 'Male', 20, '2022-02-16', 'Metro Manila', '09270287483', '717-1426', 'williamcris18@gmail.com', '149', 'Narra Alley', 'Balingasa', 'Quezon City', 'Metro Manila', 1115, 'Siena College', 'ABM', 'Del Monte Avenue, Quezon City', '12', 2017, 'K-12', 93, 'MR-4gXON8me.jpg', 'F137-4gXON8me.jpg', 'GM-4gXON8me.jpg', 'Applied'),
(16, 'TUPM-APPL22-3864', 9, 'Albert', 'Ewan', 'Einstein', '', 123456, 'Male', 20, '2022-02-16', 'Metro Manila', '09270287483', '717-1426', 'williamcris18@gmail.com', '149', 'Narra Alley', 'Balingasa', 'Quezon City', 'Metro Manila', 1115, 'Siena College', 'ABM', 'Del Monte Avenue, Quezon City', '12', 2017, 'K-12', 93, 'MR-sBvNuAYO.jpg', 'F137-sBvNuAYO.jpg', 'GM-sBvNuAYO.jpg', 'Applied'),
(17, 'TUPM-APPL22-1147', 2, 'Ernest', 'Ewan', 'Rutherford', '', 123456, 'Male', 20, '2022-02-06', 'Metro Manila', '09270287483', '717-1426', 'williamcrshod@gmail.com', '149', 'Narra Alley', 'Balingasa', 'Quezon City', 'Metro Manila', 1115, 'Siena College', 'HUMSS', 'Del Monte Avenue, Quezon City', '12', 2017, 'K-12', 93, 'MR-5I0VrUGi.png', 'F137-5I0VrUGi.png', 'GM-5I0VrUGi.png', 'Applied');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `classID` int(255) NOT NULL AUTO_INCREMENT,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_table`
--

DROP TABLE IF EXISTS `course_table`;
CREATE TABLE IF NOT EXISTS `course_table` (
  `courseID` int(255) NOT NULL AUTO_INCREMENT,
  `degree` varchar(255) NOT NULL,
  `major` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `courseStatus` int(1) NOT NULL,
  PRIMARY KEY (`courseID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_table`
--

INSERT INTO `course_table` (`courseID`, `degree`, `major`, `college`, `courseStatus`) VALUES
(1, 'Bachelor of Science in Information Technology', '', 'College of Science', 1),
(2, 'Bachelor of Science in Computer Science', '', 'College of Science', 1),
(3, 'Bachelor of Science in Civil Engineering', '', 'College of Engineering', 1),
(4, 'Bachelor of Science in Electrical Engineering', '', 'College of Engineering', 1),
(6, 'Bachelor of Science in Mechanical Engineering', '', 'College of Engineering', 1),
(7, 'Bachelor of Science in Architecture', '', 'College of Architecture and Fine Arts', 1),
(8, 'Bachelor of Fine Arts', '', 'College of Architecture and Fine Arts', 1),
(9, 'Bachelor of Engineering Technology', 'Computer Engineering Technology', 'College of Industrial Technology', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dropped_subjects`
--

DROP TABLE IF EXISTS `dropped_subjects`;
CREATE TABLE IF NOT EXISTS `dropped_subjects` (
  `droppedsubjectsID` int(255) DEFAULT NULL,
  `studentID` int(255) NOT NULL,
  `coursesubjectID` int(255) NOT NULL,
  `status` int(255) NOT NULL,
  KEY `student` (`studentID`),
  KEY `course-subject` (`coursesubjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enrollment_table`
--

DROP TABLE IF EXISTS `enrollment_table`;
CREATE TABLE IF NOT EXISTS `enrollment_table` (
  `enrollmentID` int(255) NOT NULL AUTO_INCREMENT,
  `studentID` int(255) NOT NULL,
  `courseID` int(255) NOT NULL,
  `courses_subjectID` int(255) NOT NULL,
  `payment_gateway` varchar(255) NOT NULL,
  `status` int(255) NOT NULL,
  PRIMARY KEY (`enrollmentID`),
  KEY `studentID` (`studentID`),
  KEY `courseenroll` (`courseID`),
  KEY `course-subjects` (`courses_subjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events_announcements`
--

DROP TABLE IF EXISTS `events_announcements`;
CREATE TABLE IF NOT EXISTS `events_announcements` (
  `eaID` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `creatorID` int(255) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`eaID`),
  KEY `EA_Admin` (`creatorID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events_announcements`
--

INSERT INTO `events_announcements` (`eaID`, `title`, `details`, `time`, `date`, `creatorID`, `status`) VALUES
(1, 'Walang Pasok: CHINESE NEW YEAR', 'Happy Chinese New Year, TUPians!\r\nToday, February 01, 2022, we celebrate Chinese New Year worldwide! It is one of the most revered and festive events celebrated.\r\nPursuant to Proclamation No. 1236, declaring February 01, 2022, as a special non-working day', '00:00:00', '2022-02-01', 1, 1),
(2, 'TUP IVC IS NOW OPEN FOR ALL COLLEGES!', 'The TUP-IVC envisions a world that forward \r\ncreative thinkers who will soon boost their \r\nwork with innovation and technology while \r\nembracing design philosophies and discipline. Our passion for excellence drives us to \r\ninnovate, organize, and generate', '18:35:00', '2022-01-26', 1, 1),
(3, 'RE: EXTENSION OF THE APPLICATION FOR GRADUATION', 'Please be informed that the Office of the University Registrar (OUR) is extending the Online Application for Graduation for the First Semester S.Y. 20221-2022 until January 29, 20200 to accommodate extension requests.\r\n\r\nHere\'s the list for the link of Go', '00:00:00', '2022-01-25', 1, 1),
(4, 'RE: OFFICE OF THE UNIVERSITY REGISTRAR ADVISORY', 'Please be informed that due to the compelling need to employ precautionary measures to help protect all concerned, the Office of the University Registrar (OUR) is temporarily suspending their Face-to-Face transactions. Hence, no walk-in transaction policy', '18:30:00', '2022-01-11', 1, 1),
(5, 'ATTENTION: TO ALL STUDENTS', 'On-site transactions are suspended tomorrow, January 7, 2022, due to disinfection and cleanup of TUP Manila campus as part of precautionary and protection measures in view of the heightened Alert Level III currently implemented in the NCR and CALABARZON a', '15:50:00', '2022-01-07', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `examination_table`
--

DROP TABLE IF EXISTS `examination_table`;
CREATE TABLE IF NOT EXISTS `examination_table` (
  `examID` int(255) NOT NULL AUTO_INCREMENT,
  `applicantID` int(255) NOT NULL,
  `schedule` int(255) NOT NULL,
  PRIMARY KEY (`examID`),
  KEY `applicantExam` (`applicantID`),
  KEY `schedule` (`schedule`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exam_schedule`
--

DROP TABLE IF EXISTS `exam_schedule`;
CREATE TABLE IF NOT EXISTS `exam_schedule` (
  `schedID` int(255) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `building` varchar(255) NOT NULL,
  `room_no` varchar(255) NOT NULL,
  `floor_no` int(255) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`schedID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section_table`
--

DROP TABLE IF EXISTS `section_table`;
CREATE TABLE IF NOT EXISTS `section_table` (
  `sectionID` int(255) NOT NULL AUTO_INCREMENT,
  `sectionName` varchar(255) NOT NULL,
  `class_code` varchar(255) NOT NULL,
  `courseID` int(255) NOT NULL,
  `capacity` int(255) NOT NULL,
  `studCount` int(255) NOT NULL,
  `yearlevel` int(11) NOT NULL,
  `schoolyear` varchar(255) NOT NULL,
  PRIMARY KEY (`sectionID`),
  KEY `sectionCourse` (`courseID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

DROP TABLE IF EXISTS `student_accounts`;
CREATE TABLE IF NOT EXISTS `student_accounts` (
  `studentID` int(255) NOT NULL AUTO_INCREMENT,
  `applicantID` int(255) NOT NULL,
  `studentNumber` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `sectionID` int(255) DEFAULT NULL,
  `yearlevel` int(255) NOT NULL,
  `status` int(1) NOT NULL,
  `creatorID` int(255) NOT NULL,
  PRIMARY KEY (`studentID`),
  KEY `studentDetails` (`applicantID`),
  KEY `studentAdmin` (`creatorID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_accounts`
--

INSERT INTO `student_accounts` (`studentID`, `applicantID`, `studentNumber`, `username`, `password`, `sectionID`, `yearlevel`, `status`, `creatorID`) VALUES
(1, 1, 'TUPM-22-9591', 'TUPM-22-9591', '$2y$10$eaU4rFjSVopbf9THGRzX/OFE4M275B215duBRhMt3Icpczpe6SXlG', 1, 4, 1, 1),
(2, 2, 'TUPM-22-7830', 'TUPM-22-7830', '$2y$10$npWPXEszb4cKXVJG3W/cUuurp.btTR/x5xYoV9otrEziid08rUNYa', 1, 4, 1, 1),
(3, 3, 'TUPM-22-8308', 'TUPM-22-8308', '$2y$10$4boc1s78c.G.UCrEAehJF.GBGyZANLzjrwIffptLlASGlGepPvQtm', 3, 4, 1, 1),
(4, 4, 'TUPM-22-2132', 'TUPM-22-2132', '$2y$10$bDSyJgpjrFByyirzgafSdeeitV8gWyU/0q3UHozx7JY6IcyOMjkqm', 4, 1, 1, 1),
(5, 5, 'TUPM-22-9307', 'TUPM-22-9307', '$2y$10$DtZZEEgpw8D6bvTmGscUwubvgtaPinirN2q2VGlS0M8ef0rwlqESi', 4, 1, 1, 1),
(6, 6, 'TUPM-22-6929', 'TUPM-22-6929', '$2y$10$Aws.6dSokiQTTn1hjf/MSO5voIrGmtvLNzoqULIdqHuOoeO9DEc2q', 4, 1, 1, 1),
(7, 7, 'TUPM-22-5134', 'TUPM-22-5134', '$2y$10$SHgclVbQgR4ZtSItQk3RIOkeOiFNABSrLvJKf79/5QFC0LWMkECMq', NULL, 1, 1, 1),
(8, 8, 'TUPM-22-2491', 'TUPM-22-2491', '$2y$10$ffdNBRGRqqbd2AsjO7LjV.9ZklUiBAjVZFW.IfBsWHIf12yNeZpAu', NULL, 1, 1, 1),
(9, 10, 'TUPM-22-6069', 'TUPM-22-6069', '$2y$10$rNLT0TCv4rm0KB/y6JnSD.cjhuKTdEAGQ.RM.QLDDR30/eD1Ecpde', NULL, 1, 1, 1),
(10, 9, 'TUPM-22-1895', 'TUPM-22-1895', '$2y$10$CldHgsAt.riCf.2bHZqABOEhLJWua6KwNVazFaE1e257YmWG8JGxa', NULL, 1, 1, 1),
(11, 11, 'TUPM-22-2707', 'TUPM-22-2707', '$2y$10$y5U7UrAvhDiVurR3cWkeiuXQl68OmOn/KbT/kpskTfnhYwdG7/4lG', NULL, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_course`
--

DROP TABLE IF EXISTS `student_course`;
CREATE TABLE IF NOT EXISTS `student_course` (
  `studentcourseID` int(255) NOT NULL AUTO_INCREMENT,
  `studentID` int(255) NOT NULL,
  `courseID` int(255) NOT NULL,
  `enrollmentID` int(255) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`studentcourseID`),
  KEY `studentConnection` (`studentID`),
  KEY `courseConnection` (`courseID`),
  KEY `enrollment` (`enrollmentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subjects_table`
--

DROP TABLE IF EXISTS `subjects_table`;
CREATE TABLE IF NOT EXISTS `subjects_table` (
  `subjectID` int(255) NOT NULL AUTO_INCREMENT,
  `courseID` int(255) NOT NULL,
  `subjectCode` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `units` int(255) NOT NULL,
  `yearlevel` int(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `status` int(255) NOT NULL,
  PRIMARY KEY (`subjectID`),
  KEY `course` (`courseID`)
) ENGINE=InnoDB AUTO_INCREMENT=334 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects_table`
--

INSERT INTO `subjects_table` (`subjectID`, `courseID`, `subjectCode`, `name`, `units`, `yearlevel`, `college`, `semester`, `status`) VALUES
(1, 2, 'CC131L-M', 'Computer Programming 1, Lab', 1, 1, 'College of Science', '1', 1),
(2, 2, 'CC132-M', 'Computer Programming 1, Lec', 2, 1, 'College of Science', '1', 1),
(3, 2, 'CHEMGENL-M', 'General Chemistry, Laboratory', 1, 1, 'College of Science', '1', 1),
(4, 2, 'CHEMGEN-M', 'General Chemistry, Lecture', 4, 1, 'College of Science', '1', 1),
(5, 2, 'PHYSGENL-M', 'General Physics Laboratory', 1, 1, 'College of Science', '1', 1),
(6, 2, 'PHYSGEN-M', 'General Physics, Lecture', 4, 1, 'College of Science', '1', 1),
(7, 2, 'CC113-M', 'Introduction to Computing', 3, 1, 'College of Science', '1', 1),
(8, 2, 'PE1-M', 'Physical Fitness', 2, 1, 'College of Liberal Arts', '1', 1),
(9, 2, 'MATHA05-M', 'Pre-Calculus', 5, 1, 'College of Science', '1', 1),
(10, 2, 'GEC1-M', 'Understanding the Self', 3, 1, 'College of Liberal Arts', '1', 1),
(11, 2, 'NSTP1-M', 'National Service Training Program 1', 3, 1, 'National Service Training Program', '1', 1),
(12, 2, 'CC101L-M', 'Computer Programming 2, Lab', 1, 1, 'College of Science', '2', 1),
(13, 2, 'CC102-M', 'Computer Programming 2, Lec', 2, 1, 'College of Science', '2', 1),
(14, 2, 'MATHA35-M', 'Differential and Integral Calculus', 5, 1, 'College of Science', '2', 1),
(15, 2, 'CC123-M', 'Discrete Structures', 3, 1, 'College of Science', '2', 1),
(16, 2, 'CS103-M', 'Linear Algebra', 3, 1, 'College of Science', '2', 1),
(17, 2, 'GEC4-M', 'Mathematics in the Modern World', 3, 1, 'College of Science', '2', 1),
(18, 2, 'GEC5-M', 'Purposive Communication', 3, 1, 'College of Liberal Arts', '2', 1),
(19, 2, 'PE2-M', 'Rhythmic Activities', 2, 1, 'College of Liberal Arts', '2', 1),
(20, 2, 'NSTP2-M', 'National Service Training Program 2', 3, 1, 'National Service Training Program', '2', 1),
(21, 2, 'GEC6-M', 'Art Appreciation', 3, 2, 'College of Fine Arts', '1', 1),
(22, 2, 'CS213-M', 'Combinatorics and Graph Theory', 3, 2, 'College of Science', '1', 1),
(23, 2, 'CC271L-M', 'Computer Architecture and Organization, Laboratory', 1, 2, 'College of Science', '1', 1),
(24, 2, 'CC272-M', 'Computer Architecture and Organization, Lecture', 2, 2, 'College of Science', '1', 1),
(25, 2, 'CC211L', 'Data Structures and Algorithms, Laboratory', 1, 2, 'College of Science', '1', 1),
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
(72, 2, 'CS403-M', 'Thesis Writing 2', 3, 4, '', '2', 1),
(91, 8, 'FA111-M', 'Advanced Freehand Drawing 1', 3, 1, 'College of Architecture and Fine Arts', '1', 1),
(92, 8, 'FA121-M', 'Anatomy 1', 3, 1, 'College of Architecture and Fine Arts', '1', 1),
(93, 8, 'ICA101-M', 'Creative Visual Writing 1', 2, 1, 'College of Architecture and Fine Arts', '1', 1),
(94, 8, 'ICA121-M', 'Marketing Management', 3, 1, 'College of Architecture and Fine Arts', '1', 1),
(95, 8, 'FA141-M', 'Materials and Techniques 1', 3, 1, 'College of Architecture and Fine Arts', '1', 1),
(96, 8, 'PE1-M', 'Physical Fitness', 2, 1, 'College of Liberal Arts', '1', 1),
(97, 8, 'FA131-M', 'Pigmented Arts Workshop 1', 3, 1, 'College of Architecture and Fine Arts', '1', 1),
(98, 8, 'IGD101-M', 'Typography 1', 2, 1, 'College of Architecture and Fine Arts', '1', 1),
(99, 8, 'GEC1-M', 'Understanding the Self', 3, 1, 'College of Liberal Arts', '1', 1),
(100, 8, 'NSTP1-M', 'National Service Training Program 1', 3, 1, 'National Service Training Program', '1', 1),
(101, 8, 'AD122-M', 'Creative Visual Writing 2', 3, 1, 'College of Architecture and Fine Arts', '2', 1),
(102, 8, 'AD102-M', 'Typography 2', 2, 1, 'College of Architecture and Fine Arts', '2', 1),
(103, 8, 'FA112-M', 'Advanced Freehand Drawing 2', 3, 1, 'College of Architecture and Fine Arts', '2', 1),
(104, 8, 'FA122-M', 'Anatomy 2', 3, 1, 'College of Architecture and Fine Arts', '2', 1),
(105, 8, 'FA142-M', 'Materials and Techniques 2', 3, 1, 'College of Architecture and Fine Arts', '2', 1),
(106, 8, 'FA132-M', 'Pigmented Arts Workshop 2', 3, 1, 'College of Architecture and Fine Arts', '2', 1),
(107, 8, 'GEC2-M', 'Readings in Philippine History', 3, 1, 'College of Liberal Arts', '2', 1),
(108, 8, 'PE2-M', 'Rhytmic Activities', 2, 1, 'College of Liberal Arts', '2', 1),
(109, 8, 'NSTP2-M', 'National Service Training Program 2', 3, 1, 'College of Architecture and Fine Arts', '2', 1),
(110, 8, 'MD101-M', 'Advanced Animation 1', 3, 2, 'College of Architecture and Fine Arts', '1', 1),
(111, 8, 'AD201-M', 'Advanced Layout 1', 3, 2, 'College of Architecture and Fine Arts', '1', 1),
(112, 8, 'AD211-M', 'Applied Illustration 1', 3, 2, 'College of Architecture and Fine Arts', '1', 1),
(113, 8, 'CS201-M', 'Computer 1 - Digital Graphic Workshop', 2, 2, 'College of Architecture and Fine Arts', '1', 1),
(114, 8, 'PE3-M', 'Individual and Dual Sports', 2, 2, 'College of Liberal Arts', '1', 1),
(115, 8, 'MD201-M', 'Photography 1', 3, 2, 'College of Architecture and Fine Arts', '1', 1),
(116, 8, 'GEC5-M', 'Purposive Communication', 3, 2, 'College of Liberal Arts', '1', 1),
(117, 8, 'GEC3-M', 'The Contemporary World', 3, 2, 'College of Architecture and Fine Arts', '1', 1),
(118, 8, 'MD102-M', 'Advanced Animation 2', 3, 2, 'College of Architecture and Fine Arts', '2', 1),
(119, 8, 'AD202-M', 'Advanced Layout 2', 3, 2, 'College of Architecture and Fine Arts', '2', 1),
(120, 8, 'AD212-M', 'Applied Illustration 2', 3, 2, 'College of Architecture and Fine Arts', '2', 1),
(121, 8, 'ADV222-M', 'Applied Research Techniques', 3, 2, 'College of Architecture and Fine Arts', '2', 1),
(122, 8, 'GEC6-M', 'Art Appreciation', 3, 2, 'College of Architecture and Fine Arts', '2', 1),
(123, 8, 'CS202-M', 'Computer 2 - Desktop Publication and Web Design', 2, 2, 'College of Architecture and Fine Arts', '2', 1),
(124, 8, 'GEC8-M', 'Ethics', 3, 2, 'College of Liberal Arts', '2', 1),
(125, 8, 'GEC4-M', 'Mathematics in the Modern World', 3, 2, 'College of Liberal Arts', '2', 1),
(126, 8, 'MD202-M', 'Photography 2', 3, 2, 'College of Architecture and Fine Arts', '2', 1),
(127, 8, 'PE4-M', 'Team Sports', 2, 2, 'College of Liberal Arts', '2', 1),
(128, 8, 'CS303', 'Computer 3', 3, 3, 'College of Architecture and Fine Arts', '1', 1),
(129, 8, 'ADV321-M', 'Copy Writing 1', 3, 3, 'College of Architecture and Fine Arts', '1', 1),
(130, 8, 'FL101-M', 'Foreign Langauge 1', 3, 3, 'College of Architecture and Fine Arts', '1', 1),
(131, 8, 'GD311-M', 'Graphic Design Workshop 1', 3, 3, 'College of Architecture and Fine Arts', '1', 1),
(132, 8, 'GEE13C-M', 'Indigenous Creative Crafts', 3, 3, 'College of Architecture and Fine Arts', '1', 1),
(133, 8, 'GEE11D-M', 'Living in the IT Era', 3, 3, 'College of Architecture and Fine Arts', '1', 1),
(134, 8, 'MD331-M', 'Media Production Management', 3, 3, 'College of Architecture and Fine Arts', '1', 1),
(135, 8, 'GEC7-M', 'Science, Technology and Society', 3, 3, 'College of Liberal Arts', '1', 1),
(136, 8, 'CS304-M', 'Computer 4', 3, 3, 'College of Architecture and Fine Arts', '2', 1),
(137, 8, 'ADV332-M', 'Copy Writing 2', 3, 3, 'College of Architecture and Fine Arts', '2', 1),
(138, 8, 'MD330-M', 'Fashion and Concepts Production', 3, 3, 'College of Architecture and Fine Arts', '2', 1),
(139, 8, 'FL102-M', 'Foreign Langauge 2', 3, 3, 'College of Architecture and Fine Arts', '2', 1),
(140, 8, 'GD312-M', 'Graphic Design Workshop 2', 3, 3, 'College of Architecture and Fine Arts', '2', 1),
(141, 8, 'GEM14-M', 'Life and Works of Rizal', 3, 3, 'College of Liberal Arts', '2', 1),
(142, 8, 'MD332-M', 'Radio and TV Production 1', 3, 3, 'College of Architecture and Fine Arts', '2', 1),
(143, 8, 'GEED12D-M', 'The Entrepreneurial Mind', 3, 3, 'College of Architecture and Fine Arts', '2', 1),
(144, 8, 'SIT-BFA', 'Supervised Industrial Training (400 hours)', 3, 3, 'College of Architecture and Fine Arts', '2', 1),
(145, 8, 'ADV441-M', 'Advertising Art Direction', 3, 4, 'College of Architecture and Fine Arts', '1', 1),
(146, 8, 'ADV431-M', 'Concepts and Proposal', 3, 4, 'College of Architecture and Fine Arts', '1', 1),
(147, 8, 'ADV421-M', 'Events and Merchandising Arts', 3, 4, 'College of Architecture and Fine Arts', '1', 1),
(148, 8, 'ADV411-M', 'Professional Practice and Ethics', 3, 4, 'College of Architecture and Fine Arts', '1', 1),
(149, 8, 'MD401-M', 'Radio and TV Production 2', 3, 4, 'College of Architecture and Fine Arts', '1', 1),
(150, 8, 'ADV450-M', 'Thesis Writing', 7, 4, 'College of Architecture and Fine Arts', '2', 1),
(151, 7, 'ARG1-M', 'Architectural Visual Communication 1: Graphics 1', 3, 1, 'College of Architecture and Fine Arts', '1', 1),
(152, 7, 'ARVT1-M', 'Architectural Visual Communication 2: Visual Techniques', 2, 1, 'College of Architecture and Fine Arts', '1', 1),
(153, 7, 'GEC6-M', 'Art Appreciation', 3, 1, 'College of Liberal Arts', '1', 1),
(154, 7, 'ARHA1-M', 'History of Architecture 1', 2, 1, 'College of Architecture and Fine Arts', '1', 1),
(155, 7, 'ARDES1-M', 'Introduction to Design', 2, 1, 'College of Architecture and Fine Arts', '1', 1),
(156, 7, 'PE1-M', 'Physical Fitness', 2, 1, 'College of Liberal Arts', '1', 1),
(157, 7, 'MATHBSA03', 'Solid Mensuration', 2, 1, 'College of Architecture and Fine Arts', '1', 1),
(158, 7, 'ARTA1-M', 'Theory of Architecture 1', 2, 1, 'College of Architecture and Fine Arts', '1', 1),
(159, 7, 'GEC1-M', 'Understanding the Self', 3, 1, 'College of Architecture and Fine Arts', '1', 1),
(160, 7, 'NSTP1-M', 'National Service Training Program 1', 3, 1, 'National Service Training Program', '1', 1),
(161, 7, 'ARAIN-M', 'Architectural Interiors', 2, 1, 'College of Architecture and Fine Arts', '2', 1),
(162, 7, 'ARG2-M', 'Architectural Visual Communication 3: Graphics 2', 2, 1, 'College of Architecture and Fine Arts', '2', 1),
(163, 7, 'ARVT2-M', 'Architectural Visual Communication 4: Visual Techniques 2', 2, 1, 'College of Architecture and Fine Arts', '2', 1),
(164, 7, 'ARBT1-M', 'Building Technology 1: Building Materials', 3, 1, 'College of Architecture and Fine Arts', '2', 1),
(165, 7, 'ARDES2-M', 'Creative Design Fundamentals', 2, 1, 'College of Architecture and Fine Arts', '2', 1),
(166, 7, 'MATH5A-M', 'Differential and Integral Calculus', 5, 1, 'College of Science', '2', 1),
(167, 7, 'GEC2-M', 'Readings in Philippine History', 3, 1, 'College of Liberal Arts', '2', 1),
(168, 7, 'PE2-M', 'Rhytmic Activities', 2, 1, 'College of Liberal Arts', '2', 1),
(169, 7, 'ARTA2-M', 'Theory of Architecture 2', 2, 1, 'College of Architecture and Fine Arts', '2', 1),
(170, 7, 'NSTP2-M', 'National Service Training Program 2', 3, 1, 'College of Industrial Education', '2', 1),
(171, 7, 'ARVT3-M', 'Architectural Visual Communications 5: Visual Techniques 3', 2, 2, 'College of Architecture and Fine Arts', '1', 1),
(172, 7, 'ARBU1-M', 'Building Utilities 2: Plumbing', 3, 2, 'College of Architecture and Fine Arts', '1', 1),
(173, 7, 'ARDES3-M', 'Creative Design in Architectural Interiors', 3, 2, 'College of Architecture and Fine Arts', '1', 1),
(174, 7, 'ARHA2-M', 'History of Architecture 2', 2, 2, 'College of Architecture and Fine Arts', '1', 1),
(175, 7, 'PE3-M', 'Individual and Dual Sports', 2, 2, 'College of Liberal Arts', '1', 1),
(176, 7, 'GEC4-M', 'Mathematics in the Modern World', 3, 2, 'College of Liberal Arts', '1', 1),
(177, 7, 'GEC5-M', 'Purposive Communication', 3, 2, 'College of Liberal Arts', '1', 1),
(178, 7, 'GEC7-M', 'Science, Technology and Society', 3, 2, 'College of Liberal Arts', '1', 1),
(179, 7, 'ARTD-M', 'Tropical Design', 2, 2, 'College of Architecture and Fine Arts', '1', 1),
(180, 7, 'ARBT2-M', 'Building Technology 2: Construction Drawings in Wood, Steel and Concrete (1 Storey)', 3, 2, 'College of Architecture and Fine Arts', '2', 1),
(181, 7, 'GEC8-M', 'Ethics', 3, 2, 'College of Liberal Arts', '2', 1),
(182, 7, 'ARHA3-M', 'History of Architecture 3', 2, 2, 'College of Architecture and Fine Arts', '2', 1),
(183, 7, 'ARDES4-M', 'Space Planning 1', 3, 2, 'College of Architecture and Fine Arts', '2', 1),
(184, 7, 'ARES1-M', 'Static of Rigid Bodies', 3, 2, 'College of Architecture and Fine Arts', '2', 1),
(185, 7, 'ARPS-M', 'Surveying', 3, 2, 'College of Architecture and Fine Arts', '2', 1),
(186, 7, 'PE4-M', 'Team Sports', 2, 2, 'College of Liberal Arts', '2', 1),
(187, 7, 'GEC3-M', 'The Contemporary World', 3, 2, 'College of Liberal Arts', '2', 1),
(188, 7, 'ARBU2-M', 'Building Utilities 2: Electrical, Electronics and Mechanical Systems', 3, 3, 'College of Architecture and Fine Arts', '1', 1),
(189, 7, 'ARBT3-M', 'Building Technology 3: Construction Drawings in Wood, Steel and Concrete (2 storey residential structure)', 3, 3, 'College of Architecture and Fine Arts', '1', 1),
(190, 7, 'CS31-M', 'Computer Aided Drafting and Design for Architecture', 2, 3, 'College of Architecture and Fine Arts', '1', 1),
(191, 7, 'ARHA4-M', 'History of Architecture 4', 2, 3, 'College of Architecture and Fine Arts', '1', 1),
(192, 7, 'GEM14-M', 'Life and Works of Rizal', 3, 3, 'College of Architecture and Fine Arts', '1', 1),
(193, 7, 'ARDES5-M', 'Space Planning 2', 4, 3, 'College of Architecture and Fine Arts', '1', 1),
(194, 7, 'ARDES2-M', 'Stength of Materials', 3, 3, 'College of Architecture and Fine Arts', '1', 1),
(195, 7, 'ARBT4-M', 'Building Technology 4: Specification Writing and Quantity Surveying ', 3, 3, 'College of Architecture and Fine Arts', '2', 1),
(196, 7, 'ARBU3-M', 'Building Utilities 3: Accoustics and Lighting Systems', 3, 3, 'College of Architecture and Fine Arts', '2', 1),
(197, 7, 'CS32-M', 'Computer Aided Drafting and Design for Architecture 2: Building Information Management', 2, 3, 'College of Architecture and Fine Arts', '2', 1),
(198, 7, 'ARPL1-M', 'Planning 1: Site and Planning and Landscape Architecture', 3, 3, 'College of Architecture and Fine Arts', '2', 1),
(199, 7, 'ARPP1-M`', 'Professional Practice 1: Laws Affecting the Practice of Architecture', 3, 3, 'College of Architecture and Fine Arts', '2', 1),
(200, 7, 'ARDES6-M', 'Site Development Planning and Landscaping', 4, 3, 'College of Architecture and Fine Arts', '2', 1),
(201, 7, 'ARDES3-M', 'Theory of Structures', 3, 3, 'College of Architecture and Fine Arts', '2', 1),
(202, 3, 'MATH_ENG1', 'Calculus 1', 3, 1, 'College of Engineering', '1', 1),
(203, 3, 'ChemEngLab', 'Chemistry for Engineers, Lab', 1, 1, 'College of Engineering', '1', 1),
(204, 3, 'ChemEngLec', 'Chemistry for Engineers, Lec', 3, 1, 'College of Engineering', '1', 1),
(205, 3, 'BES11', 'Civil Engineering Orientation', 2, 1, 'College of Engineering', '1', 1),
(206, 3, 'CEShop1', 'Engineering Shopwork 1', 2, 1, 'College of Engineering', '1', 1),
(207, 3, 'PE1', 'Physical Fitness', 2, 1, 'College of Liberal Arts', '1', 1),
(208, 3, 'GE2', 'Readings in Philippine History', 3, 1, 'College of Liberal Arts', '1', 1),
(209, 3, 'GE3', 'The Contemporary World', 3, 1, 'College of Liberal Arts', '1', 1),
(210, 3, 'GE-M-', 'The Life and Works of Rizal', 3, 1, 'College of Liberal Arts', '1', 1),
(211, 3, 'GEC-1', 'Understanding the Self', 3, 1, 'College of Liberal Arts', '1', 1),
(212, 3, 'NSTP1', 'CMT 1/ CWTS 1', 3, 1, 'College of Engineering', '1', 1),
(213, 3, 'GEC6-M', 'Art Appreciation', 3, 1, 'College of Liberal Arts', '2', 1),
(214, 3, 'MATHENG-2', 'Calculus 2', 3, 1, 'College of Engineering', '2', 1),
(215, 3, 'BSE8-M', 'Computer Fundamentals and Programming', 2, 1, 'College of Engineering', '2', 1),
(216, 3, 'BES12-M', 'Engineering Drawing and Plans', 1, 1, 'College of Engineering', '2', 1),
(217, 3, 'CEShop2-M ', 'Engineering Shopwork 2', 2, 1, 'College of Engineering', '2', 1),
(218, 3, 'GEC4-M', 'Mathematics in the Modern World', 3, 1, 'College of Engineering', '2', 1),
(219, 3, 'PHYSENGL-M', 'Physics for Engineers (Lab)', 1, 1, 'College of Engineering', '2', 1),
(220, 3, 'PHYSENG-M', 'Physics for Engineers (Lec)', 3, 1, 'College of Engineering', '2', 1),
(221, 3, 'GEC5-M', 'Purposive Communication', 3, 1, 'College of Engineering', '2', 1),
(222, 3, 'PE2-M', 'Rhytmic Activities', 2, 1, 'College of Liberal Arts', '2', 1),
(223, 3, 'NSTP2-M', 'National Service Training Program 2', 3, 1, 'College of Industrial Education', '2', 1),
(224, 3, 'BES1-M', 'Computer Aided Drafting', 1, 2, 'College of Engineering', '1', 1),
(225, 3, 'MATHENG4-M', 'Differential Equations', 3, 2, 'College of Engineering', '1', 1),
(226, 3, 'MATHENG3-M', 'Engineering Data Analysis', 3, 2, 'College of Engineering', '1', 1),
(227, 3, 'BES6-M', 'Dynamics of Rigid Bodies', 2, 2, 'College of Engineering', '2', 1),
(228, 3, 'BES2-M', 'Engineering Economics', 3, 2, 'College of Engineering', '2', 1),
(229, 3, 'BES7', 'Mechanics of Deformable Bodies', 5, 2, 'College of Engineering', '2', 1),
(230, 3, 'BES4-M', 'Engineering Management', 3, 3, 'College of Engineering', '1', 1),
(231, 3, 'ACCE1-M', 'Engineering Utilities 1', 3, 3, 'College of Engineering', '1', 1),
(232, 3, 'ACCE2-M ', 'Engineering Utilities 2', 3, 2, 'College of Engineering', '1', 1),
(233, 3, 'PCE9-M', 'Construction Methods and Project Management', 3, 3, 'College of Engineering', '2', 1),
(234, 3, 'PCE11L-M', 'Geotechnical Engineering 1, Lab', 1, 3, 'College of Engineering', '1', 1),
(235, 3, 'PCE11-M', 'Geotechnical Engineering 1, Lec', 3, 3, 'College of Engineering', '2', 1),
(236, 3, 'PCE16D-M', 'Civil Engineering Project 1, Des', 1, 4, 'College of Engineering', '1', 1),
(237, 3, 'PCE16-M', 'Civil Engineering Project 1, Lec ', 1, 4, 'College of Engineering', '1', 1),
(238, 3, 'PCE15-M', 'Principles of Transportation Engineering', 3, 4, 'College of Engineering', '1', 1),
(239, 3, 'PCE18-M', 'CE Laws, Professional Ethics, Specfications and Contracts', 3, 4, 'College of Engineering', '2', 1),
(240, 3, 'PCE17D-M', 'Civil Engineering Project 2, Des', 1, 4, 'College of Engineering', '1', 1),
(241, 3, 'PCE17-M', 'Civil Engineering Project 2, Lec', 1, 4, 'College of Engineering', '2', 1),
(242, 1, 'CC131L-M', 'Computer Programming 1, Lab', 1, 1, 'College of Science', '1', 1),
(243, 1, 'CC132-M', 'Computer Programming 1, Lec', 2, 1, 'College of Science', '1', 1),
(244, 1, 'CC113-M', 'Introduction to Computing', 3, 1, 'College of Science', '1', 1),
(245, 1, 'CC101L-M', 'Computer Programming 2, Lab', 1, 1, 'College of Science', '2', 1),
(246, 1, 'CC102-M', 'Computer Programming 2, Lec', 2, 1, 'College of Science', '2', 1),
(247, 1, 'CC123-M', 'Discrete Structures', 3, 1, 'College of Science', '2', 1),
(248, 1, 'CC271L-M', 'Computer Architecture and Organization, Laboratory', 1, 2, 'College of Science', '1', 1),
(249, 1, 'CC272-M', 'Computer Architecture and Organization, Lecture', 2, 2, 'College of Science', '1', 1),
(250, 1, 'CC233-M', 'Human Computer Interaction', 3, 2, 'College of Science', '1', 1),
(251, 1, 'CC201L-M', 'Information Management, Laboratory', 1, 2, 'College of Science', '2', 1),
(252, 1, 'CC202-M', 'Information Management, Lecture', 2, 2, 'College of Science', '2', 1),
(253, 1, 'CC223-M', 'Applications Development and Emerging Technologies', 3, 2, 'College of Science', '2', 1),
(254, 1, 'IT351L-M', 'Advanced Database System, Laboratory', 1, 3, 'College of Science', '1', 1),
(255, 1, 'IT352-M', 'Advanced Database System, Lecture', 2, 3, 'College of Science', '1', 1),
(256, 1, 'ITE1-M', 'IT Professional Elective 1', 3, 3, 'College of Science', '1', 1),
(257, 1, 'IT343-M', 'Business Intelligence', 3, 3, 'College of Science', '2', 1),
(258, 1, 'IT321L-M', 'Computer Networking 2, Laboratory', 1, 3, 'College of Science', '2', 1),
(259, 1, 'IT322-M', 'Computer Networking 2, Lecture', 2, 3, 'College of Science', '2', 1),
(260, 1, 'IT413-M', 'IT Capstone and Research 1', 3, 4, 'College of Science', '1', 1),
(261, 1, 'ITE4-M', 'IT Professional Elective 4', 3, 4, 'College of Science', '1', 1),
(262, 1, 'CC413-M', 'Social and Professional Issues', 3, 4, 'College of Science', '1', 1),
(263, 1, 'IT403-M', 'IT Capstone and Research 2', 3, 4, 'College of Science', '2', 1),
(264, 1, 'CC406-M', 'Supervised Industrial Training ', 6, 4, 'College of Science', '2', 1),
(265, 6, 'CHEMGENL-M', 'General Chemistry, Laboratory', 1, 1, 'College of Science', '1', 1),
(266, 6, 'CHEMGEN-M', 'General Chemistry, Lecture', 4, 1, 'College of Engineering', '1', 1),
(267, 6, 'MATHA05-M', 'Pre-Calculus', 5, 1, 'College of Science', '1', 1),
(268, 6, 'MATHA13-M', 'Differential Calculus', 3, 2, 'College of Engineering', '1', 1),
(269, 6, 'BES10L-M', 'Engineering Drawing', 1, 1, 'College of Engineering', '2', 1),
(270, 6, 'FME1-M', 'Mechanical Engineering Orientation', 1, 1, 'College of Engineering', '2', 1),
(271, 6, 'FME3L-M', 'Machine Shop Theory and Practice, Lab', 2, 2, 'College of Engineering', '1', 1),
(272, 6, 'BES1L-M', 'Computer Aided Drafting', 1, 2, 'College of Engineering', '1', 1),
(273, 6, 'BES8L-M', 'Computer Fundamentals and Programming, Lab', 1, 2, 'College of Engineering', '1', 1),
(274, 6, 'ACME1L-M', 'Basic Electrical Engineering (Lab)', 1, 2, 'College of Engineering', '2', 1),
(275, 6, 'ACME1-M', 'Basic Electrical Engineering (Lec)', 2, 2, 'College of Engineering', '2', 1),
(276, 6, 'BES5-M', 'Statics of Rigid Bodies', 3, 2, 'College of Engineering', '2', 1),
(277, 6, 'FME5-M', 'Advanced Mathematics for ME', 3, 3, 'College of Engineering', '1', 1),
(278, 6, 'ACME2L-M', 'Basic Electronics (Lab)', 1, 3, 'College of Engineering', '1', 1),
(279, 6, 'ACME2-M', 'Basic Electronics (Lec)', 2, 3, 'College of Engineering', '1', 1),
(280, 6, 'ACME3L-M', 'DC and AC Machinery (Lab)', 1, 3, 'College of Engineering', '2', 1),
(281, 6, 'ACME3-M', 'DC and AC Machinery (Lec)', 2, 3, 'College of Engineering', '2', 1),
(282, 6, 'FME11-M', 'Fluid Mechanics', 3, 3, 'College of Engineering', '2', 1),
(283, 6, 'FME17-M', 'Fluid Machinery', 3, 4, 'College of Engineering', '1', 1),
(284, 6, 'FME16L-M', 'Control Engineering (Lab)', 1, 4, 'College of Engineering', '1', 1),
(285, 6, 'FME16-M', 'Control Engineering (Lec)', 2, 4, 'College of Engineering', '1', 1),
(286, 6, 'PME2D-M', 'Machine Design 2 (Design)', 1, 4, 'College of Engineering', '2', 1),
(287, 6, 'PME2-M', 'Machine Design 2 (Lec)', 3, 4, 'College of Engineering', '2', 1),
(288, 6, 'EC2-M', 'Mechanical Engineering Elective 2', 3, 4, 'College of Engineering', '2', 1),
(289, 9, 'CPET1-L', 'Program Logic and Design ', 2, 1, 'College of Industrial Technology', '1', 1),
(290, 9, 'MATHANA13', 'Engineering Calculus 1 (Differential)', 3, 1, 'College of Industrial Technology', '1', 1),
(291, 9, 'BET1', 'Orientation to BET, Seminar and Field Trip', 3, 1, 'College of Industrial Technology', '1', 1),
(292, 9, 'EST1L-M', 'Electronics 1, Lab', 1, 1, 'College of Industrial Technology', '2', 1),
(293, 9, 'EST1-M', 'Electronics 1, Lec', 3, 1, 'College of Industrial Technology', '2', 1),
(294, 9, 'CPET4-M', 'Data and Digital Communications', 3, 2, 'College of Industrial Technology', '1', 1),
(295, 9, 'CPET5L-M', 'Data Structures and Algorithms, Laboratory', 2, 2, 'College of Industrial Technology', '1', 1),
(296, 9, 'CPET6-M', 'Fundamentals of Mixed Signals and Sensors', 3, 2, 'College of Industrial Technology', '1', 1),
(297, 9, 'CPET9L', 'Microprocessor and Microcontroller Systems, Lab', 2, 2, 'College of Industrial Technology', '2', 1),
(298, 9, 'CPET9', 'Microprocessor and Microcontroller Systems, Lec', 3, 2, 'College of Industrial Technology', '2', 1),
(299, 9, 'CPET10-M', 'Operating System ', 3, 2, 'College of Industrial Technology', '2', 1),
(300, 9, 'ESS5-M', 'Engineering Economy', 3, 3, 'College of Industrial Technology', '1', 1),
(301, 9, 'ESS6-M', 'Engineering Management', 3, 3, 'College of Industrial Technology', '1', 1),
(302, 9, 'BET6-M', 'Technopreneurship', 3, 3, 'College of Industrial Technology', '1', 1),
(303, 9, 'BET3-M', 'Technical Research', 3, 3, 'College of Industrial Technology', '2', 1),
(304, 9, 'GEE11B-M', 'People and Earths Ecosystem', 3, 3, 'College of Industrial Technology', '2', 1),
(305, 9, 'BET4-M', 'Intellectual Property', 3, 3, 'College of Industrial Technology', '2', 1),
(306, 9, 'CpET15L-M', 'Mobile Application Lab', 2, 3, 'College of Industrial Technology', '2', 1),
(307, 9, 'BET5-M', 'Project Development', 3, 4, 'College of Industrial Technology', '1', 1),
(308, 9, 'BET5L-M', 'Project Development, Lab', 2, 4, 'College of Industrial Technology', '1', 1),
(309, 9, 'CpET18L-M', 'Network Security Lab', 2, 4, 'College of Industrial Technology', '1', 1),
(310, 9, 'SIT-M', 'Supervised Industrial Training (720 hours)', 9, 4, 'College of Industrial Technology', '2', 1),
(311, 4, 'CHEMENGL-M', 'Chemistry for Engineers, Lab', 1, 1, 'College of Engineering', '1', 1),
(312, 4, 'CHEMENG-M', 'Chemistry for Engineers, Lec', 3, 1, 'College of Engineering', '1', 1),
(313, 4, 'ESW1-M', 'Electrical Shopwork 1', 2, 1, 'College of Engineering', '1', 1),
(314, 4, 'ESW2-M', 'Electrical Shopwork 2', 2, 1, 'College of Engineering', '2', 1),
(315, 4, 'MATHE13-M', 'Engineering Data Analysis', 3, 1, 'College of Engineering', '2', 1),
(316, 4, 'ACEE2-M', 'Basic Thermodynamics', 3, 2, 'College of Engineering', '1', 1),
(317, 4, 'PEE1-M', 'Electrical Circuits 1', 3, 2, 'College of Engineering', '1', 1),
(318, 4, 'PEE1L-M', 'Electrical Circuits 1, Lab', 1, 2, 'College of Engineering', '1', 1),
(319, 4, 'PEE2-M', 'Electrical Circuits 2', 3, 2, 'College of Engineering', '2', 1),
(320, 4, 'PEE2L-M', 'Electrical Circuits 2, Lab', 1, 2, 'College of Engineering', '2', 1),
(321, 4, 'ACEE8-M', 'Fluid Mechanics', 2, 2, 'College of Engineering', '2', 1),
(322, 4, 'PEE3-M', 'Electrical Machines 1', 3, 3, 'College of Engineering', '1', 1),
(323, 4, 'PEE3L-M', 'Electrical Machines 1, Lab', 1, 3, 'College of Engineering', '1', 1),
(324, 4, 'ACEE9-M', 'Fundamentals of Electronic Communications', 3, 3, 'College of Engineering', '1', 1),
(325, 4, 'PEE10-M', 'Electrical Apparatus and Devices', 2, 3, 'College of Engineering', '2', 1),
(326, 4, 'PEE10L-M', 'Electrical Apparatus and Devices, Lab', 1, 3, 'College of Engineering', '2', 1),
(327, 4, 'ACEE14-M', 'Environmental Science and Engineering', 2, 3, 'College of Engineering', '2', 1),
(328, 4, 'PEE13-M', 'Instrumentation and Control', 2, 4, 'College of Engineering', '1', 1),
(329, 4, 'PEE13L-M', 'Instrumentation and Control, Lab', 1, 4, 'College of Engineering', '1', 1),
(330, 4, 'BES3-M', 'Technopreneurship 101', 3, 4, 'College of Engineering', '1', 1),
(331, 5, 'PEE17-M', 'Power System Analysis', 3, 4, 'College of Engineering', '2', 1),
(332, 4, 'PEE17L-M', 'Power System Analysis, Lab', 1, 4, 'College of Engineering', '2', 1),
(333, 4, 'PEE16L1-M', 'Research Project or Capstone Design Project 1', 1, 4, 'College of Engineering', '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_accounts`
--

DROP TABLE IF EXISTS `teacher_accounts`;
CREATE TABLE IF NOT EXISTS `teacher_accounts` (
  `teacherID` int(255) NOT NULL AUTO_INCREMENT,
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
  `creatorID` int(255) NOT NULL,
  PRIMARY KEY (`teacherID`),
  KEY `teacherAdmin` (`creatorID`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_accounts`
--

INSERT INTO `teacher_accounts` (`teacherID`, `teacherNumber`, `username`, `password`, `firstname`, `middlename`, `lastname`, `extname`, `phonenum`, `email`, `college`, `department`, `status`, `creatorID`) VALUES
(1, 'PROF-TUPM-22-7407', 'PROF-TUPM-22-7407', '$2y$10$9jBap6qQCu8srMnknqYSguAyZvW2007MBZvOt4SG21jmN7IbGQdiC', 'Lauran', 'Scatton', 'Tovmasyan', '', '+63 895 256 9006', 'tovmasyan@gmail.com', '', '', 1, 1),
(2, 'PROF-TUPM-22-2767', 'PROF-TUPM-22-2767', '$2y$10$BiQ3SM.HjwRVe5o6u3V7zumT34lzeuvOQipY4kWmEObCHHmsYiByi', 'Aaron', 'Perra', 'Kloska', '', '+63 906 203 5209', 'kloska@gmail.com', '', '', 1, 1),
(3, 'PROF-TUPM-22-6883', 'PROF-TUPM-22-6883', '$2y$10$f17a3jJ7mJu3BKZ5KnTFw.EvD6liBIP8bmyQUfNefWhKN9CQ.ihq.', 'Francene', 'Jelsma', 'Skursky', '', '+63 909 597 1493', 'skursky@gmail.com', '', '', 1, 1),
(4, 'PROF-TUPM-22-4107', 'PROF-TUPM-22-4107', '$2y$10$gpXVTk.39e.byHoAMgQMN.Q2i.ehBNLRP6RoGViY1V4CQinZ/kscS', 'Zena', 'Brickhouse', 'Daria', '', '+63 817 045 7645', 'daria@gmail.com', '', '', 1, 1),
(5, 'PROF-TUPM-22-5888', 'PROF-TUPM-22-5888', '$2y$10$qBsEkFZmGDTMy2IhZRtoQ.P72eYaoCncPwxCRsAbFd1xh1Tq3jfdC', 'Brigette', 'Bennett', 'Breckenstein', '', '+63 918 811 4395', 'breckenstein@gmail.com', '', '', 1, 1),
(6, 'PROF-TUPM-22-9478', 'PROF-TUPM-22-9478', '$2y$10$pf/mrBTVFBexu1qTpCnsIuz4WEY98DR74ZbHqc6YFREU9U0zdJxy.', 'Jeniffer', 'Ebershoff', 'Jezek', '', '+63 925 670 6802', 'jezek@gmail.com', '', '', 1, 1),
(7, 'PROF-TUPM-22-8973', 'PROF-TUPM-22-8973', '$2y$10$jqqWYLMCEwWKSHSE7MIVTOYUI2/wSWqrFgxVZIpcDtNKqvPS97wju', 'Selma', 'Huro', 'Elm', '', '+63 897 657 5261', 'elm@gmail.com', '', '', 1, 1),
(8, 'PROF-TUPM-22-3010', 'PROF-TUPM-22-3010', '$2y$10$VNwLjL6sKPrdz8XFup0bl.LhCqgpHaOg0bq1S5eM0g9CfnqHWchUO', 'Elenora', 'Kazeck', 'Handler', '', '+63 896 662 9288', 'handler@gmail.com', '', '', 1, 1),
(9, 'PROF-TUPM-22-5616', 'PROF-TUPM-22-5616', '$2y$10$.8E.D1k80Yg6kzozZBEdHeBuOoHFsZllUrxEyG9GbwR1TbfppsUK.', 'Nadine', 'Bortignon', 'Okojie', '', '+63 909 876 6860', 'okojie@gmail.com', '', '', 1, 1),
(10, 'PROF-TUPM-22-4079', 'PROF-TUPM-22-4079', '$2y$10$BwAXi5ai6EoD3rRhRcgzzuoGGNchxzIBBanJkYLRBuwiO5Mt9fP2.', 'Kristin', 'Baley', 'Shiflet', '', '+63 896 817 7973', 'shiflet@gmail.com', '', '', 1, 1),
(11, 'PROF-TUPM-22-7233', 'PROF-TUPM-22-7233', '$2y$10$PJ/Qm7gwOR0RQh709qR4hOK81Ph1XrZuJ1LVmwpdvtGqUhtkpZDyu', 'Melinda', 'Pawell', 'Fellhauer', '', '+63 895 271 2193', 'fellhauer@gmail.com', '', '', 1, 1),
(12, 'PROF-TUPM-22-5992', 'PROF-TUPM-22-5992', '$2y$10$XmwyM4b9GI0s1yvyW20PBOzfXMz5WdY0Vocse4LZ42rSs.C1VmgOG', 'Kirby', 'Arellanes', 'Litherland', '', '+63 898 617 3446', 'litherland@gmail.com', '', '', 1, 1),
(13, 'PROF-TUPM-22-1433', 'PROF-TUPM-22-1433', '$2y$10$rMPUGpKOE3YCaDiuZObOC.BPfCexf.rI21CxE83sICIm9XfnwtqW6', 'Kent', 'Servantes', 'Ivans', '', '+63 971 041 4903', 'ivans@gmail.com', '', '', 1, 1),
(14, 'PROF-TUPM-22-2811', 'PROF-TUPM-22-2811', '$2y$10$ZNtRJEJO.itlMLezGtDQOuqjDPZM2RSW81cBAYfilTNksGBw/hcuS', 'Dan', 'Fajen', 'Platz', '', '+63 948 241 1072', 'platz@gmail.com', '', '', 1, 1),
(15, 'PROF-TUPM-22-9758', 'PROF-TUPM-22-9758', '$2y$10$swfAPAy.FCU50OHwEbsTJOSWBhD2tgjBYytpgjT.q6pT.O6J1uhsi', 'Millie', 'Eilers', 'Pirkl', '', '+63 992 361 6844', 'pirkl@gmail.com', '', '', 1, 1),
(16, 'PROF-TUPM-22-1949', 'PROF-TUPM-22-1949', '$2y$10$eAVgHCSfyM3LZHsYX3pFye5WCQFa6yKRYXqb8CuTN5qgYoz3lepZm', 'Moira', 'Phinazee', 'Qadir', '', '+63 918 980 1415', 'qadir@gmail.com', '', '', 1, 1),
(17, 'PROF-TUPM-22-9346', 'PROF-TUPM-22-9346', '$2y$10$9e3UA7xkgQjpSGy9n6e7z.Al4cG8hxpdDdOU8iL9e5xtOjzbtViTS', 'Reta', 'Pascucci', 'Qazi', '', '+63 910 451 3195', 'qazi@gmail.com', '', '', 1, 1),
(18, 'PROF-TUPM-22-9402', 'PROF-TUPM-22-9402', '$2y$10$BFvFjDCRMED.uwi9/GbOlOTYq3KfM8xWN6FQfixlvTgY1UPxUv9J6', 'Brittney', 'Leicht', 'Lolley', '', '+63 953 390 2698', 'lolley@gmail.com', '', '', 1, 1),
(19, 'PROF-TUPM-22-9592', 'PROF-TUPM-22-9592', '$2y$10$eU7orK7O0K5oy/va7qYtVOIUvrEmSE1HokqK86IeY1fa0T4ibNL9K', 'Leandro', 'Bai', 'Bolka', 'Jr.', '+63 905 569 3081', 'bolka@gmail.com', '', '', 1, 1),
(20, 'PROF-TUPM-22-6854', 'PROF-TUPM-22-6854', '$2y$10$uo24MHy7t.4Giz7yvLvN5eme0WaKvw06yOG9EjMOQMuL3eG90K3zS', 'Edison', 'Popper', 'Sumera', '', '+63 895 542 9954', 'sumera@gmail.com', '', '', 1, 1),
(21, 'PROF-TUPM-22-8094', 'PROF-TUPM-22-8094', '$2y$10$HhzHUzkhzKaHAmtrWP6/4eDb8YRe.x8xiyUKZfTNZW8kx3LmAuKiC', 'Breana', 'Polek', 'Cassi', '', '+63 817 777 2637', 'cassi@gmail.com', '', '', 1, 1),
(22, 'PROF-TUPM-22-7143', 'PROF-TUPM-22-7143', '$2y$10$R61YyGHVEsnnhXN/jviwIOHO9/16ewPcR953ZKIz3XXYM59ED1eHq', 'Jarvis', 'Magnotta', 'Nicols', '', '+63 817 831 4309', 'nicols@gmail.com', '', '', 1, 1),
(23, 'PROF-TUPM-22-7938', 'PROF-TUPM-22-7938', '$2y$10$GoflTmsq5YDZALB1V6EyeOvzW3FbHz.k8/9Yr/GTJKGuRSxO1FfwK', 'Felicitas', 'Druck', 'Orlinski', '', '+63 939 154 0014', 'orlinski@gmail.com', '', '', 1, 1),
(24, 'PROF-TUPM-22-9503', 'PROF-TUPM-22-9503', '$2y$10$D2dPUTZi3./M4YRi5coFF.baO/h9wpjAHSQ8ugl5TuPxZueKFhONm', 'Geraldine', 'Kunich', 'Neisius', '', '+63 896 623 6021', 'neisius@gmail.com', '', '', 1, 1),
(25, 'PROF-TUPM-22-5349', 'PROF-TUPM-22-5349', '$2y$10$7O9BXhLzofrBykgLiuK7uu4o1aYQnVdrsHv7ulm.ahEuwg.tXI0wG', 'Alfred', 'Buchman', 'Pacleb', '', '+63 917 138 0136', 'pacleb@gmail.com', '', '', 1, 1),
(26, 'PROF-TUPM-22-3193', 'PROF-TUPM-22-3193', '$2y$10$K0YkSVIm8S5B6awfQ62cXeDqTAowIFYDotHB5/jPzk14Tdt2/lIuK', 'Leatha', 'Sionesini', 'Block', '', '+63 905 683 3750', 'block@gmail.com', '', '', 1, 1),
(27, 'PROF-TUPM-22-1065', 'PROF-TUPM-22-1065', '$2y$10$TXHP4BBzSt3WIYn1YKGwLe6g3yldpaKDmaIA4ZMQCVLLqY9F3dsHq', 'Jacquelyne', 'Driesenga', 'Rosso', '', '+63 813 219 5077', 'rosso@gmail.com', '', '', 1, 1),
(28, 'PROF-TUPM-22-4879', 'PROF-TUPM-22-4879', '$2y$10$mv0EbvwY9hmNSpV8Cc899.NGSATkLzkIvmJDJkHsPd9CpycPCYkG6', 'Jonelle', 'Vonderahe', 'Epps', '', '+63 895 473 1230', 'epps@gmail.com', '', '', 1, 1),
(29, 'PROF-TUPM-22-2014', 'PROF-TUPM-22-2014', '$2y$10$hoUIY0KlJZYHQ49tZQ/7y.kYltTfn.622vyfRJq/ZB3YGvl8xh2ce', 'Rosamond', 'Maestri', 'Amlin', '', '+63 983 391 5528', 'amlin@gmail.com', '', '', 1, 1),
(30, 'PROF-TUPM-22-2994', 'PROF-TUPM-22-2994', '$2y$10$y8nu0HYm794TGx5ZfHV6yudg5hK0WGttkP1PTQU9/neGT.q.euggS', 'Johnson', 'Susmilch', 'Mcenery', 'II', '+63 911 932 0882', 'mcenery@gmail.com', '', '', 1, 1);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
