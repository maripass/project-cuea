<?php 
	require_once('config/db.php');
	
	if (!isset($_SESSION['userId'])) {
		header('location: login.php');
	}
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/dashboard.css">
    
</head>
<body>
<?php include('header.php'); ?>

    <section class="banner">
        <div class="banner-left">
            Profile
        </div>
    </section>
    <section>
        <div class="login">
            <form name="profileChangePasswordForm" method="POST" onsubmit="return profileChangePasswordValidation()">

                    <div>
                    <?php
                    include("errors.php");
                    ?><br>
                </div>
                <style>
                    .success {
                        padding: 0px 2px;
                        border: 1px solid #3c763d;
                        color: #3c763d; 
                        background: #dff0d8; 
                        font-size: 14px;
                        text-align: center;
                    }
                </style>
                <div>
                    <?php
                    include("success.php");
                    ?><br>
                </div>
                <div style="width: 100%;">
                    <input type="text" value="" name="oldPassword" placeholder="Old password" id="oldPassword">
                </div><br><br><br><br>


                <div style="width: 100%;">
                    <input type="text" value="" name="newPassword" placeholder="New Password" id="newPassword">
                </div><br><br><br><br>

                <div style="width: 100%;">
                    <input type="text" value="" name="confirmPassword" placeholder="Confirm New passwor" id="confirmPassword">
                </div><br><br><br><br>

                <input type="submit" value="Change Password" name="profileChangePassword">
                 
            </form>
        </div>
    </section>
  
    <script src="js/validation.js"></script>

</body>
</html>