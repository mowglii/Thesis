<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["food_id"])) {

	if ( $_POST["food_id"] != "" 
		&& $_POST["food_type"] != "" 
		&& $_POST["food_name"] != "" 
		&& $_POST["food_unit"] != "" 
		&& $_POST["food_weight"] != "" 
		&& $_POST["food_kcal"] != ""
		&& $_POST["food_fat"] != "" 
		&& $_POST["food_cholesterol"] != "" 
		&& $_POST["food_protein"] != "" 
		&& $_POST["food_carbohydrate"] != "" 
		&& $_POST["food_sugar"] != "" 
		&& $_POST["food_salt"] != "" 
		&& $_POST["food_vita"] != "" 
		&& $_POST["food_vitb1"] != "" 
		&& $_POST["food_vitb2"] != "" 
		&& $_POST["food_calcium"] != "" 
		&& $_POST["food_iron"] != ""
		&& $_POST["food_ref"] != "") {

		$food_id = intval($_POST["food_id"]);
		$food_type = $_POST["food_type"];
		$food_name = $_POST["food_name"];
		$food_unit = $_POST["food_unit"];
		$food_weight = intval($_POST["food_weight"]);
		$food_kcal = intval($_POST["food_kcal"]);
		$food_fat = intval($_POST["food_fat"]);
		$food_cholesterol = intval($_POST["food_cholesterol"]);
		$food_protein = intval($_POST["food_protein"]);
		$food_carbohydrate = intval($_POST["food_carbohydrate"]);
		$food_sugar = intval($_POST["food_sugar"]);
		$food_salt = intval($_POST["food_salt"]);
		$food_vita = intval($_POST["food_vita"]);
		$food_vitb1 = intval($_POST["food_vitb1"]);
		$food_vitb2 = intval($_POST["food_vitb2"]);
		$food_iron = intval($_POST["food_iron"]);
		$food_ref = $_POST["food_ref"];

	    $save_food_sql = 'UPDATE food SET food_type="'.$food_type.'", food_name="'.$food_name.'", food_weight='.$food_weight.', food_kcal='.$food_kcal.'
	         , food_fat='.$food_fat.', food_cholesterol='.$food_cholesterol.', food_protein='.$food_protein.', food_carbohydrate='.$food_carbohydrate.'
	         , food_sugar='.$food_sugar.', food_salt='.$food_salt.', food_vita='.$food_vita.', food_vitb1='.$food_vitb1.', food_vitb2='.$food_vitb2.'
	         , food_iron='.$food_iron.', food_unit="'.$food_unit.'", food_ref="'.$food_ref.'" 

	         WHERE food_id='.$food_id.' ';


	    $result_save_food = mysqli_query($dbconnect,$save_food_sql);
		// echo $add_eatting_sql;

	    if ($result_save_food) {
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