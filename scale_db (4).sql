-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 08:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scale_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities_tbl`
--

CREATE TABLE `activities_tbl` (
  `a_id` int(11) NOT NULL,
  `u_subdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `a_title` varchar(255) NOT NULL,
  `a_description` text NOT NULL,
  `a_strand_s` varchar(255) NOT NULL,
  `a_strand_c` varchar(255) NOT NULL,
  `a_strand_a` varchar(255) NOT NULL,
  `a_strand_l` varchar(255) NOT NULL,
  `a_type` varchar(255) NOT NULL,
  `a_start` varchar(255) NOT NULL,
  `a_end` varchar(255) NOT NULL,
  `a_submission` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `u_id` int(11) NOT NULL,
  `a_sa_name` varchar(255) NOT NULL,
  `a_status` varchar(255) NOT NULL,
  `a_sa_remarks` varchar(255) NOT NULL,
  `a_sa_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activities_tbl`
--

INSERT INTO `activities_tbl` (`a_id`, `u_subdate`, `a_title`, `a_description`, `a_strand_s`, `a_strand_c`, `a_strand_a`, `a_strand_l`, `a_type`, `a_start`, `a_end`, `a_submission`, `u_id`, `a_sa_name`, `a_status`, `a_sa_remarks`, `a_sa_date`) VALUES
(1, '2024-05-22 08:01:34', 'STEMinar', '		STEMinar is a research webinar that aims to aid lower batches in their current or upcoming research subject. The presenters during the event will be research groups from batch 2023, while the target audience are\r\nbatch 2024 and batch 2025.	', '1', '1', '1', '1', 'G', '2024-04-21', '2024-05-21', '2024-05-21 01:30:53', 4, '0', 'Pending', '0', '0'),
(2, '2024-05-22 08:01:34', 'HAFY COOKING Show', 'Healthy and Affordable For You	', '1', '1', '0', '1', 'I', '2024-05-20', '2024-06-01', '2024-05-21 01:35:37', 4, '0', 'Pending', '0', '0'),
(3, '2024-05-22 08:15:54', 'Skibidi Toilet Convention', 'A convention for all skibidi sigmas to meet and outmog each other. Gooners are not allowed', '1', '1', '0', '1', 'G', '2024-05-22', '2024-05-24', '2024-05-22 08:15:54', 1, '0', 'Pending', '0', '0'),
(4, '2024-05-22 08:16:42', 'Obama visits PSHS CLC', 'OBAMA', '1', '0', '0', '0', 'I', '2024-05-17', '2024-05-17', '2024-05-22 08:16:42', 1, '0', 'Pending', '0', '0'),
(5, '2024-05-21 16:00:00', 'Rizzmas Party', 'Christmas party for all the skibidi rizzlers', '0', '0', '0', '0', 'G', '2024-12-20', '2024-12-20', '2024-05-22 08:38:40', 1, '0', 'Pending', '0', '0'),
(6, '2024-05-14 16:00:00', 'Ohio Fieldtrip with Osaka', 'America Yaaa', 'S', 'C', 'A', 'L', 'I', '2024-05-24', '2024-05-24', '2024-05-22 08:40:52', 1, '0', 'Pending', '0', '0'),
(7, '2024-04-30 16:00:00', 'HAHA FUNNY', 'FUNNY', '0', '0', '1', '0', 'I', '2024-05-09', '2024-05-09', '2024-05-23 04:04:48', 8, '0', 'Pending', '0', '0'),
(8, '2024-04-30 16:00:00', 'HAHA FUNNY', 'FUNNY', '0', '0', '1', '0', 'I', '2024-05-09', '2024-05-09', '2024-05-23 04:05:45', 8, '0', 'Pending', '0', '0'),
(9, '2024-05-22 16:00:00', 'bruh meme', 'bruh', '0', 'C', '1', 'L', 'I', '2024-05-31', '2024-05-31', '2024-05-23 04:06:19', 8, '0', 'Pending', '0', '0'),
(10, '2024-05-22 16:00:00', 'HAHA FUNNY', 'haha', '0', 'C', '1', '0', 'I', '2024-05-30', '2024-05-30', '2024-05-23 04:07:27', 8, '0', 'Pending', '0', '0'),
(11, '2024-05-22 16:00:00', 'Galvanized Square Steel Frame', 'Eco-friendly wood veneers', '0', 'C', 'A', '0', 'I', '2024-05-31', '2024-05-31', '2024-05-23 05:24:24', 4, '0', 'Pending', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `sin_clubs_tbl`
--

CREATE TABLE `sin_clubs_tbl` (
  `sin_id` int(11) NOT NULL,
  `sin_name` varchar(255) NOT NULL,
  `sin_position` varchar(255) NOT NULL,
  `sin_length` int(11) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sin_clubs_tbl`
--

INSERT INTO `sin_clubs_tbl` (`sin_id`, `sin_name`, `sin_position`, `sin_length`, `u_id`) VALUES
(1, 'Japanese Culture', 'Member', 2022, 4),
(2, 'Turing', 'Member', 2023, 4),
(3, 'Boys Badminton Club (BBC)', 'Member', 2021, 4);

-- --------------------------------------------------------

--
-- Table structure for table `sout_clubs_tbl`
--

CREATE TABLE `sout_clubs_tbl` (
  `sout_id` int(11) NOT NULL,
  `sout_name` varchar(255) NOT NULL,
  `sout_position` varchar(255) NOT NULL,
  `sout_length` int(11) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sout_clubs_tbl`
--

INSERT INTO `sout_clubs_tbl` (`sout_id`, `sout_name`, `sout_position`, `sout_length`, `u_id`) VALUES
(1, 'Japanese Community', 'Member', 2022, 4),
(2, 'Skibidi Rizzlers Sigma Alpha Phi Skeptron Brotherhood', 'Grandmaster', 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users_info_tbl`
--

CREATE TABLE `users_info_tbl` (
  `ui_id` int(11) NOT NULL,
  `ui_batch` varchar(255) NOT NULL,
  `ui_grade` int(11) NOT NULL,
  `ui_section` varchar(255) NOT NULL,
  `u_id` int(11) NOT NULL,
  `ui_position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_info_tbl`
--

INSERT INTO `users_info_tbl` (`ui_id`, `ui_batch`, `ui_grade`, `ui_section`, `u_id`, `ui_position`) VALUES
(1, '2025', 11, 'Pascal A', 4, 'Student'),
(2, '2025', 11, 'Pascal A', 3, 'Scale Adviser'),
(3, '2025', 11, 'Curie A', 8, 'Student'),
(4, '2025', 11, 'Curie B', 9, 'Scale Adviser'),
(5, '2025', 11, 'Pascal A', 4, ''),
(6, '2025', 11, 'Pascal A', 4, ''),
(7, '2025', 11, 'Pascal A', 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `u_id` int(11) NOT NULL,
  `u_lname` varchar(255) NOT NULL,
  `u_fname` varchar(255) NOT NULL,
  `u_mname` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_pword` varchar(255) NOT NULL,
  `u_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`u_id`, `u_lname`, `u_fname`, `u_mname`, `u_email`, `u_pword`, `u_level`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@admin.com', 'admin', 0),
(2, 'pineda', 'adrian neil', 'p', 'appineda@clc.pshs.edu.ph', 'appineda', 1),
(3, 'cruz', 'mark paolo', 'm', 'mpmcruz@clc.pshs.edu.ph', 'mpmcruz', 2),
(4, 'cortez', 'adam niccol', '', 'acortez2025@clc.pshs.edu.ph', 'acortez2025', 3),
(8, 'Niro', 'Drake Joseph', 'Dizon', 'dniro2025@clc.pshs.edu.ph', 'dniro2025', 3),
(9, 'Gatus', 'Kevin Nicole', 'D', 'kdgatus@clc.pshs.edu.ph', 'kdgatus', 2),
(13, 'Mariano', 'Leri Mae', 'P', 'lpmariano@clc.pshs.edu.ph', 'lpmariano', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities_tbl`
--
ALTER TABLE `activities_tbl`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `sin_clubs_tbl`
--
ALTER TABLE `sin_clubs_tbl`
  ADD PRIMARY KEY (`sin_id`);

--
-- Indexes for table `sout_clubs_tbl`
--
ALTER TABLE `sout_clubs_tbl`
  ADD PRIMARY KEY (`sout_id`);

--
-- Indexes for table `users_info_tbl`
--
ALTER TABLE `users_info_tbl`
  ADD PRIMARY KEY (`ui_id`);

--
-- Indexes for table `users_tbl`
--
ALTER TABLE `users_tbl`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities_tbl`
--
ALTER TABLE `activities_tbl`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sin_clubs_tbl`
--
ALTER TABLE `sin_clubs_tbl`
  MODIFY `sin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sout_clubs_tbl`
--
ALTER TABLE `sout_clubs_tbl`
  MODIFY `sout_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users_info_tbl`
--
ALTER TABLE `users_info_tbl`
  MODIFY `ui_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
