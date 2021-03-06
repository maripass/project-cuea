
<?php 
	require_once('query/query.php');
	if (!isset($_SESSION['isAdmin'])) {
        header('location: ../login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user-add</title>
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
            Add User
        </div>
    </section>
    <section>
        <div class="login">
                <form class="add-user-validation-form" method="post" name="addUserForm" onsubmit="return addUserValidation()">
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
                        <input type="text" name="firstName" placeholder="First Name" id="firstName">
                    </div><br><br><br><br>

                    <div style="width: 100%;">
                        <input type="text" name="lastName" placeholder="Last Name" id="lastName">
                    </div><br><br><br><br>
    
                    <div style="width: 100%;">
                        <input type="email" name="userEmail" placeholder="Email" id="userEmail">
                    </div><br><br><br><br>

                    <div style="width: 100%;">
                        <select name="isAdmin" id="isAdmin">
                            <option value="">Is Admin</option>
                            <option value="1">Yes</option>
							<option value="0">No</option>
                        </select>
                    </div><br><br><br><br>
    

                    <div style="width: 100%;">
                        <input type="text" name="phoneNumber" placeholder="Telephone" id="phoneNumber">
                    </div><br><br><br><br>

                    <div style="width: 100%;">
                        <input type="password" name="password" placeholder="Password" id="password">
                    </div><br><br><br><br>

                    <div style="width: 100%;">
                        <input type="password" name="confirmPassword" placeholder="Confirm Password" id="confirmPassword">
                    </div><br><br><br><br>
    
            
                        <input type="submit" value="Create User" name="addNewUser">
  
            </form>
        </div>
    </section>
    
    <script src="js/validation.js"></script>
    
</body>
</html>