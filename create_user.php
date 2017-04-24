<?php include("includes/connect.php"); ?>
 <?php

      if (isset($_POST['submit'])){
	 session_start();

		$user = $_POST['username'];
		$userpass = $_POST['password'];
		$userpass1 = $_POST['password1'];
		
      if ($userpass==$userpass1) {

	$userpass = md5($userpass);
	$query = "INSERT INTO users ( ID,username, password) 
	                           VALUES ( NULL,'$user' ,'$userpass')";
	mysqli_query($link,$query);                   
          $_SESSION['username']=$user;

          header("location: includes/load.php");
              } else {
	       header('location: includes/load_.php'); 
	           }
	}
?>

<?php include ("includes/header.php"); ?>
	

<table id="structure" class="table">
<tr>
	<td id="form_page" >
																	
		<h2>Create New User</h2>
	
<form action="" method="POST">
	<div class="form-group">
		<div class="col-sm-7">
	<input type="text" name="username" placeholder=" Username"   maxlength="30" minlength="3" autocomplete="off" class="form-control"  required>
	<br />
	<input type="password" name="password" placeholder="password"  
	maxlength="30" minlength="5" class="form-control" required>
	<br />
	<input type="password" name="password1" placeholder=" re-enter password"  
	maxlength="30" minlength="5" class="form-control" required>

	<br />
	<input type="Submit" name="submit" value="Create" class="btn btn-danger">

		         </div>
	                </div>
	   </form>	
	</td>
</tr>
</table>
<?php include("includes/footer.php"); ?>