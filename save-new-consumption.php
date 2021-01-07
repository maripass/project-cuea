<?php 

    $theYear  = date("Y");
    $theMonth = date("m");
    require_once('config/db.php');
    $new_reading = $_GET['new_reading'];
    $meterBoxId  = $_SESSION['meterBoxNumber'];
    $query = "UPDATE consumption SET currentMeterReading='$new_reading' WHERE meterBoxId='$meterBoxId' AND YEAR(createdAt) = '$theYear' AND MONTH(createdAt) = '$theMonth'";
    mysqli_query($con, $query);

?>