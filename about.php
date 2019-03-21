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
	<link rel="stylesheet" href="css/about.css"/>
	<script src="js/main.js"></script>
</head>
<body class="fongle-light-gray">
<!-- Load navbar -->
<div id="nav-frame"></div>
<!-- Content container -->
<div class="container fongle-dark-gray">
	<div class="row">
		<div class="col-lg-12">
			<div class="fongle-blue header-box">
       				<h2 class="text-center">About Team Fongle</h2>  
                    <p>Team Fongle is a group of students at NMC who choose to create a project that allows the user to view the current temperature and humidity of the room. It also allows the user to view which room the lights were last turned on.</p>     
			</div>
		</div>
	</div>

		<div class="row">
  <div class="col-lg-4">
    <div class="box fongle-blue">
      <img src="./images/eric.png" alt="Eric" style="width:100%">
        <h2>Eric</h2>
        <p class="title">Backend Developer</p>
        <p>I’m an eighteen year old software developer at Asure Software and a computer science student at Northwestern Michigan College. I’ve been programming for just over four years and plan to continue for as long as I can stand to look at a computer screen. 
I spent my childhood in the great outdoors living on a farm in Wisconsin. While I still love spending time outside and enjoying the company of friends and animals, I’ve had a passion for technology my whole life. It was only when I moved to Michigan and began taking classes at the Career Tech Center in Traverse City that I began to realize my potential as a developer.
</p>
    </div>
  </div>

  <div class="col-lg-4">
    <div class="box fongle-blue">
      <img src="./images/jason.png" alt="Jason" style="width:100%">
        <h2>Jason</h2>
        <p class="title">Backend Developer</p>
        <p>Jason Luckhardt is a Freelance Programmer, where Jason works with clients from around the world.Jason has spent years programming as he originally started when he was 13 years old. In this time he has developed games, built websites, and created wonderful applications. Jason works hard on independent projects and doesn't stop until his clients are satisfied.
Jason enjoys video games, piano, and digital art.
</p>
    </div>
  </div>

  <div class="col-lg-4">
    <div class="box fongle-blue">
      <img src="./images/bruce.png" alt="Bruce" style="width:100%">
        <h2>Bruce</h2>
        <p class="title">Frontend Developer</p>
        <p>Hello, my name is Bruce Abshire. I am currently a student with Ferris State University Michigan in the CIT Developer program. I graduated from NMC in 2010 with a bachelors in Math and the arts. I have had a wide range of professions from sales to managers over the years. I have worked with many different teams to overcome many different challenges to get where i am today. I have always strived to be the best that i can in everything that i do. I have always wanted to work with technology but always thought it was outside my reach. Now i have been able to take my passion with technology and my knowledge i have learned to be able to bring them together and have started to actually become a software developer and accomplish a lifelong dream.</p>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-4">
    <div class="box fongle-blue">
      <img src="./images/courtney.png" alt="Courtney" style="width:100%">
	  <h2>Courtney</h2>
        <p class="title">Frontend Developer</p>
        <p>Courtney Lints is a UX/UI and frontend designer and developer in Traverse City, Michigan. When Courtney is not creating wire frames, mock up and prototypes for her projects, she is babysitting eight kids - but not all at the same time. She enjoys watching baseball games and doing fun things with the kids she babysits. Courtney is in college at Northwestern Michigan full time and is on her last semester and getting an Associates Degree in Web Development. </p>
    </div>
  </div>

  <div class="col-lg-4">
    <div class="box fongle-blue">
      <img src="./images/stacy.png" alt="Stacy" style="width:100%">
        <h2>Stacey</h2>
        <p class="title">Notebook Organizer</p>
        <p>Stacy Revolt is a web developer in Traverse City, Michigan.  She enjoys writing code and learning new coding languages.   She has recently begun to learn about infrastructure through a class in A+.  In her spare time, she enjoys spending time with her family and friends, traveling, and yoga.  She is a student at Northwestern Michigan College and on track to graduate with her Associates in Applied Science in the Spring of 2019.</p>
	  </div>
    </div>
  </div>

    <div class="col-lg-4">
    <div class="box fongle-blue">      
        <h2>Credit for Icons</h2>
        <img src="./images/icons/001-thermometer-tool.svg" alt="thermometer" style="width:25%"><p>Icon made by Freepik from www.flaticon.com</p>
		<img src="./images/icons/002-wifi.svg" alt="wifi house" style="width:25%"><p>Icon made by Freepik from www.flaticon.com</p>
		<img src="./images/icons/003-light-bulb.svg" alt="light bulb on" style="width:25%"><p>Icon made by Creaticca Creative Agency from www.flaticon.com</p>
		<img src="./images/icons/004-light-bulb-1.svg" alt="light bulb off" style="width:25%"><p>Icon made by Creaticca Creative Agency from www.flaticon.com</p>
		<img src="./images/icons/rain.svg" alt="rain" style="width:25%"><p>Icon made by Iconixar from www.flaticon.com</p>
	  </div>
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
