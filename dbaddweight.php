<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["user_weight_weight"])) {

	if ( $_POST["user_weight_weight"] != ""  ){

		$user_weight_weight = $_POST["user_weight_weight"];



	    $add_user_weight_sql = 'INSERT INTO user_weight ( user_weight_weight) 

	         VALUES (' . $user_weight_weight . ')';


	    $result_user_weight_exer = mysqli_query($dbconnect,$add_user_weight_sql);
		// echo $add_eatting_sql;

	    if ($result_add_user_weight) {
		    // echo "Saved successfully";
		} else {
		    // echo "Error: " . $sql . "<br>" . mysqli_error($result_add_food);
		}
	}
	else {
		// echo "not isset food";
	}
	
}
else {
	// echo "not post";
}


?>