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

			$_SESSION['portal'] = true;
			$_SESSION['reg_num'] = $user;
			
	header("location:content.php?login success=". $_SESSION['reg_num']);

		} else {
		// username/password was not found in the database
		$message = "";
		}
	}

 ?>

<?php require ("includes/header.php");?> 
<table id="structure">
<tr>
	<td id="form_page">
		
	
	<h3 style="color:black;">Student's Login </h3>
<?php if (!empty($message)) {echo "<p>" . $message . "</p>";} ?>
	<form action="" method="POST">
<div class="form-group  has-success">
<div class="col-sm-7">
	<input type="text" name="Regnum"  placeholder=" Reg Number"  required maxlength="15"  autocomplete="" class="form-control">
	<br  />
	<input type="password" name="password" required placeholder=" Password" maxlength="30" autocomplete="off"  class="form-control">
	<br  />
	 <input type="submit" name="submit" value="Login" class="btn btn-primary">
	 <br></br>
	 <br></br>
	 <div style="float:right"> 
	 <a href="create_account.php" class="btn btn-default">Sign Up</a></div>
	 <div><a href="recovery.php" class="btn btn-default" >forgot password</a></div>
	 	</div>
	 		</div>
	</form>

		</td>
		
	</tr>

</table>
<?php include("includes/footer.php"); ?> 