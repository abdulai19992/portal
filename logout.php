<?php
		// Four steps to closing a session
		// (i.e. logging out)

		// 1. Find the session
		session_start();
		
		// 2. Unset all the session variables
		session_unset();
		
		// 4. Destroy the session
		session_destroy();
		
		header("location:student_login.php");
?>