<?php 
	session_start();
	include 'connect.php'; 
	if (!$_SESSION['portal_system'] ) {
		header("location:staff_login.php");}
?>