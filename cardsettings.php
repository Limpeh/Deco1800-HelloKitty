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
		echo "<div id='idnum'>".$_SESSION['ID']."</div>";
	} 
	
?>

<DOCTYPE! HTML>
<html>
	<head>
	<meta charset = "UTF-8">
		<title>CardMatch</title>
		<link href="style.css" type="text/css" rel="stylesheet"/>
		<link href="https://fonts.googleapis.com/css?family=Baloo+Tamma" rel="stylesheet">
		<script src="http://code.jquery.com/jquery-1.12.3.js" type="text/javascript"></script>
	</head>
	<body>
		<div id="banner">
			<h1>CARDMATCH</h1>
			<h3>The learning game</h3>
		</div>

		<div id="settings">
			<h2>Stage Settings</h2>
				<div class="wrap" id="show">
				</div>
			<form action="#" id="Test">
				<button class="settingsButton" type="submit" id="tstbtn">test</button>
			</form>
			<form action ="#" id="confirm">
				<select name= "cardno">
					<option value="6">6</option>
					<option value="8">8</option>
					<option value="10">10</option>
				</select>
				<select name = "time">
					<option value="60">60s</option>
					<option value="90">90s</option>
					<option value="120">120s</option>
				</select>
				<input class="settingsButton" type="submit" value="Confirm"></input>
			</form>
			<form action="#" id="searchTrove">
				<input id="searchTerm" type="text">
				<button class="settingsButton" type="submit" id="searchbtn">Search</button>
			</form>
		</div>
		<div class="wrap">
			<form action="#" id="Images">
			</form>
			<form action="#" id="Articles">
			</form>
			<script src="cardmatch.js" type="text/javascript"></script> 
		</div>
	</body>
</html>