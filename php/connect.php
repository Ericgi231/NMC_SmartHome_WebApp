<?php
	$server = "fongle.info"; //Make sure to change back to localhost before i push it. To view the pages put the server to fongle.info to view the pages
	$user = "SmartUser";
	$pass = "Password1";
	$db = "SmartHome";	

	$conn = new mysqli($server, $user, $pass, $db);

	if ($conn->connect_error){
		die("Connection Failed:" . $conn->connect_error);
	}
?>
