<?php 

	session_start();
	if (!$_SESSION['reg_num'] && $_SESSION['password']) {
		header("location:student_login.php");
	}

?>