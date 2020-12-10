
<?php 
	require_once('query/query.php');
	if (!isset($_SESSION['isAdmin'])) {
        header('location: ../login.php');
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
            Metter Cost
        </div>
    </section>
    <section>
        <div class="login">
            <!-- <h1>Login</h1> -->
            <form name="profileForm" method="POST" onsubmit="return profileValidation()">
                <div style="width: 100%;">
                    <input type="text" name="firstName" placeholder="Metter cost per kwatt" id="firstName">
                </div><br><br><br><br>
                
                <input type="submit" value="Update Cost">
            </form>
        </div>
    </section>


    <!-- import validation page -->
    <script src="js/validation.js"></script>

</body>
</html>