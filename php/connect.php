<?php
	$server = "localhost";
	$user = "smart_user";
	$pass = "Password1";
	$db = "smart_home";	

	$conn = new mysqli($server, $user, $pass, $db);

	if ($conn->connect_error){
		die("Connection Failed:" . $conn->connect_error);
	}
?>
