<?php 

require_once 'connection.php';
session_start();



$commentid=mysqli_real_escape_string($con,$_POST['commentid']);
$postid=mysqli_real_escape_string($con,$_POST['postid']);



			
		
			
			
			$selectquery = "select * from halloffameposts where postid = ".$postid;
			$result = mysqli_query($con,$selectquery) or die(mysqli_error($con));
			
			
			
			while($row = mysqli_fetch_array($result)){
				
					
						$oldapprovedcomments = $row['approvedcomments'];
						$oldapprovedusernames = $row['approvedusernames'];
						$oldapproveduserratings = $row['approveduserratings'];
						$pendingcommentsarray = explode("01sep01",$row['pendingcomments']);
						$pendingusernamesarray = explode("01sep01",$row['pendingusernames']);
						$pendinguserratingsarray = explode("sep",$row['pendinguserratings']);
				
						
				
			}
			
			$comment = "";
			$username = "";
			$rating = "";
			
			for($i=count($pendingcommentsarray)-2;$i>=0;$i--)
			{
				
				if($commentid == $i)
				{
					$comment = $pendingcommentsarray[$i];
					$username = $pendingusernamesarray[$i];
					$rating = $pendinguserratingsarray[$i];
				}
				
			}
			
			
			
			$newapprovedcomments = $oldapprovedcomments . $comment . "01sep01" ;
			$newapprovedusernames = $oldapprovedusernames .  $username ."01sep01" ;
			$newapproveduserratings = $oldapproveduserratings . $rating . "sep" ;
			
			$updatequery = "update halloffameposts set approvedcomments = '".$newapprovedcomments."' , approvedusernames = '".$newapprovedusernames."' , approveduserratings = '".$newapproveduserratings."' where postid = ".$postid.";";
			$result = mysqli_query($con,$updatequery) or die(mysqli_error($con));
			
			$newpendingcomments = "";
			$newpendingusernames = "";
			$newpendinguserratings = "";
			
			
			
			for($i=0;$i<=count($pendingcommentsarray)-2;$i++)
			{
				
				if($commentid != $i)
				{
					$newpendingcomments = $pendingcommentsarray[$i] . "01sep01";
					$newpendingusernames = $pendingusernamesarray[$i] . "01sep01";
					$newpendinguserratings = $pendinguserratingsarray[$i] . "sep";
				}
				
			}
			
			
			$updatequery = "update halloffameposts set pendingcomments = '".$newpendingcomments."' ,pendingusernames = '".$newpendingusernames."' , pendinguserratings = '".$newpendinguserratings."' where postid = ".$postid.";";
			$result = mysqli_query($con,$updatequery) or die(mysqli_error($con));


		
		
		
					
		
			
			
			
						
			
		echo '{"error":0}';
		
	



?>