<?php 

require_once 'connection.php';
session_start();
session_unset();

$username=mysqli_real_escape_string($con,$_POST['username']);
$comment=mysqli_real_escape_string($con,$_POST['comment']);
$id=mysqli_real_escape_string($con,$_POST['postid']);
$rating=mysqli_real_escape_string($con,$_POST['rating']);


			
		
			
			
			$selectquery = "select * from halloffameposts where postid = ".$id;
			$result = mysqli_query($con,$selectquery) or die(mysqli_error($con));
			
			
			
			while($row = mysqli_fetch_array($result)){
				
					
						$oldapprovedcomments = $row['approvedcomments'];
						$oldapprovedusernames = $row['approvedusernames'];
						$oldapproveduserratings = $row['approveduserratings'];
				
						
				
			}
			
			$newapprovedcomments = $oldapprovedcomments . $comment . "01sep01" ;
			$newapprovedusernames = $oldapprovedusernames .  $username ."01sep01" ;
			$newapproveduserratings = $oldapproveduserratings . $rating . "sep" ;
			
			$insertquery = "update halloffameposts set approvedcomments = '".$newapprovedcomments."' , approvedusernames = '".$newapprovedusernames."' , approveduserratings = '".$newapproveduserratings."' where postid = ".$id.";";
			$result = mysqli_query($con,$insertquery) or die(mysqli_error($con));


		
		
		
					
		
			
			
			
						
			
		echo '{"error":0}';
		
	



?>