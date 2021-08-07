<?php
session_start();
if (!isset($_SESSION['uname'])) header("Location: common_login.php");
if (isset($_SESSION['utype']) && $_SESSION['utype'] != 0) header("Location: index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book_taxi</title>
    <link rel="stylesheet" href="log.css">
</head>
<body>
<?php
    include_once ('navigation_customer.php');
?>
<div class="reg_log">
    <div class="form">
        <form action="trip.php" method="post">
            <input type="text" placeholder="From" name="from">
            <input type="text" placeholder="To" name="to">
            <input type="datetime-local" placeholder="Time" name="time">
            <input type="submit" name="submit" value="Book">
        </form>
    </div>
</div>

</body>
</html>