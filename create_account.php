<?php include("includes/connect.php"); ?>
 <?php

      if (isset($_POST['submit'])){

		session_start();
		$user = $_POST['Regnum'];
		$userpass = $_POST['password'];
		$userpass1 = $_POST['password1'];
		
		if ($userpass==$userpass1) {
	$userpass = md5($userpass);
	$query = "INSERT INTO student_users ( ID,reg_num, password) 
	                           VALUES ( NULL,'$user' ,'$userpass')";
	             mysqli_query($link,$query); 
	             $_SESSION['Regnum']=$user;    
	                     
	header("location: includes/load_1.php");
	
		} else {

		header("location: includes/load_2.php");

		}

	}

		
	       
	
?>

<?php include ("includes/header.php"); ?>
<table id="structure" class="table">
<tr>
	<td id="form_page">
		
	<h2>Create Account</h2>
	
	<form action="" method="POST">
	<div class="form-group  has-success">
		<div class="col-sm-7">
	 <input type="text" name="Regnum"  placeholder=" Reg Number"  required maxlength="14" minlength="14"  autocomplete="off"  
	 class="form-control">
	<br  />
	 <input type="password" name="password" required 
	 placeholder=" Password" minlength="5" maxlength="30"  
	 class="form-control">
	<br  />
	<input type="password" name="password1" required 
	placeholder="Confirm password" minlength="5" maxlength="30" 
	  class="form-control">
	<br  />
	<input type="submit" name="submit" value="Create"  class="btn btn-success">

		    	</div>
		   </div> 
	</form>
	</td>
</tr>

</table>
<?php include("includes/footer.php"); ?>
