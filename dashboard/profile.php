<?php 
	require_once('../config/db.php');
	
	if (!isset($_SESSION['userId'])) {
		header('location: ../login.php');
	}
	
	$userId = $_SESSION['userId'];
	$query   = "SELECT * FROM user WHERE userId = '$userId'";
	$results = mysqli_query($con, $query);
	if (mysqli_num_rows($results) == 1) {
		$profileData = $results->fetch_assoc();		
	}

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <input type="checkbox" id="check">
    <label for="check">
        <div id="btn">
            <img src="images/icons/menu.svg" width="20px" height="20px" alt="">
        </div>
        <div id="cancel">
            <img src="images/icons/close.svg" width="20px" height="20px" alt="">
        </div>
    </label>
    <div class="sidebar">
        <header>Dasboard</header>
        <ul>
           <li><a href="consumption.php">Consumption</a></li>
            <li><a href="meter-box.php">Meter Box</a></li>
            <li><a href="monthly-report.php">Monthly Report</a></li>
            <li><a href="annually-report.php">Annually Report</a></li>
            <li><a href="help.php">Help</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a style="color:red;" href="../logout.php">Logout</a></li>
        </ul>
    </div>


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
            include("../errors.php");
            ?><br>
        </div>
        <div>
            <?php
            include("../success.php");
            ?><br>
        </div>
                <div style="width: 100%;">
                    <input type="text" value="<?php echo $profileData['firstName'] ?>" name="firstName" placeholder="First Name" id="firstName">
                </div><br><br><br><br>


                <div style="width: 100%;">
                    <input type="text" value="<?php echo $profileData['lastName'] ?>" name="lastName" placeholder="Last Name" id="lastName">
                </div><br><br><br><br>

                <div style="width: 100%;">
                    <input type="email" value="<?php echo $profileData['userEmail'] ?>" name="userEmail" placeholder="Email" id="userEmail">
                </div><br><br><br><br>


                <div style="width: 100%;">
                    <input type="text" value="" name="phoneNumber" placeholder="Telephone" id="phoneNumber">
                </div><br><br><br><br>


                <div style="width: 100%;">
                    <input type="text" value="" name="userAddress" placeholder="Address" id="userAddress">
                </div><br><br><br><br>

                <input type="submit" value="Update Profile" name="updateProfile">
            <button class="btn">Change password</button> <button class="btn" style="background-color: red;margin-left:130px;">Delete account</button>
                    
                </label>
                
            </form>
        </div>
    </section>

    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
    </script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <!-- import validation page -->
    <script src="js/validation.js"></script>

</body>
</html>