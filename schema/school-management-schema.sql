-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 12, 2022 at 03:49 AM
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
  `email` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_accounts`
--

INSERT INTO `admin_accounts` (`adminID`, `adminNumber`, `username`, `password`, `firstname`, `lastname`, `email`, `status`) VALUES
(1, 'TUP-ADMIN-0000', 'admin', '$2y$10$cFxtHgNDDa21QJU/uEQXlOp3j5iREQTk/SDFMpwn2iJAczXNQUv1K', 'admin', '', 'williamcris18@gmail.com', 1),
(2, 'TUP-ADMIN-5525', 'admin-012', '$2y$10$YTR8MGda4C7k7bAkWanLQu39jjkgT3ZKv634jhm8wjeyuxFZ14rdK', 'William Cris', 'Hod', 'williamcrshd@gmail.com', 1),
(3, 'TUP-ADMIN-8520', 'admin-02', '$2y$10$o/ADGphm14MkYIVg/NBvKuO4ht9vaQ59KGQt.6ua9lqaiwoYKShnC', 'Juan', 'Pedro', 'williamcris18@gmail.com', 1),
(4, 'TUP-ADMIN-2654', 'admin-03', '$2y$10$qVzeyO0IU86FOeXbn3xKxedD.qesE5SBRry6yrt1BMmwM6K0LUO4y', 'Cesar', 'Hawkins', 'williamcris18@gmail.com', 1),
(5, 'TUP-ADMIN-1667', 'adminstrange', '$2y$10$O2z1ZPIyNgLuP9wIzZ6oYOcsRwrMrxknYBi3y1f5kt6ukVgldUOLS', 'Stephen', 'Strange', 'williamcris18@gmail.com', 1),
(6, 'TUP-ADMIN-2730', 'test', '$2y$10$SoaCezvMy4JtCKR8Po7WOO0wn65i7NjjOxbD.ta5BPbcA3MYGpOyS', 'William Cris', 'Hod', 'williamcrshod@gmail.com', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant_accounts`
--

