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
		echo "<div id='idnum'> Connected with teacher ID: ".$_SESSION['ID']."</div>";
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
	<a href="teacher_main.php"><img src="./image/home.png" height="50px"></a></p>
		<div id="banner">
			<a href = "teacher_main.php"><h1>CARDMATCH</h1></a>
			<h3>The learning game</h3>
		</div>
		

		<div id="settings">
			<h2>Stage Settings</h2>
			<!--<div class="wrap" id="show">
			</div>-->
			<!-- <form action="#" id="Test">
				<button class="button" type="submit" id="tstbtn">test</button>
			</form> -->
			<h3>Enter a search term to generate cards. Click on the two most appropriate cards. (Make at least 3 pairs)</h3>
			<form class="search" action="#" id="searchTrove">
				<input class="searchBar" id="searchTerm" type="text"  placeholder="Enter a keyword"/>
				<button class="button" type="submit" id="searchbtn">Search</button>
			</form>
			<h3>Click confirm to add cards to the stage.</h3>
			<form action ="#" id="confirm">
				<!--<select name= "cardno">
					<option value="6">6</option>
					<option value="8">8</option>
					<option value="10">10</option>
				</select>
				<select name = "time">
					<option value="60">60s</option>
					<option value="90">90s</option>
					<option value="120">120s</option>
				</select>-->
				<input class="button" type="submit" value="Confirm"></input>
			</form>
		</div>
		
		<div class="wrap">
			<form action="#" id="Images">
			</form>
			<form action="#" id="Articles">
			</form>
			<script src="cardmatch.js" type="text/javascript"></script> 
		</div>
		<div id="space"></div>
		<div id="settings">
			<p><a class="button" href="teacher_main.php">Back</a></p>
		</div>
		<div id="space"></div>
		<div id="space"></div>
		<div id="space"></div>
		<div id="footer">
			<ul>	
				<li><a href="#"/>Contact Us</a></li>
				<li> | </li>
				<li><a href="#"/>About Us</a></li>
			</ul>
		</div>
	</body>
</html>