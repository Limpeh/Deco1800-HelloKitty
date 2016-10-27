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
	<a href="teacher_main.php"><img src="./image/home.png" height="50px"></a></p>
	<div id="banner">
		<a><h1>CARDMATCH</h1></a>
		<p><h3>The Learning Game</h3></p>
	</div>
	
	<h2>Instructions</h2>
	<div id="instructions">
		<ul>
			<li>Enter keyword of interested topic</li>
			<li>Select the cards you are interested in</li>
			<li>Save the stage</li>
		</ul>
	</div>
	
	

	
	
</div>
<div id="footer">
	<ul>	
		<li><a href="teacher_contact.php"/>Contact us</a></li>
		<li> | </li>
		<li><a href="about.php"/>About us</a></li>
	</ul>
</div>

</body>
</html>