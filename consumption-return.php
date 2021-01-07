<?php 
	require_once('config/db.php');
    $theYear  = date("Y");
    $theMonth = date("m");
    $userId = $_SESSION['userId'];
    $query = "SELECT * FROM meterbox WHERE userId='$userId'";
    $result1 = mysqli_query($con, $query);
    if(mysqli_num_rows($result1) > 0){
        while($meterBoxData= $result1->fetch_assoc()) {	
            $meterBoxId = $meterBoxData['meterBoxId'];
            $query2="SELECT * FROM consumption WHERE meterBoxId='$meterBoxId' AND YEAR(createdAt) = '$theYear' AND MONTH(createdAt) = '$theMonth'";
            $result2=mysqli_query($con, $query2);
            if(mysqli_num_rows($result2) > 0){
                while($consumptionData= $result2->fetch_assoc()) {
                    $jsonobj = '[{"previous_consumption": '.$consumptionData['currentMeterReading'].'}]';
                    echo $jsonobj;
                } 
            }    
        }
    } else {
        echo "Do not have a meter box."; 
    }
  
?>