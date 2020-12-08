
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
    <title>Home</title>
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
          Monthly Report
        </div>
    </section>
    <section>
        <table id="customers">
            <tr>
              <th>Meter Box</th>
              <th>Current Meter Reading</th>
              <th>Meter Cost</th>
              <th>Date</th>
            </tr>
            <tr >
              <td>12364768912</td>
              <td>20-10-15 3884</td>
              <td>400ksh</td>
              <td>2020-02-05</td>
            </tr>
            <tr>
              <td>213456789123</td>
              <td>2020-03-02 2975</td>
              <td>200ksh</td>
              <td>11-01-2011</td>
            </tr>
            <tr>
              <td>13456778912</td>
              <td>20-12-03 1993</td>
              <td>500ksh</td>
              <td>2020-10-10</td>
            </tr>
          </table>

          
          <button class="btn" style="float: right; right: 0px; margin-right: 10px;">Price: KSH 500</button>

    </section>
</body>
</html>