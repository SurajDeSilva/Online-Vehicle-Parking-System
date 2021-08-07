<?php
include('dbconnection.php');
session_start();
if (!isset($_SESSION['uname'])) header("Location: common_login.php");
if (isset($_SESSION['utype']) && $_SESSION['utype'] != 2) header("Location: index.php");

$sql = "SELECT * FROM users where utype=0";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<head>
    <title>Customers</title>
    <link rel="stylesheet" href="table.css">

</head>
<body>
<?php include
('admin_navigation.php');
?>

<table>
    <tr>
        <th>User ID</th>
        <th>Name</th>
        <th>NIC</th>
        <th>Telephone Number</th>
        <th>User Email</th>
    </tr>

    <?php

    if ($result) {
        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>
                    <td>'.$row['uid'].'</td>
                    <td>'.$row['uname'].'</td>
                    <td>'.$row['unic'].'</td>
                    <td>'.$row['utel'].'</td>
                    <td>'.$row['uemail'].'</td>
                    <form action="user_delete.php" method="post">
                    <input type="hidden" name="uid" value="' . $row['uid'] . '">
                    <td><input type="submit" name="submit" value="Delete Customer"></td>
                    </form>
                </tr>';
            }
        }
    } else {
        echo("Internal error");
    }

    ?>
</table>


</body>
</html>