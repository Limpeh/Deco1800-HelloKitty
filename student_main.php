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
	<title>CardMatch Main</title>
	<link href="style.css" type="text/css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Baloo+Tamma" rel="stylesheet">
</head>

<body>

<div id="wrapper">
<a href="student_main.php"><img src="./image/home.png" height="50px"></a></p>
	<div id="banner">
		<a href = "student_main.php"><h1>CARDMATCH</h1></a>
		<p><h3>The Learning Game</h3></p>
		
	</div>
	
	
	
	<div id="student_main">
		<div><a class="button" href="stage.php">Play</a></div>
		<div><a class="button" href="favourites.php">Favourites</a></div>
		<div><a class="button" href="student_instructions.php">Instructions</a></div>
		<div><a class="button" href="logoutconnect.php">Log Out</a></div>
	</div>

	
	
</div>
<footer id="footer">
	<ul>	
		<li><a href="contact.php"/>Contact us</a></li>
		<li> | </li>
		<li><a href="about.php"/>About us</a></li>
	</ul>
</footer>
</body>
</html>