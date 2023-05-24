
<?php                   
//session_start();
define('DBSERVER','127.0.0.1'); // database server localhost
define('DBUSERNAME','root');   // database username root

$connectivity = mysqli_connect(DBSERVER, DBUSERNAME, "") or die ("Cannot connect Server."); //connection string

$mydatabase = mysqli_query($connectivity, "CREATE DATABASE IF NOT EXISTS `resident_info` "); // Creating Database if No Exixting Database
$mydatabase = mysqli_query($connectivity, " 
                CREATE TABLE IF NOT EXISTS `resident_info`.`resident_db` (
                    `Last_Name` varchar(20) NOT NULL,
					`First_Name` varchar(20) NOT NULL,
					`Middle_Name` varchar(20) NOT NULL,
					`Ext_Name` varchar(5) NOT NULL,
					`House_No` int(5) NOT NULL,
					`Street_Name` varchar(10) NOT NULL,
					`Sub_Name` varchar(20) NOT NULL,
					`Place_B` varchar(25) NOT NULL,
					`Date_B` date NOT NULL,
					`Sex` varchar(10) NOT NULL,
					`Civil_Stat` varchar(15) NOT NULL,
					`Nationality` varchar(15) NOT NULL,
					`Occup` varchar(20) NOT NULL
                ) ENGINE = InnoDB;");



if($connectivity === false){
    die("Cannot connect database" . mysqli_error());
}
else{
    mysqli_select_db($connectivity, "resident_info");     //connection open
   // echo "CONNECTION SUCCESS";
}

?>