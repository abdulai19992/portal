<?php 

	session_start();
	if (!$_SESSION['portal']) {
		header("location:student_login.php");
	}

?>