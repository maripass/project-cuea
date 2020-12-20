<?php 
    require_once('config/db.php');
    $new_reading = $_GET['new_reading'];
    $meterBoxId = $_SESSION['meterBoxNumber'];
    $query="UPDATE consumption SET currentMeterReading='$new_reading' WHERE meterBoxId='$meterBoxId'";
    mysqli_query($con, $query);
?>