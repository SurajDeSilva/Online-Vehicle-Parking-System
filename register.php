<?php
session_start();

if(isset($_POST['submit'])){
	include ('dbconnection.php');

        $name = $_POST['name'];
        $nic = $_POST['nic'];
        $tel = $_POST['telephone'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $type = $_POST['type'];
        $hashed_pass = md5($password);
    if($name != NULL and $nic != NULL and $tel != NULL and $tel != NULL and $password != NULL and $password != NULL and $email != NULL) {
        $sql = "INSERT INTO users(uname,unic,utel,upassword,uemail,utype) VALUES ('$name', '$nic', '$tel','$hashed_pass', '$email','$type')";

        mysqli_query($conn, $sql);

        header("Location: common_login.php");

    }
    else{
        if(isset($_SESSION["uid"])) {
            header("Location: register_driver.php");
        }
        else{
            header("Location: register_customer.php");
        }
    }
}


?>