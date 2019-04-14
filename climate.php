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
    	<link rel="shortcut icon" href=""/>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
	<script src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	

	<!-- Custom CSS & Js-->
	<link rel="stylesheet" href="css/site.css"/>	
	<link rel="stylesheet" href="css/module.css"/>
	<script src="js/main.js"></script>
</head>
<body class="fongle-light-gray">
<!-- Load navbar -->
<div id="nav-frame"></div>
<!-- Content container -->
<div class="container fongle-dark-gray">
	<div class="row">
		<div class="col-lg-12">
			<div class="header-box">
				<h1 class="text-center">Climate</h1>
			</div>
		</div>
	</div>	
	<!-- Temperature and Light overview row -->
	<div class="row">
		<div class="col-lg-6">
			<div class="box fongle-blue">
        			<h2 class="text-center">Table</h2>       
							<?php
					$sql = 'SELECT * FROM Climate WHERE UserId = ' . $_SESSION["id"] . ' ORDER BY RecordTime DESC LIMIT 9';
					$result = mysqli_query($conn, $sql);	
					if (mysqli_num_rows($result) > 0){
						echo "<table class='table'>";
						echo "<thead><tr>";
						echo "<th>Time Recorded</th><th>Humidity</th><th>Temperature</th>";
						echo "</thead></tr>";
						echo "<tbody>";
						while ($row = mysqli_fetch_assoc($result)) {
							echo "<tr>";
							echo "<td>" . date_format(date_create($row["RecordTime"]), "m/d/y h:i A") . "</td>";
							echo "<td>" . $row["Humidity"] . "%</td>";
							echo "<td>" . $row["Temperature"] . "*c</td>";
							echo "</tr>";
						}
						echo "</tbody>";
						echo "</table>";
					} else {
						echo "<h3>No data found</h3>";
					}	
				?>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="box fongle-blue">
				<h2 class="text-center">Graph</h2>  
				<div id="line_chart" style="width: 100%; height: 500px"></div>
				<?php				
					$sql = 'SELECT * FROM Climate WHERE UserId = ' . $_SESSION["id"] . ' ORDER BY RecordTime DESC LIMIT 48';
					$result = mysqli_query($conn, $sql);	
					$rows = array();
					$table = array();

					$table['cols'] = array(
						array(
							'label' => 'Date Time',
							'type' => 'datetime'
						),
					    array(
							'label' => 'Temperature',
							'type' => 'number'
                   )
					);


					while($row = mysqli_fetch_array($result)){
						$sub_array = array();
						  $datetime = explode(".", $row["RecordTime"]);
						  $dt = new DateTime($datetime[0]);
						  $year = $dt->format('Y');
						  $month = $dt->format('m') - 1; 
						  $day = $dt->format('d');
						  $hour = $dt->format('h');
						  $minute = $dt->format('i');
						  $second = $dt->format('s');
                  
						$sub_array[] = array(
							"v" => 'Date('. $year .', '. $month .', '. $day .', '. $hour . ', '. $minute .', '. $second .')'
						);
						
						$sub_array[] = array(
							"v" => $row["Temperature"]
                  );
						$rows[] = array(
							"c" => $sub_array
						);
					}

					$table['rows'] = $rows;
					$jsonTable = json_encode($table);
				?>
			</div>
		</div>
</div>

<?php mysqli_close($conn); ?>

<!-- Bootstrap Js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript">
	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);
	function drawChart()
   {
    var data = new google.visualization.DataTable(<?php echo $jsonTable; ?>);

    var options = {
     title:'Sensors Data',
     legend:{position:'bottom'},
     chartArea:{width:'95%', height:'65%'}
    };

    var chart = new google.visualization.LineChart(document.getElementById('line_chart'));
    chart.draw(data, options);
   }
	</script>
</body>
</html>
