
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
            Help
        </div>
    </section>
    <section>
        
        
        <div style="width: 50%; margin: auto;">
            <div style="float: right; right: 0px; background-color: #3274d6; width: 70%; padding: 10px; margin: 10px -25px 0 0;">
                <div style="margin-bottom: 10px; font-size: 20px;">Me</div>
                <div>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut enim qui ullam soluta asperiores architecto molestiae aperiam dolore doloremque sapiente iusto ducimus iste ratione, mollitia rem, id harum laborum expedita!
                </div>
            </div>
    
            <div style="float: left; left: 0px; background-color: #dcdcdc; width: 70%; padding: 10px; margin: 10px 0 0 0px;">
                <div style="margin-bottom: 10px; font-size: 20px;">Admin</div>
                <div>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut enim qui ullam soluta asperiores architecto molestiae aperiam dolore doloremque sapiente iusto ducimus iste ratione, mollitia rem, id harum laborum expedita!
                </div>
            </div>
        </div>

        <div style="width: 50%; position: fixed; bottom: 0px; margin-left: 25%;">
            <form name="loginForm" method="POST" onsubmit="return loginValidation()">
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
                <div>
                    <textarea name="message" id="message" style="height: 100px;"></textarea>
                </div>
                
                <div style="margin-right: -30px;">
                    <input type="submit" value="Send" name="helpSubmit">

                </div>
            </form>
        </div>
    </section>

</body>

</html>