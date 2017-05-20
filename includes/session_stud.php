<?php 

	session_start();
	include 'connect.php'; 
	if (!$_SESSION['portal_system']) 
		{ header("location:student_login.php");}

?>