-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2021 at 08:06 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `solid_waste`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Password` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `Image` text CHARACTER SET armscii8 NOT NULL,
  `Countery` text CHARACTER SET utf8 NOT NULL,
  `About` text CHARACTER SET utf8 NOT NULL,
  `Contact` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Job` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `Name`, `Email`, `Password`, `Image`, `Countery`, `About`, `Contact`, `Job`) VALUES
(1, 'Abdul Samad Khan', 'abdulsamad31650@gmail.com', 'sami123', 'img.jpg', 'Pakistan', 'Web Developer', '03360097019', 'Web Designeer');

-- --------------------------------------------------------

--
-- Table structure for table `bildaar`
--

CREATE TABLE `bildaar` (
  `bildaar_id` int(11) NOT NULL,
  `bildaar_name` varchar(30) NOT NULL,
  `bildaar_cnic` varchar(20) NOT NULL,
  `bildaar_type` varchar(15) NOT NULL,
  `bildaar_phone` varchar(20) NOT NULL,
  `bildaar_mail` varchar(50) NOT NULL,
  `bildaar_area` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `bildaar_pic` varchar(30) NOT NULL,
  `ssv_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bildaar`
--

INSERT INTO `bildaar` (`bildaar_id`, `bildaar_name`, `bildaar_cnic`, `bildaar_type`, `bildaar_phone`, `bildaar_mail`, `bildaar_area`, `start_date`, `end_date`, `bildaar_pic`, `ssv_id`) VALUES
(1, 'Ali', '220232048902348', 'Click Here to S', '03360097019', 'mustafakpk33@gmail.com', 'Bannu', '2021-03-11', '2021-03-05', '', 2),
(3, 'Adnan', '123', 'Driver', '12345', 'mail.com', 'abu', '2021-03-03', '2021-03-05', 'adsf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `container`
--

CREATE TABLE `container` (
  `cont_id` int(10) NOT NULL,
  `cont_name` varchar(50) NOT NULL,
  `cont_location` varchar(200) NOT NULL,
  `cont_distance` int(50) NOT NULL,
  `cont_distance1` int(50) NOT NULL,
  `cont_latitude` varchar(50) NOT NULL,
  `cont_longitude` varchar(50) NOT NULL,
  `cont_date` date NOT NULL,
  `cont_sen1` varchar(50) NOT NULL,
  `cont_sen2` varchar(50) NOT NULL,
  `cont_sen3` varchar(50) NOT NULL,
  `cont_width` varchar(10) DEFAULT NULL,
  `cont_height` varchar(10) DEFAULT NULL,
  `cont_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `container`
--

INSERT INTO `container` (`cont_id`, `cont_name`, `cont_location`, `cont_distance`, `cont_distance1`, `cont_latitude`, `cont_longitude`, `cont_date`, `cont_sen1`, `cont_sen2`, `cont_sen3`, `cont_width`, `cont_height`, `cont_status`) VALUES
(1, 'cont_name1', 'cont_location1', 111, 111, 'cont_latitude1', 'cont_longitude1', '2021-03-03', 'cont_sen11', 'cont_sen21', 'cont_sen31', 'cont_width', 'cont_heigh', 'cont_statu'),
(4, '22', 'Bannu', 56, 56, '56767', '5655', '0000-00-01', '34', '54', '6', '3', '4', '75%');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(10) NOT NULL,
  `c_id` int(10) NOT NULL,
  `ssv_id` int(10) NOT NULL,
  `report_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `location` varchar(50) NOT NULL,
  `report_status` enum('Active','Inprogress','Conpleted','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ssv`
--

CREATE TABLE `ssv` (
  `ssv_id` int(11) NOT NULL,
  `ssv_name` varchar(200) NOT NULL,
  `ssv_type` varchar(20) NOT NULL,
  `start_date` datetime NOT NULL,
  `ssv_phone` varchar(15) NOT NULL,
  `ssv_area` varchar(50) NOT NULL,
  `ssc_mail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ssv`
--

INSERT INTO `ssv` (`ssv_id`, `ssv_name`, `ssv_type`, `start_date`, `ssv_phone`, `ssv_area`, `ssc_mail`) VALUES
(1, 'arsalan', 'Click Here to Select', '0000-00-00 00:00:00', '  0341232 ', '  UET Mardan   ', '  abdulsamad31650@gmail.com  '),
(2, 'Abdul Samad Khan', 'Click Here to Select', '2021-01-10 08:11:25', ' 034119443951', 'Pakistan CHowk ', 'abdulsamad31650@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bildaar`
--
ALTER TABLE `bildaar`
  ADD PRIMARY KEY (`bildaar_id`),
  ADD KEY `ssv_id` (`ssv_id`);

--
-- Indexes for table `container`
--
ALTER TABLE `container`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `ssv`
--
ALTER TABLE `ssv`
  ADD PRIMARY KEY (`ssv_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bildaar`
--
ALTER TABLE `bildaar`
  MODIFY `bildaar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `container`
--
ALTER TABLE `container`
  MODIFY `cont_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ssv`
--
ALTER TABLE `ssv`
  MODIFY `ssv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bildaar`
--
ALTER TABLE `bildaar`
  ADD CONSTRAINT `ssv_id` FOREIGN KEY (`ssv_id`) REFERENCES `ssv` (`ssv_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
