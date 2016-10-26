<?php
session_start();
include 'dbhconnect.php';

$username = $_POST['username'];

$sql = "SELECT * FROM Student_Cards WHERE username = '$username'";
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