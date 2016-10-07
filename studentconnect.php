<?php

include 'dbhconnect.php';



$username = $_POST['username'];
$password = $_POST['password'];
$teacherid = $_POST['teacher_id'];

$sql = "INSERT INTO Student (username,password,teacherID) VALUES ('$username', '$password', '$teacher_id')";
$result = mysqli_query($conn, $sql);

header("Location: index.php");

?>