<?php 
session_start();
if(!isset($_SESSION['kithabwalaemailid']))
	 echo '{"error":0}';
?>