<?php
	$servername = "sql111.epizy.com";
	$username = "epiz_28551898";
	$password = "SX4VSolGQ4d";
	$database = "epiz_28551898_rajibofficial";
	$conn = mysqli_connect($servername, $username, $password, $database);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>