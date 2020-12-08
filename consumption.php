
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
           Consumption
        </div>
    </section>
    <style>

    </style>

    <section>
        <table id="customers">
            <tr>
                <th>Meter box</th>
                <th>Active</th>
                <th>Date</th>
                
                
            </tr>
            <tr onclick="window.location.href='update-meter-box.html'">
                <td>12345679876</td>
                <td>On</td>
                <td>20/11/2020</td>
                
            </tr>

        </table>
    </section>
</body>

</html>