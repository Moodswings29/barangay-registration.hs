<?php 
require_once("connection.php");

if(isset($_GET["btnyes"])){
	$student_id = $_GET["student_idd"];
	mysqli_query($connectivity, "DELETE FROM resident_info WHERE Last_Name ='$ltname'");
	
	echo "<script language ='javascript'>alert('Successfully DELETED!)</script>";
}

	mysqli_close($connectivity);
	
	?>
	