-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2018 at 02:45 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointment_no` int(30) NOT NULL,
  `patient_id` int(30) NOT NULL,
  `speciality` varchar(30) NOT NULL,
  `medical_condition` text,
  `doctors_suggestion` varchar(30) DEFAULT NULL,
  `payment_amount` int(199) DEFAULT NULL,
  `case_closed` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointments`
--

-- INSERT INTO `appointments` (`speciality`, `medical_condition`, `doctors_suggestion`, `payment_amount`, `case_closed`) VALUES
-- ('Audiologist', 'help hello', NULL, NULL, 'no');
-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='stores information about nurse';

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`email`, `password`, `fullname`) VALUES
('nurse@nurse.com', 'nurse', 'nurse');


-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE `receptionist` (
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='stores information about receptionist';

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`email`, `password`, `fullname`) VALUES
('receptionist@receptionist.com', 'receptionist', 'receptionist');


-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `speciality` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctors`
--

-- INSERT INTO `doctors` (`email`, `password`, `fullname`, `speciality`) VALUES
-- ('doctor@doctor.com', 'admin', 'doctor', 'doctor'),
-- ('yugesh@gmail.com', '123456', 'Yugesh verma', 'Endocrinologist'),
-- ('yugeshverma32@gmail.com', '123456', 'Yugesh verma', 'Audiologist');

-- --------------------------------------------------------

--
-- Table structure for table `patient_info`
--

CREATE TABLE `patient_info` (
  `patient_Id` int(20) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  `DOB` int(10) NOT NULL,
  `phone_no` varchar(30) NOT NULL,
  `address` varchar(260) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='patient';

--
-- Dumping data for table `patient_info`
--

-- INSERT INTO `patient_info` (`patient_Id`, `full_name`, `DOB`,  `phone_no`, `address`) VALUES
-- (85, 'Yugesh verma', 22, '6263056779', '25 commercial complex, nehru nagar,east near vijya bank, bhilai C.G.'),
-- (86, 'Yugesh verma', 22, '6263056779', '25 commercial complex, nehru nagar,east near vijya bank, bhilai C.G.'),
-- (87, 'User', 52,'91650693741', '25 commercial complex, nehru nagar,east near vijya bank, bhilai C.G.'),
-- (88, 'Yugesh verma', 52,'6263056779', '25 commercial complex, nehru nagar,east near vijya bank, bhilai C.G.'),
-- (89, 'Customer', 25,'6263056779', '25 commercial complex, nehru nagar,east near vijya bank, bhilai C.G.');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `age` int(10) NOT NULL,
  `phone_no` int(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patients`
--

-- INSERT INTO `patients` (`firstname`, `lastname`, `address`) VALUES
-- ('customer@gmail.com', '123456', 'Customer'),
-- ('user@gmail.com', '123456', 'User'),
-- ('yugeshverma32@gmail.com', '123456', 'Yugesh verma');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_no`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD UNIQUE KEY `email` (`email`);


--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `patient_info`
--
ALTER TABLE `patient_info`
  ADD PRIMARY KEY (`patient_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `username` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointment_no` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `patient_info`
--
ALTER TABLE `patient_info`
  MODIFY `patient_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
