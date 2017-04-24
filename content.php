<?php require_once("includes/connect.php"); ?>
<?php require_once("includes/session_stud.php"); ?>
<?php 
	if (isset($_GET["page"])) {$selected_pg=$_GET["page"];}
	if (isset($_GET["page"])) {$sel_pg=$_GET["page"];}
 	else {    $sel_pg=NULL;
 		$selected_pg = NULL;
 	}

 ?>

<?php include ("includes/header.php"); ?>
<table id="structure">
<tr>
	<td id="navigation">    
	
	<?php 

$result=mysqli_query( $link, "SELECT *FROM portal");

	if (!$result) {die("Database query failed: " . mysqli_error());}
	echo"<h4>STUDENT'S PORTAL</h4><br />";
	echo "<span style='font-size: 14px'>". $_SESSION['reg_num'] ."</span>";
	echo "<br />";
	echo "<br />";
	echo "<br />";
while($row = mysqli_fetch_array($result)){
	echo "<li ";
	if($row["id"]==$selected_pg){echo "class='selected'";}
	echo "><a href='content.php?page= {$row["id"]}'>
	{$row["menu_name"]}</a></li><br />";}
	echo "<br />";
	echo "<br />";
echo "<a href='reset.php'>Reset password</a>";
echo "<br />";
echo "<br />";
echo "<a href='logout.php'> logout</a><br ><br />";
	 ?>
		
	</td>

	<td id="page">
<?php 

$result=mysqli_query( $link, "SELECT *FROM portal");

if (!$result) {die("Database query failed: " . mysql_error());}
			 
while($row = mysqli_fetch_array($result)){
 if($row["id"]==$sel_pg)echo "{$row["content"]}";}


 ?>
		
		<?php echo $sel_pg; ?><br />
	</td>
</tr>
</table>
<?php include("includes/footer.php"); ?>