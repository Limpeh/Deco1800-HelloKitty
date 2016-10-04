<?php
session_start();
include 'dbhconnect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * 
FROM Student, Teacher
WHERE username ='$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)){
	echo "Incorrect username or password";
}
else {
	$_SESSION['id'] = $row['id'];
}

header("Location:")

?>