-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2018 at 02:47 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plmun`
--

-- --------------------------------------------------------

--
-- Table structure for table `deans`
--

CREATE TABLE `deans` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL COMMENT 'Foreign Key',
  `title` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT 'Title',
  `description` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT 'Title',
  `created` datetime DEFAULT NULL COMMENT 'Date Created',
  `modified` datetime DEFAULT NULL COMMENT 'Modified Date',
  `deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: not deleted 1: deleted',
  `deleted_date` datetime DEFAULT NULL COMMENT 'Deleted date'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dean_feedbacks`
--

CREATE TABLE `dean_feedbacks` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL COMMENT 'Foreign Key',
  `email` varchar(1000) CHARACTER SET utf8 NOT NULL COMMENT 'Email of user',
  `suggestion` varchar(1000) CHARACTER SET utf8 NOT NULL COMMENT 'Suggestions',
  `rating_1` int(11) NOT NULL,
  `rating_2` int(11) NOT NULL,
  `rating_3` int(11) NOT NULL,
  `rating_4` int(11) NOT NULL,
  `rating_5` int(11) NOT NULL,
  `rating_6` int(11) NOT NULL,
  `rating_7` int(11) NOT NULL,
  `rating_8` int(11) NOT NULL,
  `created` datetime DEFAULT NULL COMMENT 'Date Created',
  `modified` datetime DEFAULT NULL COMMENT 'Modified Date',
  `deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: not deleted 1: deleted',
  `deleted_date` datetime DEFAULT NULL COMMENT 'Deleted date'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dean_feedbacks`
--

INSERT INTO `dean_feedbacks` (`id`, `department_id`, `email`, `suggestion`, `rating_1`, `rating_2`, `rating_3`, `rating_4`, `rating_5`, `rating_6`, `rating_7`, `rating_8`, `created`, `modified`, `deleted`, `deleted_date`) VALUES
(10, 1, 'obamenandro@gmail.com', 'asdasdasdasdsad', 5, 5, 5, 5, 5, 5, 5, 5, '2018-11-03 13:17:03', '2018-11-03 13:17:03', 0, NULL),
(11, 2, 'aaaaaaaaaaaa@gmail.com', 'asdasdasd', 5, 5, 5, 5, 5, 5, 5, 5, '2018-11-03 13:20:06', '2018-11-03 13:20:06', 0, NULL),
(12, 5, 'obamenandrsso@gmail.com', 'aaaaaaaaaa', 5, 5, 5, 5, 5, 5, 5, 5, '2018-11-03 13:20:38', '2018-11-03 13:20:38', 0, NULL),
(13, 2, 'obamenandro@gmail.com', '', 5, 5, 5, 5, 5, 5, 5, 5, '2018-11-03 13:50:30', '2018-11-03 13:50:30', 0, NULL),
(14, 3, 'obamenandro@gmail.com', '', 5, 5, 5, 5, 5, 5, 5, 5, '2018-11-03 13:51:19', '2018-11-03 13:51:19', 0, NULL),
(15, 2, 'obamenandsro@gmail.com', '', 4, 5, 5, 5, 5, 5, 5, 5, '2018-11-04 07:28:15', '2018-11-04 07:28:15', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT 'Department Name',
  `created` datetime DEFAULT NULL COMMENT 'Date Created',
  `modified` datetime DEFAULT NULL COMMENT 'Modified Date',
  `deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: not deleted 1: deleted',
  `deleted_date` datetime DEFAULT NULL COMMENT 'Deleted date'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `created`, `modified`, `deleted`, `deleted_date`) VALUES
