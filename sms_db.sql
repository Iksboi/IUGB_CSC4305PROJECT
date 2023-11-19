-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 07:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `u_id` varchar(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `admin_creat_date` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `admin_update_date` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`u_id`, `username`, `password`, `fname`, `lname`, `date_of_birth`, `admin_creat_date`, `admin_update_date`) VALUES
('084706', 'Yeke', 'pedale01*', 'Yanis', 'Kiema', '2001-06-19', '2023-11-19 15:16:04.000000', '2023-11-19 16:45:55.000000'),
('085396', 'Galen', 'Loinvoyant=mort', 'Galen', 'Loinvoyant', '1636-05-21', '2023-11-19 17:57:27.000000', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_crea_date` datetime(6) NOT NULL,
  `course_description` varchar(255) NOT NULL,
  `admin_uid` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(6) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `student_creat_date` date NOT NULL,
  `u_id` int(6) NOT NULL,
  `student_update_date` datetime(6) DEFAULT NULL,
  `lname` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `username`, `password`, `fname`, `date_of_birth`, `student_creat_date`, `u_id`, `student_update_date`, `lname`) VALUES
(104748, 'Test', 'Pass', 'Hassan', '1989-02-12', '2023-11-19', 0, '2023-11-19 17:51:45.000000', 'II Vérité Loinvoyant');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `u_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `teacher_creat_date` date NOT NULL,
  `lname` varchar(55) NOT NULL,
  `teacher_update_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`u_id`, `username`, `password`, `fname`, `teacher_creat_date`, `lname`, `teacher_update_date`) VALUES
(92123, 'Umbre', 'TombedansLabime', 'Umbre', '2023-11-19', 'Tombétoile', NULL),
(9931095, 'teacher', 'SexEducztip,', 'Tom', '2023-11-19', 'jedusor', '2023-11-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`u_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
