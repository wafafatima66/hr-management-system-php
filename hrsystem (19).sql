-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2021 at 10:17 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_emp`
--

CREATE TABLE `add_emp` (
  `emp_id` int(11) NOT NULL,
  `emp_last_name` varchar(45) DEFAULT NULL,
  `emp_first_name` varchar(45) DEFAULT NULL,
  `emp_middle_name` varchar(45) DEFAULT NULL,
  `emp_ext` varchar(45) DEFAULT NULL,
  `emp_status` varchar(45) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `office_assign` varchar(20) DEFAULT NULL,
  `emp_image` varchar(100) NOT NULL,
  `office_dept` varchar(100) NOT NULL,
  `emp_salary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_emp`
--

INSERT INTO `add_emp` (`emp_id`, `emp_last_name`, `emp_first_name`, `emp_middle_name`, `emp_ext`, `emp_status`, `from_date`, `to_date`, `office_assign`, `emp_image`, `office_dept`, `emp_salary`) VALUES
(1, 'wilton', 'jaskon', '', '', 'permanent', '0000-00-00', '0000-00-00', 'Programmer', 'download.jpg', 'it', ''),
(2, 'lilsi', 'sarah', '', '', 'contractual', '0000-00-00', '0000-00-00', 'manager', '', 'It', '12000'),
(3, 'kiol', 'sara', 'vgt', '', 'contractual', '0000-00-00', '0000-00-00', 'manager', '', 'storage', ''),
(4, 'tfg', 'oksis', 'cdf', '', 'contractual', '0000-00-00', '0000-00-00', 'Programmer', '', 'civil', '12000');

-- --------------------------------------------------------

--
-- Table structure for table `civil_service`
--

CREATE TABLE `civil_service` (
  `type_of` varchar(50) DEFAULT NULL,
  `name_of_exam` varchar(50) DEFAULT NULL,
  `rating` int(10) DEFAULT NULL,
  `exam_date` date DEFAULT NULL,
  `exam_place` varchar(50) DEFAULT NULL,
  `licence_no` int(50) DEFAULT NULL,
  `licence_val` date DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `sno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `civil_service`
--

INSERT INTO `civil_service` (`type_of`, `name_of_exam`, `rating`, `exam_date`, `exam_place`, `licence_no`, `licence_val`, `emp_id`, `sno`) VALUES
(' ', 'CIVIL SERVICE PROFESSIONAL', 0, '0000-00-00', 'MOUNTAIN PROVINCE STATE POLYTECHNIC COLLEGE', 0, '0000-00-00', 1, 1),
(' ', 'gihhh', 0, '0000-00-00', '', 0, '0000-00-00', 1, 2),
(' ', 'fgfgfgfg', 0, '0000-00-00', '', 0, '0000-00-00', 1, 3),
(' ', 'CIVIL SERVICE PROFESSIONAL', 0, '0000-00-00', 'MOUNTAIN PROVINCE STATE POLYTECHNIC COLLEGE', 0, '0000-00-00', 3, 4),
(' ', 'gihhh', 0, '0000-00-00', '', 0, '0000-00-00', 3, 5),
(' ', 'fgfgfgfg', 0, '0000-00-00', '', 0, '0000-00-00', 3, 6),
(' ', 'CIVIL SERVICE PROFESSIONAL', 0, '0000-00-00', 'MOUNTAIN PROVINCE STATE POLYTECHNIC COLLEGE', 0, '0000-00-00', 4, 7),
(' ', 'gihhh', 0, '0000-00-00', '', 0, '0000-00-00', 4, 8),
(' ', 'fgfgfgfg', 0, '0000-00-00', '', 0, '0000-00-00', 4, 9);

-- --------------------------------------------------------

--
-- Table structure for table `doc`
--

