<?php include("includes/connect.php"); ?>
<?php include("includes/session_stud.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<link rel="shortcut icon" href="images/images1.jpg">
<link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css">
<title>Reset password page</title>

<style type="text/css">

.style4 {color: black;
	 font-size: 18px; }
.style6 {
	color: #FFFFFF;
	font-size: 24px;}

</style>

</head>

<body>
<p>&nbsp;</p>
<table style=" border:solid; border-width:thin; border-color:#000000" align="center" border="0" height="169">

  <tbody><tr bgcolor="#000099">
    </tr><tr bgcolor="#1B4684"><td height="29"><div class="style6" align="center">Reset Password</div></td>
  </tr>

  <tr>
    <td height="62" width="935"><span class="style4"> 
<ul >
	<li >Enter your registration number and e-mail address</li>
	<li>Sign into your e-mail address</li>
	<li>Check your inbox/spam/junckmail for e-mail recieved for student portal E-mail</li>	
	<li>Reset your password</li>
	<li>Finally you will redirected to the student login page</li>
</ul>
   </span></td>

  </tr>
</tbody></table>
<br><br>
<table align="center" border="0" height="169">
         <tbody><tr>
         <td width="935">

<form action="" method="post">
		<div class="form-group">
		<div class="col-sm-5">
	<input type="text" name="registration" placeholder=" Registration Number" 
	required  class="form-control">
	</br>
	<input type="E-mail" name="emial" placeholder=" E-mail"
	 required title=" E-mail" class="form-control">
	</br>
	<input type="Submit" name="submit" value="Submit" class="btn btn-warning">
		</div>
			</div>
	</form>
         </span></td>
    </tr>
</tbody></table>
</html>
