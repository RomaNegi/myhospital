-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Nov 06, 2016 at 11:29 AM
-- Server version: 5.5.42
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `myhospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank`
--

CREATE TABLE `bloodbank` (
  `id` int(15) NOT NULL,
  `bloodbankname` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `timing` varchar(15) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodbank`
--

INSERT INTO `bloodbank` (`id`, `bloodbankname`, `address`, `timing`, `created`, `updated`) VALUES
(1, '', 'hggiub', 'gbiuyui', '2016-10-16 15:59:45', NULL),
(2, '', 'gxfbdbdb', 'igy', '2016-11-06 09:08:32', NULL),
(3, 'ihro ', 'buo', 'biou', '2016-11-06 09:30:28', NULL),
(4, 'ihro ', 'buo', 'biou', '2016-11-06 09:32:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chemist`
--

CREATE TABLE `chemist` (
  `id` int(15) NOT NULL,
  `chemistname` varchar(250) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `timing` varchar(15) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chemist`
--

INSERT INTO `chemist` (`id`, `chemistname`, `address`, `timing`, `created`, `updated`) VALUES
(1, 'Bhavishya Medical', 'hbiuyiniu', 'biyiobh', '2016-10-16 15:56:12', NULL),
(2, 'united chemist', 'hbilnu', 'ihuyoin', '2016-10-17 16:40:58', NULL),
(3, '', 'gxfbdbdb', 'igy', '2016-11-06 09:08:48', NULL),
(4, 'bjv', 'viy', 'viyu', '2016-11-06 09:33:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(15) NOT NULL,
  `doctorname` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contactno` varchar(12) DEFAULT NULL,
  `specialists` varchar(255) DEFAULT NULL,
  `timing` varchar(15) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `doctorname`, `address`, `contactno`, `specialists`, `timing`, `created`, `updated`) VALUES
(1, 'roman', 'dfvdb d', 'vwsvdsvsdv', 'vhsvdbvi', 'nvikdsbvbehib', '2016-11-06 09:11:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Hospital`
--

CREATE TABLE `Hospital` (
  `id` int(15) NOT NULL,
  `hospitalname` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contactno` varchar(12) DEFAULT NULL,
  `listofdoctors` varchar(255) DEFAULT NULL,
  `listoftreatments` varchar(255) DEFAULT NULL,
  `listofservices` varchar(255) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Hospital`
--

INSERT INTO `Hospital` (`id`, `hospitalname`, `address`, `contactno`, `listofdoctors`, `listoftreatments`, `listofservices`, `created`, `updated`) VALUES
(1, 'QRG', '12jkl hb', '1345', 'jiij', 'mjioo', 'imuiou', '2016-10-16 10:05:15', NULL),
(2, 'uhyui', 'nnklkjl', '7687', 'biuyuv', 'buyvk', 'biuygiby', '2016-10-16 14:39:19', NULL),
(3, 'asian', 'kuioo', 'niybi', 'iui', 'jjo', 'ouo', '2016-10-18 07:58:57', NULL),
(4, 'asian', 'inio', 'byb', 'nuyh', 'nyh', 'nyh', '2016-10-19 14:08:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `panel_user`
--

CREATE TABLE `panel_user` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panel_user`
--

INSERT INTO `panel_user` (`id`, `name`, `user_name`, `password`) VALUES
(1, 'roma', 'romanegi', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `pathologylabs`
--

CREATE TABLE `pathologylabs` (
  `id` int(15) NOT NULL,
  `pathologyname` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contactno` varchar(15) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pathologylabs`
--

INSERT INTO `pathologylabs` (`id`, `pathologyname`, `address`, `contactno`, `created`, `updated`) VALUES
(1, '', '', '', '2016-10-16 16:05:29', NULL),
(2, 'xdbxfbdx', 'xbfxbd', 'bxbxbxbbcxbd', '2016-11-06 09:09:07', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodbank`
--
ALTER TABLE `bloodbank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chemist`
--
ALTER TABLE `chemist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Hospital`
--
ALTER TABLE `Hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panel_user`
--
ALTER TABLE `panel_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pathologylabs`
--
ALTER TABLE `pathologylabs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodbank`
--
ALTER TABLE `bloodbank`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `chemist`
--
ALTER TABLE `chemist`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Hospital`
--
ALTER TABLE `Hospital`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `panel_user`
--
ALTER TABLE `panel_user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pathologylabs`
--
ALTER TABLE `pathologylabs`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;