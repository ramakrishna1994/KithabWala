<?php
require_once 'isSessionSet.php';
header('Content-type: application/json');
require_once 'connection.php';

 
$postid = $_POST['postid'];

$selectquery="select * from pendingposts where postid = ".$postid." ;";

$result=mysqli_query($con,$selectquery) or die(mysqli_error($con));







while($row = mysqli_fetch_array($result)){
	
			
			
		$insertquery = 'insert into approvedposts(postid,userid,posttype,title,comment,theme,colors,fonts,tags,filename) values('.$row['postid'].','.$row['userid'].',"'.$row['posttype'].'","'.$row['title'].'","'.$row['comment'].'","'.$row['theme'].'","'.$row['colors'].'","'.$row['fonts'].'","'.$row['tags'].'","'.$row['filename'].'");'; 
		mysqli_query($con,$insertquery) or die(mysqli_error($con));
		
		$deletequery = 'delete from pendingposts where postid = '.$postid;
		mysqli_query($con,$deletequery) or die(mysqli_error($con));
			
			
		
		
	
}

echo '{"error":"0"}';



mysqli_close($con);
?>