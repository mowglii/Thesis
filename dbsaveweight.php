<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	if ( $_POST["user_id"] != "" && $_POST["user_weight_weight"] != "" && $_POST["user_weight_date"] != "") {
		$user_id = intval($_POST["user_id"]);

		$user_weight_date = $_POST["user_weight_date"];
		$user_weight_weight = $_POST["user_weight_weight"];

	    $add_weight_sql = 'INSERT INTO user_weight (user_weight_date, user_weight_weight, user_id)
	    					VALUES ("' . $_POST["user_weight_date"]. '", ' . $user_weight_weight . ',' . $user_id . ')';
	    echo $add_weight_sql;
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
	echo "not post save weight";
}


?>