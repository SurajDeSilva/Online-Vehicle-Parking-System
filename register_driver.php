<?php
session_start();
if (!isset($_SESSION['uname'])) header("Location: common_login.php");
if (isset($_SESSION['utype']) && $_SESSION['utype'] != 2) header("Location: index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register_Driver</title>
    <link rel="stylesheet" href="log.css">

</head>
<body>
<?php include_once
('admin_navigation.php');
?>

<div class="reg_log">
    <div class="form">
        <form action="register.php" method="post">
            <input type="text" placeholder="Name" name="name">
            <input type="text" placeholder="NIC" name="nic">
            <input type="text" placeholder="Telephone Number" name="telephone">
            <input type="password" placeholder="Password" name="password">
            <input type="text" placeholder="Email" name="email">
            <input type="hidden" name="type" value="1">
            <input type="submit" name="submit" value="Register">
        </form>
    </div>
</div>

</body>
</html>