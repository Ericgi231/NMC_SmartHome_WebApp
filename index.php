<?php

if (!isset($_COOKIE["user"])) {
	header("Location: ./login.html");
}

ini_set('display_errors', 1);
include 'php/connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Smart Home</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/site.css"/>	
	<script src="js/main.js"></script>
</head>
<body>
	<div id="nav-frame">
	
	</div>

	<h1>Hello user!</h1>

	<?php
		$sql = 'SELECT * FROM Climate ORDER BY RecordTime DESC';
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0){
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<p>Time: " . date_format(date_create($row["RecordTime"]), "m/d/y-h:i A") . "</p>";
				echo "<p>Humidity: " . $row["Humidity"] . "%</p>";
				echo "<p>Temperature: " . (($row["Temperature"]*9/5) + 32) . "*f</p>";
				echo "<br/>";
			}
		} else {
			echo "<p>No data found</p>";
		}
		
		mysqli_close($conn);
	?>
	
</body>
</html>
