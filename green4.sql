-- Adminer 4.6.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';

CREATE TABLE `appointments` (
  `appointment_no` int(30) NOT NULL AUTO_INCREMENT,
  `patient_id` int(30) NOT NULL,
  `speciality` varchar(30) NOT NULL,
  `medical_condition` text,
  `doctors_suggestion` varchar(30) DEFAULT NULL,
  `payment_amount` int(199) DEFAULT NULL,
  `case_closed` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`appointment_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `doctors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `speciality` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `nurse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `fullname` (`fullname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='stores information about nurse';


CREATE TABLE `patients` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `age` int(10) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `patient_info` (
  `patient_Id` int(20) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  `DOB` int(10) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `address` varchar(260) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='patient';


CREATE TABLE `receptionist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='stores information about receptionist';


CREATE TABLE `staff` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone no` int(10) NOT NULL,
  `user type` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 2018-10-29 15:39:10
