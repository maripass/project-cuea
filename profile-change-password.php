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
            <!-- <h1>Login</h1> -->
            <form name="profileForm" method="POST" onsubmit="return profileValidation()">

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
                    <input type="text" value="" name="firstName" placeholder="Old password" id="firstName">
                </div><br><br><br><br>


                <div style="width: 100%;">
                    <input type="text" value="New password" name="lastName" placeholder="Last Name" id="lastName">
                </div><br><br><br><br>

                <div style="width: 100%;">
                    <input type="text" value="Confirm New password" name="lastName" placeholder="Last Name" id="lastName">
                </div><br><br><br><br>

                <input type="submit" value="Update Profile" name="updateProfile">
            <button class="btn">Change password</button> <button class="btn" style="background-color: red;margin-left:130px;">Delete account</button>
                    
                </label>
                
            </form>
        </div>
    </section>
  
    <script src="js/dashboard-validation"></script>

</body>
</html>