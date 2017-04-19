<?php include ("includes/connect.php"); ?>
<?php include("includes/header.php"); ?>
<?php include("includes/session_start.php"); ?>
<table id="structure">
<tr>
	<td>
		
	</td >
	<td id ="page">
	
		<h2 align="center">
		 Welcome to the Staff Area:
		<?php echo  "<span style='color:red'>"
		 .$_SESSION['username']."</span>" ?>
		</h2>
		<br />
		<br />
		<div id="change">
		
		<a href="">Manage Website Content</a>
			<br><br />
		<a href=" create_user.php">Add New Staff </a>
			<br><br />
		<a href="recovery.php">reset password</a>
			<br><br />
		<a href="log_out.php">Logout</a>
		
		</div>
		<td>



	</td>
</tr>
</table>

<?php include("includes/footer.php"); ?>