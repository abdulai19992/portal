<?php include ("includes/header.php"); ?>
<?php include("includes/connect.php"); ?>
<table id="structure" class="table">
<tr>	
	</td >
	<td id ="page">
	<div><!-- <a href="student_login.php">Back to login page</a><div> -->
		<h2 align="center"> Reset Password </h2>
		<ul >
		<li >Enter your registration number and e-mail address</li>
		<li>Sign into your e-mail address</li>
		<li>Check your inbox/spam/junckmail for e-mail recieved for student portal E-mail</li>	
		<li>Reset your password</li>
		<li>Finally you will redirected to the student login page</li>
		</ul>
		<br><br />
<form action="" method="post">
<div class="form-group">
		<div class="col-sm-5">
	<input type="text" name="registration" placeholder=" Registration Number" 
	required  class="form-control">
	</br>
	<input type="E-mail" name="emial" placeholder=" E-mail"
	 required title=" E-mail" class="form-control">
	</br>
	<input type="Submit" name="submit" value="Submit" class="btn btn-info">
		</div>
			</div>
	</form>
</tr>
</table>
<?php include("includes/footer.php"); ?>