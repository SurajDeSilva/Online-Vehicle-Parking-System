<?php
session_start();
if (!isset($_SESSION['uname'])) header("Location: common_login.php");
if (isset($_SESSION['utype']) && $_SESSION['utype'] != 0) header("Location: index.php");

?>
<?php
include('dbconnection.php');

$sql = "SELECT * FROM trips AS t LEFT JOIN users AS u ON t.driv_id = u.uid ";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<head>
    <title>Trips_status</title>
    <link rel="stylesheet" href="table.css">

</head>
<body>
<?php include_once
('navigation_customer.php');
?>

<table>
    <tr>
        <th>From</th>
        <th>To</th>
        <th>Time</th>
        <th>Driver Name</th>
        <th>Tele number</th>
        <th>Trip Status</th>
    </tr>

    <?php

    if ($result) {
        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>
                    <td>'.$row['from_'].'</td>
                    <td>'.$row['to_'].'</td>
                    <td>'.$row['time_'].'</td>
                    <td>'.$row['uname'].'</td>
                    <td>'.$row['utel'].'</td>';
                if ($row['accepted'] == 1) echo "<td>Accepted</td>"; else echo "<td>Pending</td>";
                echo'<form action="cancel.php" method="post">
                    <input type="hidden" name="tid" value="' . $row['trip_id'] . '">
                    <td><input type="submit" name="submit" value="Cancel"></td>
                    </form>';
                    echo '</tr>';
            }
        }
    } else {
        echo("Internal error");
    }

    ?>
</table>


</body>
</html>