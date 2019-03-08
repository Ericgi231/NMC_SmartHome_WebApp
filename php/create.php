<?php
include 'connect.php';

if ( isset( $_POST['submit'] ) ) 
{ 
	$user = $_POST['username'];
	$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$name = $_POST['name']; 
	$mail = $_POST['email'];
	echo $pass;
	if (password_verify('ass' , $pass))
	{
		echo "match";
	}	
	exit;	
} 

header("Location: index.php");
?>
