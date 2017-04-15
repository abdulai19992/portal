	<?php
	require("constant.php");

	// 1. Create a database connection
	$link = mysqli_connect($db_host, $db_user, $db_pass,$db_name);
	if (mysqli_connect_error($link)) {
	die(" Connection failed: " . mysqli_connect_error()); 
	} 
	
	mysqli_select_db($link, $db_name);


	?>
