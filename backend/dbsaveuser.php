<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["user_id"]) ) {

	if ( $_POST["user_id"] != "" 
		&& $_POST["user_weight"] != "" 
		&& $_POST["user_height"] != "" 
		&& $_POST["user_birthday"] != "" 
		&& $_POST["user_gender"] != ""
		&& $_POST["user_frequency"] != "" 
		&& $_POST["user_goal"] != "" 
		&& $_POST["user_mode"] != "" 
		) {

		$user_id = intval($_POST["user_id"]);
		$user_weight = intval($_POST["user_weight"]);
		$user_height = intval($_POST["user_height"]);
		$user_birthday = $_POST["user_birthday"];
		$user_gender = $_POST["user_gender"];
		$user_frequency = (double)$_POST["user_frequency"];
		$user_goal = (double)$_POST["user_goal"];
		$user_mode = (double)$_POST["user_mode"];


	    $save_user_sql = 'UPDATE user SET user_weight='.$user_weight.', user_height='.$user_height.', user_birthday="'.$user_birthday.'"
	    , user_gender="'.$user_gender.'", user_frequency='.$user_frequency.', user_goal='.$user_goal.', user_mode='.$user_mode.'

	         WHERE user_id='.$user_id;

	         // echo $save_user_sql;

	    $result_save_user= mysqli_query($dbconnect,$save_user_sql);
		// echo $add_eatting_sql;

	    if ($result_save_user) {
		    // echo "Saved successfully";

		} else {
		    // echo "Error: " . $sql . "<br>" . mysqli_error($result_save_food);
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