-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2020 at 09:00 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vvkcollege`
--

-- --------------------------------------------------------

--
-- Table structure for table `attend_master`
--

CREATE TABLE `attend_master` (
  `att_id` int(40) NOT NULL,
  `course_id` int(30) DEFAULT NULL,
  `sem_id` int(30) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end` date NOT NULL,
  `working_days` int(20) NOT NULL,
  `declard` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `collegeinfo_master`
--

CREATE TABLE `collegeinfo_master` (
  `info_id` int(30) NOT NULL,
  `info_type` varchar(30) DEFAULT NULL,
  `info` varchar(2000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `couee_msss`
--

CREATE TABLE `couee_msss` (
  `sfds` int(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_master`
--

CREATE TABLE `course_master` (
  `course_id` int(11) NOT NULL,
  `no_of_sem` int(11) DEFAULT NULL,
  `course_name` varchar(10) DEFAULT NULL,
  `no_of_year` int(11) NOT NULL,
  `max_seat` int(11) NOT NULL,
  `starting_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `download_master`
--

CREATE TABLE `download_master` (
  `down_id` int(50) NOT NULL,
  `course_id` int(25) DEFAULT NULL,
  `down_title` varchar(50) DEFAULT NULL,
  `path` varchar(150) DEFAULT NULL,
  `down_type` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event_master`
--

CREATE TABLE `event_master` (
  `event_name` varchar(35) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date NOT NULL,
  `dis` varchar(200) NOT NULL,
  `event_id` int(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exam_master`
--

CREATE TABLE `exam_master` (
  `exam_id` bigint(20) NOT NULL,
  `course_id` int(20) DEFAULT NULL,
  `sem_id` int(30) NOT NULL,
  `examtype` varchar(30) NOT NULL,
  `duration` date NOT NULL,
  `declard` varchar(5) NOT NULL,
  `status_tt` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty_master`
--

CREATE TABLE `faculty_master` (
  `fac_id` int(30) NOT NULL,
  `fac_name` varchar(90) NOT NULL,
  `qulifiaction` varchar(25) NOT NULL,
  `desigation` varchar(30) NOT NULL,
  `course_id` int(20) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `contact_no` varchar(20) DEFAULT NULL,
  `DOB` date NOT NULL,
  `salary` int(20) NOT NULL,
  `add1` varchar(30) NOT NULL,
  `add2` varchar(30) NOT NULL,
  `exp` int(20) NOT NULL,
  `path` varchar(50) DEFAULT NULL,
  `user_name` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `gender` int(2) DEFAULT NULL,
  `DOJ` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_master`
--

CREATE TABLE `login_master` (
  `login_id` int(30) NOT NULL,
  `user_type_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_master`
--

INSERT INTO `login_master` (`login_id`, `user_type_id`, `user_name`, `password`) VALUES
(1, 1, 'myadmin', 'password'),
(2, 2, 'mystaff', 'developer'),
(3, 3, 'mystudent', 'developer');

-- --------------------------------------------------------

--
-- Table structure for table `news_master`
--

CREATE TABLE `news_master` (
  `news_name` varchar(120) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date NOT NULL,
  `dis` varchar(200) NOT NULL,
  `news_id` int(25) NOT NULL,
  `down_id` int(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result_master`
--

CREATE TABLE `result_master` (
  `exam_id` bigint(20) DEFAULT NULL,
  `stud_id` int(100) NOT NULL,
  `marks` int(30) NOT NULL,
  `sub_id` int(40) NOT NULL,
  `division` varchar(4) DEFAULT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sem_master`
--

CREATE TABLE `sem_master` (
  `sem_id` int(50) NOT NULL,
  `course_id` int(20) DEFAULT NULL,
  `year` varchar(13) NOT NULL,
  `sem_no` int(20) NOT NULL,
  `total_sub` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stud_attend_master`
--

CREATE TABLE `stud_attend_master` (
  `att_id` int(40) NOT NULL,
  `stud_id` int(40) DEFAULT NULL,
  `sub_id` int(40) DEFAULT NULL,
  `tot_present` int(25) DEFAULT NULL,
  `division` varchar(10) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stud_master`
--

CREATE TABLE `stud_master` (
  `stud_id` int(50) NOT NULL,
  `course_id` int(15) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `mobile_no` varchar(20) DEFAULT NULL,
  `parent_mobile_no` varchar(20) DEFAULT NULL,
  `gender` tinyint(1) NOT NULL,
  `status` varchar(7) NOT NULL,
  `add1` varchar(30) NOT NULL,
  `add2` varchar(30) DEFAULT NULL,
  `email_id` varchar(39) NOT NULL,
  `DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_master`
--

CREATE TABLE `sub_master` (
  `sub_id` int(50) NOT NULL,
  `sem_id` int(20) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_code` varchar(30) DEFAULT NULL,
  `total_marks` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_taken_master`
--

CREATE TABLE `sub_taken_master` (
  `fac_id` int(15) DEFAULT NULL,
  `course_id` int(30) DEFAULT NULL,
  `sem_id` int(25) DEFAULT NULL,
  `sub_id` int(25) DEFAULT NULL,
  `exam_id` int(25) DEFAULT NULL,
  `division` varchar(5) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `declard` varchar(10) DEFAULT NULL,
  `id` int(50) NOT NULL,
  `att_id` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `user_type_id` int(11) NOT NULL,
  `user_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`user_type_id`, `user_type`) VALUES
(1, 'admin'),
(2, 'staff'),
(3, 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attend_master`
--
ALTER TABLE `attend_master`
  ADD PRIMARY KEY (`att_id`),
  ADD KEY `ca` (`course_id`),
  ADD KEY `st` (`sem_id`);

--
-- Indexes for table `collegeinfo_master`
--
ALTER TABLE `collegeinfo_master`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `course_master`
--
ALTER TABLE `course_master`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `download_master`
--
ALTER TABLE `download_master`
  ADD PRIMARY KEY (`down_id`),
  ADD KEY `par_ind` (`course_id`);

--
-- Indexes for table `event_master`
--
ALTER TABLE `event_master`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `exam_master`
--
ALTER TABLE `exam_master`
  ADD PRIMARY KEY (`exam_id`),
  ADD KEY `sem_ind` (`course_id`),
  ADD KEY `semid` (`sem_id`);

--
-- Indexes for table `faculty_master`
--
ALTER TABLE `faculty_master`
  ADD PRIMARY KEY (`fac_id`),
  ADD KEY `cours_eid` (`course_id`);

--
-- Indexes for table `login_master`
--
ALTER TABLE `login_master`
  ADD PRIMARY KEY (`login_id`),
  ADD KEY `user_ind` (`user_type_id`);

--
-- Indexes for table `news_master`
--
ALTER TABLE `news_master`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `attend_master_idfk_2` (`down_id`);

--
-- Indexes for table `result_master`
--
ALTER TABLE `result_master`
  ADD PRIMARY KEY (`id`),
  ADD KEY `s_id` (`exam_id`),
  ADD KEY `semd` (`stud_id`),
  ADD KEY `ind` (`sub_id`);

--
-- Indexes for table `sem_master`
--
ALTER TABLE `sem_master`
  ADD PRIMARY KEY (`sem_id`),
  ADD KEY `sem_ind` (`course_id`);

--
-- Indexes for table `stud_attend_master`
--
ALTER TABLE `stud_attend_master`
  ADD PRIMARY KEY (`id`),
  ADD KEY `att` (`att_id`),
  ADD KEY `subb` (`sub_id`),
  ADD KEY `fss` (`stud_id`);

--
-- Indexes for table `stud_master`
--
ALTER TABLE `stud_master`
  ADD PRIMARY KEY (`stud_id`),
  ADD KEY `par_ind` (`course_id`);

--
-- Indexes for table `sub_master`
--
ALTER TABLE `sub_master`
  ADD PRIMARY KEY (`sub_id`),
  ADD KEY `sem_ind` (`sem_id`),
  ADD KEY `sub_id` (`sub_id`);

--
-- Indexes for table `sub_taken_master`
--
ALTER TABLE `sub_taken_master`
  ADD PRIMARY KEY (`id`),
  ADD KEY `f_id` (`fac_id`),
  ADD KEY `caa` (`course_id`),
  ADD KEY `sam` (`sem_id`),
  ADD KEY `subb` (`sub_id`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`user_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attend_master`
--
ALTER TABLE `attend_master`
  MODIFY `att_id` int(40) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `collegeinfo_master`
--
ALTER TABLE `collegeinfo_master`
  MODIFY `info_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course_master`
--
ALTER TABLE `course_master`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `download_master`
--
ALTER TABLE `download_master`
  MODIFY `down_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_master`
--
ALTER TABLE `event_master`
  MODIFY `event_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `exam_master`
--
ALTER TABLE `exam_master`
  MODIFY `exam_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty_master`
--
ALTER TABLE `faculty_master`
  MODIFY `fac_id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_master`
--
ALTER TABLE `login_master`
  MODIFY `login_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news_master`
--
ALTER TABLE `news_master`
  MODIFY `news_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `result_master`
--
ALTER TABLE `result_master`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sem_master`
--
ALTER TABLE `sem_master`
  MODIFY `sem_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stud_attend_master`
--
ALTER TABLE `stud_attend_master`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stud_master`
--
ALTER TABLE `stud_master`
  MODIFY `stud_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_master`
--
ALTER TABLE `sub_master`
  MODIFY `sub_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_taken_master`
--
ALTER TABLE `sub_taken_master`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `user_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attend_master`
--
ALTER TABLE `attend_master`
  ADD CONSTRAINT `attend_master_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course_master` (`course_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `attend_master_ibfk_2` FOREIGN KEY (`sem_id`) REFERENCES `sem_master` (`sem_id`) ON DELETE CASCADE;

--
-- Constraints for table `download_master`
--
ALTER TABLE `download_master`
  ADD CONSTRAINT `download_master_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course_master` (`course_id`) ON DELETE CASCADE;

--
-- Constraints for table `exam_master`
--
ALTER TABLE `exam_master`
  ADD CONSTRAINT `exam_master_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course_master` (`course_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_master_ibfk_2` FOREIGN KEY (`sem_id`) REFERENCES `sem_master` (`sem_id`) ON DELETE CASCADE;

--
-- Constraints for table `login_master`
--
ALTER TABLE `login_master`
  ADD CONSTRAINT `login_master_ibfk_1` FOREIGN KEY (`user_type_id`) REFERENCES `user_master` (`user_type_id`) ON DELETE CASCADE;

--
-- Constraints for table `result_master`
--
ALTER TABLE `result_master`
  ADD CONSTRAINT `result_master_ibfk_1` FOREIGN KEY (`exam_id`) REFERENCES `exam_master` (`exam_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `result_master_ibfk_2` FOREIGN KEY (`stud_id`) REFERENCES `stud_master` (`stud_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `result_master_ibfk_3` FOREIGN KEY (`sub_id`) REFERENCES `sub_master` (`sub_id`) ON DELETE CASCADE;

--
-- Constraints for table `sem_master`
--
ALTER TABLE `sem_master`
  ADD CONSTRAINT `sem_master_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course_master` (`course_id`) ON DELETE CASCADE;

--
-- Constraints for table `stud_attend_master`
--
ALTER TABLE `stud_attend_master`
  ADD CONSTRAINT `stud_attend_master_ibfk_1` FOREIGN KEY (`att_id`) REFERENCES `attend_master` (`att_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `stud_attend_master_ibfk_2` FOREIGN KEY (`sub_id`) REFERENCES `sub_master` (`sub_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `stud_attend_master_ibfk_3` FOREIGN KEY (`stud_id`) REFERENCES `stud_master` (`stud_id`) ON DELETE CASCADE;

--
-- Constraints for table `stud_master`
--
ALTER TABLE `stud_master`
  ADD CONSTRAINT `stud_master_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course_master` (`course_id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_master`
--
ALTER TABLE `sub_master`
  ADD CONSTRAINT `sub_master_ibfk_1` FOREIGN KEY (`sem_id`) REFERENCES `sem_master` (`sem_id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_taken_master`
--
ALTER TABLE `sub_taken_master`
  ADD CONSTRAINT `sub_taken_master_ibfk_1` FOREIGN KEY (`fac_id`) REFERENCES `faculty_master` (`fac_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sub_taken_master_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course_master` (`course_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sub_taken_master_ibfk_3` FOREIGN KEY (`sem_id`) REFERENCES `sem_master` (`sem_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sub_taken_master_ibfk_4` FOREIGN KEY (`sub_id`) REFERENCES `sub_master` (`sub_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
