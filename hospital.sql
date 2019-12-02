-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 07:26 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `attends`
--

CREATE TABLE `attends` (
  `patient_email` varchar(11) NOT NULL,
  `doctor_email` varchar(36) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `patient_email` varchar(36) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `pharma_code` varchar(30) NOT NULL,
  `Date` datetime NOT NULL,
  `Status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `sex` char(1) NOT NULL,
  `blood_group` varchar(3) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `doctor_img` blob,
  `password` text NOT NULL,
  `qualification` longtext NOT NULL,
  `category` varchar(36) NOT NULL,
  `fees` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`first_name`, `last_name`, `sex`, `blood_group`, `email_id`, `doctor_img`, `password`, `qualification`, `category`, `fees`) VALUES
('Dinesh', 'Hardasani', 'm', 'O-', 'dineshhardasani2000@gmail.com', 0x75706c6f6164732f646f63746f72322e6a7067, '$2y$10$uFNW9fXSSiIhutCdpA7Et.2KScKhsb0kBUc8TzVNcC3bRXX73iN7m', 'MBBS', 'surgeon', 300),
('Pranali', 'Sharma', 'm', 'B+', 'harsh@gmail.com', 0x75706c6f6164732f70686f746f2d313535393833393733342d3262373165613139376563322e6a7067, '$2y$10$XKzPevOR06fRuL7mnKA10uzdDfzLbIOCVJxs..4psVsCfSanCEX8.', 'MBBS', 'nephrologist', 500),
('Rajat', 'Sharma', 'm', 'B+', 'rajat@gmail.com', 0x75706c6f6164732f70686f746f2d313535393833393733342d3262373165613139376563322e6a7067, '$2y$10$zjRn1wiFSt.NjLjArA8M8.U96bdqBqvT16a8DktihxJLPwy3kDVWu', 'MBBS', 'oncologist', 400),
('Reena', 'Yadav', 'f', 'A-', 'reena@gmail.com', 0x75706c6f6164732f6161342e6a7067, '$2y$10$JK5hMqR2OkbkW7YXCnx0R.RMwmkFA8QMsBaDx6GivRp9G.NwW.aLm', 'MD', 'radiologist', 0),
('Rina', 'Sharma', 'f', 'A+', 'rina@gmail.com', 0x75706c6f6164732f6161312e6a7067, '$2y$10$OLxbsKy1WpSzBkMQ/l7FL.9R7nbjBCth6JU7wa1jqrukgyyJRkCfy', 'MD', 'orthopedist', 300);

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `pharma_code` varchar(36) NOT NULL,
  `name` varchar(36) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`pharma_code`, `name`, `amount`) VALUES
('B201', 'Cold', 45),
('B202', 'Cough', 50),
('B301', 'Complain', 50),
('B302', 'Asprin', 20),
('D301', 'Paracetamol', 10),
('D302', 'LICFREE-CT', 125);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `sex` char(1) NOT NULL,
  `blood_group` varchar(3) NOT NULL,
  `admit_date` date DEFAULT NULL,
  `discharge_date` date DEFAULT NULL,
  `Patient_email` varchar(36) NOT NULL,
  `Password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`first_name`, `last_name`, `sex`, `blood_group`, `admit_date`, `discharge_date`, `Patient_email`, `Password`) VALUES
('Dinesh', 'Hardasani', 'm', 'B+', NULL, NULL, '2018081@iiitdmj.ac.in', '$2y$10$mk46K15AkrSXx8U0EThaqe55dPRIJBgGEHHz0wn/UpT1tR63tdpx2'),
('Admin', 'Sharma', 'm', 'B+', NULL, NULL, 'admin@gmail.com', '$2y$10$NtEJ0/kcYbFejgEVFlKIrun7xS4V5PHsTg4eekzbagG81MzK0oj7m'),
('Tarang', 'Khetan', 'm', 'O-', NULL, NULL, '2018383@iiitdmj.ac.in', '$2y$10$Cp7quDMv7B3CuVN.DTJTouxZMlD7.L0vX5Jb8X0.T4LskiYLXHgsS');

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE `receptionist` (
  `receptionist_id` int(11) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `sex` char(1) NOT NULL,
  `join_date` date NOT NULL,
  `salary` int(11) NOT NULL,
  `email` varchar(36) NOT NULL,
  `password` varchar(36) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`receptionist_id`, `first_name`, `last_name`, `sex`, `join_date`, `salary`, `email`, `password`) VALUES
(1, 'Dinesh', 'Hardasani', 'M', '2019-11-12', 1400000, 'receptionist@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `record_no` int(11) NOT NULL,
  `patient_email` varchar(36) NOT NULL,
  `doctor_email` varchar(36) NOT NULL,
  `admit_date` date NOT NULL,
  `discharge_date` date DEFAULT NULL,
  `patient_name` varchar(36) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attends`
--
ALTER TABLE `attends`
  ADD PRIMARY KEY (`patient_email`,`doctor_email`,`date`),
  ADD KEY `doctor_id` (`doctor_email`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`patient_email`,`pharma_code`,`Date`),
  ADD KEY `pharma_code` (`pharma_code`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`pharma_code`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Patient_email`);

--
-- Indexes for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD PRIMARY KEY (`receptionist_id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`record_no`,`patient_email`,`doctor_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `receptionist`
--
ALTER TABLE `receptionist`
  MODIFY `receptionist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `record_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`pharma_code`) REFERENCES `medicine` (`pharma_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
