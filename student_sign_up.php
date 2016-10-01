<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CardMatch Main</title>
</head>

<div id="Banner">
	<p><h1>CARDMATCH</h1></p>
	<p><h3>The learning game</h3></p>
</div>

<body>

<h2>Sign Up</h2>
<form action="studentconnect.php" method="post">
	<div id="Student">
		<p><label for="username">Username</label></p>
		<p><input type="text" id="username" name="username" placeholder="Username"/></p>

		<p><label for="password">Password</label></p>
		<p><input type="text" id="password" name="password" placeholder="Password"/></p>

		<p><label for="teacher_id">TeacherID</label></p>
		<p><input type="text" id="teacher_id" name="teacher_id" placeholder="Eg. 4410615"/></p>

	</div>
			
	<p><input type="submit" value="Sign Up"></p>
	<p><a href="login.html">Back</a></p>
</form>

	


<footer>
</footer>

</body>
</html>