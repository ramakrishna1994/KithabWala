-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2016 at 05:02 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kithabwala`
--

-- --------------------------------------------------------

--
-- Table structure for table `approvedposts`
--

DROP TABLE IF EXISTS `approvedposts`;
CREATE TABLE IF NOT EXISTS `approvedposts` (
  `postid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `posttype` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `comment` varchar(1024) NOT NULL,
  `theme` varchar(100) NOT NULL,
  `colors` varchar(100) NOT NULL,
  `fonts` varchar(100) NOT NULL,
  `tags` varchar(100) NOT NULL,
  `filename` varchar(100) NOT NULL,
  PRIMARY KEY (`postid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




-- --------------------------------------------------------

--
-- Table structure for table `pendingposts`
--

DROP TABLE IF EXISTS `pendingposts`;
CREATE TABLE IF NOT EXISTS `pendingposts` (
  `postid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `posttype` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `comment` varchar(1024) NOT NULL,
  `theme` varchar(100) NOT NULL,
  `colors` varchar(100) NOT NULL,
  `fonts` varchar(100) NOT NULL,
  `tags` varchar(100) NOT NULL,
  `filename` varchar(100) NOT NULL,
  PRIMARY KEY (`postid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscriptionemails`
--

DROP TABLE IF EXISTS `subscriptionemails`;
CREATE TABLE IF NOT EXISTS `subscriptionemails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriptionemails`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `emailid` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `profileimage` varchar(100) DEFAULT NULL,
  `isadmin` int(11) DEFAULT NULL,
  `resetpasswordhash` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `firstname`, `lastname`, `emailid`, `password`, `profileimage`, `isadmin`, `resetpasswordhash`) VALUES
(2, 'saradhi', 'ramakrishna', 'ramakrishnasaradhi@gmail.com', 'miKKdixtgVAu2', 'user.jpg', 0, '12029716288324879121743122526298'),
(3, 'admin', 'admin', 'admin@kithabwala.com', '!@Fugcg161Fy6', 'admin@kithabwala.com.jpg', 1, '23626787835860834442624025825712');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
