<?php 

require_once 'connection.php';




$emailid=mysqli_real_escape_string($con,$_POST['emailid']);



		$insertQuery='insert into subscriptionemails(emailid) values ("'.$emailid.'");';
					
		mysqli_query($con,$insertQuery) or die(mysqli_error($con));
		echo '{"error":"0"}';
		
	



?>