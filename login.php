<?php

if(isset($_POST['submit'])){
    include ('dbconnection.php');

    $name = $_POST['name'];
    $password = $_POST['password'];
    $hashed_pass = md5($password);
    $sql = "SELECT * FROM users WHERE uname = '$name' AND upassword = '$hashed_pass'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            session_start();
            $_SESSION["uid"] = $row['uid'];
            $_SESSION["uname"] = $row['uname'];
            $_SESSION["utype"] = $row['utype'];
            if ($row['utype'] == 0) {
                header("Location: customer_interface.php");
            } else if ($row['utype'] == 1) {
                header("Location: driver_interface.php");
            }else{
                header("Location: admin_interface.php");
            }
        } else {
            echo "<script>alert('Username/Password incorrect!!')</script>";
            echo "<script>setTimeout(\"location.href = 'common_login.php'\")</script>";


          }
    } else {
        echo ("Internal error");
    }
}


?>