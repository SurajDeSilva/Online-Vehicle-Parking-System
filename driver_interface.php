<?php
session_start();
if (!isset($_SESSION['uname'])) header("Location: common_login.php");
if (isset($_SESSION['utype']) && $_SESSION['utype'] != 1) header("Location: index.php");
?>

<?php
include('dbconnection.php');


$sql = "SELECT * FROM trips AS t INNER JOIN users AS u ON t.cus_id = u.uid WHERE accepted = 0";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<head>
    <title>Not_Accepted_Trips</title>
    <link rel="stylesheet" href="table.css">

</head>
<body>
<?php include_once
('driver_navigation.php');
?>

<table>
    <tr>
        <th>From</th>
        <th>To</th>
        <th>Time</th>
        <th>User</th>
        <th>Tele number</th>
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
                    <td>'.$row['utel'].'</td>
                    <form action="accept.php" method="post">
                    <input type="hidden" name="tid" value="' . $row['trip_id'] . '">
                    <td><input type="submit" name="submit" value="Accept"></td>
                    </form>
                </tr>';
            }
        }
    } else {
        echo("Internal error");
    }

    ?>
</table bgcolor="white" border="2px">


</body>
</html>