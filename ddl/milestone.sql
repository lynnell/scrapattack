-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2014 at 07:22 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

-- --------------------------------------------------------

--
-- Table structure for table `milestone`
--

CREATE TABLE IF NOT EXISTS `milestone` (
  `milestoneid` char(30) NOT NULL DEFAULT '',
  `parentid` char(30) NOT NULL,
  `milestone_cd` char(30) NOT NULL,
  `milestone_value` varchar(300) NOT NULL,
  `milestone_timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `milestoneid` (`milestoneid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `milestone`
--

INSERT INTO `milestone` (`milestoneid`, `parentid`, `milestone_cd`, `milestone_value`, `timestamp`) VALUES
('1', '152253e6-ccf8-11e3-b2d7-00ffd0', '1', 'Ball', '2014-04-27 00:00:37');

-- --------------------------------------------------------

--
-- Table structure for table `milestoneLookup`
--

CREATE TABLE IF NOT EXISTS `milestoneLookup` (
  `milestone_cd` char(30) NOT NULL DEFAULT '',
  `milestone_desc` varchar(300) NOT NULL,
  UNIQUE KEY `milestone_cd` (`milestone_cd`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Inserting data for table `milestoneLookup`
--

INSERT INTO `milestoneLookup` (`milestone_cd`, `milestone_desc`) VALUES
('1', 'First Word');

-- --------------------------------------------------------

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


ALTER TABLE `milestonelookup` ADD `milestoneType` VARCHAR(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ;

INSERT INTO `scrapattack`.`milestonelookup` (`milestone_cd`, `milestone_desc`, `milestoneType`) VALUES ('2', 'Favorite Toy', 'First Years');


