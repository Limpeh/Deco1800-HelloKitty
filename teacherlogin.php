<?php
	session_start(); 
	if(isset($_SESSION['auth']))	 {
		if ($_SESSION['auth'] == true) {
			header("location: teacher_main.html");
		}
	}
?>

<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<title>CardMatch Login</title>
<link href="style.css" type="text/css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Baloo+Tamma" rel="stylesheet">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
</head>

<body>
<div id="wrapper">
	<div id="Banner">
		<p><h1>CARDMATCH</h1></p>
		<p><h3>The learning game</h3></p>
	</div>
	<div id="pop_background"></div>
	<div id="pop_box">
		<p>Sign up as a: </p>
			<ul>
			<li><a href="student_sign_up.php">Student</a></li>
			<li><a href="teacher_sign_up.php">Teacher</a></li>
		</ul>
	</div>
	<div id="sign_in">
		<p><h2>Teacher Login</h2></p>
		<form id="login" action="teacherloginconnect.php" method="POST">
		
		<p><label for="username">Username</label></p>
		<p><input type="text" id="username" name="logindets" placeholder="Username" class="login" /></p>
		
		<p><label for="password">Password</label></p>
		<p><input type="password" id="password" name="logindets" placeholder="Password" class="login"/></p>
		<p><input type="submit" value="Log in"></p>
	
		</form>
	
		<p>New to Cardmatch? Click here to sign up!</p>
		<p><input id="signup" type="submit" value="Sign Up"></p>
		<a href="index.php">Student Login</a>
	</div>


	<div id="footer">
		<ul>	
			<li><a href="#"/>Contact Us</a></li>
			<li><a href="#"/>About Us</a></li>
		</ul>
	</div>
	
</div>

</body>
</html>