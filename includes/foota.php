<?php
 require_once 'connect.php';
 require_once 'session_stud.php';

 ?>
 
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<title> Footer</title>
<link rel="stylesheet" type="text/css" href="../stylesheets/stylis.css">
<link rel="shortcut icon" href="../images/images1.jpg">
</head>
<body id="footer" >

<style type="text/css">
.clocktime {
	margin-left: 5px !important;
	font-family: "Roboto Condensed",Tahoma,Geneva,sans-serif;
			 }	

</style>

<span id="copy">©2017 University of Peaceman - Ghana.</span>
<span id="clock">
<div class="date-time jqclock" id="getClock">
<span class="clocktime">&nbsp;</span>
<span class="clocktime">&nbsp;</span>
</div></span>

<script type="text/javascript" src="../scripts/jquery.js"></script>
<script type="text/javascript" src="../scripts/jqClock.js"></script>
<script type="text/javascript" src="../scripts/bootstrap.js"></script>


<script type="text/javascript">

    $(document).ready(function(){ $("#getClock").clock(); });
	
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  	ga('create', 'UA-63697567-1', 'auto');
  	ga('send', 'pageview');
    	 
</script>
</body></html>