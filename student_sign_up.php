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

<h2>Sign Up</h2>
<form action="studentconnect.php" method="post">
	<div id="Student">
		<p><label for="username">Username</label></p>
		<p><input type="text" id="username" name="username" placeholder="Username"/></p>

		<p><label for="password">Password</label></p>
		<p><input type="password" id="password" name="password" placeholder="Password"/></p>

		<p><label for="teacher_id">TeacherID</label></p>
		<p><input type="text" id="teacher_id" name="teacher_id" placeholder="Eg. 4410615"/></p>

	</div>
			
	<p><input type="submit" value="Sign Up"></p>
</form>
	<p><a href="index.php">Back</a></p>

	


	
</div>
<footer id="footer">
	<ul>	
		<li><a href="#"/>Contact us</a></li>
		<li> | </li>
		<li><a href="#"/>About us</a></li>
	</ul>
</footer>
</body>
</html>