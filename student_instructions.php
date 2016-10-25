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
	
	<a href="student_main.php"><img src="./image/home.png" height="50px"></a></p>
	
	<h3>Student Instructions</h3>
	
		<ul>
			<li>Select 2 cards</li>
			<li>Ensure that the text matches the image</li>
			<li>Add the cards that interest you to your list of favourites!</li>
		</ul>
	
	
	

	
	
</div>
<div id="footer">
	<ul>	
		<li><a href="#"/>Contact us</a></li>
		<li> | </li>
		<li><a href="#"/>About us</a></li>
	</ul>
</div>
</body>
</html>