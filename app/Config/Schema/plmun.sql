-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2018 at 09:48 PM
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
  `dean_id` int(11) NOT NULL COMMENT 'Foreign Key',
  `email` varchar(1000) CHARACTER SET utf8 NOT NULL COMMENT 'Email of user',
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
  `faculty_id` int(11) NOT NULL COMMENT 'Foreign Key',
  `email` varchar(1000) CHARACTER SET utf8 NOT NULL COMMENT 'Email of user',
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
  ADD KEY `dean_id` (`dean_id`);

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
  ADD KEY `faculty_id` (`faculty_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faculty_feedbacks`
--
ALTER TABLE `faculty_feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
