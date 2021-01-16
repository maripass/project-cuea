<?php 
	require_once('query/query.php');
	if (!isset($_SESSION['isAdmin'])) {
        header('location: ../login.php');
    }
    $theYear   = date("Y");
	if (isset($_POST['filterByYear'])) {
        $yearInput = mysqli_real_escape_string($con, $_POST['yearInput']);
		$theYear = $yearInput;
    }
    $price = 0;
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

        <form id="filter" style="margin-top:15px; float:right; right:0px; margin-right:30px;" method="POST" name="yearForm" onsubmit="return yearValidation()">
          <input type="number" name="yearInput" id="yearInput" style="padding:10px; width:100%" max="2021" min="2016"placeholder="YYYY" value="<?php echo $yearInput ?>">
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
            <?php
                $meterCostQuery   = "SELECT * FROM metercost";
                $meterCostResult = mysqli_query($con, $meterCostQuery);
                $meterCost = 0;
                $totalPrice = 0;
                $totalMeterPaid = 0;
                // GET MONTHLY BANK PAYMENT
                $bankPaymentQuery  = "SELECT * FROM bankpayment WHERE YEAR(createdAt) = '$theYear'";
                $bankPaymentResult = mysqli_query($con, $bankPaymentQuery);
                if ($bankPaymentResult) {
                    while($bankPaymentData = $bankPaymentResult->fetch_assoc()) {
                        $totalMeterPaid    += $bankPaymentData['price'];
                    }	
                }
                if ($meterCostResult) {
                    while($meterCostData = $meterCostResult->fetch_assoc()) {
                        $meterCost = $meterCostData['costPerKwatt'];
                    }	
                }
                $consumptionQuery  = "SELECT * FROM consumption WHERE YEAR(createdAt) = '$theYear'";
                $consumptionResult = mysqli_query($con, $consumptionQuery);
                while($row = $consumptionResult->fetch_assoc()) {
                    // GET METER BOX ID
                    $meterBoxId = $row['meterBoxId'];
                    $meterBoxQuery   = "SELECT * FROM meterbox WHERE meterBoxId = '$meterBoxId'";
                    $meterBoxResult = mysqli_query($con, $meterBoxQuery);
                    if (mysqli_num_rows($meterBoxResult) == 1) {
                        $meterBoxData = $meterBoxResult->fetch_assoc();		
                    }
                    $totalPrice += $row['currentMeterReading'] - $row['previoustMeterReading'];
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
                    <button class="btn" style="float: right; right: 0px; margin-right: 10px;">Price: KSH <?php echo $totalPrice * $meterCost ?></button>
                    <button class="btn" style="float: right; right: 0px; margin-right: 10px; background-color: #2dd36f;">Annually Paid: KSH. <?php echo $totalMeterPaid; ?></button>
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