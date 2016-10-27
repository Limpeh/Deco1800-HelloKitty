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
<div id="wrapper">
<a href="teacher_main.php"><img src="./image/home.png" height="50px"></a></p>
<div id="banner">
		<a href="login.html"><h1>CARDMATCH</h1></a>
		<h3>The Learning Game</h3>
</div>

<div id="instructions">
<h1>Contact Us</h1>

<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
	<div class="row">
		<label for="name">Your name:</label><br />
		<input id="name" class="input" name="name" type="text" value="" size="30" /><br />
	</div>
	<div class="row">
		<label for="email">Your email:</label><br />
		<input id="email" class="input" name="email" type="text" value="" size="30" /><br />
	</div>
	<div class="row">
		<label for="message">Your message:</label><br />
		<textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
	</div>
	<input class="button" id="submit_button" type="submit" value="Send email" />
	<p><button class="button" onclick="goBack()">Back</button></p>	
</form>	
	
</div>
</div>
<div id="space"></div>
<div id="footer">
	<ul>	
		<li><a href="contact.php"/>Contact us</a></li>
		<li> | </li>
		<li><a href="about.php"/>About us</a></li>
	</ul>
</div>
</body>
</html>