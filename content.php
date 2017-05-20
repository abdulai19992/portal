<?php include_once("includes/connect.php"); ?>
<?php include_once("includes/session_stud.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css">
 <link rel="stylesheet" type="text/css" media="all" href="stylesheets/custom.css">
<title>Student Portal | University of Peaceman</title> 
<link rel="shortcut icon" href="images/images1.jpg">
</head>
<!--
======================================================================================================

Note the following:
1. Each frame has it's own 'frame' tag.
2. Each frame has a name (eg, name="menu"). This is used for when you need to load one frame from another. For example, your left frame might have links that, when clicked on, loads a new page in the right frame. This is acheived by using 'target="content"' within your links/anchor tags.
3. Each 'frame' tag has a 'src' attribute. This is where you specify the name of the file to be loaded into that frame when the page first loads.
4. You can change the size of the frames by changing the value of the 'cols' and/or 'rows' attribute. A value of "200" sets the frame at 200 pixels. An asterisk (*) specifies that the frame should use up whatever space is left over from the other frames. You can also use percentage values if desired (i.e. 20%,80%)
5. To specify a border, set 'frameborder' and 'border' to "1". I included both attributes for maximum browser compatibility.
6. The 'framespacing' attribute doesn't work in all browsers, but you can set any numeric value you like here.
-->

<frameset rows="80,*,20" frameborder="0" border="0" framespacing="0">
  <frame name="topNav" src="http://localhost/portal system/includes/top_nav.php" scrolling="no">

<frameset cols="180,*" frameborder="0" border="0" framespacing="0">
<frame name="menu" src="http://localhost/portal system/includes/menuStudPortal.php" marginheight="0" marginwidth="0" scrolling="no" noresize="noresize">

<frame name="content" src="http://localhost/portal system/generalinfo.php" marginheight="0" marginwidth="0" scrolling="auto" noresize="noresize">
</frameset>

<frame name="footer" src="http://localhost/portal system/includes/foota.php" scrolling="no">

<noframes>
<p>This section (everything between the 'noframes' tags) will only be displayed if the users' browser doesn't support frames. You can provide a link to a non-frames version of the website here. Feel free to use HTML tags within this section.</p>
</noframes>

</frameset>

</html>