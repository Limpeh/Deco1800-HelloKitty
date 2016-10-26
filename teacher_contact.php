<?php
	session_start();
	if (!isset($_SESSION['auth'])) {
		echo "you shouldn't be here";
		header('location: index.php'); 
	} else {
		if ($_SESSION['auth'] == false) {
		echo $_SESSION['auth'];
			header('location: index.php'); 
		}
	}
	


	
	if (isset($_SESSION['username'])) {
		echo "<div id='userwelcome'> Welcome ".$_SESSION['username']."&nbsp |</div>"; 
		echo "<div id='idnum'> Connected to teacher ID: ".$_SESSION['ID']."</div>";
	}
	
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact Us</title>
	<link href="style.css" type="text/css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Baloo+Tamma" rel="stylesheet">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
</head>
<body>
<a href="teacher_main.php"><img src="./image/home.png" height="50px"></a></p>
<div id="banner">
		<a href="login.html"><h1>CARDMATCH</h1></a>
		<h3>The Learning Game</h3>
</div>

<body>
<div id="instructions">
<h1>Contact Us</h1>

<h1>Team Members</h1>
<div class="teampic">
	<p><h3>Sim Wei Jie</h3></p>
	<p><img src="./image/sim wei.gif" alt="Sim Wei Jie" height="100px" width="100px"></p>
</div>
<div class="teampic">
	<p><h3>Kurt Mahaffey</h3></p>
	<p><img src="./image/kurt.gif" alt="Kurt" height="100px" width="100px"></p>
</div>
<div class="teampic">
	<p><h3>Ben Wilde</h3></p>
	<p><img src="./image/ben.gif" alt="Ben" height="100px" width="100px"></p>
</div>
<div class="teampic">
	<p><h3>Jowin Yien</h3></p>
	<p><img src="./image/jowin.gif" alt="Jowin" height="100px" width="100px"></p>
</div>
<p><a class="button" href="student_main.php">Back</a></p>
</div>

<div id="footer">
	<ul>	
		<li><a href="#"/>Contact us</a></li>
		<li> | </li>
		<li><a href="about_teacher"/>About us</a></li>
	</ul>
</div>
</body>
</html>