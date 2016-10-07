<?php
session_start();
include 'dbhconnect.php';

 
$keyword = $_POST['keyword'];
$teacherID = intval($_POST['teacherID']);
$text = $_POST['texta'];
$image = $_POST['imagea'];
$textlink = $_POST['textlink'];

$sql = "INSERT INTO Teacher_Cards (keyword,teacherID,text, image, textlink) VALUES ('$keyword','$teacherID','$text', '$image', '$textlink')";
$result = mysqli_query($conn, $sql);
if (!result) {
	echo mysqli_error($conn);
}

echo $keyword;

/*header("Location: cardmatch.js");*/
   
?>