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
	<div id="gameover">
		<h2>You ran out of time!</h2>
		<a class="button" href="stage.php">Try again</a>
	</div>
	</body>
</html>