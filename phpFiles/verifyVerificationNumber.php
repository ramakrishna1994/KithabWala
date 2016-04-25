<?php 

require_once 'connection.php';
session_start();


$firstname=mysqli_real_escape_string($con,$_POST['firstname']);
$lastname=mysqli_real_escape_string($con,$_POST['lastname']);
$emailid=mysqli_real_escape_string($con,$_POST['emailid']);
$password=mysqli_real_escape_string($con,$_POST['password']);

$verificationcode=mysqli_real_escape_string($con,$_POST['verificationcode']);
$table="users";
//echo $_SESSION['code'];
if($_SESSION['code'] == $verificationcode	)
{

		$resetpasswordhash = '';
		for($i=1;$i<=32;$i++)
		{
			$random = mt_rand(0,9);
			$resetpasswordhash.=$random;
		}
		//echo $resetpasswordhash;
		$hashed_password = crypt($password); // let the salt be automatically generated
		//echo $hashed_password;
		$insertQuery='insert into users(firstname,lastname,emailid,password,profileimage,isadmin,resetpasswordhash) values ('
					.'"'.$firstname.'",'
					.'"'.$lastname.'",'
					.'"'.$emailid.'",'
					.'"'.$hashed_password.'",'
					.'"user.jpg",'
					.'0,'
					.'"'.$resetpasswordhash.'");';
					
		mysqli_query($con,$insertQuery) or die(mysqli_error($con));
		echo '{"error":"0"}';
		
	
}
else {
	
	echo '{"error":"1"}';
}


?>