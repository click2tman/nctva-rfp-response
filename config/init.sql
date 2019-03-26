-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 26, 2019 at 09:36 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `nctvadevdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `campus`
--

CREATE TABLE `campus` (
  `pk_campus` int(11) NOT NULL COMMENT 'Unique identifierof data set',
  `fk_city` int(11) NOT NULL COMMENT 'City where the campus islocated',
  `fk_tvetprovider` int(11) NOT NULL COMMENT 'TVET provider the campus belongs to',
  `campusname` varchar(100) NOT NULL COMMENT 'Official name of the campus'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `campus`
--

INSERT INTO `campus` (`pk_campus`, `fk_city`, `fk_tvetprovider`, `campusname`) VALUES
(1, 1, 1, 'Lumley Campus'),
(2, 1, 1, 'Calaba Town Campus'),
(3, 2, 2, 'Bo Town Campus'),
(4, 2, 2, 'Bo City Campus'),
(5, 3, 4, 'Kenema Campus');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `pk_city` int(11) NOT NULL COMMENT 'Unique identifierof data set',
  `cityname` varchar(50) NOT NULL COMMENT 'Name of the city'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`pk_city`, `cityname`) VALUES
(1, 'Freetown'),
(2, 'Bo'),
(3, 'Kenema'),
(4, 'Makeni');

-- --------------------------------------------------------

--
-- Table structure for table `educational_services`
--

CREATE TABLE `educational_services` (
  `pk_edus` int(11) NOT NULL COMMENT 'Unique identifierof data set',
  `fk_campus` int(11) NOT NULL COMMENT 'Campus where the service is offered',
  `fk_profession` int(11) NOT NULL COMMENT 'Profession for which the service is offered',
  `inyear` year(4) NOT NULL COMMENT 'Year in which the service is offered'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `educational_services`
--

INSERT INTO `educational_services` (`pk_edus`, `fk_campus`, `fk_profession`, `inyear`) VALUES
(1, 1, 1, 2018),
(2, 2, 2, 2018),
(3, 1, 2, 2018),
(4, 1, 3, 2018),
(5, 1, 1, 2010),
(6, 1, 1, 2010),
(7, 2, 2, 2011),
(8, 2, 2, 2011),
(9, 3, 3, 2012),
(10, 3, 3, 2012),
(11, 3, 1, 2013),
(12, 5, 1, 2013),
(13, 2, 2, 2014),
(14, 2, 2, 2014),
(15, 3, 3, 2015),
(16, 3, 3, 2015),
(17, 1, 1, 2016),
(18, 1, 1, 2016),
(19, 2, 2, 2017),
(20, 2, 2, 2017),
(21, 2, 2, 2019),
(22, 2, 2, 2019);

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `pk_enr` int(11) NOT NULL COMMENT 'Unique identifierof data set',
  `fk_edus` int(11) NOT NULL COMMENT 'Profession, campus and yearof enrollment',
  `fk_student` int(11) NOT NULL COMMENT 'Student who is enrolled'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`pk_enr`, `fk_edus`, `fk_student`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 10),
(4, 2, 10),
(5, 4, 9),
(6, 4, 9),
(7, 7, 6),
(8, 7, 5);

-- --------------------------------------------------------

--
-- Table structure for table `profession`
--

CREATE TABLE `profession` (
  `pk_prof` int(11) NOT NULL COMMENT 'Unique identifierof data set',
  `profshort` varchar(10) NOT NULL COMMENT 'Short cut of profession, according to NCTVA''s register',
  `profname` varchar(50) NOT NULL COMMENT 'Name of the profession, can be verbose'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profession`
--

INSERT INTO `profession` (`pk_prof`, `profshort`, `profname`) VALUES
(1, 'Eng.', 'Engineering'),
(2, 'Sci.', 'Science'),
(3, 'BA', 'Business Administration'),
(4, 'WEL', 'Welding'),
(5, 'SOFTENG', 'Software Engineering and Development'),
(6, 'ELEE', 'Electronics Engineering'),
(7, 'HAIR', 'Hairdressing'),
(8, 'NUR', 'Nursing'),
(9, 'CIVENG', 'Civil Engineering'),
(10, 'ITDATA', 'IT Data Analysts');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `pk_student` int(11) NOT NULL COMMENT 'Unique identifierof data set',
  `nctva_id` varchar(20) DEFAULT NULL COMMENT 'Bi-unique idetifierwith NCTVA "NCTVA-ID"'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`pk_student`, `nctva_id`) VALUES
(1, 'ncvta-id-0001'),
(2, 'ncvta-id-0002'),
(3, 'ncvta-id-0003'),
(4, 'ncvta-id-0004'),
(5, 'ncvta-id-0005'),
(6, 'ncvta-id-0006'),
(7, 'ncvta-id-0007'),
(8, 'ncvta-id-0007'),
(9, 'ncvta-id-0009'),
(10, 'ncvta-id-0010');

-- --------------------------------------------------------

--
-- Table structure for table `TVET_provider`
--

CREATE TABLE `TVET_provider` (
  `pk_tvetp` int(11) NOT NULL COMMENT 'Unique identifierof data set',
  `tpname` varchar(100) NOT NULL COMMENT 'Official name of the TVET provider'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TVET_provider`
--

INSERT INTO `TVET_provider` (`pk_tvetp`, `tpname`) VALUES
(1, 'TVET Provider 1'),
(2, 'TVET Provider 2'),
(3, 'TVET Provider 3'),
(4, 'TVET Provider 4'),
(6, 'toim'),
(7, 'Tamba');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campus`
--
ALTER TABLE `campus`
  ADD PRIMARY KEY (`pk_campus`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`pk_city`);

--
-- Indexes for table `educational_services`
--
ALTER TABLE `educational_services`
  ADD PRIMARY KEY (`pk_edus`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`pk_enr`);

--
-- Indexes for table `profession`
--
ALTER TABLE `profession`
  ADD PRIMARY KEY (`pk_prof`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`pk_student`);

--
-- Indexes for table `TVET_provider`
--
ALTER TABLE `TVET_provider`
  ADD PRIMARY KEY (`pk_tvetp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campus`
--
ALTER TABLE `campus`
  MODIFY `pk_campus` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Unique identifierof data set', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `pk_city` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Unique identifierof data set', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `educational_services`
--
ALTER TABLE `educational_services`
  MODIFY `pk_edus` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Unique identifierof data set', AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `pk_enr` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Unique identifierof data set', AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `profession`
--
ALTER TABLE `profession`
  MODIFY `pk_prof` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Unique identifierof data set', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `pk_student` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Unique identifierof data set', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `TVET_provider`
--
ALTER TABLE `TVET_provider`
  MODIFY `pk_tvetp` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Unique identifierof data set', AUTO_INCREMENT=8;
