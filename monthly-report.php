
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
    <button class="btn"
            style="float: right; right: 10px; position: absolute; background-color: #2dd36f; margin-top: -60px;">
            <a href="add-user.html" style="color: white;">
                pick month</a>
        </button>
        <table id="customers">
        <tr>
              <th>months</th>
              <th>Meter Box</th>
              <th>Beggining Meter Reading</th>
              <th>End Meter Reading</th>
              <th>Unit Consumed</th>
              <th>Price</th>
              <th>Date</th>
            </tr>
            <tr >
            <td>january</td>
              <td>12364768912</td>
              <td>3884</td>
              <td>4884</td>
              <td>4884</td>
              <td>400ksh</td>
              <td>2020-02-05</td>
            </tr>

            <td>february</td>
              <td>12364768912</td>
              <td>3884</td>
              <td>4884</td>
              <td>4884</td>
              <td>400ksh</td>
              <td>2020-02-05</td>
            </tr>

            <td>march</td>
              <td>12364768912</td>
              <td>3884</td>
              <td>4884</td>
              <td>4884</td>
              <td>400ksh</td>
              <td>2020-02-05</td>
            </tr>

          </table>

          <button class="btn" style="float: right; right: 0px; margin-right: 10px;">Price: KSH 500</button>
    </section>
</body>
</html>