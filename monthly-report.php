
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
        <table id="customers">
        <tr>
              <th>Meter Box</th>
              <th>Beggining Meter Reading</th>
              <th>End Meter Reading</th>
              <th>Unit Consumed</th>
              <th>Price</th>
              <th>Date</th>
            </tr>
            <tr >
              <td>12364768912</td>
              <td>3884</td>
              <td>4884</td>
              <td>4884</td>
              <td>400ksh</td>
              <td>2020-02-05</td>
            </tr>
            <tr>
              <td>213456789123</td>
              <td>4884</td>
              <td>5887</td>
              <td>5887</td>
              <td>200ksh</td>
              <td>11-01-2011</td>
            </tr>
            <tr>
              <td>13456778912</td>
              <td>5887</td>
              <td>6888</td>
              <td>6888</td>
              <td>500ksh</td>
              <td>2020-10-10</td>
            </tr>
            
          </table>

          <button class="btn" style="float: right; right: 0px; margin-right: 10px;">Price: KSH 500</button>
    </section>
</body>
</html>