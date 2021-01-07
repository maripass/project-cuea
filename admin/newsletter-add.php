
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
    <title>Newsletter</title>
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
            Newsletter
        </div>
    </section>
    <section>
        <div class="login">
            <form name="newletterForm" method="POST" onsubmit="return newletterValidation()">
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
                    <input type="text" name="name" placeholder="Name" id="name" value="">
                </div><br><br><br><br>

                <div style="width: 100%;">
                    <textarea name="description" id="description" style="height:300px"></textarea>
                </div><br><br><br><br>

                <input type="submit" value="Save Newsletter" name="newsletter">    
            </form>
        </div>
    </section>

    <script src="js/validation.js"></script>

</body>
</html>