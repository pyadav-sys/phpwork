<?php

	$hostname="loclhost";
	$dbname="dbname";
	$dbpass="root";
	$dbuser="root";

	$cnn=mysqli_connect($hostname,$dbuser,$dbpass) or die("Server Not Found");
	mysqli_select_db($cnn,$dbname) or die("Database not found here");



?>
