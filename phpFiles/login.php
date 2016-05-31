<?php 
session_start();
session_unset();

require_once 'connection.php';

$emailid=mysqli_real_escape_string($con,$_POST['emailid']);
$password=mysqli_real_escape_string($con,$_POST['password']);



$selectquery='select * from users where emailid="'.$emailid .'";' ;
$result=mysqli_query($con,$selectquery) or die(mysqli_error($con));


$json='';
$error = 1;
while($row = mysqli_fetch_array($result)){
	$tablepassword = $row['password'];
	if($tablepassword==crypt($password, $tablepassword))
	{
			$error = 0;
			$_SESSION['firstname'] = $row['firstname'];
			$_SESSION['lastname'] = $row['lastname'];
			$_SESSION['kithabwalaemailid'] = $row['emailid'];
			$_SESSION['profileimage'] = $row['profileimage'];
			$_SESSION['isadmin'] = $row['isadmin'];
			$_SESSION['userid'] = $row['userid'];
	}
	
			
	
}

echo '{"error":"'. $error.'","isadmin":"'.$_SESSION['isadmin'].'"}';



	
mysqli_close($con);
?>