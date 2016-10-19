<?php
session_start();
include 'dbhconnect.php';

$username = $_POST['username'];
$password = $_POST['password'];

echo $username." "; 
echo $password." "; 

$sql = "SELECT * FROM Student";

$result = mysqli_query($conn, $sql);
$_SESSION['auth'] = false; 

if (!$result) {
	echo "Error: ".mysqli_error($conn, $result);
}

 while ($row = mysqli_fetch_array($result)) 
 {
	 if($_POST['username'] == $row['Username'] && $_POST['password'] == $row['Password']) {
		     $_SESSION['username'] = $row['Username'];
			 $_SESSION['auth'] = true;
			 echo "User has logged in!";
			 break; 			 
	 }
 }

 header("Location:student_main.php")

/* 
if (!$row = mysqli_fetch_assoc($result)){
	echo "Incorrect username or password";
	$_SESSION['auth']= false; 
} */
/* else {
	echo $row['username']." ";
	$_SESSION['id'] = $row['id'];
	$_SESSION['username'] = $row['Username']; 
	$_SESSION['auth'] = true; 
} */

//header("Location:student_main.html");

?>