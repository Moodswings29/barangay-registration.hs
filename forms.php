<?php
require_once("connection.php");
		if(isset($_SESSION['login']))
		{
			header('Location:'.$_SESSION['login'].".php");
		}
		elseif(isset($_SESSION['message']))
		{	
			echo '<script type="text/javascript">alert("'.$_SESSION['message'].'");</script>';
			header('Refresh:0');
			session_destroy();
		}
		elseif(isset($_SESSION['error']))
		{
			echo '<script type="text/javascript">alert("'.$_SESSION['error'].'");</script>';
			header('Refresh:0');
			session_destroy();
		}
		elseif (isset($_SESSION['n_user'])) {
			echo '<script type="text/javascript">alert("'.$_SESSION['n_user'].'");</script>';
			header('Refresh:0');
			session_destroy();
		}
?>
<html lang="en">
<head>
<title>Barangay Residence Form</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
        justify-content: center;
        align-items: center;
    }

    .header {
        padding: 0px;
        text-align: center;
        font-size: 35px;
    }

    .column {
        float: left;
        padding: 10px;
    }

    .column.side {
        width: 15%;
    }

    .column.middle {
        width: 70%;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    .footer {
        padding: 10px;
        text-align: center;
    }

    @media (max-width: 600px) {
        .column.side, .column.middle {
            width: 100%;
        }
    }

    #grad1 {
        background-image: linear-gradient(#F6FFDE, #E3F2C1, #C9DBB2, #AAC8A7);
    }

    .container {
        justify-content: center;
        align-items: center;
    }

    table {
        margin: 0 auto;
        width: 75%;
        border-collapse: collapse;
    }

    th, td {
        width: 33.33%;
        padding: 10px;
    }

	.input{
			width: 300px;
			margin-top: 10px;
			border: 1px;
			border-radius: 5px;
			height: 40px; 
			padding-left: 15px;;
			font-size: 18px;
	}

	.flex{
		display: flex;
        justify-content: center;
	}

    .inputsub {
            width: 170px;
            height: 45px;
            border-radius: 5px;
            font-size: 18px;
            background-color: #F6FFDE;
            font-weight: bold;
            color: black;
    }

    </style>
</head>

<body id="grad1">

<div class="header">
  <h3>Barangay Residence Form</h3>
</div>

<div class="row">

    <div class="column side"></div>

    <div class="column middle";>
		<form action="insert.php" method="POST">
		<div class="container">
            <table>
                <tr>
                    <td>
                        <b>Last Name</b><br>
                        <div class="flex"><input class="input" type="text" name="Last_Name" placeholder="Last Name" required></div><br><br>
                    </td>
                    <td>
                        <b>First Name</b><br>
                        <div class="flex"><input class="input" type="text" name="First_Name" placeholder="First Name" required></div><br><br>
                    </td>
                    <td>
                        <b>Middle Name</b><br>
                        <div class="flex"><input class="input" type="text" name="Middle_Name" placeholder="Middle Name"></div><br><br>
                    </td>
                    <td>
                        <b>Extension Name</b><br>
                        <div class="flex"><input class="input" type="text" name="Ext_Name" placeholder="Extention Name"></div><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>House Number</b><br>
                        <div class="flex"><input class="input" type="text" name="House_No" placeholder="House Number" required></div><br><br>
                    </td>
                    <td>
                        <b>Street Name</b><br>
                        <div class="flex"><input class="input" type="text" name="Street_Name" placeholder="Street Name" required></div><br><br>
                    </td>
                    <td>
                        <b>Subdivision/Zone</b><br>
                        <div class="flex"><input class="input" type="text" name="Sub_Name" placeholder="Subdivision/Zone" required></div><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Place of Birth</b><br>
                        <div class="flex"><input class="input" type="text" name="Place_B" placeholder="Place of Birth" required></div><br><br>
                    </td>
                    <td>
                        <b>Date of Birth</b><br>
                        <div class="flex"><input style="width: 300px;" class="input" type="Date" name="Date_B" placeholder="MM/DD/YYYY" required></div><br><br>
                    </td>
                    <td>
                        <b>Nationality</b><br>
                        <div class="flex"><input class="input" type="text" name="Nationality" placeholder="Nationality" required></div><br><br>
                    </td>
                    <td>
                        <b>Occupation</b><br>
                        <div class="flex"><input class="input" type="text" name="Occup" placeholder="Occupation" required></div><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Sex</b>
                        <div class="flex" style= "margin-top: 10px"><br>
                            <select required class="input" name="Sex"><br>
                                <option> Sex </option>
                                <option value = "Male">MALE</option>
                                <option value = "Female">FEMALE</option>
                                </select></div><br>
                    </td>
                    <td>
                        <b>Civil Status</b>
                        <div class="flex" style= "margin-top: 10px">
                            <select required class="input" name="Civil_Stat">
                                <option> Civil Status </option><br>
                                <option value = "Single">SINGLE</option>
                                <option value = "Married">MARRIED</option>
                                <option value = "Widowed">WIDOWED</option>
                                </select></div><br>
                    </td>
                    <td>
                    </td>
                </tr>
            </table>
			
			<br>
			<div class="flex"><input class="inputsub" type="submit" value="Submit"></div>
		</div>	
		</form>
    </div>

    <div class="column side"></div>
</div>

    <div class="footer">
        <p>©Technological University of the Philippines</p>
    </div>

</body>
</html>