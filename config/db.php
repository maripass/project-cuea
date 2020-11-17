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
if($con){
die("connection failed: ");
}






?>