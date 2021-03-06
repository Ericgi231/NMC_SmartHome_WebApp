<?php
session_start();
ini_set('display_errors', 1);
include 'connect.php';

if ( isset( $_POST['submit'] ) ) 
{ 
	//Set vars
	$user = $_POST['username'];
	$pass = $_POST['password'];	

	//Check if login info is valid
	$sql = "SELECT UserName, Password, FirstName, Id FROM Users
		WHERE UserName = '" . $user . "'";
	
	$res = $conn->query($sql);
	
	//If username found check password
	if ($res->num_rows > 0) 
	{
		while($row = $res->fetch_assoc())
		{
			//If password is correct sign in and set account cookie
			if (password_verify($pass, $row["Password"])) 
			{
				$_SESSION["user"] = $row["UserName"];
				$_SESSION["first"] = $row["FirstName"];
				$_SESSION["id"] = $row["Id"];
				header("Location: ../index.php");
				$conn->close();
				exit;
			}
			else
			{
				setcookie("errorMessage", "Incorrect password", time() + 1, "/");
				header("Location: ../login.php");
				$conn->close();
				exit;
			}
		}
	} 
	else 
	{
		setcookie("errorMessage", "Account not found", time() + 1, "/");
		header("Location: ../login.php");
		$conn->close();
		exit;
	}
} 
?>
