<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	if ( $_POST["user_id"] != "" && $_POST["food_id"] != "" && $_POST["eating_meal"] != "" && $_POST["eating_date"] != "") {
		echo "eatting.";
		$user_id = intval($_POST["user_id"]);
		$food_id = intval($_POST["food_id"]);
		$eating_meal = intval($_POST["eating_meal"]);

	    $add_eatting_sql = 'INSERT INTO eating (user_id, food_id, eating_date, eating_meal)
	    					VALUES (' . $user_id . ', ' . $food_id . ', "' . $_POST["eating_date"]. '", ' . $eating_meal . ')';
	    $result_add_eatting = mysqli_query($dbconnect,$add_eatting_sql);
		// echo $add_eatting_sql;

	    if ($result_add_eatting) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($result_add_eatting);
		}
	}
	else {
		echo "not isset eatting";
	}
	
}
else {
	echo "not post";
}


?>