-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2020 at 07:20 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `allteacher`
--

CREATE TABLE `allteacher` (
  `id` int(11) NOT NULL,
  `t_name` varchar(50) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `saturday` varchar(50) DEFAULT NULL,
  `sunday` varchar(50) DEFAULT NULL,
  `monday` varchar(50) DEFAULT NULL,
  `tuesday` varchar(50) DEFAULT NULL,
  `wednesday` varchar(50) DEFAULT NULL,
  `thursday` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allteacher`
--

INSERT INTO `allteacher` (`id`, `t_name`, `time`, `saturday`, `sunday`, `monday`, `tuesday`, `wednesday`, `thursday`) VALUES
(102, 'asad', 'A', 'ACT211', '0', '0', 'ACT211', 'CSE124', '0'),
(103, 'asad', 'B', '0', '0', '0', '0', '0', '0'),
(104, 'asad', 'C', 'CSE22', '0', 'CSE124', '0', 'CSE133', '0'),
(105, 'asad', 'D', '0', '0', '0', 'CSE22', '0', '0'),
(106, 'asad', 'E', '0', '0', 'CSE133', '0', 'CSE214', '0'),
(117, 'imran', 'A', 'CSE112', 'CSE135', 'CSE131', 'CSE136', '0', '0'),
(118, 'imran', 'B', '0', '0', '0', '0', '0', '0'),
(119, 'imran', 'C', '0', 'CSE136', '0', NULL, '0', '0'),
(120, 'imran', 'D', 'CSE131', '0', 'CSE135', NULL, '0', '0'),
(121, 'imran', 'E', '0', 'CSE112', '0', NULL, '0', '0'),
(122, 'selim', 'A', 'CSE123', '0', '0', 'CSE212', 'CSE123', 'CSE212'),
(123, 'selim', 'B', '0', '0', '0', '0', '0', '0'),
(124, 'selim', 'C', 'CSE132', '0', '0', 'CSE213', 'CSE132', 'CSE213'),
(125, 'selim', 'D', '0', '0', '0', '0', '0', '0'),
(126, 'selim', 'E', 'CSE134', '0', '0', '0', 'CSE134', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `day`
--

CREATE TABLE `day` (
  `id` int(11) NOT NULL,
  `day` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `day`
--

INSERT INTO `day` (`id`, `day`) VALUES
(1, 'saturday'),
(2, 'sunday'),
(3, 'monday'),
(4, 'tuesday'),
(5, 'wednesday'),
(6, 'thursday');

-- --------------------------------------------------------

--
-- Table structure for table `dynamic_add`
--

CREATE TABLE `dynamic_add` (
  `id` int(11) NOT NULL,
  `teacher` varchar(50) DEFAULT NULL,
  `make` varchar(50) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `serial` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dynamic_add`
--

INSERT INTO `dynamic_add` (`id`, `teacher`, `make`, `model`, `serial`) VALUES
(1, 'ASAD', 'a', 'e', 'i'),
(2, 'ASAD', 'b', 'f', 'j'),
(3, 'ASAD', 'c', 'g', 'k'),
(4, 'ASAD', 'd', 'h', 'l'),
(5, 'imran', 'car', '14ae', 'fgdhg'),
(6, 'imran', 'hjgk', 'gdfjgh', 'ghjhgf'),
(7, 'selim', 'er', 're', 'rrrrr'),
(8, 'selim', 'er', 'k', 'g'),
(9, 'selim', 'ee', 'd', 'g'),
(10, 'selim', 'ee', 'e', 'g'),
(11, 'selim', 'h', 'e', 'i'),
(12, 'alom', 'er', 're', 'i'),
(13, 'alom', 'er', 'e', 'n'),
(14, 'alom', 'imran', 'k', 'g');

-- --------------------------------------------------------

--
-- Table structure for table `finaldayroutine`
--

CREATE TABLE `finaldayroutine` (
  `id` int(11) NOT NULL,
  `day` varchar(50) DEFAULT NULL,
  `roomnumber` varchar(50) DEFAULT NULL,
  `A` varchar(50) DEFAULT NULL,
  `B` varchar(50) DEFAULT NULL,
  `C` varchar(50) DEFAULT NULL,
  `D` varchar(50) DEFAULT NULL,
  `E` varchar(50) DEFAULT NULL,
  `F` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finaldayroutine`
--

INSERT INTO `finaldayroutine` (`id`, `day`, `roomnumber`, `A`, `B`, `C`, `D`, `E`, `F`) VALUES
(1, 'saturday', '101', 'ACT211', NULL, 'CSE22', 'CSE131', 'CSE134', NULL),
(2, 'saturday', '102', 'CSE112', NULL, 'CSE132', NULL, NULL, NULL),
(3, 'saturday', '103', 'CSE123', NULL, NULL, NULL, NULL, NULL),
(4, 'saturday', '104', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'saturday', '105', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'saturday', '106', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'saturday', '107', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'sunday', '101', 'CSE135', NULL, 'CSE136', NULL, 'CSE112', NULL),
(9, 'sunday', '102', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'sunday', '103', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'sunday', '104', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'sunday', '105', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'sunday', '106', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'sunday', '107', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'monday', '101', 'CSE131', NULL, 'CSE124', 'CSE135', 'CSE133', NULL),
(16, 'monday', '102', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'monday', '103', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'monday', '104', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'monday', '105', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'monday', '106', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'monday', '107', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'tuesday', '101', 'CSE212', 'CSE214', 'CSE213', 'CSE22', NULL, NULL),
(23, 'tuesday', '102', 'ACT211', NULL, NULL, NULL, NULL, NULL),
(24, 'tuesday', '103', 'CSE136', NULL, NULL, NULL, NULL, NULL),
(25, 'tuesday', '104', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'tuesday', '105', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'tuesday', '106', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'tuesday', '107', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'wednesday', '101', 'CSE123', NULL, 'CSE132', NULL, 'CSE134', NULL),
(30, 'wednesday', '102', 'CSE124', NULL, 'CSE133', NULL, 'CSE214', NULL),
(31, 'wednesday', '103', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'wednesday', '104', NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'wednesday', '105', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'wednesday', '106', NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'wednesday', '107', NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'thursday', '101', 'CSE212', NULL, 'CSE213', NULL, NULL, NULL),
(37, 'thursday', '102', NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'thursday', '103', NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'thursday', '104', NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'thursday', '105', NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'thursday', '106', NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'thursday', '107', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `requirement_table`
--

CREATE TABLE `requirement_table` (
  `id` int(11) NOT NULL,
  `t_name` varchar(50) DEFAULT NULL,
  `offday1` varchar(50) DEFAULT NULL,
  `offday2` varchar(50) DEFAULT NULL,
  `r1day` varchar(50) DEFAULT NULL,
  `r1time` varchar(50) DEFAULT NULL,
  `r2day` varchar(50) DEFAULT NULL,
  `r2time` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requirement_table`
--

INSERT INTO `requirement_table` (`id`, `t_name`, `offday1`, `offday2`, `r1day`, `r1time`, `r2day`, `r2time`) VALUES
(20, 'asad', 'sunday', 'thursday', ' saturday', 'DE', 'monday', 'AB'),
(21, 'selim', 'sunday', 'monday', ' tuesday', 'E', 'Nullable', 'Nullable'),
(22, 'imran', 'thursday', 'wednesday', ' saturday', 'BC', 'monday', 'BC');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `sname` varchar(50) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `saturday` varchar(50) DEFAULT NULL,
  `sunday` varchar(50) DEFAULT NULL,
  `monday` varchar(50) DEFAULT NULL,
  `tuesday` varchar(50) DEFAULT NULL,
  `wednesday` varchar(50) DEFAULT NULL,
  `thursday` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `sname`, `time`, `saturday`, `sunday`, `monday`, `tuesday`, `wednesday`, `thursday`) VALUES
(3, 'level2term1pc_a', 'A', 'ACT211', NULL, NULL, 'ACT211', NULL, NULL),
(4, 'level2term1pc_a', 'B', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'level2term1pc_a', 'C', 'CSE132', NULL, NULL, NULL, 'CSE132', NULL),
(6, 'level2term1pc_a', 'D', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'level2term1pc_a', 'E', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'level1term1pc_a', 'A', 'CSE112', NULL, NULL, NULL, NULL, NULL),
(9, 'level1term1pc_a', 'B', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'level1term1pc_a', 'C', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'level1term1pc_a', 'D', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'level1term1pc_a', 'E', NULL, 'CSE112', NULL, NULL, NULL, NULL),
(13, 'level1term2pc_a', 'A', NULL, 'CSE135', NULL, 'CSE212', NULL, 'CSE212'),
(14, 'level1term2pc_a', 'B', NULL, NULL, NULL, 'CSE214', NULL, NULL),
(15, 'level1term2pc_a', 'C', 'CSE22', NULL, NULL, NULL, NULL, NULL),
(16, 'level1term2pc_a', 'D', NULL, NULL, 'CSE135', 'CSE22', NULL, NULL),
(17, 'level1term2pc_a', 'E', NULL, NULL, NULL, NULL, 'CSE214', NULL),
(18, '	\r\nlevel1term1pc_b', 'A', 'CSE123', NULL, NULL, NULL, 'CSE123', NULL),
(19, '	\r\nlevel1term1pc_b', 'B', NULL, NULL, NULL, NULL, NULL, NULL),
(20, '	\r\nlevel1term1pc_b', 'C', NULL, NULL, NULL, NULL, NULL, NULL),
(21, '	\r\nlevel1term1pc_b', 'D', NULL, NULL, NULL, NULL, NULL, NULL),
(22, '	\r\nlevel1term1pc_b', 'E', NULL, NULL, NULL, NULL, NULL, NULL),
(23, '	\r\nlevel1term1pc_a', 'A', NULL, NULL, 'CSE131', NULL, 'CSE124', NULL),
(24, '	\r\nlevel1term1pc_a', 'B', NULL, NULL, NULL, NULL, NULL, NULL),
(25, '	\r\nlevel1term1pc_a', 'C', NULL, NULL, 'CSE124', NULL, NULL, NULL),
(26, '	\r\nlevel1term1pc_a', 'D', 'CSE131', NULL, NULL, NULL, NULL, NULL),
(27, '	\r\nlevel1term1pc_a', 'E', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'level2term2pc_a', 'A', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'level2term2pc_a', 'B', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'level2term2pc_a', 'C', NULL, NULL, NULL, NULL, 'CSE133', NULL),
(31, 'level2term2pc_a', 'D', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'level2term2pc_a', 'E', NULL, NULL, 'CSE133', NULL, NULL, NULL),
(33, 'level2term3pc_a', 'A', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'level2term3pc_a', 'B', NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'level2term3pc_a', 'C', NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'level2term3pc_a', 'D', NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'level2term3pc_a', 'E', 'CSE134', NULL, NULL, NULL, 'CSE134', NULL),
(38, 'level1term3pc_a', 'A', NULL, NULL, NULL, 'CSE136', NULL, NULL),
(39, 'level1term3pc_a', 'B', NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'level1term3pc_a', 'C', NULL, 'CSE136', NULL, 'CSE213', NULL, 'CSE213'),
(41, 'level1term3pc_a', 'D', NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'level1term3pc_a', 'E', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers_course_table`
--

CREATE TABLE `teachers_course_table` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester_id` int(11) NOT NULL,
  `batch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level_term` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `teacher_name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_hour` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers_course_table`
--

INSERT INTO `teachers_course_table` (`id`, `semester_id`, `batch`, `level_term`, `course_code`, `teacher_name`, `course_title`, `course_hour`, `created_at`, `updated_at`, `hi`) VALUES
(1, 1, 'asad', 'level2term1', 'ACT211', 'asad', 'Financial And Managerial Accounting', 'pc_a', NULL, NULL, 0),
(2, 1, 'imran', 'level1term1', 'CSE112', 'imran', 'Computer Fundamentals', 'pc_a', NULL, NULL, 0),
(3, 1, 'selim', 'level1term2', 'CSE22', 'asad', 'Programming and programming Solving', 'pc_a', NULL, NULL, 0),
(6, 0, NULL, '	\r\nlevel1term1', 'CSE123', 'selim', 'Programming Solving Lab', 'pc_b', NULL, NULL, 0),
(7, 0, NULL, '	\r\nlevel1term1', 'CSE124', 'asad', 'Business Application Design', 'pc_a', NULL, NULL, 0),
(8, 0, NULL, '	\r\nlevel1term1', 'CSE131', 'imran', 'Discrete Mathematics', 'pc_a', NULL, NULL, 0),
(9, 0, NULL, 'level2term1', 'CSE132', 'selim', 'Electrical Circuits', 'pc_a', NULL, NULL, 0),
(10, 0, NULL, 'level2term2', 'CSE133', 'asad', 'Electrical Circuits Lab', 'pc_a', NULL, NULL, 0),
(11, 0, NULL, 'level2term3', 'CSE134', 'selim', 'Data Structure', 'pc_a', NULL, NULL, 0),
(12, 0, NULL, 'level1term2', 'CSE135', 'imran', 'Data Structure Lab', 'pc_a', NULL, NULL, 0),
(13, 0, NULL, 'level1term3', 'CSE136', 'imran', 'Software Project 1', 'pc_a', NULL, NULL, 0),
(14, 0, NULL, 'level1term2', 'CSE212', 'selim', 'Basic Electronics', 'pc_a', NULL, NULL, 0),
(15, 0, NULL, 'level1term3', 'CSE213', 'selim', 'Basic Electronics Lab', 'pc_a', NULL, NULL, 0),
(16, 0, NULL, 'level1term2', 'CSE214', 'asad', 'Algorithms', 'pc_a', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_info`
--

CREATE TABLE `teacher_info` (
  `id` int(11) NOT NULL,
  `t_id` int(11) DEFAULT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `initial_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_num` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `off_day1` varchar(50) DEFAULT NULL,
  `off_day2` varchar(50) DEFAULT NULL,
  `r_time` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_info`
--

INSERT INTO `teacher_info` (`id`, `t_id`, `full_name`, `initial_name`, `email`, `phone_num`, `department`, `off_day1`, `off_day2`, `r_time`) VALUES
(1, 123, 'Md.Asaduzzaman', 'asad', 'asad@gmail.com', '01708559476', 'cse', 'saturday', NULL, NULL),
(2, 121, 'Md.Selim Talukdar', 'selim', 'selim@gmail.com', '01747647364', 'cse', 'monday', 'wednesday', NULL),
(3, 212, 'Md.Imran', 'imran', 'imran@gmail.com', '01708559376', 'cse', 'tuesday', 'wednesday', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allteacher`
--
ALTER TABLE `allteacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `day`
--
ALTER TABLE `day`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dynamic_add`
--
ALTER TABLE `dynamic_add`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finaldayroutine`
--
ALTER TABLE `finaldayroutine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requirement_table`
--
ALTER TABLE `requirement_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers_course_table`
--
ALTER TABLE `teachers_course_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_info`
--
ALTER TABLE `teacher_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allteacher`
--
ALTER TABLE `allteacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=267;

--
-- AUTO_INCREMENT for table `day`
--
ALTER TABLE `day`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dynamic_add`
--
ALTER TABLE `dynamic_add`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `finaldayroutine`
--
ALTER TABLE `finaldayroutine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `requirement_table`
--
ALTER TABLE `requirement_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `teachers_course_table`
--
ALTER TABLE `teachers_course_table`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `teacher_info`
--
ALTER TABLE `teacher_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
