
<?php 
	require_once('query/query.php');
	if (!isset($_SESSION['isAdmin'])) {
        header('location: ../login.php');
    }
    $currentYear = date("Y");
    $currentMonth = date("m");
    $theYear  = date("Y");
    $theMonth = date("m");
    if (isset($_POST['filterByMonth'])) {
        $monthInput = mysqli_real_escape_string($con, $_POST['monthInput']);
        if(date("Y", strtotime($monthInput)) > $currentYear || date("m", strtotime($monthInput)) > $currentMonth) {
            array_push($errors, "Year/Month should not be greater than the current year/month.");
        }
        $theYear = date("Y", strtotime($monthInput));
        $theMonth = date("m", strtotime($monthInput));
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
        <button class="btn" onclick="showHideFilter()" style="float: right; right: 10px; position: absolute; background-color: #2dd36f; margin-top: -60px;">
            Pick Month
        </button>
        <div>
            <?php
                include("../errors.php");
            ?><br>
        </div>

        <form id="filter" style="margin-top:15px; float:right;right:0px;margin-right:30px;" method="POST" name="monthlyForm" onsubmit="return monthlyValidation()">
            <input type="month" style="padding:10px; width:100%" name="monthInput" id="monthInput" value="<?php echo $monthInput ?>" >
            <input type="submit" value="Filter" name="filterByMonth">
        </form>
        <table id="customers">
            <tr>
                <th>Months</th>
                <th>Meter Box</th>
                <th>Previous Month Meter Reading</th>
                <th>Current Month Meter Reading</th>
                <th>Unit Consumed</th>
                <th>Price</th>
                <th>Date</th>
            </tr>
           
            <?php
                $meterCostQuery   = "SELECT * FROM metercost";
                $meterCostResult = mysqli_query($con, $meterCostQuery);
                $meterCost = 0;
                if ($meterCostResult) {
                    while($meterCostData = $meterCostResult->fetch_assoc()) {
                        $meterCost = $meterCostData['costPerKwatt'];
                    }	
                }
                $consumptionQuery     = "SELECT * FROM consumption WHERE YEAR(createdAt) = '$theYear' AND MONTH(createdAt) = '$theMonth'";
                $consumptionResult 	= mysqli_query($con, $consumptionQuery);
                while($row = $consumptionResult->fetch_assoc()) {
                    // GET METER BOX ID
                    $meterBoxId     = $row['meterBoxId'];
                    $meterBoxQuery  = "SELECT * FROM meterbox WHERE meterBoxId = '$meterBoxId'";
                    $meterBoxResult = mysqli_query($con, $meterBoxQuery);
                    if (mysqli_num_rows($meterBoxResult) == 1) {
                        $meterBoxData = $meterBoxResult->fetch_assoc();		
                    }
                    $unitConsummed = $row['currentMeterReading'] - $row['previoustMeterReading'];
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

          <?php 
            if(mysqli_num_rows($consumptionResult) > 0){
                ?>
                    <button class="btn" style="float: right; right: 0px; margin-right: 10px;">Price: KSH <?php echo $unitConsummed * $meterCost ?></button>
                <?php
            }
        ?>
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

    <script src="js/validation.js"></script>


</body>
</html>