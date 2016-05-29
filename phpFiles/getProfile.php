<?php 
require_once 'isSessionSet.php';
require_once 'connection.php';

$emailid = $_SESSION['kithabwalaemailid'];
$selectQuery = "select profileimage from users where emailid = '".$emailid."';";
$result = mysqli_query($con,$selectQuery);



		

while($row = mysqli_fetch_array($result))
{
	echo '{"image":"'.$row['profileimage'].'"}';
}


?>