<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	if ( $_POST["user_id"] != "" && $_POST["exer_id"] != "" && $_POST["activities_date"] != "" && $_POST["activities_duration"] != "") {
		$user_id = intval($_POST["user_id"]);
		$exer_id = intval($_POST["exer_id"]);
		$activities_duration = intval($_POST["activities_duration"]);

	    $add_exer_sql = 'INSERT INTO activities (user_id, exer_id, activities_date, activities_duration)
	    					VALUES (' . $user_id . ', ' . $exer_id . ', "' . $_POST["activities_date"]. '", ' . $activities_duration . ')';
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