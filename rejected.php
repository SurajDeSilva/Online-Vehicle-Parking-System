<?php

session_start();

if(isset($_POST['submit'])){
    include ('dbconnection.php');

    $tid = $_POST['tid'];
    $sql = "UPDATE trips SET driv_id='0',accepted='0' WHERE trip_id=$tid";

    mysqli_query($conn, $sql);

    header("Location: driver_interface.php");
}


?>