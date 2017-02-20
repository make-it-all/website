-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2017 at 11:19 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `make-it-new`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `calls`
--

CREATE TABLE `calls` (
  `id` int(11) UNSIGNED NOT NULL,
  `operator_id` int(11) UNSIGNED DEFAULT NULL,
  `caller_id` int(11) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `calls`
--

INSERT INTO `calls` (`id`, `operator_id`, `caller_id`, `description`) VALUES
(1, 2, 6, ''),
(2, 4, 8, ''),
(3, 4, 7, ''),
(4, 4, 7, ''),
(5, 2, 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `personnel`
--

CREATE TABLE `personnel` (
  `id` int(11) UNSIGNED NOT NULL,
  `personnel_identifier` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `job_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `branch_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `personnel`
--

INSERT INTO `personnel` (`id`, `personnel_identifier`, `name`, `job_title`, `email`, `telephone_number`, `branch_id`, `department_id`) VALUES
(1, '165165', 'Alice', 'Senior Operator', 'alice@make.com', '0531234122', 1, 6),
(2, '124456', 'Bob', 'Operator', 'bob@make.com', '01234463623', 2, 6),
(3, '456678', 'Mark', 'Secretary', 'mark@make.com', '0146431246', 3, 5),
(4, '973568', 'Jack', 'Accountant', 'jack@make.com', '01234014045', 4, 4),
(5, 'B09867', 'James', 'Cleaner', 'James@make.com', '0123402350345', 5, 9),
(6, 'M785675', 'Sarah', 'Admin', 'sarah@make.com', '012305214', 1, 7),
(7, 'GHN456', 'Laura', 'Specialist', 'laura@make.com', '012404601234', 2, 2),
(8, 'BO33', 'Bossman', 'Boss', 'boss@make.com', '012405125', 3, 7),
(9, 'ASC235', 'Generic Employee 1', 'Personnel Manager', 'ge1@make.com', '012405324', 4, 7),
(10, '23576BBE', 'Tiffany', 'Head of Marketing', 'tiffany@make.com', '012405301', 5, 3),
(11, '1452124', 'Tom', 'Operator', 'tom@make.com', '0123054322', 1, 6),
(12, 'GHT2343', 'Greg', 'Lead Admin', 'greg@make.com', '0145632412', 2, 7),
(13, 'GHJ234756', 'Lily', 'Temp Admin', 'lily@make.com', '012344235', 3, 7),
(14, '12435423', 'Rob', 'Specialist', 'Rob@make.com', '013403521', 4, 2),
(15, 'E2356', 'Alex', 'Senior Specialist', 'alex@make.com', '03450763354', 5, 7);

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE `problems` (
  `id` int(11) UNSIGNED NOT NULL,
  `call_id` int(11) UNSIGNED NOT NULL,
  `submitted_by` int(11) UNSIGNED DEFAULT NULL,
  `assigned_to` int(11) UNSIGNED DEFAULT NULL,
  `worked_on` tinyint(1) NOT NULL DEFAULT '0',
  `solution_id` int(11) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `subject` text COLLATE utf8_unicode_ci,
  `keywords` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`id`, `call_id`, `submitted_by`, `assigned_to`, `worked_on`, `solution_id`, `description`, `subject`, `keywords`) VALUES
(1, 0, 2, 10, 1, 3, NULL, NULL, NULL),
(2, 0, 6, 9, 0, 0, NULL, NULL, NULL),
(3, 0, 5, 8, 1, 5, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `solutions`
--

CREATE TABLE `solutions` (
  `id` int(11) UNSIGNED NOT NULL,
  `provided_by` int(11) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `solutions`
--

INSERT INTO `solutions` (`id`, `provided_by`, `description`) VALUES
(1, 1, NULL),
(2, 9, NULL),
(3, 9, NULL),
(4, 10, NULL),
(5, 8, NULL),
(6, 10, NULL),
(7, 8, NULL),
(8, 1, NULL),
(9, 9, NULL),
(10, 8, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `specializations`
--

CREATE TABLE `specializations` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `specializations`
--

INSERT INTO `specializations` (`id`, `name`) VALUES
(1, 'Windows Operating Systems'),
(2, 'Microsoft Word/Excel'),
(3, 'Windows Registry Problems'),
(4, 'Printer Malfunctions'),
(5, 'Driver Configuration'),
(6, 'Linux'),
(7, 'Ubuntu'),
(8, 'File Recovery'),
(9, 'Network Configuration'),
(10, 'Corrupted User Profiles');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_digest` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `personnel_id` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password_digest`, `personnel_id`) VALUES
(1, 'Henry', 'henry@make.com', 'pass123', NULL),
(2, 'Alice', 'alice@make.com', 'pass124', 1),
(3, 'Bob', 'bob@make.com', 'pass125', 2),
(4, 'Tom', 'tom@make.com', 'pass654', 11),
(5, 'Greg', 'greg@make.com', 'pass4568', 12),
(6, 'Sarah', 'sarah@make.com', 'pass1568', 6),
(7, 'Lily', 'lily@make.com', 'pass875', 13),
(8, 'Rob', 'rob@make.com', 'pass685', 14),
(9, 'Laura', 'laura@make.com', 'pass014', 7),
(10, 'Alex', 'alex@make.com', 'pass415263', 15),
(11, 'ح', '', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calls`
--
ALTER TABLE `calls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `operator_id` (`operator_id`),
  ADD KEY `caller_id` (`caller_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personnel_id` (`personnel_identifier`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `problems`
--
ALTER TABLE `problems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `submitted_by` (`submitted_by`),
  ADD KEY `assigned_to` (`assigned_to`),
  ADD KEY `solution_id` (`solution_id`);

--
-- Indexes for table `solutions`
--
ALTER TABLE `solutions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provided_by` (`provided_by`);

--
-- Indexes for table `specializations`
--
ALTER TABLE `specializations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `personnel_id` (`personnel_id`),
  ADD KEY `email_2` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calls`
--
ALTER TABLE `calls`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `personnel`
--
ALTER TABLE `personnel`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `problems`
--
ALTER TABLE `problems`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `solutions`
--
ALTER TABLE `solutions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `specializations`
--
ALTER TABLE `specializations`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
