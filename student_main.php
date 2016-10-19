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
	
	<div id="student_main">
		<ul>
			<li><a href="stage.php">Play</a></li>
			<li><a href="favourites.html">Favorites</a></li>
			<li><a href="student_instructions.php">Instructions</a></li>
		</ul>
		<a href="logoutconnect.php">Exit</a> 
	</div>

	
	<div id="footer">
		<ul>	
			<li><a href="#"/>Contact us</a></li>
			<li> | </li>
			<li><a href="#"/>About us</a></li>
		</ul>
	</div>
</div>

</body>
</html>