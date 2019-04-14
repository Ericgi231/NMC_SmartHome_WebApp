<?php
	session_start();
	if (!isset($_SESSION["user"])) {
		header("Location: ./login.php");
	}
	ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>About</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="shortcut icon" href=""/>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<!-- Custom CSS & Js-->
	<link rel="stylesheet" href="css/site.css"/>	
	<link rel="stylesheet" href="css/contact.css"/>
	<script src="js/main.js"></script>
</head>
<body class="fongle-light-gray">
<!-- Load navbar -->
<div id="nav-frame"></div>
<!-- Content container -->
<div class="container fongle-dark-gray">	
	<div class="row">
		<div class="col-lg-12">
			<h3>Contact Form</h3>
			<form>
				<label for="fname">First Name</label>
				<input type="text" id="fname" name="firstname" placeholder="Your name..">

				<label for="lname">Last Name</label>
				<input type="text" id="lname" name="lastname" placeholder="Your last name..">

				<label for="subject">Subject</label>
				<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

				<input type="submit" value="Submit" method="post" action="mailto:ericgi231@gmail.com"> 
			</form>
		</div>
	</div>
</div>

<!-- Bootstrap Js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>