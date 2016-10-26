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
<DOCTYPE! html>
<html>
	<head>
		<meta charset = "UTF-8">
		<title>CardMatch</title>
		<link href="style.css" type="text/css" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css?family=Baloo+Tamma" rel="stylesheet">
		<!--To add link to stylesheet and Javascript-->
	</head>
	<body>
	<div id="banner">
			<h1>CARDMATCH</h1>
			<h3>The learning game</h3>
	</div>
	<div id="gamewin">
		<h2>Congratulations! You have found all of the matches.</h2>
		<h3>All the cards you have matched have been moved to your collection.</h3>
		<a class="button" href="student_main.php">Home</a>
		<a class="button" href="favourites.php">Card Collection</a>
	</div>
	</body>
</html>