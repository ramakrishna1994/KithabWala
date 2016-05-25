<?php 

require_once 'connection.php';
session_start();
session_unset();


$comment=mysqli_real_escape_string($con,$_POST['comment']);
$id=mysqli_real_escape_string($con,$_POST['id']);
$rating=mysqli_real_escape_string($con,$_POST['rating']);


			
		
			
			
			$selectquery = "select * from halloffameposts where postid = ".$id;
			$result = mysqli_query($con,$selectquery) or die(mysqli_error($con));
			
			
			
			while($row = mysqli_fetch_array($result)){
				
					
						$oldapprovedcomments = $row['approvedcomments'];
						$oldapprovedusernames = $row['approvedusernames'];
				
						
				
			}
			
			$newapprovedcomments = $oldapprovedcomments . "01sep01" . $comment;
			$newapprovedusernames = $oldapprovedusernames . "01sep01" . $_SESSION['lastname'] . " " . $_SESSION['firstname'];
			
			
			$insertquery = "update halloffameposts set approvedcomments = '".$newapprovedcomments."' and approvedusernames = '".$newapprovedusernames."' where postid = ".$id.";";
			$result = mysqli_query(insertquery) or die(mysqli_error($con));


		
		
		
					
		
			
			
			
						
			
		echo '{"error":0}';
		
	



?>