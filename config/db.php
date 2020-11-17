<?php 
session_start();
$userEmail = "";
$userId = "";
$errors = array();

$host = "localhost";
$user ="root";
$password ="";
$dbname ="electricitybill";
$con = mysqli_connect($host,$user,$password,$dbname);
if(!$con){
die("connection failed: ".mysqli_connect_error());
}

//create new user
if(isset($_POST['createNewUser'])){
    $firstName= mysqli_real_escape_string($con, $_POST['firstName']);
    // $lastName=
    // $userEmail=
    // $userPassword=
    // $confirmUserPassword=
    echo $firstName;
}






?>