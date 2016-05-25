<?php
session_start(); //session start

require_once ('libraries/Google/autoload.php');
require_once ('../phpFiles/connection.php');
//Insert your cient ID and secret 
//You can get it from : https://console.developers.google.com/
$client_id = '860268918382-52k1gd6pthju1s03domgiddimbnk1on0.apps.googleusercontent.com'; 
$client_secret = 'J0fdkvOoKB5fO2Sp-lZ9q6vN';
$redirect_uri = 'http://localhost/Rex/google-login-api';



//incase of logout request, just unset the session var
if (isset($_GET['logout'])) {
  unset($_SESSION['access_token']);
}

/************************************************
  Make an API request on behalf of a user. In
  this case we need to have a valid OAuth 2.0
  token for the user, so we need to send them
  through a login flow. To do this we need some
  information from our API console project.
 ************************************************/
$client = new Google_Client();
$client->setClientId($client_id);
$client->setClientSecret($client_secret);
$client->setRedirectUri($redirect_uri);
$client->addScope("email");
$client->addScope("profile");

/************************************************
  When we create the service here, we pass the
  client to it. The client then queries the service
  for the required scopes, and uses that when
  generating the authentication URL later.
 ************************************************/
$service = new Google_Service_Oauth2($client);

/************************************************
  If we have a code back from the OAuth 2.0 flow,
  we need to exchange that with the authenticate()
  function. We store the resultant access token
  bundle in the session, and redirect to ourself.
*/
  
if (isset($_GET['code'])) {
  $client->authenticate($_GET['code']);
  $_SESSION['access_token'] = $client->getAccessToken();
  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
  exit;
}

/************************************************
  If we have an access token, we can make
  requests, else we generate an authentication URL.
 ************************************************/
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
  $client->setAccessToken($_SESSION['access_token']);
} else {
  $authUrl = $client->createAuthUrl();
}



	
	$user = $service->userinfo->get(); //get user info 
	
	
	
	
	
	
			
			$checkQuery = "select emailid from users where emailid = '".$user->email."'";
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
							.'"'.$user->givenName.'",'
							.'"'.$user->familyName.'",'
							.'"'.$user->email.'",'
							.'"'.$hashed_password.'",'
							.'"'.$user->picture.'",'
							.'0,'
							.'"'.$resetpasswordhash.'");';
							
				mysqli_query($con,$insertQuery) or die(mysqli_error($con));
			}


		
		
		
					
			$selectquery='select * from users where emailid="'.$user->email .'";' ;
			$result=mysqli_query($con,$selectquery) or die(mysqli_error($con));
			
			
			$json='';
			$error = 1;
			while($row = mysqli_fetch_array($result)){
				
					
						$_SESSION['firstname'] = $row['firstname'];
						$_SESSION['lastname'] = $row['lastname'];
						$_SESSION['kithabwalaemailid'] = $row['emailid'];
						$_SESSION['profileimage'] = $row['profileimage'];
						$_SESSION['isadmin'] = $row['isadmin'];
						$_SESSION['userid'] = $row['userid'];
				
				
						
				
			}
						
			
		echo '{"error":0}';
		$str = $_SERVER['HTTP_REFERER'];
		$file = basename($str); 
		
		//$str1 = (explode("//",$str));
		print_r ($file);
		//$str2 = (explode("/",$str1));
		//print_r ($str2);
	header('location:../'.$file);
	
	




?>

