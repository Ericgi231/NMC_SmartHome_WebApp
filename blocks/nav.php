<?php session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-light fongle-blue">
	<a class="navbar-brand" href="/index.php">
		<img src="/assets/logo.svg" alt="Team Fongle Logo" height="50" width="50" />
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle Navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbar">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">	
				<a class="nav-link"  href="/index.php">Dashboard</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Modules
				</a>
				<div class="dropdown-menu"  aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="/module/climate.php">Climate</a>
				</div>
			</li>
			<li class="nav-item">	
				<a class="nav-link" href="#">Settings</a>
			</li>
			<li class="nav-item">	
				<a class="nav-link" href="/about.php">About</a>
			</li>
			<li class="nav-item">	
				<a class="nav-link" href="/contact.php">Contact</a>
			</li>
		</ul>
		<ul class="navbar-nav">
			<li class="nav-item">
				<?php
					echo "<a class='nav-link' style='color:white;' href='#'>" . $_SESSION["user"] . "#" . $_SESSION["id"] . "</a>";
				?>
			</li>
			<li class="nav-item ">
				<a class="nav-link" href="/php/logoutBackend.php">Logout</a>
			</li>
		</ul>
	</div>
</nav>
