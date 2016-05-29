<?php
require_once 'isSessionSet.php';
header('Content-type: application/json');
require_once 'connection.php';

 




$selectquery='select * from subscriptionemails order by id desc';
$result=mysqli_query($con,$selectquery) or die(mysqli_error($con));





$json='[';

while($row = mysqli_fetch_array($result)){
	
			
		
			$json .='{';
			$json .= '"emailid":'.'"'.mysqli_real_escape_string($con,$row["emailid"]).'"';
			$json .='},';
			
			
		
		
	
}

$json = substr($json,0,strlen($json)-1);
$json .=']';
echo $json;

mysqli_close($con);
?>