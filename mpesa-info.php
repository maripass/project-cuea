
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
            Monthly Report
        </div>
    </section>
    <section>
        <div style="margin-left: 40%; margin-top: 13%;">
            <h1>Go to Mpesa</h1>
            <h1>Select Lipa Na M-PESA</h1>
            <h1>Select the Paybill Option</h1>
            <h1>Enter the business number <b>ebms</b></h1>
            <h1>Enter account number <b>21212</b></h1>
            <h1>Enter amount <b>Ksh.1000</b></h1>
            <h1>Enter your <b>M-PESA PIN</b></h1>
        </div>

    </section>
</body>
</html>