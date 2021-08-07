<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register_Customer</title>
    <link rel="stylesheet" href="log.css">
</head>
<body>
<?php include_once
('navigation_bar.php');
?>

<div class="reg_log">
    <div class="form">
        <form action="register.php" method="post">
            <input type="text" placeholder="Name" name="name">
            <input type="text" placeholder="NIC" name="nic">
            <input type="text" placeholder="Telephone Number" name="telephone">
            <input type="password" placeholder="Password" name="password">
            <input type="text" placeholder="Email" name="email">
            <input type="hidden" name="type" value="0">
            <input type="submit" name="submit" value="Register">
        </form>
    </div>
</div>



</body>
</html>