<?php

session_start();

if(isset($_POST['submit'])){
    include ('dbconnection.php');

    $uid = $_POST['uid'];
    $sql = "DELETE FROM users WHERE uid = $uid";
    echo $sql;

    $result = mysqli_query($conn, $sql);

        header("Location: customers.php");

}


?>

