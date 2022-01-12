-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 12, 2022 at 12:03 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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

DROP TABLE IF EXISTS `applicant_accounts`;
CREATE TABLE IF NOT EXISTS `applicant_accounts` (
  `applicantID` int(255) NOT NULL AUTO_INCREMENT,
  `applicantNumber` varchar(255) NOT NULL,
  `course_chosen` varchar(255) NOT NULL,
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
  PRIMARY KEY (`applicantID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant_accounts`
--

INSERT INTO `applicant_accounts` (`applicantID`, `applicantNumber`, `course_chosen`, `firstname`, `middlename`, `lastname`, `extname`, `LRN`, `gender`, `age`, `birthday`, `birthplace`, `contactnum`, `landline`, `email`, `unit`, `street`, `barangay`, `city`, `province`, `zipcode`, `last_school_attended`, `track`, `school_address`, `year_level`, `year_graduated`, `category`, `gpa`, `medical_record`, `form_137`, `good_moral`, `applicant_result`) VALUES
(1, 'TUPM-APPL21-9231', 'Bachelor of Science in Computer Science', 'William Cris', 'Entero', 'Hod', ' ', 123456, 'Male', 20, '2001-03-20', 'Metro Manila', '09270287483', '8-7000', 'williamcris18@gmail.com', '149', 'Narra Alley', 'Balingasa', 'Quezon City', 'Metro Manila', 1115, 'Siena College', 'TVL', 'Del Monte Avenue, Quezon City', 'grade 12', 2017, 'K-12', 93, 'MR-N4SsLOvQ.jpg', 'F137-N4SsLOvQ.jpg', 'GM-N4SsLOvQ.jpg', 'Student'),
(2, 'TUPM-APPL21-1268', 'Bachelor of Science in Information Technology', 'William Cris', 'Entero', 'Hod', ' ', 123456, 'Male', 20, '2001-03-02', 'Metro Manila', '09270287483', '717-1426', 'williamcris18@gmail.com', '149', 'Narra Alley', 'Balingasa', 'Quezon City', 'Metro Manila', 1115, 'Siena College', 'TVL', 'Del Monte Avenue, Quezon City', 'grade 12', 2017, 'K-12', 93, 'MR-6QU1ZlHJ.jpg', 'F137-6QU1ZlHJ.jpg', 'GM-6QU1ZlHJ.jpg', 'Applied'),
(3, 'TUPM-APPL21-8586', 'Bachelor of Science in Information Technology', 'William Cris', 'Entero', 'Hod', ' ', 123456, 'Male', 21, '2021-12-03', 'Metro Manila', '09270287483', '717-1426', 'williamcris18@gmail.com', '149', 'Narra Alley', 'Balingasa', 'Quezon City', 'Metro Manila', 1115, 'Siena College', 'TVL', 'Del Monte Avenue, Quezon City', 'grade 12', 2017, 'K-12', 93, 'MR-Cqsb5y2Q.jpg', 'F137-Cqsb5y2Q.jpg', 'GM-Cqsb5y2Q.jpg', 'Applied'),
(4, 'TUPM-APPL21-9470', 'Bachelor of Science in Computer Engineering', 'Paolo', 'Lovidioro ', 'Gonzales', ' ', 123456, 'Male', 21, '2008-02-11', 'Metro Manila', '09270287483', '717-1426', 'test@gmail.com', '151', 'Narra Alley', 'Balingasa', 'Quezon City', 'Metro Manila', 1115, 'Siena College', '', 'Del Monte Avenue, Quezon City', 'grade 12', 2017, 'Old Curriculum', 93, 'MR-X1UB6dvZ.jpg', 'F137-X1UB6dvZ.jpg', 'GM-X1UB6dvZ.jpg', 'Student'),
(5, 'TUPM-APPL21-4232', 'Bachelor of Science in Computer Engineering', 'Paolo', 'Lovidioro ', 'Gonzales', ' ', 123456, 'Male', 21, '2008-02-11', 'Metro Manila', '09270287483', '717-1426', 'test@gmail.com', '149', 'Narra Alley', 'Balingasa', 'Quezon City', 'Metro Manila', 1115, 'Siena College', '', 'Del Monte Avenue, Quezon City', 'grade 12', 2017, 'Old Curriculum', 93, 'MR-Btoce4YQ.jpg', 'F137-Btoce4YQ.jpg', 'GM-Btoce4YQ.jpg', 'Applied'),
(6, 'TUPM-APPL21-9910', 'Bachelor of Engineering in Mechanical Engineering', 'Gabrielle', 'MaColl', 'Demo', ' ', 123456, 'Male', 21, '2000-11-19', 'Metro Manila', '09270287483', '717-1426', 'test@gmail.com', '149', 'Narra Alley', 'Balingasa', 'Quezon City', 'Metro Manila', 1115, 'Siena College', '', 'Del Monte Avenue, Quezon City', 'grade 12', 2017, 'K-12', 93, 'MR-mOkT4oBt.jpg', 'F137-mOkT4oBt.jpg', 'GM-mOkT4oBt.jpg', 'Applied'),
(7, 'TUPM-APPL21-5533', 'Bachelor of Science in Mathematics', 'Minatozaki', 'Sana', 'Hod', ' ', 123456, 'Female', 21, '2022-01-12', 'Metro Manila', '09270287483', '717-1426', 'williamcrshod@gmail.com', '149', 'Narra Alley', 'Balingasa', 'Quezon City', 'Metro Manila', 1115, 'Siena College', '', 'Del Monte Avenue, Quezon City', 'grade 12', 2017, 'K-12', 93, 'MR-TMZcOJ2W.jpg', 'F137-TMZcOJ2W.jpg', 'GM-TMZcOJ2W.jpg', 'Applied'),
(8, 'TUPM-APPL21-5545', 'Bachelor of Science in Mathematics', 'Minatozaki', 'Sana', 'Hod', ' ', 123456, 'Female', 21, '2022-01-12', 'Metro Manila', '09270287483', '717-1426', 'williamcrshod@gmail.com', '149', 'Narra Alley', 'Balingasa', 'Quezon City', 'Metro Manila', 1115, 'Siena College', '', 'Del Monte Avenue, Quezon City', 'grade 12', 2017, 'K-12', 93, 'MR-A5tn1gGr.jpg', 'F137-A5tn1gGr.jpg', 'GM-A5tn1gGr.jpg', 'Student');

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
-- Table structure for table `course_table`
--

DROP TABLE IF EXISTS `course_table`;
CREATE TABLE IF NOT EXISTS `course_table` (
  `courseID` int(255) NOT NULL AUTO_INCREMENT,
  `degree` varchar(255) NOT NULL,
  `major` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`courseID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_schedule`
--

INSERT INTO `exam_schedule` (`schedID`, `date`, `time`, `building`, `room_no`, `floor_no`, `status`) VALUES
(0, '2022-02-05', '15:13:00', 'College of Science', 'COS-153', 2, 1),
(2, '2022-01-07', '02:14:00', 'College of Industrial Education', 'CIE-314', 3, 1);

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

INSERT INTO `student_accounts` (`studentID`, `applicantID`, `studentNumber`, `username`, `password`, `type`, `status`, `creatorID`) VALUES
(1, 1, 'TUPM-21-8437', 'TUPM-21-8437', '$2y$10$WoB3vqSF/S.dxlNe0.RUFOcZI/0kc5sp.KovxWOS.Qh4vVbExhxaW', 'ewan', '1', 1),
(2, 4, 'TUPM-21-9297', 'TUPM-21-9297', '$2y$10$Ivt4xeO3S86hO4XRyE6wTOorhTBREyfZNQ/VIGa8k4FhnLeG9zJlu', 'ewan', '1', 1),
(3, 8, 'TUPM-21-7805', 'TUPM-21-7805', '$2y$10$QVYvZKqiZtDMbVHorKoYc.M7doOcHzrih84cu9HEPkCKQ1XYejN/C', 'ewan', '1', 1);

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
  `status` int(255) NOT NULL,
  PRIMARY KEY (`subjectID`),
  KEY `course` (`courseID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects_table`
--

INSERT INTO `subjects_table` (`subjectID`, `courseID`, `subjectCode`, `name`, `units`, `yearlevel`, `status`) VALUES
(1, 2, 'CC-212', 'Intro to Computing', 4, 1, 1),
(2, 2, 'CC-213', 'Intro to Programming', 6, 1, 0),
(3, 2, 'CS-301', 'Programming Language', 4, 2, 1),
(4, 2, 'CC-717', 'Data Analytics', 5, 3, 1),
(5, 2, 'CC-999', 'Automata and Formal Language', 5, 4, 1),
(6, 6, 'AA - 201', 'Ewan try lang', 5, 2, 0),
(7, 6, 'AA - 201', 'Ewan try lang', 5, 2, 1),
(8, 1, 'test', 'testing', 1, 1, 1),
(9, 7, 'MM -001', 'Basic Algebra', 4, 1, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_accounts`
--

INSERT INTO `teacher_accounts` (`teacherID`, `teacherNumber`, `username`, `password`, `firstname`, `middlename`, `lastname`, `extname`, `phonenum`, `email`, `college`, `department`, `status`, `creatorID`) VALUES
(1, 'PROF-TUPM-21-5056', 'PROF-TUPM-21-5056', '$2y$10$81UKH4jgh9JzphudFhIlc.UCpyx1vBpylKEaZxYP0FvycdQiZZXXa', 'William Cris', 'Entero', 'Hod', ' ', '09270287483', 'williamcris18@gmail.com', 'Science', 'Computer', 1, 1);

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
