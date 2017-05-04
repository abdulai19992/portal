<?php 

	session_start();
	include 'connect.php'; 
	if (!$_SESSION['portal']) 
		{ header("location:student_login.php");}

?>