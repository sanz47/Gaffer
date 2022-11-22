<?php
	$playerid = $_POST['playerid'];
	$name = $_POST['name'];
	$height = $_POST['height'];
	$weight = $_POST['weight'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];
	//$availability = $_POST['availability'];
	$position = $_POST['position'];
	//$timetorecover = $_POST['timetorecover'];
	$kitno = $_POST['kitno'];
	$name1 = 'new_table';

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
	
		$stmt = $conn->prepare("insert into player_info values(?, ?, ?, ?, ?, ?, 'y', ?, 0, ?, 'not_selected')");
		$stmt->bind_param("issssssi",  $playerid, $name, $height, $weight, $dob, $gender, $position, $kitno);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt1 = $conn->prepare("insert into player_data values(?, 0, 0, 0, 0, 0)");
		$stmt1->bind_param("i", $playerid);
		$execval1 = $stmt1->execute();
		
		$stmt->close();
		$stmt1->close();
		$conn->close();
	}
	header('Location: ../create_player.html');
?>