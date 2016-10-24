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
		echo "Welcome ".$_SESSION['username']; 
	}
	
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>CardMatch Main</title>
	<link href="style.css" type="text/css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Baloo+Tamma" rel="stylesheet">
</head>

<body>

<div id="wrapper">
	<div id="banner">
		<a href="student_main.php"><h1>CARDMATCH</h1></a>
		<p><h3>The Learning Game</h3></p>
	</div>
	
	<a href="teacher_main.php"><img src="./image/home.png" height="50px"></a></p>
	
	<div id="student_main">
		<div><a class="button" href="stage.php">Play</a></div>
		<div><a class="button" href="favourites.html">Favorites</a></div>
		<div><a class="button" href="student_instructions.php">Instructions</a></div>
		<div><a class="button" href="logoutconnect.php">Exit</a></div>
	</div>

	
	
</div>
<footer id="footer">
	<ul>	
		<li><a href="#"/>Contact us</a></li>
		<li> | </li>
		<li><a href="#"/>About us</a></li>
	</ul>
</footer>
</body>
</html>