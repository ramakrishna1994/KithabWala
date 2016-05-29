<?php 

require_once 'connection.php';
					
					/*
					$insertQuery='drop table `halloffameposts`';
					mysqli_query($con,$insertQuery) or die(mysqli_error($con));
					*/




/************************table1********************************/
/*
		$insertQuery='CREATE TABLE IF NOT EXISTS `halloffameposts` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;';
					
		mysqli_query($con,$insertQuery) or die(mysqli_error($con));
		
			$insertQuery="
INSERT INTO `halloffameposts` (`postid`, `posttype`, `image`, `title`, `description`, `theme`, `colors`, `fonts`, `tags`, `pendingcomments`, `pendingusernames`, `pendinguserratings`, `approvedusernames`, `approvedcomments`, `approveduserratings`) VALUES
(1, 'design', 'images/challenges_home_banner3.jpg', 'Kithabwala Avengers Theme', 'When you win a competition on Kithabwala, we will put your work into production and make and ship all products to consumers. You''ll receive a portion of every sale, and earn a Kithabwala Store to sell designs using the Kithabwala fulfillment platform.', 'Production', 'red and yellow and white', 'arial', 'Avengers Team tags', '', '', '', 'ramakrishna saradhi01sep01ramakrishna saradhi01sep01admin admin01sep01admin admin01sep01admin admin01sep01', 'asd01sep01hi01sep01nice01sep01rk01sep01hi there01sep01', '5sep1sep4sep5sep5sep')";
					
		mysqli_query($con,$insertQuery) or die(mysqli_error($con));
*/
		
		/************************table2********************************/
		/*
		$insertQuery="
CREATE TABLE IF NOT EXISTS `resumes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jobname` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `coverletter` varchar(255) NOT NULL,
  `resumefilename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;";
					
		mysqli_query($con,$insertQuery) or die(mysqli_error($con));
		
				$insertQuery="

INSERT INTO `resumes` (`id`, `jobname`, `emailid`, `fullname`, `phonenumber`, `coverletter`, `resumefilename`) VALUES
(1, 'Marketing Job', 'asd', 'asd', 'asd', '', 'asd_Koala.jpg')";
					
		mysqli_query($con,$insertQuery) or die(mysqli_error($con));

*/

/************************table3********************************/



?>