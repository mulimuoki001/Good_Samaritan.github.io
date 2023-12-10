<?php
	$firstName = $_POST['firstName'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];
	$message = $_POST['message'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, email, password, number, message) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $firstName, $email, $password, $number, $message);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>