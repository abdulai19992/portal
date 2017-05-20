<?php include("includes/connect.php"); ?>
<?php include("includes/session_stud.php"); ?>

 <?php

      if (isset($_POST['Update'])){

  
    $user = $_POST['index'];
    $userpass = $_POST['userpwd_1'];
    $userpass1 = $_POST['userpwd_2'];
    $message = "Reg number or password combination incorrect.<br />";

    if ($userpass==$userpass1) {
  $userpass = md5($userpass);
  $query = "UPDATE `students` SET `password`='$userpass'
   WHERE `student_ID`= '$user'";
                                                  };

               mysqli_query($link,$query);     
  

  }

    
         
  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<link rel="shortcut icon" href="images/images1.jpg">
<link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css">
<title>Reset password page</title>

<style type="text/css">

.style4 {color: black;
	 font-size: 18px; 
        
	  }
.style6 {
	color: #FFFFFF;
	font-size: 24px;}
html{
width: 98%

}

 /*form styles*/

form {
  margin-bottom: 1em;
}
form ul {
  list-style: none;
  padding: 0;
  margin: 0;
}
form li {
  margin: 0;
  margin-bottom: 1em;
  padding: 0;
  font-size: .9em;
}

input[type="text"], input[type="email"], input[type="password"],input[type="search"],textarea, select {
  border: none;
  background: rgb(249, 228, 130);
  width: 318px;
  padding: .5em;
  font-size: 1em;
}

input:focus, textarea:focus {
  border: 2px solid rgb(168, 88, 163);
}


/*end of form styls*/

</style>

</head>

<body>
<p>&nbsp;</p>
<table style=" border:solid; border-width:thin; border-color:#000000" align="center" border="0" height="169">

  <tbody><tr bgcolor="#000099">
    </tr><tr bgcolor="#1B4684"><td height="29"><div class="style6" align="center">Reset Password</div></td></tr>

    <tr><td height="62" width="935" ><span class="style4"> 
<form action="" method="POST" >
	<div align="center"><br>
    <ul class="formList">
    <li><input name="index" tabindex="10" type="text" placeholder=" Enter your student ID" required></li>
    <li><input name="userpwd_1"  tabindex="20" type="password" placeholder="New password" required></li>
    <li><input name="userpwd_2"  tabindex="20" type="password" placeholder=" Confirm New password" required></li></ul>
	<br />
    </tr><tr bgcolor="#1B4684"><td height="29"><div class="style6" align="center"><input type="Submit" name="Update" value="Update" class="btn btn-default"></div></td>
	<br /></div></form>

	</td>
   </span></td></tr>

</tbody></table>

</body></html>