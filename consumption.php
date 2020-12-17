
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
           Consumption
        </div>
    </section>
    <style>

    </style>

    <section>
        <div style="border:1px solid red; width:50%;height:100px;margin-left:25%;margin-top:10%;">
            <div style="text-align:center;margin-top:30px;font-size:40px; font-weight:bold;">
                <?php 
                    $userId = $_SESSION['userId'];
                    $meterCostVar = 0;
                    $query3="SELECT * FROM metercost";
                    $result3=mysqli_query($con, $query3);
                    while($meterCost= $result3->fetch_assoc()) {
                        $meterCostVar= $meterCost['costPerKwatt'];
                    }
                    $query="SELECT * FROM meterbox WHERE userId='$userId'";
                    $result1=mysqli_query($con, $query);
                    if(mysqli_num_rows($result1) > 0){
                        while($meterBoxData= $result1->fetch_assoc()) {	
                            $meterBoxId = $meterBoxData['meterBoxId'];
                            $query2="SELECT * FROM consumption WHERE meterBoxId='$meterBoxId'";
                            $result2=mysqli_query($con, $query2);
                            if(mysqli_num_rows($result2) > 0){
                                while($consumptionData= $result2->fetch_assoc()) {	
                                    echo  $consumptionData['currentMeterReading'];

                                } 
                            } else {
                                
                                $queryInsert="INSERT INTO consumption (meterBoxId, currentMeterReading, previoustMeterReading, meterCostId) VALUES('$meterBoxId', 0, 0, 1)";
                                $getResult=mysqli_query($con, $queryInsert);
                            }     
                        }
                    } else {
                        echo "Do not have a meter box."; 
                    }
                ?>
               <!-- <div id="token"></div>  -->
            </div>
        </div>
    </section>
    <script>
        var x = 0;
        var token = document.getElementById('token');
        setInterval(() => {
            incrementToken();
        }, (5000));
        function incrementToken() {
            token.innerHTML=x++;
        }
    </script>

    
</body>

</html>