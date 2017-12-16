<?php
	//Init variables
	$servername = "localhost";
	$username = "root";
 	$password = "";
 	$dbname = "dormstop";

 	//Create connection & Check
	$connect = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed.");

	//Setup for get unicode data type(Vietnamese)
	mysqli_set_charset($connect, 'utf8');
?>