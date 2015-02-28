<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["user_id"]) && isset($_POST["user_goal"])) {

	if ( $_POST["user_id"] != "" && $_POST["user_goal"] != "" && $_POST["user_frequency"] != "" && $_POST["user_mode"] != "" && $_POST["user_height"] != "" ) {

		$user_id = intval($_POST["user_id"]);
		$user_goal = (double)$_POST["user_goal"];
		$user_genduser_frequencyer = (double)$_POST["user_frequency"];
		$user_mode = (double)$_POST["user_mode"];
		$user_height = intval($_POST["user_height"]);
	

	    $save_setting_sql = 'UPDATE user SET user_goal='.$user_goal.', user_frequency='.$user_genduser_frequencyer.', user_mode='.$user_mode.', user_height='.$user_height.' 
	    						WHERE user_id='.$user_id;


	    $result_save_setting = mysqli_query($dbconnect,$save_setting_sql);
		// echo $add_eatting_sql;

	    if ($result_save_setting) {
		    // echo "Saved successfully";
		} else {
		    // echo "Error: " . $sql . "<br>" . mysqli_error($result_save_setting);
		}
	}
	else {
		// echo "not isset setting";
	}
	
}
else {
	// echo "not post";
}


?>