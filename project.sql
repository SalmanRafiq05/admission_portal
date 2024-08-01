-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2024 at 04:25 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `first`
--

CREATE TABLE `first` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `first`
--

INSERT INTO `first` (`id`, `email`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'areeha@gmail.com', '123', 1, '2023-12-13 10:13:25', '2023-12-13 10:13:25'),
(2, 'areeha@gmail.com', '123', 1, '2023-12-13 10:13:50', '2023-12-13 10:13:50'),
(3, 'ali@gmail.com', '876', 1, '2023-12-13 10:25:28', '2023-12-13 10:25:28'),
(4, 'zeeshan@gmail.com', '12345', 1, '2023-12-13 23:09:22', '2023-12-13 23:09:22'),
(5, 'abc@gmail.com', '123', 1, '2023-12-14 00:29:05', '2023-12-14 00:29:05'),
(6, 'sara@gmail.com', '4321', 1, '2023-12-14 06:43:04', '2023-12-14 06:43:04'),
(7, 'zeeshan@gmail.com', '321', 1, '2023-12-14 08:46:14', '2023-12-14 08:46:14'),
(8, 'zin@gmail.com', 'as12', 1, '2023-12-14 09:03:46', '2023-12-14 09:03:46'),
(9, 'saim@gmail.com', '123', 1, '2023-12-25 07:57:54', '2023-12-25 07:57:54'),
(10, 'areeha@gmail.com', '@ariha12', 1, '2023-12-27 10:41:43', '2023-12-27 10:41:43'),
(11, 'irfan@gmail.com', '1234', 1, '2023-12-27 10:42:03', '2023-12-27 10:42:03'),
(12, 'Areeha@gmail.com', '@ariha12', 1, '2023-12-29 08:30:27', '2023-12-29 08:30:27'),
(13, 'ali@gmail.com', '1234', 1, '2024-01-01 07:20:50', '2024-01-01 07:20:50');

-- --------------------------------------------------------

--
-- Table structure for table `guardian`
--

CREATE TABLE `guardian` (
  `id` int(11) NOT NULL,
  `guardian_name` varchar(50) DEFAULT NULL,
  `guardian_occupation` varchar(50) DEFAULT NULL,
  `guardian_cnic` int(50) DEFAULT NULL,
  `guardian_relation` varchar(50) DEFAULT NULL,
  `guardian_income` int(50) DEFAULT NULL,
  `guardian_number` int(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guardian`
--

INSERT INTO `guardian` (`id`, `guardian_name`, `guardian_occupation`, `guardian_cnic`, `guardian_relation`, `guardian_income`, `guardian_number`, `created_at`, `updated_at`) VALUES
(1, 'name', 'occupation', 0, 'relation', 0, 0, '2023-12-25 17:05:13', '2023-12-25 17:05:13'),
(2, 'name', 'occupation', 0, 'relation', 0, 0, '2023-12-25 17:06:29', '2023-12-25 17:06:29'),
(3, 'name', 'occupation', 0, 'relation', 0, 0, '2023-12-25 17:09:17', '2023-12-25 17:09:17'),
(4, 'name', 'occupation', 0, 'relation', 0, 0, '2023-12-25 17:15:54', '2023-12-25 17:15:54'),
(5, 'abc', 'abc', 123456789, 'abc', 123, 123456789, '2023-12-25 17:20:08', '2023-12-25 17:20:08');

-- --------------------------------------------------------

--
-- Table structure for table `higher`
--

CREATE TABLE `higher` (
  `id` int(11) NOT NULL,
  `inter_board` varchar(255) DEFAULT NULL,
  `inter_certificate` varchar(255) DEFAULT NULL,
  `ag` varchar(50) DEFAULT NULL,
  `district` varchar(25) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `higher`
--

INSERT INTO `higher` (`id`, `inter_board`, `inter_certificate`, `ag`, `district`, `subject`, `created_at`, `updated_at`) VALUES
(1, 'abc', 'lahore', '2021-ag-8079', 'skp', 'maths', '2023-12-25 19:41:51', '2023-12-25 19:41:51'),
(2, 'abc', 'lahore', '2021-ag-8079', 'skp', 'maths', '2023-12-25 19:47:57', '2023-12-25 19:47:57'),
(3, '', '', '', '', '', '2023-12-25 19:51:30', '2023-12-25 19:51:30');

-- --------------------------------------------------------

--
-- Table structure for table `mailing`
--

CREATE TABLE `mailing` (
  `id` int(11) NOT NULL,
  `current_address` varchar(255) DEFAULT NULL,
  `current_no` int(255) DEFAULT NULL,
  `current_police` varchar(255) DEFAULT NULL,
  `permanent_address` varchar(25) DEFAULT NULL,
  `permanent_no` int(255) DEFAULT NULL,
  `permanent_police` int(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mailing`
--

INSERT INTO `mailing` (`id`, `current_address`, `current_no`, `current_police`, `permanent_address`, `permanent_no`, `permanent_police`, `created_at`, `updated_at`) VALUES
(1, 'w block', 123, 'lahore', 'w block', 123, 0, '2023-12-25 18:00:04', '2023-12-25 18:00:04');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `dob` int(20) DEFAULT NULL,
  `residence` varchar(50) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `phone` int(50) DEFAULT NULL,
  `hafiz` varchar(50) DEFAULT NULL,
  `father` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `blood` varchar(255) DEFAULT NULL,
  `cell` int(255) DEFAULT NULL,
  `passport` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `name`, `dob`, `residence`, `nationality`, `phone`, `hafiz`, `father`, `gender`, `religion`, `blood`, `cell`, `passport`, `created_at`, `updated_at`) VALUES
(1, 'abc', 2023, 'Urban', 'pakistani', 12345678, 'yes', 'abc', 'male', 'muslim', '', 1234567, '1234567778', '2023-12-29 18:31:19', '2023-12-29 18:31:19');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `confirm_email` varchar(255) DEFAULT NULL,
  `cnic` int(20) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `confirm_password` varchar(10) DEFAULT NULL,
  `verify_code` varchar(5) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `email`, `confirm_email`, `cnic`, `password`, `confirm_password`, `verify_code`, `created_at`, `updated_at`) VALUES
