<?php 
//require_once '/home/vijaymerakii007/public_html/sample/mainFiles/phpmailer/PHPMailerAutoload.php';

$db_host="localhost";
$db_user="kithabwala";
$db_password="kithabwala";
$db_name="kithabwala";



$con=mysqli_connect($db_host,$db_user,$db_password);

mysqli_select_db($con,$db_name) or die(mysqli_error($con));


?>