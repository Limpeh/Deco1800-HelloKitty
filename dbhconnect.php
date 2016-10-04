<?php

$conn = mysqli_connect("localhost", "root", "9e5b926b94396813", "CardMatch");

if (!$conn) {
	die("Connection failed:" .mysqli_connect_error());
}

?>