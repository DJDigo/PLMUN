-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2019 at 03:07 PM
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

--
-- Dumping data for table `deans`
--

INSERT INTO `deans` (`id`, `department_id`, `title`, `description`, `created`, `modified`, `deleted`, `deleted_date`) VALUES
(1, 1, 'aaaaa', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, voluptatibus labore. Vel neque similique animi, vero tenetur iste mollitia repellendus cumque dolorum sit corrupti odit velit quia culpa distinctio perferendis.', NULL, '2019-01-19 10:41:11', 0, NULL),
(4, 4, 'aaaaa', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, voluptatibus labore. Vel neque similique animi, vero tenetur iste mollitia repellendus cumque dolorum sit corrupti odit velit quia culpa distinctio perferendis.', NULL, '2019-01-19 10:41:11', 0, NULL),
(3, 3, 'Dean', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, voluptatibus labore. Vel neque similique animi, vero tenetur iste mollitia repellendus cumque dolorum sit corrupti odit velit quia culpa distinctio perferendis.', NULL, '2019-01-20 08:55:36', 0, NULL),
(2, 2, 'Dean', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, voluptatibus labore. Vel neque similique animi, vero tenetur iste mollitia repellendus cumque dolorum sit corrupti odit velit quia culpa distinctio perferendis.', NULL, '2019-01-20 08:52:19', 0, NULL),
(5, 5, 'Dean', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, voluptatibus labore. Vel neque similique animi, vero tenetur iste mollitia repellendus cumque dolorum sit corrupti odit velit quia culpa distinctio perferendis.', NULL, '2019-01-20 08:55:15', 0, NULL);

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

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `department_id`, `title`, `description`, `created`, `modified`, `deleted`, `deleted_date`) VALUES
(1, 1, 'Facultys', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus id vero quo excepturi distinctio assumenda harum ipsa, inventore doloremque non', NULL, '2019-01-19 10:50:54', 0, NULL),
(2, 2, 'Faculty', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, voluptatibus labore. Vel neque similique animi, vero tenetur iste mollitia repellendus cumque dolorum sit corrupti odit velit quia culpa distinctio perferendis.', NULL, '2019-01-20 08:53:11', 0, NULL),
(3, 3, 'Faculty', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, voluptatibus labore. Vel neque similique animi, vero tenetur iste mollitia repellendus cumque dolorum sit corrupti odit velit quia culpa distinctio perferendis.', NULL, '2019-01-20 08:55:49', 0, NULL),
(4, 4, 'aaaaa', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, voluptatibus labore. Vel neque similique animi, vero tenetur iste mollitia repellendus cumque dolorum sit corrupti odit velit quia culpa distinctio perferendis.', NULL, '2019-01-19 10:41:11', 0, NULL),
(5, 5, 'Faculty', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, voluptatibus labore. Vel neque similique animi, vero tenetur iste mollitia repellendus cumque dolorum sit corrupti odit velit quia culpa distinctio perferendis.', NULL, '2019-01-20 08:55:26', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL COMMENT 'Foreign Key',
  `type` int(11) NOT NULL,
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
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `department_id`, `type`, `email`, `suggestion`, `rating_1`, `rating_2`, `rating_3`, `rating_4`, `rating_5`, `rating_6`, `rating_7`, `rating_8`, `created`, `modified`, `deleted`, `deleted_date`) VALUES
(6, 2, 1, 'obamenandro@gmail.com', 'aaaa', 5, 5, 5, 5, 5, 5, 5, 5, '2019-01-21 13:59:17', '2019-01-21 13:59:17', 0, NULL),
(5, 1, 2, 'obamenandro@gmail.com', 'aaaaa', 5, 2, 1, 1, 5, 5, 5, 5, '2019-01-21 13:59:07', '2019-01-21 13:59:07', 0, NULL),
(4, 1, 1, 'obamenandro@gmail.com', 'aaaaa', 5, 5, 5, 5, 5, 5, 5, 5, '2019-01-21 13:58:55', '2019-01-21 13:58:55', 0, NULL),
(7, 2, 2, 'obamenandro@gmail.com', 'aaa', 5, 5, 5, 5, 5, 5, 5, 5, '2019-01-21 13:59:32', '2019-01-21 13:59:32', 0, NULL),
(8, 1, 6, 'obamenandro@gmail.com', 'aaa', 5, 5, 5, 5, 5, 5, 5, 5, '2019-01-21 14:24:27', '2019-01-21 14:24:27', 0, NULL),
(9, 1, 5, 'obamenandro@gmail.com', 'aaa', 5, 5, 5, 5, 5, 5, 5, 5, '2019-01-21 14:24:48', '2019-01-21 14:24:48', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `guidance`
--

CREATE TABLE `guidance` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL COMMENT 'Foreign Key',
  `title` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT 'Title',
  `description` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT 'Title',
  `created` datetime DEFAULT NULL COMMENT 'Date Created',
  `modified` datetime DEFAULT NULL COMMENT 'Modified Date',
  `deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: not deleted 1: deleted',
  `deleted_date` datetime DEFAULT NULL COMMENT 'Deleted date'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guidance`
--

INSERT INTO `guidance` (`id`, `department_id`, `title`, `description`, `created`, `modified`, `deleted`, `deleted_date`) VALUES
(1, 6, 'GUIDANCE', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, voluptatibus labore. Vel neque similique animi, vero tenetur iste mollitia repellendus cumque dolorum sit corrupti odit velit quia culpa distinctio perferendis.', NULL, '2019-01-19 10:41:11', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nstp`
--

CREATE TABLE `nstp` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL COMMENT 'Foreign Key',
  `title` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT 'Title',
  `description` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT 'Title',
  `created` datetime DEFAULT NULL COMMENT 'Date Created',
  `modified` datetime DEFAULT NULL COMMENT 'Modified Date',
  `deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: not deleted 1: deleted',
  `deleted_date` datetime DEFAULT NULL COMMENT 'Deleted date'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nstp`
--

INSERT INTO `nstp` (`id`, `department_id`, `title`, `description`, `created`, `modified`, `deleted`, `deleted_date`) VALUES
(1, 6, 'NSTP', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, voluptatibus labore. Vel neque similique animi, vero tenetur iste mollitia repellendus cumque dolorum sit corrupti odit velit quia culpa distinctio perferendis.', NULL, '2019-01-19 10:41:11', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `registrar`
--

CREATE TABLE `registrar` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL COMMENT 'Foreign Key',
  `title` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT 'Title',
  `description` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT 'Title',
  `created` datetime DEFAULT NULL COMMENT 'Date Created',
  `modified` datetime DEFAULT NULL COMMENT 'Modified Date',
  `deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: not deleted 1: deleted',
  `deleted_date` datetime DEFAULT NULL COMMENT 'Deleted date'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrar`
--

INSERT INTO `registrar` (`id`, `department_id`, `title`, `description`, `created`, `modified`, `deleted`, `deleted_date`) VALUES
(1, 6, 'REGISTRAR', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, voluptatibus labore. Vel neque similique animi, vero tenetur iste mollitia repellendus cumque dolorum sit corrupti odit velit quia culpa distinctio perferendis.', NULL, '2019-01-21 14:43:58', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `treasury`
--

CREATE TABLE `treasury` (
  `id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL COMMENT 'Foreign Key',
  `title` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT 'Title',
  `description` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT 'Title',
  `created` datetime DEFAULT NULL COMMENT 'Date Created',
  `modified` datetime DEFAULT NULL COMMENT 'Modified Date',
  `deleted` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: not deleted 1: deleted',
  `deleted_date` datetime DEFAULT NULL COMMENT 'Deleted date'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treasury`
--

INSERT INTO `treasury` (`id`, `department_id`, `title`, `description`, `created`, `modified`, `deleted`, `deleted_date`) VALUES
(1, 6, 'TREASURY', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, voluptatibus labore. Vel neque similique animi, vero tenetur iste mollitia repellendus cumque dolorum sit corrupti odit velit quia culpa distinctio perferendis.', NULL, '2019-01-19 10:41:11', 0, NULL);

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
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `guidance`
--
ALTER TABLE `guidance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `nstp`
--
ALTER TABLE `nstp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `registrar`
--
ALTER TABLE `registrar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `treasury`
--
ALTER TABLE `treasury`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `guidance`
--
ALTER TABLE `guidance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nstp`
--
ALTER TABLE `nstp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `registrar`
--
ALTER TABLE `registrar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `treasury`
--
ALTER TABLE `treasury`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
