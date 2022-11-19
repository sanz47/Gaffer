<!-- PHP code to establish connection with the localserver -->
<?php
 
$user = 'root';
$password = '';
$database = 'test';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
                $password, $database);
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
$sql = " SELECT * FROM player_info";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Player List</title>
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
    </style>
</head>
 
<body>
    <section>
        <h1>Players</h1>
        <!-- TABLE CONSTRUCTION -->
        <table>
            <tr>
                <th>Player ID</th>
                <th>Name</th>
                <th>Height(cm)</th>
                <th>Weight(kg)</th>
				<th>Date of Birth</th>
				<th>Gender</th>
				<th>Availability</th>
				<th>Position</th>
				<th>Time to recover(days)</th>
				<th>Kit no</th>
            </tr>
            <?php
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <td><?php echo $rows['playerid'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['height'];?></td>
                <td><?php echo $rows['weight'];?></td>
				<td><?php echo $rows['dob'];?></td>
				<td><?php echo $rows['gender'];?></td>
				<td><?php echo $rows['availability'];?></td>
				<td><?php echo $rows['position'];?></td>
				<td><?php echo $rows['timetorecover'];?></td>
				<td><?php echo $rows['kitno'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
 
</html>