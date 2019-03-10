<?php
ini_set('display_errors', 1);
include 'connect.php';

if ( isset( $_POST['submit'] ) ) 
{ 
	//Set vars
	$user = $_POST['username'];
	$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$name = $_POST['name']; 
	$mail = $_POST['email'];
	$nameSplit = explode(" ", $name);	

	//Check if username is taken
	$sql = "SELECT UserName FROM Users
		WHERE UserName = '" . $user . "'";
	
	$res = $conn->query($sql);
	
	if ($res->num_rows > 0) {
		$conn->close();
		echo "<h1>Username taken. Please try a different name.</h1>";
		echo "<a href='../create.html'>Go Back</a>";
		exit;
	}
	
	//Create account in database
	$sql = "INSERT INTO Users 
		(UserName, Password, FirstName, LastName, Email) VALUES 
		('".$user."', '".$pass."', '".$nameSplit[0]."', '".$nameSplit[1]."', '".$mail."')";
		
	if ($conn->query($sql) === TRUE) {
		$conn->close();
		echo "<h1>Account created.</h1>";
		echo "<a href='../login.html'>Login Now</a>";
		exit;
	} else {	
		$conn->close();
		echo "<h1>Account creation failed. Please try again later.</h1>";
		echo "<a href='../create.html'>Go Back</a>";
		exit;
	}	
} 
?>
