<?php 
	require_once('config/db.php');
	
	if (!isset($_SESSION['userId'])) {
		header('location: login.php');
	}
	
	$userId = $_SESSION['userId'];
	$query   = "SELECT * FROM user WHERE userId = '$userId' LIMIT 1";
	$results = mysqli_query($con, $query);
	if ($results) {
		$profileData = $results->fetch_assoc();		
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
            <form name="profileForm" method="POST" onsubmit="return profileValidation()">

                <div>
                    <?php  include("errors.php"); ?><br>
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
                    <?php  include("success.php"); ?><br>
                </div>
                <div style="width: 100%;">
                    <input type="text" value="<?php echo $profileData['firstName'] ?>" name="firstName" placeholder="First Name" id="firstName">
                </div><br><br><br><br>


                <div style="width: 100%;">
                    <input type="text" value="<?php echo $profileData['lastName'] ?>" name="lastName" placeholder="Last Name" id="lastName">
                </div><br><br><br><br>

                <div style="width: 100%;">
                    <input type="email" value="<?php echo $profileData['userEmail'] ?>" name="userEmail" placeholder="Email" id="userEmail" disabled>
                </div><br><br><br><br>


                <div style="width: 100%;">
                    <?php 
                        if($profileData['telephone']) {
                            ?>
                                <input type='text' value="<?php echo $profileData['telephone'] ?>" name='phoneNumber' placeholder='Telephone' id='phoneNumber'>
                            <?php
                        } else {
                            ?>
                                <input type='text' value="" name='phoneNumber' placeholder='Telephone' id='phoneNumber'>
                            <?php
                        }   
                    ?>
                </div><br><br><br><br>


                <input type="submit" value="Update Profile" name="updateProfile">
            <button class="btn">
                <a style="color:white" href="profile-change-password.php">Change password</a>
            </button> 
            <button class="btn" style="background-color: red;margin-left:115px;">
                <a style="color:white" href="profile-delete-account.php">Delete Account </a>
            </button>
    
                
            </form>
        </div>
    </section>
  
    <script src="js/dashboard-validation.js"></script>

</body>
</html>