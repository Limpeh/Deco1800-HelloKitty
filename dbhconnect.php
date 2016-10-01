<?php

$conn = mysqli_connect("localhost", "root", "", "Cardmatch");

if (!$conn) {
	die("Connection failed:" .mysqli_connect_error());
}