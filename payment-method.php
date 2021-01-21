
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

    <div style="width: 80%; margin-left: 10%; margin-top: 13%;">
        <div style="width: 50%; height: 200px;">
            <div style="width: 80%; margin-left: 10%; margin-top: 10%;">
                <div style="width: 100%; height: 200px;">
                    <a href="mpesa-info.php">
                        <img src="images/mpesa.jpg" width="100%" alt="">
                    </a>
                </div>

                <div style="width: 40%; height: 200px; float: right; right: 10%; margin-top: -200px; position: absolute;">
                    <a href="visa-info.php">
                        <img src="images/visa.png" width="100%" alt="">
                        <!-- <img src="images/mpesa.jpg" width="100%" height="250px" alt=""> -->
                    </a>
                </div>
            </div>
        </div>
    </div>
        <!-- <div style="width: 80%; margin-left: 10%; margin-top: 10%;">
            <div style="width: 100%; height: 200px;">
                <a href="mpesa-info.php">
                    <img src="images/mpesa.jpg" width="100%" height="250px" alt="">
                </a>
            </div>
        </div> -->

    </section>
</body>
</html>