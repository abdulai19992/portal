<?php 

	session_start();

	if (!$_SESSION['username'] && $_SESSION['password']) {
		header("location:staff_login.php");
	}

?>