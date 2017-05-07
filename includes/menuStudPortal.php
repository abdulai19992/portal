<?php
 require_once 'connect.php';
 require_once 'session_stud.php';

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<style type="text/css">

 
 .li{
	 width:150px;
	 margin-left:0px;
	 text-decoration:none;
	 list-style-type:none;
	 list-style-position:inside;
	 height:30px;
	 border:solid 1px #CCC;
	 border-radius: 1px;
	 padding-left: 5px;
	 padding-top: 5px;
	 color:#006;
	 font-family: calibri;
	 margin-bottom:1px;
	 display:block;
 }
 
 .li:hover{
	 border:solid 1px #06F;
	 border-radius: 3px;
	 background-color:#FAFAFA;
	 color: black;
	 font-weight:bold;
 }
 
 .li:hover a{
	 color: black;
 }
 
 .li a{
	 text-decoration:none;
	 color:#006;
 }
 
 
 .nothing{
	 width:150px;
	 margin-left:0px;
	 text-decoration:none;
	 list-style-type:none;
	 list-style-position:inside;
	 height:30px;
	 border:solid 1px #CCC;
	 border-radius: 1px;
	 padding-left: 5px;
	 padding-top: 5px;
	 color:#006;
	 font-family: cursive;
	 font-size:11px;
	 margin-bottom:1px;
	 display:block;
 }
 
 .dispblock{
	 display:block;
 }
 


</style>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Untitled Document</title>
</head>

<body scrolling="auto">
         <?php echo "<li class='nothing'><font color='#EE173D'><b>". $_SESSION['reg_num'] ."</font></b></li>"; ?>
<li class="li"><a href="../generalinfo.php" class="dispblock" target="content">Service Information</a></li>

    <li class="li"><a href="../studDetails.php" class="dispblock" target="content">Personal Details</a></li>

    <li class="li"><a href="../Fees.php" class="dispblock" target="content">Fees</a></li>

    <li class="li"><a href="../REG.php" class="dispblock" target="content">Registration</a></li>

    <li class="li"><a href="../ETT.php" class="dispblock" target="content">Exam TimeTable</a></li>
    <li class="li"><a href="../Grade.php" class="dispblock" target="content">Statement of Results</a></li>

    <li class="li"><a href="../FAQ.php" class="dispblock" target="content">FAQ</a></li>
    
    <li class="li"><a href="http://localhost/portal/reset.php" class="dispblock" target="content"> Reset Password</a></li>

    <li class="li"><a href="../logout.php" class="dispblock" target="_parent"> Logout</a></li>
    
       
    <li class="nothing" style="height:600px;">
    	
    </li>

</body></html>