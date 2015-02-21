
<?php
	$servername = "localhost";

	// // localhost
	$username = "root";
	$password = "";
	$dbname = "thesis";

	// host div.in.th
	// $username = "divinth_thesis";
	// $password = "thesis0169";
	// $dbname = "divinth_thesis";

	//host su13540215
	// $username = "usmfngag";
	// $password = "x8rD1Hdk64";
	// $dbname = "usmfngag_blogWP";

	
	// Create connection
	$dbconnect = mysqli_connect($servername, $username, $password,$dbname);

	// Check connection
	if (!$dbconnect) {
	    die("Connection failed");
	} 

	if (!mysqli_set_charset($dbconnect,"utf8")) {
		// printf("charset", mysq)
	}




?>