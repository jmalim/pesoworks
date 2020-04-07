-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2020 at 06:23 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesoworks`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `postjob` (IN `jobtitle` VARCHAR(255), IN `jobdetails` VARCHAR(255), IN `establishment_id` INT(11), IN `jobtype` VARCHAR(255), IN `rate` DOUBLE(6,2), IN `job_location` VARCHAR(255), IN `postingdate` DATE, IN `posting_status` VARCHAR(255))  BEGIN 
	INSERT INTO tbl_job VALUES (NULL,jobtitle,jobdetails);
    INSERT INTO tbl_postingdetails VALUES (NULL,@@IDENTITY,establishment_id,jobtype,rate,job_location,postingdate,posting_status);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `js_emp_details`
--

CREATE TABLE `js_emp_details` (
  `empID` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `addressID` int(11) NOT NULL,
  `civilstatus` varchar(255) NOT NULL,
  `tin` varchar(255) DEFAULT NULL,
  `gsis` varchar(255) DEFAULT NULL,
  `pagibig` varchar(255) DEFAULT NULL,
  `phno` varchar(255) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `landline` varchar(255) DEFAULT NULL,
  `cellphone` varchar(255) NOT NULL,
  `disability` varchar(255) DEFAULT NULL,
  `bdate` date NOT NULL,
  `placeofbirth` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `regdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `js_emp_details`
--

