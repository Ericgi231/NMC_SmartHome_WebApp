<?php
	session_start();
	if (!isset($_SESSION["user"])) {
		header("Location: ../login.php");
	}
	ini_set('display_errors', 1);
	include '../php/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="shortcut icon" href=""/>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
	<!-- Custom CSS & Js-->
	<link rel="stylesheet" href="../css/site.css"/>	
	<link rel="stylesheet" href="../css/module.css"/>
	<script src="../js/main.js"></script>
</head>
<body class="fongle-light-gray">
<!-- Load navbar -->
<div id="nav-frame"></div>
<!-- Content container -->
<div class="container fongle-dark-gray">
	
	<!-- Temperature and Light overview row -->
	<div class="row">
		<div class="col-lg-6">
			<div class="overview fongle-blue">
        			<h2 class="text-center">Climate</h2>       
				<?php
					$sql = 'SELECT * FROM Climate ORDER BY RecordTime DESC LIMIT 1';
					$result = mysqli_query($conn, $sql);	
					if (mysqli_num_rows($result) > 0){
						while ($row = mysqli_fetch_assoc($result)) {
							//echo "<p>Time: " . date_format(date_create($row["RecordTime"]), "m/d/y-h:i A") . "</p>";
							echo "<p>Humidity: " . $row["Humidity"] . "%</p>";
							echo "<p>Temperature: " . (($row["Temperature"]*9/5) + 32) . "*f</p>";
						}
					} else {
						echo "<p>No data found</p>";
					}	
				?>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="overview fongle-blue">
				<h2 class="text-center">Graph</h2>  
				<h2 class="text-center">"Comming Soon"</h2> 



			</div>
		</div>
</div>

<?php mysqli_close($conn); ?>

<!-- Bootstrap Js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
