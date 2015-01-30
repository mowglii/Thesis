<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	if ( $_POST["weight"] != "" && $_POST["height"] != "" && $_POST["birth"] != "" && $_POST["gender"] != "" && $_POST["activity"] != "" && $_POST["weight_lose"] != "" && $_POST["mode"] != "" ) {

		$weight = intval($_POST["weight"]);
		$height = intval($_POST["height"]);
		$activity = (double)$_POST["activity"];
		$goal = (double)$_POST["weight_lose"];
		$mode = (double)$_POST["mode"];


	    $sql = 'INSERT INTO user (user_id, user_weight, user_height, user_birthday, user_gender, user_frequency, user_goal, user_mode)
	    		VALUES (null, ' . $weight . ', ' . $height . ', "' . $_POST["birth"] . '", "' . $_POST["gender"] . '", ' . $activity . ', ' . $goal . ', ' . $mode . ')';
	    $result = mysqli_query($dbconnect,$sql);

	    if ($result) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($result);
		}
	}
	else {
		echo "not isset info";
	}
	
}
else {
	echo "not post";
}

?>