INSERT INTO `js_emp_details` (`empID`, `fname`, `lname`, `mname`, `suffix`, `gender`, `addressID`, `civilstatus`, `tin`, `gsis`, `pagibig`, `phno`, `height`, `landline`, `cellphone`, `disability`, `bdate`, `placeofbirth`, `religion`, `regdate`) VALUES
(2020001, 'Jeanette', 'Alim', 'M.', 'N/A', 'Female', 2, 'Single', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '09664681864', 'N/A', '1990-04-28', 'CDO', 'RC', '2020-03-01'),
(2020002, 'Analita', 'Autida', 'O.', 'N/A', 'Female', 4, 'Married', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '09123245869', 'N/A', '1997-10-11', 'CDO', 'Born Again', '2020-03-02'),
(2020003, 'May Ann', 'Labitad', 'Y.', 'N/A', 'Female', 6, 'Married', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', '1992-05-08', 'CDO', 'RC', '2020-03-14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_address`
--

CREATE TABLE `tbl_address` (
  `addressID` int(11) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `city_mun` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_address`
--

INSERT INTO `tbl_address` (`addressID`, `barangay`, `city_mun`, `province`) VALUES
(1, 'Cugman', 'Cagayan de Oro City', 'Misamis Oriental'),
(2, 'Amoros', 'El Salvador City', 'Misamis Oriental'),
(3, 'Bolisong', 'El Salvador City', 'Misamis Oriental'),
(4, 'Cogon', 'El Salvador City', 'Misamis Oriental'),
(5, 'Himaya', 'El Salvador City', 'Misamis Oriental'),
(6, 'Hinigdaan', 'El Salvador City', 'Misamis Oriental'),
(7, 'Kalabaylabay', 'El Salvador City', 'Misamis Oriental'),
(8, 'Molugan', 'El Salvador City', 'Misamis Oriental'),
(9, 'Pedro S. Baculio (Bolo-Bolo)', 'El Salvador City', 'Misamis Oriental'),
(10, 'Poblacion', 'El Salvador City', 'Misamis Oriental'),
(11, 'Quibonbon', 'El Salvador City', 'Misamis Oriental'),
(12, 'Sambulawan', 'El Salvador City', 'Misamis Oriental'),
(13, 'San Francisco de Asis (Calongonan)', 'El Salvador City', 'Misamis Oriental'),
(14, 'Sinaloc', 'El Salvador City', 'Misamis Oriental'),
(15, 'Taytay', 'El Salvador City', 'Misamis Oriental'),
(16, 'Ulaliman', 'El Salvador City', 'Misamis Oriental');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_education`
--

CREATE TABLE `tbl_education` (
  `empID` int(11) NOT NULL,
  `education_level` varchar(255) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year_graduated` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_education`
--

INSERT INTO `tbl_education` (`empID`, `education_level`, `school_name`, `course`, `year_graduated`) VALUES
(2020001, 'Tertiary', 'USTP', 'BSIT', '2019'),
(2020002, 'Tertiary', 'USTP', 'BSIT', '2019'),
(2020003, 'Secondary', 'MOGCHS', 'N/A', '2015');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employeeskills`
--

CREATE TABLE `tbl_employeeskills` (
  `employeeskill_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL,
  `empID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_employeeskills`
--

INSERT INTO `tbl_employeeskills` (`employeeskill_id`, `skill_id`, `empID`) VALUES
(101, 1001, 2020001),
(102, 1002, 2020001),
(103, 1003, 2020001),
(104, 1005, 2020002),
(105, 1006, 2020003),
(106, 1007, 2020003),
(107, 1008, 2020002);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_empstatus_detail`
--

CREATE TABLE `tbl_empstatus_detail` (
  `empstatus_detail_id` int(11) NOT NULL,
  `empID` int(11) NOT NULL,
  `emp_status_type_name` varchar(255) NOT NULL,
  `establishment_id` int(11) NOT NULL,
  `wage_employment` double(6,2) NOT NULL,
  `date_employed` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_empstatus_detail`
--

INSERT INTO `tbl_empstatus_detail` (`empstatus_detail_id`, `empID`, `emp_status_type_name`, `establishment_id`, `wage_employment`, `date_employed`) VALUES
(3001, 2020001, 'Wage-employed', 1, 500.00, '2020-03-13'),
(3003, 2020003, 'Wage-employed', 2, 365.00, '2020-03-15'),
(3004, 2020002, 'Self-employed', 2, 365.00, '2020-03-13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_establishment_details`
--

CREATE TABLE `tbl_establishment_details` (
  `establishment_id` int(11) NOT NULL,
  `establishment_name` varchar(255) NOT NULL,
  `establishment_abbr` varchar(255) NOT NULL,
  `establishment_tin` varchar(255) NOT NULL,
  `establishment_type` varchar(255) NOT NULL,
  `workforce` varchar(255) NOT NULL,
  `person_in_charge` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `addressID` int(11) NOT NULL,
  `regdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_establishment_details`
--

INSERT INTO `tbl_establishment_details` (`establishment_id`, `establishment_name`, `establishment_abbr`, `establishment_tin`, `establishment_type`, `workforce`, `person_in_charge`, `position`, `contact`, `addressID`, `regdate`) VALUES
(1, 'Asia Brewery', 'ABI', 'N/A', 'Private', 'Large(200 and up)', 'Ms. Cyras Palmos', 'HR', 'N/A', 3, '2020-03-01'),
(2, 'Bounty Fresh Food, Inc.', 'BFF', 'N/A', 'N/A', 'Small(10-99)', 'N/A', 'N/A', 'N/A', 6, '2020-03-09'),
(3, 'Citihardware Bacolod, Inc.', 'CBI', 'N/A', 'N/A', 'Large(200 and up)', 'N/A', 'N/A', '09750834081', 8, '2020-03-25'),
(4, 'C-One Steel Corporation', 'C-One', 'N/A', 'Private', 'Large', 'N/A', 'N/A', 'N/A', 15, '2020-03-25'),
(5, 'Carbon Philippines Corporation', 'CPC', 'N/A', 'Private', 'Large', 'N/A', 'N/A', 'N/A', 4, '2020-03-25'),
(6, 'Extracts Sales, Inc.', 'CPC', 'N/A', 'Private', 'Medium', 'N/A', 'N/A', 'N/A', 8, '2020-03-25'),
(7, 'GPA Providence Corporation(MCDO)', 'GPA', 'N/A', 'Private', 'Small', 'N/A', 'N/A', 'N/A', 9, '2020-03-25'),
(8, 'High Land Fresh Dairy', 'HLFD', 'N/A', 'Private', 'Small', 'N/A', 'N/A', 'N/A', 10, '2020-03-25'),
(9, 'Jan Group Trade Corporation', 'JGTC', 'N/A', 'Private', 'Medium', 'N/A', 'N/A', 'N/A', 8, '2020-03-25'),
(10, 'Maharlika Agro Marine Ventures Corporation', 'MAMVC', 'N/A', 'Private', 'Large', 'N/A', 'N/A', 'N/A', 4, '2020-03-25'),
(11, 'Megabest Food Manufacturing', 'MFM', 'N/A', 'Private', 'Medium', 'N/A', 'N/A', 'N/A', 11, '2020-03-25'),
(12, 'Megasoft Hygienic Products Inc.', 'GPA', 'N/A', 'Private', 'Small', 'Kristine B. Jalon', '09778041148', 'N/A', 14, '2020-03-25'),
(13, 'Monark Equipment Corporation', 'MEC', 'N/A', 'Private', 'Small', 'N/A', 'N/A', 'N/A', 14, '2020-03-25'),
(14, 'Motormate Merchandising Corporation, Inc.', 'MCC', 'N/A', 'Private', 'Medium', 'N/A', 'N/A', 'N/A', 10, '2020-03-25'),
(15, 'NJR Lumber Corporation', 'NJR', 'N/A', 'Private', 'Large', 'N/A', 'N/A', 'N/A', 2, '2020-03-25'),
(16, 'Our Lady of Guadalupe Gasoline Station (PETRION)', 'PETRON', 'N/A', 'Private', 'Medium', 'N/A', 'N/A', 'N/A', 9, '2020-03-25'),
(17, 'Pacerm-1 Energy Corporation', 'PEC', 'N/A', 'Private', 'Medium', 'N/A', 'N/A', 'N/A', 11, '2020-03-25'),
(18, 'Phil Asia Logistics, Inc.', 'PAL', 'N/A', 'Private', 'Large', 'N/A', 'N/A', 'N/A', 4, '2020-03-25'),
(19, 'PhilFresh Meats Corporation', 'PMC', 'N/A', 'Private', 'Medium', 'Cherry Rose A. Tacna', 'N/A', '09177106032', 4, '2020-03-25'),
(20, 'Producers Savings Bank Corporation', 'PSBC', 'N/A', 'Private', 'Large', 'N/A', 'N/A', 'N/A', 9, '2020-03-25'),
(21, 'Tanduay Distillers, Inc.', 'TDI', 'N/A', 'Private', 'Large', 'N/A', 'N/A', 'N/A', 10, '2020-03-25'),
(22, 'Universal Robina Corporation', 'URC', 'N/A', 'Private', 'Large', 'N/A', 'N/A', 'N/A', 9, '2020-03-25'),
(23, 'W.L. Food Products', 'WL', 'N/A', 'Private', 'Large', 'N/A', 'N/A', 'N/A', 14, '2020-03-25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job`
--

CREATE TABLE `tbl_job` (
  `jobID` int(11) NOT NULL,
  `jobtitle` varchar(255) NOT NULL,
  `jobdetails` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_job`
--

INSERT INTO `tbl_job` (`jobID`, `jobtitle`, `jobdetails`) VALUES
(1001, 'Machine Operator', 'Machine Operators mainly work with heavy machinery. They assist with the installation of their equipment and help maintain it by performing periodic tests and repairs. ... They install their machines, operate them to aid in plant processes, and perform ro'),
(1002, 'Quality Inspector', 'A Quality Inspector monitors the quality of incoming and outgoing products or materials for a company. Also known as a Quality Control Inspector, they are tasked with conducting tests, analyzing measurements, and overseeing production processes. They work'),
(1006, 'Laser Machine Operator', 'Must be able to set up or operate machines to cut, saw, or do 3D image engraving'),
(1012, 'Grocery Clerk ', 'Demonstrate excellent commercial awareness, courtesy, and organizational skills. Duties may include cleaning the store, restocking shelves, and ordering stock.'),
(1013, 'Test', 'Test'),
(1014, 'Greza Chicks', 'kanang lami'),
(1015, '', ''),
(1016, '', ''),
(1017, '', ''),
(1018, 'Test', 'Test'),
(1019, '', ''),
(1020, 'Lorem', 'Lorem Ipsum'),
(1021, 'Driver', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jobpreference`
--

CREATE TABLE `tbl_jobpreference` (
  `jobpreference_id` int(11) NOT NULL,
  `empID` int(11) NOT NULL,
  `pref_jobtitle` varchar(255) NOT NULL,
  `pref_job_address` varchar(255) NOT NULL,
  `pref_wage_employment` double(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jobpreference`
--

INSERT INTO `tbl_jobpreference` (`jobpreference_id`, `empID`, `pref_jobtitle`, `pref_job_address`, `pref_wage_employment`) VALUES
(4001, 2020001, 'Graphic Designer', 'CDO', 500.00),
(4002, 2020003, 'Cook', 'CDO', 600.00),
(4003, 2020002, 'IT', 'CDO', 500.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_postingdetails`
--

CREATE TABLE `tbl_postingdetails` (
  `jobpostingID` int(11) NOT NULL,
  `jobID` int(11) NOT NULL,
  `establishment_id` int(11) NOT NULL,
  `jobtype` varchar(255) NOT NULL,
  `rate` double(6,2) NOT NULL,
  `job_location` varchar(255) NOT NULL,
  `postingdate` date NOT NULL,
  `posting_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_postingdetails`
--

INSERT INTO `tbl_postingdetails` (`jobpostingID`, `jobID`, `establishment_id`, `jobtype`, `rate`, `job_location`, `postingdate`, `posting_status`) VALUES
(1, 1001, 1, 'Full-time', 365.00, 'Amoros, El Salvador City', '2020-03-02', 'OPEN'),
(2, 1002, 2, 'Contractual', 350.00, 'Taytay, El Salvador City', '2020-03-09', 'CLOSED'),
(4, 1012, 3, 'Full-Time', 365.00, 'Bulua, CDO', '2020-03-25', 'OPEN'),
(5, 1001, 3, 'Part-time', 750.00, 'Cugman, CDO', '2020-03-25', 'OPEN'),
(11, 1018, 10, 'Full-Time', 350.00, 'Taytay, El Salvador City Misamis Oriental', '2020-03-27', 'CLOSED'),
(13, 1020, 7, 'Part-time', 399.00, 'Sinaloc, El Salvador City Misamis Oriental', '2020-03-28', 'OPEN'),
(14, 1021, 3, 'Contractual', 550.00, 'Sambulawan, El Salvador City Misamis Oriental', '2020-03-28', 'OPEN');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skills`
--

CREATE TABLE `tbl_skills` (
  `skill_id` int(11) NOT NULL,
  `skill_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_skills`
--

INSERT INTO `tbl_skills` (`skill_id`, `skill_name`) VALUES
(1001, 'Auto Mechanic'),
(1002, 'Beautician'),
(1003, 'Carprentry Work'),
(1004, 'Computer Literate'),
(1005, 'Dometic Chores'),
(1006, 'Driver'),
(1007, 'Electrician'),
(1008, 'Embroidery'),
(1009, 'Gardening'),
(1010, 'Masonry'),
(1011, 'Painter/Artist'),
(1012, 'Painting Jobs'),
(1013, 'Photography'),
(1014, 'Plumbing'),
(1015, 'Sewing Dresses'),
(1016, 'Stenography'),
(1017, 'Tailoring');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `empID` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`empID`, `email`, `password`) VALUES
(2020001, 'tazeetwenieyt@gmail.com', '123'),
(2020002, 'autida@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `work_experience`
--

CREATE TABLE `work_experience` (
  `empID` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `date_started` date NOT NULL,
  `date_ended` date NOT NULL,
  `work_exp_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work_experience`
--

INSERT INTO `work_experience` (`empID`, `company_name`, `company_address`, `position`, `date_started`, `date_ended`, `work_exp_status`) VALUES
(2020001, 'Cardmasters', 'CDO', 'Graphic Artist', '2014-03-16', '2017-05-02', 'Contractual'),
(2020002, 'ThinkLogic Marketing', 'CDO', 'Telemarketer', '2019-03-17', '2020-01-09', 'Part-time'),
(2020003, 'ThinkLogic Marketing', 'CDO', 'SEO', '2019-10-02', '2020-01-09', 'Part-time');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_employeeskills`
--
ALTER TABLE `tbl_employeeskills`
  ADD PRIMARY KEY (`employeeskill_id`);

--
-- Indexes for table `tbl_empstatus_detail`
--
ALTER TABLE `tbl_empstatus_detail`
  ADD PRIMARY KEY (`empstatus_detail_id`);

--
-- Indexes for table `tbl_establishment_details`
--
ALTER TABLE `tbl_establishment_details`
  ADD PRIMARY KEY (`establishment_id`);

--
-- Indexes for table `tbl_job`
--
ALTER TABLE `tbl_job`
  ADD PRIMARY KEY (`jobID`);

--
-- Indexes for table `tbl_jobpreference`
--
ALTER TABLE `tbl_jobpreference`
  ADD PRIMARY KEY (`jobpreference_id`);

--
-- Indexes for table `tbl_postingdetails`
--
ALTER TABLE `tbl_postingdetails`
  ADD PRIMARY KEY (`jobpostingID`);

--
-- Indexes for table `tbl_skills`
--
ALTER TABLE `tbl_skills`
  ADD PRIMARY KEY (`skill_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_employeeskills`
--
ALTER TABLE `tbl_employeeskills`
  MODIFY `employeeskill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `tbl_empstatus_detail`
--
ALTER TABLE `tbl_empstatus_detail`
  MODIFY `empstatus_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3005;

--
-- AUTO_INCREMENT for table `tbl_establishment_details`
--
ALTER TABLE `tbl_establishment_details`
  MODIFY `establishment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_job`
--
ALTER TABLE `tbl_job`
  MODIFY `jobID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1022;

--
-- AUTO_INCREMENT for table `tbl_jobpreference`
--
ALTER TABLE `tbl_jobpreference`
  MODIFY `jobpreference_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4004;

--
-- AUTO_INCREMENT for table `tbl_postingdetails`
--
ALTER TABLE `tbl_postingdetails`
  MODIFY `jobpostingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_skills`
--
ALTER TABLE `tbl_skills`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1018;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
