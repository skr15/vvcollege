
-- Database: `vvkcollege`
--

-- --------------------------------------------------------

--
-- Table structure for table `attend_master`
--

CREATE TABLE IF NOT EXISTS `attend_master` (
  `att_id` int(40) NOT NULL AUTO_INCREMENT,
  `course_id` int(30) DEFAULT NULL,
  `sem_id` int(30) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end` date NOT NULL,
  `working_days` int(20) NOT NULL,
  `declard` varchar(15) NOT NULL,
  PRIMARY KEY (`att_id`),
  KEY `ca` (`course_id`),
  KEY `st` (`sem_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--


--
-- Table structure for table `collegeinfo_master`
--

CREATE TABLE IF NOT EXISTS `collegeinfo_master` (
  `info_id` int(30) NOT NULL AUTO_INCREMENT,
  `info_type` varchar(30) DEFAULT NULL,
  `info` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`info_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--

--
-- Table structure for table `couee_msss`
--

CREATE TABLE IF NOT EXISTS `couee_msss` (
  `sfds` int(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `couee_msss`
--


-- --------------------------------------------------------

--
-- Table structure for table `course_master`
--

CREATE TABLE IF NOT EXISTS `course_master` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `no_of_sem` int(11) DEFAULT NULL,
  `course_name` varchar(10) DEFAULT NULL,
  `no_of_year` int(11) NOT NULL,
  `max_seat` int(11) NOT NULL,
  `starting_date` date NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--


--
-- Table structure for table `download_master`
--

CREATE TABLE IF NOT EXISTS `download_master` (
  `down_id` int(50) NOT NULL AUTO_INCREMENT,
  `course_id` int(25) DEFAULT NULL,
  `down_title` varchar(50) DEFAULT NULL,
  `path` varchar(150) DEFAULT NULL,
  `down_type` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`down_id`),
  KEY `par_ind` (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=235 ;

--


--
-- Table structure for table `event_master`
--

CREATE TABLE IF NOT EXISTS `event_master` (
  `event_name` varchar(35) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date NOT NULL,
  `dis` varchar(200) NOT NULL,
  `event_id` int(25) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--


--
-- Table structure for table `exam_master`
--

CREATE TABLE IF NOT EXISTS `exam_master` (
  `exam_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `course_id` int(20) DEFAULT NULL,
  `sem_id` int(30) NOT NULL,
  `examtype` varchar(30) NOT NULL,
  `duration` date NOT NULL,
  `declard` varchar(5) NOT NULL,
  `status_tt` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`exam_id`),
  KEY `sem_ind` (`course_id`),
  KEY `semid` (`sem_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--


--
-- Table structure for table `faculty_master`
--

CREATE TABLE IF NOT EXISTS `faculty_master` (
  `fac_id` int(30) NOT NULL AUTO_INCREMENT,
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
  `DOJ` date DEFAULT NULL,
  PRIMARY KEY (`fac_id`),
  KEY `cours_eid` (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--


--
-- Table structure for table `login_master`
--

CREATE TABLE IF NOT EXISTS `login_master` (
  `user_type_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(60) DEFAULT NULL,
  `login_id` int(30) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`login_id`),
  KEY `user_ind` (`user_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--


--
-- Table structure for table `news_master`
--

CREATE TABLE IF NOT EXISTS `news_master` (
  `news_name` varchar(120) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date NOT NULL,
  `dis` varchar(200) NOT NULL,
  `news_id` int(25) NOT NULL AUTO_INCREMENT,
  `down_id` int(50) DEFAULT NULL,
  PRIMARY KEY (`news_id`),
  KEY `attend_master_idfk_2` (`down_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=125 ;

--


--
-- Table structure for table `result_master`
--

CREATE TABLE IF NOT EXISTS `result_master` (
  `exam_id` bigint(20) DEFAULT NULL,
  `stud_id` int(100) NOT NULL,
  `marks` int(30) NOT NULL,
  `sub_id` int(40) NOT NULL,
  `division` varchar(4) DEFAULT NULL,
  `id` int(50) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `s_id` (`exam_id`),
  KEY `semd` (`stud_id`),
  KEY `ind` (`sub_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;


--
-- Table structure for table `sem_master`
--

CREATE TABLE IF NOT EXISTS `sem_master` (
  `sem_id` int(50) NOT NULL AUTO_INCREMENT,
  `course_id` int(20) DEFAULT NULL,
  `year` varchar(13) NOT NULL,
  `sem_no` int(20) NOT NULL,
  `total_sub` int(20) NOT NULL,
  PRIMARY KEY (`sem_id`),
  KEY `sem_ind` (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--

--
-- Table structure for table `stud_attend_master`
--

CREATE TABLE IF NOT EXISTS `stud_attend_master` (
  `att_id` int(40) NOT NULL,
  `stud_id` int(40) DEFAULT NULL,
  `sub_id` int(40) DEFAULT NULL,
  `tot_present` int(25) DEFAULT NULL,
  `division` varchar(10) NOT NULL,
  `id` int(50) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `att` (`att_id`),
  KEY `subb` (`sub_id`),
  KEY `fss` (`stud_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=391 ;

--

--
-- Table structure for table `stud_master`
--

CREATE TABLE IF NOT EXISTS `stud_master` (
  `stud_id` int(50) NOT NULL AUTO_INCREMENT,
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
  `DOB` date NOT NULL,
  PRIMARY KEY (`stud_id`),
  KEY `par_ind` (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=365 ;

--

--
-- Table structure for table `sub_master`
--

CREATE TABLE IF NOT EXISTS `sub_master` (
  `sub_id` int(50) NOT NULL AUTO_INCREMENT,
  `sem_id` int(20) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `sub_code` varchar(30) DEFAULT NULL,
  `total_marks` int(20) NOT NULL,
  PRIMARY KEY (`sub_id`),
  KEY `sem_ind` (`sem_id`),
  KEY `sub_id` (`sub_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
--
-- Table structure for table `sub_taken_master`
--

CREATE TABLE IF NOT EXISTS `sub_taken_master` (
  `fac_id` int(15) DEFAULT NULL,
  `course_id` int(30) DEFAULT NULL,
  `sem_id` int(25) DEFAULT NULL,
  `sub_id` int(25) DEFAULT NULL,
  `exam_id` int(25) DEFAULT NULL,
  `division` varchar(5) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `declard` varchar(10) DEFAULT NULL,
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `att_id` int(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `f_id` (`fac_id`),
  KEY `caa` (`course_id`),
  KEY `sam` (`sem_id`),
  KEY `subb` (`sub_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
--
-- Table structure for table `user_master`
--

CREATE TABLE IF NOT EXISTS `user_master` (
  `user_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(10) NOT NULL,
  PRIMARY KEY (`user_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
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
