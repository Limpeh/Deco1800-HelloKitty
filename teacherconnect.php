<?php

include 'dbhconnect.php';



 
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO Teacher (username,password) VALUES ('$username', '$password')";
$result = mysqli_query($conn, $sql);

header("Location: index.php");
   

?>