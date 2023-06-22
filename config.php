<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "indian_bank.sql";

	$conn = mysqli_connect("localhost", "root", "", "indian_bank.sql","3306");

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>