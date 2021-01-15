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
            Visa Information
        </div>
    </section>
    <section>
        <div class="login">
            <form name="bankAccount" method="POST" onsubmit="return bankAccountValidation()">

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
                    <input type="text" name="cardNumber" placeholder="Card Number" id="cardNumber">
                </div><br><br><br><br>


                <div style="width: 100%;">
                    <input type="date" name="expirationDay" placeholder="Expiration Day" id="expirationDay">
                </div><br><br><br><br>

                <div style="width: 100%;">
                    <input type="number" name="expirationYear" placeholder="Expiration Year" min="2016" id="expirationYear">
                </div><br><br><br><br>

                <div style="width: 100%;">
                    <input type="text" name="securityCode" placeholder="Security Code" id="securityCode">
                </div><br><br><br><br>

                <input type="submit" value="Add Card" name="addCard">
                
            </form>
        </div>
    </section>
  
    <script src="js/dashboard-validation.js"></script>

</body>
</html>