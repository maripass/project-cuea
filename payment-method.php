
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
        <div style="width: 80%;">
            <div style="width: 40%; height: 200px; background-color:blue;"></div>

            <div style="width: 40%; height: 200px; background-color:red; float: right; right: 0px; margin-top: -200px; position: absolute;"></div>
        </div>

    </section>
</body>
</html>