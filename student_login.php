<?php include("includes/connect.php"); ?>
<?php
	 session_start();

if (isset($_POST['submit'])) {

         $user = $_POST['Regnum'];
	$pass = $_POST['password'];
	$pass = md5($pass);
	$message = "Reg number or password combination incorrect.<br />";
		
				
	checkinput($user,$pass);
	}

 function checkinput($user,$pass){

 			global $link;

		$query = "SELECT id, reg_num ";
		$query .= "FROM student_users ";
		$query .= "WHERE reg_num = '{$user}' ";
		$query .= "AND password = '{$pass}' ";
		$query .= "LIMIT 1";
		$result = mysqli_query($link, $query);
			
		if (mysqli_num_rows($result )==1) {

			$_SESSION['portal'] = 'true';
			
			header("location:content.php");

		} else {
		// username/password was not found in the database
		$message = "";
		}
	}

 ?>

<?php require ("includes/header.php");?> 
<table id="structure" class="table">
<tr>
	<td id="form_page">
		
	<!-- <h2>Student's Login</h2> -->
	<h3 style="color:black;">Please Log In || <a href="create_account.php">Register</a></h3>
<?php if (!empty($message)) {echo "<p>" . $message . "</p>";} ?>
	<form action="" method="POST">
<div class="form-group">
<div class="col-sm-7">
	<input type="text" name="Regnum"  placeholder=" Reg Number"  required maxlength="15"  autocomplete="" class="form-control">
	<br  />
	<input type="password" name="password" required placeholder=" Password" maxlength="30" autocomplete="off"  class="form-control">
	<br  />
	 <input type="submit" name="submit" value="Login" class="btn btn-primary">
	 	</div>
	 		</div>
	</form>

		</td>
	</tr>

</table>
<?php include("includes/footer.php"); ?>