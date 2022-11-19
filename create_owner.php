<?php
	$ownerid = $_POST['ownerid'];
	$name = $_POST['name'];
	$amount = $_POST['amount'];
	$total = $_POST['total'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into owner_info values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("isiiss", $ownerid, $name, $amount, $total, $dob, $gender);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
	header('Location: ../create_owner.html');
?>