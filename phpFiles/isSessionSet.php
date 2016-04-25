<?php 
session_start();
if(!isset($_SESSION['emailid']))
	header('location:../mainFiles/aboutus.php');
?>