-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 02:30 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `_id` int(10) NOT NULL,
  `name_first` varchar(255) DEFAULT NULL,
  `name_middle` varchar(255) DEFAULT NULL,
  `name_last` varchar(255) DEFAULT NULL,
  `admin_username` varchar(255) DEFAULT NULL,
  `admin_password` varchar(255) DEFAULT NULL,
  `admin_email` varchar(255) DEFAULT NULL,
  `admin_profile` varchar(500) NOT NULL,
  `admin_default_profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`_id`, `name_first`, `name_middle`, `name_last`, `admin_username`, `admin_password`, `admin_email`, `admin_profile`, `admin_default_profile`) VALUES
(1, 'emmanuel', 'tanudra', 'delfino', 'admineman', 'password', 'emmanueltanudra@yahoo.com', '../assets/img/pup.jpg', '2eadc7');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `database_id` int(255) NOT NULL,
  `student_lastname` varchar(255) NOT NULL,
  `student_firstname` varchar(255) NOT NULL,
  `student_middlename` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_phone` varchar(255) NOT NULL,
  `student_brgy` varchar(255) NOT NULL,
  `student_city` varchar(255) NOT NULL,
  `student_status` varchar(255) NOT NULL,
  `register_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`database_id`, `student_lastname`, `student_firstname`, `student_middlename`, `student_email`, `student_phone`, `student_brgy`, `student_city`, `student_status`, `register_date`) VALUES
(3, 'shing', 'wazing', 'wa', 'wazingwash', '0909229290', 'north fairview', 'quezon city', 'registered', '2021-06-03'),
(4, 'shing', 'wazing', 'wa', 'wazingwash', '0909229290', 'commonwealth', 'quezon city', 'pending', '2021-06-03'),
(5, 'qoute', 'mandu ', 'rue', 'mandurueqo', '1234567890', 'mybarangay', 'mycity', 'pending', '2021-06-03'),
(6, 'gelotin', 'elizabeth', 'delos reyes', 'elizabeth@', '1234567890', 'tuego', 'chooks', 'pending', '2021-06-09'),
(7, 'delfino', 'elizabeth', 'gelotin', 'delfino@yahoo.com', '12345678901', 'brgyjhin', 'gaijin', 'registered', '2021-06-05'),
(8, 'delfino', 'sabrina', 'gelotin', 'gelotin@yahoo.com', '12345678901', 'spew', 'pewm', 'pending', '2021-06-15'),
(9, 'delfino', 'clyde ', 'gelotin', 'clyde@yahoo.com', '12345678901', 'bagong silang', 'quezon city', 'registered', '2021-06-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`database_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `database_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
