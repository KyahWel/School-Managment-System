-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 28, 2022 at 03:39 PM
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
(4, 4, 'TUPM-22-2132', 'TUPM-22-2132', '$2y$10$bDSyJgpjrFByyirzgafSdeeitV8gWyU/0q3UHozx7JY6IcyOMjkqm', NULL, 1, 1, 1),
(5, 5, 'TUPM-22-9307', 'TUPM-22-9307', '$2y$10$DtZZEEgpw8D6bvTmGscUwubvgtaPinirN2q2VGlS0M8ef0rwlqESi', NULL, 1, 1, 1),
(6, 6, 'TUPM-22-6929', 'TUPM-22-6929', '$2y$10$Aws.6dSokiQTTn1hjf/MSO5voIrGmtvLNzoqULIdqHuOoeO9DEc2q', NULL, 1, 1, 1),
(7, 7, 'TUPM-22-5134', 'TUPM-22-5134', '$2y$10$SHgclVbQgR4ZtSItQk3RIOkeOiFNABSrLvJKf79/5QFC0LWMkECMq', NULL, 1, 1, 1),
(8, 8, 'TUPM-22-2491', 'TUPM-22-2491', '$2y$10$ffdNBRGRqqbd2AsjO7LjV.9ZklUiBAjVZFW.IfBsWHIf12yNeZpAu', NULL, 1, 1, 1),
(9, 10, 'TUPM-22-6069', 'TUPM-22-6069', '$2y$10$rNLT0TCv4rm0KB/y6JnSD.cjhuKTdEAGQ.RM.QLDDR30/eD1Ecpde', NULL, 1, 1, 1),
(10, 9, 'TUPM-22-1895', 'TUPM-22-1895', '$2y$10$CldHgsAt.riCf.2bHZqABOEhLJWua6KwNVazFaE1e257YmWG8JGxa', NULL, 1, 1, 1),
(11, 11, 'TUPM-22-2707', 'TUPM-22-2707', '$2y$10$y5U7UrAvhDiVurR3cWkeiuXQl68OmOn/KbT/kpskTfnhYwdG7/4lG', NULL, 1, 1, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_accounts`
--
ALTER TABLE `student_accounts`
  ADD CONSTRAINT `studentAdmin` FOREIGN KEY (`creatorID`) REFERENCES `admin_accounts` (`adminID`),
  ADD CONSTRAINT `studentDetails` FOREIGN KEY (`applicantID`) REFERENCES `applicant_accounts` (`applicantID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
