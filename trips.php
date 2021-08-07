<?php
include('dbconnection.php');
session_start();
if (!isset($_SESSION['uname'])) header("Location: common_login.php");
if (isset($_SESSION['utype']) && $_SESSION['utype'] != 2) header("Location: index.php");

$sql = "SELECT trip_id, u.uname AS 'cusname', u.utel, from_, to_,time_, d.uname AS 'driname', accepted FROM (trips AS t INNER JOIN users AS u ON t.cus_id = u.uid) LEFT join users as d ON t.driv_id = d.uid";


$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<head>
    <title>Vehicle_categories</title>
    <link rel="stylesheet" href="table.css">

</head>
<body>
<?php include_once
('admin_navigation.php');
?>

<table>
    <tr>
        <th>Trip ID</th>
        <th>Customer Name</th>
        <th>Telephone Number</th>
        <th>From</th>
        <th>To</th>
        <th>Time</th>
        <th>Driver Name</th>
        <th>Status</th>

    </tr>

    <?php

    if ($result) {
        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>
                    <td>' . $row['trip_id'] . '</td>
                    <td>' . $row['cusname'] . '</td>
                    <td>' . $row['utel'] . '</td>
                    <td>' . $row['from_'] . '</td>
                    <td>' . $row['to_'] . '</td>
                    <td>' . $row['time_'] . '</td>
                    <td>' . $row['driname'] . '</td>';
                if ($row['accepted'] == 1) echo "<td>Accepted</td>"; else echo "<td>Pending</td>";
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