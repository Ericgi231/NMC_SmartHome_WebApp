<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/site.css"/>
<link rel="stylesheet" href="css/form.css"/>
</head>
<body class="fongle-dark-gray">
<div class="container">
	<form action="./php/loginBackend.php" method="post" class="form-account">
		<h1 class="form-text text-center">Login</h1>
        	<?php 
	                if (isset($_COOKIE["errorMessage"])) {
        	            	echo "<p class='form-text text-danger'>" . $_COOKIE["errorMessage"] . "</p>";
				unset($_COOKIE["errorMessage"]);
                	}
			if (isset($_COOKIE["succMessage"])) {
	        	        echo "<p class='form-text text-success'>" . $_COOKIE["succMessage"] . "</p>";
				unset($_COOKIE["succMessage"]);			
			}
            	?>
		<div class="form-group">
			<label for="username">Username:</label>
			<input type="text" name="username" class="form-control" placeholder="Username"  pattern="[a-zA-z0-9-]+" required/>
		</div>
		<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" name="password" class="form-control" placeholder="Password" pattern="[^\s]+" required/>
		</div>
		<input type="submit" name="submit" value="Login" class="btn fongle-blue"/>
		<input type="button" name="create" value="Sign Up" onclick="location.href='./create.php'" class="btn fongle-blue"/>
	</form>
</div>
</body>
</html>
