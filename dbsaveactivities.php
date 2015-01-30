<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	if ( $_POST["user_id"] != "" && $_POST["exer_id"] != "" && $_POST["activities_date"] != "" && $_POST["activities_duration"] != "") {
		$u = intval($_POST["user_id"]);
		$e = intval($_POST["exer_id"]);

	    $add_exer_sql = 'INSERT INTO activities (user_id, exer_id, activities_date, activities_duration)
	    					VALUES (' . $u . ', ' . $e . ', "' . $_POST["activities_date"]. '", "' . $_POST["activities_date"]. '")';
	    $result_add_exer = mysqli_query($dbconnect,$add_exer_sql);
		// echo $add_eatting_sql;

	    if ($result_add_exer) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($result_add_exer);
		}
	}
	else {
		echo "not isset exer";
	}
	
}
else {
	echo "not post";
}


?>