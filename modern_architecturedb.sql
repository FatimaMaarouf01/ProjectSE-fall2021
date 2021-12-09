-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 04:02 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modern_architecturedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointment_id` int(11) NOT NULL,
  `day` varchar(16) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `hour` varchar(64) NOT NULL,
  `availability` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointment_id`, `day`, `date`, `name`, `hour`, `availability`) VALUES
(1000, 'Monday', '2022-01-03', '', '9:00 am - 10:00 am', 0),
(1001, 'Monday', '2022-01-03', '', '2:00 pm - 3:00 pm', 0),
(1002, 'Wednesday', '2022-01-05', '', '9:00 am - 10:00 am', 0),
(1003, 'Wednesday', '2022-01-05', '', '2:00 pm - 3:00 pm', 0),
(1004, 'Friday', '2022-01-07', '', '9:00 am - 10:00 am', 0),
(1005, 'Friday', '2022-01-07', '', '2:00 pm - 3:00 pm', 0),
(1006, 'Monday', '2022-01-10', '', '9:00 am - 10:00 am', 0),
(1007, 'Monday', '2022-01-10', '', '2:00 pm - 3:00 pm', 0),
(1008, 'Wednesday', '2022-01-12', '', '9:00 am - 10:00 am', 0),
(1009, 'Wednesday', '2022-01-12', '', '2:00 pm - 3:00 pm', 0),
(1010, 'Friday', '2022-01-14', '', '9:00 am - 10:00 am', 0),
(1011, 'Friday', '2022-01-14', '', '2:00 pm - 3:00 pm', 0),
(1012, 'Monday', '2022-01-17', '', '9:00 am - 10:00 am', 0),
(1013, 'Monday', '2022-01-17', '', '2:00 pm - 3:00 pm', 0),
(1014, 'Wednesday', '2022-01-19', '', '9:00 am - 10:00 am', 0),
(1015, 'Wednesday', '2022-01-19', '', '2:00 pm - 3:00 pm', 0),
(1016, 'Friday', '2022-01-21', '', '9:00 am - 10:00 am', 0),
(1017, 'Friday', '2022-01-21', '', '2:00 pm - 3:00 pm', 0),
(1018, 'Monday', '2022-01-24', '', '9:00 am - 10:00 am', 0),
(1019, 'Monday', '2022-01-24', '', '2:00 pm - 3:00 pm', 0),
(1020, 'Wednesday', '2022-01-26', '', '9:00 am - 10:00 am', 0),
(1021, 'Wednesday', '2022-01-26', '', '2:00 pm - 3:00 pm', 0),
(1022, 'Friday', '2022-01-28', '', '9:00 am - 10:00 am', 0),
(1023, 'Friday', '2022-01-28', '', '2:00 pm - 3:00 pm', 0),
(1024, 'Monday', '2022-01-31', '', '9:00 am - 10:00 am', 0),
(1025, 'Monday', '2022-01-31', '', '2:00 pm - 3:00 pm', 0),
(1026, 'Wednesday', '2022-02-02', '', '9:00 am - 10:00 am', 0),
(1027, 'Wednesday', '2022-02-02', '', '2:00 pm - 3:00 pm', 0),
(1028, 'Friday', '2022-02-04', '', '9:00 am - 10:00 am', 0),
(1029, 'Friday', '2022-02-04', '', '2:00 pm - 3:00 pm', 0),
(1030, 'Monday', '2022-02-07', '', '9:00 am - 10:00 am', 0),
(1031, 'Monday', '2022-02-07', '', '2:00 pm - 3:00 pm', 0),
(1032, 'Wednesday', '2022-02-09', '', '9:00 am - 10:00 am', 0),
(1033, 'Wednesday', '2022-02-09', '', '2:00 pm - 3:00 pm', 0),
(1034, 'Friday', '2022-02-11', '', '9:00 am - 10:00 am', 0),
(1035, 'Friday', '2022-02-11', '', '2:00 pm - 3:00 pm', 0),
(1036, 'Monday', '2022-02-14', '', '9:00 am - 10:00 am', 0),
(1037, 'Monday', '2022-02-14', '', '2:00 pm - 3:00 pm', 0),
(1038, 'Wednesday', '2022-02-16', '', '9:00 am - 10:00 am', 0),
(1039, 'Wednesday', '2022-02-16', '', '2:00 pm - 3:00 pm', 0),
(1040, 'Friday', '2022-02-18', '', '9:00 am - 10:00 am', 0),
(1041, 'Friday', '2022-02-18', '', '2:00 pm - 3:00 pm', 0),
(1042, 'Monday', '2022-02-21', '', '9:00 am - 10:00 am', 0),
(1043, 'Monday', '2022-02-21', '', '2:00 pm - 3:00 pm', 0),
(1044, 'Wednesday', '2022-02-23', '', '9:00 am - 10:00 am', 0),
(1045, 'Wednesday', '2022-02-23', '', '2:00 pm - 3:00 pm', 0),
(1046, 'Friday', '2022-02-25', '', '9:00 am - 10:00 am', 0),
(1047, 'Friday', '2022-02-25', '', '2:00 pm - 3:00 pm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cvs`
--

CREATE TABLE `cvs` (
  `cv_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `type` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cv_attachment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `feedback_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `attachment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(255) NOT NULL,
  `user_type_id` int(11) NOT NULL,
  `monthly_salary` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `dob`, `phone`, `user_type_id`, `monthly_salary`, `username`, `password`) VALUES
(20, 'Mamdouh', 'Amer', 'modern.architecture@gmail.com', '1975-06-22', '+961 03811925', 1, 5000, 'mamdouh.amer', '47bff11d47a687563176ada832d623e832b6b252adc637d777b6b3757f1c8d35');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `type_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`type_id`, `type`) VALUES
(1, 'Manager'),
(2, 'Employee\r\n'),
(3, 'Intern\r\n'),
(4, 'Authorized Employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `cvs`
--
ALTER TABLE `cvs`
  ADD PRIMARY KEY (`cv_id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1048;

--
-- AUTO_INCREMENT for table `cvs`
--
ALTER TABLE `cvs`
  MODIFY `cv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=800;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
