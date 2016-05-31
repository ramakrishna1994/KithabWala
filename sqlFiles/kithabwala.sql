-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 29, 2016 at 07:15 AM
-- Server version: 5.5.45-cll-lve
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kithabwala`
--

-- --------------------------------------------------------

--
-- Table structure for table `approvedposts`
--

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

--
-- Dumping data for table `approvedposts`
--



-- --------------------------------------------------------

--
-- Table structure for table `halloffameposts`
--

CREATE TABLE IF NOT EXISTS `halloffameposts` (
  `postid` int(11) NOT NULL,
  `posttype` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `theme` varchar(100) NOT NULL,
  `colors` varchar(100) NOT NULL,
  `fonts` varchar(100) NOT NULL,
  `tags` varchar(100) NOT NULL,
  `pendingcomments` varchar(1024) NOT NULL,
  `pendingusernames` varchar(1024) NOT NULL,
  `pendinguserratings` varchar(1024) NOT NULL,
  `approvedusernames` varchar(1024) NOT NULL,
  `approvedcomments` varchar(1024) NOT NULL,
  `approveduserratings` varchar(1024) NOT NULL,
  PRIMARY KEY (`postid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halloffameposts`
--



-- --------------------------------------------------------

--
-- Table structure for table `pendingposts`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1  ;

--
-- Dumping data for table `pendingposts`
--


-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE IF NOT EXISTS `resumes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jobname` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `coverletter` varchar(255) NOT NULL,
  `resumefilename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1  ;

--
-- Dumping data for table `resumes`
--



-- --------------------------------------------------------

--
-- Table structure for table `subscriptionemails`
--

CREATE TABLE IF NOT EXISTS `subscriptionemails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emailid` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ;

--
-- Dumping data for table `subscriptionemails`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1  ;

--
-- Dumping data for table `users`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
