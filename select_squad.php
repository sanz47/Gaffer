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
$sql = " SELECT * FROM player_info where availability = 'y'";
$result = $mysqli->query($sql);
//$mysqli->close();
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
            font-size: small;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: small;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            border: 1px solid black;
            padding: 1px;
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
				<th>Team Status</th>
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
				<th>Select</th>
            </tr>
            <?php
                while($rows=$result->fetch_assoc())
                {
					$sql1 = " SELECT * FROM player_data where playerid = ".$rows['playerid'];
$resul1 = $mysqli->query($sql1);
$result1=$resul1->fetch_assoc();

            ?>
            <tr>
				<td><?php echo $rows['status'];?></td>	
                <td><?php echo $rows['playerid'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $result1['goal'];?></td>
                <td><?php echo $result1['assist'];?></td>
				<td><?php echo $result1['rcard'];?></td>
				<td><?php echo $result1['ycard'];?></td>
				<td><?php echo $result1['rating'];?></td>
				<td><?php echo $rows['position'];?></td>
				<td><?php echo $rows['timetorecover'];?></td>
				<td><?php echo $rows['kitno'];?></td>
				<td><form action="./select_player.php" method="post">  <input type="hidden" name="var" value=<?php echo $rows['playerid'];?> /> <button method="post">change</button> </form><td>
				
            </tr>
            <?php
                }
			$mysqli->close();
            ?>
        </table>
    </section>
</body>
 
</html>