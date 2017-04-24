<?php 
	session_start();
	include("includes/connect.php"); 
	if (!$_SESSION['portal'] ) {
		header("location:staff_login.php");
	}
?>