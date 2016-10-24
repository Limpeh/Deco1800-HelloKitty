<?php
session_start();
include 'dbhconnect.php';

 
$keyword = $_POST['keyword'];
$username = $_SESSION['username'];
$text = $_POST['texta'];
$image = $_POST['imagea'];
$textlink = $_POST['textlink'];

$sql = "INSERT INTO Student_Cards (keyword,username,text, image, textlink) VALUES ('$keyword','$username','$text', '$image', '$textlink')";
$result = mysqli_query($conn, $sql);
if (!result) {
	echo mysqli_error($conn);
}
if (result) {
echo $result;
}
/*header("Location: cardmatch.js");*/
   
?>