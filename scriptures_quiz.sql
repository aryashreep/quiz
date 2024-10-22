-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 21, 2024 at 09:14 PM
-- Server version: 5.7.23-23
-- PHP Version: 8.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iskcop35_scriptures_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `centers`
--

CREATE TABLE `centers` (
  `cid` int(10) NOT NULL,
  `center_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `centers`
--

INSERT INTO `centers` (`cid`, `center_name`) VALUES
(1, 'ISKCON Seshadripuram'),
(2, 'Anekal'),
(3, 'Annapurnishwara'),
(4, 'Anjanapura'),
(5, 'HAL'),
(6, 'HSR Layout'),
(7, 'JP Nagar'),
(8, 'Kudlu (Electronics City)'),
(9, 'Nelamangala'),
(10, 'Raja Rajeswari Nagar'),
(11, 'RT Nagar'),
(12, 'Sahakara nagar'),
(13, 'Sarjapur'),
(14, 'Nagarbhave'),
(15, 'Byrathi Bande'),
(16, 'Yelhanka'),
(17, 'Hulimavu'),
(18, 'Vijaya Nagar'),
(19, 'Hoskote');

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `chapter_id` int(10) NOT NULL,
  `chapter_no` int(10) NOT NULL,
  `chapter_name` varchar(200) NOT NULL,
  `chapter_url` varchar(200) NOT NULL,
  `chapter_image` varchar(300) NOT NULL,
  `sid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `oid` int(10) NOT NULL,
  `qid` int(10) NOT NULL,
  `option_1` varchar(200) NOT NULL,
  `option_2` varchar(200) NOT NULL,
  `option_3` varchar(200) NOT NULL,
  `option_4` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(10) NOT NULL,
  `sid` int(10) NOT NULL,
  `chapter_id` int(10) NOT NULL,
  `vid` int(10) NOT NULL,
  `questions` varchar(120) NOT NULL,
  `right_option` int(10) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `scriptures`
--

CREATE TABLE `scriptures` (
  `sid` int(10) NOT NULL,
  `scripture_name` varchar(300) NOT NULL,
  `ref_url` varchar(300) NOT NULL,
  `images` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `role` enum('0','1','2') NOT NULL DEFAULT '0',
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `initiated_name` varchar(200) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gender` enum('Male','Female') NOT NULL,
  `cid` int(10) NOT NULL COMMENT 'Center id for the reference'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_answers`
--

CREATE TABLE `user_answers` (
  `id` int(10) NOT NULL,
  `uid` int(10) NOT NULL COMMENT 'User id for the reference',
  `qid` int(10) NOT NULL COMMENT 'Question id for the ref',
  `oid` int(10) NOT NULL COMMENT 'User selected option will store here',
  `sid` int(10) NOT NULL COMMENT 'Scriptures id for the ref',
  `chapter_id` int(10) NOT NULL COMMENT 'Chapter id for ref',
  `vid` int(10) NOT NULL COMMENT 'Verse id for ref',
  `marks` enum('0','1') NOT NULL DEFAULT '0',
  `answer_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `verse`
--

CREATE TABLE `verse` (
  `vid` int(10) NOT NULL,
  `verse_no` varchar(10) NOT NULL,
  `verse_url` varchar(100) NOT NULL,
  `chapter_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `centers`
--
ALTER TABLE `centers`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`chapter_id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `scriptures`
--
ALTER TABLE `scriptures`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `user_answers`
--
ALTER TABLE `user_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verse`
--
ALTER TABLE `verse`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `centers`
--
ALTER TABLE `centers`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `chapter_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `oid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scriptures`
--
ALTER TABLE `scriptures`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_answers`
--
ALTER TABLE `user_answers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `verse`
--
ALTER TABLE `verse`
  MODIFY `vid` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
