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
    <div class="sidebar">
      <header>Dasboard</header>
      <ul>
            <li><a href="meter-box.php">Meter Box</a></li>
            <li><a href="monthly-report.php">Monthly Report</a></li>
            <li><a href="annually-report.php">Annually Report</a></li>
            <li><a href="help.php">Help</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a style="color:red;" href="../logout.php">Logout</a></li>
        </ul>
  </div>

    <section class="banner">
        <div class="banner-left">
            Annually Report
        </div>
    </section>
    <section>
        <table id="customers">
            <tr>
              <th>Meter Box</th>
              <th>Beggining Meter Reading</th>
              <th>End Meter Reading</th>
              <th>Price</th>
              <th>Date</th>
            </tr>
            <tr >
              <td>12364768912</td>
              <td>3884</td>
              <td>4884</td>
              <td>400ksh</td>
              <td>2020-02-05</td>
            </tr>
            <tr>
              <td>213456789123</td>
              <td>3884</td>
              <td>4884</td>
              <td>200ksh</td>
              <td>11-01-2011</td>
            </tr>
            <tr>
              <td>13456778912</td>
              <td>3884</td>
              <td>4884</td>
              <td>500ksh</td>
              <td>2020-10-10</td>
            </tr>
          </table>

          
          <button class="btn" style="float: right; right: 0px; margin-right: 10px;">Price: KSH 500</button>
    </section>
</body>
</html>