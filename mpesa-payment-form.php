<?php 
    require_once('config/db.php');
	
	if (!isset($_SESSION['userId'])) {
		header('location: login.php');
	}
    
    // GET USER INFORMATION
	$userId  = $_SESSION['userId'];
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
            Mpesa Payment
        </div>
    </section>
    <section>
        <div class="login">
            <form name="" method="POST">

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
                    <input type="number" value="" name="amount"  id="amount" placeholder="Enter Amount" required>
                </div><br><br><br><br>


                <div style="width: 100%;">
                    <input type="text" value="<?php echo $profileData['telephone'] ?>" name="phone_number" id="phone_number" placeholder="Enter Your Phone Number" required>
                </div><br><br><br><br>

                <div style="width: 100%;">
                    <input type="text" value="Test Account" name="acc_ref"  id="acc_ref" hidden>
                </div>

                <div style="width: 100%;">
                    <input type="text" value="Payment Test" name="transaction_description"  id="transaction_description" hidden>
                </div>


                <input type="submit" value="Send" name="mpesaPayment">
                
            </form>
        </div>
    </section>
  
    <script src="js/dashboard-validation.js"></script>

</body>
</html>