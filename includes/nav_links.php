<table id="structure">
<tr>
	<td id="navigation"> 
    <img src="images/FC Bar.ico">
    
	<?php 

echo "<li class='lit'>". $_SESSION['reg_num'] ."</li>";
echo "<br></br>"; 
echo "<li class='li'><a href='info.php'>Service Information</a></li>";
echo "<li class='li'><a href='PD.php'>Personal Details</a></li>";
echo "<li class='li'><a href='Reg.php'>Registration</a></li>";
echo "<li class='li'><a href='Examinfo.php'>Exam Information</a></li>";
echo "<li class='li'><a href='RS.php'>Result Statement</a></li>";
echo "<li class='li'><a href='reset.php'>Reset password</a></li>";
echo "<li class='li'><a href='logout.php'> logout</a><br ><br /></li>";
	 ?>
		
	</td>
