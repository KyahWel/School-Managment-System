-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 28, 2021 at 05:14 PM
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
-- Database: `student_management`
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_accounts`
--

INSERT INTO `admin_accounts` (`adminID`, `adminNumber`, `username`, `password`, `firstname`, `lastname`, `status`) VALUES
(1, 'TUP-ADMIN-0000', 'admin', '123456', 'admin', ' ', 1),
(2, 'TUP-ADMIN-2390', 'nardongputik', '00000', 'Kian', 'Lejano', 1);

-- --------------------------------------------------------

--
-- Table structure for table `applicant_accounts`
--

DROP TABLE IF EXISTS `applicant_accounts`;
CREATE TABLE IF NOT EXISTS `applicant_accounts` (
  `applicantID` int(255) NOT NULL AUTO_INCREMENT,
  `adminNumber` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `extname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `birthday` date NOT NULL,
  `birthplace` varchar(255) NOT NULL,
  `contactnum` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `zipcode` int(255) NOT NULL,
  `last_school_attended` varchar(255) NOT NULL,
  `trak` varchar(255) NOT NULL,
  `school_address` varchar(255) NOT NULL,
  `year_level` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `gpa` int(255) NOT NULL,
  PRIMARY KEY (`applicantID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant_accounts`
--

INSERT INTO `applicant_accounts` (`applicantID`, `adminNumber`, `firstname`, `middlename`, `lastname`, `extname`, `gender`, `age`, `birthday`, `birthplace`, `contactnum`, `email`, `unit`, `street`, `barangay`, `city`, `province`, `zipcode`, `last_school_attended`, `trak`, `school_address`, `year_level`, `category`, `gpa`) VALUES
(1, '1', 'William Cris', 'Entero', 'Hod', '', 'Male', 20, '2001-03-02', 'Metro Manila', '09270287483', 'williamcris18@gmail.com', '149', 'Narra Alley', 'Balingasa', 'Quezon City', 'Metro Manila', 1115, 'Siena College of Quezon City', 'Tech Voc', 'Del Monte, Avenue Quezon City', 'Grade 12', 'K-12', 92);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `classID` int(255) NOT NULL AUTO_INCREMENT,
  `subjectID` int(255) NOT NULL,
  `teacherID` int(255) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `day` varchar(255) NOT NULL,
  `room_no` varchar(255) NOT NULL,
  `grade` int(255) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`classID`),
  KEY `class_subject` (`subjectID`),
  KEY `class_teacher` (`teacherID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_subjects`
--

DROP TABLE IF EXISTS `course_subjects`;
CREATE TABLE IF NOT EXISTS `course_subjects` (
  `course_subjectID` int(255) NOT NULL AUTO_INCREMENT,
  `courseID` int(255) NOT NULL,
  `subjectID` int(255) NOT NULL,
  `status` int(255) NOT NULL,
  PRIMARY KEY (`course_subjectID`),
  KEY `course` (`courseID`),
  KEY `subject` (`subjectID`)
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
  `status` int(1) NOT NULL,
  PRIMARY KEY (`courseID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_table`
--

INSERT INTO `course_table` (`courseID`, `degree`, `major`, `status`) VALUES
(1, 'Bachelor of Science', 'Computer Science', 1),
(2, 'Bachelor of Science', 'Information Technology', 1),
(3, 'Bachelor of Science', 'Mechanical Engineering', 1),
(4, 'Bachelor of Science', 'Information System', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events_announcements`
--

INSERT INTO `events_announcements` (`eaID`, `title`, `details`, `time`, `date`, `creatorID`, `status`) VALUES
(1, 'Reporting', 'testing lang e2', '11:29:00', '2021-11-27', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `examination_table`
--

DROP TABLE IF EXISTS `examination_table`;
CREATE TABLE IF NOT EXISTS `examination_table` (
  `examID` int(255) NOT NULL AUTO_INCREMENT,
  `applicantID` int(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `room_no` int(255) NOT NULL,
  `floor_no` int(255) NOT NULL,
  `Building` varchar(255) NOT NULL,
  PRIMARY KEY (`examID`),
  KEY `applicantExam` (`applicantID`)
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
  `yearlevel` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL,
  `creatorID` int(255) NOT NULL,
  PRIMARY KEY (`studentID`),
  KEY `studentDetails` (`applicantID`),
  KEY `studentAdmin` (`creatorID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_accounts`
--

INSERT INTO `student_accounts` (`studentID`, `applicantID`, `studentNumber`, `yearlevel`, `username`, `password`, `type`, `status`, `creatorID`) VALUES
(1, 1, 'TUPM-19-2912', 3, 'williamcrshd', '123456', 'Enrolled', '1', 1),
(2, 1, 'TUPM-19-9487', 0, 'nardongputik', '123456', 'Enrolled', '1', 1),
(3, 1, 'TUPM-19-4944', 0, 'test', '123456', 'Enrolled', '1', 1);

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
-- Table structure for table `subject_table`
--

DROP TABLE IF EXISTS `subject_table`;
CREATE TABLE IF NOT EXISTS `subject_table` (
  `subjectID` int(255) NOT NULL AUTO_INCREMENT,
  `subjectCode` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `units` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`subjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `lastname` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `creatorID` int(255) NOT NULL,
  PRIMARY KEY (`teacherID`),
  KEY `teacherAdmin` (`creatorID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_accounts`
--

INSERT INTO `teacher_accounts` (`teacherID`, `teacherNumber`, `username`, `password`, `firstname`, `lastname`, `college`, `department`, `status`, `creatorID`) VALUES
(1, 'PROF-TUPM-19-3732', 'teacher-1', '123456', 'Minatozaki', 'Sana', 'Liberal Arts', 'Social Science', 0, 1),
(2, 'PROF-TUPM-19-4643', 'teacher-2', '123456', 'Hirai', 'Momo', 'Engineering', 'Math', 1, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_subject` FOREIGN KEY (`subjectID`) REFERENCES `subject_table` (`subjectID`),
  ADD CONSTRAINT `class_teacher` FOREIGN KEY (`teacherID`) REFERENCES `teacher_accounts` (`teacherID`);

--
-- Constraints for table `course_subjects`
--
ALTER TABLE `course_subjects`
  ADD CONSTRAINT `course` FOREIGN KEY (`courseID`) REFERENCES `course_table` (`courseID`),
  ADD CONSTRAINT `subject` FOREIGN KEY (`subjectID`) REFERENCES `subject_table` (`subjectID`);

--
-- Constraints for table `dropped_subjects`
--
ALTER TABLE `dropped_subjects`
  ADD CONSTRAINT `course-subject` FOREIGN KEY (`coursesubjectID`) REFERENCES `course_subjects` (`course_subjectID`),
  ADD CONSTRAINT `student` FOREIGN KEY (`studentID`) REFERENCES `student_accounts` (`studentID`);

--
-- Constraints for table `enrollment_table`
--
ALTER TABLE `enrollment_table`
  ADD CONSTRAINT `course-subjects` FOREIGN KEY (`courses_subjectID`) REFERENCES `course_subjects` (`course_subjectID`),
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
  ADD CONSTRAINT `applicantExam` FOREIGN KEY (`applicantID`) REFERENCES `applicant_accounts` (`applicantID`);

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
-- Constraints for table `teacher_accounts`
--
ALTER TABLE `teacher_accounts`
  ADD CONSTRAINT `teacherAdmin` FOREIGN KEY (`creatorID`) REFERENCES `admin_accounts` (`adminID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
