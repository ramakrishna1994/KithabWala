<?php 

require_once 'connection.php';
session_start();



$comment=$_POST['comment'];
$id=$_POST['id'];
$rating=$_POST['rating'];


			
		
			
			
			$selectquery = "select * from halloffameposts where postid = ".$id;
			$result = mysqli_query($con,$selectquery) or die(mysqli_error($con));
			
			
			
			while($row = mysqli_fetch_array($result)){
				
					
						$oldpendingcomments = $row['pendingcomments'];
						$oldpendingusernames = $row['pendingusernames'];
						$oldpendinguserratings = $row['pendinguserratings'];
						
				
			}
			
			$newpendingcomments = $oldpendingcomments .  $comment . '01sep01' ;
			$newpendingusernames = $oldpendingusernames . $_SESSION['lastname'] . " " . $_SESSION['firstname'] . "01sep01";
			$newpendinguserratings = $oldpendinguserratings . $rating . "sep";
			
			$insertquery = 'update halloffameposts set pendingcomments = "'.$newpendingcomments.'" , pendingusernames = "'.$newpendingusernames.'" , pendinguserratings = "'.$newpendinguserratings.'" where postid = '.$id.';';
			
			mysqli_query($con,$insertquery) or die(mysqli_error($con));


		
		
		
			
			
			
		
			
						
			
		echo '{"error":0}';
		
	



?>