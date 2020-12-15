
<?php 
	require_once('query/query.php');
	if (!isset($_SESSION['isAdmin'])) {
        header('location: ../login.php');
    }

    $userId = $_GET['id'];
    $query   = "SELECT * FROM user WHERE userId = '$userId' LIMIT 1";
	$results = mysqli_query($con, $query);
	if ($results) {
		$userData = $results->fetch_assoc();		
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
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
            Update User
        </div>
    </section>
    <section>
        <div class="login">
                <form class="add-user-validation-form" method="post">
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
                        <input type="text" name="firstName" value="<?php echo $userData['firstName'] ?>" placeholder="First Name" id="firstName">
                    </div><br><br><br><br>

                    <div style="width: 100%;">
                        <input type="text" name="lastName" value="<?php echo $userData['lastName'] ?>" placeholder="Last Name" id="lastName">
                    </div><br><br><br><br>
    
                    <div style="width: 100%;">
                        <input type="email" name="userEmail" value="<?php echo $userData['userEmail'] ?>" placeholder="Email" id="userEmail" disabled>
                        <input type="text" name="userId" value="<?php echo $userData['userId'] ?>" placeholder="Email" id="userId" hidden>
                    </div><br><br><br><br>

                    <div style="width: 100%;">
                        <select name="isAdmin" id="isAdmin">
                            <option value="">Is Admin</option>
                            <?php
                                if($userData['isAdmin'] == 1) {
                                    ?>
                                        <option value="<?php $userData['isAdmin'] ?>" selected>Yes</option>
                                    <?php
                                }
                            ?>
                            <option value="1">Yes</option>
							<option value="0">No</option>
                        </select>
                    </div><br><br><br><br>
    

                    <div style="width: 100%;">
                        <?php 
                            if($userData['telephone']) {
                                ?>
                                    <input type='text' value="<?php echo $userData['telephone'] ?>" name='phoneNumber' placeholder='Telephone' id='phoneNumber'>
                                <?php
                            } else {
                                ?>
                                    <input type='text' value="" name='phoneNumber' placeholder='Telephone' id='phoneNumber'>
                                <?php
                            }   
                        ?>
                    </div><br><br><br><br>
    
            
                        <input type="submit" value="Update User" name="updateUser">
                        <button class="btn" name="deleteUser" style="background-color: red;">
                            Delete Account
                        </button>
  
            </form>
        </div>
    </section>
    
    <script src="js/validation.js"></script>
    
</body>
</html>