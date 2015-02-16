<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	if ( $_POST["user_id"] != "" && $_POST["user_weight_weight"] != "" && $_POST["user_weight_id"] != "" && $_POST["user_weight_date"] != "") {
		$user_id = intval($_POST["user_id"]);
		$user_weight_id = intval($_POST["user_weight_id"]);
		$user_weight_date = intval($_POST["user_weight_date"]);
		$user_weight = $_POST["user_weight_weight"];

	    $add_weight_sql = 'INSERT INTO user_weight (user_id, user_weight_id, user_weight_date, user_weight_weight)
	    					VALUES (' . $user_id . ', ' . $user_weight_id . ', "' . $_POST["user_weight_date"]. '", ' . $user_weight_weight . ')';
	    $result_add_weight = mysqli_query($dbconnect,$add_weight_sql);
		// echo $add_eatting_sql;

	    if ($result_add_weight) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($result_add_weight);
		}
	}
	else {
		echo "not isset weight";
	}
	
}
else {
	echo "not post";
}


?>