<?php
    header("Content-Type: application/json");
    $response = '{
        "ResultCode": 0,
        "ResultDesc": "Confirmation Received Successfully"
    }';
    $mpesaResponse = file_get_contents('php://input');
    $logFile = "M_PESAResponse.txt";
    $jsonMpesaResponse = json_decode($mpesaResponse, true);
    $log = fopen($logFile, 'a');
    fwrite($log, $jsonMpesaResponse);
    // fwrite($log, )
    fclose($log);
    echo $response;

?>