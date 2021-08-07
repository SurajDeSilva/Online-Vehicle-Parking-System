<?php

session_start();

if(isset($_POST['submit'])){
    include ('dbconnection.php');

    $tid = $_POST['tid'];
    $sql = "DELETE FROM trips WHERE trip_id=$tid";

    mysqli_query($conn, $sql);

    header("Location: trip_status.php");
}


?>