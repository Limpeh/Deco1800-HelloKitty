<?php
session_start();
include 'dbhconnect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * 
FROM Teacher
WHERE Username =$username AND Password = $password";
$result = mysqli_query($conn, $sql);

if (empty($result)){
	echo "Incorrect username or password";
}
else {
	$array = [];
while( $row = mysqli_fetch_row($result)){
		array_push( $array, $row );
	}
	$_SESSION['id'] = $row['id'];
	echo json_encode( $array );
}

//header("Location:teacher_main.html")

?>