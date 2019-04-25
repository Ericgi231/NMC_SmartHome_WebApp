<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/site.css"/>
<link rel="stylesheet" href="css/form.css"/>
<link rel="shortcut icon" href="logo.ico"/>
</head>
<body class="fongle-dark-gray">
<div class="container">
	<form action="./php/createBackend.php" method="post" class="form-account">
		<h1 class="form-text text-center">Create Account</h1>
		<?php
			if (isset($_COOKIE["errorMessage"])) {
				echo "<p class='form-text text-danger'> " . $_COOKIE["errorMessage"] . "</p>";
			}
			unset($_COOKIE["errorMessage"]);
		?>
		<div class="form-group">
			<label for="username">Username:</label>
			<input type="text" name="username" class="form-control" placeholder="Username"  pattern="[a-zA-z0-9-]+" required/>
			<small class="form-text text-muted">No spaces or special characters.</small>
		</div>
		<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" name="password" class="form-control" placeholder="Password" pattern="[^\s]+" required/>
			<small class="form-text text-muted">No spaces.</small>
		</div>
		<div class="form-group">
			<label for="name">Full Name:</label>
			<input type="text" name="name" class="form-control" placeholder="Real Name" required/>
		</div>
		<div class="form-group">
			<label for="email">E-Mail:</label>
			<input type="email" name="email" class="form-control" placeholder="E-Mail" required/>
		</div>
		<input type="submit" name="submit" value="Create Account" class="btn fongle-blue"/>
		<input type="button" name="login" value="Login" onclick="location.href='./login.php'" class="btn fongle-blue"/>
	</form>
</div>
</body>
</html>
