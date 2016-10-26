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
		echo "<div id='userwelcome'> Welcome ".$_SESSION['username']."&nbsp |</div>"; 
		echo "<div id='idnum'> Connected with teacher ID: ".$_SESSION['ID']."</div>";
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
		/*echo $_SESSION['auth'];*/
	} else {
		echo "You are not logged in!";
	}
?>

<div id="wrapper">
<a href="teacher_main.php"><img src="./image/home.png" height="50px"></a></p>
	<div id="banner">
		<a href="teacher_main.php"><h1>CARDMATCH</h1></a>
		<p><h3>The Learning Game</h3></p>
	</div>
	
	<div id="teacher_main">
		<div><a class="button" href="cardsettings.php">Stage Customization</a></div>
		<div><a class="button" href="teacher_instructions.php">Instructions</a></div>
		<div><a class="button" href="logoutconnect.php">Log Out</a></div>
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