<?php
session_start();
require("connection.php");

$ltname = mysqli_real_escape_string($connectivity, $_POST['Last_Name']);
$ftname = mysqli_real_escape_string($connectivity, $_POST['First_Name']);
$mdname = mysqli_real_escape_string($connectivity, $_POST['Middle_Name']);
$ext = mysqli_real_escape_string($connectivity, $_POST['Ext_Name']);
$haus = mysqli_real_escape_string($connectivity, $_POST['House_No']);
$strt = mysqli_real_escape_string($connectivity, $_POST['Street_Name']);
$sub = mysqli_real_escape_string($connectivity, $_POST['Sub_Name']);
$plcb = mysqli_real_escape_string($connectivity, $_POST['Place_B']);
$dtb = mysqli_real_escape_string($connectivity, $_POST['Date_B']);
$sex = mysqli_real_escape_string($connectivity, $_POST['Sex']);
$civil = mysqli_real_escape_string($connectivity, $_POST['Civil_Stat']);
$nati = mysqli_real_escape_string($connectivity, $_POST['Nationality']);
$occ = mysqli_real_escape_string($connectivity, $_POST['Occup']);

$Checking = "SELECT * FROM resident_db WHERE Last_Name = '$ltname' AND First_Name = '$ftname'";
$result = mysqli_query($connectivity, $Checking);
$row_count = mysqli_num_rows($result);

if ($row_count > 0) {
		header("Location:main.php");
		exit;
    $_SESSION['message'] = "Dear, " . $ftname . " You are already registered.";
    
} else {
    $Database = "INSERT INTO resident_db (Last_Name, First_Name, Middle_Name, Ext_Name, House_No, Street_Name, Sub_Name, Place_B, Date_B, Sex, Civil_Stat,Nationality, Occup) VALUES ('$ltname', '$ftname', '$mdname', '$ext', '$haus', '$strt', '$sub', '$plcb', '$dtb', '$sex', '$civil', '$nati', '$occ')";

    if (mysqli_query($connectivity, $Database)) {
        echo "<script language='javascript'>alert('New Resident has been Registered!')</script>";
    } else {
        echo mysqli_error($connectivity);
    }
	
}
?>
