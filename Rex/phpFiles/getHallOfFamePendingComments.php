<?php
require_once 'isSessionSet.php';
header('Content-type: application/json');
require_once 'connection.php';

 


$selectquery="select * from halloffameposts;";

$result=mysqli_query($con,$selectquery) or die(mysqli_error($con));





$json='[';


			
			
	while($row = mysqli_fetch_array($result))
		{
			
			$pendingcommentsarray = explode("01sep01",$row['pendingcomments']);
			$pendingusernamesarray = explode("01sep01",$row['pendingusernames']);
			$pendinguserratingsarray = explode("sep",$row['pendinguserratings']);
			
			for($i=count($pendingcommentsarray)-2;$i>=0;$i--)
			{
				
				$json .='{';
				$json .= '"title":'.'"'.$row['title'].'",';
				$json .= '"posttype":'.'"'.$row['posttype'].'",';
				$json .= '"username":'.'"'.$pendingusernamesarray[$i].'",';
				$json .= '"comment":'.'"'.$pendingcommentsarray[$i].'",';
				$json .= '"rating":'.'"'.$pendinguserratingsarray[$i].'",';
				$json .= '"commentid":'.'"'.$i.'",';
				$json .= '"postid":'.'"'.$row['postid'].'"';
				$json .='},';
				
			}
			$json = substr($json,0,strlen($json)-1);
				
		}
		
		
		
		
	

	

   $json .= ']';



echo $json;

mysqli_close($con);
?>