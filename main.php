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
<!DOCTYPE html>
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
    }

    .header {
        padding: 30px;
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
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    </style>
    <script>
        function validateCheckbox() {
            var checkbox = document.getElementById("checkbox");
            var continueBtn = document.getElementById("continueBtn");

            if (checkbox.checked) {
                continueBtn.disabled = false;
                continueBtn.form.action = "forms.php"; // Update with the URL of the next page
            } else {
                continueBtn.disabled = true;
                continueBtn.form.action = ""; // Clear the action if the checkbox is unchecked
            }
        }
    </script>
</head>

<body id="grad1">

    <div class="header">
    <h2>WELCOME</h2>
    </div>

    <div class="row">
        <div class="column side";></div>
        <div class="column middle";><h3>TERMS OF SERVICE AND USER AGREEMENT: DATA USE FOR BARANGAY PURPOSES</h3>
            <p>This Terms of Service and User Agreement ("Agreement") is entered into between you, the User ("User"),and the Barangay ("Barangay") for the purpose of utilizing User's data for Barangaypurposes. By using and accessing the Barangay's services and platforms, Useragrees to be bound by the terms and conditions outlined in this Agreement.<br>
            <br>
            1. Data Collection and Consent<br>
            1.1 User acknowledges and agrees that the Barangay may collect and store certain personal information and data related to the User, including but not limited to name, contact details, address, occupation, and any other information voluntarily provided by the User.<br>
            1.2 User hereby consents to the collection, storage, and processing of the aforementioned personal information and data by the Barangay for Barangay purposes only.<br>
            <br>
            2. Purpose of Data Use<br>
            2.1 The Barangay shall utilize User's personal information and data solely for the purpose of fulfilling its Barangay functions, including but not limited to the provision of public services, emergency response, law enforcement, community development, and public health initiatives.<br>
            2.2 The Barangay may use User's data to communicate important announcements, notices, events, or initiatives relevant to the User and the Barangay community.<br>
            <br>
            3. Data Security and Confidentiality<br>
            3.1 The Barangay shall take reasonable measures to protect User's personal information and data from unauthorized access, disclosure, alteration, or destruction.<br>
            3.2 The Barangay shall handle User's personal information and data in accordance with applicable data protection laws and regulations.<br>
            <br>
            4. Data Sharing and Disclosure<br>
            4.1 The Barangay may share User's personal information and data with authorized personnel within the Barangay who require access to such data for the fulfillment of their duties and responsibilities.<br>
            4.2 The Barangay may share User's personal information and data with government agencies or law enforcement authorities as required by law or in response to a legal process.4.3 The Barangay shall not sell, lease, rent, or disclose User's personal information and data to any third party for commercial purposes without the explicit consent of the User.<br>
            <br>
            5. Data Retention<br>
            5.1 The Barangay shall retain User's personal information and data only for as long as necessary to fulfill the purposes outlined in this Agreement, unless a longer retention period is required by law or for legitimate Barangay purposes.<br>
            5.2 User may request the deletion or anonymization of their personal information and data from the Barangay's systems by contacting the Barangay's designated data protection officer, subject to any legal obligations that may apply.<br>
            <br>
            6. Amendments to the Agreement<br>
            6.1 The Barangay reserves the right to modify or amend this Agreement at any time. Any updates or changes will be communicated to the User through the appropriate channels.<br>
            6.2 Continued use of the Barangay's services and platforms following any modifications or amendments to this Agreement shall constitute User's acceptance of the revised terms.<br>
            <br>
            7. Governing Law and Jurisdiction<br>
            7.1 This Agreement shall be governed by and construed in accordance with the laws of the jurisdiction in which the Barangay operates.<br>
            7.2 Any disputes arising out of or in connection with this Agreement shall be subject to the exclusive jurisdiction of the courts of the aforementioned jurisdiction.<br>
            <br>
            By using and accessing the Barangay's services and platforms, User acknowledges that they have read, understood, and agreed to the terms and conditions of this Agreement.<br>
            </p>

            <div class="container">
                <form method="POST" action="">
                    <input type="checkbox" name="checkbox" id="checkbox" onclick="validateCheckbox()" />
                    <label for="checkbox">I agree to the terms and conditions</label>
                    <div class="container">
                        <input type="submit" name="continue" id="continueBtn" style="margin-left: 430px; width: 170px; height: 45px; margin-top: 5px; margin-left: 73px; border-radius: 5px;" value="Continue" disabled />
                    </div>
                </form>
            </div>
        </div>
            
        <div class="column side";></div>
    </div>

    <div class="footer">
    <p>©Technological University of the Philippines</p>
    </div>

</body>
</html>
<?php
if (isset($_POST['continue'])) {
    if (isset($_POST['checkbox'])) {
        // Checkbox is checked
        // Perform actions here
        echo "Checkbox is checked!";
    } else {
        // Checkbox is not checked
        echo "Please agree to the terms and conditions!";
    }
}
?>