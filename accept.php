<?php

session_start();

if(isset($_POST['submit'])){
    include ('dbconnection.php');

    $tid = $_POST['tid'];
    $drvid = $_SESSION["uid"];
    $sql = "UPDATE trips SET driv_id='$drvid',accepted='1' WHERE trip_id=$tid";

    mysqli_query($conn, $sql);

    header("Location: accepted_trips.php");
}


?>