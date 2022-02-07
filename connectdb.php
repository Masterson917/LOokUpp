<?php

$servername = "localhost";



$conn = mysqli_connect("localhost", "root", "", "lookupp");

if(!$conn){
	die("connection failed: ".mysqli_connect_error());
}

?>
