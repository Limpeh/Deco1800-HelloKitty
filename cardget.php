<?php
session_start();
include 'dbhconnect.php';

$teacherID = intval($_POST['teacherID']);

$sql = "SELECT * FROM Teacher_Cards WHERE teacherID =$teacherID";
$result = mysqli_query($conn, $sql);
if (!result) {
	echo mysqli_error($conn);
}

$array = [];
while( $row = mysqli_fetch_row($result)){
    array_push( $array, $row );
}

echo json_encode( $array );
/*header("Location: cardmatch.js");*/
   
?>