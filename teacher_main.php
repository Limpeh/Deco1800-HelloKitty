<?php
	session_start();
	if (!isset($_SESSION['auth'])) {
		echo "you shouldn't be here";
		header('location: teacherlogin.php'); 
	} else {
		if ($_SESSION['auth'] == false) {
		echo $_SESSION['auth'];
			header('location: teacherlogin.php'); 
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

<?php
	if (isset($_SESSION['auth'])){
		echo $_SESSION['auth'];
	} else {
		echo "You are not logged in!";
	}
?>

<div id="wrapper">
	<div id="banner">
		<a href="teacher_main.php"><h1>CARDMATCH</h1></a>
		<p><h3>The Learning Game</h3></p>
	</div>
	
	<div id="teacher_main">
		<div><a class="button" href="cardsettings.php">Stage Customization</a></div>
		<div><a class="button" href="teacher_instructions.php">Instructions</a></div>
		<div><a href="logoutconnect.php">Exit</a></div>
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