<?php include("includes/connect.php"); ?>
<?php
	

if (isset($_POST['submit'])) {
              session_start();
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$pass = md5($pass);
	$message = "Username or password combination incorrect.<br />";
				

	checkinput($user,$pass);
	}

 function checkinput($user,$pass){

 			global $link;

		$query = "SELECT id, username ";
		$query .= "FROM staff ";
		$query .= "WHERE username = '{$user}' ";
		$query .= "AND password = '{$pass}' ";
		$query .= "LIMIT 1";
		$result = mysqli_query($link,$query);
			
		if (mysqli_num_rows($result )==1) {

			$_SESSION['portal_system'] = true;
			$_SESSION['username'] = $user ;

			header("location:staff.php?login success=" . $_SESSION['username']);

		} else {
		// username/password was not found in the database
		$message = "";
		}
	}

 ?>


<?php require ("includes/header.php");?> 
<table id="structure" >
<tr>
	<td id="form_page" >
	<h3 style="color:black;">Staff Login </h3>
	<?php if (!empty($message)) {echo "<p>" . $message . "</p>";} ?>
	<form action="" method="POST" >
	<div class="form-group  has-warning">
		<div class="col-sm-7">
	<input type="text" name=" username"  placeholder=" Username" 
	 maxlength="30" autocomplete="" class="form-control"  required>
	<br  />
	<input type="password" name="password"  placeholder=" Password" maxlength="30" autocomplete="off" class="form-control" required >
	<br  />
	<input type="submit" name="submit" value="Login"  
	class="btn btn-warning">
	<br></br>
	<br></br>
	 <div><a href="recovery.php" class="btn btn-default" >
	 forgot password</a></div>
			</div>
		</div>	
		
	</form>
	</td>
</tr>
</table>
<?php include("includes/footer.php"); ?>
