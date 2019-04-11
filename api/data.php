<?php
//setting header to json
header('Content-Type: application/json');

	session_start();
	if (!isset($_SESSION["user"])) {
		header("Location: ./login.php");
	}
	ini_set('display_errors', 1);
	include 'php/connect.php';

//query to get data from the table
$sql = 'SELECT * FROM Climate ORDER BY RecordTime DESC LIMIT 5';
					
//execute query
$result = mysqli_query($conn, $sql);	

//loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$conn->close();

//now print the data
print json_encode($data);
?>