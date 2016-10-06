<?php

include 'dbhconnect.php';


/* define ('DB_NAME','CardMatch');
define ('DB_USER','root');
define ('DB_PASSWORD','');
define ('DB_HOST','localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
	die("Could not connect:" . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
	die ('Can\'t use ' . DB_NAME . ':' . mysql_error());
}
 */
 
$keyword = $_POST['keyword'];
$teacherID = $_POST['teacherID'];
$text = $_POST['texta'];
$image = $_POST['imagea'];
$textlink = $_POST['textlink'];

$sql = "INSERT INTO Teacher_Cards (keyword,teacherID,text, image, textlink) VALUES ('$keyword','$teacherID','$text', '$image', '$textlink')";
$result = mysqli_query($conn, $sql);

header("Location: cardmatch.js");
   

/* if (!mysql_query($sql)) {
	die("Error:" . mysql_error());
}

mysql_close();
?> */