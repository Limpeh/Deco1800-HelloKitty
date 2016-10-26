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
	<title>About Us</title>
	<link href="style.css" type="text/css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Baloo+Tamma" rel="stylesheet">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
</head>
<body>
<div id="banner">
		<a href="login.html"><h1>CARDMATCH</h1></a>
		<h3>The Learning Game</h3>
</div>

<body>
<a href="teacher_main.php"><img src="./image/home.png" height="50px"></a></p>
<div id="instructions">
<h1>About CardMatch</h1>
<p>Our group intends to construct a web-based application that is geared towards providing
an interactive and fun way for students to learn about history, specifically with regards
to important events that throughout Australian history. Currently, the history education 
materials provided to students fail to provide an enriching experience to students 
especially in the area of Australian History as it is heavy on text and has few events 
that would spark an interest in young audiences. To remain relevant to the tech-savvy 
youth of today and improve teaching efficiency, schools commonly utilise multiple tools 
at their disposal to improve student understanding with relation to the subject at 
hand. In the area of Australian History we found that this area has remained relatively 
stagnant. </p>

<h1>Team Members</h1>
<div class="teampic">
	<p><h3>Sim Wei Jie</h3></p>
	<p><img src="./image/sim wei.gif" alt="Sim Wei Jie" height="100px" width="100px"></p>
</div>
<div class="teampic">
	<p><h3>Kurt Mahaffey</h3></p>
	<p><img src="./image/kurt.gif" alt="Kurt" height="100px" width="100px"></p>
</div>
<div class="teampic">
	<p><h3>Ben Wilde</h3></p>
	<p><img src="./image/ben.gif" alt="Ben" height="100px" width="100px"></p>
</div>
<div class="teampic">
	<p><h3>Jowin Yien</h3></p>
	<p><img src="./image/jowin.gif" alt="Jowin" height="100px" width="100px"></p>
</div>
<p><a class="button" href="student_main.php">Back</a></p>
</div>


<div id="footer">
	<ul>	
		<li><a href="teacher_contact.php"/>Contact us</a></li>
		<li> | </li>
		<li><a href="about_teacher"/>About us</a></li>
	</ul>
</div>
</body>
</html>