CREATE TABLE `doc` (
  `doc_name` varchar(100) DEFAULT NULL,
  `doc_type` varchar(100) DEFAULT NULL,
  `doc_date` varchar(100) DEFAULT NULL,
  `doc_no` int(11) NOT NULL,
  `doc_size` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `edu_background`
--

CREATE TABLE `edu_background` (
  `ele_school_name` varchar(100) DEFAULT NULL,
  `ele_degree` varchar(100) DEFAULT NULL,
  `ele_from_date` date DEFAULT NULL,
  `ele_to_date` date DEFAULT NULL,
  `ele_units` int(100) DEFAULT NULL,
  `ele_award` varchar(100) DEFAULT NULL,
  `ele_graduation` int(50) DEFAULT NULL,
  `sec_school_name` varchar(100) DEFAULT NULL,
  `sec_degree` varchar(100) DEFAULT NULL,
  `sec_from_date` date DEFAULT NULL,
  `sec_to_date` date DEFAULT NULL,
  `sec_units` int(100) DEFAULT NULL,
  `sec_award` varchar(100) DEFAULT NULL,
  `sec_graduation` int(50) DEFAULT NULL,
  `voc_school_name` varchar(100) DEFAULT NULL,
  `voc_degree` varchar(100) DEFAULT NULL,
  `voc_from_date` date DEFAULT NULL,
  `voc_to_date` date DEFAULT NULL,
  `voc_units` int(100) DEFAULT NULL,
  `voc_award` varchar(100) DEFAULT NULL,
  `voc_graduation` int(50) DEFAULT NULL,
  `coll_school_name` varchar(100) DEFAULT NULL,
  `coll_degree` varchar(100) DEFAULT NULL,
  `coll_from_date` date DEFAULT NULL,
  `coll_to_date` date DEFAULT NULL,
  `coll_units` int(100) DEFAULT NULL,
  `coll_award` varchar(100) DEFAULT NULL,
  `coll_graduation` int(50) DEFAULT NULL,
  `gra_school_name` varchar(100) DEFAULT NULL,
  `gra_degree` varchar(100) DEFAULT NULL,
  `gra_from_date` date DEFAULT NULL,
  `gra_to_date` date DEFAULT NULL,
  `gra_units` int(100) DEFAULT NULL,
  `gra_award` varchar(100) DEFAULT NULL,
  `gra_graduation` int(50) DEFAULT NULL,
  `post_school_name` varchar(100) DEFAULT NULL,
  `post_degree` varchar(100) DEFAULT NULL,
  `post_from_date` date DEFAULT NULL,
  `post_to_date` date DEFAULT NULL,
  `post_units` int(11) DEFAULT NULL,
  `post_award` varchar(100) DEFAULT NULL,
  `post_graduation` int(11) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `edu_background`
--

INSERT INTO `edu_background` (`ele_school_name`, `ele_degree`, `ele_from_date`, `ele_to_date`, `ele_units`, `ele_award`, `ele_graduation`, `sec_school_name`, `sec_degree`, `sec_from_date`, `sec_to_date`, `sec_units`, `sec_award`, `sec_graduation`, `voc_school_name`, `voc_degree`, `voc_from_date`, `voc_to_date`, `voc_units`, `voc_award`, `voc_graduation`, `coll_school_name`, `coll_degree`, `coll_from_date`, `coll_to_date`, `coll_units`, `coll_award`, `coll_graduation`, `gra_school_name`, `gra_degree`, `gra_from_date`, `gra_to_date`, `gra_units`, `gra_award`, `gra_graduation`, `post_school_name`, `post_degree`, `post_from_date`, `post_to_date`, `post_units`, `post_award`, `post_graduation`, `emp_id`) VALUES
('   jghg', '', '0000-00-00', '0000-00-00', 0, '', 0, 'ddfdf', '', '0000-00-00', '0000-00-00', 0, '', 0, 'erer', '', '0000-00-00', '0000-00-00', 0, '', 0, 'dfdf', '', '0000-00-00', '0000-00-00', 0, '', 0, 'ghgh', '', '0000-00-00', '0000-00-00', 0, '', 0, 'eeerre', '', '0000-00-00', '0000-00-00', 0, '', 0, 1),
('   ddf', '', '2012-05-12', '0000-00-00', 0, '', 0, 'ddfdf', '', '0000-00-00', '0000-00-00', 0, '', 0, 'dfdf', '', '0000-00-00', '0000-00-00', 0, '', 0, 'dffgfg', '', '0000-00-00', '0000-00-00', 0, '', 0, 'rer', '', '0000-00-00', '0000-00-00', 0, '', 0, 'fdf', '', '0000-00-00', '0000-00-00', 0, '', 0, 3),
(' ', '', '2012-05-12', '0000-00-00', 0, '', 0, 'ddfdf', '', '0000-00-00', '0000-00-00', 0, '', 0, '', '', '0000-00-00', '0000-00-00', 0, '', 0, '', '', '0000-00-00', '0000-00-00', 0, '', 0, '', '', '0000-00-00', '0000-00-00', 0, '', 0, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 4),
(' ', '', '0000-00-00', '0000-00-00', 0, '', 0, '', '', '0000-00-00', '0000-00-00', 0, '', 0, '', '', '0000-00-00', '0000-00-00', 0, '', 0, '', '', '0000-00-00', '0000-00-00', 0, '', 0, '', '', '0000-00-00', '0000-00-00', 0, '', 0, '', '', '0000-00-00', '0000-00-00', 0, '', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `empl_result`
--

CREATE TABLE `empl_result` (
  `emp_id` int(11) NOT NULL,
  `tech_no` int(11) NOT NULL,
  `mang_no` int(11) NOT NULL,
  `sup_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_file`
--

CREATE TABLE `emp_file` (
  `emp_id` int(11) DEFAULT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_type` varchar(100) NOT NULL,
  `file_size` int(100) NOT NULL,
  `file_folder` varchar(100) NOT NULL,
  `file_date` varchar(100) NOT NULL,
  `file_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_file`
--

INSERT INTO `emp_file` (`emp_id`, `file_name`, `file_type`, `file_size`, `file_folder`, `file_date`, `file_no`) VALUES
(NULL, '-Screenshot (362).png', 'image/png', 1068004, 'pds', '2021-02-11', 1),
(4, '4-Screenshot (362).png', 'image/png', 1068004, 'pds', '2021-02-11', 2),
(4, '4-Screenshot (364).png', 'image/png', 1321831, 'ipcr', '2021-02-11', 3),
(NULL, 'Screenshot (371).png', 'image/png', 30056, '', '2021-02-11', 4);

-- --------------------------------------------------------

--
-- Table structure for table `emp_learning`
--

CREATE TABLE `emp_learning` (
  `title_of_training` varchar(50) DEFAULT NULL,
  `type_of_position` varchar(50) DEFAULT NULL,
  `no_of_hrs` int(10) DEFAULT NULL,
  `learn_from_date` date DEFAULT NULL,
  `learn_to_date` date NOT NULL,
  `conducted_by` varchar(50) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `sno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_learning`
--

INSERT INTO `emp_learning` (`title_of_training`, `type_of_position`, `no_of_hrs`, `learn_from_date`, `learn_to_date`, `conducted_by`, `emp_id`, `sno`) VALUES
('TRAINING ON WEBSITE MANAGEMENT', 'TECHNICAL', 24, '0000-00-00', '0000-00-00', 'RESOURCE SPEAKER / DEPED MP', 1, 1),
('ONLINE TRAINING COURSE ON 1SO 27001:2013 INFORMATI', 'MANAGERIAL', 24, '0000-00-00', '0000-00-00', 'DEVELOPMENT ACADEMY OF THE PHILIPPINES', 1, 2),
('EMAIL COPYWRITING WORKSHOP', 'TECHNICAL', 260, '0000-00-00', '0000-00-00', 'JOHN PAGULAYAN & ALLAN NGO', 1, 3),
('THE STRATEGY OF CONTENT MARKETING', 'TECHNICAL', 30, '0000-00-00', '0000-00-00', 'COURSERA', 1, 4),
('SKILLS TRAINING ON PHOTOSHOP AND PRODUCT PHOTOGRAP', 'TECHNICAL', 0, '0000-00-00', '0000-00-00', 'SPEAKER / DTI', 1, 5),
('TRAINING ON WEBSITE MANAGEMENT', 'TECHNICAL', 24, '0000-00-00', '0000-00-00', 'RESOURCE SPEAKER / DEPED MP', 3, 26),
('ONLINE TRAINING COURSE ON 1SO 27001:2013 INFORMATI', 'MANAGERIAL', 24, '0000-00-00', '0000-00-00', 'DEVELOPMENT ACADEMY OF THE PHILIPPINES', 3, 27),
('EMAIL COPYWRITING WORKSHOP', 'TECHNICAL', 260, '0000-00-00', '0000-00-00', 'JOHN PAGULAYAN & ALLAN NGO', 3, 28),
('THE STRATEGY OF CONTENT MARKETING', 'TECHNICAL', 30, '0000-00-00', '0000-00-00', 'COURSERA', 3, 29),
('SKILLS TRAINING ON PHOTOSHOP AND PRODUCT PHOTOGRAP', 'TECHNICAL', 0, '0000-00-00', '0000-00-00', 'SPEAKER / DTI', 3, 30),
('TRAINING ON WEBSITE MANAGEMENT', 'TECHNICAL', 24, '0000-00-00', '0000-00-00', 'RESOURCE SPEAKER / DEPED MP', 4, 51),
('ONLINE TRAINING COURSE ON 1SO 27001:2013 INFORMATI', 'MANAGERIAL', 24, '0000-00-00', '0000-00-00', 'DEVELOPMENT ACADEMY OF THE PHILIPPINES', 4, 52),
('EMAIL COPYWRITING WORKSHOP', 'TECHNICAL', 260, '0000-00-00', '0000-00-00', 'JOHN PAGULAYAN & ALLAN NGO', 4, 53),
('THE STRATEGY OF CONTENT MARKETING', 'TECHNICAL', 30, '0000-00-00', '0000-00-00', 'COURSERA', 4, 54),
('SKILLS TRAINING ON PHOTOSHOP AND PRODUCT PHOTOGRAP', 'TECHNICAL', 0, '0000-00-00', '0000-00-00', 'SPEAKER / DTI', 4, 55),
('winter', 'technical', 45, '2021-02-15', '2021-02-18', 'ty', 2, 76),
('winter', 'technical', 45, '2021-02-15', '2021-02-18', 'ty', 4, 77),
('new year eve', 'technical', 0, '2021-02-12', '2021-02-19', '', 1, 78);

-- --------------------------------------------------------

--
-- Table structure for table `emp_leaves`
--

CREATE TABLE `emp_leaves` (
  `type_of_leave` varchar(50) DEFAULT NULL,
  `leave_from_date` date DEFAULT NULL,
  `leave_to_date` date DEFAULT NULL,
  `communication` varchar(50) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `date_diff` int(100) NOT NULL,
  `sno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_leaves`
--

INSERT INTO `emp_leaves` (`type_of_leave`, `leave_from_date`, `leave_to_date`, `communication`, `emp_id`, `date_diff`, `sno`) VALUES
('vacation leave', '2021-02-14', '2021-02-17', 'Select', 2, 4, 1),
('sick leave', '2021-02-23', '2021-02-19', 'Select', 4, -3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `emp_references`
--

CREATE TABLE `emp_references` (
  `ref_full_name` varchar(50) DEFAULT NULL,
  `ref_add` varchar(50) DEFAULT NULL,
  `ref_tel` varchar(100) DEFAULT NULL,
  `emp_gov_id` int(50) DEFAULT NULL,
  `emp_passport_no` int(50) DEFAULT NULL,
  `emp_place_of_insurance` varchar(50) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_references`
--

INSERT INTO `emp_references` (`ref_full_name`, `ref_add`, `ref_tel`, `emp_gov_id`, `emp_passport_no`, `emp_place_of_insurance`, `emp_id`) VALUES
('wewe', 'erer', '34344', 3763, 982, '', 1),
('wewe', 'erer', '34344', 3763, 982, '', 3),
('wewe', 'erer', '34344', 3763, 982, '', 4),
('', '', '', 0, 0, '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `emp_work`
--

CREATE TABLE `emp_work` (
  `work_to_date` date DEFAULT NULL,
  `work_from_date` date DEFAULT NULL,
  `work_position` varchar(50) DEFAULT NULL,
  `employer` varchar(50) DEFAULT NULL,
  `govt_service` varchar(10) DEFAULT NULL,
  `monthly_sal` int(100) DEFAULT NULL,
  `increment` int(50) DEFAULT NULL,
  `work_status` varchar(20) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `office_assign` varchar(20) DEFAULT NULL,
  `sno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_work`
--

INSERT INTO `emp_work` (`work_to_date`, `work_from_date`, `work_position`, `employer`, `govt_service`, `monthly_sal`, `increment`, `work_status`, `emp_id`, `office_assign`, `sno`) VALUES
('0000-00-00', '0000-00-00', 'Programmer', NULL, NULL, NULL, NULL, 'permanent', 1, 'Programmer', 1),
('0000-00-00', '2020-02-12', 'ADMINISTRTIVE ASSISTANT 1', 'MOUNTAIN PROVINCE STATE POLYTECHNIC COLLEGE', 'YES', 16458, 7, 'PERMANENT', 1, '', 2),
('2016-10-04', '2016-01-04', 'SECRETARIAT', 'LANG-AY FESTIVAL ORGANIZATION', 'NO', 5000, 0, 'CONTRACT', 1, '', 3),
('0000-00-00', '0000-00-00', 'manager', NULL, NULL, NULL, NULL, 'contractual', 2, 'manager', 4),
('0000-00-00', '0000-00-00', 'manager', NULL, NULL, NULL, NULL, 'contractual', 3, 'manager', 5),
('0000-00-00', '2020-02-12', 'ADMINISTRTIVE ASSISTANT 1', 'MOUNTAIN PROVINCE STATE POLYTECHNIC COLLEGE', 'YES', 16458, 7, 'PERMANENT', 3, '', 6),
('2016-10-04', '2016-01-04', 'SECRETARIAT', 'LANG-AY FESTIVAL ORGANIZATION', 'NO', 5000, 0, 'CONTRACT', 3, '', 7),
('0000-00-00', '0000-00-00', 'Programmer', NULL, NULL, NULL, NULL, 'contractual', 4, 'Programmer', 8),
('0000-00-00', '2020-02-12', 'ADMINISTRTIVE ASSISTANT 1', 'MOUNTAIN PROVINCE STATE POLYTECHNIC COLLEGE', 'YES', 16458, 7, 'PERMANENT', 4, '', 9),
('2016-10-04', '2016-01-04', 'SECRETARIAT', 'LANG-AY FESTIVAL ORGANIZATION', 'NO', 5000, 0, 'CONTRACT', 4, '', 10);

-- --------------------------------------------------------

--
-- Table structure for table `family_background`
--

CREATE TABLE `family_background` (
  `emp_spouse_lastname` varchar(100) NOT NULL,
  `emp_spouse_firstname` varchar(100) NOT NULL,
  `emp_spouse_middlename` varchar(100) NOT NULL,
  `emp_spouse_extname` varchar(100) NOT NULL,
  `emp_sp_occupation` varchar(20) DEFAULT NULL,
  `emp_sp_employer` varchar(20) DEFAULT NULL,
  `emp_sp_add` varchar(50) DEFAULT NULL,
  `emp_sp_tel` int(20) DEFAULT NULL,
  `emp_child_name` varchar(50) DEFAULT NULL,
  `emp_child_dob` varchar(100) NOT NULL,
  `emp_father_lastname` varchar(100) NOT NULL,
  `emp_father_firstname` varchar(100) NOT NULL,
  `emp_father_middlename` varchar(100) NOT NULL,
  `emp_father_extname` varchar(100) NOT NULL,
  `emp_mother_lastname` varchar(100) NOT NULL,
  `emp_mother_firstname` varchar(100) NOT NULL,
  `emp_mother_middlename` varchar(100) NOT NULL,
  `emp_mother_extname` varchar(100) NOT NULL,
  `emp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `family_background`
--

INSERT INTO `family_background` (`emp_spouse_lastname`, `emp_spouse_firstname`, `emp_spouse_middlename`, `emp_spouse_extname`, `emp_sp_occupation`, `emp_sp_employer`, `emp_sp_add`, `emp_sp_tel`, `emp_child_name`, `emp_child_dob`, `emp_father_lastname`, `emp_father_firstname`, `emp_father_middlename`, `emp_father_extname`, `emp_mother_lastname`, `emp_mother_firstname`, `emp_mother_middlename`, `emp_mother_extname`, `emp_id`) VALUES
('sdsd', 'dfdf', 'fgrtt', '', 'sdsd', 'zxe', 'dsd', 3422, 'sawdah,sds', '2012-05-11,2014-12-22', 'sdsd', 'jghgh', 'xcc', 'ddf', 'ghsdsd   ', 'tty   ', 'dfdf', 'ftr', 1),
('Surname', 'First', 'Middle', 'Ext', '', '', '', 0, '', '', 'Surname', 'First', 'Middle', 'Ext', 'Surname ', 'First ', 'Middle', 'Ext', 2),
('sdsd', 'dfdf', 'fgrtt', '', 'sdsd', 'zxe', 'dsd', 3422, 'sawdah,sds', '2012-05-11,2014-12-22', 'sdsd', 'jghgh', 'xcc', 'ddf', 'ghsdsd   ', 'tty   ', 'dfdf', 'ftr', 3),
('sdsd', 'dfdf', 'fgrtt', '', 'sdsd', 'zxe', 'dsd', 3422, 'sawdah,sds', '2012-05-11,2014-12-22', 'sdsd', 'jghgh', 'xcc', 'ddf', 'ghsdsd ', 'tty ', 'dfdf', 'ftr', 4);

-- --------------------------------------------------------

--
-- Table structure for table `hr_events`
--

CREATE TABLE `hr_events` (
  `title` varchar(50) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date NOT NULL,
  `venue` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `speaker` varchar(50) DEFAULT NULL,
  `office` varchar(50) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `sno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `leave_credits`
--

CREATE TABLE `leave_credits` (
  `emp_id` int(11) DEFAULT NULL,
  `vacation_leave` int(100) DEFAULT NULL,
  `sick_leave` int(100) DEFAULT NULL,
  `spl` int(100) DEFAULT NULL,
  `force_leave` int(100) DEFAULT NULL,
  `lwp` int(100) DEFAULT NULL,
  `mon` int(11) DEFAULT NULL,
  `sno` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave_credits`
--

INSERT INTO `leave_credits` (`emp_id`, `vacation_leave`, `sick_leave`, `spl`, `force_leave`, `lwp`, `mon`, `sno`, `year`) VALUES
(2, 4, NULL, NULL, NULL, NULL, 2, 1, 2021),
(4, NULL, -3, NULL, NULL, NULL, 2, 2, 2021);

-- --------------------------------------------------------

--
-- Table structure for table `leave_credits_result`
--

CREATE TABLE `leave_credits_result` (
  `emp_id` int(11) DEFAULT NULL,
  `mon` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `vl_pts` decimal(11,2) DEFAULT NULL,
  `sl_pts` decimal(10,2) DEFAULT NULL,
  `sno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave_credits_result`
--

INSERT INTO `leave_credits_result` (`emp_id`, `mon`, `year`, `vl_pts`, `sl_pts`, `sno`) VALUES
(2, 1, 2021, '17.25', '16.25', 1),
(2, 2, 2021, '12.25', '17.50', 2),
(2, 3, 2021, '13.50', '18.75', 3),
(2, 4, 2021, '14.75', '20.00', 4),
(2, 5, 2021, '16.00', '21.25', 5),
(2, 6, 2021, '17.25', '22.50', 6),
(2, 7, 2021, '18.50', '23.75', 7),
(2, 8, 2021, '19.75', '25.00', 8),
(2, 9, 2021, '21.00', '26.25', 9),
(2, 10, 2021, '22.25', '27.50', 10),
(2, 11, 2021, '23.50', '28.75', 11),
(2, 12, 2021, '24.75', '30.00', 12),
(4, 1, 2021, '16.25', '16.25', 13),
(4, 2, 2021, '17.50', '20.00', 14),
(4, 3, 2021, '18.75', '21.25', 15),
(4, 4, 2021, '20.00', '22.50', 16),
(4, 5, 2021, '21.25', '23.75', 17),
(4, 6, 2021, '22.50', '25.00', 18),
(4, 7, 2021, '23.75', '26.25', 19),
(4, 8, 2021, '25.00', '27.50', 20),
(4, 9, 2021, '26.25', '28.75', 21),
(4, 10, 2021, '27.50', '30.00', 22),
(4, 11, 2021, '28.75', '31.25', 23),
(4, 12, 2021, '30.00', '32.50', 24);

-- --------------------------------------------------------

--
-- Table structure for table `leave_credits_year`
--

CREATE TABLE `leave_credits_year` (
  `emp_id` int(11) DEFAULT NULL,
  `vl_pts` decimal(10,2) DEFAULT NULL,
  `year` int(100) DEFAULT NULL,
  `sno` int(11) NOT NULL,
  `sl_pts` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave_credits_year`
--

INSERT INTO `leave_credits_year` (`emp_id`, `vl_pts`, `year`, `sno`, `sl_pts`) VALUES
(2, '24.75', 2021, 1, '30.00'),
(4, '24.75', 2021, 2, '30.00'),
(2, '16.00', 2020, 3, '15.00');

-- --------------------------------------------------------

--
-- Table structure for table `other_inf`
--

CREATE TABLE `other_inf` (
  `condition_1` varchar(10) DEFAULT NULL,
  `condition_1_des` varchar(100) DEFAULT NULL,
  `condition_2` varchar(10) DEFAULT NULL,
  `condition_2_des` varchar(100) DEFAULT NULL,
  `condition_3` varchar(10) DEFAULT NULL,
  `condition_3_des` varchar(100) DEFAULT NULL,
  `condition_4` varchar(10) DEFAULT NULL,
  `condition_4_des` varchar(100) DEFAULT NULL,
  `condition_5` varchar(10) DEFAULT NULL,
  `condition_5_des` varchar(100) DEFAULT NULL,
  `condition_6` varchar(10) DEFAULT NULL,
  `condition_6_des` varchar(100) DEFAULT NULL,
  `condition_7` varchar(10) DEFAULT NULL,
  `condition_7_des` varchar(100) DEFAULT NULL,
  `condition_8` varchar(10) DEFAULT NULL,
  `condition_8_des` varchar(100) DEFAULT NULL,
  `condition_9` varchar(10) DEFAULT NULL,
  `condition_9_des` varchar(100) DEFAULT NULL,
  `condition_10` varchar(10) DEFAULT NULL,
  `condition_10_des` varchar(100) DEFAULT NULL,
  `condition_11` varchar(10) DEFAULT NULL,
  `condition_11_des` varchar(100) DEFAULT NULL,
  `condition_12` varchar(10) DEFAULT NULL,
  `condition_12_des` varchar(100) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `other_inf`
--

INSERT INTO `other_inf` (`condition_1`, `condition_1_des`, `condition_2`, `condition_2_des`, `condition_3`, `condition_3_des`, `condition_4`, `condition_4_des`, `condition_5`, `condition_5_des`, `condition_6`, `condition_6_des`, `condition_7`, `condition_7_des`, `condition_8`, `condition_8_des`, `condition_9`, `condition_9_des`, `condition_10`, `condition_10_des`, `condition_11`, `condition_11_des`, `condition_12`, `condition_12_des`, `emp_id`) VALUES
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 3),
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 4),
(NULL, 'If YES , please give details', NULL, 'If YES , please give details', NULL, 'If YES , please give details', NULL, 'If YES , please give details', NULL, 'If YES , please give details', NULL, 'If YES , please give details', NULL, 'If YES , please give details', NULL, 'If YES , please give details', NULL, 'If YES , please give details', NULL, 'If YES , please give details', NULL, 'If YES , please give details', NULL, 'If YES , please give details', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pds`
--

CREATE TABLE `pds` (
  `emp_dob` date DEFAULT NULL,
  `emp_height` int(10) DEFAULT NULL,
  `emp_weight` int(10) DEFAULT NULL,
  `emp_blood` varchar(5) DEFAULT NULL,
  `emp_gender` varchar(10) DEFAULT NULL,
  `emp_civil_status` varchar(25) DEFAULT NULL,
  `emp_resi_add` varchar(100) DEFAULT NULL,
  `emp_per_add` varchar(100) DEFAULT NULL,
  `emp_citizen` varchar(100) DEFAULT NULL,
  `emp_first_name` varchar(200) DEFAULT NULL,
  `emp_last_name` varchar(100) DEFAULT NULL,
  `emp_email` varchar(100) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `emp_citizen_chk` varchar(50) DEFAULT NULL,
  `office_assign` varchar(100) NOT NULL,
  `emp_tel_no` varchar(100) NOT NULL,
  `emp_mb_no` varchar(100) NOT NULL,
  `emp_dual_citizen` varchar(100) NOT NULL,
  `emp_resi_add_street` varchar(100) NOT NULL,
  `emp_resi_add_subdivision` varchar(100) NOT NULL,
  `emp_resi_add_barangay` varchar(100) NOT NULL,
  `emp_resi_add_municipal` varchar(100) NOT NULL,
  `emp_resi_add_province` varchar(100) NOT NULL,
  `emp_resi_add_zipcode` varchar(100) NOT NULL,
  `emp_per_add_street` varchar(100) NOT NULL,
  `emp_per_add_subdivision` varchar(100) NOT NULL,
  `emp_per_add_barangay` varchar(100) NOT NULL,
  `emp_per_add_municipal` varchar(100) NOT NULL,
  `emp_per_add_province` varchar(100) NOT NULL,
  `emp_per_add_zipcode` varchar(100) NOT NULL,
  `emp_contact_gs` int(100) NOT NULL,
  `emp_contact_pag` int(100) NOT NULL,
  `emp_contact_ph` int(100) NOT NULL,
  `emp_contact_ss` int(100) NOT NULL,
  `emp_contact_tin` int(100) NOT NULL,
  `emp_contact_agency` int(100) NOT NULL,
  `emp_status` varchar(100) NOT NULL,
  `emp_sex` varchar(50) NOT NULL,
  `emp_middle_name` varchar(100) NOT NULL,
  `emp_ext` varchar(100) NOT NULL,
  `sno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pds`
--

INSERT INTO `pds` (`emp_dob`, `emp_height`, `emp_weight`, `emp_blood`, `emp_gender`, `emp_civil_status`, `emp_resi_add`, `emp_per_add`, `emp_citizen`, `emp_first_name`, `emp_last_name`, `emp_email`, `emp_id`, `emp_citizen_chk`, `office_assign`, `emp_tel_no`, `emp_mb_no`, `emp_dual_citizen`, `emp_resi_add_street`, `emp_resi_add_subdivision`, `emp_resi_add_barangay`, `emp_resi_add_municipal`, `emp_resi_add_province`, `emp_resi_add_zipcode`, `emp_per_add_street`, `emp_per_add_subdivision`, `emp_per_add_barangay`, `emp_per_add_municipal`, `emp_per_add_province`, `emp_per_add_zipcode`, `emp_contact_gs`, `emp_contact_pag`, `emp_contact_ph`, `emp_contact_ss`, `emp_contact_tin`, `emp_contact_agency`, `emp_status`, `emp_sex`, `emp_middle_name`, `emp_ext`, `sno`) VALUES
('1999-05-12', 15, 56, 'b+', 'male', '   ', 'Hgusk', 'Jiksuhs', '', 'jaskon', 'wilton', 'wa@gmail.com', 1, '', 'Programmer', '5632422', '874', '', '', '', '', 'BONTOC', 'MOUNTAIN PROVINCE', '2616', '', '', '', '', '', '', 123, 456, 1222, 764, 879, 879, '', 'M', '', '', 1),
('1999-05-12', 15, 56, 'b+', 'female', '   ', 'Hgusk', 'Jiksuhs', '', 'sara', 'kiol', 'wa@gmail.com', 3, '', 'manager', '5632422', '874', '', '', '', '', 'BONTOC', 'MOUNTAIN PROVINCE', '2616', '', '', '', '', '', '', 123, 456, 1222, 764, 879, 879, '', 'F', 'vgt', '', 3),
('1999-05-12', 15, 56, 'b+', 'female', 'single', 'Hgusk', 'Jiksuhs', '', 'oksis', 'tfg', 'wa@gmail.com', 4, '', 'Programmer', '5632422', '874', '', '', '', '', 'BONTOC', 'MOUNTAIN PROVINCE', '2616', '', '', '', '', '', '', 123, 456, 1222, 764, 879, 879, 'contractual', '', 'cdf', '', 9),
('0000-00-00', 0, 0, '', 'female', ' ', 'House/Block/Lot No', 'House/Block/Lot No', '', 'sarah', 'lilsi', '', 2, NULL, 'manager', '', '', 'Indicate Country If dual Citizenship', 'Street', 'Subdivision/Village', 'Barangay', 'Municipal/City', 'Province', 'Zip Code', 'Street', 'Subdivision/Village', 'Barangay', 'Municipal/City', 'Province', 'Zip Code', 0, 0, 0, 0, 0, 0, 'contractual', 'F', '', '', 11);

-- --------------------------------------------------------

--
-- Table structure for table `per_emp_leaves`
--

CREATE TABLE `per_emp_leaves` (
  `emp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `per_emp_leaves`
--

INSERT INTO `per_emp_leaves` (`emp_id`) VALUES
(2),
(4);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `emp_special_skills` varchar(100) DEFAULT NULL,
  `non_academic` varchar(100) DEFAULT NULL,
  `membership` varchar(50) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`emp_special_skills`, `non_academic`, `membership`, `emp_id`) VALUES
('WEB DEVELOPMENT,GRAPHIC DESIGNS,EMAIL COPYWRITING,,,,', 'FINALIST- 27TH DPC=PLDT VISUAL ARTS COMPETITION,LEADERSHIP AWARD AND SERVICE AWARD,,,,,', 'hffg,frtrt,,,,,', 1),
('WEB DEVELOPMENT,GRAPHIC DESIGNS,EMAIL COPYWRITING,,,,', 'FINALIST- 27TH DPC=PLDT VISUAL ARTS COMPETITION,LEADERSHIP AWARD AND SERVICE AWARD,,,,,', ',,,,,,', 3),
('WEB DEVELOPMENT,GRAPHIC DESIGNS,EMAIL COPYWRITING,,,,', 'FINALIST- 27TH DPC=PLDT VISUAL ARTS COMPETITION,LEADERSHIP AWARD AND SERVICE AWARD,,,,,', ',,,,,,', 4),
('', '', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `table_events`
--

CREATE TABLE `table_events` (
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `venue` varchar(100) COLLATE utf8_bin NOT NULL,
  `sno` int(11) NOT NULL,
  `address` varchar(100) COLLATE utf8_bin NOT NULL,
  `city` varchar(100) COLLATE utf8_bin NOT NULL,
  `barangay` varchar(100) COLLATE utf8_bin NOT NULL,
  `sp_last_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `sp_first_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `sp_middle_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `sp_ext` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `table_events`
--

INSERT INTO `table_events` (`title`, `start`, `end`, `venue`, `sno`, `address`, `city`, `barangay`, `sp_last_name`, `sp_first_name`, `sp_middle_name`, `sp_ext`) VALUES
('Cv design', '2021-02-12 19:24:00', '2021-02-27 19:24:00', 'italy', 1, '', '', '', '', '', '', ''),
('Web Design using bootstrap , css , sass ,html ', '2021-02-27 19:32:00', '2021-02-28 19:32:00', 'north', 2, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `title_of_training` varchar(50) DEFAULT NULL,
  `type_of_training` varchar(50) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `no_of_hrs` int(10) DEFAULT NULL,
  `venue` varchar(50) DEFAULT NULL,
  `province` varchar(100) DEFAULT NULL,
  `speaker_name` varchar(100) DEFAULT NULL,
  `agency` varchar(50) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `sponsor` varchar(50) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `sno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`title_of_training`, `type_of_training`, `from_date`, `to_date`, `no_of_hrs`, `venue`, `province`, `speaker_name`, `agency`, `title`, `sponsor`, `emp_id`, `sno`) VALUES
('winter', 'technical', '2021-02-15', '2021-02-18', 45, 'usa', 'ererer', 'bye ddf ffg  fgfgfg', 'tyytyty', NULL, 'ty', 2, 1),
('winter', 'technical', '2021-02-15', '2021-02-18', 45, 'usa', 'ererer', 'bye ddf ffg  fgfgfg', 'tyytyty', NULL, 'ty', 4, 2),
('new year eve', 'technical', '2021-02-12', '2021-02-19', 0, 'erer', '', '    ', '', NULL, '', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `admin_photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `user_id`, `admin_photo`) VALUES
('hr', 'hr', 1, 'admin1-download (3).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `voluntary_works`
--

CREATE TABLE `voluntary_works` (
  `name_org` varchar(50) DEFAULT NULL,
  `org_add` varchar(50) DEFAULT NULL,
  `vol_from_date` date DEFAULT NULL,
  `vol_to_date` date NOT NULL,
  `vol_no_of_hrs` int(10) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `sno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voluntary_works`
--

INSERT INTO `voluntary_works` (`name_org`, `org_add`, `vol_from_date`, `vol_to_date`, `vol_no_of_hrs`, `position`, `emp_id`, `sno`) VALUES
('IGOROT FOOTBALL CLUB', 'IGOROT FOOTBALL CLUB', '0000-00-00', '0000-00-00', 0, 'BRIGADA ESKWELA/ TRAINING OF PROVINCIAL AND\n CARAA', 1, 1),
('IGOROT FOOTBALL CLUB', 'IGOROT FOOTBALL CLUB', '0000-00-00', '0000-00-00', 0, 'BRIGADA ESKWELA/ TRAINING OF PROVINCIAL AND\n CARAA', 3, 2),
('IGOROT FOOTBALL CLUB', 'IGOROT FOOTBALL CLUB', '0000-00-00', '0000-00-00', 0, 'BRIGADA ESKWELA/ TRAINING OF PROVINCIAL AND\n CARAA', 4, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_emp`
--
ALTER TABLE `add_emp`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `civil_service`
--
ALTER TABLE `civil_service`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `doc`
--
ALTER TABLE `doc`
  ADD PRIMARY KEY (`doc_no`);

--
-- Indexes for table `edu_background`
--
ALTER TABLE `edu_background`
  ADD UNIQUE KEY `emp_id_uq` (`emp_id`);

--
-- Indexes for table `empl_result`
--
ALTER TABLE `empl_result`
  ADD UNIQUE KEY `emp_id` (`emp_id`);

--
-- Indexes for table `emp_file`
--
ALTER TABLE `emp_file`
  ADD PRIMARY KEY (`file_no`);

--
-- Indexes for table `emp_learning`
--
ALTER TABLE `emp_learning`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `training` (`title_of_training`,`emp_id`);

--
-- Indexes for table `emp_leaves`
--
ALTER TABLE `emp_leaves`
  ADD UNIQUE KEY `sno` (`sno`) USING BTREE;

--
-- Indexes for table `emp_references`
--
ALTER TABLE `emp_references`
  ADD UNIQUE KEY `emp_id_uq` (`emp_id`);

--
-- Indexes for table `emp_work`
--
ALTER TABLE `emp_work`
  ADD PRIMARY KEY (`sno`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `family_background`
--
ALTER TABLE `family_background`
  ADD PRIMARY KEY (`emp_id`),
  ADD UNIQUE KEY `emp_id_uq` (`emp_id`);

--
-- Indexes for table `hr_events`
--
ALTER TABLE `hr_events`
  ADD PRIMARY KEY (`sno`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `leave_credits`
--
ALTER TABLE `leave_credits`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `leave_credits_result`
--
ALTER TABLE `leave_credits_result`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `mon` (`mon`,`year`,`emp_id`) USING BTREE;

--
-- Indexes for table `leave_credits_year`
--
ALTER TABLE `leave_credits_year`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `year` (`emp_id`,`year`);

--
-- Indexes for table `other_inf`
--
ALTER TABLE `other_inf`
  ADD UNIQUE KEY `emp_id_uq` (`emp_id`);

--
-- Indexes for table `pds`
--
ALTER TABLE `pds`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `emp_id_uq` (`emp_id`);

--
-- Indexes for table `per_emp_leaves`
--
ALTER TABLE `per_emp_leaves`
  ADD UNIQUE KEY `emp_id` (`emp_id`) USING BTREE;

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD UNIQUE KEY `emp_id_uq` (`emp_id`);

--
-- Indexes for table `table_events`
--
ALTER TABLE `table_events`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD UNIQUE KEY `sno_uq` (`sno`),
  ADD UNIQUE KEY `training` (`title_of_training`,`emp_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `voluntary_works`
--
ALTER TABLE `voluntary_works`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_emp`
--
ALTER TABLE `add_emp`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123422;

--
-- AUTO_INCREMENT for table `civil_service`
--
ALTER TABLE `civil_service`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doc`
--
ALTER TABLE `doc`
  MODIFY `doc_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_file`
--
ALTER TABLE `emp_file`
  MODIFY `file_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `emp_learning`
--
ALTER TABLE `emp_learning`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `emp_leaves`
--
ALTER TABLE `emp_leaves`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `emp_work`
--
ALTER TABLE `emp_work`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hr_events`
--
ALTER TABLE `hr_events`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leave_credits`
--
ALTER TABLE `leave_credits`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leave_credits_result`
--
ALTER TABLE `leave_credits_result`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `leave_credits_year`
--
ALTER TABLE `leave_credits_year`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pds`
--
ALTER TABLE `pds`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `table_events`
--
ALTER TABLE `table_events`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `voluntary_works`
--
ALTER TABLE `voluntary_works`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `emp_work`
--
ALTER TABLE `emp_work`
  ADD CONSTRAINT `emp_work_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `add_emp` (`emp_id`);

--
-- Constraints for table `per_emp_leaves`
--
ALTER TABLE `per_emp_leaves`
  ADD CONSTRAINT `per_emp_leaves_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `add_emp` (`emp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
