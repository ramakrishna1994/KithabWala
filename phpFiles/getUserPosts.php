<?php
require_once 'isSessionSet.php';
header('Content-type: application/json');
require_once 'connection.php';

 


$resultscount = $_POST['resultscount'] ; 
//$selectquery="select * from approvedposts order by postid desc limit 10 offset ".$resultscount." ;";
$selectquery='select * from (SELECT * FROM approvedposts UNION SELECT * from pendingposts) as name where userid = '.$_SESSION['userid'].' ORDER by name.postid desc limit 10 offset '.$resultscount.';';
$result=mysqli_query($con,$selectquery) or die(mysqli_error($con));





$json='[';

while($row = mysqli_fetch_array($result)){
	
			$selectquery1 = "select * from users where userid = ".$row["userid"];
			$result1 = mysqli_query($con,$selectquery1) or die(mysqli_error($con));;
			
	while($row1 = mysqli_fetch_array($result1))
		{
			
		
			$json .='{';
			$json .= '"profileimage":'.'"'.mysqli_real_escape_string($con,$row1["profileimage"]).'",';
			$json .= '"firstname":'.'"'.mysqli_real_escape_string($con,$row1["firstname"]).'",';
			$json .= '"lastname":'.'"'.mysqli_real_escape_string($con,$row1["lastname"]).'",';
			$json .= '"description":'.'"'.mysqli_real_escape_string($con,$row["description"]).'",';
			$json .= '"filename":'.'"'.mysqli_real_escape_string($con,$row["filename"]).'"';
			$json .='},';
			
			
		
		}
	
}


$resultscount = $resultscount + 10 ; 
$selectquery='select * from (SELECT * FROM approvedposts UNION SELECT * from pendingposts) as name where userid = '.$_SESSION['userid'].' ORDER by name.postid desc limit 10 offset '.$resultscount.';';
$result=mysqli_query($con,$selectquery) or die(mysqli_error($con));
if(mysqli_num_rows($result)<=0)
	$json.='{"nomoreresults":1}]';
else
	$json.='{"nomoreresults":0,"resultscount":'.$resultscount .'}]';

echo $json;

mysqli_close($con);
?>