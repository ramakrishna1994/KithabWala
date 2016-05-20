<?php 

require_once 'connection.php';








		$insertQuery='drop table if exists approvedposts';
					
		mysqli_query($con,$insertQuery) or die(mysqli_error($con));
		
		$insertQuery='drop table if exists pendingposts';
					
		mysqli_query($con,$insertQuery) or die(mysqli_error($con));
		
		$insertQuery='drop table if exists users';
					
		mysqli_query($con,$insertQuery) or die(mysqli_error($con));
		
		$insertQuery='drop table if exists subscriptionemails';
					
		mysqli_query($con,$insertQuery) or die(mysqli_error($con));
		
		$createquery = 'CREATE TABLE IF NOT EXISTS `approvedposts` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;';

mysqli_query($con,$createquery) or die(mysqli_error($con));

$createquery = 'CREATE TABLE IF NOT EXISTS `pendingposts` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;';

mysqli_query($con,$createquery) or die(mysqli_error($con));

$createquery = 'CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `emailid` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `profileimage` varchar(100) DEFAULT NULL,
  `isadmin` int(11) DEFAULT NULL,
  `resetpasswordhash` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;';

mysqli_query($con,$createquery) or die(mysqli_error($con));

$createquery = 'CREATE TABLE IF NOT EXISTS `subscriptionemails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;';

mysqli_query($con,$createquery) or die(mysqli_error($con));

$createquery = "INSERT INTO `users` (`userid`, `firstname`, `lastname`, `emailid`, `password`, `profileimage`, `isadmin`, `resetpasswordhash`) VALUES
(2, 'saradhi', 'ramakrishna', 'ramakrishnasaradhi@gmail.com', 'miKKdixtgVAu2', 'user.jpg', 0, '12029716288324879121743122526298'),
(3, 'admin', 'admin', 'admin@kithabwala.com', '!@Fugcg161Fy6', 'admin@kithabwala.com.jpg', 1, '23626787835860834442624025825712');";

mysqli_query($con,$createquery) or die(mysqli_error($con));
		
	



?>