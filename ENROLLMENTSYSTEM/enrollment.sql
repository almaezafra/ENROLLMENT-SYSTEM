-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2016 at 03:22 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `enrollment`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `Department_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Dept_name` varchar(30) NOT NULL,
  `Dept_head` varchar(30) NOT NULL,
  `School_yr_ID` int(11) NOT NULL,
  PRIMARY KEY (`Department_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Department_ID`, `Dept_name`, `Dept_head`, `School_yr_ID`) VALUES
(1, 'English', 'Adelfa Jackson', 2),
(2, 'Mathematics', 'Ramon Gamoso', 2),
(3, 'MAPEH', 'Josefina Gacula', 2),
(4, 'Science', 'Fernando Enriquez', 2),
(5, 'Filipino', 'Paloma Mendez', 2);

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE IF NOT EXISTS `enrollment` (
  `Enrollment_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Student_ID` int(11) NOT NULL,
  `Enr_date` int(11) NOT NULL,
  `reg_staff` int(11) NOT NULL,
  PRIMARY KEY (`Enrollment_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE IF NOT EXISTS `fees` (
  `Fee_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Fee_desc` text NOT NULL,
  `Amount` float NOT NULL,
  PRIMARY KEY (`Fee_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`Fee_ID`, `Fee_desc`, `Amount`) VALUES
(1, 'This Tuition fee is for Nursery student', 36354.3),
(2, 'This Tuition fee is for Pre-school student', 36629.3),
(3, 'This Tuition fee is for Kinder student', 36629.3),
(4, 'This Tuition fee is for Grade 1 student', 40184.3),
(5, 'This Tuition fee is for Grade 2 student', 39984.3),
(6, 'This Tuition fee is for Grade 3 student', 39237.3);

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE IF NOT EXISTS `grade` (
  `Grade_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Student_ID` int(11) NOT NULL,
  `School_yr_ID` int(11) NOT NULL,
  `first_qtr` varchar(4) NOT NULL,
  `second_qtr` varchar(4) NOT NULL,
  `third_qtr` varchar(4) NOT NULL,
  `fourth_qtr` varchar(4) NOT NULL,
  `final_ave` float NOT NULL,
  `grade_status` varchar(10) NOT NULL,
  PRIMARY KEY (`Grade_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=503 ;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`Grade_ID`, `Student_ID`, `School_yr_ID`, `first_qtr`, `second_qtr`, `third_qtr`, `fourth_qtr`, `final_ave`, `grade_status`) VALUES
(501, 16027073, 2, '85', '87', '89', '90', 0, ''),
(502, 16027074, 2, '82', '85', '89', '92', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `grade_lvl`
--

CREATE TABLE IF NOT EXISTS `grade_lvl` (
  `Grade_lvl_ID` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(10) NOT NULL,
  PRIMARY KEY (`Grade_lvl_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `grade_lvl`
--

INSERT INTO `grade_lvl` (`Grade_lvl_ID`, `level`) VALUES
(1, 'nursery'),
(2, 'pre-school'),
(3, 'kinder'),
(4, 'Grade 1'),
(5, 'Grade 2'),
(6, 'Grade 3'),
(7, 'Grade 4'),
(8, 'Grade 5'),
(9, 'Grade 6'),
(10, 'Grade 7'),
(11, 'Grade 8'),
(12, 'Grade 9'),
(13, 'Grade 10'),
(14, 'Grade 11'),
(15, 'Grade 12');

-- --------------------------------------------------------

--
-- Table structure for table `lvl-subj`
--

CREATE TABLE IF NOT EXISTS `lvl-subj` (
  `Grade_lvl_ID` int(11) NOT NULL,
  `Subject_code` varchar(6) NOT NULL,
  PRIMARY KEY (`Grade_lvl_ID`,`Subject_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lvl-subj`
--

INSERT INTO `lvl-subj` (`Grade_lvl_ID`, `Subject_code`) VALUES
(1, 'EP113'),
(1, 'GM152'),
(4, 'ENG114'),
(4, 'ENG115'),
(4, 'GM152'),
(6, 'CS112'),
(6, 'FIL125'),
(6, 'GM152');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `Payment_ID` int(8) NOT NULL,
  `Student_ID` int(11) NOT NULL,
  `or_num` int(8) NOT NULL,
  `or_date` date NOT NULL,
  `amount` float NOT NULL,
  `balance` float NOT NULL,
  `pay_type` varchar(10) NOT NULL,
  `cashier_name` varchar(30) NOT NULL,
  `Fee_ID` int(11) NOT NULL,
  `School_yr_ID` int(11) NOT NULL,
  PRIMARY KEY (`Payment_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `Schedule_ID` int(11) NOT NULL AUTO_INCREMENT,
  `start_class` time NOT NULL,
  `end_class` time NOT NULL,
  `School_yr_ID` int(11) NOT NULL,
  `Status_ID` int(11) NOT NULL,
  PRIMARY KEY (`Schedule_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`Schedule_ID`, `start_class`, `end_class`, `School_yr_ID`, `Status_ID`) VALUES
(1, '07:00:00', '12:00:00', 2, 1),
(2, '12:00:00', '06:00:00', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_year`
--

CREATE TABLE IF NOT EXISTS `school_year` (
  `School_yr_ID` int(11) NOT NULL AUTO_INCREMENT,
  `School_yr` varchar(9) NOT NULL,
  PRIMARY KEY (`School_yr_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `school_year`
--

INSERT INTO `school_year` (`School_yr_ID`, `School_yr`) VALUES
(1, '2015-2016'),
(2, '2016-2017');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `Section_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Student_ID` int(11) NOT NULL,
  `School_yr_ID` int(11) NOT NULL,
  `Grade_lvl_ID` int(11) NOT NULL,
  `sec_name` varchar(30) NOT NULL,
  PRIMARY KEY (`Section_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=603 ;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`Section_ID`, `Student_ID`, `School_yr_ID`, `Grade_lvl_ID`, `sec_name`) VALUES
(601, 16027001, 2, 6, 'diamond'),
(602, 16027074, 2, 6, 'diamond');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `Status_ID` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`Status_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`Status_ID`, `status`) VALUES
(1, 'active'),
(2, 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Student_ID` varchar(11) NOT NULL,
  `Stud_fname` varchar(30) NOT NULL,
  `Stud_lname` varchar(30) NOT NULL,
  `Stud_mname` varchar(30) NOT NULL,
  `Stud_bday` date NOT NULL,
  `Stud_gender` char(6) NOT NULL,
  `Stud_address` varchar(30) NOT NULL,
  `Stud_mother` varchar(30) NOT NULL,
  `Mother_work` varchar(30) NOT NULL,
  `Mother_contact` bigint(11) NOT NULL,
  `Stud_father` varchar(30) NOT NULL,
  `Father_work` varchar(30) NOT NULL,
  `Father_contact` bigint(11) NOT NULL,
  `Stud_guardian` varchar(30) NOT NULL,
  `Guardian_work` varchar(30) NOT NULL,
  `Guardian_contact` bigint(11) NOT NULL,
  `admit_date` date NOT NULL,
  `Schedule_ID` int(5) NOT NULL,
  `Section_ID` int(11) NOT NULL,
  `Grade_lvl_ID` int(5) NOT NULL,
  `Grade_ID` int(11) NOT NULL,
  `Payment_ID` int(7) NOT NULL,
  `Enrollment_ID` int(5) NOT NULL,
  `password` varchar(30) NOT NULL,
  `School_yr_ID` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `Student_ID`, `Stud_fname`, `Stud_lname`, `Stud_mname`, `Stud_bday`, `Stud_gender`, `Stud_address`, `Stud_mother`, `Mother_work`, `Mother_contact`, `Stud_father`, `Father_work`, `Father_contact`, `Stud_guardian`, `Guardian_work`, `Guardian_contact`, `admit_date`, `Schedule_ID`, `Section_ID`, `Grade_lvl_ID`, `Grade_ID`, `Payment_ID`, `Enrollment_ID`, `password`, `School_yr_ID`) VALUES
(6, '', 'bandong', 'adsad', 'dasdsa', '2016-11-18', 'Male', 'dsadasd', 'Zafra amora aldrich', 'qa', 92323131321, 'bANDONG castro ACE', 'se', 96969696969, 'bANDONG castro ACE', 'se', 96969696969, '0000-00-00', 0, 0, 0, 0, 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `Subject_code` varchar(6) NOT NULL,
  `Subj_units` float NOT NULL,
  `Subj_desc` varchar(50) NOT NULL,
  PRIMARY KEY (`Subject_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`Subject_code`, `Subj_units`, `Subj_desc`) VALUES
('AP123', 1, 'Araling Panlipunan'),
('CS112', 0.5, 'Computer Subject'),
('CT102', 0.5, 'Scouting/CAT'),
('ENG112', 1.5, 'English'),
('ENG113', 0.5, 'Languange'),
('ENG114', 1, 'Writing'),
('ENG115', 0.5, 'Reading'),
('EP113', 0.5, 'Edukasyon sa Pagpapakatao'),
('FIL125', 1.5, 'Filipino'),
('GM152', 1, 'Conduct');

-- --------------------------------------------------------

--
-- Table structure for table `teach-sec`
--

CREATE TABLE IF NOT EXISTS `teach-sec` (
  `Class_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Teacher_ID` int(11) NOT NULL,
  `Section_ID` int(11) NOT NULL,
  PRIMARY KEY (`Class_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `teach-subj`
--

CREATE TABLE IF NOT EXISTS `teach-subj` (
  `Teacher_ID` int(11) NOT NULL,
  `Subject_code` varchar(6) NOT NULL,
  `School_yr_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach-subj`
--

INSERT INTO `teach-subj` (`Teacher_ID`, `Subject_code`, `School_yr_ID`) VALUES
(1, 'ENG112', 2),
(1, 'ENG113', 2),
(1, 'ENG114', 2),
(1, 'ENG115', 2);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `Teacher_ID` int(11) NOT NULL,
  `Teach_fname` varchar(30) NOT NULL,
  `Teach_lname` varchar(30) NOT NULL,
  `Teach_mname` varchar(30) NOT NULL,
  `Teach_gender` varchar(7) NOT NULL,
  `Teach_bday` date NOT NULL,
  `Teach_contact` bigint(11) NOT NULL,
  `Teach_email` varchar(30) NOT NULL,
  `Teach_address` varchar(30) NOT NULL,
  `Teach_ctznshp` varchar(15) NOT NULL,
  `Teach_religion` varchar(15) NOT NULL,
  `Section_ID` int(11) NOT NULL,
  `Subject_ID` int(11) NOT NULL,
  `Schedule_ID` int(5) NOT NULL,
  `Department_ID` int(5) NOT NULL,
  `Teach_password` int(30) NOT NULL,
  `official_date` date NOT NULL,
  PRIMARY KEY (`Teacher_ID`),
  UNIQUE KEY `Section_ID` (`Section_ID`,`Subject_ID`),
  UNIQUE KEY `Schedule_ID` (`Schedule_ID`),
  UNIQUE KEY `Department_ID` (`Department_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `User_ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `Status_ID` int(11) NOT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `user_type`, `username`, `password`, `Status_ID`) VALUES
(1, 'admin', 'admin', 'admin', 1),
(2, 'cashier', 'cashier01', 'cashier01', 1),
(3, 'registrar', 'registrar01', 'registrar01', 1),
(4, 'admission', 'admission01', 'admission01', 1),
(5, 'enlistment offocer', 'enlist01', 'enlist01', 1),
(6, 'assessment officcer', 'assess01', 'assess01', 1),
(7, 'principal', 'principal', 'principal', 1),
(8, 'teacher', 'teacher01', 'teacher01', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
