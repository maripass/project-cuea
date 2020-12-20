<?php 
	require_once('query/query.php');
	if (!isset($_SESSION['isAdmin'])) {
        header('location: ../login.php');
    }

    $jsonArray = array();
	$theYear   = date("Y");
	if (isset($_POST['filterByYear'])) {
		$yearInput = mysqli_real_escape_string($con, $_POST['yearInput']);
		$theYear = $yearInput;
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
            Annually Report
        </div>
    </section>
    <section>
    <button class="btn" onclick="showHideFilter()"
            style="float: right; right: 10px; position: absolute; background-color: #2dd36f; margin-top: -60px;">
         
            Pick Year
        </button>

        <form id="filter" style="margin-top:15px; float:right;right:0px;margin-right:30px;">
          <input type="number" style="padding:10px; width:100%" max="2020" min="2016"placeholder="YYYY" name="yearInput" value="<?php echo $yearInput ?>">
          <input type="submit" value="Filter" name="filterByYear">
        </form>
        <table id="customers">
            <tr>
                <th>Months</th>
                <th>Meter Box</th>
                <th>Beggining Meter Reading</th>
                <th>End Meter Reading</th>
                <th>Unit Consumed</th>
                <th>Price</th>
                <th>Date</th>
                </tr>
            <tr >
            <?php
                $query1     = "SELECT * FROM consumption WHERE YEAR(createdAt) = '$theYear'";
                $results 	= mysqli_query($con, $query1);
                if (mysqli_num_rows($results) > 0) {
                    ?>
                        <tr style="height: 65px; font-size: 15px; color: #737373;">
                            <th style="color: #737373;">Source</th>
                            <th style="color: #737373;">Income</th>
                            <th style="color: #737373;">Category</th>
                            <th style="color: #737373;">Product/Service</th>
                            <th style="color: #737373;">Price</th>
                            <th style="color: #737373;">Date</th>
                        </tr>
                    <?php
            <td>january</td>
              <td>12364768912</td>
              <td>3884</td>
              <td>4884</td>
              <td>4884</td>
              <td>400ksh</td>
              <td>2020-02-05</td>
            </tr>
            <tr>
            <td>february</td>
              <td>213456789123</td>
              <td>4884</td>
              <td>5887</td>
              <td>5887</td>
              <td>200ksh</td>
              <td>11-01-2011</td>
            </tr>
            <tr>
            <td>march</td>
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

    <style>
       #filter {
         display:none;
       }
</style>
    <script>
      function showHideFilter() {
		var filter = document.getElementById("filter");
		if(filter.style.display === "block") {
			filter.style.display = "none";
		} else {
			filter.style.display = "block";
		}
	}
    </script>
</body>
</html>