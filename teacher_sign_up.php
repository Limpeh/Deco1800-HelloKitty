<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<title>CardMatch Main</title>
<link href="style.css" type="text/css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Baloo+Tamma" rel="stylesheet">
</head>



<body>

<div id="wrapper">
	<div id="banner">
		<a href="index.php"><h1>CARDMATCH</h1></a>
		<p><h3>The Learning Game</h3></p>
	</div>
	

	<form action = "teacherconnect.php" method ="post">
	<div id="sign_in">
		<h2>Sign Up</h2>
		<p><label for="username">Username</label></p>
		<p><input type="text" id="username" name="username" placeholder="Username"/></p>

		<p><label for="password">Password</label></p>
		<p><input type="password" id="password" name="password" placeholder="Password"/></p>
		<p>You will be provided with a teacher ID for your students to access.</p>
		<p><input class="loginButton" type="submit" value="Submit"></p>
		<p><a class="loginButton" href="index.php">Back</a></p>
	</div>
	</form>
	

	
</div>
<div id="footer">
	<ul>	
		<li><a href="#"/>Contact us</a></li>
		<li> | </li>
		<li><a href="student_instructions.php"/>About us</a></li>
	</ul>
</div>
</body>
</html>