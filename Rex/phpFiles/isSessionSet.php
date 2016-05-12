<?php 
session_start();
if(!isset($_SESSION['emailid']))
	echo '{"error":1}';
else
	echo '{"error":0}';
?>