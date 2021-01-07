
<?php 
	require_once('query/query.php');
	if (!isset($_SESSION['isAdmin'])) {
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
    <?Php include('header.php'); ?>



    <section class="banner">
        <div class="banner-left">
            Profile
        </div>
    </section>
    <section>
        <div class="login">
            <form name="profileForm" method="POST" onsubmit="return profileValidation()">
                <div>
                    <?php  include("../errors.php"); ?><br>
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
                    <?php  include("../success.php"); ?><br>
                </div>
                <div style="width: 100%;">
                    <input type="text" name="firstName" placeholder="First Name" id="firstName" value="<?php echo $profileData['firstName'] ?>">
                </div><br><br><br><br>


                <div style="width: 100%;">
                    <input type="text" name="lastName" placeholder="Last Name" id="lastName" value="<?php echo $profileData['lastName'] ?>">
                </div><br><br><br><br>

                <div style="width: 100%;">
                    <input type="email" name="userEmail" placeholder="Email" id="userEmail"value="<?php echo $profileData['userEmail'] ?>" name="userEmail" placeholder="Email" id="userEmail" disabled>
                </div><br><br><br><br>

                <div style="width: 100%;">
                    <?php 
                        if($profileData['telephone']) {
                            ?>
                                <input type='text' value="<?php echo $profileData['telephone'] ?>" name='phoneNumber' placeholder='Phone Number' id='phoneNumber'>
                            <?php
                        } else {
                            ?>
                                <input type='text' value="" name='phoneNumber' placeholder='Phone Number' id='phoneNumber'>
                            <?php
                        }   
                    ?>
                </div><br><br><br><br>

  

                <input type="submit" value="Update Profile" name="updateProfile">
                <button class="btn">
                <a style="color:white" href="profile-change-password.php">Change password</a>
                </button> 
                    
                
            </form>
        </div>
    </section>

    <script src="js/validation.js"></script>

</body>
</html>