(1, 'ali@gmail.com', 'ali@gmail.com', 123456787, '1234', '1234', '0987', '2023-12-14 08:36:06', '2023-12-14 08:36:06'),
(2, 'ali@gmail.com', 'ali@gmail.com', 1234567, '123', '123', '0987', '2023-12-14 08:36:35', '2023-12-14 08:36:35'),
(3, 'zeeshan@gmail.com', 'zeeshan@gmail.com', 123455678, '0000', '0000', '1122', '2023-12-14 08:42:27', '2023-12-14 08:42:27'),
(4, 'irfan@gmail.com', 'irfan@gmail.com', 7654321, '0099', '0099', '1122', '2023-12-14 08:43:51', '2023-12-14 08:43:51');

-- --------------------------------------------------------

--
-- Table structure for table `secondry`
--

CREATE TABLE `secondry` (
  `id` int(11) NOT NULL,
  `school_name` varchar(255) DEFAULT NULL,
  `school_address` varchar(255) DEFAULT NULL,
  `tehsil` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `town` varchar(50) DEFAULT NULL,
  `board` varchar(50) DEFAULT NULL,
  `certificate` varchar(50) DEFAULT NULL,
  `subjects` varchar(255) DEFAULT NULL,
  `year` varchar(50) DEFAULT NULL,
  `roll_no` int(50) DEFAULT NULL,
  `t_marks` int(50) DEFAULT NULL,
  `o_marks` int(50) DEFAULT NULL,
  `grade` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `secondry`
--

INSERT INTO `secondry` (`id`, `school_name`, `school_address`, `tehsil`, `district`, `town`, `board`, `certificate`, `subjects`, `year`, `roll_no`, `t_marks`, `o_marks`, `grade`, `created_at`, `updated_at`) VALUES
(1, 'abc', 'skp', 'skp', 'skp', 'town', 'lahore', '12as', 'asdfg', '2019', 12345, 1100, 1013, 'A', '2023-12-29 16:54:35', '2023-12-29 16:54:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `first`
--
ALTER TABLE `first`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guardian`
--
ALTER TABLE `guardian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `higher`
--
ALTER TABLE `higher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mailing`
--
ALTER TABLE `mailing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secondry`
--
ALTER TABLE `secondry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `first`
--
ALTER TABLE `first`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `guardian`
--
ALTER TABLE `guardian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `higher`
--
ALTER TABLE `higher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mailing`
--
ALTER TABLE `mailing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `secondry`
--
ALTER TABLE `secondry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
