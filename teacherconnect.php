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
 
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO TEACHER (username,password) VALUES ('$username', '$password')";
$result = mysqli_query($conn, $sql);

header("Location: index.php");


/* if (!mysql_query($sql)) {
	die("Error:" . mysql_error());
}

mysql_close();
?> */