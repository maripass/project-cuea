
<?php 
	require_once('config/db.php');
	
	if (!isset($_SESSION['userId'])) {
		header('location: login.php');
    }

    $theYear  = date("Y");
    $theMonth = date("m");
    if (isset($_POST['filterByMonth'])) {
        $monthInput = mysqli_real_escape_string($con, $_POST['monthInput']);
        $theYear = date("Y", strtotime($monthInput));
        $theMonth = date("m", strtotime($monthInput));
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
    <button class="btn" onclick="showHideFilter()"
            style="float: right; right: 10px; position: absolute; background-color: #2dd36f; margin-top: -60px;">
         
                Pick Month
        </button>

        <form id="filter" style="margin-top:15px; float:right;right:0px;margin-right:30px;">
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
            <tr >
            

            <?php 
                $userId=$_SESSION['userId'];
                $query = "SELECT * FROM meterbox WHERE userId = '$userId' AND YEAR(createdAt) = '$the_year' AND MONTH(createdAt) = '$the_month' ORDER BY createdAt DESC";
                $result=mysqli_query($con, $query);
                if(mysqli_num_rows($result) > 0){
                    while($row= $result->fetch_assoc()) {
                        $meterBoxNumberId = $row['meterBoxNumber'];
                        $query2   = "SELECT * FROM consumption WHERE meterBoxNumberId = '$meterBoxNumberId'";
                        $result2 = mysqli_query($con, $query2);
                        if (mysqli_num_rows($result2) == 1) {
                            $consumptionData = $result2->fetch_assoc();		
                        }
                        ?>
                           <tr>
                                <td><?php echo date('M',strtotime($row['createdAt'])) ?></td>
                                <td><?php echo $row['meterBoxNumber'] ?></td>
                                <td><?php echo $consumptionData['currentMeterReading'] ?></td>
                                <td><?php echo $consumptionData['previousCurrentMeterReading'] ?></td>
                                <td><?php echo $consumptionData['currentMeterReading'] ?></td>
                                <td><?php echo $consumptionData['currentMeterReading'] ?></td>
                                <!-- <td><?php echo number_format($income_data['amount'], 2) ?></td> -->
                                <!-- <td><?php echo $product_category_data['name'] ?></td> -->
                                <!-- <td><?php echo $product_service_data['name'] ?></td> -->
                                <!-- <td><?php echo number_format($row['price'], 2) ?></td> -->
                                <td><?php echo date('M d Y',strtotime($row['createdAt'])) ?></td>
                            </tr>
                        <?php
                    }
                }
            ?>

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