<?php 

require_once 'connection.php';



$emailid=mysqli_real_escape_string($con,$_POST['emailid']);

$table="users";



$createQuery="create table if not exists users("
              ."userid int not null auto_increment,"
              ."firstname varchar(100),"
              ."lastname varchar(100),"
			  ."emailid varchar(100),"
              ."password varchar(255),"
              ."profileimage varchar(100),"
			  ."isadmin int,"
              ."resetpasswordhash varchar(32),"
              ."primary key(userid));";

mysqli_query($con,$createQuery) or die(mysqli_error($con));

$checkQuery = "select emailid from users where emailid = '".$emailid."'";
$result = mysqli_query($con,$checkQuery) or die(mysqli_error($con));
//echo "no of rows:".mysqli_num_rows($result);



//echo $random;

if(mysqli_num_rows($result) == 0)
{
  
 
      echo '{"error":"0"}';
}

else {
	echo '{"error":"1"}';
}
mysqli_close($con);
?>