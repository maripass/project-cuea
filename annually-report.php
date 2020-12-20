<?php 
	require_once('config/db.php');
	
	if (!isset($_SESSION['userId'])) {
		header('location: login.php');
    }
    $jsonArray = array();
	$theYear   = date("Y");
	if (isset($_POST['filterByYear'])) {
        $yearInput = mysqli_real_escape_string($con, $_POST['yearInput']);
        echo $_POST['yearInput'];
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
          <input type="submit" value="filter" name="filterByYear">
        </form>
        <table id="customers">
            <tr>
                <th>Month</th>
                <th>Meter Box Number</th>
                <th>Beggining Meter Reading</th>
                <th>End Meter Reading</th>
                <th>Unit Consumed</th>
                <th>Price</th>
                <th>Date</th>
            </tr>
            <?php
                $query1     = "SELECT * FROM consumption WHERE YEAR(createdAt) = '$theYear'";
                $results 	= mysqli_query($con, $query1);
                echo $theYear;
                while($row = $results->fetch_assoc()) {
                    // GET PRODUCT CATEGORY NAME
                    $meterBoxId = $row['meterBoxId'];
                    $query2   = "SELECT * FROM meterbox WHERE meterBoxId = '$meterBoxId'";
                    $result2 = mysqli_query($con, $query2);
                    if (mysqli_num_rows($result2) == 1) {
                        $meterBoxData = $result2->fetch_assoc();		
                    }
                    ?>
                        <tr>
                            <td><?php echo date('M',strtotime($row['createdAt'])) ?></td>
                            <td><?php echo $meterBoxData['meterBoxNumber'] ?></td>
                            <td>5887</td>
                            <td>6888</td>
                            <td>6888</td>
                            <td>500ksh</td>
                            <td><?php echo date('M d Y',strtotime($row['createdAt'])) ?></td>
                        </tr>
                    <?php                    
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