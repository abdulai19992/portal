<?php 

	session_start();
	if (!$_SESSION['portal']) {
		header("location:staff_login.php");
	}

?>