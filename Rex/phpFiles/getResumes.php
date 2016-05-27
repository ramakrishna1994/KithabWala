<?php
require_once 'isSessionSet.php';
header('Content-type: application/json');
require_once 'connection.php';

 


$selectquery='select * from resumes order by id desc';
$result=mysqli_query($con,$selectquery) or die(mysqli_error($con));





$json='[';

while($row = mysqli_fetch_array($result)){
	
			
		
			$json .='{';
			$json .= '"jobname":'.'"'.mysqli_real_escape_string($con,$row["jobname"]).'",';
			$json .= '"fullname":'.'"'.mysqli_real_escape_string($con,$row["fullname"]).'",';
			$json .= '"emailid":'.'"'.mysqli_real_escape_string($con,$row["emailid"]).'",';
			$json .= '"phonenumber":'.'"'.mysqli_real_escape_string($con,$row["phonenumber"]).'",';
			$json .= '"coverletter":'.'"'.mysqli_real_escape_string($con,$row["coverletter"]).'",';
			$json .= '"resumefilename":'.'"'.mysqli_real_escape_string($con,$row["resumefilename"]).'"';
			$json .='},';
			
			
		
		
	
}

$json = substr($json,0,strlen($json)-1);
$json .=']';
echo $json;

mysqli_close($con);
?>