<!DOCTYPE html>
<html>
<head>
	<title>Smart Home</title>
</head>
<body>
	<h1>Hello World!</h1>
	<?php
		ini_set('display_errors', 1);
		include "connect.php";
		
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
