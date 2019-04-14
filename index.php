<?php
	session_start();
	if (!isset($_SESSION["user"])) {
		header("Location: ./login.php");
	}
	ini_set('display_errors', 1);
	include 'php/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="logo.ico"/>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<!-- Custom CSS & Js-->
	<link rel="stylesheet" href="css/site.css"/>	
	<link rel="stylesheet" href="css/index.css"/>
	<script src="js/main.js"></script>
</head>
<body class="fongle-light-gray">
<!-- Load navbar -->
<div id="nav-frame"></div>
<!-- Content container -->
<div class="container fongle-dark-gray">
	<!-- User greeting row-->
	<div class="row">
		<div class="col-lg-12">
			<div class="header-box">
				<h1 class="text-center">Hello <?php echo $_SESSION["first"]; ?></h1>
			</div>
		</div>
	</div>
	
	<!-- Temperature and Light overview row -->
	<div class="row">
		<div class="col-lg-6">
			<div class="box fongle-blue">
        			<h2 class="text-center">Climate</h2>       
				<?php
					$sql = 'SELECT * FROM Climate WHERE UserId = ' . $_SESSION["id"] . ' ORDER BY RecordTime DESC LIMIT 1';
					$result = mysqli_query($conn, $sql);	
					if (mysqli_num_rows($result) > 0){
						echo "<div class='row'>";
						while ($row = mysqli_fetch_assoc($result)) {
							//echo "<p>Time: " . date_format(date_create($row["RecordTime"]), "m/d/y-h:i A") . "</p>";
							echo "<div class='col-lg-6'><h3>Humidity<br>" . $row["Humidity"] . "%</h3></div>";
							echo "<div class='col-lg-6'><h3>Temperature<br>" . (($row["Temperature"]*9/5) + 32) . "*f</h3></div>";
						}
						echo "</div>";
					} else {
						echo "<h3>No data found</h3>";
					}	
				?>
			</div>
		</div>

		<div class="col-lg-6">
			<div class="box fongle-blue">
				<h2 class="text-center">Lights</h2>	
				<h3>Coming Soon!</h3>
			</div>
		</div>
	</div>
</div>

<?php mysqli_close($conn); ?>

<!-- Bootstrap Js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
