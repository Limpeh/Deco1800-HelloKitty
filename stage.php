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
	<meta http-equiv="refresh" content="60;gameover.html" />
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
	<div class="wrap" id="show">
	</div>
	<form action="#" id="Test">
	</form>
	<div id="game">
		<h2>Stage</h2>
		<div id="timer">
			<h2>Time remaining:</h2>
			<h1 id="clock">60</h1>
		</div>
	</div>
	<script>
		var time-count = 60;
		var counter = setInterval(timer, 1000);
	
		function timer(){
			time-count -=1;
			if(time-count == 0){
				clearInterval(counter);
				window.location='gameover.html'
			}
			
			document.getElementById('clock').innerHTML = time-count;
		}
	</script>
	<script src="cardmatch.js" type="text/javascript"></script> 
	<script src="stage.js" type="text/javascript"></script> 
	</body>
</html>