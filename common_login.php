<?php
session_start();
if (isset($_SESSION['uname'])) {
    if ($_SESSION['utype'] == 0) {
        header("Location: customer_interface.php");
    } else if ($_SESSION['utype'] == 1) {
        header("Location: driver_interface.php");
    }else{
        header("Location: admin_interface.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Common_Customer</title>
    <link rel="stylesheet" href="log.css">
</head>
<body>
<?php include_once
('navigation_bar.php');
?>

<div class="reg_log">
    <div class="form">
        <form action="login.php" method="post">
            <input type="text" placeholder="Name" name="name">
            <input type="password" placeholder="Password" name="password">
            <input type="submit" name="submit" value="Login">
            <p class="message">Not registered yet? <a href="register_customer.php">Register as a Customer</a></p>
        </form>
    </div>
</div>

</body>
</html>