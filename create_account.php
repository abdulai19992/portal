<?php include("includes/connect.php"); ?>
 <?php

      if (isset($_POST['submit'])){
	
		$user = $_POST['Regnum'];
		$userpass = $_POST['password'];
		$userpass = md5($userpass);
		$message = "Account not created successfully.<br />";

	$query = "INSERT INTO student_users ( ID,reg_num, password) 
	                           VALUES ( NULL,'$user' ,'$userpass')";

	$result = mysqli_query($link,$query);
	if ($result) {
		// Success!
		header("location: student_login.php");
	       } else {
		// Account not create successfully
		$message = "";
		}

	}
?>

<?php include ("includes/header.php"); ?>
<table id="structure" class="table">
<tr>
	<td id="form_page">
		
	<h2>Create Account</h2>
	
	<form action="" method="POST">
	<div class="form-group">
		<div class="col-sm-7">
	 <input type="text" name="Regnum"  placeholder=" Reg Number"  required maxlength="14" minlength="14"  autocomplete="off"  class="form-control">
	<br  />
	 <input type="password" name="password" required placeholder=" Password" minlength="5" maxlength="30" ="" class="form-control">
	<br  />
		    <input type="submit" name="submit" value="Create"  class="btn btn-success">

		    	</div>
		   </div> 
	</form>
	</td>
</tr>

</table>
<?php include("includes/footer.php"); ?>