INSERT INTO `applicant_accounts` (`applicantID`, `applicantNumber`, `courseID`, `firstname`, `middlename`, `lastname`, `extname`, `LRN`, `gender`, `age`, `birthday`, `birthplace`, `contactnum`, `landline`, `email`, `unit`, `street`, `barangay`, `city`, `province`, `zipcode`, `last_school_attended`, `track`, `school_address`, `year_level`, `year_graduated`, `category`, `gpa`, `medical_record`, `form_137`, `good_moral`, `applicant_result`) VALUES
(1, 'TUPM-APPL22-1130', 2, 'Bianca', '', 'Aquino', '', 168166824827, 'Female', 20, '2001-04-21', 'Manila', '09281736388', '(074) 304-1996 ', 'lyahbianca.aquino@tup.edu.ph', '121', 'SAN DIONISIO ST.', '17', 'TONDO I / II', 'Tondo, Manila', 1012, 'The National Teachers College', 'ABM', '629 J. Nepomuceno St., Quiapo, Manila', '12', 2019, 'K-12', 93, 'MR-PkUWNGJL.jpg', 'F137-PkUWNGJL.jpg', 'GM-PkUWNGJL.jpg', 'Student'),
(2, 'TUPM-APPL22-5805', 2, 'William', 'Cris', 'Hod', '', 168166543727, 'Male', 20, '2001-04-21', 'Manila', '09281736388', '(074) 304-1996 ', 'lyahbianca.aquino@tup.edu.ph', '151', 'SAN DIONISIO ST.', '17', 'TONDO I / II', 'Tondo, Manila', 1012, 'The National Teachers College', 'ABM', '629 J. Nepomuceno St., Quiapo, Manila', '12', 2021, 'K-12', 93, 'MR-fJ2SuqQI.jpg', 'F137-fJ2SuqQI.jpg', 'GM-fJ2SuqQI.jpg', 'Student'),
(3, 'TUPM-APPL22-4701', 2, 'Kimberley', '', 'Delgado', '', 168166824827, 'Female', 20, '2021-08-26', 'Manila', '09281736388', '(074) 304-1996 ', 'lyahbianca.aquino04@gmail.com', '149', 'SAN DIONISIO ST.', '17', 'TONDO I / II', 'Tondo, Manila', 1012, 'NTC', 'ABM', 'Quiapo', '12', 2021, 'K-12', 93, 'MR-RKI8Ftvj.jpg', 'F137-RKI8Ftvj.jpg', 'GM-RKI8Ftvj.jpg', 'Student'),
(4, 'TUPM-APPL22-3013', 2, 'Czarina', '', 'Pielago', '', 168161294827, 'Female', 20, '2021-09-23', 'Manila', '09281736388', '(074) 304-1996 ', 'lyahbianca.aquino04@gmail.com', '151', 'SAN DIONISIO ST.', '234', 'TONDO I / II', 'Tondo, Manila', 1012, 'NTC', 'ABM', 'Quiapo', '12', 2022, 'K-12', 93, 'MR-ApczXV27.jpg', 'F137-ApczXV27.jpg', 'GM-ApczXV27.jpg', 'Student'),
(5, 'TUPM-APPL22-3799', 2, 'Matthew', 'Perry', 'Bustarde', '', 161246824824, 'Female', 20, '2021-10-21', 'Manila', '09281736388', '(074) 304-1996 ', 'lyahbianca.aquino04@gmail.com', '149', 'SAN DIONISIO ST.', '234', 'TONDO I / II', 'Tondo, Manila', 1012, 'NTC', 'STEM', 'Quiapo', '12', 2022, 'K-12', 90, 'MR-S0sqOvBG.jpg', 'F137-S0sqOvBG.jpg', 'GM-S0sqOvBG.jpg', 'Student'),
(6, 'TUPM-APPL22-7603', 2, 'Vann', 'Chezter', 'Lizan', '', 123452359743, 'Female', 22, '2021-10-14', 'Quezon City', '09281736388', '(074) 304-1996 ', 'lyahbianca.aquino04@gmail.com', '2324', 'St. Andrew st.', '45', 'Quezon City', 'N/A', 1012, 'Polytechnic University of the Philippines', 'ICT', 'Sta. Mesa Manila', '12', 2022, 'K-12', 93, 'MR-UzatmvQE.jpg', 'F137-UzatmvQE.jpg', 'GM-UzatmvQE.jpg', 'Student'),
(7, 'TUPM-APPL22-5305', 2, 'Harold', 'Jay', 'Talavera', '', 168166824827, 'Male', 25, '2021-09-17', 'Caloocan ', '09281736388', 'N/A', 'lyahbianca.aquino04@gmail.com', '151', 'SAN DIONISIO ST.', '32', 'Caloocan City North', 'N/A', 1034, 'NTC', 'ICT', 'Quiapo', '12', 2022, 'K-12', 90, 'MR-pEIcgQJ4.jpg', 'F137-pEIcgQJ4.jpg', 'GM-pEIcgQJ4.jpg', 'Student'),
(8, 'TUPM-APPL22-2857', 2, 'Stacey', '', 'Reyes', '', 123456325983, 'Female', 25, '2021-11-10', 'Manila', '09281736388', '(074) 304-1996 ', 'lyahbianca.aquino04@gmail.com', '149', 'SAN DIONISIO ST.', '17', 'TONDO I / II', 'N/A', 1012, 'Polytechnic University of the Philippines', 'ICT', 'Sta. Mesa Manila', '12', 2022, 'K-12', 93, 'MR-NfzFkdhl.jpg', 'F137-NfzFkdhl.jpg', 'GM-NfzFkdhl.jpg', 'Passed'),
(9, 'TUPM-APPL22-6394', 2, 'Juan', '', 'Dela Cruz', '', 123456789123, 'Female', 21, '2021-11-18', 'Manila', '09281736388', 'N/A', 'lyahbianca.aquino04@gmail.com', 'N/A', 'SAN DIONISIO ST.', '234', 'TONDO I / II', 'Tondo, Manila', 1012, 'NTC', 'ICT', 'Quiapo', '12', 2022, 'K-12', 89, 'MR-2e1VxvcX.jpg', 'F137-2e1VxvcX.jpg', 'GM-2e1VxvcX.jpg', 'Passed'),
(10, 'TUPM-APPL22-8668', 2, 'Bryan', 'Jay', 'Santos', 'Jr', 121246565473, 'Male', 21, '2021-10-07', 'Manila', '09281736388', '(074) 304-1996 ', 'lyahbianca.aquino04@gmail.com', '151', 'SAN DIONISIO ST.', '45', 'TONDO I / II', 'Tondo, Manila', 1012, 'Polytechnic University of the Philippines', 'ICT', 'Sta. Mesa Manila', '12', 2022, 'K-12', 89, 'MR-KomtexOa.jpg', 'F137-KomtexOa.jpg', 'GM-KomtexOa.jpg', 'Passed'),
(11, 'TUPM-APPL22-8317', 2, 'Lyah', 'Bianca', 'Garcia', '', 164896738941, 'Female', 21, '2021-10-01', 'Quezon City', '09281736388', 'N/A', 'lyahbianca.aquino04@gmail.com', '151', 'St. Andrew st.', '56', 'TONDO I / II', 'Tondo, Manila', 1012, 'NTC', 'HUMSS', 'Quiapo', '12', 2022, 'K-12', 90, 'MR-xMJ23eHa.jpg', 'F137-xMJ23eHa.jpg', 'GM-xMJ23eHa.jpg', 'Passed'),
(12, 'TUPM-APPL22-8794', 2, 'Geraldine', 'Mae', 'Bolor', '', 165235224822, 'Female', 25, '2021-09-25', 'Manila', '09281736388', '(074) 304-1996 ', 'lyahbianca.aquino04@gmail.com', '151', 'SAN DIONISIO ST.', '45', 'TONDO I / II', 'Choose...', 1012, 'Polytechnic University of the Philippines', 'N/A', 'Sta. Mesa Manila', '10', 2015, 'Old Curriculum', 89, 'MR-CylYSQsm.jpg', 'F137-CylYSQsm.jpg', 'GM-CylYSQsm.jpg', 'Passed'),
(13, 'TUPM-APPL22-6107', 2, 'Karl', 'John', 'de Vera', '', 123903486983, 'Male', 21, '2021-07-16', 'Quezon City', '09281736388', 'N/A', 'lyahbianca.aquino04@gmail.com', '151', 'PO BOX 123', '17', 'Quezon City', 'N/A', 1023, 'NTC', 'ICT', 'Quiapo', '12', 2022, 'K-12', 90, 'MR-kuhiP4RK.jpg', 'F137-kuhiP4RK.jpg', 'GM-kuhiP4RK.jpg', 'Passed'),
(14, 'TUPM-APPL22-1732', 2, 'Joanna', 'Mae', 'Cabarles', '', 134906349603, 'Female', 21, '2021-07-22', 'Caloocan ', '09281736388', '374-3017', 'lyahbianca.aquino04@gmail.com', '151', 'PO BOX 123', '56', 'Caloocan City North', 'N/A', 1034, 'Polytechnic University of the Philippines', 'ICT', 'Sta. Mesa Manila', '12', 2022, 'K-12', 93, 'MR-ZyxjQPKT.jpg', 'F137-ZyxjQPKT.jpg', 'GM-ZyxjQPKT.jpg', 'Passed'),
(15, 'TUPM-APPL22-8596', 2, 'Razel', 'Paige', 'Clemente', '', 123456789123, 'Female', 21, '2021-10-21', 'Manila', '09281736388', '(074) 304-1996 ', 'lyahbianca.aquino04@gmail.com', '121', 'SAN DIONISIO ST.', '234', 'TONDO I / II', 'N/A', 1088, 'NTC', 'ICT', 'Quiapo', '12', 2022, 'K-12', 90, 'MR-3XKNTU5y.jpg', 'F137-3XKNTU5y.jpg', 'GM-3XKNTU5y.jpg', 'Passed'),
(16, 'TUPM-APPL22-8669', 2, 'Jerald', '', 'Pascual', '', 123634754867, 'Male', 21, '2021-09-17', 'Cavite', '09281736388', 'N/A', 'lyahbianca.aquino04@gmail.com', '149', 'cavite st', '32', 'Cavite', 'N/A', 1033, 'NTC', 'GAS', 'Quiapo', '12', 2022, 'K-12', 93, 'MR-WsjO5qNB.jpg', 'F137-WsjO5qNB.jpg', 'GM-WsjO5qNB.jpg', 'Passed'),
(17, 'TUPM-APPL22-6448', 2, 'Alfredo', '', 'Santos', 'Sr', 143352390241, 'Male', 21, '2021-10-22', 'Caloocan ', '09281736388', '(074) 304-1996 ', 'lyahbianca.aquino04@gmail.com', '121', 'Quiapo', '32', 'Caloocan City North', 'Choose...', 3042, 'Polytechnic University of the Philippines', 'STEM', 'Sta. Mesa Manila', '12', 2022, 'K-12', 93, 'MR-WfTDzbvE.jpg', 'F137-WfTDzbvE.jpg', 'GM-WfTDzbvE.jpg', 'Passed'),
(18, 'TUPM-APPL22-6658', 2, 'Marian', '', 'Rivera', '', 123276689679, 'Female', 21, '2021-09-16', 'Manila', '09281736388', '(074) 304-1996 ', 'lyahbianca.aquino04@gmail.com', '149', 'SAN DIONISIO ST.', '32', 'TONDO I / II', 'N/A', 2031, 'The National Teachers College', 'ICT', '629 J. Nepomuceno St., Quiapo, Manila', '12', 2022, 'K-12', 89, 'MR-U13cgtmN.jpg', 'F137-U13cgtmN.jpg', 'GM-U13cgtmN.jpg', 'Passed'),
(19, 'TUPM-APPL22-7520', 2, 'Rod', 'Cedric', 'Bersabal', '', 123456789123, 'Male', 20, '2021-11-24', 'Quezon City', '9198445585', '(074) 304-1996 ', 'manuelbobis2123@gmail.com', '2324', 'SAN DIONISIO ST.', '234', 'Quezon City', 'Cebu', 1012, 'NTC', 'ICT', 'Quiapo', '12', 2022, 'K-12', 89, 'MR-COndEGJr.jpg', 'F137-COndEGJr.jpg', 'GM-COndEGJr.jpg', 'Passed'),
(20, 'TUPM-APPL22-6504', 2, 'Rachel', 'Ann', 'Gordo', '', 174556789112, 'Female', 21, '2021-11-24', 'Cavite', '09281736388', 'N/A', 'lyahbianca.aquino04@gmail.com', '151', 'Quiapo st', '45', 'Cavite', 'Cebu', 2423, 'The National Teachers College', 'ICT', 'Quiapo', '12', 2022, 'K-12', 90, 'MR-57Ez1pmx.jpg', 'F137-57Ez1pmx.jpg', 'GM-57Ez1pmx.jpg', 'Passed'),
(21, 'TUPM-APPL22-9432', 2, 'Georgette', '', 'Ambong', '', 164363463727, 'Female', 20, '2021-10-05', 'Manila', '09281736388', '21312', 'lyahbianca.aquino04@gmail.com', '149', 'SAN DIONISIO ST.', '32', 'TONDO I / II', 'N/A', 1012, 'Polytechnic University of the Philippines', 'ICT', 'Sta. Mesa Manila', '12', 2022, 'K-12', 93, 'MR-CKt2GsXp.jpg', 'F137-CKt2GsXp.jpg', 'GM-CKt2GsXp.jpg', 'Passed'),
(22, 'TUPM-APPL22-9580', 2, 'Mikee', '', 'Montecillo', '', 168166824827, 'Female', 21, '2021-11-25', 'Manila', '09281736388', '(074) 304-1996 ', 'lyahbianca.aquino04@gmail.com', '2324', 'SAN DIONISIO ST.', '32', 'TONDO I / II', 'Choose...', 1012, 'NTC', 'ICT', 'Quiapo', '12', 2022, 'K-12', 90, 'MR-VRwdyKbe.jpg', 'F137-VRwdyKbe.jpg', 'GM-VRwdyKbe.jpg', 'Passed'),
(23, 'TUPM-APPL22-5206', 6, 'Ivy', 'Sophia', 'Gabriola', '', 168138274634, 'Female', 22, '2021-10-20', 'Manila', '09281736388', '374-3017', 'lyahbianca.aquino04@gmail.com', '151', 'SAN DIONISIO ST.', '56', 'TONDO I / II', 'Tondo, Manila', 1012, 'Polytechnic University of the Philippines', 'STEM', 'Sta. Mesa Manila', '12', 2022, 'K-12', 93, 'MR-5Q46tAWl.jpg', 'F137-5Q46tAWl.jpg', 'GM-5Q46tAWl.jpg', 'Passed'),
(24, 'TUPM-APPL22-4272', 7, 'Yuuki', 'Ron', 'Henley', '', 135756967978, 'Male', 25, '2021-10-15', 'Manila', '09281736388', '374-3017', 'lyahbianca.aquino04@gmail.com', '151', 'SAN DIONISIO ST.', '56', 'TONDO I / II', 'N/A', 1012, 'The National Teachers College', 'N/A', '629 J. Nepomuceno St., Quiapo, Manila', '10', 2015, 'Old Curriculum', 89, 'MR-7BgSeZWK.jpg', 'F137-7BgSeZWK.jpg', 'GM-7BgSeZWK.jpg', 'Passed'),
(25, 'TUPM-APPL22-1737', 1, 'Marites', 'Ann', 'Garcia', '', 163489346947, 'Female', 21, '2021-11-19', 'Quezon City', '09281730809', '(074) 304-1996 ', 'lyahbianca.aquino04@gmail.com', '149', 'SAN DIONISIO ST.', '45', 'Quezon City', 'Cebu', 1012, 'NTC', 'HUMSS', 'Quiapo', '12', 2021, 'K-12', 93, 'MR-gmtHTD54.jpg', 'F137-gmtHTD54.jpg', 'GM-gmtHTD54.jpg', 'Passed'),
(26, 'TUPM-APPL22-2595', 6, 'Allexis', 'John', 'Garcia', '', 168352375548, 'Male', 21, '2021-09-17', 'Quezon City', '09281736388', '374-3017', 'lyahbianca.aquino04@gmail.com', '149', 'SAN DIONISIO ST.', '32', 'TONDO I / II', 'N/A', 1012, 'The National Teachers College', 'STEM', '629 J. Nepomuceno St., Quiapo, Manila', '12', 2022, 'K-12', 93, 'MR-pCcke8MA.jpg', 'F137-pCcke8MA.jpg', 'GM-pCcke8MA.jpg', 'Passed'),
(27, 'TUPM-APPL22-3129', 8, 'Nikki', 'Marie', 'Celis', '', 145856967078, 'Female', 21, '2021-11-20', 'Manila', '09281736388', '(074) 304-1996 ', 'lyahbianca.aquino04@gmail.com', '149', 'SAN DIONISIO ST.', '45', 'TONDO I / II', 'Tondo, Manila', 1012, 'The National Teachers College', 'STEM', '629 J. Nepomuceno St., Quiapo, Manila', '12', 2021, 'K-12', 90, 'MR-gdOrPVRa.jpg', 'F137-gdOrPVRa.jpg', 'GM-gdOrPVRa.jpg', 'Passed'),
(28, 'TUPM-APPL22-2848', 9, 'Paulo', '', 'Macapanas', '', 164634096340, 'Male', 20, '2021-11-12', 'Manila', '09281736388', '2313321', 'lyahbianca.aquino04@gmail.com', '2324', 'Quiapo st', '45', 'TONDO I / II', 'Tondo, Manila', 1012, 'NTC', 'STEM', 'Quiapo', '12', 2021, 'K-12', 90, 'MR-XZlM8wWt.jpg', 'F137-XZlM8wWt.jpg', 'GM-XZlM8wWt.jpg', 'Passed'),
(29, 'TUPM-APPL22-7845', 8, 'Mark', 'Gusion', 'Leynes', '', 168166824827, 'Male', 20, '2021-10-20', 'Quezon City', '09281736856', '(074) 304-1996 ', 'lyahbianca.aquino04@gmail.com', '149', 'SAN DIONISIO ST.', '56', 'TONDO I / II', 'N/A', 1012, 'NTC', 'STEM', 'Quiapo', '12', 2020, 'K-12', 98, 'MR-tqz6JIuH.jpg', 'F137-tqz6JIuH.jpg', 'GM-tqz6JIuH.jpg', 'Passed'),
(30, 'TUPM-APPL22-5679', 7, 'Rebecca', '', 'Medina', '', 123457568679, 'Female', 20, '2021-10-15', 'Manila', '09281775485', '(074) 304-1996 ', 'lyahbianca.aquino04@gmail.com', '151', 'SAN DIONISIO ST.', '56', 'TONDO I / II', 'N/A', 1012, 'The National Teachers College', 'STEM', '629 J. Nepomuceno St., Quiapo, Manila', '12', 2022, 'K-12', 90, 'MR-tCyfW80M.jpg', 'F137-tCyfW80M.jpg', 'GM-tCyfW80M.jpg', 'Passed'),
(31, 'TUPM-APPL22-9173', 8, 'Vince', 'Jay', 'Siena', 'Jr', 345353, 'Male', 21, '2022-02-09', 'Manila', '09284575488', 'N/A', 'tesaquino2123@gmail.com', '151', 'SAN DIONISIO ST.', '45', 'TONDO I / II', 'Cebu', 2422, 'Polytechnic University of the Philippines', 'STEM', 'Sta. Mesa Manila', '12', 2022, 'K-12', 89, 'MR-gcJwYB4h.jpg', 'F137-gcJwYB4h.jpg', 'GM-gcJwYB4h.jpg', 'Passed'),
(32, 'TUPM-APPL22-3968', 3, 'Summer', '', 'Gedman', '', 163905689347, 'Female', 21, '2021-11-16', 'Quezon City', '09283473578', '(074) 304-1996 ', 'lyahbianca.aquino04@gmail.com', '121', 'St. Andrew st.', '45', 'Quezon City', 'Cebu', 1353, 'NTC', 'STEM', 'Quiapo', '12', 2022, 'K-12', 93, 'MR-5aQPfwnW.jpg', 'F137-5aQPfwnW.jpg', 'GM-5aQPfwnW.jpg', 'Passed'),
(33, 'TUPM-APPL22-5638', 3, 'Mina', '', 'Minari', '', 123456789123, 'Female', 21, '2021-10-22', 'Caloocan ', '05745856856', '374-3017', 'lyahbianca.aquino04@gmail.com', '151', 'St. Andrew st.', '56', 'Caloocan City North', 'Cebu', 1235, 'NTC', 'STEM', 'Quiapo', '12', 2022, 'K-12', 90, 'MR-9smM7Bwf.jpg', 'F137-9smM7Bwf.jpg', 'GM-9smM7Bwf.jpg', 'Passed'),
(34, 'TUPM-APPL22-9750', 9, 'Dante', '', 'Rivera', 'Jr', 168162363475, 'Male', 21, '2022-02-11', 'Manila', '09288569679', '(074) 304-1996 ', 'lyahbianca.aquino04@gmail.com', '151', 'SAN DIONISIO ST.', '56', 'TONDO I / II', 'N/A', 1253, 'NTC', 'HUMSS', 'Quiapo', '12', 2022, 'K-12', 89, 'MR-A4Pw8DgZ.jpg', 'F137-A4Pw8DgZ.jpg', 'GM-A4Pw8DgZ.jpg', 'Passed'),
(35, 'TUPM-APPL22-6175', 8, 'Bren', 'Kent', 'Lobosco', '', 168347568679, 'Male', 21, '2022-02-11', 'Manila', '09281757574', '(074) 304-1996 ', 'lyahbianca.aquino04@gmail.com', '149', 'SAN DIONISIO ST.', '45', 'TONDO I / II', 'N/A', 1233, 'Polytechnic University of the Philippines', 'STEM', 'Sta. Mesa Manila', '12', 2022, 'K-12', 90, 'MR-MHV7leaK.jpg', 'F137-MHV7leaK.jpg', 'GM-MHV7leaK.jpg', 'Passed'),
(36, 'TUPM-APPL22-4792', 7, 'Andrei', '', 'Heneroso', '', 163456343463, 'Male', 21, '2021-11-11', 'Manila', '09281743634', '374-3017', 'lyahbianca.aquino04@gmail.com', '149', 'SAN DIONISIO ST.', '45', 'TONDO I / II', 'N/A', 1325, 'NTC', 'STEM', 'Quiapo', '12', 2021, 'K-12', 93, 'MR-wk1RvTIb.jpg', 'F137-wk1RvTIb.jpg', 'GM-wk1RvTIb.jpg', 'Passed'),
(37, 'TUPM-APPL22-7468', 9, 'Geneve', 'Santos', 'Osorio', '', 16432346436, 'Female', 21, '2021-11-12', 'Quezon City', '09281774545', '(074) 304-1996 ', 'lyahbianca.aquino04@gmail.com', '151', 'SAN DIONISIO ST.', '32', 'TONDO I / II', 'Choose...', 2323, 'NTC', 'STEM', 'Quiapo', '12', 2022, 'K-12', 89, 'MR-91bePRMz.jpg', 'F137-91bePRMz.jpg', 'GM-91bePRMz.jpg', 'Passed'),
(38, 'TUPM-APPL22-9735', 7, 'Bryan', 'Gobasco', 'Pineda', '', 164482765857, 'Male', 21, '2021-12-16', 'Manila', '09234634634', 'N/A', 'lyahbianca.aquino04@gmail.com', '149', 'SAN DIONISIO ST.', '56', 'TONDO I / II', 'Tondo, Manila', 1012, 'Polytechnic University of the Philippines', 'STEM', 'Sta. Mesa Manila', '12', 2022, 'K-12', 90, 'MR-vfBTRXAn.jpg', 'F137-vfBTRXAn.jpg', 'GM-vfBTRXAn.jpg', 'Passed'),
(39, 'TUPM-APPL22-2960', 1, 'Mike', 'Lebron', 'Davis', '', 13575475432, 'Male', 21, '2021-11-18', 'Quezon City', '09281547854', '(074) 304-1996 ', 'lyahbianca.aquino04@gmail.com', '121', 'SAN DIONISIO ST.', '32', 'Quezon City', 'N/A', 1012, 'The National Teachers College', 'STEM', '629 J. Nepomuceno St., Quiapo, Manila', '12', 2022, 'K-12', 93, 'MR-EXpBHLum.jpg', 'F137-EXpBHLum.jpg', 'GM-EXpBHLum.jpg', 'Passed'),
(40, 'TUPM-APPL22-3721', 4, 'Ryan', 'Cortez', 'Johnson', '', 168166823467, 'Male', 21, '2021-12-22', 'Caloocan ', '02353453464', 'N/A', 'lyahbianca.aquino04@gmail.com', '121', 'SAN DIONISIO ST.', '45', 'Caloocan City North', 'Cebu', 2122, 'NTC', 'HUMSS', 'Quiapo', '12', 2022, 'K-12', 90, 'MR-LijCgAcd.jpg', 'F137-LijCgAcd.jpg', 'GM-LijCgAcd.jpg', 'Passed'),
(41, 'TUPM-APPL22-9213', 4, 'Gwen', 'Mae', 'Alvarez', '', 123456789123, 'Female', 21, '2021-12-10', 'Manila', '09243634634', '374-3017', 'lyahbianca.aquino04@gmail.com', '149', 'SAN DIONISIO ST.', '45', 'TONDO I / II', 'Tondo, Manila', 1012, 'Polytechnic University of the Philippines', 'GAS', 'Sta. Mesa Manila', '12', 2021, 'K-12', 93, 'MR-Gu2DACIL.jpg', 'F137-Gu2DACIL.jpg', 'GM-Gu2DACIL.jpg', 'Passed'),
(42, 'TUPM-APPL22-1455', 8, 'Catherine', 'Lim', 'Hinkson', '', 146456789123, 'Female', 21, '2022-02-05', 'Manila', '09287457547', '(074) 304-1996 ', 'lyahbianca.aquino04@gmail.com', '151', 'SAN DIONISIO ST.', '56', 'TONDO I / II', 'Tondo, Manila', 1012, 'NTC', 'STEM', 'Quiapo', '12', 2022, 'K-12', 89, 'MR-WbLgSOf0.jpg', 'F137-WbLgSOf0.jpg', 'GM-WbLgSOf0.jpg', 'Passed'),
(43, 'TUPM-APPL22-2136', 6, 'Lou', '', 'Javier', '', 168166589783, 'Female', 21, '2022-02-17', 'Manila', '09285474575', 'N/A', 'lyahbianca.aquino04@gmail.com', '343', 'SAN DIONISIO ST.', '23', 'TONDO I / II', 'N/A', 1012, 'NTC', 'STEM', 'Quiapo', '12', 2022, 'K-12', 89, 'MR-iYJO5geF.jpg', 'F137-iYJO5geF.jpg', 'GM-iYJO5geF.jpg', 'Passed'),
(44, 'TUPM-APPL22-8684', 9, 'Lydia', 'Gomez', 'Swift', '', 168165477978, 'Female', 21, '2021-12-10', 'Cavite', '09285474536', 'N/A', 'lydia@gmail.com', '151', 'St. Andrew st.', '32', 'Cavite', 'Cebu', 343, 'NTC', 'STEM', 'Quiapo', '12', 2021, 'K-12', 93, 'MR-ula3mktv.jpg', 'F137-ula3mktv.jpg', 'GM-ula3mktv.jpg', 'Passed'),
(45, 'TUPM-APPL22-4450', 4, 'Ricardo', 'Clemente', 'Sanchez', '', 168756856845, 'Male', 22, '2021-12-16', 'Manila', '09754744634', 'N/A', 'lyahbianca.aquino04@gmail.com', '2324', 'SAN DIONISIO ST.', '56', 'TONDO I / II', 'N/A', 1012, 'Polytechnic University of the Philippines', 'STEM', 'Sta. Mesa Manila', '12', 2021, 'K-12', 93, 'MR-gXzqlyAE.jpg', 'F137-gXzqlyAE.jpg', 'GM-gXzqlyAE.jpg', 'Passed'),
(46, 'TUPM-APPL22-8573', 9, 'Benito', '', 'Tolentino', '', 168190687856, 'Male', 21, '2021-11-18', 'Manila', '09281757457', 'N/A', 'lyahbianca.aquino@tup.edu.ph', '151', 'SAN DIONISIO ST.', '45', 'TONDO I / II', 'Tondo, Manila', 1012, 'Polytechnic University of the Philippines', 'STEM', 'Sta. Mesa Manila', '12', 2022, 'K-12', 93, 'MR-lT0QxPkd.jpg', 'F137-lT0QxPkd.jpg', 'GM-lT0QxPkd.jpg', 'Applied'),
(47, 'TUPM-APPL22-7855', 3, 'Carlota', '', 'Moonhart', '', 127548468568, 'Female', 21, '2022-02-10', 'Manila', '09287457544', '(074) 304-1996 ', 'lyahbianca.aquino04@gmail.com', '325', 'SAN DIONISIO ST.', '34', 'TONDO I / II', 'Tondo, Manila', 1244, 'NTC', 'STEM', 'Quiapo', '12', 2022, 'K-12', 93, 'MR-PZc2hBOQ.jpg', 'F137-PZc2hBOQ.jpg', 'GM-PZc2hBOQ.jpg', 'Applied'),
(48, 'TUPM-APPL22-5411', 4, 'Justine', 'Lapuz', 'de Jesus', '', 123475475473, 'Male', 21, '2022-02-02', 'Manila', '09745756865', '374-3017', 'lyahbianca.aquino04@gmail.com', '235', 'SAN DIONISIO ST.', '546', 'TONDO I / II', 'Tondo, Manila', 10434, 'Polytechnic University of the Philippines', 'STEM', 'Sta. Mesa Manila', '12', 2022, 'K-12', 93, 'MR-KIz7hjbs.jpg', 'F137-KIz7hjbs.jpg', 'GM-KIz7hjbs.jpg', 'Applied'),
(49, 'TUPM-APPL22-3629', 6, 'Christian', 'Reyes', 'delo Santos', '', 168166457546, 'Male', 23, '2022-02-10', 'Manila', '092873765', 'N/A', 'lyahbianca.aquino04@gmail.com', '2353', 'SAN DIONISIO ST.', '321', 'TONDO I / II', 'Tondo, Manila', 1023, 'Polytechnic University of the Philippines', 'STEM', 'Sta. Mesa Manila', '12', 2021, 'K-12', 93, 'MR-vmaenSwH.jpg', 'F137-vmaenSwH.jpg', 'GM-vmaenSwH.jpg', 'Applied'),
(50, 'TUPM-APPL22-6890', 7, 'Fanny', 'Sarraga', 'Basig', '', 123452353252, 'Female', 21, '2022-02-17', 'Manila', '09263634633', 'N/A', 'lyahbianca.aquino04@gmail.com', '149', 'SAN DIONISIO ST.', '32', 'TONDO I / II', 'Tondo, Manila', 1012, 'NTC', 'ICT', 'Quiapo', '12', 2021, 'K-12', 89, 'MR-AvQJEigo.jpg', 'F137-AvQJEigo.jpg', 'GM-AvQJEigo.jpg', 'Applied');

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
  `yearlevelClass` int(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `room_no` varchar(255) NOT NULL,
  `isTaken` int(1) NOT NULL,
  `statusClass` int(1) NOT NULL,
  PRIMARY KEY (`classID`),
  KEY `class_subject` (`subjectID`),
  KEY `class_teacher` (`teacherID`),
  KEY `class_course` (`courseID`)
) ENGINE=InnoDB AUTO_INCREMENT=185 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`classID`, `class_code`, `teacherID`, `subjectID`, `start_time`, `end_time`, `courseID`, `yearlevelClass`, `day`, `room_no`, `isTaken`, `statusClass`) VALUES
(1, 'BETCET-11A', NULL, 289, '07:00:00', '09:00:00', 9, 1, 'Monday', 'TBA', 0, 1),
(2, 'BETCET-11A', NULL, 290, '07:00:00', '09:00:00', 9, 1, 'Tuesday', 'TBA', 0, 1),
(3, 'BETCET-11A', NULL, 291, '07:00:00', '09:00:00', 9, 1, 'Wednesday', 'TBA', 0, 1),
(4, 'BETCET-11B', NULL, 289, '09:00:00', '11:00:00', 9, 1, 'Monday', 'TBA', 0, 1),
(5, 'BETCET-11B', NULL, 290, '09:00:00', '11:00:00', 9, 1, 'Tuesday', 'TBA', 0, 1),
(6, 'BETCET-11B', NULL, 291, '09:00:00', '11:00:00', 9, 1, 'Wednesday', 'TBA', 0, 1),
(7, 'BETCET-12A', NULL, 292, '07:00:00', '09:00:00', 9, 1, 'Monday', 'TBA', 0, 1),
(8, 'BETCET-12A', NULL, 293, '07:00:00', '09:00:00', 9, 1, 'Tuesday', 'TBA', 0, 1),
(9, 'BETCET-12B', NULL, 292, '09:00:00', '11:00:00', 9, 1, 'Monday', 'TBA', 0, 1),
(10, 'BETCET-12B', NULL, 293, '09:00:00', '11:00:00', 9, 1, 'Tuesday', 'TBA', 0, 1),
(11, 'BETCET-21A', NULL, 294, '07:00:00', '09:00:00', 9, 2, 'Monday', 'TBA', 0, 1),
(12, 'BETCET-21A', NULL, 295, '07:00:00', '09:00:00', 9, 2, 'Tuesday', 'TBA', 0, 1),
(13, 'BETCET-21A', NULL, 296, '07:00:00', '09:00:00', 9, 2, 'Wednesday', 'TBA', 0, 1),
(14, 'BETCET-22A', NULL, 297, '09:00:00', '11:00:00', 9, 2, 'Monday', 'TBA', 0, 1),
(15, 'BETCET-22A', NULL, 298, '09:00:00', '11:00:00', 9, 2, 'Tuesday', 'TBA', 0, 1),
(16, 'BETCET-22A', NULL, 299, '09:00:00', '11:00:00', 9, 2, 'Wednesday', 'TBA', 0, 1),
(17, 'BETCET-21B', NULL, 294, '09:00:00', '11:00:00', 9, 2, 'Monday', 'TBA', 0, 1),
(18, 'BETCET-21B', NULL, 295, '09:00:00', '11:00:00', 9, 2, 'Tuesday', 'TBA', 0, 1),
(19, 'BETCET-21B', NULL, 296, '09:00:00', '11:00:00', 9, 2, 'Wednesday', 'TBA', 0, 1),
(20, 'BETCET-22B', NULL, 297, '07:00:00', '09:00:00', 9, 2, 'Monday', 'TBA', 0, 1),
(21, 'BETCET-22B', NULL, 298, '07:00:00', '09:00:00', 9, 2, 'Tuesday', 'TBA', 0, 1),
(22, 'BETCET-22B', NULL, 299, '07:00:00', '09:00:00', 9, 2, 'Wednesday', 'TBA', 0, 1),
(23, 'BFA-11A', NULL, 91, '07:00:00', '09:00:00', 8, 1, 'Monday', 'TBA', 0, 1),
(24, 'BFA-11A', NULL, 92, '07:00:00', '09:00:00', 8, 1, 'Tuesday', 'TBA', 0, 1),
(25, 'BFA-11A', NULL, 93, '07:00:00', '09:00:00', 8, 1, 'Wednesday', 'TBA', 0, 1),
(26, 'BFA-11A', NULL, 94, '07:00:00', '09:00:00', 8, 1, 'Thursday', 'TBA', 0, 1),
(27, 'BFA-11A', NULL, 95, '07:00:00', '09:00:00', 8, 1, 'Friday', 'TBA', 0, 1),
(28, 'BFA-11A', NULL, 96, '07:00:00', '09:00:00', 8, 1, 'Saturday', 'TBA', 0, 1),
(29, 'BFA-11A', NULL, 97, '09:00:00', '11:00:00', 8, 1, 'Monday', 'TBA', 0, 1),
(30, 'BFA-11A', NULL, 98, '09:00:00', '11:00:00', 8, 1, 'Tuesday', 'TBA', 0, 1),
(31, 'BFA-11A', NULL, 99, '09:00:00', '11:00:00', 8, 1, 'Wednesday', 'TBA', 0, 1),
(32, 'BFA-11A', NULL, 100, '09:00:00', '11:00:00', 8, 1, 'Thursday', 'TBA', 0, 1),
(33, 'BFA-11B', NULL, 91, '07:00:00', '09:00:00', 8, 1, 'Monday', 'TBA', 0, 1),
(34, 'BFA-11B', NULL, 92, '07:00:00', '09:00:00', 8, 1, 'Tuesday', 'TBA', 0, 1),
(35, 'BFA-11B', NULL, 93, '07:00:00', '09:00:00', 8, 1, 'Wednesday', 'TBA', 0, 1),
(36, 'BFA-11B', NULL, 94, '07:00:00', '09:00:00', 8, 1, 'Thursday', 'TBA', 0, 1),
(37, 'BFA-11B', NULL, 95, '07:00:00', '09:00:00', 8, 1, 'Friday', 'TBA', 0, 1),
(38, 'BFA-11B', NULL, 96, '07:00:00', '09:00:00', 8, 1, 'Saturday', 'TBA', 0, 1),
(39, 'BFA-11B', NULL, 97, '09:00:00', '11:00:00', 8, 1, 'Monday', 'TBA', 0, 1),
(40, 'BFA-11B', NULL, 98, '09:00:00', '11:00:00', 8, 1, 'Tuesday', 'TBA', 0, 1),
(41, 'BFA-11B', NULL, 99, '09:00:00', '11:00:00', 8, 1, 'Wednesday', 'TBA', 0, 1),
(42, 'BFA-11B', NULL, 100, '09:00:00', '11:00:00', 8, 1, 'Thursday', 'TBA', 0, 1),
(43, 'BFA-12A', NULL, 101, '10:00:00', '12:00:00', 8, 1, 'Monday', 'TBA', 0, 1),
(44, 'BFA-12A', NULL, 102, '10:00:00', '12:00:00', 8, 1, 'Tuesday', 'TBA', 0, 1),
(45, 'BFA-12A', NULL, 103, '10:00:00', '12:00:00', 8, 1, 'Wednesday', 'TBA', 0, 1),
(46, 'BFA-12A', NULL, 104, '10:00:00', '12:00:00', 8, 1, 'Thursday', 'TBA', 0, 1),
(47, 'BFA-12A', NULL, 105, '10:00:00', '12:00:00', 8, 1, 'Friday', 'TBA', 0, 1),
(48, 'BFA-12A', NULL, 106, '10:00:00', '12:00:00', 8, 1, 'Saturday', 'TBA', 0, 1),
(49, 'BFA-12A', NULL, 107, '13:00:00', '15:00:00', 8, 1, 'Monday', 'TBA', 0, 1),
(50, 'BFA-12A', NULL, 108, '13:00:00', '15:00:00', 8, 1, 'Tuesday', 'TBA', 0, 1),
(51, 'BFA-12A', NULL, 109, '13:00:00', '15:00:00', 8, 1, 'Wednesday', 'TBA', 0, 1),
(52, 'BFA-12B', NULL, 101, '07:00:00', '09:00:00', 8, 1, 'Monday', 'TBA', 0, 1),
(53, 'BFA-12B', NULL, 102, '07:00:00', '09:00:00', 8, 1, 'Tuesday', 'TBA', 0, 1),
(54, 'BFA-12B', NULL, 103, '07:00:00', '09:00:00', 8, 1, 'Wednesday', 'TBA', 0, 1),
(55, 'BFA-12B', NULL, 104, '07:00:00', '09:00:00', 8, 1, 'Thursday', 'TBA', 0, 1),
(56, 'BFA-12B', NULL, 105, '07:00:00', '09:00:00', 8, 1, 'Friday', 'TBA', 0, 1),
(57, 'BFA-12B', NULL, 106, '07:00:00', '09:00:00', 8, 1, 'Saturday', 'TBA', 0, 1),
(58, 'BFA-12B', NULL, 107, '15:00:00', '17:00:00', 8, 1, 'Monday', 'TBA', 0, 1),
(59, 'BFA-12B', NULL, 108, '15:00:00', '17:00:00', 8, 1, 'Tuesday', 'TBA', 0, 1),
(60, 'BFA-12B', NULL, 109, '15:00:00', '17:00:00', 8, 1, 'Wednesday', 'TBA', 0, 1),
(61, 'BFA-21A', NULL, 110, '07:00:00', '09:00:00', 8, 2, 'Monday', 'TBA', 0, 1),
(62, 'BFA-21A', NULL, 111, '07:00:00', '09:00:00', 8, 2, 'Tuesday', 'TBA', 0, 1),
(63, 'BFA-21A', NULL, 112, '07:00:00', '09:00:00', 8, 2, 'Wednesday', 'TBA', 0, 1),
(64, 'BFA-21A', NULL, 113, '07:00:00', '09:00:00', 8, 2, 'Thursday', 'TBA', 0, 1),
(65, 'BFA-21A', NULL, 114, '07:00:00', '09:00:00', 8, 2, 'Friday', 'TBA', 0, 1),
(66, 'BFA-21A', NULL, 115, '07:00:00', '09:00:00', 8, 2, 'Saturday', 'TBA', 0, 1),
(67, 'BFA-21A', NULL, 116, '09:00:00', '11:00:00', 8, 2, 'Monday', 'TBA', 0, 1),
(68, 'BFA-21A', NULL, 117, '09:00:00', '11:00:00', 8, 2, 'Tuesday', 'TBA', 0, 1),
(69, 'BFA-21B', NULL, 110, '09:00:00', '11:00:00', 8, 2, 'Monday', 'TBA', 0, 1),
(70, 'BFA-21B', NULL, 111, '09:00:00', '11:00:00', 8, 2, 'Tuesday', 'TBA', 0, 1),
(71, 'BFA-21B', NULL, 112, '09:00:00', '11:00:00', 8, 2, 'Wednesday', 'TBA', 0, 1),
(72, 'BFA-21B', NULL, 113, '09:00:00', '11:00:00', 8, 2, 'Thursday', 'TBA', 0, 1),
(73, 'BFA-21B', NULL, 114, '09:00:00', '11:00:00', 8, 2, 'Friday', 'TBA', 0, 1),
(74, 'BFA-21B', NULL, 115, '13:00:00', '15:00:00', 8, 2, 'Saturday', 'TBA', 0, 1),
(75, 'BFA-21B', NULL, 116, '13:00:00', '15:00:00', 8, 2, 'Monday', 'TBA', 0, 1),
(76, 'BFA-21B', NULL, 117, '13:00:00', '15:00:00', 8, 2, 'Tuesday', 'TBA', 0, 1),
(77, 'BFA-22A', NULL, 118, '08:00:00', '10:00:00', 8, 2, 'Monday', 'TBA', 0, 1),
(78, 'BFA-22A', NULL, 119, '08:00:00', '10:00:00', 8, 2, 'Tuesday', 'TBA', 0, 1),
(79, 'BFA-22A', NULL, 120, '08:00:00', '10:00:00', 8, 2, 'Wednesday', 'TBA', 0, 1),
(80, 'BFA-22A', NULL, 121, '08:00:00', '10:00:00', 8, 2, 'Thursday', 'TBA', 0, 1),
(81, 'BFA-22A', NULL, 122, '08:00:00', '10:00:00', 8, 2, 'Friday', 'TBA', 0, 1),
(82, 'BFA-22A', NULL, 123, '08:00:00', '10:00:00', 8, 2, 'Saturday', 'TBA', 0, 1),
(83, 'BFA-22A', NULL, 124, '12:00:00', '15:00:00', 8, 2, 'Monday', 'TBA', 0, 1),
(84, 'BFA-22A', NULL, 125, '12:00:00', '15:00:00', 8, 2, 'Tuesday', 'TBA', 0, 1),
(85, 'BFA-22A', NULL, 126, '12:00:00', '15:00:00', 8, 2, 'Wednesday', 'TBA', 0, 1),
(86, 'BFA-22A', NULL, 127, '12:00:00', '15:00:00', 8, 2, 'Thursday', 'TBA', 0, 1),
(87, 'BFA-22B', NULL, 118, '10:00:00', '12:00:00', 8, 2, 'Monday', 'TBA', 0, 1),
(88, 'BFA-22B', NULL, 119, '10:00:00', '12:00:00', 8, 2, 'Tuesday', 'TBA', 0, 1),
(89, 'BFA-22B', NULL, 120, '10:00:00', '12:00:00', 8, 2, 'Wednesday', 'TBA', 0, 1),
(90, 'BFA-22B', NULL, 121, '10:00:00', '12:00:00', 8, 2, 'Thursday', 'TBA', 0, 1),
(91, 'BFA-22B', NULL, 122, '10:00:00', '12:00:00', 8, 2, 'Friday', 'TBA', 0, 1),
(92, 'BFA-22B', NULL, 123, '10:00:00', '12:00:00', 8, 2, 'Saturday', 'TBA', 0, 1),
(93, 'BFA-22B', NULL, 124, '13:00:00', '15:00:00', 8, 2, 'Monday', 'TBA', 0, 1),
(94, 'BFA-22B', NULL, 125, '13:00:00', '15:00:00', 8, 2, 'Tuesday', 'TBA', 0, 1),
(95, 'BFA-22B', NULL, 126, '13:00:00', '15:00:00', 8, 2, 'Wednesday', 'TBA', 0, 1),
(96, 'BFA-22B', NULL, 127, '13:00:00', '15:00:00', 8, 2, 'Thursday', 'TBA', 0, 1),
(97, 'BFA-22B', NULL, 118, '08:30:00', '10:00:00', 8, 2, 'Monday', 'TBA', 0, 1),
(98, 'BFA-22B', NULL, 119, '08:30:00', '10:00:00', 8, 2, 'Tuesday', 'TBA', 0, 1),
(99, 'BFA-22B', NULL, 120, '08:30:00', '10:00:00', 8, 2, 'Wednesday', 'TBA', 0, 1),
(100, 'BFA-22B', NULL, 121, '08:30:00', '10:00:00', 8, 2, 'Thursday', 'TBA', 0, 1),
(101, 'BFA-22B', NULL, 122, '08:30:00', '10:00:00', 8, 2, 'Friday', 'TBA', 0, 1),
(102, 'BFA-22B', NULL, 123, '08:30:00', '10:00:00', 8, 2, 'Saturday', 'TBA', 0, 1),
(103, 'BFA-22B', NULL, 124, '15:00:00', '16:00:00', 8, 2, 'Monday', 'TBA', 0, 1),
(104, 'BFA-22B', NULL, 125, '15:00:00', '16:00:00', 8, 2, 'Tuesday', 'TBA', 0, 1),
(105, 'BFA-22B', NULL, 126, '15:00:00', '16:00:00', 8, 2, 'Wednesday', 'TBA', 0, 1),
(106, 'BFA-22B', NULL, 127, '15:00:00', '16:00:00', 8, 2, 'Thursday', 'TBA', 0, 1),
(107, 'BSA-11A', NULL, 151, '15:00:00', '17:00:00', 7, 1, 'Monday', 'TBA', 0, 1),
(108, 'BSA-11A', NULL, 152, '15:00:00', '17:00:00', 7, 1, 'Tuesday', 'TBA', 0, 1),
(109, 'BSA-11A', NULL, 153, '15:00:00', '17:00:00', 7, 1, 'Wednesday', 'TBA', 0, 1),
(110, 'BSA-11A', NULL, 154, '15:00:00', '17:00:00', 7, 1, 'Thursday', 'TBA', 0, 1),
(111, 'BSA-11A', NULL, 155, '15:00:00', '17:00:00', 7, 1, 'Friday', 'TBA', 0, 1),
(112, 'BSA-11A', NULL, 156, '15:00:00', '17:00:00', 7, 1, 'Saturday', 'TBA', 0, 1),
(113, 'BSA-11A', NULL, 157, '17:00:00', '19:00:00', 7, 1, 'Monday', 'TBA', 0, 1),
(114, 'BSA-11A', NULL, 158, '17:00:00', '19:00:00', 7, 1, 'Tuesday', 'TBA', 0, 1),
(115, 'BSA-11A', NULL, 159, '17:00:00', '19:00:00', 7, 1, 'Wednesday', 'TBA', 0, 1),
(116, 'BSA-11A', NULL, 160, '17:00:00', '19:00:00', 7, 1, 'Thursday', 'TBA', 0, 1),
(117, 'BSA-12A', NULL, 161, '07:00:00', '10:00:00', 7, 1, 'Monday', 'TBA', 0, 1),
(118, 'BSA-12A', NULL, 162, '07:00:00', '09:00:00', 7, 1, 'Tuesday', 'TBA', 0, 1),
(119, 'BSA-12A', NULL, 163, '07:00:00', '09:00:00', 7, 1, 'Wednesday', 'TBA', 0, 1),
(120, 'BSA-12A', NULL, 164, '07:00:00', '10:00:00', 7, 1, 'Thursday', 'TBA', 0, 1),
(121, 'BSA-12A', NULL, 165, '07:00:00', '10:00:00', 7, 1, 'Friday', 'TBA', 0, 1),
(122, 'BSA-12A', NULL, 166, '07:00:00', '09:00:00', 7, 1, 'Saturday', 'TBA', 0, 1),
(123, 'BSA-12A', NULL, 167, '09:00:00', '12:00:00', 7, 1, 'Tuesday', 'TBA', 0, 1),
(124, 'BSA-12A', NULL, 168, '10:00:00', '13:00:00', 7, 1, 'Thursday', 'TBA', 0, 1),
(125, 'BSA-12A', NULL, 169, '12:00:00', '15:00:00', 7, 1, 'Saturday', 'TBA', 0, 1),
(126, 'BSA-12A', NULL, 170, '10:00:00', '13:00:00', 7, 1, 'Monday', 'TBA', 0, 1),
(127, 'BSCS-11A', 1, 1, '07:00:00', '10:00:00', 2, 1, 'Monday', 'TBA', 1, 1),
(128, 'BSCS-11A', 1, 2, '07:00:00', '10:00:00', 2, 1, 'Tuesday', 'TBA', 1, 1),
(129, 'BSCS-11A', 4, 3, '07:00:00', '10:00:00', 2, 1, 'Wednesday', 'TBA', 1, 1),
(130, 'BSCS-11A', 4, 4, '07:00:00', '10:00:00', 2, 1, 'Thursday', 'TBA', 1, 1),
(131, 'BSCS-11A', 13, 5, '07:00:00', '10:00:00', 2, 1, 'Friday', 'TBA', 1, 1),
(132, 'BSCS-11A', 13, 6, '07:00:00', '10:00:00', 2, 1, 'Saturday', 'TBA', 1, 1),
(133, 'BSCS-11A', 22, 7, '11:00:00', '13:00:00', 2, 1, 'Monday', 'TBA', 1, 1),
(134, 'BSCS-11A', 30, 8, '11:00:00', '13:00:00', 2, 1, 'Tuesday', 'TBA', 1, 1),
(135, 'BSCS-11A', 19, 9, '11:00:00', '13:00:00', 2, 1, 'Wednesday', 'TBA', 1, 1),
(136, 'BSCS-11A', 14, 10, '11:00:00', '13:00:00', 2, 1, 'Thursday', 'TBA', 1, 1),
(137, 'BSCS-11A', 5, 11, '11:00:00', '13:00:00', 2, 1, 'Friday', 'TBA', 1, 1),
(138, 'BSCS-12A', NULL, 12, '07:00:00', '10:00:00', 2, 1, 'Monday', 'TBA', 0, 1),
(139, 'BSCS-12A', NULL, 13, '07:00:00', '10:00:00', 2, 1, 'Tuesday', 'TBA', 0, 1),
(140, 'BSCS-12A', NULL, 14, '07:00:00', '10:00:00', 2, 1, 'Wednesday', 'TBA', 0, 1),
(141, 'BSCS-12A', NULL, 15, '07:00:00', '10:00:00', 2, 1, 'Thursday', 'TBA', 0, 1),
(142, 'BSCS-12A', NULL, 16, '07:00:00', '10:00:00', 2, 1, 'Friday', 'TBA', 0, 1),
(143, 'BSCS-12A', NULL, 17, '07:00:00', '10:00:00', 2, 1, 'Saturday', 'TBA', 0, 1),
(144, 'BSCS-12A', NULL, 18, '11:00:00', '13:00:00', 2, 1, 'Tuesday', 'TBA', 0, 1),
(145, 'BSCS-12A', NULL, 19, '11:00:00', '13:00:00', 2, 1, 'Thursday', 'TBA', 0, 1),
(146, 'BSCS-12A', NULL, 20, '11:00:00', '13:00:00', 2, 1, 'Saturday', 'TBA', 0, 1),
(147, 'BSCE-11A', NULL, 202, '07:00:00', '09:00:00', 3, 1, 'Monday', 'TBA', 0, 1),
(148, 'BSCE-11A', NULL, 203, '07:00:00', '10:00:00', 3, 1, 'Tuesday', 'TBA', 0, 1),
(149, 'BSCE-11A', NULL, 204, '07:00:00', '09:00:00', 3, 1, 'Wednesday', 'TBA', 0, 1),
(150, 'BSCE-11A', NULL, 205, '07:00:00', '11:00:00', 3, 1, 'Thursday', 'TBA', 0, 1),
(151, 'BSCE-11A', NULL, 206, '07:00:00', '11:00:00', 3, 1, 'Friday', 'TBA', 0, 1),
(152, 'BSCE-11A', NULL, 207, '09:00:00', '11:00:00', 3, 1, 'Saturday', 'TBA', 0, 1),
(153, 'BSCE-11A', NULL, 208, '12:00:00', '15:00:00', 3, 1, 'Monday', 'TBA', 0, 1),
(154, 'BSCE-11A', NULL, 209, '12:00:00', '15:00:00', 3, 1, 'Tuesday', 'TBA', 0, 1),
(155, 'BSCE-11A', NULL, 210, '12:00:00', '15:00:00', 3, 1, 'Wednesday', 'TBA', 0, 1),
(156, 'BSCE-11A', NULL, 211, '12:00:00', '15:00:00', 3, 1, 'Thursday', 'TBA', 0, 1),
(157, 'BSCE-11A', NULL, 212, '12:00:00', '15:00:00', 3, 1, 'Friday', 'TBA', 0, 1),
(158, 'BSCE-12A', NULL, 213, '07:00:00', '10:00:00', 3, 1, 'Monday', 'TBA', 0, 1),
(159, 'BSCE-12A', NULL, 214, '07:00:00', '09:00:00', 3, 1, 'Tuesday', 'TBA', 0, 1),
(160, 'BSCE-12A', NULL, 215, '07:00:00', '09:00:00', 3, 1, 'Wednesday', 'TBA', 0, 1),
(161, 'BSCE-12A', NULL, 216, '07:00:00', '10:00:00', 3, 1, 'Thursday', 'TBA', 0, 1),
(162, 'BSCE-12A', NULL, 217, '07:00:00', '11:00:00', 3, 1, 'Friday', 'TBA', 0, 1),
(163, 'BSCE-12A', NULL, 218, '09:00:00', '12:00:00', 3, 1, 'Saturday', 'TBA', 0, 1),
(164, 'BSCE-12A', NULL, 219, '12:00:00', '15:00:00', 3, 1, 'Monday', 'TBA', 0, 1),
(165, 'BSCE-12A', NULL, 220, '12:00:00', '14:00:00', 3, 1, 'Tuesday', 'TBA', 0, 1),
(166, 'BSCE-12A', NULL, 221, '12:00:00', '15:00:00', 3, 1, 'Wednesday', 'TBA', 0, 1),
(167, 'BSCE-12A', NULL, 222, '12:00:00', '14:00:00', 3, 1, 'Thursday', 'TBA', 0, 1),
(168, 'BSCE-12A', NULL, 223, '12:00:00', '14:00:00', 3, 1, 'Friday', 'TBA', 0, 1),
(169, 'BSEE-11A', NULL, 311, '07:00:00', '10:00:00', 4, 1, 'Monday', 'TBA', 0, 1),
(170, 'BSEE-11A', NULL, 312, '07:00:00', '11:00:00', 4, 1, 'Tuesday', 'TBA', 0, 1),
(171, 'BSEE-11A', NULL, 313, '07:00:00', '11:00:00', 4, 1, 'Wednesday', 'TBA', 0, 1),
(172, 'BSEE-12A', NULL, 314, '07:00:00', '10:00:00', 4, 1, 'Monday', 'TBA', 0, 1),
(173, 'BSEE-12A', NULL, 315, '08:00:00', '11:00:00', 4, 1, 'Tuesday', 'TBA', 0, 1),
(174, 'BSIT-11A', NULL, 242, '07:00:00', '10:00:00', 1, 1, 'Monday', 'TBA', 0, 1),
(175, 'BSIT-11A', NULL, 243, '08:00:00', '11:00:00', 1, 1, 'Tuesday', 'TBA', 0, 1),
(176, 'BSIT-11A', NULL, 244, '07:00:00', '10:00:00', 1, 1, 'Wednesday', 'TBA', 0, 1),
(177, 'BSIT-12A', NULL, 245, '07:00:00', '10:00:00', 1, 1, 'Monday', 'TBA', 0, 1),
(178, 'BSIT-12A', NULL, 246, '07:00:00', '11:00:00', 1, 1, 'Tuesday', 'TBA', 0, 1),
(179, 'BSIT-12A', NULL, 247, '09:00:00', '12:00:00', 1, 1, 'Wednesday', 'TBA', 0, 1),
(180, 'BSME-11A', NULL, 265, '07:00:00', '10:00:00', 6, 1, 'Monday', 'TBA', 0, 1),
(181, 'BSME-11A', NULL, 266, '07:00:00', '11:00:00', 6, 1, 'Tuesday', 'TBA', 0, 1),
(182, 'BSME-11A', NULL, 267, '08:00:00', '11:00:00', 6, 1, 'Wednesday', 'TBA', 0, 1),
(183, 'BSME-12A', NULL, 269, '07:00:00', '10:00:00', 6, 1, 'Monday', 'TBA', 0, 1),
(184, 'BSME-12A', NULL, 270, '07:00:00', '10:00:00', 6, 1, 'Tuesday', 'TBA', 0, 1);

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
(1, 'Bachelor of Science', 'Information Technology', 'College of Science', 1),
(2, 'Bachelor of Science ', 'Computer Science', 'College of Science', 1),
(3, 'Bachelor of Science', ' Civil Engineering', 'College of Engineering', 1),
(4, 'Bachelor of Science', 'Electrical Engineering', 'College of Engineering', 1),
(6, 'Bachelor of Science ', 'Mechanical Engineering', 'College of Engineering', 1),
(7, 'Bachelor of Science', 'Architecture', 'College of Architecture and Fine Arts', 1),
(8, 'Bachelor of Fine Arts', 'Painting', 'College of Architecture and Fine Arts', 1),
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
  `details` varchar(8000) NOT NULL,
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
  `schedID` int(255) DEFAULT NULL,
  PRIMARY KEY (`examID`),
  KEY `applicantSched` (`applicantID`),
  KEY `schedDetails` (`schedID`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examination_table`
--

INSERT INTO `examination_table` (`examID`, `applicantID`, `schedID`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1),
(11, 11, 1),
(12, 12, 1),
(13, 13, 1),
(14, 14, 1),
(15, 15, 1),
(16, 16, 1),
(17, 17, 1),
(18, 18, 1),
(19, 19, 1),
(20, 20, 1),
(21, 21, 1),
(22, 22, 1),
(23, 23, 6),
(24, 24, 16),
(25, 25, 1),
(26, 26, 6),
(27, 27, 16),
(28, 28, NULL),
(29, 29, 16),
(30, 30, 16),
(31, 31, 16),
(32, 32, 6),
(33, 33, 6),
(34, 34, NULL),
(35, 35, 16),
(36, 36, 16),
(37, 37, NULL),
(38, 38, 16),
(39, 39, 1),
(40, 40, 6),
(41, 41, 6),
(42, 42, 16),
(43, 43, 6),
(44, 44, NULL),
(45, 45, 6),
(46, 46, NULL),
(47, 47, 6),
(48, 48, 6),
(49, 49, 6),
(50, 50, 16);

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
  `capacity` int(255) NOT NULL,
  PRIMARY KEY (`schedID`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_schedule`
--

INSERT INTO `exam_schedule` (`schedID`, `date`, `time`, `building`, `room_no`, `floor_no`, `status`, `capacity`) VALUES
(1, '2022-02-14', '08:00:00', 'College of Science', 'CSR-001', 2, 1, 1),
(2, '2022-02-14', '08:00:00', 'College of Science', 'CSR-002', 2, 1, 25),
(3, '2022-02-14', '08:00:00', 'College of Science', 'CSR-003', 2, 1, 25),
(4, '2022-02-14', '13:00:00', 'College of Science', 'CSR-001', 2, 1, 25),
(5, '2022-02-14', '13:00:00', 'College of Science', 'CSR-002', 2, 1, 25),
(6, '2022-02-15', '08:00:00', 'College of Engineering', 'ENGR-001', 2, 1, 14),
(7, '2022-02-15', '08:00:00', 'College of Engineering', 'ENGR-002', 2, 1, 25),
(8, '2022-02-15', '08:00:00', 'College of Engineering', 'ENGR-003', 2, 1, 25),
(9, '2022-02-15', '13:00:00', 'College of Engineering', 'ENGR-001', 2, 1, 25),
(10, '2022-02-15', '13:00:00', 'College of Engineering', 'ENGR-002', 2, 1, 25),
(11, '2022-02-16', '08:00:00', 'College of Industrial Education', 'IE-001', 2, 1, 25),
(12, '2022-02-16', '08:00:00', 'College of Industrial Education', 'IE-002', 2, 1, 25),
(13, '2022-02-16', '08:00:00', 'College of Industrial Education', 'IE-003', 2, 1, 25),
(14, '2022-02-16', '13:00:00', 'College of Industrial Education', 'IE-001', 2, 1, 25),
(15, '2022-02-16', '13:00:00', 'College of Industrial Education', 'IE-002', 2, 1, 25),
(16, '2022-02-17', '08:00:00', 'College of Architecture and Fine Arts', 'CAFA-001', 2, 1, 15),
(17, '2022-02-17', '08:00:00', 'College of Architecture and Fine Arts', 'CAFA-002', 2, 1, 25),
(18, '2022-02-17', '08:00:00', 'College of Architecture and Fine Arts', 'CAFA-003', 2, 1, 25),
(19, '2022-02-17', '13:00:00', 'College of Architecture and Fine Arts', 'CAFA-001', 2, 1, 25),
(20, '2022-02-17', '13:00:00', 'College of Architecture and Fine Arts', 'CAFA-002', 2, 1, 25),
(21, '2022-02-18', '08:00:00', 'College of Liberal Arts', 'CLA-001', 2, 1, 25),
(22, '2022-02-18', '08:00:00', 'College of Liberal Arts', 'CLA-002', 2, 1, 25),
(23, '2022-02-18', '08:00:00', 'College of Liberal Arts', 'CLA-003', 2, 1, 25),
(24, '2022-02-18', '13:00:00', 'College of Liberal Arts', 'CLA-001', 2, 1, 25),
(25, '2022-02-18', '13:00:00', 'College of Liberal Arts', 'CLA-002', 2, 1, 25);

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
  `yearlevelClass` int(11) NOT NULL,
  `schoolyear` varchar(255) NOT NULL,
  PRIMARY KEY (`sectionID`),
  KEY `sectionCourse` (`courseID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_table`
--

INSERT INTO `section_table` (`sectionID`, `sectionName`, `class_code`, `courseID`, `capacity`, `studCount`, `yearlevelClass`, `schoolyear`) VALUES
(2, 'BSIT-1A', 'BSIT-11A', 1, 25, 2, 1, '2022-2023'),
(3, 'BSCE-1A', 'BSCE-11A', 3, 25, 2, 1, '2022-2023'),
(4, 'BSEE-1A', 'BSEE-11A', 4, 25, 3, 1, '2022-2023'),
(5, 'BSME-1A', 'BSME-11A', 6, 25, 3, 1, '2022-2023'),
(6, 'BSA-1A', 'BSA-11A', 7, 25, 4, 1, '2022-2023'),
(7, 'BFA-1A', 'BFA-11A', 8, 25, 5, 1, '2022-2023'),
(8, 'BETCET-1A', 'BETCET-11A', 9, 25, 4, 1, '2022-2023'),
(9, 'BSCS-1A', 'BSCS-11A', 2, 25, 7, 1, '2022-2023');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_accounts`
--

INSERT INTO `student_accounts` (`studentID`, `applicantID`, `studentNumber`, `username`, `password`, `sectionID`, `yearlevel`, `status`, `creatorID`) VALUES
(1, 1, 'TUPM-22-7671', 'TUPM-22-7671', '$2y$10$D7Zq6x2eob3RfUKqkUF5qu5I7yXA4VdWIKp.kTUmRAhGqDAp64Jx6', 9, 1, 1, 1),
(2, 2, 'TUPM-22-1421', 'TUPM-22-1421', '$2y$10$Gu.hHNrwPII4Wi.jdvAzRu/3MetyLbQQ2qzQj6JeIinHmam.t/MG6', 9, 1, 1, 1),
(3, 3, 'TUPM-22-5773', 'TUPM-22-5773', '$2y$10$ffOOtZMHbt7ZoQziZvVxheBQrDnT9.Zs3xIQHJhgyLhUMIV2/F8O.', 9, 1, 1, 1),
(4, 4, 'TUPM-22-1710', 'TUPM-22-1710', '$2y$10$S.JiKxSZtPdUliCiTyedwOKVtyr/1fAbCgusOke8URAXJ7V92v1TS', 9, 1, 1, 1),
(5, 5, 'TUPM-22-2680', 'TUPM-22-2680', '$2y$10$5EbBxm7th4PXQcT83UwfOeFZVkvAgmU6o9R7nIgMT71DzzBq9K6cy', 9, 1, 1, 1),
(6, 6, 'TUPM-22-6215', 'TUPM-22-6215', '$2y$10$Kc2yKPRr3L9eKT9aWMcEnewSPnjYIIONOsbF9..wC2DjDhBrZE46y', 9, 1, 1, 1),
(7, 7, 'TUPM-22-1275', 'TUPM-22-1275', '$2y$10$SwVwYZQKWSYF2z9lkgLYheQKXmZEp/5coiPEnCfk9Bofjz34oZgZ2', 9, 1, 1, 1);

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
-- Table structure for table `student_grades`
--

DROP TABLE IF EXISTS `student_grades`;
CREATE TABLE IF NOT EXISTS `student_grades` (
  `studentGradesID` int(255) NOT NULL AUTO_INCREMENT,
  `studentID` int(255) NOT NULL,
  `teacherID` int(255) DEFAULT NULL,
  `subjectID` int(255) NOT NULL,
  `schoolyear` varchar(255) NOT NULL,
  `class_code` varchar(255) NOT NULL,
  `grade` int(255) NOT NULL,
  `equivalent` float NOT NULL,
  PRIMARY KEY (`studentGradesID`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_grades`
--

INSERT INTO `student_grades` (`studentGradesID`, `studentID`, `teacherID`, `subjectID`, `schoolyear`, `class_code`, `grade`, `equivalent`) VALUES
(1, 1, 1, 1, '2022-2023', 'BSCS-11A', 0, 0),
(2, 1, 1, 2, '2022-2023', 'BSCS-11A', 0, 0),
(3, 1, 4, 3, '2022-2023', 'BSCS-11A', 0, 0),
(4, 1, 4, 4, '2022-2023', 'BSCS-11A', 0, 0),
(5, 1, 13, 5, '2022-2023', 'BSCS-11A', 0, 0),
(6, 1, 13, 6, '2022-2023', 'BSCS-11A', 0, 0),
(7, 1, 22, 7, '2022-2023', 'BSCS-11A', 0, 0),
(8, 1, 30, 8, '2022-2023', 'BSCS-11A', 0, 0),
(9, 1, 19, 9, '2022-2023', 'BSCS-11A', 0, 0),
(10, 1, 14, 10, '2022-2023', 'BSCS-11A', 0, 0),
(11, 1, 5, 11, '2022-2023', 'BSCS-11A', 0, 0),
(12, 2, 1, 1, '2022-2023', 'BSCS-11A', 0, 0),
(13, 2, 1, 2, '2022-2023', 'BSCS-11A', 0, 0),
(14, 2, 4, 3, '2022-2023', 'BSCS-11A', 0, 0),
(15, 2, 4, 4, '2022-2023', 'BSCS-11A', 0, 0),
(16, 2, 13, 5, '2022-2023', 'BSCS-11A', 0, 0),
(17, 2, 13, 6, '2022-2023', 'BSCS-11A', 0, 0),
(18, 2, 22, 7, '2022-2023', 'BSCS-11A', 0, 0),
(19, 2, 30, 8, '2022-2023', 'BSCS-11A', 0, 0),
(20, 2, 19, 9, '2022-2023', 'BSCS-11A', 0, 0),
(21, 2, 14, 10, '2022-2023', 'BSCS-11A', 0, 0),
(22, 2, 5, 11, '2022-2023', 'BSCS-11A', 0, 0),
(23, 3, 1, 1, '2022-2023', 'BSCS-11A', 0, 0),
(24, 3, 1, 2, '2022-2023', 'BSCS-11A', 0, 0),
(25, 3, 4, 3, '2022-2023', 'BSCS-11A', 0, 0),
(26, 3, 4, 4, '2022-2023', 'BSCS-11A', 0, 0),
(27, 3, 13, 5, '2022-2023', 'BSCS-11A', 0, 0),
(28, 3, 13, 6, '2022-2023', 'BSCS-11A', 0, 0),
(29, 3, 22, 7, '2022-2023', 'BSCS-11A', 0, 0),
(30, 3, 30, 8, '2022-2023', 'BSCS-11A', 0, 0),
(31, 3, 19, 9, '2022-2023', 'BSCS-11A', 0, 0),
(32, 3, 14, 10, '2022-2023', 'BSCS-11A', 0, 0),
(33, 3, 5, 11, '2022-2023', 'BSCS-11A', 0, 0),
(34, 4, 1, 1, '2022-2023', 'BSCS-11A', 0, 0),
(35, 4, 1, 2, '2022-2023', 'BSCS-11A', 0, 0),
(36, 4, 4, 3, '2022-2023', 'BSCS-11A', 0, 0),
(37, 4, 4, 4, '2022-2023', 'BSCS-11A', 0, 0),
(38, 4, 13, 5, '2022-2023', 'BSCS-11A', 0, 0),
(39, 4, 13, 6, '2022-2023', 'BSCS-11A', 0, 0),
(40, 4, 22, 7, '2022-2023', 'BSCS-11A', 0, 0),
(41, 4, 30, 8, '2022-2023', 'BSCS-11A', 0, 0),
(42, 4, 19, 9, '2022-2023', 'BSCS-11A', 0, 0),
(43, 4, 14, 10, '2022-2023', 'BSCS-11A', 0, 0),
(44, 4, 5, 11, '2022-2023', 'BSCS-11A', 0, 0),
(45, 5, 1, 1, '2022-2023', 'BSCS-11A', 0, 0),
(46, 5, 1, 2, '2022-2023', 'BSCS-11A', 0, 0),
(47, 5, 4, 3, '2022-2023', 'BSCS-11A', 0, 0),
(48, 5, 4, 4, '2022-2023', 'BSCS-11A', 0, 0),
(49, 5, 13, 5, '2022-2023', 'BSCS-11A', 0, 0),
(50, 5, 13, 6, '2022-2023', 'BSCS-11A', 0, 0),
(51, 5, 22, 7, '2022-2023', 'BSCS-11A', 0, 0),
(52, 5, 30, 8, '2022-2023', 'BSCS-11A', 0, 0),
(53, 5, 19, 9, '2022-2023', 'BSCS-11A', 0, 0),
(54, 5, 14, 10, '2022-2023', 'BSCS-11A', 0, 0),
(55, 5, 5, 11, '2022-2023', 'BSCS-11A', 0, 0),
(56, 6, 1, 1, '2022-2023', 'BSCS-11A', 0, 0),
(57, 6, 1, 2, '2022-2023', 'BSCS-11A', 0, 0),
(58, 6, 4, 3, '2022-2023', 'BSCS-11A', 0, 0),
(59, 6, 4, 4, '2022-2023', 'BSCS-11A', 0, 0),
(60, 6, 13, 5, '2022-2023', 'BSCS-11A', 0, 0),
(61, 6, 13, 6, '2022-2023', 'BSCS-11A', 0, 0),
(62, 6, 22, 7, '2022-2023', 'BSCS-11A', 0, 0),
(63, 6, 30, 8, '2022-2023', 'BSCS-11A', 0, 0),
(64, 6, 19, 9, '2022-2023', 'BSCS-11A', 0, 0),
(65, 6, 14, 10, '2022-2023', 'BSCS-11A', 0, 0),
(66, 6, 5, 11, '2022-2023', 'BSCS-11A', 0, 0),
(67, 7, 1, 1, '2022-2023', 'BSCS-11A', 0, 0),
(68, 7, 1, 2, '2022-2023', 'BSCS-11A', 0, 0),
(69, 7, 4, 3, '2022-2023', 'BSCS-11A', 0, 0),
(70, 7, 4, 4, '2022-2023', 'BSCS-11A', 0, 0),
(71, 7, 13, 5, '2022-2023', 'BSCS-11A', 0, 0),
(72, 7, 13, 6, '2022-2023', 'BSCS-11A', 0, 0),
(73, 7, 22, 7, '2022-2023', 'BSCS-11A', 0, 0),
(74, 7, 30, 8, '2022-2023', 'BSCS-11A', 0, 0),
(75, 7, 19, 9, '2022-2023', 'BSCS-11A', 0, 0),
(76, 7, 14, 10, '2022-2023', 'BSCS-11A', 0, 0),
(77, 7, 5, 11, '2022-2023', 'BSCS-11A', 0, 0);

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
(1, 'PROF-TUPM-22-7407', 'PROF-TUPM-22-7407', '$2y$10$9jBap6qQCu8srMnknqYSguAyZvW2007MBZvOt4SG21jmN7IbGQdiC', 'Lauran', 'Scatton', 'Tovmasyan', '', '+63 895 256 9006', 'tovmasyan@gmail.com', 'College of Science', 'Computer', 1, 1),
(2, 'PROF-TUPM-22-2767', 'PROF-TUPM-22-2767', '$2y$10$BiQ3SM.HjwRVe5o6u3V7zumT34lzeuvOQipY4kWmEObCHHmsYiByi', 'Aaron', 'Perra', 'Kloska', '', '+63 906 203 5209', 'kloska@gmail.com', 'College of Architecture and Fine Arts', 'Fine Arts', 1, 1),
(3, 'PROF-TUPM-22-6883', 'PROF-TUPM-22-6883', '$2y$10$f17a3jJ7mJu3BKZ5KnTFw.EvD6liBIP8bmyQUfNefWhKN9CQ.ihq.', 'Francene', 'Jelsma', 'Skursky', '', '+63 909 597 1493', 'skursky@gmail.com', 'College of Science', 'Mathematics', 1, 1),
(4, 'PROF-TUPM-22-4107', 'PROF-TUPM-22-4107', '$2y$10$gpXVTk.39e.byHoAMgQMN.Q2i.ehBNLRP6RoGViY1V4CQinZ/kscS', 'Zena', 'Brickhouse', 'Daria', '', '+63 817 045 7645', 'daria@gmail.com', 'College of Science', 'Chemistry', 1, 1),
(5, 'PROF-TUPM-22-5888', 'PROF-TUPM-22-5888', '$2y$10$qBsEkFZmGDTMy2IhZRtoQ.P72eYaoCncPwxCRsAbFd1xh1Tq3jfdC', 'Brigette', 'Bennett', 'Breckenstein', '', '+63 918 811 4395', 'breckenstein@gmail.com', 'College of Liberal Arts', 'Social Science', 1, 1),
(6, 'PROF-TUPM-22-9478', 'PROF-TUPM-22-9478', '$2y$10$pf/mrBTVFBexu1qTpCnsIuz4WEY98DR74ZbHqc6YFREU9U0zdJxy.', 'Jeniffer', 'Ebershoff', 'Jezek', '', '+63 925 670 6802', 'jezek@gmail.com', 'College of Engineering', 'Electronics Engineering', 1, 1),
(7, 'PROF-TUPM-22-8973', 'PROF-TUPM-22-8973', '$2y$10$jqqWYLMCEwWKSHSE7MIVTOYUI2/wSWqrFgxVZIpcDtNKqvPS97wju', 'Selma', 'Huro', 'Elm', '', '+63 897 657 5261', 'elm@gmail.com', 'College of Engineering', 'Electrical Engineering', 1, 1),
(8, 'PROF-TUPM-22-3010', 'PROF-TUPM-22-3010', '$2y$10$VNwLjL6sKPrdz8XFup0bl.LhCqgpHaOg0bq1S5eM0g9CfnqHWchUO', 'Elenora', 'Kazeck', 'Handler', '', '+63 896 662 9288', 'handler@gmail.com', 'College of Industrial Technology', 'Basic Industrial Technology', 1, 1),
(9, 'PROF-TUPM-22-5616', 'PROF-TUPM-22-5616', '$2y$10$.8E.D1k80Yg6kzozZBEdHeBuOoHFsZllUrxEyG9GbwR1TbfppsUK.', 'Nadine', 'Bortignon', 'Okojie', '', '+63 909 876 6860', 'okojie@gmail.com', 'College of Engineering', 'Mechanical Engineering', 1, 1),
(10, 'PROF-TUPM-22-4079', 'PROF-TUPM-22-4079', '$2y$10$BwAXi5ai6EoD3rRhRcgzzuoGGNchxzIBBanJkYLRBuwiO5Mt9fP2.', 'Kristin', 'Baley', 'Shiflet', '', '+63 896 817 7973', 'shiflet@gmail.com', 'College of Engineering', 'Electrical Engineering', 1, 1),
(11, 'PROF-TUPM-22-7233', 'PROF-TUPM-22-7233', '$2y$10$PJ/Qm7gwOR0RQh709qR4hOK81Ph1XrZuJ1LVmwpdvtGqUhtkpZDyu', 'Melinda', 'Pawell', 'Fellhauer', '', '+63 895 271 2193', 'fellhauer@gmail.com', 'College of Industrial Technology', 'Graphic Arts and Printing Technology', 1, 1),
(12, 'PROF-TUPM-22-5992', 'PROF-TUPM-22-5992', '$2y$10$XmwyM4b9GI0s1yvyW20PBOzfXMz5WdY0Vocse4LZ42rSs.C1VmgOG', 'Kirby', 'Arellanes', 'Litherland', '', '+63 898 617 3446', 'litherland@gmail.com', 'College of Liberal Arts', 'Languages', 1, 1),
(13, 'PROF-TUPM-22-1433', 'PROF-TUPM-22-1433', '$2y$10$rMPUGpKOE3YCaDiuZObOC.BPfCexf.rI21CxE83sICIm9XfnwtqW6', 'Kent', 'Servantes', 'Ivans', '', '+63 971 041 4903', 'ivans@gmail.com', 'College of Science', 'Physics', 1, 1),
(14, 'PROF-TUPM-22-2811', 'PROF-TUPM-22-2811', '$2y$10$ZNtRJEJO.itlMLezGtDQOuqjDPZM2RSW81cBAYfilTNksGBw/hcuS', 'Dan', 'Fajen', 'Platz', '', '+63 948 241 1072', 'platz@gmail.com', 'College of Liberal Arts', 'Social Science', 1, 1),
(15, 'PROF-TUPM-22-9758', 'PROF-TUPM-22-9758', '$2y$10$swfAPAy.FCU50OHwEbsTJOSWBhD2tgjBYytpgjT.q6pT.O6J1uhsi', 'Millie', 'Eilers', 'Pirkl', '', '+63 992 361 6844', 'pirkl@gmail.com', 'College of Liberal Arts', 'Physical Education', 1, 1),
(16, 'PROF-TUPM-22-1949', 'PROF-TUPM-22-1949', '$2y$10$eAVgHCSfyM3LZHsYX3pFye5WCQFa6yKRYXqb8CuTN5qgYoz3lepZm', 'Moira', 'Phinazee', 'Qadir', '', '+63 918 980 1415', 'qadir@gmail.com', 'College of Science', 'Mathematics', 1, 1),
(17, 'PROF-TUPM-22-9346', 'PROF-TUPM-22-9346', '$2y$10$9e3UA7xkgQjpSGy9n6e7z.Al4cG8hxpdDdOU8iL9e5xtOjzbtViTS', 'Reta', 'Pascucci', 'Qazi', '', '+63 910 451 3195', 'qazi@gmail.com', 'College of Industrial Education', 'Professional Industrial Education', 1, 1),
(18, 'PROF-TUPM-22-9402', 'PROF-TUPM-22-9402', '$2y$10$BFvFjDCRMED.uwi9/GbOlOTYq3KfM8xWN6FQfixlvTgY1UPxUv9J6', 'Brittney', 'Leicht', 'Lolley', '', '+63 953 390 2698', 'lolley@gmail.com', 'College of Liberal Arts', 'Social Science', 1, 1),
(19, 'PROF-TUPM-22-9592', 'PROF-TUPM-22-9592', '$2y$10$eU7orK7O0K5oy/va7qYtVOIUvrEmSE1HokqK86IeY1fa0T4ibNL9K', 'Leandro', 'Bai', 'Bolka', 'Jr.', '+63 905 569 3081', 'bolka@gmail.com', 'College of Science', 'Mathematics', 1, 1),
(20, 'PROF-TUPM-22-6854', 'PROF-TUPM-22-6854', '$2y$10$uo24MHy7t.4Giz7yvLvN5eme0WaKvw06yOG9EjMOQMuL3eG90K3zS', 'Edison', 'Popper', 'Sumera', '', '+63 895 542 9954', 'sumera@gmail.com', 'College of Industrial Education', 'Home Economics', 1, 1),
(21, 'PROF-TUPM-22-8094', 'PROF-TUPM-22-8094', '$2y$10$HhzHUzkhzKaHAmtrWP6/4eDb8YRe.x8xiyUKZfTNZW8kx3LmAuKiC', 'Breana', 'Polek', 'Cassi', '', '+63 817 777 2637', 'cassi@gmail.com', 'College of Architecture and Fine Arts', 'Architecture', 1, 1),
(22, 'PROF-TUPM-22-7143', 'PROF-TUPM-22-7143', '$2y$10$R61YyGHVEsnnhXN/jviwIOHO9/16ewPcR953ZKIz3XXYM59ED1eHq', 'Jarvis', 'Magnotta', 'Nicols', '', '+63 817 831 4309', 'nicols@gmail.com', 'College of Science', 'Computer', 1, 1),
(23, 'PROF-TUPM-22-7938', 'PROF-TUPM-22-7938', '$2y$10$GoflTmsq5YDZALB1V6EyeOvzW3FbHz.k8/9Yr/GTJKGuRSxO1FfwK', 'Felicitas', 'Druck', 'Orlinski', '', '+63 939 154 0014', 'orlinski@gmail.com', 'College of Industrial Education', 'Student Teaching', 1, 1),
(24, 'PROF-TUPM-22-9503', 'PROF-TUPM-22-9503', '$2y$10$D2dPUTZi3./M4YRi5coFF.baO/h9wpjAHSQ8ugl5TuPxZueKFhONm', 'Geraldine', 'Kunich', 'Neisius', '', '+63 896 623 6021', 'neisius@gmail.com', 'College of Industrial Technology', 'Power Plant Engineering Technology', 1, 1),
(25, 'PROF-TUPM-22-5349', 'PROF-TUPM-22-5349', '$2y$10$7O9BXhLzofrBykgLiuK7uu4o1aYQnVdrsHv7ulm.ahEuwg.tXI0wG', 'Alfred', 'Buchman', 'Pacleb', '', '+63 917 138 0136', 'pacleb@gmail.com', 'College of Liberal Arts', 'Social Science', 1, 1),
(26, 'PROF-TUPM-22-3193', 'PROF-TUPM-22-3193', '$2y$10$K0YkSVIm8S5B6awfQ62cXeDqTAowIFYDotHB5/jPzk14Tdt2/lIuK', 'Leatha', 'Sionesini', 'Block', '', '+63 905 683 3750', 'block@gmail.com', 'College of Science', 'Physics', 1, 1),
(27, 'PROF-TUPM-22-1065', 'PROF-TUPM-22-1065', '$2y$10$TXHP4BBzSt3WIYn1YKGwLe6g3yldpaKDmaIA4ZMQCVLLqY9F3dsHq', 'Jacquelyne', 'Driesenga', 'Rosso', '', '+63 813 219 5077', 'rosso@gmail.com', 'College of Science', 'Chemistry', 1, 1),
(28, 'PROF-TUPM-22-4879', 'PROF-TUPM-22-4879', '$2y$10$mv0EbvwY9hmNSpV8Cc899.NGSATkLzkIvmJDJkHsPd9CpycPCYkG6', 'Jonelle', 'Vonderahe', 'Epps', '', '+63 895 473 1230', 'epps@gmail.com', 'College of Engineering', 'Electronics Engineering', 1, 1),
(29, 'PROF-TUPM-22-2014', 'PROF-TUPM-22-2014', '$2y$10$hoUIY0KlJZYHQ49tZQ/7y.kYltTfn.622vyfRJq/ZB3YGvl8xh2ce', 'Rosamond', 'Maestri', 'Amlin', '', '+63 983 391 5528', 'amlin@gmail.com', 'College of Industrial Technology', 'Mechanical Engineering Technology', 1, 1),
(30, 'PROF-TUPM-22-2994', 'PROF-TUPM-22-2994', '$2y$10$y8nu0HYm794TGx5ZfHV6yudg5hK0WGttkP1PTQU9/neGT.q.euggS', 'Johnson', 'Susmilch', 'Mcenery', 'II', '+63 911 932 0882', 'mcenery@gmail.com', 'College of Liberal Arts', 'Physical Education', 1, 1);

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
  ADD CONSTRAINT `applicantSched` FOREIGN KEY (`applicantID`) REFERENCES `applicant_accounts` (`applicantID`),
  ADD CONSTRAINT `schedDetails` FOREIGN KEY (`schedID`) REFERENCES `exam_schedule` (`schedID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
