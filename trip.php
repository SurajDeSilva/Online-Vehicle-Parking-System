<?php

session_start();
if (!isset($_SESSION['uname'])) header("Location: common_login.php");
if (isset($_SESSION['utype']) && $_SESSION['utype'] != 0) header("Location: index.php");


if(isset($_POST['submit'])){
    include ('dbconnection.php');

    $from = $_POST['from'];
    $to = $_POST['to'];
    $time = $_POST['time'];
    $uid = $_SESSION["uid"];
    $sql = "INSERT INTO trips(cus_id,from_,to_,time_) VALUES ('$uid','$from', '$to', '$time')";

    mysqli_query($conn, $sql);

    header("Location: trip_status.php");
}


?>