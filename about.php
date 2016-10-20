<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>About Us</title>
	<link href="https://fonts.googleapis.com/css?family=Baloo+Tamma" rel="stylesheet">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
</head>
<body>
<div id="banner">
		<a href="login.html"><h1>CARDMATCH</h1></a>
		<h3>The Learning Game</h3>
		
		<div class="dropdown">
			<button onclick="myFunction()" class ="dropbtn">Menu</button>
			<div id ="myDropdown" class ="dropdown-content">
				<a href="student_main.html">Home</a>
				<a href="about.html">About Us</a>
				<a href="#">Contact Us</a>
			</div>
		</div>
	</div>

<body>

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
<p><h3>Sim Wei Jie</h3></p>
<p><img src="./images/sim.jpg" alt="Sim Wei jie" height="100px" width="100px"></p>
<p><h3>Kurt Mahaffey</h3></p>
<p><img src="./images/kurt.jpg" alt="Kurt" height="100px" width="100px"></p>
<p><h3>Ben Wilde</h3></p>
<p><img src="./images/ben.jpg" alt="ben" height="100px" width="100px"></p>

<footer>
</footer>
	<script>
	function myFunction() {
    	document.getElementById("myDropdown").classList.toggle("show");
	}

	window.onclick = function(event) {
 	 if (!event.target.matches('.dropbtn')) {

    	var dropdowns = document.getElementsByClassName("dropdown-content");
    	var i;
    	for (i = 0; i < dropdowns.length; i++) {
      	var openDropdown = dropdowns[i];
      	if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      	}
    	}
  	}
	}
	</script>

</body>
</html>

