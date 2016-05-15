<?php 

require_once 'connection.php';
session_start();
session_unset();


$firstname=mysqli_real_escape_string($con,$_POST['firstname']);
$lastname=mysqli_real_escape_string($con,$_POST['lastname']);
$emailid=mysqli_real_escape_string($con,$_POST['emailid']);
$password='Kithabwala123';

			
			$table="users";
			
			
			$checkQuery = "select emailid from users where emailid = '".$emailid."'";
			$result = mysqli_query($con,$checkQuery) or die(mysqli_error($con));
			//echo "no of rows:".mysqli_num_rows($result);
			
			
			
			//echo $random;
			
			if(mysqli_num_rows($result) == 0)
			{
			  
			 
					    $resetpasswordhash = '';
				for($i=1;$i<=32;$i++)
				{
					$random = mt_rand(0,9);
					$resetpasswordhash.=$random;
				}
				//echo $resetpasswordhash;
				$hashed_password = crypt($password,'!@#$%^'); // let the salt be automatically generated
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
			}


		
		
		
					
			$selectquery='select * from users where emailid="'.$emailid .'";' ;
			$result=mysqli_query($con,$selectquery) or die(mysqli_error($con));
			
			
			$json='';
			$error = 1;
			while($row = mysqli_fetch_array($result)){
				
					
						$_SESSION['firstname'] = $row['firstname'];
						$_SESSION['lastname'] = $row['lastname'];
						$_SESSION['emailid'] = $row['emailid'];
						$_SESSION['profileimage'] = $row['profileimage'];
						$_SESSION['isadmin'] = $row['isadmin'];
						$_SESSION['userid'] = $row['userid'];
				
				
						
				
			}
						
			
		
		
	



?>