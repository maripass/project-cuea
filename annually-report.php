<?php 
	require_once('config/db.php');
	
	if (!isset($_SESSION['userId'])) {
		header('location: login.php');
    }
    
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
    <link rel="stylesheet" href="css/dashboard.css">
    
</head>
<body>
<?php include('header.php'); ?>

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

        <form id="filter" style="margin-top:15px; float:right;right:0px;margin-right:30px;" method="POST">
          <input type="number" name="yearInput" id="yearInput" style="padding:10px; width:100%" max="2020" min="2016"placeholder="YYYY" value="<?php echo $yearInput ?>">
          <input type="submit" value="Filter" name="filterByYear">
        </form>
        <table id="customers">
            <tr>
                <th>Month</th>
                <th>Meter Box Number</th>
                <th>Previous Month Meter Reading</th>
                <th>Current Month Meter Reading</th>
                <th>Unit Consumed</th>
                <th>Price</th>
                <th>Date</th>
            </tr>
            <?php
                $query1   = "SELECT * FROM metercost";
                $result1 = mysqli_query($con, $query1);
                $meterCost = 0;
                if ($result1) {
                    while($meterCostData = $result1->fetch_assoc()) {
                        $meterCost = $meterCostData['costPerKwatt'];
                    }	
                }
                $query1     = "SELECT * FROM consumption WHERE YEAR(createdAt) = '$theYear'";
                $results 	= mysqli_query($con, $query1);
                while($row = $results->fetch_assoc()) {
                    // GET PRODUCT CATEGORY NAME
                    $meterBoxId = $row['meterBoxId'];
                    $meterBoxQuery   = "SELECT * FROM meterbox WHERE meterBoxId = '$meterBoxId'";
                    $meterBoxResult = mysqli_query($con, $meterBoxQuery);
                    if (mysqli_num_rows($meterBoxResult) == 1) {
                        $meterBoxData = $meterBoxResult->fetch_assoc();		
                    }
                    if($row['previoustMeterReading'] < $row['currentMeterReading']) {
                        $unitConsummed = $row['currentMeterReading'];
                    } else {
                        $unitConsummed = $row['previoustMeterReading'] - $row['currentMeterReading'];
                    }
                    ?>
                        <tr>
                            <td><?php echo date('M',strtotime($row['createdAt'])) ?></td>
                            <td><?php echo $meterBoxData['meterBoxNumber'] ?></td>
                            <td><?php echo $row['previoustMeterReading'] ?></td>
                            <td><?php echo $row['currentMeterReading'] ?></td>
                            <td><?php echo $unitConsummed ?></td>
                            <td>KSH <?php echo $unitConsummed * $meterCost ?></td>
                            <td><?php echo date('M d Y',strtotime($row['createdAt'])) ?></td>
                        </tr>
                    <?php                    
                }
            ?>

            
        </table>

          
        <button class="btn" style="float: right; right: 0px; margin-right: 10px;">Price: KSH <?php echo $unitConsummed * $meterCost ?></button>
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