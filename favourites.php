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
		echo "<div id='userwelcome'>".$_SESSION['username']."</div>"; 
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
		<script src="http://code.jquery.com/jquery-1.12.3.js" type="text/javascript"></script>
		<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
		<!--To add link to stylesheet and Javascript-->
	</head>
	<body>
	<div id="banner">
			<a href = "student_main.php"><h1>CARDMATCH</h1></a>
			<h3>The learning game</h3>
	</div>
	<div id="favourites">
		<h2>Card Collection</h2>
		<h3>Here are the matches you have made. Click on any to find out more.</h3>
		<a class="button" href="student_main.php">Back</a>
	</div>
	<div class="wrap" id="show"></div>
	<form action="#" id="Test">
	</form>
	<div id="links"></div>
	<script src="favescreen.js" type="text/javascript"></script>
	</body>
</html>