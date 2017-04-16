<?php include("includes/connect.php"); ?>
<?php
	 session_start();

if (isset($_POST['submit'])) {
              
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$pass = md5($pass);
	$message = "Username or password combination incorrect.<br />";
				

	checkinput($user,$pass);
	}

 function checkinput($user,$pass){

 			global $link;

		$query = "SELECT id, username ";
		$query .= "FROM users ";
		$query .= "WHERE username = '{$user}' ";
		$query .= "AND password = '{$pass}' ";
		$query .= "LIMIT 1";
		$result = mysqli_query($link,$query);
			
		if (mysqli_num_rows($result )==1) {

			$_SESSION['username'] = $user ;
			$_SESSION['password'] = $pass ;

			header("location:staff.php");

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
		
	<!-- <h2>Staff Login</h2> -->
	<h3 style="color:black;">Please Log In or <a href="create_user.php">Sign Up</a></h3>
	<?php if (!empty($message)) {echo "<p>" . $message . "</p>";} ?>
	<form action="" method="POST" >
	<div class="form-group">
		<div class="col-sm-7">
	<input type="text" name=" username"  placeholder=" Username" 
	 maxlength="30" autocomplete="" class="form-control"  required>
	<br  />
	<input type="password" name="password"  placeholder=" Password" maxlength="30" autocomplete="off" class="form-control" required >
	<br  />
	<input type="submit" name="submit" value="Login"  
	class="btn btn-warning">
			</div>
		</div>	
		
	</form>
	</td>
</tr>
</table>
<?php include("includes/footer.php"); ?>
