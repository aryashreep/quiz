-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 21, 2024 at 01:43 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scriptures_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `centers`
--

CREATE TABLE `centers` (
  `cid` int(10) NOT NULL,
  `center_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(8, 'Kudlu (Electronics C'),
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`chapter_id`, `chapter_no`, `chapter_name`, `chapter_url`, `chapter_image`, `sid`) VALUES
(1, 1, 'Observing the Armies on the Battlefield of Kurukṣetra', 'https://vedabase.io/en/library/bg/1/', '1729498343_ch_no_1_observing-the-armies-on-the-battlefield-of-kuruk-E1-B9-A3etra.jpg', 1),
(2, 2, 'Contents of the Gītā Summarized', 'https://vedabase.io/en/library/bg/2/', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `exam_details`
--

CREATE TABLE `exam_details` (
  `id` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `date_of_exam` date NOT NULL,
  `exam_result` varchar(10) NOT NULL,
  `exam_score` int(10) NOT NULL,
  `user_answers_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`oid`, `qid`, `option_1`, `option_2`, `option_3`, `option_4`) VALUES
(1, 1, 'Sañjaya', 'Pāṇḍu', 'Kṛṣṇa', 'Arjuna');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `sid`, `chapter_id`, `vid`, `questions`, `right_option`, `status`) VALUES
(1, 1, 1, 1, 'Who explain the Kurukhetra scene to Dhṛtarāṣṭra?', 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `scriptures`
--

CREATE TABLE `scriptures` (
  `sid` int(10) NOT NULL,
  `scripture_name` varchar(300) NOT NULL,
  `ref_url` varchar(300) NOT NULL,
  `images` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scriptures`
--

INSERT INTO `scriptures` (`sid`, `scripture_name`, `ref_url`, `images`) VALUES
(1, 'Bhagavad-gītā As It Is', 'https://vedabase.io/en/library/bg/', 'depositphotos_44015971-stock-illustration-hindu-god-krishna.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `role` enum('0','1','2','') NOT NULL DEFAULT '0',
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `initiated_name` varchar(200) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp(),
  `gender` enum('Male','Female') NOT NULL,
  `cid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `role`, `first_name`, `last_name`, `initiated_name`, `phone_no`, `password`, `created_date`, `gender`, `cid`) VALUES
(1, '1', 'Site', 'Admin', '', 1234567890, '99c42b8e291cff8b5a233804f524b6923414d3031a09e6efc4ee7b1a8cf9208c', '2024-10-17', 'Male', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_answers`
--

CREATE TABLE `user_answers` (
  `id` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `qid` int(10) NOT NULL,
  `oid` int(10) NOT NULL COMMENT 'User selected option will store here',
  `sid` int(10) NOT NULL,
  `chapter_id` int(10) NOT NULL,
  `vid` int(10) NOT NULL,
  `marks` enum('0','1') NOT NULL DEFAULT '0',
  `answer_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_answers`
--

INSERT INTO `user_answers` (`id`, `uid`, `qid`, `oid`, `sid`, `chapter_id`, `vid`, `marks`, `answer_date`) VALUES
(2, 1, 1, 1, 1, 1, 1, '1', '2024-10-21'),
(3, 1, 1, 4, 1, 1, 1, '0', '2024-10-21'),
(4, 1, 1, 1, 1, 1, 1, '1', '2024-10-21'),
(5, 1, 1, 1, 1, 1, 1, '1', '2024-10-21');

-- --------------------------------------------------------

--
-- Table structure for table `verse`
--

CREATE TABLE `verse` (
  `vid` int(10) NOT NULL,
  `verse_no` varchar(10) NOT NULL,
  `verse_url` varchar(100) NOT NULL,
  `chapter_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `verse`
--

INSERT INTO `verse` (`vid`, `verse_no`, `verse_url`, `chapter_id`) VALUES
(1, '1', 'https://vedabase.io/en/library/bg/1/1/', 1),
(2, '2', 'https://vedabase.io/en/library/bg/1/2/', 2),
(3, '2', 'https://vedabase.io/en/library/bg/1/2/', 1);

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
  ADD PRIMARY KEY (`chapter_id`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `exam_details`
--
ALTER TABLE `exam_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_answers_id` (`user_answers_id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`oid`),
  ADD KEY `question_id` (`qid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`),
  ADD KEY `right_option` (`right_option`),
  ADD KEY `vid` (`vid`),
  ADD KEY `sid` (`sid`),
  ADD KEY `chapter_id` (`chapter_id`);

--
-- Indexes for table `scriptures`
--
ALTER TABLE `scriptures`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `user_answers`
--
ALTER TABLE `user_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`uid`),
  ADD KEY `question_id` (`qid`),
  ADD KEY `chapter_id` (`chapter_id`),
  ADD KEY `sid` (`sid`),
  ADD KEY `vid` (`vid`),
  ADD KEY `user_answers_ibfk_6` (`oid`);

--
-- Indexes for table `verse`
--
ALTER TABLE `verse`
  ADD PRIMARY KEY (`vid`),
  ADD KEY `chapter_id` (`chapter_id`);

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
  MODIFY `chapter_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exam_details`
--
ALTER TABLE `exam_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `oid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `scriptures`
--
ALTER TABLE `scriptures`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_answers`
--
ALTER TABLE `user_answers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `verse`
--
ALTER TABLE `verse`
  MODIFY `vid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chapters`
--
ALTER TABLE `chapters`
  ADD CONSTRAINT `chapters_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `scriptures` (`sid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `exam_details`
--
ALTER TABLE `exam_details`
  ADD CONSTRAINT `exam_details_ibfk_1` FOREIGN KEY (`user_answers_id`) REFERENCES `user_answers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_ibfk_1` FOREIGN KEY (`qid`) REFERENCES `questions` (`qid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`vid`) REFERENCES `verse` (`vid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`chapter_id`) REFERENCES `chapters` (`chapter_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `questions_ibfk_3` FOREIGN KEY (`sid`) REFERENCES `scriptures` (`sid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `centers` (`cid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_answers`
--
ALTER TABLE `user_answers`
  ADD CONSTRAINT `user_answers_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_answers_ibfk_2` FOREIGN KEY (`qid`) REFERENCES `questions` (`qid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_answers_ibfk_3` FOREIGN KEY (`chapter_id`) REFERENCES `chapters` (`chapter_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_answers_ibfk_4` FOREIGN KEY (`sid`) REFERENCES `scriptures` (`sid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_answers_ibfk_5` FOREIGN KEY (`vid`) REFERENCES `verse` (`vid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `verse`
--
ALTER TABLE `verse`
  ADD CONSTRAINT `verse_ibfk_1` FOREIGN KEY (`chapter_id`) REFERENCES `chapters` (`chapter_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
