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
	</head>
	<body>
	<a href="student_main.php"><img src="./image/home.png" height="50px"></a></p>
	<div id="banner">
			<a href="student_main.php"><h1>CARDMATCH</h1></a>
			<h3>The learning game</h3>
	</div>
	
	
	
	<div id="game">
		<h2>Stage</h2>
		<div id="timer">
			<h2>Time remaining:</h2>
			<h1 id="clock">60</h1>
		</div>
		<div id="scoreCount">
			<h2>Matches remaining:</h2>
			<h1 id="score">3</h1>
		</div>
	</div>
	<script>
		var timeCount = 60;
		var counter = setInterval(timer, 1000);
	
		function timer(){
			timeCount -=1;
			if(timeCount == 0){
				clearInterval(counter);
				window.location='stagelose.php'
			}
			
			document.getElementById('clock').innerHTML = timeCount;
		}
	</script>
	<div id="gamecards">
	<div class="wrap" id="show"></div>
	<form action="#" id="Test">
	</form>
	</div>
	<script src="cardgame.js" type="text/javascript"></script> 
	</body>
</html>