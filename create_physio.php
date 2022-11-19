<?php
	$physioid = $_POST['physioid'];
	$name = $_POST['name'];
	$specialist = $_POST['specialist'];
	$age = $_POST['age'];
	$exp = $_POST['exp'];
	$dob = $_POST['dob'];
	$gender = $_POST['gender'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into physio_info values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("issiiss", $physioid, $name, $specialist, $age, $exp, $dob, $gender);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
	header('Location: ../create_physio.html');
?>