-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2014 at 10:19 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `scrapattack`
--

-- --------------------------------------------------------

--
-- Table structure for table `twilliotest`
--

CREATE TABLE IF NOT EXISTS `twiliosms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `dump` varchar(40000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `twiliosms`
--

INSERT INTO `twiliosms` (`id`, `ts`, `dump`) VALUES
(1, '2014-03-24 21:53:15', 'ToCountry=US\nToState=MN\nSmsMessageSid=SMe4835283a1a2b6757c588f29d99bdd1b\nNumMedia=0\nToCity=MINNEAPOLIS\nFromZip=55433\nSmsSid=SMe4835283a1a2b6757c588f29d99bdd1b\nFromState=MN\nSmsStatus=received\nFromCity=MINNEAPOLIS\nBody=One more time.\nFromCountry=US\nTo=+16122551559\nToZip=55401\nMessageSid=SMe4835283a1a2b6757c588f29d99bdd1b\nAccountSid=ACcc0ce8fe23f48f7dcc527e9f3b25f417\nFrom=+16128125823\nApiVersion=2010-04-01\n'),
(2, '2014-04-01 19:49:45', 'ToCountry=US\nToState=MN\nSmsMessageSid=SM4636b89342f4ffdbd9039bc602d8d968\nNumMedia=0\nToCity=MINNEAPOLIS\nFromZip=55433\nSmsSid=SM4636b89342f4ffdbd9039bc602d8d968\nFromState=MN\nSmsStatus=received\nFromCity=MINNEAPOLIS\nBody=Are you still working? \nFromCountry=US\nTo=+16122551559\nToZip=55401\nMessageSid=SM4636b89342f4ffdbd9039bc602d8d968\nAccountSid=ACcc0ce8fe23f48f7dcc527e9f3b25f417\nFrom=+16128125823\nApiVersion=2010-04-01\n'),
(3, '2014-05-04 17:36:16', 'ToCountry=US\nToState=MN\nSmsMessageSid=SM8d9ae1db9e3050e132dfc6751822aa89\nNumMedia=0\nToCity=MINNEAPOLIS\nFromZip=55433\nSmsSid=SM8d9ae1db9e3050e132dfc6751822aa89\nFromState=MN\nSmsStatus=received\nFromCity=MINNEAPOLIS\nBody=Testing... 123.\nFromCountry=US\nTo=+16122551559\nToZip=55401\nMessageSid=SM8d9ae1db9e3050e132dfc6751822aa89\nAccountSid=ACcc0ce8fe23f48f7dcc527e9f3b25f417\nFrom=+16128125823\nApiVersion=2010-04-01\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
