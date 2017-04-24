<?php 

	session_start();
	include("includes/connect.php"); 
	if (!$_SESSION['portal']) 
		{ header("location:student_login.php");}

?>