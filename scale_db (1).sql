-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 07:39 AM
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
-- Table structure for table `indiviudual_activity_tbl`
--

CREATE TABLE `indiviudual_activity_tbl` (
  `u_id` int(11) NOT NULL,
  `u_ownname` varchar(255) NOT NULL,
  `u_batch` varchar(255) NOT NULL,
  `u_adviser` varchar(255) NOT NULL,
  `u_activitytitle` varchar(255) NOT NULL,
  `u_type` varchar(255) NOT NULL,
  `u_strand` varchar(255) NOT NULL,
  `u_goals` varchar(255) NOT NULL,
  `u_pdstart` date NOT NULL,
  `u_pdend` date NOT NULL,
  `u_impdstart` date NOT NULL,
  `u_impdend` date NOT NULL,
  `u_venue` text NOT NULL,
  `u_gendesc` text NOT NULL,
  `u_objectives` text NOT NULL,
  `u_collabname` varchar(255) NOT NULL,
  `u_position` varchar(255) NOT NULL,
  `u_affiliation` varchar(255) NOT NULL,
  `u_contact` varchar(255) NOT NULL,
  `u_studentnames` varchar(255) NOT NULL,
  `u_activityrole` varchar(255) NOT NULL,
  `u_studentadviser` varchar(255) NOT NULL,
  `u_quantity` int(11) NOT NULL,
  `u_items` varchar(255) NOT NULL,
  `u_unitcost` int(11) NOT NULL,
  `u_amount` int(11) NOT NULL,
  `u_total` int(11) NOT NULL,
  `u_risks` text NOT NULL,
  `u_precautions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proposalform_tbl`
--

CREATE TABLE `proposalform_tbl` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_adviser` varchar(255) NOT NULL,
  `u_submissiondate` date NOT NULL,
  `u_activitytitle` varchar(255) NOT NULL,
  `u_strand` varchar(255) NOT NULL,
  `u_type` varchar(255) NOT NULL,
  `u_startdate` date NOT NULL,
  `u_enddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `proposalform_tbl`
--

INSERT INTO `proposalform_tbl` (`u_id`, `u_name`, `u_adviser`, `u_submissiondate`, `u_activitytitle`, `u_strand`, `u_type`, `u_startdate`, `u_enddate`) VALUES
(1, 'sadfgn', 'asdfgh', '2024-04-24', 'Bruh', 'S', 'G', '2024-04-09', '2024-04-07'),
(2, 'sadfgn', 'asdfgh', '2024-04-24', 'Bruh', 'S', 'G', '2024-04-09', '2024-04-07'),
(3, 'sadfgn', 'asdfgh', '2024-04-24', 'xcvbnm', 'L', 'G', '2024-05-08', '2024-04-06'),
(4, 'fdgngd', 'afgahwh', '2024-03-31', 'ertyj', 'L', 'G', '2024-04-29', '2024-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo_tbl`
--

CREATE TABLE `studentinfo_tbl` (
  `u_id` int(11) NOT NULL,
  `u_lname` varchar(255) NOT NULL,
  `u_fname` varchar(255) NOT NULL,
  `u_mname` varchar(255) NOT NULL,
  `u_batch` varchar(255) NOT NULL,
  `u_grade` int(11) NOT NULL,
  `u_pshsclubs` varchar(255) NOT NULL,
  `u_pshsclubposs` varchar(255) NOT NULL,
  `u_pshsclublengths` varchar(255) NOT NULL,
  `u_outsideclubs` varchar(255) NOT NULL,
  `u_outsideclubposs` varchar(255) NOT NULL,
  `u_outsideclublengths` varchar(255) NOT NULL,
  `u_sports` varchar(255) NOT NULL,
  `u_instruments` varchar(255) NOT NULL,
  `u_arts` varchar(255) NOT NULL,
  `u_hobbies` varchar(255) NOT NULL,
  `u_interests` varchar(255) NOT NULL,
  `u_activitiesstarted` varchar(255) NOT NULL,
  `u_signature` varchar(255) NOT NULL,
  `u_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentinfo_tbl`
--

INSERT INTO `studentinfo_tbl` (`u_id`, `u_lname`, `u_fname`, `u_mname`, `u_batch`, `u_grade`, `u_pshsclubs`, `u_pshsclubposs`, `u_pshsclublengths`, `u_outsideclubs`, `u_outsideclubposs`, `u_outsideclublengths`, `u_sports`, `u_instruments`, `u_arts`, `u_hobbies`, `u_interests`, `u_activitiesstarted`, `u_signature`, `u_date`) VALUES
(1, 'cortez', 'adam', 'tanglao', '2025', 11, 'DSDC', 'member', '2022-2023', 'none', 'none', '', 'none', 'guitar', 'none', 'sleep', 'sleep', 'yes', '', NULL),
(2, 'dfghjkl', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', NULL),
(3, 'fghjkl', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', NULL),
(4, 'hi', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', NULL),
(5, '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', NULL),
(6, 'Villanueva', 'Luke', 'D', '2025', 11, 'Idk', 'Idk', 'Idk', 'Idk', 'Idk', 'Idk', 'Idk', 'N/A', 'Idk', 'Idk', 'Idk', 'Idk', '', NULL),
(7, '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', NULL),
(8, 'Cortez', 'Adam', 'Tanglao', '2025', 11, 'DSDC', 'member', '2022-2023', 'Idk', 'Idk', 'Idk', 'Idk', 'guitar', 'none', 'Idk', 'Idk', 'yes', '', NULL),
(9, 'Ghowrjfgorjmf;k', 'asghfjkl', 'astyfug', 'ajgk', 0, 'eratWRDAAWR', 'FAFAEB', 'AWF', 'WTW', 'RARRTTART', 'WERTER', 'GATHRT', 'E', 'grwrtw', 'wrtt', 'ertwe', 'argtstyhw', '', NULL),
(10, 'Adam', 'Cortez', 'Tanglao', '2025', 11, 'DSDC', 'member', '2022-2023', 'none', 'none', 'none', 'none', 'guitar', 'none', 'sleep', 'sleep', '', '', NULL),
(11, 'cortez', 'adam', 'tanglao', '2025', 11, '', '', '', '', '', '', '', '', '', '', '', '', '', NULL),
(12, 'cortez', 'adam', 'tanglao', '2025', 11, 'a:0:{}', 'a:0:{}', 'a:0:{}', 'a:0:{}', 'a:0:{}', 'a:0:{}', 'sdf', 'DFsdf', 'gfjsf', 'ythF', 'tshshvb', 'adfga', 'Adam Cortez', '2024-05-10'),
(13, 'cortez', 'adam', 'tanglao', '2025', 11, 'a:0:{}', 'a:0:{}', 'a:0:{}', 'a:0:{}', 'a:0:{}', 'a:0:{}', 'sdf', 'DFsdf', 'gfjsf', 'ythF', 'tshshvb', 'adfga', 'Adam Cortez', '2024-05-10'),
(14, 'cortez', 'adam', 'tanglao', '2025', 11, 'a:0:{}', 'a:0:{}', 'a:0:{}', 'a:0:{}', 'a:0:{}', 'a:0:{}', 'sdf', 'DFsdf', 'gfjsf', 'ythF', 'tshshvb', 'adfga', 'Adam Cortez', '2024-05-10'),
(15, 'cortez', 'Adam', 't', '2025', 11, 'a:2:{i:0;s:2:\"hi\";i:1;s:5:\"hello\";}', 'a:2:{i:0;s:2:\"ye\";i:1;s:2:\"ye\";}', 'a:2:{i:0;s:2:\"ye\";i:1;s:2:\"ye\";}', 'a:3:{i:0;s:2:\"ye\";i:1;s:2:\"ye\";i:2;s:2:\"ey\";}', 'a:3:{i:0;s:2:\"ye\";i:1;s:3:\"yee\";i:2;s:1:\"y\";}', 'a:3:{i:0;s:2:\"ey\";i:1;s:2:\"ey\";i:2;s:2:\"ye\";}', 'aey', 'AyB', 'afba', 'ythF', 'tshshvb', 'nzdna', 'Adam Cortez', '2024-05-10'),
(16, 'cortez', 'Adam', 't', '2025', 11, 'a:0:{}', 'a:0:{}', 'a:0:{}', 'a:0:{}', 'a:0:{}', 'a:0:{}', 'aey', 'AyB', 'afba', 'ythF', 'tshshvb', 'nzdna', 'Adam Cortez', '2024-05-10'),
(17, 'Cortez', 'Adam', 'T', '', 0, 'a:1:{i:0;s:4:\"DSDC\";}', 'a:1:{i:0;s:6:\"Member\";}', 'a:1:{i:0;s:9:\"2022-2023\";}', 'a:1:{i:0;s:4:\"None\";}', 'a:1:{i:0;s:4:\"None\";}', 'a:1:{i:0;s:4:\"None\";}', 'None', 'Guitar', 'None', 'Sleeping', 'Arts', 'None', 'Adam Cortez', '2024-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `u_id` int(11) NOT NULL,
  `u_uname` varchar(255) NOT NULL,
  `u_pword` varchar(255) NOT NULL,
  `u_lname` varchar(255) NOT NULL,
  `u_fname` varchar(255) NOT NULL,
  `u_mname` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`u_id`, `u_uname`, `u_pword`, `u_lname`, `u_fname`, `u_mname`, `u_email`, `u_position`) VALUES
(1, 'adam21', 'bruh', 'cortez', 'adam', 't', 'realadam21@gmail.com', 'Student'),
(2, 'ads', 'shesh', 'cortez', 'adm', 't', 'admtcrtz', 'Coordinator'),
(3, 'DJN', 'dreyk', 'Niro', 'Drake', 'N', 'dniro2025@clc.edu.ph', 'Adviser'),
(4, 'adam, drake, luke', '', '', '', '', '', 'Coordinator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `indiviudual_activity_tbl`
--
ALTER TABLE `indiviudual_activity_tbl`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `proposalform_tbl`
--
ALTER TABLE `proposalform_tbl`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `studentinfo_tbl`
--
ALTER TABLE `studentinfo_tbl`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_id` (`u_id`),
  ADD UNIQUE KEY `u_id_2` (`u_id`);

--
-- Indexes for table `users_tbl`
--
ALTER TABLE `users_tbl`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `indiviudual_activity_tbl`
--
ALTER TABLE `indiviudual_activity_tbl`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proposalform_tbl`
--
ALTER TABLE `proposalform_tbl`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `studentinfo_tbl`
--
ALTER TABLE `studentinfo_tbl`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