(1, 'citcs', NULL, NULL, 0, NULL),
(2, 'cas', NULL, NULL, 0, NULL),
(3, 'cba', NULL, NULL, 0, NULL),
(4, 'cte', NULL, NULL, 0, NULL),
(5, 'ccj', NULL, NULL, 0, NULL),
(6, 'offices', NULL, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL COMMENT 'Foreign Key',
  `title` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT 'Title',
  `description` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT 'Title',
  `created` datetime DEFAULT NULL COMMENT 'Date Created',
  `modified` datetime DEFAULT NULL COMMENT 'Modified Date',
  `deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: not deleted 1: deleted',
  `deleted_date` datetime DEFAULT NULL COMMENT 'Deleted date'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_feedbacks`
--

CREATE TABLE `faculty_feedbacks` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL COMMENT 'Foreign Key',
  `email` varchar(1000) CHARACTER SET utf8 NOT NULL COMMENT 'Email of user',
  `suggestion` varchar(1000) CHARACTER SET utf8 NOT NULL COMMENT 'Suggestions',
  `rating_1` int(11) NOT NULL,
  `rating_2` int(11) NOT NULL,
  `rating_3` int(11) NOT NULL,
  `rating_4` int(11) NOT NULL,
  `rating_5` int(11) NOT NULL,
  `rating_6` int(11) NOT NULL,
  `rating_7` int(11) NOT NULL,
  `rating_8` int(11) NOT NULL,
  `created` datetime DEFAULT NULL COMMENT 'Date Created',
  `modified` datetime DEFAULT NULL COMMENT 'Modified Date',
  `deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: not deleted 1: deleted',
  `deleted_date` datetime DEFAULT NULL COMMENT 'Deleted date'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_feedbacks`
--

INSERT INTO `faculty_feedbacks` (`id`, `department_id`, `email`, `suggestion`, `rating_1`, `rating_2`, `rating_3`, `rating_4`, `rating_5`, `rating_6`, `rating_7`, `rating_8`, `created`, `modified`, `deleted`, `deleted_date`) VALUES
(1, 1, 'obamenandro@gmail.com', '', 5, 5, 5, 5, 5, 5, 5, 5, '2018-11-04 07:40:19', '2018-11-04 07:40:19', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `guidance_feedbacks`
--

CREATE TABLE `guidance_feedbacks` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL COMMENT 'Foreign Key',
  `email` varchar(1000) CHARACTER SET utf8 NOT NULL COMMENT 'Email of user',
  `suggestion` varchar(1000) CHARACTER SET utf8 NOT NULL COMMENT 'Suggestions',
  `rating_1` int(11) NOT NULL,
  `rating_2` int(11) NOT NULL,
  `rating_3` int(11) NOT NULL,
  `rating_4` int(11) NOT NULL,
  `rating_5` int(11) NOT NULL,
  `rating_6` int(11) NOT NULL,
  `rating_7` int(11) NOT NULL,
  `rating_8` int(11) NOT NULL,
  `created` datetime DEFAULT NULL COMMENT 'Date Created',
  `modified` datetime DEFAULT NULL COMMENT 'Modified Date',
  `deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: not deleted 1: deleted',
  `deleted_date` datetime DEFAULT NULL COMMENT 'Deleted date'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nstp_feedbacks`
--

CREATE TABLE `nstp_feedbacks` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL COMMENT 'Foreign Key',
  `email` varchar(1000) CHARACTER SET utf8 NOT NULL COMMENT 'Email of user',
  `suggestion` varchar(1000) CHARACTER SET utf8 NOT NULL COMMENT 'Suggestions',
  `rating_1` int(11) NOT NULL,
  `rating_2` int(11) NOT NULL,
  `rating_3` int(11) NOT NULL,
  `rating_4` int(11) NOT NULL,
  `rating_5` int(11) NOT NULL,
  `rating_6` int(11) NOT NULL,
  `rating_7` int(11) NOT NULL,
  `rating_8` int(11) NOT NULL,
  `created` datetime DEFAULT NULL COMMENT 'Date Created',
  `modified` datetime DEFAULT NULL COMMENT 'Modified Date',
  `deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: not deleted 1: deleted',
  `deleted_date` datetime DEFAULT NULL COMMENT 'Deleted date'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registrar_feedbacks`
--

CREATE TABLE `registrar_feedbacks` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL COMMENT 'Foreign Key',
  `email` varchar(1000) CHARACTER SET utf8 NOT NULL COMMENT 'Email of user',
  `suggestion` varchar(1000) CHARACTER SET utf8 NOT NULL COMMENT 'Suggestions',
  `rating_1` int(11) NOT NULL,
  `rating_2` int(11) NOT NULL,
  `rating_3` int(11) NOT NULL,
  `rating_4` int(11) NOT NULL,
  `rating_5` int(11) NOT NULL,
  `rating_6` int(11) NOT NULL,
  `rating_7` int(11) NOT NULL,
  `rating_8` int(11) NOT NULL,
  `created` datetime DEFAULT NULL COMMENT 'Date Created',
  `modified` datetime DEFAULT NULL COMMENT 'Modified Date',
  `deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: not deleted 1: deleted',
  `deleted_date` datetime DEFAULT NULL COMMENT 'Deleted date'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `treasury_feedbacks`
--

CREATE TABLE `treasury_feedbacks` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL COMMENT 'Foreign Key',
  `email` varchar(1000) CHARACTER SET utf8 NOT NULL COMMENT 'Email of user',
  `suggestion` varchar(1000) CHARACTER SET utf8 NOT NULL COMMENT 'Suggestions',
  `rating_1` int(11) NOT NULL,
  `rating_2` int(11) NOT NULL,
  `rating_3` int(11) NOT NULL,
  `rating_4` int(11) NOT NULL,
  `rating_5` int(11) NOT NULL,
  `rating_6` int(11) NOT NULL,
  `rating_7` int(11) NOT NULL,
  `rating_8` int(11) NOT NULL,
  `created` datetime DEFAULT NULL COMMENT 'Date Created',
  `modified` datetime DEFAULT NULL COMMENT 'Modified Date',
  `deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: not deleted 1: deleted',
  `deleted_date` datetime DEFAULT NULL COMMENT 'Deleted date'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(1000) CHARACTER SET utf8 NOT NULL COMMENT 'username',
  `password` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'Hash Password',
  `created` datetime DEFAULT NULL COMMENT 'Date Created',
  `modified` datetime DEFAULT NULL COMMENT 'Modified Date',
  `deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: not deleted 1: deleted',
  `deleted_date` datetime DEFAULT NULL COMMENT 'Deleted date'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created`, `modified`, `deleted`, `deleted_date`) VALUES
(1, 'admin', '$2a$10$OJtrr/8MfQaq.5QrQHzSA.CgHnSfZ7gQNXCYTcrOz2lt2u5mS3rte', '2018-11-04 09:37:54', '2018-11-04 09:37:54', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deans`
--
ALTER TABLE `deans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `dean_feedbacks`
--
ALTER TABLE `dean_feedbacks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `faculty_feedbacks`
--
ALTER TABLE `faculty_feedbacks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `guidance_feedbacks`
--
ALTER TABLE `guidance_feedbacks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `nstp_feedbacks`
--
ALTER TABLE `nstp_feedbacks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `registrar_feedbacks`
--
ALTER TABLE `registrar_feedbacks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `treasury_feedbacks`
--
ALTER TABLE `treasury_feedbacks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deans`
--
ALTER TABLE `deans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dean_feedbacks`
--
ALTER TABLE `dean_feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faculty_feedbacks`
--
ALTER TABLE `faculty_feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `guidance_feedbacks`
--
ALTER TABLE `guidance_feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nstp_feedbacks`
--
ALTER TABLE `nstp_feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `registrar_feedbacks`
--
ALTER TABLE `registrar_feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `treasury_feedbacks`
--
ALTER TABLE `treasury_feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
