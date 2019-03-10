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
		setcookie("errorMessage", "Username already in use", time() + 1, "/");
		header("Location: ../create.php");
		$conn->close();
		exit;
	}
	
	//Create account in database
	$sql = "INSERT INTO Users 
		(UserName, Password, FirstName, LastName, Email) VALUES 
		('".$user."', '".$pass."', '".$nameSplit[0]."', '".$nameSplit[1]."', '".$mail."')";
		
	if ($conn->query($sql) === TRUE) {
		setcookie("succMessage", "Account created", time() + 1, "/");
		header("Location: ../login.php");
		$conn->close();
		exit;
	} else {
		setcookie("errorMessage", "Incorrect password", time() + 1, "/");
		header("Location: ../create.php");
		$conn->close();
		exit;
	}	
} 
?>
