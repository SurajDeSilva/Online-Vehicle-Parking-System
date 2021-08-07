<?php

$dbservername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "taxi_service";

$conn = mysqli_connect($dbservername, $dbUsername, $dbPassword,$dbName);
if ($conn->connect_error) {
	die("Connection Failed". $conn->connect_error);
}		

?>